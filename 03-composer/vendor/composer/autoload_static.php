<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b9313843f83c9b187aab65ae7f547bb
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Colors\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Colors\\' => 
        array (
            0 => __DIR__ . '/..' . '/mistic100/randomcolor/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b9313843f83c9b187aab65ae7f547bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b9313843f83c9b187aab65ae7f547bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b9313843f83c9b187aab65ae7f547bb::$classMap;

        }, null, ClassLoader::class);
    }
}
