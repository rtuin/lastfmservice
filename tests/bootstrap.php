<?php

set_include_path(__DIR__ . '/../src' . PATH_SEPARATOR . get_include_path());

function lastfmtest_autoload($class) {
    if (strpos($class, 'Lastfm') !== 0) {
        return false;
    }

    require_once str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
}
spl_autoload_register('lastfmtest_autoload', true, true);