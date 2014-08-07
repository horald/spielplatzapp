<?php

function db_query($query,$error) {
  include("../config.php");
  //echo $gdbtyp."=in query<br>";
  switch ($gdbtyp) {
    case "mysql":
      $result = mysql_query($query) or die(mysql_error().$error);
    break;
    case "postgres":
      $result = pg_query($query) or die(pg_last_error().$error);
    break;
  }
  return $result;
}

function db_fetch($result) {
  include("../config.php");
  //echo $gdbtyp."=in fetch<br>";
  switch ($gdbtyp) {
    case "mysql":
      $row = mysql_fetch_array($result);
    break;
    case "postgres":
      $row = pg_fetch_assoc($result);
    break;
  }
  return $row;
}

?>