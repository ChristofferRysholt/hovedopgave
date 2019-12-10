<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "spam@rysholt.com";
    $email_subject = "Email test";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid. <br/>';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid. <br/>';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid. <br/>';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid. <br/>';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "First Name: ".clean_string(htmlspecialchars($first_name))."\n";
    $email_message .= "Last Name: ".clean_string(htmlspecialchars($last_name))."\n";
    $email_message .= "Email: ".clean_string(htmlspecialchars($email_from))."\n";
    $email_message .= "Telefonnummer: ".clean_string(htmlspecialchars($telephone))."\n";
    $email_message .= "Message: ".clean_string(htmlspecialchars($comments))."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply to: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!DOCTYPE html>
<html lang="En-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Thank you for your inquiry | Skotteknive</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="../js/main.js"></script>
</head>
<body>
  <main>
    <article>
    <header>
      <nav class="topnav" id="myTopnav">
        <section id="logo"><a href="index.html"><img src="../images/logo.svg" alt="Logo - Skotteknive"></a></section>
          <a href="../index.html"><section class="flag"><img src="../images/denmark.svg" title="Danish / Dansk" alt="Danish flag"></a></section>
          <a href="../index.html"><section class="show-none">Danish</section></a>
          <a href="kontakt.html" class="active">Contact</a>
          <a href="om.html">About</a>
          <a href="kurser.html">Courses</a>
          <a href="knive.php">Knives</a>
          <a href="index.html">Home</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
      </nav>
    </header>
    </article>

  <div id="fullPage">
    <div class="section s1">
      <article>
        <section class="thank-you">
            <h1>Thank you for your message <?php echo htmlspecialchars($first_name)?>. I will return as soon as possible!</h1>
            <a href="kontakt.html"><p>Return</p></a>
        </section>
      </article>
    </div>

    <div class="section s2 fp-auto-height">
      <article>
          <footer>
            <section class="footer-section">
              <h2>Contact info</h2>
              <p>Stuart Harvey</p>
              <p>Telephone +45 3011 6931</p>
              <p>stuart@skotteknive.dk</p>
            </section>      
            <section class="footer-section partnere">
              <h2>Collaborators</h2>
              <a href="Laederiet.dk" target="_blank" class="no-underline"><p>Laederiet.dk</p></a>
              <a href="thegoodstuffshop.dk" target="_blank" class="no-underline"><p>Mogens Loft Svendsen</p></a>
              <p>Dennis Jedig</p>
            </section>
            <section class="footer-section">
              <h2>Social Media</h2>
              <section class="footer-img">
                <a href="https://www.facebook.com/skotteknive" target="_blank"><img src="../images/facebook-app-logo.svg" title="Facebook" alt="Skotteknive - Facebook"></a>
              </section>
            <section class="footer-img">
              <a href="https://www.instagram.com/skotteknive/"><img src="../images/instagram-logo.svg" title="Instagram" alt="Skotteknive - Instagram"></a>
            </section>
          </section>
        </footer>
      </article>
    </div>
  </div>
  </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.js"></script>
  <script src="js/email.js"></script>
</body>
</html>
 
<?php
 
}
?>