<?php
require_once 'util/CisUtil.class.php';
CisUtil::autoload("util");

$pageTitle = "Trivia";
$cssLinks = array("css/bootstrap.css","css/Custom-Bootstrap-Util.css","css/root.css","css/Custom.css");
include 'fragments/startOfPage.php';
include "fragments/navbar.php";
?>

<?php
/*Header*/
$header = new Header("Hello world", array("height"=>"158px"));
$header->build()
?>
    <main id="main" class="container bg-light">



    </main>
<?php
$jsLinks = array("js/colorMode.js");
include 'fragments/endOfPage.php';
