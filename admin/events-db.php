<?php
date_default_timezone_set("America/Chicago");
include("../inc/dbconfig.php");

$TheDate = ($_POST['date'] != "") ? strtotime($_POST['date']) : "";
$TheEndDate = ($_POST['enddate'] != "") ? strtotime($_POST['enddate']) : "";

switch ($_GET['a']) {
  case "add":
    $mysqli->query("INSERT INTO events (
                  title,
                  short_title,
                  date,
                  enddate,
                  location,
                  location_address,
                  image,
                  image_banner,
                  sponsors,
                  blurb,
                  details,
                  schedule,
                  registration,
                  home_summary,
                  meta_description,
                  meta_keywords
                  ) VALUES(
                  '" . $mysqli->real_escape_string($_POST['title']) . "',
                  '" . $mysqli->real_escape_string($_POST['short_title']) . "',
                  '" . $TheDate . "',
                  '" . $TheEndDate . "',
                  '" . $mysqli->real_escape_string($_POST['location']) . "',
                  '" . $mysqli->real_escape_string($_POST['location_address']) . "',
                  '" . $_POST['image'] . "',
                  '" . $_POST['image_banner'] . "',
                  '" . $_POST['sponsors'] . "',
                  '" . $mysqli->real_escape_string($_POST['blurb']) . "',
                  '" . $mysqli->real_escape_string($_POST['details']) . "',
                  '" . $mysqli->real_escape_string($_POST['schedule']) . "',
                  '" . $mysqli->real_escape_string($_POST['registration']) . "',
                  '" . $mysqli->real_escape_string($_POST['home_summary']) . "',
                  '" . $mysqli->real_escape_string($_POST['meta_description']) . "',
                  '" . $mysqli->real_escape_string($_POST['meta_keywords']) . "'
                  )");
    break;
  case "edit":
    $mysqli->query("UPDATE events SET
                  title = '" . $mysqli->real_escape_string($_POST['title']) . "',
                  short_title = '" . $mysqli->real_escape_string($_POST['short_title']) . "',
                  date = '" . $TheDate  . "',
                  enddate = '" . $TheEndDate  . "',
                  location = '" . $mysqli->real_escape_string($_POST['location']) . "',
                  location_address = '" . $_POST['location_address'] . "',
                  image = '" . $_POST['image'] . "',
                  image_banner = '" . $_POST['image_banner'] . "',
                  sponsors = '" . $_POST['sponsors'] . "',
                  blurb = '" . $mysqli->real_escape_string($_POST['blurb']) . "',
                  details = '" . $mysqli->real_escape_string($_POST['details']) . "',
                  schedule = '" . $mysqli->real_escape_string($_POST['schedule']) . "',
                  registration = '" . $mysqli->real_escape_string($_POST['registration']) . "',
                  home_summary = '" . $mysqli->real_escape_string($_POST['home_summary']) . "',
                  meta_description = '" . $mysqli->real_escape_string($_POST['meta_description']) . "',
                  meta_keywords = '" . $mysqli->real_escape_string($_POST['meta_keywords']) . "'
                  WHERE id = '" . $_POST['id'] . "'");
    break;
  case "delete":
    $mysqli->query("DELETE FROM events WHERE id = '" . $_GET['id'] . "'");
    break;
}

$mysqli->close();

header( "Location: events.php" );
?>