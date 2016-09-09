<?php
$PageTitle = "";
$Description = "Welcome to the home page for Tee To Green! T2G supports The First Tee of Southeastern Wisconsin; Supporting programs designed around helping young people learn life long values through the game of golf.";
$Keywords = "tee to green, first tee, first tee of southeast wisconsin, first tee of southeastern wisconsin, golf, golf fundraiser, teaching golf, youth golf, youth golf program, empowering youth, wisconsin golf, golf in wisconsin, golf fundraiser in wisconsin, tee to green golf classic, golf classic, golf classic at the wisconsin club, the wisconsin club, learn valuable life skills";

include "header.php";

include_once "inc/dbconfig.php";
?>

  <div class="cycle-slideshow home-slides" data-cycle-slides="> div" data-cycle-timeout="8000" data-cycle-pause-on-hover="true">
    <div style="background-image: url(images/home-slide1.jpg);">
      <div class="site-width">
        <span class="greentext">TEE TO GREEN</span> supports The First Tee of Southeast Wisconsin through a series of events that include the Golf Classic, Hunt'em Up for Charity &amp; the Holiday Ball Bowling Tournament.<br>
        <br>

        <a href="tee-to-green.php" class="ttg-button">Learn More</a>
      </div>
    </div>
    <div style="background-image: url(images/home-slide2.jpg);">
      <div class="site-width" style="font-size: larger;">
        THANK YOU! THE 2016 TEE TO GREEN EVENT WAS A HUGE SUCCESS. CHECK OUT THE EVENT GALLERY.<br>
        <br>

        <a href="gallery-2016.php" class="ttg-button">View Gallery</a>
      </div>
    </div>
  </div>
</div> <!-- END header -->

<div class="sponsors">
  <div class="site-width">
    <div id="sponsor-scroll" class="cycle-slideshow" data-cycle-slides="> div" data-cycle-fx="scrollHorz">
      <div>
        <img src="images/sponsors-mercedes.png" alt="Mercedes-Benz">
        <img src="images/sponsors-lpga.png" alt="LPGA">
        <img src="images/sponsors-adidas.png" alt="Adidas">
      </div>
      <div>
        <img src="images/sponsors-ambassadors-club.png" alt="Ambassadors Club">
        <img src="images/sponsors-pga.png" alt="PGA">
        <img src="images/sponsors-first-tee.png" alt="The First Tee of Southeast Wisconsin">
      </div>
    </div>
  </div>
</div> <!-- END sponsors -->

<div class="site-width core-values">
  <div class="one-fourth sr-left">
    About: <span style="color: #31401D;">9</span> Core Values
    <hr>
  </div> <!-- END one-fourth -->

  <div class="three-fourth last sr-right">
    <div class="two-third">
      <strong>The First Tee of Southeast Wisconsin</strong> exists to impact the lives of young people throughout Southeastern Wisconsin by providing learning facilities and educational programs that promote character development and life-enhancing values through the game of golf. The First Tee Life Skills experience teaches participants a set of skills to allow them to face challenges at home, school and play in a constructive manner. The goal is for participants to internalize the Nine Core Values, which are at the heart of The First Tee mission.<br>
      <br>

      <a href="tee-to-green.php" class="ttg-button">Learn More</a>
    </div> <!-- END two-third -->

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
    </div> <!-- END one-third -->
  </div> <!-- END three-fourth -->
</div> <!-- END core-values -->

