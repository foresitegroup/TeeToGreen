<?php
$EventDate = strtotime("July 18, 2016");
$EventLoc = "The Wisconsin Club";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>Tee To Green<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Foresite Group">
    
    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700|Titillium+Web:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="inc/main.css?<?php echo filemtime(realpath(dirname(__FILE__)) . "/inc/main.css"); ?>">
    
    <script type="text/javascript" src="inc/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      });
    </script>
  </head>
  <body>
    
  <div class="header">
    <div class="site-width">
      <a href="."><img src="images/logo.png" alt="Tee To Green" class="logo"></a>
      <label for="show-menu" id="menu-toggle"><i class="fa fa-bars"></i></label>
      <input type="checkbox" id="show-menu" role="button">
      <div id="main-menu"><?php include "menu.php"; ?></div>
    </div>
  </div>

  <div class="sponsors">
    <div class="site-width">
      SPONSORS
    </div>
  </div>
  
  <div class="site-width">
    <h1>Content (H1)</h1>
    
    Bacon ipsum dolor sit amet sausage bacon biltong, salami drumstick hamburger ham hock. Filet mignon ribeye meatball flank tri-tip tongue boudin, doner pig tenderloin. Beef cow turducken pork belly. Corned beef andouille short loin spare ribs. Short ribs frankfurter pig beef ribs. Sausage salami kielbasa cow jowl. Pork ribeye sirloin sausage bacon ham swine turkey biltong tenderloin boudin beef ribs pig hamburger.<br>
    <br>
    
    Pig shankle andouille venison ham frankfurter strip steak ham hock, swine jerky ball tip flank hamburger. Leberkas cow short loin capicola ham hock bresaola. Pig beef ribs salami shankle, ham hock shank flank kielbasa sausage hamburger tenderloin. Salami shankle prosciutto sausage pork chop tri-tip. Short loin shankle tail capicola bresaola chuck drumstick pork belly t-bone shoulder hamburger salami corned beef leberkas meatloaf. Corned beef t-bone drumstick jowl shoulder brisket sirloin meatball turkey.<br>
    <br>
    
    Bacon sirloin jowl tail pork loin corned beef sausage ribeye rump. Pork chop spare ribs turkey andouille strip steak. Venison pig bresaola ground round. Leberkas frankfurter pastrami prosciutto bresaola jowl.
  </div>

  <div class="site-width prefooter">
    <a href="."><img src="images/logo-footer.png" alt="Tee To Green" id="logo-footer"></a>
    
    <div id="footer-menu"><?php include "menu.php"; ?></div>

    <div class="social">
      <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
    </div>
  </div>

  <div class="footer">
    <div class="site-width">
      <div class="footer-left">
        <div class="copyright">&copy; <?php echo date("Y"); ?> Tee To Green</div>

        Tee To Green <i class="fa fa-circle-o"></i>
        <?php echo date("F j<\s\u\p>S</\s\u\p> Y", $EventDate); ?> <i class="fa fa-circle-o"></i>
        <?php echo $EventLoc; ?>
      </div>
      
      <div class="backtotop">
        <a href="#">
          Back To Top
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-angle-up fa-stack-1x fa-inverse"></i>
          </span>
        </a>
      </div>
    </div>
  </div>
    
  </body>
</html>