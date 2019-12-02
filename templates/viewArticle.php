<?php include "templates/include/header.php" ?>

<article>
  <header>
    <nav class="topnav" id="myTopnav">
        <section id="logo"><a href="index.html"><img src="images/logo.svg" alt="Logo - Skotteknive"></a></section>
        <a href="#"><section class="flag"><img src="images/scotland.svg" title="English / Scottish" alt="Skotsk Flag"></a></section>
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
              </section>
          </section>
      </article>
    </div>
    
    <div class="section s2 fp-auto-height">
      <article>
    <?php include "templates/include/footer.php"?>