<div class="home-event">
  <div class="site-width sr-bottom">
    <?php
    $now = time();
    $result = $mysqli->query("SELECT * FROM events WHERE date >= $now ORDER BY date ASC LIMIT 1");
    if ($result->num_rows === 0) {
      mysqli_free_result($result);
      $result = $mysqli->query("SELECT * FROM events ORDER BY date DESC LIMIT 1");
    }
    $row = $result->fetch_array(MYSQLI_ASSOC);
    ?>
    <div class="col2">
      <h1>UPCOMING EVENT</h1>
      <h2><?php echo $row['title']; ?></h2>
      <hr>
      <h3>
        <?php
        if ($row['enddate'] != "") {
          $startdate = date("F j", $row['date']);
          $enddate = date("j<\s\u\p>S</\s\u\p> Y", $row['enddate']);

          if (date("Y", $row['date']) != date("Y", $row['enddate'])) $startdate .= date("<\s\u\p>S</\s\u\p> Y", $startdate );
          if (date("F", $row['date']) != date("F", $row['enddate'])) $enddate = date("F ", $row['enddate']) . $enddate;
          echo $startdate . " - " . $enddate;
        } else {
          echo date("F j<\s\u\p>S</\s\u\p> Y", $row['date']);
        }
        ?>
      </h3>
      <h4><span>LOCATION:</span> <?php echo $row['location']; ?></h4>
      <?php echo $row['location_address']; ?>
    </div> <!-- END col2 -->

    <div class="col1">
      <div class="event-image" style="background-image: url(images/<?php echo $row['image']; ?>);"></div>

      <div class="event-blurb">
        <?php echo $row['blurb']; ?>
      </div>

      <?php //echo $row['schedule']; ?>

      <!-- <div class="event-schedule-details">
        <?php //echo $row['home_summary']; ?>
      </div> -->

      <br>
      <a href="event.php?<?php echo $row['id']; ?>" class="ttg-button">EVENT DETAILS</a>
    </div> <!-- END col1 -->
    <?php
    mysqli_free_result($result);
    ?>
  </div> <!-- END site-width -->
</div> <!-- END home-event -->

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
    </div> <!-- END Savannah -->
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
    </div> <!-- END Zak -->
  </div> <!-- END cycle-slideshow -->

  <a id="next-story" class="arrow-link">READ NEXT STORY</a>
</div> <!-- END then-now -->

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
  </div> <!-- END site-width -->

  * After three consecutive years of participation in The First Tee (national average percentages)
</div> <!-- END stats -->

<div class="news-twitter site-width">
  <div class="three-fourth">
    <h3>FEATURED NEWS</h3>

    <div class="news cf">
      <div class="news-col1">
        <?php
        require('news/wp-blog-header.php');

        $posts = get_posts('posts_per_page=1&order=DESC&orderby=date');
        foreach ($posts as $post) :
          setup_postdata( $post );
          ?>
          <div class="post"<?php if (get_post_thumbnail_id() != "") echo " style=\"background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id()) . ");\""; ?>>
            <div class="overlay">
              <div class="post-date"><?php the_date(); ?></div>
              <h2><?php the_title(); ?></h2>
              <div class="post-text"><?php echo excerpt(38); ?></div>
              <a href="<?php the_permalink() ?>" class="ttg-button">READ FULL STORY</a>
            </div>
          </div>
          <?php
        endforeach;
        ?>
      </div> <!-- END news-col1 -->

      <div class="news-col2">
        <?php
        $posts = get_posts('posts_per_page=2&order=DESC&orderby=date&offset=1');
        $counter = 1;
        foreach ($posts as $post) :
          setup_postdata( $post );
          ?>
          <div class="post"<?php if (get_post_thumbnail_id() != "") echo " style=\"background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id()) . ");\""; ?>>
            <div class="overlay">
              <div class="post-date"><?php the_date(); ?></div>
              <h2><?php the_title(); ?></h2>
              <a href="<?php the_permalink() ?>" class="ttg-button">READ FULL STORY</a>
            </div>
          </div>
          <?php
          $counter++;
        endforeach;
        ?>

        <a href="news" class="arrow-link">More News</a>
      </div> <!-- END news-col2 -->
    </div> <!-- END news -->
  </div> <!-- END three-fourth -->

  <div class="one-fourth last">
    <span class="social-icon"><i class="fa fa-twitter"></i></span>

    <div class="twitter">
      <a href="https://twitter.com/TeeToGreen_WI" class="twitter-name">@TeeToGreen_WI</a>

      <script type="text/javascript" src="inc/twitterFetcher.js"></script>
      <script>
        var config1 = {
          "id": '713379463682269184',
          "domId": 'twitter-feed',
          "maxTweets": 4,
          "enableLinks": true,
          "showTime": false,
          "showUser": false,
          "showRetweet": false,
          "showInteraction": false
        };
        twitterFetcher.fetch(config1);
      </script>

      <div id="twitter-feed"></div>

      <a href="https://twitter.com/TeeToGreen_WI" class="arrow-link">Follow Us</a>
    </div> <!-- END twitter -->
  </div> <!-- END one-fourth -->
