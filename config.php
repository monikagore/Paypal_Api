<?php

$db_conn = mysqli_connect("151.106.124.51","u188140722_instamojo","Admin@123","u188140722_instamojo");
// Check connection
if($db_conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
error_reporting(E_ALL);
ini_set('display_errors','Off');

?>