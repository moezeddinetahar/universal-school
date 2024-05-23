<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbdatabasename = "universel-school_base";
$db = mysqli_connect($dbhost, $dbuser, $dbpassword);

if (!$db) 
{
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($db, $dbdatabasename);
?>