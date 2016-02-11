<?php
$salt = "ForesiteGroupTeeToGreen";

if ($_POST['confirmationCAP'] == "") {
  if (
      $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
     )
  {
    $SendTo = "patmccurdymusic@gmail.com";
    $Subject = "Contact From Tee To Green Website";
    $From = "From: Contact Form <contactform@tee-to-green.org>\r\n";

    $Message = $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])];

    $Message = stripslashes($Message);
  
    mail($SendTo, $Subject, $Message, $From);
    
    //http_response_code(200);
    header('HTTP/1.0 200 OK');
    echo "<strong>Your message has been sent!</strong> Thank you for your interest. You will be contacted shortly.";
  } else {
    //http_response_code(400);
    header('HTTP/1.0 500 Internal Server Error');
    echo "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";
  }
}
?>