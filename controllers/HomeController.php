<?php
require_once '../models/PageModel.php';
$message = PageModel::getWelcomeMessage();

$pageTitle = 'Home';
$viewFile  = '../views/home.php';
include '../views/layout.php';