<?
header("content-type: text/html; charset=utf-8");

function hilfefunc($menu,$idwert) {
  include("../config.php");
  $pfad = "../sites/views/wp_".$menu."/";
  echo "<a class='btn btn-primary' href='showtab.php?menu=".$menu."&idwert=".$idwert."'>zur&uumlck</a> ";
  $query="SELECT * FROM tblmenu_liste WHERE fldIndex=".$idwert;
  $result = mysql_query($query) or die(mysql_error());
  $line = mysql_fetch_array($result); 
  if ($line['fldhelplink']<>"") {
    echo "<a class='btn btn-primary' href='http://localhost/tools/mediawiki/index.php/Joorgportal/".$line['fldhelplink']."'>Mediawiki-Hilfe</a><br>";
  } else {
    echo "<a class='btn btn-primary' href='http://localhost/tools/mediawiki/index.php/Hauptseite'>Mediawiki-Hilfe</a><br>";
  }  
  $datei="help.".$langshort.".html";
  if ( file_exists ( $pfad.$datei ) ) {
    $lines = file($pfad.$datei);
    foreach ($lines as $line_num => $helpline) {
      echo $helpline;
    }
  } else {
    $query="SELECT * FROM tbltranslate WHERE fldName='NOHELP' and fldLang='".$langshort."'";
    //echo $query."<br>";
    $result = mysql_query($query) or die(mysql_error());
    if ($line = mysql_fetch_array($result)) {
      $hilfe=$line['fldBez'];
    } else {
      $hilfe="Keine Hilfe vorhanden";
    }
    echo "<br>";
    echo "<div class='alert alert-info'>";
    echo $hilfe.".";
    echo "</div>";
  }  
}
?>