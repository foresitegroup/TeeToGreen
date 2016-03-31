<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php if ( is_single() ) : ?>
</div> <!-- END site-width -->
<?php endif; ?>

<?php
$TopDir = ($_SERVER['DOCUMENT_ROOT'] != dirname(__FILE__)) ? "http://" . $_SERVER['HTTP_HOST'] . "/" : "";
if ($_SERVER['SERVER_NAME'] == "localhost") { $parts = explode("/", $_SERVER['REQUEST_URI']); $TopDir .= $parts[1] . "/"; }
?>

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
      <form action="<?php echo $TopDir; ?>form-contact.php" method="POST" id="contact-form">
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

          <input type="hidden" name="referrer" value="<?php echo "http://" . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI]; ?>">

          <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

          <input type="hidden" name="ip" value="<?php echo $ip; ?>">
          <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

          <input type="submit" name="submit" value="SEND MESSAGE">
        </div>
      </form>
    </div> <!-- END contact -->
  </div> <!-- END site-width -->
</div> <!-- END home-contact -->

<?php
include "../footer.php";
?>