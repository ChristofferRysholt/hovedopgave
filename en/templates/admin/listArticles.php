<?php include "templates/admin/include/header.php" ?>
<?php include "templates/admin/include/header-front.php" ?>

        <h1>All Knives</h1>

        <?php if (isset($results['errorMessage'])) { ?>
                <section class="errorMessage"><?php echo $results['errorMessage'] ?></section>
        <?php } ?>

        <?php if (isset($results['statusMessage'])) { ?>
                <section class="statusMessage"><?php echo $results['statusMessage'] ?></section>
        <?php } ?>

      <table>
        <tr>
          <th>Publication Date</th>
          <th>Knife</th>
        </tr>

<?php foreach ($results['articles'] as $article) { ?>

        <tr onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
          <td><?php echo date('j M Y', $article->publicationDate)?></td>
          <td>
                <?php echo $article->title?>
          </td>
        </tr>

<?php } ?>

      </table>

      <p><?php echo $results['totalRows']?> knive<?php echo($results['totalRows'] != 1) ? 's' : '' ?> in total.</p>

      <p><a href="admin.php?action=newArticle">Add a New Knife</a></p>

<?php include "templates/admin/include/footer.php" ?>

