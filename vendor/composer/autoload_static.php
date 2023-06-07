<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d70134db2c957fa0df3a01002e457e1
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DaniloSampaio\\Aluraplay\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DaniloSampaio\\Aluraplay\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d70134db2c957fa0df3a01002e457e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d70134db2c957fa0df3a01002e457e1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d70134db2c957fa0df3a01002e457e1::$classMap;

        }, null, ClassLoader::class);
    }
}