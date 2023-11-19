<?php
$root = "../";
$description = "Here you can find Joshua Mckenna's projects he is working on";
$canonical = "projects/";
$pageTitle = "Joshua Mckenna's Programming Projects";
require_once '../util/CisUtil.class.php';
require_once '../util/Header.class.php';
include '../fragments/startOfPage.php';
include "../fragments/navbar.php";

?>

<?php
/*Header*/
$header = new Header(array("My Projects",'Here are some of my project that I\'m working on <a class="link-primary" href="https://github.com/PopGTN"
                                                              target="_blank">my GitHub</a>!'), array("height" => "200px", "textAlign","textDivClasses"=>"", "classes"=>"container", "STClasses"=>"fs-5"));
$header->build()
?>
    <main id="main" class="container pt-2">
        <div class="pt-5">
            <div>
                <div class="container-md">
                    <div class="row" id="repositories-list"></div>
                </div>
                <div class="container mt-4">
                    <ul class="pagination justify-content-center" id="pagination">
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);"
                               onclick="previousPage()">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);" onclick="nextPage()">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
            <script src="github.js"></script>
        </div>
    </main>
<?php

include '../fragments/footer.php';
$jsLinks = array("../js/colorMode.js");
include '../fragments/endOfPage.php';
