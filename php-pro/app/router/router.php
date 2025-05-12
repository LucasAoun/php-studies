<?php

function routes(){
    return require 'routes.php';
}

function hasMatchUriInRoutes($routes, $uri){
    if(array_key_exists($uri, $routes)){
        return [$uri => $routes[$uri]];
    }
    return [];
}

function regularExpressionMatchArrayRoutes($routes, $uri){
    $matchedUri = array_filter($routes, function($route) use ($uri){
        $regex = str_replace('/', '\/', ltrim($route, '/'));
        return preg_match("/^$regex$/", ltrim($uri, '/'));
    }, ARRAY_FILTER_USE_KEY);
    return $matchedUri;
}

function getParamsFromUri($matchedUri,  $uri){
    if(!empty($matchedUri)){
        $matchedUri = array_keys($matchedUri)[0];
        $params = array_diff(
            explode('/', ltrim($uri, '/')),
            explode('/', ltrim($matchedUri, '/'))
        );
        return $params;
    }
    return [];
}

function FormatParams($uri ,$params){
    $uri = explode('/',  ltrim($uri, '/'));
    $paramsData = [];
    foreach ($params as $index => $param){
        $paramsData[$uri[$index - 1 ]] = $param;
    }
    return $paramsData;

}

function router(){
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $routes = routes();

    $matchedUri = hasMatchUriInRoutes($routes, $uri);
    if(empty($matchedUri)){
        $matchedUri = regularExpressionMatchArrayRoutes($routes, $uri);
        $params = getParamsFromUri($matchedUri, $uri);
        $params = FormatParams($uri, $params);
        dd($params['user']);
    }
   
    var_dump($matchedUri);
    die();
}