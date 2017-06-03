<?php

session_start();

$DB_host = "localhost";
$DB_user = "okborxof";
$DB_pass = "annalionhai";
$DB_name = "okborxof_enotice";

try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}


include_once 'class.admin.php';
include_once 'class.user.php';
$user = new USER($DB_con);
$admin= new ADMIN($DB_con);