<?php
$PageTitle = "Our Partners";

include "header.php";
?>

  <div class="subheader site-width">
    <?php echo $PageTitle; ?>
  </div>
</div>

<div class="site-width">
  Partnertship... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet.  <a href="#contact-form" style="font-weight: bold;">Become a Partner</a><br>
  <br>
  
  <div class="partners">
    <div class="four-col">
      <img src="images/partner-adidas.png" alt="Adidas">
    </div>

    <div class="four-col">
      <img src="images/partner-foresite.png" alt="Foresite Group">
    </div>

    <div class="four-col">
      <img src="images/partner-eggers.png" alt="Eggers">
    </div>

    <div class="four-col">
      <img src="images/partner-lpga.png" alt="LPGA">
    </div>
  </div>

  <div class="partners">
    <div class="four-col">
      <img src="images/partner-raven.png" alt="Raven">
    </div>

    <div class="four-col">
      <img src="images/partner-rbc.png" alt="RBC">
    </div>

    <div class="four-col">
      <img src="images/partner-taylormade.png" alt="TaylorMade">
    </div>

    <div class="four-col">
      <img src="images/partner-pga.png" alt="PGA">
    </div>
  </div>
</div>

<div class="friends">
  <div class="site-width">
    <h3>FRIENDS OF THE FIRST TEE OF SOUTHEAST WISCONSIN</h3>

    <div class="five-col">
      Andy Sylke<br>
      Michael Dailey<br>
      Katie Falk<br>
      Ricky Sanger<br>
      Jason Rasmussen<br>
      Jim Dallet<br>
      Chuck Presto<br>
      Mike White<br>
      Denny Daniels<br>
      Rick Rosmann<br>
      Pat Noble<br>
      Brendan Locke<br>
      Paul Renard<br>
      Johnny Koss<br>
      Joe Stippich<br>
      Mike Warwick<br>
      Wes Warren<br>
      Dan Eggers<br>
      Skip Simonds<br>
      Bob Stippich<br>
      Peter O'Malley<br>
      Kevin King<br>
      Phil Plautz<br>
      Rob Cowen<br>
      Mark Wilson<br>
      Bob Davis<br>
      Paul LoCicero<br>
      Joe Stadler<br>
      Kilby Williamson<br>
      John Stetzenbach<br>
      Tim Barber<br>
      Curt Larson<br>
      Vince Catalano<br>
      Dave Asmus<br>
      Gabby Cross<br>
      North Shore Country Club<br>
      Milwaukee Country Club<br>
      Westmoor Country Club<br>
      The Wisconsin Club<br>
      WPGA Junior Foundation<br>
      Milwaukee County Parks<br>
      North Hills Country Club<br>
      Taylor &amp; Dunn's Public House<br>
      Trysting Place Pub<br>
      Nitro Golf<br>
      GolfTEC  <br>
      EWGA<br>
      The Kachelek Family<br>
      The Swab Family<br>
      The Kauflin Family<br>
      The Vega-Schwartz Family<br>
      The Gerschke Family<br>
      The Brandt Family<br>
    </div>
  </div>
</div>

<div class="partners-form">
  <div class="site-width">
    <div class="one-third">
      <h2>BECOME A PARTNER TODAY!</h2>
    </div>

    <div class="two-third last">
      Short Blurb about Partnership... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
    </div>

    <div style="clear: both;"></div>

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
      <h2>Become a Partner!</h2>
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

          <input type="text" name="<?php echo md5("subject" . $ip . $salt . $timestamp); ?>" id="subject" placeholder="Subject" value="BECOME A PARTNER"><br>
          <br>

          <textarea name="<?php echo md5("message" . $ip . $salt . $timestamp); ?>" id="message" placeholder="* Message"></textarea><br>
          <br>

          <input type="hidden" name="referrer" value="partners.php">

          <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

          <input type="hidden" name="ip" value="<?php echo $ip; ?>">
          <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

          <input type="submit" name="submit" value="BECOME A PARTNER">
        </div>
      </form>
    </div>
  </div> <!-- END sitewidth -->
</div> <!-- END event-sponsor -->

<?php include "footer.php"; ?>