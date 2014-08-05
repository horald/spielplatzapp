<?php
include("config.php");

function startinstall() {
  echo "<form name='eingabe' method='post' action='install.php'>";
  echo "<table>";
  echo "<tr><td><h2>Installation</h2></td></tr>";
  echo "<tr>";
  echo "<td>Select language: </td>";
  echo "<td>";
  echo "<select size='1' name='sprache'>";
  echo "<option style='background-color:#c0c0c0;' Value='english' selected>english</option>";
  echo "<option style='background-color:#c0c0c0;' Value='german' selected>german</option>";
  echo "</select>";
  echo "</td>";
  echo "</tr>";
  echo "</table>";
  echo "<input type='submit' name='button' value=' OK '>";
  echo "</form>";
}

function startmenu() {

  include("config.php");
  echo "<legend>Spielplatzapp</legend>";

  echo "<iframe src='classes/showtab.php?menu=playground' name='Fensterlein' width='".$winwidth."' height='".$winheight."' marginheight='0' marginwidth='0' frameborder='0' align='right'>";
  echo "  <p>Ihr Browser kann leider keine eingebetteten Frames anzeigen</p>";
  echo "</iframe>";

  echo "<a class='btn btn-default' href='classes/showtab.php?menu=playground'  target='Fensterlein'>Spielpl&aumltze</a><br>";
  echo "<a class='btn btn-default' href='classes/showtab.php?menu=spielgeraet' target='Fensterlein'>Spielger&aumlte</a><br>";
  echo "<a class='btn btn-default' href='classes/spielplatzmap.php'            target='Fensterlein'>Spielplatzmap  </a>";

}

function showhead() {
    echo "    <!DOCTYPE html>";
    echo "    <html>";
    echo "    <head>";
    echo "    <title>Spielplatzapp</title>";
    echo "    <!-- Bootstrap -->";
    echo "    <link href='includes/bootstrap/css/bootstrap.min.css' rel='stylesheet' media='screen'>";
    echo "    </head>";
    echo "    <body>";
    echo "    <script src='includes/bootstrap/js/jquery-latest.js'></script>";
    echo "    <script src='includes/bootstrap/js/bootstrap.min.js'></script>";
}

function showfoot() {
    echo "    </body>";
    echo "    </html>";
}

function startseite() {

  include("config.php");
  $dbFile="config.php";
  if (filesize($dbFile) == 0 ) {
    startinstall(); 
  } else {
    showhead();
    startmenu();
    showfoot();
  }  

}

startseite();

?>