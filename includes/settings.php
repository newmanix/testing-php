<?php
//settings.php
/*
Either define physical and virtual paths for your app,
or they will be derived here
*/
if(!defined('PHYSICAL_PATH')){define('PHYSICAL_PATH',__DIR__);}
if(!defined('VIRTUAL_PATH')){define('VIRTUAL_PATH','http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));}
