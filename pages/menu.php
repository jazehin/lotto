<?php

$content = "pages/huzasok.php";

if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
        case "huzasok":
            $content = "pages/huzasok.php";
            break;
        case 'ev':
            $content = "pages/ev.php";
            break;
        case 'adatlap':
            $content = "pages/adatlap.php";
            break;
        case 'mikor':
            $content = "pages/mikor.php";
            break;
        case 'tippelo':
            $content = "pages/tippelo.php";
            break;
        default:
            $content = "pages/huzasok.php";
            break;
    }
}

?>