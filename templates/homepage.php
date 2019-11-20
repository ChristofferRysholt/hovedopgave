<?php include "templates/include/header-content.php" ?>

<article>
  <header>
    <nav class="topnav" id="myTopnav">
      <section id="logo"><a href="home.html"><img src="images/logo-index.svg" alt=""></a></section>
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
      <ul id="headlines">

      <div class="grid-container">
        <?php foreach ($results['articles'] as $article) { ?>
              <div class="grid-item">
                <h2>
                  <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars($article->title)?></a>
                </h2>
                  <section class="summary">
                    <?php if ($imagePath = $article->getImagePath(IMG_TYPE_THUMB)) { ?>
                      <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><img class="articleImageThumb" src="<?php echo $imagePath?>" alt="Article Thumbnail">
                        <?php } ?>
                        <p><?php echo htmlspecialchars($article->summary)?></p>
                      </a>
                  </section>
              </div>
        <?php } ?>
      </div>
    </div>
    </ul>
    <div class="section s2 fp-auto-height">

<?php include "templates/include/footer-content.php" ?>

