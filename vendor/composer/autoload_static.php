<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit81937966089a8b5104fc4e9e5387442a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit81937966089a8b5104fc4e9e5387442a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit81937966089a8b5104fc4e9e5387442a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
