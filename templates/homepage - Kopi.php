<?php include "templates/include/header.php" ?>

      <ul id="headlines">

<?php foreach ($results['articles'] as $article) { ?>
      <section class="flex-container">
        <li>
            <h2>
              <span class="pubDate"><?php echo date('j F', $article->publicationDate)?></span><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars($article->title)?></a>
              <?php if ($article->categoryId) { ?>
              <span class="category">in <a href=".?action=archieve&amp;categoryId=<=php echo $article->categoryId?>"><?php echo htmlspecialchars($results['categories'][$article->categoryId]->name) ?></a></span>
              <?php } ?>
            </h2>
            <p class="summary">
              <?php if ($imagePath = $article->getImagePath(IMG_TYPE_THUMB)) { ?>
                <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><img class="articleImageThumb" src="<?php echo $imagePath?>" alt="Article Thumbnail"></a>
              <?php } ?>
              <?php echo htmlspecialchars($article->summary)?>
            </p>
        </li>
      </section>
<?php } ?>

      </ul>

      <p><a href="./?action=archive">Article Archive</a></p>

<?php include "templates/include/footer.php" ?>

