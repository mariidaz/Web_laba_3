<?php
include("layout/header.php");
include("layout/left_menu.php");

$action = $_GET['action'] ?? 'main';

$file = "views/$action.php";

if (!file_exists($file)) {
    $file = "views/main.php";
}

include($file);

include("layout/footer.php");
?>