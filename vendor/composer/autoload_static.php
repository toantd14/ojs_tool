<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit452984f287a66f9e0369e09efc264b91
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit452984f287a66f9e0369e09efc264b91::$classMap;

        }, null, ClassLoader::class);
    }
}
