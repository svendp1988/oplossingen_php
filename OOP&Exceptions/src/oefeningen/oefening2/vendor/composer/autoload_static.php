<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2173b81083e59306e69f81631ffeb58
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Util\\' => 5,
        ),
        'E' => 
        array (
            'Exceptions\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Util\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Util',
        ),
        'Exceptions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Exceptions',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2173b81083e59306e69f81631ffeb58::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2173b81083e59306e69f81631ffeb58::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf2173b81083e59306e69f81631ffeb58::$classMap;

        }, null, ClassLoader::class);
    }
}