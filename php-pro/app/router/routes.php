<?php

return [
    '/' => 'HomeController@index',
    '/user/create' => 'UserController@create',
    '/user/[a-z0-9]+' => 'UserController@show',
    '/user/[a-z0-9]+/name/[a-z]+' => 'UserController@showWithName',
];