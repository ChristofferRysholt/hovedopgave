<!DOCTYPE html>
<html lang="da-DK">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($results['pageTitle'])?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/main.js"></script>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <meta name="author" content="Rysholt.com">
    <meta name="keywords" content="Håndlavede Knive, Jagtknive, Fiskeknive, Køkkenknive, Svampeknive, Lædervare, Læder Accessories">
    <meta name="description" content="Håndlavede knive og læderarbejde af skotten Stuart Harvey. Alle mine produkter er håndlavet og unikt produceret, hvor ikke to produkter ens.">
    <meta property="og:title" content="<?php echo htmlspecialchars($results['article']->title)?> | Skotteknive">
    <meta property="og:description" content="<?php echo htmlspecialchars($results['article']->summary)?>">
    <meta property="og:type" content="knives">
    <meta property="og:image" content="https://rysholt.com/skotteknive/<?php echo htmlspecialchars($results['article']->getImagePath())?>">
    <meta property="og:image:width" content="320">
    <meta property="og:image:height" content="320">
    <meta property="og:url" content="https://rysholt.com/skotteknive/knive.php?action=viewArticle&articleId=<?php echo htmlspecialchars($results['article']->id)?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($results['article']->title)?> | Skotteknive">
    <meta name="twitter:image:alt" content="<?php echo htmlspecialchars($results['article']->title)?> | Skotteknive">
</head>
  <body>
    <main>
<article>
  <header>
    <nav class="topnav" id="myTopnav">
        <section id="logo"><a href="index.html"><img src="images/logo.svg" alt="Logo - Skotteknive"></a></section>
        <a href="en/index.html"><section class="flag"><img src="images/scotland.svg" title="English / Scottish" alt="Skotsk Flag"></section></a>
        <a href="en/index.html"><section class="show-none">English</section></a>
        <a href="kontakt.html">Kontakt</a>
        <a href="om.html">Om</a>
        <a href="kurser.html">Kurser</a>
        <a href="knive.php" class="active">Knive</a>
        <a href="index.html">Home</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
    </nav>
  </header>
</article>

  <div id="fullPage">
    <div class="section s1">
      <article class="view-flex">
          <?php if ($imagePath = $results['article']->getImagePath()) { ?>
            <img id="articleImageFullsize" src="<?php echo $imagePath?>" alt="<?php echo htmlspecialchars($results['article']->title)?> | Håndlavet kniv - Skotteknive">
          <?php } ?>
              
          <section class="view-flex-content">
              <h1><?php echo htmlspecialchars($results['article']->title)?></h1>
              <section class="content">
                <p><?php echo nl2br($results['article']->content)?></p>
                <a href="knive.php">Tilbage</a>
              </section>
          </section>
      </article>
    </div>
    
    <div class="section s2 fp-auto-height">
      <article>
    <?php include "templates/include/footer.php"?>