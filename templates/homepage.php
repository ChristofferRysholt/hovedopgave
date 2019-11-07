<?php include "templates/include/header-grid.php" ?>

<article>
  <header>
    <nav class="topnav" id="myTopnav">
      <section id="logo"><a href="home.html"><img src="images/logo-index.svg" alt=""></a></section>
        <a href="#">Kontakt</a>
        <a href="#">Om</a>
        <a href="#">Kurser</a>
        <a href="index.php" class="active">Knive</a>
        <a href="home.html">Home</a>
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
                      <?php if ($article->categoryId) { ?>
                      <span class="category">in <a href=".?action=archieve&amp;categoryId=<=php echo $article->categoryId?>"><?php echo htmlspecialchars($results['categories'][$article->categoryId]->name) ?></a></span>
                      <?php } ?>
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

      </ul>

<?php include "templates/include/footer.php" ?>

