<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20cd70a502375cd01ae92c95ef22c786
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hack4mer\\Diffon\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hack4mer\\Diffon\\' => 
        array (
            0 => __DIR__ . '/..' . '/hack4mer/diffon/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit20cd70a502375cd01ae92c95ef22c786::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit20cd70a502375cd01ae92c95ef22c786::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
