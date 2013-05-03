<?php

require 'config.php';

// @TODO: spl_autoload_register verwenden
function __autoload($class) {
    require LIBS . $class . ".php";
}

/**
 * Ohne Autoloader wurden alles requires einzeln aufgerufen !
 * 
 * require 'libs/Bootstrap.php';
 * require 'libs/Controller.php';
 * require 'libs/Model.php';
 * require 'libs/View.php';
 * Library
 * require 'libs/Database.php';
 * require 'libs/Session.php';
 * require 'libs/Hash.php';
 * 
 */

$app = new Bootstrap();
?>