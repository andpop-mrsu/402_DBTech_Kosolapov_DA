<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10532cc9bc168ecc4bfd6812d22faa47
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Idane\\GuessNumber\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Idane\\GuessNumber\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'cli\\Arguments' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Arguments.php',
        'cli\\Colors' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Colors.php',
        'cli\\Memoize' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Memoize.php',
        'cli\\Notify' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Notify.php',
        'cli\\Progress' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Progress.php',
        'cli\\Shell' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Shell.php',
        'cli\\Streams' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Streams.php',
        'cli\\Table' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Table.php',
        'cli\\Tree' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Tree.php',
        'cli\\arguments\\Argument' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/arguments/Argument.php',
        'cli\\arguments\\HelpScreen' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/arguments/HelpScreen.php',
        'cli\\arguments\\InvalidArguments' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/arguments/InvalidArguments.php',
        'cli\\arguments\\Lexer' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/arguments/Lexer.php',
        'cli\\notify\\Dots' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/notify/Dots.php',
        'cli\\notify\\Spinner' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/notify/Spinner.php',
        'cli\\progress\\Bar' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/progress/Bar.php',
        'cli\\table\\Ascii' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/table/Ascii.php',
        'cli\\table\\Renderer' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/table/Renderer.php',
        'cli\\table\\Tabular' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/table/Tabular.php',
        'cli\\tree\\Ascii' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/tree/Ascii.php',
        'cli\\tree\\Markdown' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/tree/Markdown.php',
        'cli\\tree\\Renderer' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/tree/Renderer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit10532cc9bc168ecc4bfd6812d22faa47::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10532cc9bc168ecc4bfd6812d22faa47::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit10532cc9bc168ecc4bfd6812d22faa47::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit10532cc9bc168ecc4bfd6812d22faa47::$classMap;

        }, null, ClassLoader::class);
    }
}