<?php include "templates/include/header.php" ?>

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
      <ul id="headlines">

      <section class="container">
        <?php foreach ($results['articles'] as $article) { ?>

          <section><h2 id="caption" class="centered"></h2></section>
              <section class="mySlides">
                <section class="gallery-top">
                  <?php if ($imagePath = $article->getImagePath(IMG_TYPE_FULLSIZE)) { ?>
                    <a href="knive.php?action=viewArticle&amp;articleId=<?php echo $article->id?>"><img class="large-image" src="<?php echo $imagePath?>" alt="Article Thumbnail">
                    <section class="gallery-top-text">Nr: <?php echo htmlspecialchars($article->id) ?></section>
                    <?php } ?>
                    <p><?php echo htmlspecialchars($article->summary)?></p>
                  </a>
                  </section>
              </section>
        <?php } ?>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <hr>

        <section class="row">
          <?php $index = 1; { ?>
          <?php foreach ($results['articles'] as $article) { ?>
            <section class="column">
              <?php if ($imagePath = $article->getImagePath(IMG_TYPE_THUMB)) { ?>
                <img class="demo cursor small-image" src="<?php echo $imagePath?>" onclick="currentSlide('<?php echo $index ?>')" alt="<?php echo $article->title?>" >
              <?php } ?>
              <?php $index++ ?>
            </section>
          <?php }} ?>
        </section>
      </section>
        
      <script src="js/form.js"></script>

      </div>
    </ul>
    <div class="section s2 fp-auto-height">

<?php include "templates/include/footer.php"?>

