<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd6eb49b7011aa630ee73c3f292cecfd
{
    public static $prefixLengthsPsr4 = array (
        'g' => 
        array (
            'giorgiosaud\\tasaRemesas\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'giorgiosaud\\tasaRemesas\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd6eb49b7011aa630ee73c3f292cecfd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd6eb49b7011aa630ee73c3f292cecfd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
