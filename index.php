<?php
require_once 'util/CisUtil.class.php';
CisUtil::autoload("util");
$pageTitle = "JoshuaMC | Home";
$bodyClasses = '';
$cssLinks = array("css/bootstrap.css", "css/Custom-Bootstrap-Util.css", "css/root.css", "css/Custom.css");
include 'fragments/startOfPage.php';
include "fragments/navbar.php";
?>

<?php
/*Header*/
$header = new Header(array("JoshuaMC", "Welcome!"), array("height" => "200px", "textAlign", "textDivClasses" => "", "classes" => "container"));
$header->build()
?>
    <main id="main" class="container pt-2 px-2">
        <article>
            <h2>About</h2>
            <p class="text-break d-inline-block w-100">
                Joshua Mckenna, who is he? Well, I am just a random guy who is 21 years old and loves making and
                creating things from my imagination, starting from the time I was young and building things like
                a
                house module out of lego... then switching to Minecraft. Eventually, I got into building and
                moderating Minecraft servers like Lifeboat Network. I also ran my own Minecraft server called...

                <a href="about/" class="text-decoration-underline d-inline-block" style="color: inherit; text-decoration: none; ">Continue</a>
            </p>
        </article>
    </main>
<?php

include 'fragments/footer.php';
$jsLinks = array("js/colorMode.js");
include 'fragments/endOfPage.php';
