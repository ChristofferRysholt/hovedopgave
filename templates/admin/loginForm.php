<?php include "templates/include/header.php" ?>

      <form action="admin.php?action=login" method="post" style="width: 50%;">
        <input type="hidden" name="login" value="true">

<?php if (isset($results['errorMessage'])) { ?>
        <section class="errorMessage"><?php echo $results['errorMessage'] ?></section>
<?php } ?>

        <ul>

          <li>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Your admin username" required autofocus maxlength="20">
          </li>

          <li>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Your admin password" required maxlength="20">
          </li>

        </ul>

        <section class="buttons">
          <input type="submit" name="login" value="Login">
        </section>

      </form>

<?php include "templates/include/footer.php" ?>

