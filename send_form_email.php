<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "spam@rysholt.com";
    $email_subject = "Email test";
 
    function died($error) {
        // your error code can go here
        echo "Beklager, men der var fejl med den formular du indsendte.";
        echo "Disse fejl kan ses nedenfor.<br /><br />";
        echo $error."<br /><br />";
        echo "Gå venligst tilbage og rette op på fejlene.<br /><br />";
        die();
    }

    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('Beklager, men det ser ud til at der var et problem med formularen du indsendte. Prøv venligst igen.');       
    }
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Email adressen du har intastet ser ikke ud til at være gyldig. <br/>';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Fornavnet du har intastet ser ikke ud til at være gyldigt. <br/>';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'Efternavnet du har intastet ser ikke ud til at være gyldigt. <br/>';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'Beskeden du har intastet ser ikke ud til at være gyldig. <br/>';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Formular detaljer nedenfor.\n\n";     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Fornavn: ".clean_string(htmlspecialchars($first_name))."\n";
    $email_message .= "Efternavn: ".clean_string(htmlspecialchars($last_name))."\n";
    $email_message .= "Email: ".clean_string(htmlspecialchars($email_from))."\n";
    $email_message .= "Telefonnummer: ".clean_string(htmlspecialchars($telephone))."\n";
    $email_message .= "Besked: ".clean_string(htmlspecialchars($comments))."\n";
 
// create email headers
$headers = 'Fra: '.$email_from."\r\n".
'Svar til: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!DOCTYPE html>
<html lang="da-DK">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tak for din henvendelse | Skotteknive</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/main.js"></script>
</head>
<body>
  <main>
    <article>
      <header>
        <nav class="topnav" id="myTopnav">
          <section id="logo"><a href="index.html"><img src="images/logo-index.svg" alt=""></a></section>
            <a href="#"><section class="flag"><img src="images/scotland.svg" title="English / Scottish" alt=""></a></section>
            <a href="kontakt.html" class="active">Kontakt</a>
            <a href="om.html">Om</a>
            <a href="kurser.html">Kurser</a>
            <a href="knive.php">Knive</a>
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
            <h1>Tak for din besked <?php echo htmlspecialchars($first_name)?>. Jeg vender tilbage hurtigst muligt!</h1>
            <a href="kontakt.html"><p>Tilbage</p></a>
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