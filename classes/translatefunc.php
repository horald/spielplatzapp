<?php
include("../config.php");
include("dbtools.php");

function translate($name,$bez,$langshort) {
  if ($langshort=="") {
    echo $langshort."=langshort translate2<br>";
  }
  $query = "SELECT * FROM tbltranslate WHERE fldlang='".$langshort."' AND fldname='".$name."'";
  $result = db_query($query," error"); 
  if ($line = db_fetch($result)) {
    $bez=$line['fldbez'];
  }
  return $bez;
}
?>