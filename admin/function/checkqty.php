<?php
session_start();


$userId = $_SESSION['user_id'];
$mysqli = new mysqli("localhost", "root", "56588965", "db_bodjob");
$dateNow = date("Y-m-d H:i:s");


$barcode =  $_GET['barcode'];
$qty =  $_GET['txtQuantity'];

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/*----------- function Execute query --------------*/

// mysql_query("SET NAMES 'utf8'");
$mysqli->set_charset("utf8");

$sql = "SELECT qty FROM v_product where isDelete = 'no' AND pro_barcode = $barcode";

$query = $mysqli->query($sql);
$row = $query->fetch_row();

$qtyfdb = $row[0];


echo $qtyfdb;