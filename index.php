<?php
$EventDate = strtotime("July 18, 2016");
$EventLoc = "The Wisconsin Club";

$PageTitle = "";
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
    <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="inc/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="inc/jquery.mask.min.js"></script>
    <script type="text/javascript" src="inc/scrollreveal.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');

        $(window).scroll(function () {
          if ($(this).scrollTop() > 131) {
            $(".menu").addClass("sticky");
            $("#logo").attr("src", "images/logo-small.png");
          } else {
            $(".menu").removeClass("sticky");
            $("#logo").attr("src", "images/logo.png");
          }
        });

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
          offset: '30%'
        });

        var form = $('#contact-form');
        var formMessages = $('#form-messages');
        $(form).submit(function(event) {
          event.preventDefault();

          var formData = $(form).serialize();

          $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
          })
          .done(function(response) {
            // Set the message text.
            $(formMessages).html(response);

            // Clear the form.
            $('#name').val('');
            $('#phone').val('');
          })
          .fail(function(data) {
            // Set the message text.
            if (data.responseText !== '') {
              $(formMessages).text(data.responseText);
            } else {
              $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
          });
        });
        
        $.jMaskGlobals.watchDataMask = true;
        
        window.sr = ScrollReveal();
        sr.reveal('.sr-left', { origin: 'left' });
        sr.reveal('.sr-right', { origin: 'right', delay: 200 });
        sr.reveal('.sr-bottom', { origin: 'bottom' });
      });
    </script>
  </head>
  <body>

  <div class="header">
    <div class="menu">
      <div class="site-width">
        <a href="."><img src="images/logo.png" alt="Tee To Green" id="logo"></a>

        <label for="show-menu" id="menu-toggle"><i class="fa fa-bars"></i></label>
        <input type="checkbox" id="show-menu" role="button">
        <div id="main-menu"><?php include "menu.php"; ?></div>
      </div>
    </div>

    <div class="site-width">
      <div class="banner-home">
        <h1><?php echo date("F j<\s\u\p>S</\s\u\p> Y", $EventDate); ?></h1>

        <h2><img src="images/pin.png" alt="" style="margin-right: 0.25em;"> <?php echo $EventLoc; ?></h2>

        <div class="banner-home-text">
          The First Tee's programs are designed around helping young people understand and ultimately develop Nine Core Values.
        </div>

        <a href="#" class="ttg-button">Event Registration</a>
        <a href="#" class="lm-button">Learn More</a>
      </div>
    </div>
  </div>

  <div class="sponsors">
    <div class="site-width">
      <img src="images/sponsors-mercedes.png" alt="Mercedes-Benz">
      <img src="images/sponsors-lpga.png" alt="LPGA">
      <img src="images/sponsors-adidas.png" alt="Adidas">
      <img src="images/sponsors-ambassadors-club.png" alt="Ambassadors Club">
      <img src="images/sponsors-pga.png" alt="PGA">
      <img src="images/sponsors-first-tee.png" alt="The First Tee of Southeast Wisconsin">
    </div>
  </div>

  <div class="site-width core-values">
    <div class="one-fourth sr-left">
      About: <span style="color: #31401D;">9</span> Core Values
      <hr>
    </div>

    <div class="three-fourth last sr-right">
      <div class="two-third">
        <strong>The First Tee of Southeast Wisconsin</strong> exists to impact the lives of young people throughout Southeastern Wisconsin by providing learning facilities and educational programs that promote character development and life-enhancing values through the game of golf. The First Tee Life Skills experience teaches participants a set of skills to allow them to face challenges at home, school and play in a constructive manner. The goal is for participants to internalize the Nine Core Values, which are at the heart of The First Tee mission.<br>
        <br>

        <a href="#" class="ttg-button">Learn More</a>
      </div>

      <div class="one-third last">
        Honesty<br>
        Integrity<br>
        Sportsmanship<br>
        Respect<br>
        Confidence<br>
        Responsibility<br>
        Perseverance<br>
        Courtesy<br>
        Judgment
      </div>
    </div>
  </div>
  
  <div class="home-event">
    <div class="site-width sr-bottom">
      <div class="one-half">
        <div class="event-image" style="background-image: url(images/event-hunt.jpg);"></div>

        <div class="event-blurb">
          The Inaugural Hunt'em Up for Charity will be held at the Highlands Sportsman's Club on Thursday, March 3rd. Only 8 fields in the morning and 8 fields in the afternoon available, so get your team filled today!
        </div>

        <ul>
          <li>MORNING HUNT: 9AM-12PM</li>
          <li>AFTERNOON HUNT: 1PM-4PM</li>
        </ul>

        <div class="event-schedule-details">
          <strong>Hunt Includes:</strong> 5 Birds Per Hunter, Guide &amp; Dog, Food &amp; Beverage Following Hunt, Optional Gun Raffle
        </div>
      </div>

      <div class="one-half last">
        <h1>UPCOMING EVENT</h1>
        <h2>HUNT'EM UP FOR CHARITY</h2>
        <hr>
        <h3>March 3<sup>rd</sup> 2016</h3>
        <h4><span>LOCATION:</span> Highland Sportsman's Club</h4>
        N3041 County Rd A, Cascade, WI 53011<br>
        <a href="#" class="ttg-button">EVENT DETAILS</a>
      </div>
    </div>
  </div>

  <div class="site-width then-now">
    <div class="one-half">
      THEN &amp; NOW
    </div>
    <div id="story-pager" class="one-half last"></div>

    <div style="clear: both;"></div>

    <div class="cycle-slideshow" data-cycle-slides="> div" data-cycle-timeout="0" data-cycle-pager="#story-pager" data-cycle-next="#next-story">
      <div class="cf" data-cycle-pager-template="<a href=#>01. Savannah Vega-Schwartz</a>">
        <div class="one-half">
          <h2>SAVANNAH VEGA-SCHWARTZ</h2>
          <ul>
            <li>Freshman at Marquette University</li>
            <li>Studying: Contract &amp; Corporate Law</li>
            <li>Favorite Core Value: Integrity</li>
          </ul>
          <br>

          Being part of The First Tee has taught me many life lessons, as well as providing me with one amazing life altering opportunity. At one of my very first lessons in the program I learned how to properly shake someone's hand. It did not make sense at the time why I would learn this at my golf lessons, but looking back, I am so happy that it was one of the very first things I was ever taught by the wonderful volunteers of The First Tee. I could not understand why such a basic skill would need to be understood or why this was such an integral part of golf, but once I began to play tournament golf and caddie at North Shore Country Club I began to fully appreciate this gesture. My confident handshake and my ability to make eye contact while addressing others has been very beneficial in helping me with the many networking opportunities I have built throughout my caddying career. I now understand the importance of how a firm deliberate handshake can make a great first impression.<br>
          <br>

          When I turned 12, I started to caddy at North Shore Country Club. And during my time caddying, as well as participating in The First Tee programs, I learned about the Charles "Chick" Evans Scholarship. The Evans Scholarship is a full tuition college and housing scholarship provided by the WGA to deserving caddies. I applied, was granted an interview, and ultimately awarded a full scholarship to Marquette University. Without my background in the nine core values, as well as the golf knowledge I learned while caddying and being a member of the First Tee, I would have never stood out enough to receive the support from my country club that pushed me to apply for the Evans Scholarship.
        </div>

        <div class="one-half last">
          <hr>
          <img src="images/then-now-savannah.jpg" alt="">
        </div>
      </div>
      <div class="cf" data-cycle-pager-template="<a href=#>02. Zak Kachelek</a>">
        <div class="one-half">
          <h2>ZAK KACHELEK</h2>
          <ul>
            <li>Sophmore at UW Washington County</li>
            <li>Studying: Supply Chain &amp; Operations</li>
            <li>Favorite Core Value: Sportsmanship</li>
          </ul>
          <br>

          The First Tee has helped me build my confidence, not only with my golf game but with my confidence in interacting with friends, classmates and coworkers. It has exposed me to a variety of golf opportunities and jobs, which has led me to meeting new friends and acquaintances. I now have the confidence to talk to anyone and everyone, which gives me the opportunity to build lasting relationships. I was a participant of The First Tee of Southeast Wisconsin for over 8 years to not only to work on my golf game, but to be around and learn from the energetic and fun instructors. Each class I learned different aspects of the game which continually built upon each other as I progressed through the program. The instructors and volunteers made it a positive learning experience year after year.<br>
          <br>

          My fondest memories of The First Tee were not only the lessons, but golfing in the 108 Holes for charity. It was a long 9 hours of golfing with family and friends, but well worth it because all of the proceeds went back to The First Tee of Southeast Wisconsin. My family and I are proud of all of our fundraising and advocacy we have participated in that helps give back to The First Tee. It will be a continued practice for years to come!
        </div>

        <div class="one-half last">
          <hr>
          <img src="images/then-now-zak.jpg" alt="">
        </div>
      </div>
    </div>

    <a id="next-story">READ NEXT STORY <i class="fa fa-arrow-right"></i></a>
  </div>

  <div id="stats">
    <div class="site-width">
      <div class="one-half">
        <h3><span class="count-up" data-n="73"><noscript>73</noscript></span><sup>%</sup></h3>
        <hr>
        Reported high confidence in their ability to do well academically.
      </div>

      <div class="one-half last">
        <h3><span class="count-up" data-n="82"><noscript>82</noscript></span><sup>%</sup></h3>
        <hr>
        Felt confident in their social skills with peers.
      </div>
    </div>

    * After three consecutive years of participation in The First Tee (national average percentages)
  </div>

  <div class="site-width" style="outline: 1px solid red; margin: 3em auto;">
    NEWS AND TWITTER GO HERE
  </div>

  <div class="contact">
    <div class="site-width">
      <h3>Stay Informed with Event News &amp; Updates</h3>

      <form>
        <div class="mailing-list">
          <input type="text" name="email" placeholder="Enter Your Email Address">
          <input type="submit" name="subscribe" value="SIGN UP">
          <span style="color: red;">MAILCHIMP? NOT SET UP YET!</span>
        </div>
      </form>
      
      <div class="home-contact">
        <?php
        // Settings for randomizing form field names
        $ip = $_SERVER['REMOTE_ADDR'];
        $timestamp = time();
        $salt = "ForesiteGroupTeeToGreen";
        ?>
        <div id="form-messages"></div>
        <form action="form-contact.php" method="POST" id="contact-form">
          <div>
            <div class="one-half">
              <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="* First &amp; Last Name">
            </div>

            <div class="one-half last">
              <input type="text" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone" placeholder="Phone" data-mask="000-000-0000">
            </div>

            <div style="clear: both;"></div><br>

            <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

            <input type="hidden" name="ip" value="<?php echo $ip; ?>">
            <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

            <input type="submit" name="submit" value="SEND MESSAGE">
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="site-width prefooter">
    <a href="."><img src="images/logo-footer.png" alt="Tee To Green" id="logo-footer"></a>

    <div id="footer-menu"><?php include "menu.php"; ?></div>

    <div class="social">
      <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
      <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
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