<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan_debyy";

$database = mysqli_connect($host,$username,$password,$database);

if(!$database){
	die("database tidak terhubung");
}