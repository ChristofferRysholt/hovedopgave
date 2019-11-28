      <section id="adminHeader">
        <h2><a href="admin.php">Skotteknive Admin</a></h2>
        <p>You are logged in as <b><?php echo htmlspecialchars($_SESSION['username']) ?></b>. <a href="admin.php?action=listArticles">Edit Articles</a> <a href="admin.php?action=logout"?>Log Out</a></p>
      </section>