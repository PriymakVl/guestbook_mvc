<?php

function model_autoloader($class) {
    $path = 'models/' . $class . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
}

function core_autoloader($class) {
    $path = 'core/' . $class . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
}

function helper_autoloader($class) {
    $path = 'helpers/' . $class . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
}

spl_autoload_register('model_autoloader');
spl_autoload_register('core_autoloader');
spl_autoload_register('helper_autoloader');