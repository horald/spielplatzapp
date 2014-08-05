<?php
header("content-type: text/html; charset=utf-8");
include("../config.php");
echo "Adresse wird eingefuegt...<br>";
$spielplatz=$_POST['spielplatz'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$address=$_POST['address'];
echo $spielplatz."=spielplatz<br>";
echo $latitude."=lat<br>";
echo $longitude."=lon<br>";
echo $address."=adr<br>";
$qry="INSERT INTO tblmarkers (fldname,fldaddress,fldlat,fldlng,fldtype) VALUES ('".$spielplatz."','".$address."','".$latitude."','".$longitude."','spielplatz')";
mysql_query($qry) or die("Error using mysql_query($qry): ".mysql_error());
?>