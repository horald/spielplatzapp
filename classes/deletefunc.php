<?php
header("content-type: text/html; charset=utf-8");

function deleteask($pararray,$listarray,$filterarray,$filter,$idwert,$menu,$menuid) {

  echo "<form class='form-horizontal' method='post' action='delete.php?delete=1&idwert=".$idwert."&menu=".$menu."&menuid=".$menuid."'>";
  echo "  <fieldset>";

  $bez="";
  if ($pararray['fldbez']!="") {
  	$bez=$pararray['fldbez']; 
  } else {
  	$bez="dummy";
  }	 
  $query = "SELECT * FROM ".$pararray['dbtable']." WHERE ".$pararray['fldindex']."=".$idwert;
  //$result = mysql_query($query) or die(mysql_error());
  $result = db_query($query," delete-error");
  //$line = mysql_fetch_array($result);
  $line = db_fetch($result);
  if ($bez=="dummy") {
    echo $line[1]."<br>";
  } else {	
    echo $line[$pararray['fldbez']]."<br>";
  }  
  
  echo "Soll der Datensatz wirklich ge&oumlscht werden?";  
  
  echo "  <div class='form-actions'>";
  echo "     <button type='submit' name='submit' class='btn btn-primary'>Ok</button>";
  echo "     <button class='btn'>Abbruch</button>";
  echo "  </div>";
  echo "  </fieldset>";
  echo "</form>";

}

function deleteexec($pararray,$listarray,$filterarray,$filter,$idwert,$menu) {

  echo "<a class='btn btn-primary' href='showtab.php?menu=".$menu."'>zurueck</a><br>";
  if (isset($_REQUEST['submit'])) { 
    $query = "DELETE FROM ".$pararray['dbtable']." WHERE ".$pararray['fldindex']."=".$idwert;
    //echo $query."<br>";
    //mysql_query($query) or die("Error using mysql_query($sql): ".mysql_error());
    db_query($query," delete-error");
    //mysql_close();
    echo "Datensatz wurde gelöscht.<br>";
  } else {
    echo "Der Vorgang wurde abgebrochen.<br>"; 
  }

}

?>