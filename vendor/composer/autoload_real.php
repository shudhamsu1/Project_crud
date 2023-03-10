<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd527abfe70829dc5443bea2ebee1a951
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd527abfe70829dc5443bea2ebee1a951', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd527abfe70829dc5443bea2ebee1a951', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd527abfe70829dc5443bea2ebee1a951::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
