<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3abe6d1a5967d55190d35a111b11ce5a
{
    public static $files = array (
        '35265b242fa0ee2327253548eaf34334' => __DIR__ . '/../..' . '/app/helpers/constants.php',
        'eece1320d165042ca3e7d9614aefd451' => __DIR__ . '/../..' . '/app/router/router.php',
        '28d42c5bc117858b3ea8073d900344c6' => __DIR__ . '/../..' . '/app/helpers/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3abe6d1a5967d55190d35a111b11ce5a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3abe6d1a5967d55190d35a111b11ce5a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3abe6d1a5967d55190d35a111b11ce5a::$classMap;

        }, null, ClassLoader::class);
    }
}
