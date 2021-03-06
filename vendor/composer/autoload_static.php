<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit35c33b1b1e66554af9459fff4d59413b
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kasparsd\\MiniSheets\\' => 20,
        ),
        'P' => 
        array (
            'PLContentAuditExporter\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kasparsd\\MiniSheets\\' => 
        array (
            0 => __DIR__ . '/..' . '/kasparsd/mini-sheets-php/src',
        ),
        'PLContentAuditExporter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit35c33b1b1e66554af9459fff4d59413b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit35c33b1b1e66554af9459fff4d59413b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
