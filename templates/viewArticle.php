<?php include "templates/admin/include/header.php" ?>

<article>
  <header>
    <nav class="topnav" id="myTopnav">
      <section id="logo"><a href="index.html"><img src="images/logo-index.svg" alt=""></a></section>
        <a href="#"><section class="flag"><img src="images/scotland.svg" title="English / Scottish" alt=""></a></section>
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

  <div id="fullPage">
    <div class="section s1">
        <section class="centered-section">
            <section class="centered-section-content">
                <h1 class="centered"><?php echo htmlspecialchars($results['article']->title)?></h1>
                <section>
                    <?php if ($imagePath = $results['article']->getImagePath()) { ?>
                        <img id="articleImageFullsize" src="<?php echo $imagePath?>" alt="Article Image">
                    <?php } ?>

                    <section class="italic centered"><?php echo htmlspecialchars($results['article']->summary)?></section>

                    <section class="content centered">
                        <p><?php echo $results['article']->content?></p>
                    </section>
                </section>
            </section>
        </section>
    </div>
    
    <div class="section s2 fp-auto-height">

    <?php include "templates/include/footer.php"?>