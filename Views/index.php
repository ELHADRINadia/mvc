<?php
require_once '.autoload.php';
require_once './Controller/HomeController.php';
$home = new HomeController();
$pages = ['home', 'add', 'update', 'delete'];

if (isset($_GET['page'])) {
    if (in_array($_GET['page'], $pages)) {
        $page = $_GET['page'];
        $Home->index($page);

    } else {
        include 'views/includes/404.php';
    }

} else {
    $Home->index();
}