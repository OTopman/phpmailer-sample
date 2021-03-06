<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f0072616b2fbf4565d8c7306805e4c4
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Topman\\Mailer\\' => 14,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Topman\\Mailer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f0072616b2fbf4565d8c7306805e4c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f0072616b2fbf4565d8c7306805e4c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5f0072616b2fbf4565d8c7306805e4c4::$classMap;

        }, null, ClassLoader::class);
    }
}
