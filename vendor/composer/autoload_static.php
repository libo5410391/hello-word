<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4c65725971a0065957111d4417ecfba
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4c65725971a0065957111d4417ecfba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4c65725971a0065957111d4417ecfba::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
