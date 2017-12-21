<?php
/********************************************************************
 * This file is where you set the data related to your server. 
 ********************************************************************/

//error_reporting(E_ALL);
if (! defined('DEBUG')) {
    define('DEBUG', false);        // Set to true to turn debugging on
}

$dbIP = 'mysql';               // Database server IP.
$dbPort = 3306;                    // Database server port.
$dbUser = 'root';               // Database User Name for read access
$dbPass = 'rootPw';              // Database Password for read access
$dbUserWrite = 'root';         // Database User Name for write access
$dbPassWrite = 'rootPw';         // Database Password for write access
$dbName = 'calib_camera';          // Database Name

// ENTER YOUR OWN SECRET TEXT STRING BELOW. 
$serverAuthTokenUpload = '';
$serverAuthTokenDownload = 'ARToolKit.Rocks';
?>
