<?php

// Connect to MySQL database
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); // Check connection status
}

$database = "cleaning_blog";

// SQL query to create the database if it doesn't exist
$create_db_sql = "CREATE DATABASE IF NOT EXISTS $database";
if (mysqli_query($conn, $create_db_sql)) {
    echo "Database '$database' is ready.<br> "; // Confirmation message for database creation
} else {
    die("Error creating database: " . mysqli_error($conn)); // Handle database creation error
}

// Select the database
mysqli_select_db($conn, $database);

// Include table creation scripts
require_once("./categories.table.php"); // Categories table
require_once("./posts.table.php");      // Posts table
require_once("./postaty.php");           // Additional post attributes
require_once("./users.table.php");       // Users table
require_once("./messages.table.php");    // Messages table

// Close the database connection
mysqli_close($conn); // Ensure the connection is closed
?>
