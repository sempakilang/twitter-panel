<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30fc392707eb401492a51d07d76880a6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit30fc392707eb401492a51d07d76880a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30fc392707eb401492a51d07d76880a6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
