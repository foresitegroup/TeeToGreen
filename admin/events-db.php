<?php
date_default_timezone_set("America/Chicago");
include("../inc/dbconfig.php");

if (isset($_POST['date'])) $TheDate = strtotime($_POST['date']);

switch ($_GET['a']) {
  case "add":
    $mysqli->query("INSERT INTO events (
                  title,
                  date,
                  location,
                  location_address,
                  image,
                  sponsors,
                  blurb,
                  schedule,
                  registration,
                  home_summary
                  ) VALUES(
                  '" . $_POST['title'] . "',
                  '" . $TheDate . "',
                  '" . $_POST['location'] . "',
                  '" . $_POST['location_address'] . "',
                  '" . $_POST['image'] . "',
                  '" . $_POST['sponsors'] . "',
                  '" . $_POST['blurb'] . "',
                  '" . $_POST['schedule'] . "',
                  '" . $_POST['registration'] . "',
                  '" . $_POST['home_summary'] . "'
                  )");
    break;
  case "edit":
    $mysqli->query("UPDATE events SET
                  title = '" . $_POST['title'] . "',
                  date = '" . $TheDate  . "',
                  location = '" . $_POST['location'] . "',
                  location_address = '" . $_POST['location_address'] . "',
                  image = '" . $_POST['image'] . "',
                  sponsors = '" . $_POST['sponsors'] . "',
                  blurb = '" . $_POST['blurb'] . "',
                  schedule = '" . $_POST['schedule'] . "',
                  registration = '" . $_POST['registration'] . "',
                  home_summary = '" . $_POST['home_summary'] . "'
                  WHERE id = '" . $_POST['id'] . "'");
    break;
  case "delete":
    $mysqli->query("DELETE FROM events WHERE id = '" . $_GET['id'] . "'");
    break;
}

$mysqli->close();

header( "Location: events.php" );
?>