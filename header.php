<?php
session_start();

if (!isset($TopDir)) $TopDir = "";

date_default_timezone_set("America/Chicago");

include_once "inc/dbconfig.php";
$eresult = $mysqli->query("SELECT * FROM theevent WHERE id = 1");
$erow = $eresult->fetch_array(MYSQLI_ASSOC);
$GLOBALS['EventDate'] = $erow['eventdate'];
$GLOBALS['EventLoc'] = $erow['eventloc'];
mysqli_free_result($eresult);

function email($address, $name="") {
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Tee To Green<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700|Titillium+Web:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php echo filemtime(realpath(dirname(__FILE__)) . "/inc/main.css"); ?>">

    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.mask.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/scrollreveal.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');

        $(".header-home .menu #logo").attr("src", "<?php echo $TopDir; ?>images/logo.png");

        $(window).scroll(function () {
          if ($(this).scrollTop() > 131) {
            $(".menu").addClass("sticky");
            $("#logo").attr("src", "<?php echo $TopDir; ?>images/logo-small.png");
          } else {
            $(".header-home .menu").removeClass("sticky");
            $(".header-home .menu #logo").attr("src", "<?php echo $TopDir; ?>images/logo.png");
          }
        });

        $(window).on("load resize",function(e){
          if ($(this).width() > 800) {
            $('#sponsor-scroll.cycle-slideshow').cycle('destroy');
          } else {
            $('#sponsor-scroll.cycle-slideshow').cycle();
          }
        });
        
        if (document.getElementById('stats')) {
          var waypoint = new Waypoint({
            element: document.getElementById('stats'),
            handler: function() {
              $(".count-up").map(function (i, el) {
                var data = parseInt(this.dataset.n, 10);
                var props = { "from": { "count": 0 }, "to": { "count": data } };
                return $(props.from).animate(props.to, {
                  duration: 1000 * 3,
                  step: function (now, fx) {
                    $(el).text(Math.ceil(now));
                  },
                  complete: function() {
                    if (el.dataset.sym !== undefined) {
                      el.textContent = el.textContent.concat(el.dataset.sym)
                    }
                  }
                }).promise();
              }).toArray();
              waypoint.disable();
            },
            offset: '70%'
          });
        }

        $.jMaskGlobals.watchDataMask = true;
        
        window.sr = ScrollReveal();
        sr.reveal('.sr-left', { origin: 'left' });
        sr.reveal('.sr-right', { origin: 'right', delay: 200 });
        sr.reveal('.sr-bottom', { origin: 'bottom' });
      });
    </script>
  </head>
  <body>

  <div class="header<?php if ($PageTitle == "") echo "-home"; if ($HeaderClass != "") echo " " . $HeaderClass; ?>"<?php if ($HeaderBackground != "") echo " style=\"background-image: url(" . $HeaderBackground . ");\""; ?>>
    <?php if ($HeaderBackground != "") { ?><div class="overlay"><?php } ?>
    <div class="menu">
      <div class="site-width">
        <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo-small.png" alt="Tee To Green" id="logo"></a>

        <label for="show-menu" id="menu-toggle"><i class="fa fa-bars"></i></label>
        <input type="checkbox" id="show-menu" role="button">
        <div id="main-menu"><?php include "menu.php"; ?></div>
      </div>
    </div>
