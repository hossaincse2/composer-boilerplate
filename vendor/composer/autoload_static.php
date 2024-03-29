<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd94cd3f6e433110c914625b07dcea059
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tests\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'SebastianBergmann\\Timer\\Exception' => __DIR__ . '/..' . '/phpunit/php-timer/src/Exception.php',
        'SebastianBergmann\\Timer\\RuntimeException' => __DIR__ . '/..' . '/phpunit/php-timer/src/RuntimeException.php',
        'SebastianBergmann\\Timer\\Timer' => __DIR__ . '/..' . '/phpunit/php-timer/src/Timer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd94cd3f6e433110c914625b07dcea059::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd94cd3f6e433110c914625b07dcea059::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd94cd3f6e433110c914625b07dcea059::$classMap;

        }, null, ClassLoader::class);
    }
}
