<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd20c43242450781d7a0a5a8a6837e3cf
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/class',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd20c43242450781d7a0a5a8a6837e3cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd20c43242450781d7a0a5a8a6837e3cf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd20c43242450781d7a0a5a8a6837e3cf::$classMap;

        }, null, ClassLoader::class);
    }
}