<?php
if (stristr( $_SERVER['PHP_SELF'],'site_conf.php')) die('You are not allowed to see this page directly');

$db_host="mariadb";
$db_name="php";
$db_user="php";
$db_pw="php";
$db_praefix="db_08012021ppx07_";
$pfadhier="/var/www/html";
$webverzeichnis="";

//Konstanten belegen
define("PAPOO_ABS_PFAD",$pfadhier);
define("PAPOO_WEB_PFAD",$webverzeichnis);
define("PAPOO_DOKU_USER","");