<?php include "templates/include/header-content.php" ?>

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

      <div class="container">
        <?php foreach ($results['articles'] as $article) { ?>
              <div class="mySlides">
                  <?php if ($imagePath = $article->getImagePath(IMG_TYPE_FULLSIZE)) { ?>
                      <a href="knive.php?action=viewArticle&amp;articleId=<?php echo $article->id?>"><img class="large-image" src="<?php echo $imagePath?>" alt="Article Thumbnail">
                  <?php } ?>
                        <p><?php echo htmlspecialchars($article->summary)?></p>
                      </a>
              </div>
        <?php } ?>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <div class="caption-container">
          <h2 id="caption"></h2>
        </div>

        <div class="row">
          <?php $index = 1; { ?>
          <?php foreach ($results['articles'] as $article) { ?>
            <div class="column">
              <?php if ($imagePath = $article->getImagePath(IMG_TYPE_THUMB)) { ?>
                <img class="demo cursor small-image" src="<?php echo $imagePath?>" onclick="currentSlide('<?php echo $index ?>')" alt="<?php echo $article->title?>" >
              <?php } ?>
              <?php $index++ ?>
            </div>
          <?php }} ?>
        </div>
        
        <script>
          var slideIndex = 1;
            showSlides(slideIndex);

          function plusSlides(n) {
            showSlides(slideIndex += n);
          }

          function currentSlide(n) {
            showSlides(slideIndex = n);
          }

          function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "flex";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
          }

        </script>

      </div>
    </div>
    </ul>
    <div class="section s2 fp-auto-height">

<?php include "templates/include/footer-content.php" ?>

