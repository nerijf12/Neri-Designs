<?PHP
  if($_POST && captcha) {
    session_start();
    if($_POST['captcha'] != $_SESSION['digit']) die("Sorry, the CAPTCHA code entered was incorrect!");
    session_destroy();
  }
?>