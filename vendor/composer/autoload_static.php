<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit496dd900e3886dc19b70b9c35842f658
{
    public static $files = array (
        '6f10935b3b16f805d9d8cc84ba9a5288' => __DIR__ . '/../..' . '/src/functions.php',
        '90837a3666a8a08dc2d7f53db5ede293' => __DIR__ . '/../..' . '/src/shortcode.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'keesiemeijer\\Post_Type_Calendar\\Calendar' => __DIR__ . '/../..' . '/src/class-calendar.php',
        'keesiemeijer\\Post_Type_Calendar\\Dependencies\\Fisharebest\\ExtCalendar\\ArabicCalendar' => __DIR__ . '/../..' . '/src/Dependencies/Fisharebest/ExtCalendar/ArabicCalendar.php',
        'keesiemeijer\\Post_Type_Calendar\\Dependencies\\Fisharebest\\ExtCalendar\\CalendarInterface' => __DIR__ . '/../..' . '/src/Dependencies/Fisharebest/ExtCalendar/CalendarInterface.php',
        'keesiemeijer\\Post_Type_Calendar\\Dependencies\\Fisharebest\\ExtCalendar\\FrenchCalendar' => __DIR__ . '/../..' . '/src/Dependencies/Fisharebest/ExtCalendar/FrenchCalendar.php',
        'keesiemeijer\\Post_Type_Calendar\\Dependencies\\Fisharebest\\ExtCalendar\\GregorianCalendar' => __DIR__ . '/../..' . '/src/Dependencies/Fisharebest/ExtCalendar/GregorianCalendar.php',
        'keesiemeijer\\Post_Type_Calendar\\Dependencies\\Fisharebest\\ExtCalendar\\JewishCalendar' => __DIR__ . '/../..' . '/src/Dependencies/Fisharebest/ExtCalendar/JewishCalendar.php',
        'keesiemeijer\\Post_Type_Calendar\\Dependencies\\Fisharebest\\ExtCalendar\\JulianCalendar' => __DIR__ . '/../..' . '/src/Dependencies/Fisharebest/ExtCalendar/JulianCalendar.php',
        'keesiemeijer\\Post_Type_Calendar\\Dependencies\\Fisharebest\\ExtCalendar\\PersianCalendar' => __DIR__ . '/../..' . '/src/Dependencies/Fisharebest/ExtCalendar/PersianCalendar.php',
        'keesiemeijer\\Post_Type_Calendar\\Dependencies\\Fisharebest\\ExtCalendar\\Shim' => __DIR__ . '/../..' . '/src/Dependencies/Fisharebest/ExtCalendar/Shim.php',
        'keesiemeijer\\Post_Type_Calendar\\Dependencies\\donatj\\SimpleCalendar' => __DIR__ . '/../..' . '/src/Dependencies/donatj/SimpleCalendar.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit496dd900e3886dc19b70b9c35842f658::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit496dd900e3886dc19b70b9c35842f658::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit496dd900e3886dc19b70b9c35842f658::$classMap;

        }, null, ClassLoader::class);
    }
}
