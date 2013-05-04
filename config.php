<?php

/**
 *  Paths
 */

define('URL', 'http://localhost/mensameter-webapp/');
define('LIBS', 'libs/');

/**
 * Database
 */

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'danieltinney');
define('DB_USER', 'root');
define('DB_PASS', '');


/**
 * Constants
 * these are sitewide hashkeys, do not change these 
 * -> used for passwords !!
 * -> old login won't work after change !
 */

 
//this is for other hashkeys
define('HASH_GENERAL_KEY', 'mixITup');

//this is for db-passwords only
define('HASH_PASSWORD_KEY', 'catsFLYhigh200miles');


/**
 *  URLS
 *  for the canteens
 */

define('MENSEN', 'http://www.studierendenwerk-hamburg.de/studierendenwerk/de/essen/speiseplaene/');