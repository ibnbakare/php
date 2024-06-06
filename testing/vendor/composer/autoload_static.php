<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b24244764449a91762c40a3abe869bc
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'testing\\second\\' => 15,
        ),
        'f' => 
        array (
            'first\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'testing\\second\\' => 
        array (
            0 => __DIR__ . '/../..' . '/second',
        ),
        'first\\' => 
        array (
            0 => __DIR__ . '/../..' . '/first',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b24244764449a91762c40a3abe869bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b24244764449a91762c40a3abe869bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1b24244764449a91762c40a3abe869bc::$classMap;

        }, null, ClassLoader::class);
    }
}
