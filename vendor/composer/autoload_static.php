<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6dc1e0575b426bcdb18e890c54de9ba0
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'KUMaxim\\PullCommentsOtherPages\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KUMaxim\\PullCommentsOtherPages\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'KUMaxim\\PullCommentsOtherPages\\AdminMetaBox' => __DIR__ . '/../..' . '/src/AdminMetaBox.php',
        'KUMaxim\\PullCommentsOtherPages\\CommentsQuery' => __DIR__ . '/../..' . '/src/CommentsQuery.php',
        'KUMaxim\\PullCommentsOtherPages\\LanguageLoader' => __DIR__ . '/../..' . '/src/LanguageLoader.php',
        'KUMaxim\\PullCommentsOtherPages\\OptionsHolder' => __DIR__ . '/../..' . '/src/OptionsHolder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6dc1e0575b426bcdb18e890c54de9ba0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6dc1e0575b426bcdb18e890c54de9ba0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6dc1e0575b426bcdb18e890c54de9ba0::$classMap;

        }, null, ClassLoader::class);
    }
}
