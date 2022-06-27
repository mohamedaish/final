<?php

$dbhost = "localhost";
$dbuser = "aish";
$dbpass = "password";
$dbname = "login_sample_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
