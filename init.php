<?php
set_include_path(dirname(__FILE__));
include "config.php";

$dbo = new PDO(DBDRIVER . ":host=" . DBHOSTNAME . ";dbname=" . DBNAME, DBUSERNAME, DBPASSWORD);

if (debug_mode) {
        $dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

function __autoload($name) {
        include "classes" . DIRECTORY_SEPARATOR . $name . '.php';
}

$header = 'header.php';
$footer = 'footer.php';
