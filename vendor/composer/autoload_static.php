<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1bb43115e39d8ee43fc6de4886865ee
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'site\\' => 5,
        ),
        'g' => 
        array (
            'gnatty\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'site\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src-site',
        ),
        'gnatty\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/gnatty',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1bb43115e39d8ee43fc6de4886865ee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1bb43115e39d8ee43fc6de4886865ee::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}