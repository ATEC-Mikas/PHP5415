<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit292c51db9c73d2a6b1c101b69b8e24b0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Atec\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Atec\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit292c51db9c73d2a6b1c101b69b8e24b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit292c51db9c73d2a6b1c101b69b8e24b0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}