<?php include "templates/include/header.php" ?>

      <h1><?php echo htmlspecialchars($results['pageHeading']) ?></h1>
      <?php if ($results['category']) { ?>
        <h3 class="categoryDescription"><?php echo htmlspecialchars($results['category']->description) ?></h3>
      <?php } ?>
      
      <ul id="headlines" class="archive">

      <?php foreach ($results['articles'] as $article) { ?>

        <li>
          <h2>
            <span class="pubDate"><?php echo date('j F Y', $article->publicationDate)?></span><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars($article->title)?></a>
            <?php if (!$results['category'] && $article->categoryId) { ?>
              <span class="category">in <a href=".?action=archieve&amp;caategoryId=<?php echo $article->categoryId?>"><?php echo htmlspecialchars($results['categories'][$articles->categoryId]->name) ?></a></span>
            <?php } ?>
          </h2>
          <p class="summary">
            <?php if ($imagePath = $article->getImagePath(IMG_TYPE_THUMB)) { ?>
              <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><img class="articleImageThumb" src="<?php echo $imagePath?>" alt="Article Thumbnail"></a>
            <?php } ?>
            <?php echo htmlspecialchars($article->summary)?>
          </p>
        </li>

<?php } ?>

      </ul>

      <p><?php echo $results['totalRows']?> article<?php echo ($results['totalRows'] != 1) ? 's' : '' ?> in total.</p>

      <p><a href="./admin.php">Return to Admin Control Panel</a></p>

<?php include "templates/include/footer.php" ?>

