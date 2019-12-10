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

      <h1><?php echo $results['pageTitle']?></h1>

      <form action="admin.php?action=<?php echo $results['formAction']?>" method="post" enctype="multipart/form-data" onsubmit="closeKeepAlive()">
        <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>">

<?php if (isset($results['errorMessage'])) { ?>
        <section class="errorMessage"><?php echo $results['errorMessage'] ?></section>
<?php } ?>

        <ul>
          <li>
            <label for="title">Knife Title</label>
            <input type="text" name="title" id="title" placeholder="Name of the knife" required autofocus maxlength="255" value="<?php echo htmlspecialchars($results['article']->title )?>">
          </li>

          <li>
            <label for="summary">Knife Summary</label>
            <textarea name="summary" id="summary" placeholder="Brief description of the knife" required maxlength="1000" style="height: 5em;"><?php echo htmlspecialchars($results['article']->summary)?></textarea>
          </li>

          <li>
            <label for="content">Knife Content</label>
            <textarea name="content" id="content" placeholder="The HTML content of the knife" required maxlength="100000" style="height: 30em;"><?php echo htmlspecialchars($results['article']->content)?></textarea>
          </li>

          <li>
            <label for="publicationDate">Publication Date</label>
            <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date("Y-m-d", $results['article']->publicationDate) : "" ?>">
          </li>

          <?php if ($results['article'] && $imagePath = $results['article']->getImagePath()) { ?>
          <li>
            <label>Current Image</label>
            <img id="articleImage" src="<?php echo $imagePath ?>" alt="Knife Image">
          </li>

          <li>
            <label></label>
            <input type="checkbox" name="deleteImage" id="deleteImage" value="yes"><label for="deleteImage">Delete Image</label>
          </li>
          <?php } ?>

          <li>
            <label for="image">New Image</label>
            <input type="file" name="image" id="image" placeholder="Choose an image to upload" maxlength="255">
          </li>

        </ul>

        <section class="buttons">
          <input type="submit" name="saveChanges" value="Save Changes">
          <input type="submit" formnovalidate name="cancel" value="Cancel">
        </section>

      </form>

<?php if ($results['article']->id) { ?>
      <p><a class="red" href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Knife?')">Delete This Knife</a></p>
<?php } ?>

<?php include "templates/admin/include/footer.php" ?>