<?php
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        require_once '../controllers/HomeController.php';
        break;
    case 'about':
        require_once '../controllers/AboutController.php';
        break;
    default:
        echo "404 Not Found";
        break;
}
