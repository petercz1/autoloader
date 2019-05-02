<?php
namespace your\project;

// require it and run init()
require_once('classes/autoloader.php');
(new Autoloader)->init();

// now use it
$mydb = new MyDb();
$mydb->do_db_stuff();

$fe = new MyFrontEnd();
$fe->do_frontend_stuff();