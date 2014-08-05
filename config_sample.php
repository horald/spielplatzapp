<?php
//Spielplatzapp
$bootstrapver=2;
$langshort="de";
$winwidth=1100;
$winheight=580;

$gdbname="dbSpielplatzapp";
$gdbhost="localhost";
$gdbuser="root";
$gdbpass="geheim";

$gdbcon = mysql_connect($gdbhost,$gdbuser,$gdbpass) or die(mysql_error());
$gdbres = mysql_select_db($gdbname) or die(mysql_error());

?>