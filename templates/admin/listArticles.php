<?php include "templates/admin/include/header.php" ?>
<?php include "templates/admin/include/header-front.php" ?>

        <h1>Alle Knive</h1>

        <?php if (isset($results['errorMessage'])) { ?>
                <section class="errorMessage"><?php echo $results['errorMessage'] ?></section>
        <?php } ?>

        <?php if (isset($results['statusMessage'])) { ?>
                <section class="statusMessage"><?php echo $results['statusMessage'] ?></section>
        <?php } ?>

      <table>
        <tr>
          <th>Udgivelsesdato</th>
          <th>Knive</th>
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

      <p><?php echo $results['totalRows']?> knive<?php echo($results['totalRows'] != 1) ? '' : '' ?> i alt.</p>

      <p><a href="admin.php?action=newArticle">Tilføj kniv</a></p>

<?php include "templates/admin/include/footer.php" ?>

