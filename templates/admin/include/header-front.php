      <section id="adminHeader">
        <h2><a href="admin.php">Skotteknive Admin</a></h2>
        <p>Du er logget ind som <b><?php echo htmlspecialchars($_SESSION['username']) ?></b>. <a href="admin.php?action=listArticles">Rediger Knive</a> <a href="en/admin.php">Engelsk Version</a> <a href="admin.php?action=logout"?>Log Ud</a></p>
      </section>