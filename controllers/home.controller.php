<?php


// require_once 'data/connection.php'; 

// $sql = "SELECT * FROM posts LIMIT 5";
// $posts = mysqli_query($conn, $sql);

// function map_data($data) {
//     $all_data = []; 
//     while($row = mysqli_fetch_assoc($data)){
//         $all_data[] = $row;
//     }
//     return $all_data;
// }

// $all_data = map_data($posts); 

// require_once BASE_PATH . 'views/home.view.php'; 




require_once 'data/connection.php'; // Ensure the path is correct

// Define the number of posts per page
$posts_per_page = 5; 

// Get the current page from the GET request
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Ensure the current page is not less than 1
if ($current_page < 1) {
    $current_page = 1;
}

// Calculate the offset
$offset = ($current_page - 1) * $posts_per_page;

// Get the total number of posts
$total_posts_query = "SELECT COUNT(*) as total FROM posts";
$total_posts_result = mysqli_query($conn, $total_posts_query);
$total_posts_row = mysqli_fetch_assoc($total_posts_result);
$total_posts = $total_posts_row['total'];

// Calculate the total number of pages
$total_pages = ceil($total_posts / $posts_per_page);

// Ensure the offset does not exceed the total number of posts
if ($offset >= $total_posts) {
    $offset = ($total_pages - 1) * $posts_per_page; // Adjust the offset to the last page
}

// Modify the SQL query to fetch posts with LIMIT and OFFSET
$sql = "SELECT * FROM posts LIMIT $offset, $posts_per_page";
$posts = mysqli_query($conn, $sql);

// Check for query errors
if (!$posts) {
    die("Query Failed: " . mysqli_error($conn));
}

function map_data($data) {
    $all_data = []; // Define the array here
    while($row = mysqli_fetch_assoc($data)){
        $all_data[] = $row;
    }
    return $all_data;
}

$all_data = map_data($posts);

// Pass the necessary variables to the view
require_once BASE_PATH . 'views/home.view.php'; 
