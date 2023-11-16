<?php
global $bodyAttributes, $pageTitle, $bodyClasses, $headHtml, $csslinks, $root;
$pageTitle = isset($pageTitle) ? $pageTitle : "My Website";
$bodyClasses = isset($bodyClasses) ? $bodyClasses : "";
$headHtml = isset($headHtml) ? $headHtml : "";
$bodyAttributes = isset($bodyAttributes) ? $bodyAttributes : "";
$cssLinks = isset($cssLinks) ? $cssLinks : "";
$root = (!isset($root) ? "" : $root);

?>
<!DOCTYPE html>
<html data-bs-theme="light">
<head>
    <title><?php echo $pageTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Commented out because its  include in project-->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">-->


    <link href="<?=$root?>css/bootstrap.css"  rel="stylesheet">
    <link href="<?=$root?>css/Custom-Bootstrap-Util.css"  rel="stylesheet">
    <link href="<?=$root?>css/root.css"  rel="stylesheet">
    <link href="<?=$root?>css/Custom.css"  rel="stylesheet">

    <?php
    //loads the Css links
    if ($cssLinks != "") {
        if (is_array($cssLinks)) {
            foreach ($cssLinks as $link) {
                echo "<link href=\"{$link}\" rel='stylesheet'>";
            }
        } else {
            echo "<link href=\"{$csslinks}\" rel='stylesheet'>";
        }
    }
    ?>


    <?= $headHtml ?>
</head>
<body class="<?= $bodyClasses ?>" <?= $bodyAttributes ?>>