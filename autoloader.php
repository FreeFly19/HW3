<?php

spl_autoload_register(function ($class) {
    $class = ltrim($class, '\\');
    $filename = '';
    $namespace = '';

    if ($last_ns_pos = strripos($class, '\\')) {
        $namespace = strtolower(substr($class, 0, $last_ns_pos));
        $class = substr($class, $last_ns_pos + 1);
        $filename = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }

    $filename .= str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';

    require $filename;
});