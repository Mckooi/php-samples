<?php

/** display error message */
ini_set("display_errors", true);

/** Define ROOT_DIR as this file's directory */
define('ROOT_DIR', dirname(__FILE__) . '/' );

/** Default timezone */
// date_default_timezone_set("Asia/Singapore");

/** The type of the database */
define('DB_TYPE', 'mysql');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for xinera */
define('DB_NAME', '[DATABASE_NAME]');

/** MariaDB database username */
define('DB_USER', '[DATABASE_USERNAME]');

/** MySQL database password */
define('DB_PASSWORD', 'DATABASE_PASSWORD');

/** MaMariaDB hostname */
define('DB_HOST', '[DATABASE_HOST_NAME]');

/** Enryption key for user account */
define('ENCRYPTION_KEY', '[ENCRYPTION_KEY]');

?>