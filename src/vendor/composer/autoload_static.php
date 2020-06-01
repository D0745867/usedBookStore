<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbad5774bc7510fc0501dab4d838103a2
{
    public static $classMap = array (
        'Database' => __DIR__ . '/../..' . '/db/Database.php',
        'DatabaseAccessObject' => __DIR__ . '/../..' . '/db/DatabaseAccessObject.php',
        'MySQL' => __DIR__ . '/../..' . '/config/MySQL.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbad5774bc7510fc0501dab4d838103a2::$classMap;

        }, null, ClassLoader::class);
    }
}
