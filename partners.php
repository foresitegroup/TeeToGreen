<?php
$PageTitle = "Our Partners";
$Description = "";
$Keywords = "";

include "header.php";
?>

  <div class="subheader site-width">
    <?php echo $PageTitle; ?>
  </div>
</div>

<div class="site-width">
  The First Tee of Southeast Wisconsin values its extraordinary partnerships with local civic and charitable organizations, public and private entities and individuals.  Thanks to the generous support of our partners, The First Tee has been able to develop affordable and accessible golf-learning facilities, and more importantly, the full potential of our you.  The organizations listed below have generously provided financial support or in-kind goods or service donations to help further the mission of The First Tee of Southeast Wisconsin.<br>
  <br>

  <div class="partners">
    <div class="four-col">
      <a href="http://www.adidas.com"><img src="images/partner-adidas.png" alt="Adidas"></a>
    </div>

    <div class="four-col">
      <a href="http://www.foresitegrp.com"><img src="images/partner-foresite.png" alt="Foresite Group"></a>
    </div>

    <div class="four-col">
      <a href="http://www.eggersimprints.com"><img src="images/partner-eggers.png" alt="Eggers"></a>
    </div>

    <div class="four-col">
      <a href="http://www.lpga.com"><img src="images/partner-lpga.png" alt="LPGA"></a>
    </div>
  </div>

  <div class="partners">
    <div class="four-col">
      <a href="http://www.ravensports.org"><img src="images/partner-raven.png" alt="Raven"></a>
    </div>

    <div class="four-col">
      <a href="http://www.rbcroyalbank.com"><img src="images/partner-rbc.png" alt="RBC"></a>
    </div>

    <div class="four-col">
      <a href="http://taylormadegolf.com"><img src="images/partner-taylormade.png" alt="TaylorMade"></a>
    </div>

    <div class="four-col">
      <a href="http://www.pga.com"><img src="images/partner-pga.png" alt="PGA"></a>
    </div>
  </div>

  <div class="partners">
    <div class="four-col">
      <a href="http://www.mercedesofmilwaukeenorth.com"><img src="images/partner-mercedes.png" alt="Mercedes-Benz of Milwaukee North"></a>
    </div>

    <div class="four-col"></div>

    <div class="four-col"></div>

    <div class="four-col">
      <a href="http://www.thefirstteesoutheastwisconsin.org"><img src="images/first-tee-logo.png" alt="The First Tee of Southeast Wisconsin"></a>
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

<div class="partners-form" id="become">
  <div class="site-width">
    <div class="one-third">
      <h2>BECOME A PARTNER TODAY!</h2>
    </div>

    <div class="two-third last">
      The First Tee is reliant upon charitable contributions to carry out our mission and is grateful to receive widespread support from those in the golf industry and beyond. A fundamental strength of The First Tee is the direct support it receives from some of the game's most respected and influential organizations.<br>
      <br>

      Want to make a difference in the lives of young people? There are many ways you can support the mission of The First Tee and help us introduce the game of golf and it's inherent values like honesty, respect and confidence, to kids and teens.
    </div>

    <div style="clear: both;"></div>
    
    <div class="full">
      <hr>

      The First Tee of Southeast Wisconsin is grateful for the philanthropic support of the many individuals, corporations, foundations, and other organizations that financially contribute to our Chapter. Without your generosity we would be unable to have the positive impact on thousands of youth in our community and surrounding areas.<br>
      <br>

      <ul>
        <li><span style="color: #8EC641;">Legacy Partner</span>: $25,000 per year, minimum 4-year commitment.</li>
        <li><span style="color: #8EC641;">9 Core Values Sponsor</span>: $10,000 per year, minimum 4-year commitment</li>
        <li><span style="color: #8EC641;">9 Healthy Habits Sponsor</span>: $5,000 per year, minimum 4-year commitment</li>
        <li><span style="color: #8EC641;">Donate in Tribute</span>: $1,250 one time gift</li>
        <li><span style="color: #8EC641;">Ambassadors Club</span>: $500 per year, renewable yearly</li>
        <li><span style="color: #8EC641;">Scorecard Sponsor</span>: $250 per year, renewable yearly</li>
      </ul>
      <br>

      See all the sponsorship details <a href="pdf/2016_Sponsorship.pdf">HERE</a>.
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
      <h2>Become a Partner!</h2>
      <form action="form-contact.php" method="POST" id="contact-form">
        <div>
          <div class="radio">
            <h4>INTERESTED IN</h4>
            <input type="radio" name="interest" value="Donating Equipment" id="r-equipment"> <label for="r-equipment">DONATING EQUIPMENT</label>
            <input type="radio" name="interest" value="Volunteering Time" id="r-time"> <label for="r-time">VOLUNTEERING TIME</label>
            <input type="radio" name="interest" value="Sponsorship Opportunities" id="r-sponsorship"> <label for="r-sponsorship">SPONSORSHIP OPPORTUNITIES</label>
            <input type="radio" name="interest" value="Participation" id="r-participation"> <label for="r-participation">PARTICIPATION</label>
            <input type="radio" name="interest" value="More Information" id="r-more"> <label for="r-more">MORE INFORMATION</label>
          </div>
          <br>
          
          <div class="required">* Required</div>
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