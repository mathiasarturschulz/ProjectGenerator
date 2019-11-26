<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e6bb8e8bbf3fadc39306c29e3a38a86
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'helpers\\' => 8,
        ),
        'g' => 
        array (
            'generator\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/helpers',
        ),
        'generator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/generator',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e6bb8e8bbf3fadc39306c29e3a38a86::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e6bb8e8bbf3fadc39306c29e3a38a86::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
