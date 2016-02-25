<?php
date_default_timezone_set("America/Chicago");
include_once "../inc/dbconfig.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Tee To Green<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700|Titillium+Web:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../inc/main.css">
    <link rel="stylesheet" href="inc/admin.css">

    <script type="text/javascript" src="../inc/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      });
    </script>
  </head>
  <body>

  <div class="header">
    <div class="menu">
      <div class="site-width">
        <a href="."><img src="../images/logo-small.png" alt="Tee To Green" id="logo"></a>

        <label for="show-menu" id="menu-toggle"><i class="fa fa-bars"></i></label>
        <input type="checkbox" id="show-menu" role="button">
        <div id="main-menu">
          <?php if ($PageTitle != "Login") { ?>
          <ul>
            <li><a href="t2gdetails.php">T2G DETAILS</a></li>
            <li><a href="events.php">EVENTS</a></li>
          </ul>
          <?php } ?>
        </div>
      </div>
    </div>
    
    <div class="subheader site-width">
      <?php if ($PageTitle != "") echo $PageTitle; ?>
    </div> <!-- END site-width -->
  </div> <!-- END header -->

  <div class="site-width" style="padding-bottom: 4em;">
