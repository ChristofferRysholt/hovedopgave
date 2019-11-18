<?php include "templates/include/header-content.php" ?>

<article>
  <header>
    <nav class="topnav" id="myTopnav">
      <section id="logo"><a href="home.html"><img src="images/logo-index.svg" alt=""></a></section>
        <a href="#"><section class="flag"><img src="images/scotland.svg" title="English / Scottish" alt=""></a></section>
        <a href="kontakt.html">Kontakt</a>
        <a href="om.html">Om</a>
        <a href="kurser.html">Kurser</a>
        <a href="index.php" class="active">Knive</a>
        <a href="home.html">Home</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
    </nav>
  </header>

  <div id="fullPage">
    <div class="section s1">
        <h1><?php echo htmlspecialchars($results['article']->title)?></h1>
        <div style="font-style: italic;"><?php echo htmlspecialchars($results['article']->summary)?></div>
        <div>
            <?php if ($imagePath = $results['article']->getImagePath()) { ?>
                <img id="articleImageFullsize" src="<?php echo $imagePath?>" alt="Article Image">
            <?php } ?>
            <section class="content">
                <p><?php echo $results['article']->content?></p>
            </section>
        </div>
        <p class="pubDate">Published on <?php echo date('j F Y', $results['article']->publicationDate)?>
            <?php if ($results['category']) { ?>
                in <a href="./?action=archive&amp;categoryId=<?php echo $results['category']->id?>"><?php echo htmlspecialchars($results['category']->name) ?></a> 
            <?php } ?>
        </p>
    </div>
    
    <div class="section s2 fp-auto-height">

<?php include "templates/include/footer-content.php" ?>