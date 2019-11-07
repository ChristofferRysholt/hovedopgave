<?php
ini_set("display_errors", true);
date_default_timezone_set( "Europe/Copenhagen");
define("DB_DSN", "mysql:host=rysholt.com.mysql:3306;dbname=rysholt_com_cms_medium");
define("DB_USERNAME", "rysholt_com_cms_medium");
define("DB_PASSWORD", "cmsMedium");
define("CLASS_PATH", "classes");
define("TEMPLATE_PATH", "templates");
define("HOMEPAGE_NUM_ARTICLES", 5);
define("ADMIN_USERNAME", "admin");
define("ADMIN_PASSWORD", "mypass");
define("ARTICLE_IMAGE_PATH", "images/articles");
define("IMG_TYPE_FULLSIZE", "fullsize");
define("IMG_TYPE_THUMB", "thumb");
define("ARTICLE_THUMB_WIDTH", 320);
define("JEPG_QUALITY", 100);
require(CLASS_PATH . "/Article.php" );
require(CLASS_PATH . "/Category.php");


function handleException ($exception) {
    echo "Sorry, a problem occured. Please try later.";
    error_log($exception->getMessage());
}
set_exception_handler('handleException');

?>