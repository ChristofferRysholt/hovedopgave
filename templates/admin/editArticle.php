<?php include "templates/admin/include/header.php" ?>
<?php include "templates/admin/include/header-front.php"?>

  <script>
    // Prevents file upload hangs in Mac Safari
    function closeKeepAlive() {
      if (/AppleWebKit|MSIE/.test(navigator.userAgent)) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "/ping/close", false);
        xhr.send();        
      }
    }
  </script>

      <h1>Rediger Kniv</h1>

      <form action="admin.php?action=<?php echo $results['formAction']?>" method="post" enctype="multipart/form-data" onsubmit="closeKeepAlive()">
        <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>">

<?php if (isset($results['errorMessage'])) { ?>
        <section class="errorMessage"><?php echo $results['errorMessage'] ?></section>
<?php } ?>

        <ul>
          <li>
            <label for="title">Kniv Titel</label>
            <input type="text" name="title" id="title" placeholder="Navn til kniven" required autofocus maxlength="255" value="<?php echo htmlspecialchars($results['article']->title )?>">
          </li>

          <li>
            <label for="summary">Kniv Resumé</label>
            <textarea name="summary" id="summary" placeholder="Kort beskrivelse af kniven" required maxlength="1000" style="height: 5em;"><?php echo htmlspecialchars($results['article']->summary)?></textarea>
          </li>

          <li>
            <label for="content">Kniv Beskrivelse</label>
            <textarea name="content" id="content" placeholder="Beskrivelsen af kniven" required maxlength="100000" style="height: 30em;"><?php echo htmlspecialchars($results['article']->content)?></textarea>
          </li>

          <li>
            <label for="publicationDate">Udgivelsesdato</label>
            <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date("Y-m-d", $results['article']->publicationDate) : "" ?>">
          </li>

          <?php if ($results['article'] && $imagePath = $results['article']->getImagePath()) { ?>
          <li>
            <label>Nuværende Billede</label>
            <img id="articleImage" src="<?php echo $imagePath ?>" alt="Article Image">
          </li>

          <li>
            <label></label>
            <input type="checkbox" name="deleteImage" id="deleteImage" value="yes"><label for="deleteImage">Slet Billede</label>
          </li>
          <?php } ?>

          <li>
            <label for="image">Nyt Billede</label>
            <input type="file" name="image" id="image" placeholder="Vælg et billede, der skal uploades" maxlength="255">
          </li>

        </ul>

        <section class="buttons">
          <input type="submit" name="saveChanges" value="Gem Ændringer">
          <input type="submit" formnovalidate name="cancel" value="Fortryd">
        </section>

      </form>

<?php if ($results['article']->id) { ?>
      <p><a class="red" href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Slet denne kniv?')">Slet Denne Kniv</a></p>
<?php } ?>

<?php include "templates/admin/include/footer.php" ?>