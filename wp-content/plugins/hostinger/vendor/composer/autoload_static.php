<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc71d81507d3bebaccd96258bf9448607
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hostinger\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hostinger\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc71d81507d3bebaccd96258bf9448607::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc71d81507d3bebaccd96258bf9448607::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc71d81507d3bebaccd96258bf9448607::$classMap;

        }, null, ClassLoader::class);
    }
}
