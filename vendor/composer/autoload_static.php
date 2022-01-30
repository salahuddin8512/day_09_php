<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc97c12c849b356ed0d4ccf251d765be5
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc97c12c849b356ed0d4ccf251d765be5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc97c12c849b356ed0d4ccf251d765be5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc97c12c849b356ed0d4ccf251d765be5::$classMap;

        }, null, ClassLoader::class);
    }
}
