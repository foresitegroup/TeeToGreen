<?php
include_once "inc/dbconfig.php";

$result = $mysqli->query("SELECT * FROM events WHERE id = " . $_SERVER['QUERY_STRING']);
$row = $result->fetch_array(MYSQLI_ASSOC);

$PageTitle = $row['title'];
$Description = $row['meta_description'];
$Keywords = $row['meta_keywords'];

include "header.php";
?>

  <div class="subheader countdown single-event site-width">
    <div class="countdown-text">
      <h2><?php echo ($row['date'] != "") ? date("m.d.Y", $row['date']) : "TBA"; ?></h2>
    </div>

    <div id="countdown"></div>
    <script type="text/javascript" src="inc/jquery.countdown.min.js"></script>
    <script type="text/javascript">
      $('#countdown').countdown('<?php echo ($row['date'] != "") ? date("n/j/Y G:i:s", $row['date']) : 0; ?>', function(event) {
        $(this).html(event.strftime('<div>%D<div>Days</div></div> <div class="sep">:</div> <div>%H<div>Hours</div></div> <div class="sep">:</div> <div>%M<div>Minutes</div></div> <div class="sep">:</div> <div>%S<div>Seconds</div></div>'));
      });
    </script>
  </div>
</div>

<?php
// $image = ($row['image'] != "") ? $row['image'] : "event-generic.jpg";
if ($row['image'] == "" && $row['image_banner'] == "") {
  $image = "event-generic.jpg";
} else {
  $image = ($row['image_banner'] != "") ? $row['image_banner'] : $row['image'];
}
?>
<div class="event-banner" style="background-image: url(images/<?php echo $image; ?>);">
  <div class="overlay">
    <div class="site-width">
      <h3>
        <?php
        if ($row['enddate'] != "") {
          $startdate = date("F j", $row['date']);
          $enddate = date("j, Y", $row['enddate']);

          if (date("Y", $row['date']) != date("Y", $row['enddate'])) $startdate .= date(", Y", $startdate );
          if (date("F", $row['date']) != date("F", $row['enddate'])) $enddate = date("F ", $row['enddate']) . $enddate;
          echo $startdate . "-" . $enddate;
        } else {
          // echo date("F j<\s\u\p>S</\s\u\p> Y", $row['date']);
          echo ($row['date'] != "") ? date("F j, Y", $row['date']) : "TBA";
        }
        ?>
      </h3>
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
  <?php if ($row['blurb'] != "" && $row['details'] == "") { ?>
  <div class="blurb">
    <?php echo $row['blurb']; ?>
  </div>
  <?php } ?>

  <?php if ($row['details'] != "") { ?>
  <div class="details">
    <?php echo $row['details']; ?>
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

<?php
if ($row['sponsors'] != "") {
  $sponsors = explode(",", $row['sponsors']);
?>
<div class="event-sponsors">
  <div class="site-width">
    <?php
    foreach($sponsors as $sponsor) {
      echo "<img src=\"images/" . $sponsor . "\" alt=\"\">\n";
    }
    ?>
  </div>
</div>
<?php } ?>

<div class="event-sponsor"<?php if ($row['sponsors'] != "") echo " style=\"margin-top: 0;\""; ?>>
  <div class="site-width">
    <div class="one-third">
      <h2>WHY BECOME AN EVENT SPONSOR?</h2>
      <a href="partners.php#become" class="ttg-button">Sponsorship Opportunities</a>
    </div>

    <div class="two-third last">
      We all want to see Kids grow up to be responsible, respectful, hard working and caring adults. We believe that through sport,  especially golf, we can instill these important lessons.<br>
      <br>

      You can support or sponsor one event or all of them. Tee to Green will be adding more events throughout the year and we will always need partners and event sponsors. Please contact us if you are interested.
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

          <input type="hidden" name="referrer" value="event.php?<?php echo $ip; ?>">

          <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

          <input type="hidden" name="ip" value="<?php echo $ip; ?>">
          <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

          <input type="submit" name="submit" value="SEND MESSAGE">
        </div>
      </form>
    </div>
  </div> <!-- END sitewidth -->
</div> <!-- END event-sponsor -->

<?php mysqli_free_result($result); ?>
<?php include "footer.php"; ?>