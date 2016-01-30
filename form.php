<?php
// grab recaptcha library
require_once "recaptchalib.php";

// your secret key
$secret = "6LcABxETAAAAAPtiQ88R-cnJkA0jqULC714p9wLJ";

// empty response
$response = null;

// check secret key
$reCaptcha = new ReCaptcha($secret);

// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

$to = "info@bmune.com";
$name = $_POST["name"];
$from = $_POST["email"];
$subject = "Message from BMUNE website";
$mobile = $_POST["phone"];
$message = $_POST["message"];

if ($response != null && $response->success && mail ($to, $subject, $message ,"From: $name <$from>")) {
    header("Location: http://crudeagency.com/pedram/bmuneofficial/thankyou.html");
  } else {
    header("Location: http://crudeagency.com/pedram/bmuneofficial/wrong.html");
} ?>
