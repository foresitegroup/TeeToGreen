<?php
include_once "inc/dbconfig.php";

$result = $mysqli->query("SELECT * FROM events WHERE id = " . $_SERVER['QUERY_STRING']);
$row = $result->fetch_array(MYSQLI_ASSOC);

$PageTitle = $row['title'];

include "header.php";
?>

  <div class="subheader countdown single-event site-width">
    <div class="countdown-text">
      <h2><?php echo date("m.d.Y", $row['date']); ?></h2>
    </div>

    <div id="countdown"></div>
    <script type="text/javascript" src="inc/jquery.countdown.min.js"></script>
    <script type="text/javascript">
      $('#countdown').countdown('<?php echo date("n/j/Y G:i:s", $row['date']); ?>', function(event) {
        $(this).html(event.strftime('<div>%D<div>Days</div></div> <div class="sep">:</div> <div>%H<div>Hours</div></div> <div class="sep">:</div> <div>%M<div>Minutes</div></div> <div class="sep">:</div> <div>%S<div>Seconds</div></div>'));
      });
    </script>
  </div>
</div>

<?php $image = ($row['image'] != "") ? $row['image'] : "event-generic.jpg"; ?>
<div class="event-banner" style="background-image: url(images/<?php echo $image; ?>);">
  <div class="overlay">
    <div class="site-width">
      <h3><?php //echo date("F j, Y", $row['date']); ?>SEPTEMBER 19, 2016</h3>
      <h2><?php echo $row['title']; ?></h2>
      <?php if ($row['location'] != "") { ?>
      <img src="images/pin-gray.png" alt="">
      <h4><span style="color: #8EC641;">Location:</span> <?php echo $row['location']; ?></h4>
      <?php } ?>
      <?php if ($row['location_address'] != "") echo $row['location_address']; ?>
    </div> <!-- END site-width -->
  </div> <!-- END overlay -->
</div> <!-- END event-banner -->

<div class="site-width event">
  <?php if ($row['blurb'] != "") { ?>
  <div class="blurb">
    <?php echo $row['blurb']; ?>
  </div>
  <?php } ?>

  <div class="one-half">
    <h3>EVENT SCHEDULE</h3>
    <?php echo $row['schedule']; ?>
  </div>

  <div class="one-half last">
    <h3>REGISTRATION</h3>
    <?php echo $row['registration']; ?>
  </div>

  <div class="moreinfo">For more information regarding <?php echo $row['title']; ?> please contact <strong>Courtney</strong> at: <strong><?php email("cbuchach@outlook.com"); ?></strong></div>
</div>

<?php mysqli_free_result($result); ?>

<div class="event-sponsor">
  <div class="site-width">
    <div class="one-third">
      <h2>WHY BECOME AN EVENT SPONSOR?</h2>
      <a href="#" class="ttg-button">Sponsorship Opportunities</a>
    </div>

    <div class="two-third last">
      Short Blurb about Sponsorship... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
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
      <h2>Contact Us Today!</h2>
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

          <input type="hidden" name="referrer" value="events">

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