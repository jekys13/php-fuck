<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a88ce88d8c2ebd044d797a7361f4980
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jekys\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jekys\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a88ce88d8c2ebd044d797a7361f4980::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a88ce88d8c2ebd044d797a7361f4980::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}