<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e723d0717e0827a8bfd6911d23bd816
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Asika\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Asika\\' => 
        array (
            0 => __DIR__ . '/..' . '/asika/pdf2text/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e723d0717e0827a8bfd6911d23bd816::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e723d0717e0827a8bfd6911d23bd816::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e723d0717e0827a8bfd6911d23bd816::$classMap;

        }, null, ClassLoader::class);
    }
}
