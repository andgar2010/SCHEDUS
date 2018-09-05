<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92d79bd04586c75730c19136a3945b28
{
    public static $files = array (
        'ce89ac35a6c330c55f4710717db9ff78' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'ComponentInstaller' => 
            array (
                0 => __DIR__ . '/..' . '/robloach/component-installer/src',
            ),
        ),
        'A' => 
        array (
            'Assetic' => 
            array (
                0 => __DIR__ . '/..' . '/kriswallsmith/assetic/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92d79bd04586c75730c19136a3945b28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92d79bd04586c75730c19136a3945b28::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit92d79bd04586c75730c19136a3945b28::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
