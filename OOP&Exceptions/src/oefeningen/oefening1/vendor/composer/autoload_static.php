<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb47d577878d656fffd41a9f05c96f05
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'workers\\' => 8,
        ),
        't' => 
        array (
            'tools\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'workers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/workers',
        ),
        'tools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tools',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb47d577878d656fffd41a9f05c96f05::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb47d577878d656fffd41a9f05c96f05::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb47d577878d656fffd41a9f05c96f05::$classMap;

        }, null, ClassLoader::class);
    }
}