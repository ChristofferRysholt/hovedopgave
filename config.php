<?php
ini_set("display_errors", true);
date_default_timezone_set("Europe/Copenhagen");
define("DB_DSN", "mysql:host=rysholt.com.mysql:3306;dbname=rysholt_com_skotteknive_cms");
define("DB_USERNAME", "rysholt_com_skotteknive_cms");
define("DB_PASSWORD", "skottekniveCms");
define("CLASS_PATH", "classes");
define("TEMPLATE_PATH", "templates");
define("HOMEPAGE_NUM_ARTICLES", 10);
define("ADMIN_USERNAME", "admin");
define("ADMIN_PASSWORD", "a029d0df84eb5549c641e04a9ef389e5");
define("ARTICLE_IMAGE_PATH", "images/articles");
define("IMG_TYPE_FULLSIZE", "fullsize");
define("IMG_TYPE_THUMB", "thumb");
define("ARTICLE_THUMB_WIDTH", 320);
define("JEPG_QUALITY", 100);
require(CLASS_PATH . "/Article.php");

function handleException($exception) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log($exception->getMessage());
}

set_exception_handler('handleException');
?>