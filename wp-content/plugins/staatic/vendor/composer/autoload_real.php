<?php

namespace Staatic\Vendor;

use Staatic\Vendor\Composer\Autoload\ClassLoader;
use Staatic\Vendor\Composer\Autoload\ComposerStaticInitc322d9fd5fc8a7476534d8f26846574d;
// autoload_real.php @generated by Composer
class ComposerAutoloaderInitc322d9fd5fc8a7476534d8f26846574d
{
    private static $loader;
    public static function loadClassLoader($class)
    {
        if ('Staatic\\Vendor\\Composer\\Autoload\\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }
    /**
     * @return ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }
        require __DIR__ . '/platform_check.php';
        \spl_autoload_register(array('Staatic\\Vendor\\ComposerAutoloaderInitc322d9fd5fc8a7476534d8f26846574d', 'loadClassLoader'), \true, \true);
        self::$loader = $loader = new ClassLoader(\dirname(__DIR__));
        \spl_autoload_unregister(array('Staatic\\Vendor\\ComposerAutoloaderInitc322d9fd5fc8a7476534d8f26846574d', 'loadClassLoader'));
        require __DIR__ . '/autoload_static.php';
        \call_user_func(ComposerStaticInitc322d9fd5fc8a7476534d8f26846574d::getInitializer($loader));
        $loader->setClassMapAuthoritative(\true);
        $loader->register(\true);
        $includeFiles = ComposerStaticInitc322d9fd5fc8a7476534d8f26846574d::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirec322d9fd5fc8a7476534d8f26846574d($fileIdentifier, $file);
        }
        return $loader;
    }
}
/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirec322d9fd5fc8a7476534d8f26846574d($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = \true;
        require $file;
    }
}