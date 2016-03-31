<?php
date_default_timezone_set("America/Chicago");
include("../inc/dbconfig.php");

$TheDate = ($_POST['date'] != "") ? strtotime($_POST['date']) : "";

switch ($_GET['a']) {
  case "add":
    $mysqli->query("INSERT INTO events (
                  title,
                  date,
                  location,
                  location_address,
                  image,
                  image_banner,
                  sponsors,
                  blurb,
                  details,
                  schedule,
                  registration,
                  home_summary
                  ) VALUES(
                  '" . $mysqli->real_escape_string($_POST['title']) . "',
                  '" . $TheDate . "',
                  '" . $mysqli->real_escape_string($_POST['location']) . "',
                  '" . $mysqli->real_escape_string($_POST['location_address']) . "',
                  '" . $_POST['image'] . "',
                  '" . $_POST['image_banner'] . "',
                  '" . $_POST['sponsors'] . "',
                  '" . $mysqli->real_escape_string($_POST['blurb']) . "',
                  '" . $mysqli->real_escape_string($_POST['details']) . "',
                  '" . $mysqli->real_escape_string($_POST['schedule']) . "',
                  '" . $mysqli->real_escape_string($_POST['registration']) . "',
                  '" . $mysqli->real_escape_string($_POST['home_summary']) . "'
                  )");
    break;
  case "edit":
    $mysqli->query("UPDATE events SET
                  title = '" . $mysqli->real_escape_string($_POST['title']) . "',
                  date = '" . $TheDate  . "',
                  location = '" . $mysqli->real_escape_string($_POST['location']) . "',
                  location_address = '" . $_POST['location_address'] . "',
                  image = '" . $_POST['image'] . "',
                  image_banner = '" . $_POST['image_banner'] . "',
                  sponsors = '" . $_POST['sponsors'] . "',
                  blurb = '" . $mysqli->real_escape_string($_POST['blurb']) . "',
                  details = '" . $mysqli->real_escape_string($_POST['details']) . "',
                  schedule = '" . $mysqli->real_escape_string($_POST['schedule']) . "',
                  registration = '" . $mysqli->real_escape_string($_POST['registration']) . "',
                  home_summary = '" . $mysqli->real_escape_string($_POST['home_summary']) . "'
                  WHERE id = '" . $_POST['id'] . "'");
    break;
  case "delete":
    $mysqli->query("DELETE FROM events WHERE id = '" . $_GET['id'] . "'");
    break;
}

$mysqli->close();

header( "Location: events.php" );
?>