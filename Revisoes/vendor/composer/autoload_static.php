<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf5afa0f542a2b4b213a224986cd9742
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Revisoes\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Revisoes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf5afa0f542a2b4b213a224986cd9742::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf5afa0f542a2b4b213a224986cd9742::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