</div> <!-- END news-twitter -->

<div class="home-contact">
  <div class="site-width">
    <h3>Stay Informed with Event News &amp; Updates</h3>

    <div class="mailing-list">
      <!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_signup">
        <form action="//tee-to-green.us13.list-manage.com/subscribe/post?u=a42a4a7e68cd900c638ebefcd&amp;id=4fe0f9ec46" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
            <div class="mc-field-group">
              <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter Your Email Address">
              <input type="submit" value="SIGN UP" name="subscribe" id="mc-embedded-subscribe">
            </div>
            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a42a4a7e68cd900c638ebefcd_4fe0f9ec46" tabindex="-1" value=""></div>
            <div class="clear"></div>
          </div>
        </form>
      </div>
      <!--End mc_embed_signup-->
    </div>

    <div class="contact">
      <script type="text/javascript">
        $(document).ready(function() {
          var form = $('#contact-form');
          var formMessages = $('#contact-form-messages');
          $(form).submit(function(event) {
            event.preventDefault();

            function formValidation() {
              if ($('#name').val() === '') { alert('Name required.'); $('#name').focus(); return false; }
              if ($('#email').val() === '') { alert('Email required.'); $('#email').focus(); return false; }
              if ($('#message').val() === '') { alert('Message required.'); $('#message').focus(); return false; }
              return true;
            }

            if (formValidation()) {
              var formData = $(form).serialize();
              formData += '&src=ajax';

              $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
              })
              .done(function(response) {
                $(formMessages).html(response);

                $(form).find('input:text, textarea, select').val('');
                $('#email').val(''); // Grrr!
                $(form).find('input:radio, input:checked').removeAttr('checked').removeAttr('selected');
              })
              .fail(function(data) {
                if (data.responseText !== '') {
                  $(formMessages).html(data.responseText);
                } else {
                  $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }
              });
            }
          });
        });
      </script>

      <?php
      // Settings for randomizing form field names
      $ip = $_SERVER['REMOTE_ADDR'];
      $timestamp = time();
      $salt = "ForesiteGroupTeeToGreen";
      ?>

      <noscript>
      <?php
      $feedback = (!empty($_SESSION['feedback'])) ? $_SESSION['feedback'] : "";
      unset($_SESSION['feedback']);
      ?>
      </noscript>

      <div id="contact-form-messages"><?php echo $feedback; ?></div>
      <h2>Contact Us!</h2>
      <div class="required">* Required</div>
      <form action="form-contact.php" method="POST" id="contact-form">
        <div>
          <div class="one-half">
            <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="* First &amp; Last Name">
          </div>

          <div class="one-half last">
            <input type="text" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone" placeholder="Phone" data-mask="000-000-0000">
          </div>

          <div style="clear: both;"></div><br>

          <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="* Email Address"><br>
          <br>

          <textarea name="<?php echo md5("message" . $ip . $salt . $timestamp); ?>" id="message" placeholder="* Message"></textarea><br>
          <br>

          <input type="hidden" name="referrer" value="index.php">

          <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

          <input type="hidden" name="ip" value="<?php echo $ip; ?>">
          <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

          <input type="submit" name="submit" value="SEND MESSAGE">
        </div>
      </form>
    </div> <!-- END contact -->
  </div> <!-- END site-width -->
</div> <!-- END home-contact -->

<?php include "footer.php"; ?>