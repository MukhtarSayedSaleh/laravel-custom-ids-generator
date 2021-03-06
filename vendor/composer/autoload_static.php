<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38dc47aa16955bedd4f952761937ee4d
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MuktarSayedSaleh\\LaravelCustomIds\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MuktarSayedSaleh\\LaravelCustomIds\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit38dc47aa16955bedd4f952761937ee4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit38dc47aa16955bedd4f952761937ee4d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit38dc47aa16955bedd4f952761937ee4d::$classMap;

        }, null, ClassLoader::class);
    }
}
