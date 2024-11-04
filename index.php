<?php
session_start();
define("BASE_PATH", __DIR__ . DIRECTORY_SEPARATOR);
define("BASE_URL", "http://127.0.0.1/Clean%20Blog/");

require_once(BASE_PATH . 'data/connection.php');
// require_once(BASE_PATH . 'core/database.php');

$routes = [
    "home",
    "about",
    "post",
    "contact",
    "login",
    "logout",
    "validat-login",
    "validate-user",
    "add-user",
];

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    
    // If the page is a number, redirect the user to the home page
    if (is_numeric($page)) {
        require_once BASE_PATH . 'controllers/home.controller.php'; // Redirect to home
    } elseif (in_array($page, $routes)) {
        require_once BASE_PATH . 'controllers/' . $page . ".controller.php"; // Redirect to known pages
    } else {
        require_once "views/404.view.php"; // Page not found
    }
} else {
    require_once "views/home.view.php"; // Default to home page
}
