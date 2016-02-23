<?php
$PageTitle = "Tee To Green";

include "header.php";
?>

  <div class="subheader site-width">
    TEE TO GREEN EVENT <i class="fa fa-circle-o"></i>
    <?php echo date("F j<\s\u\p>S</\s\u\p> Y", $GLOBALS['EventDate']); ?> <i class="fa fa-circle-o"></i>
    <?php echo $GLOBALS['EventLoc']; ?>
  </div>
</div>

<div class="site-width ttg">
  <div class="three-fourth">
    <strong>The Tee To Green Golf Classic</strong> is an event that exists through The First Tee of Southeast Wisconsin to impact the lives of young people by providing learning facilities and educational programs that promote character development and life-enhancing values through the game of golf. The First Tee Life Skills experience teaches participants a set of skills to allow them to face challenges at home, school and play in a constructive manner. The goal is for participants to internalize the Nine Core Values, which are at the heart of The First Tee mission. At The First Tee of Southeast Wisconsin golf and life lessons are seamlessly integrated into each class.
  </div>

  <div class="one-fourth last nine">
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

  <div style="clear: both;"></div>

  <div class="one-half center">
    <img src="images/logo-large.png" alt="Tee To Green">
  </div>

  <div class="one-half last">
    <img src="images/tee-to-green1.jpg" alt="" class="shadow">
  </div>

  <div style="clear: both;"></div>

  <div class="one-half">
    <img src="images/tee-to-green2.jpg" alt="" class="shadow">
  </div>

  <div class="one-half last pull">
     In addition to learning fundamentals of the golf swing and the game, a sample of life skills lessons include:
  </div>

  <div style="clear: both;"></div>

  <div class="one-fourth">
    <h4>INTERPERSONAL SKILLS</h4>
    Proper introduction when meeting someone new and how to effectively communicate with others.
  </div>

  <div class="one-fourth">
    <h4>SELF MANAGMENT</h4>
    Techniques for managing thoughts and emotions.
  </div>

  <div class="one-fourth">
    <h4>GOAL SETTING</h4>
    Setting attainable goals to reach desired dreams.
  </div>

  <div class="one-fourth last">
    <h4>RESILIENCY SKILLS</h4>
    Strategies to adapt to, manage and overcome challenges.
  </div>
</div>

<div class="tee-to-green-links">
  <a href="#" class="ttg-button">Event Schedule</a>
  <a href="#" class="ttg-button">Become A Sponsor</a>
</div>

<div class="tee-to-green">
  <div class="site-width">
    <div class="one-third">
      <img src="images/ambassadors-club.png" alt="Ambassadors Club">
    </div>

    <div class="two-third last">
      In 2015, we created a new Foundation that will oversee The First Tee of Southeast Wisconsin! We have changed the name to reflect our expansion of programming throughout the area. We are working with friends in Racine, Milwaukee, and Ozaukee County throughout the upcoming year and plan to be in every county in the southeast portion of the state within five years.<br>
      <br>

      <strong>Ambassador Club Membership Benefits</strong>
      <ul>
        <li>Name Recognition Ambassador's Plaque in The Golf House Office</li>
        <li>Official Ambassador's Club pin</li>
        <li>Invite to the End of Year Annual Review</li>
        <li>Name Recognition on our official event website</li>
      </ul>
      <br>

      <a href="#" class="down">DOWNLOAD FORM</a>
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

                $('#name').val('');
                $('#phone').val('');
                $('#email').val('');
                $('#subject').val('');
                $('#message').val('');
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
      <h2>Interested in becoming a member?</h2>
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

          <input type="text" name="<?php echo md5("subject" . $ip . $salt . $timestamp); ?>" id="subject" placeholder="Subject"><br>
          <br>

          <textarea name="<?php echo md5("message" . $ip . $salt . $timestamp); ?>" id="message" placeholder="* Message"></textarea><br>
          <br>

          <input type="hidden" name="referrer" value="tee-to-green">

          <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

          <input type="hidden" name="ip" value="<?php echo $ip; ?>">
          <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

          <input type="submit" name="submit" value="SEND MESSAGE">
        </div>
      </form>
    </div>
  </div> <!-- END sitewidth -->
</div> <!-- END event-sponsor -->

<?php include "footer.php"; ?>