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
  Founded in 2004, as a collaborative effort with the Wisconsin PGA Junior Foundation, <strong>The First Tee of Southeast Wisconsin</strong> is a 501(c)(3) organization designed to serve as a place for participants to learn valuable life skills and character lessons through creative activities and instructional programs that incorporate the fundamental teachings of golf. The goal of The First Tee of Southeast Wisconsin is to incorporate responsibility, courtesy, honesty and integrity - all values inherent in the game of golf - into the daily lives of those who participate. By using the fundamentals of golf, The First Tee of Southeast Wisconsin equips youth with the skills needed to follow their dreams, advance academically and athletictally, strengthen their social abilities and become productive members of their local community.<br>
  <br>

  <div class="one-half center">
    <img src="images/first-tee-logo.png" alt="Firest Tee of Southeast Wisconsin">
  </div>

  <div class="one-half last">
    <img src="images/tee-to-green1.jpg" alt="" class="shadow">
  </div>

  <div style="clear: both;"></div>

  <div class="one-half">
    <img src="images/tee-to-green2.jpg" alt="" class="shadow">
  </div>

  <div class="one-half last">
    <h3>The First Tee Nine Healthy Habits</h3>
    The First Tee Nine Healthy Habits were created to promote healthy, active lifestyles for young people. The healthy habits are a list of nine health and wellness topics presented as a part The First Tee, formatted for easy understanding and learning by elementary-age students and chapter participants.
  </div>

  <div style="clear: both;"></div>

  <h4>PHYSICAL</h4>
  <div class="one-third">
    <strong>Energy -</strong> It is important to understand and make healthy choices about when to eat, how much to  eat, and the types of food and drinks to provide the body with the most useful energy.
  </div>

  <div class="one-third">
    <strong>Play -</strong> A variety of energizing play can help the body stay strong, lean and fit, and be fun in the process. Sleep and other forms of "re-charging" allow one to engage in play on a daily basis.
  </div>

  <div class="one-third last">
    <strong>Safety -</strong> Physical safety includes playing in a safe environment and by the rules, protecting the body with proper equipment, warm-up and cool-down and wearing sun protection.
  </div>

  <div style="clear: both;"></div>
  <br>

  <h4>EMOTIONAL</h4>
  <div class="one-third">
    <strong>Vision -</strong> In order to make the most of one's unique gifts &mdash; talents, characteristics and abilities &mdash; an individual needs to learn from the past, value the present, create their vision and future to ultimately "leave a footprint."
  </div>

  <div class="one-third">
    <strong>Mind -</strong> The mind is a powerful tool for health. One's mind influences his/her emotions and behaviors and can be utilized for self-improvement, building confidence and maintaining perspective.
  </div>

  <div class="one-third last">
    <strong>Family -</strong> When family members participate in activities together &mdash; share meals, communicate and establish roles and responsibilities &mdash; they are more likely to be successful in achieving their health-related goals. 
  </div>

  <div style="clear: both;"></div>
  <br>

  <h4>SOCIAL</h4>
  <div class="one-third">
    <strong>Friends -</strong> Maintaining healthy relationships includes surrounding one's self with friends and supportive people, while effectively handling challenging situations, including bullying and navigating the digital age with social media.
  </div>

  <div class="one-third">
    <strong>School -</strong> Success in school &mdash; learning, building relationships and contributing to the school environment &mdash; leads to success in other areas of life.
  </div>

  <div class="one-third last">
    <strong>Community -</strong> Like the health of one's body, it is important to also explore the health of one's community and discover how one can give back and care for its environment and safety.
  </div>

  <div style="clear: both;"></div>
</div> <!-- END ttg -->

<div class="nine">
  <div class="site-width">
    <div class="one-fourth">
      The <span style="color: #31401D;">9</span> Core Values
    </div> <!-- END one-fourth -->

    <div class="three-fourth last">
      <div class="two-third">
        The First Tee has established Nine Core Values that represent some of the many inherently positive values connected with the game of golf. By participating in The First Tee, young people are introduced to core values which are incorporated throughout the program. Parents are encouraged to reinforce these behaviors by talking about them, what they mean and what these behaviors can look like at home.
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
  </div>
</div> <!-- END nine -->

<div class="tee-to-green-links" id="ambassadors">
  <a href="events.php" class="ttg-button">Event Schedule</a>
  <a href="partners.php#become" class="ttg-button">Become A Partner</a>
</div>

<div class="tee-to-green">
  <div class="site-width">
    <div class="one-third">
      <img src="images/ambassadors-club.png" alt="Ambassadors Club">
    </div>

    <div class="two-third last">
      In 2015, we created a new foundation that will oversee The First Tee of Southeast Wisconsin! We have changed the name to reflect our expansion of programming throughout the area. We are working with friends in Racine, Milwaukee, and Ozaukee County throughout the upcoming year and plan to be in every county in the southeast portion of the state within five years.<br>
      <br>

      <strong>Ambassadors Club Membership Benefits</strong>
      <ul>
        <li>Name Recognition Ambassadors Plaque in The Golf House Office</li>
        <li>Official Ambassadors Club pin</li>
        <li>Invite to the End of Year Annual Review</li>
        <li>Name Recognition on our official event website</li>
      </ul>
      <br>

      <a href="pdf/Ambassadors_Club.pdf" class="down">DOWNLOAD FORM</a>
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
      <h2>Interested in joining the Ambassadors Club?</h2>
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

          <input type="hidden" name="referrer" value="tee-to-green.php">

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