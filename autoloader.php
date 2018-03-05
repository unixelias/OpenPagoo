<?php
/**
 * Open Pagoo - Pacote Orientada a Objeto para gestão de boletos e remessas em PHP
 * LICENSE: AGPL-3 - https://www.gnu.org/licenses/agpl-3.0.en.html
 * Copyright (C) 2018 Elias Alves <unixelias@gmail.com>
 * 
 * @category Library
 * @package  OpenPagoo
 * @author   Elias Alves <unixelias@gmail.com>
 * @license  AGPL-3 <https://www.gnu.org/licenses/agpl-3.0.en.html>
 * @link     <https://github.com/unixelias/open-pagoo>
 */

spl_autoload_register(function ($class) {

    // project-specific namespace prefix
    $prefix = 'unixelias\\OpenPagoo\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . 'src/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});