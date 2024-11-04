<?php
require_once('./postaty.php'); // Include the database connection file

// Create the `posts` table if it doesn't already exist
$sql = "CREATE TABLE IF NOT EXISTS `posts` (
    `id` INT PRIMARY KEY AUTO_INCREMENT, 
    `title` VARCHAR(250) NOT NULL, 
    `content` TEXT NOT NULL, 
    `author` VARCHAR(100) NOT NULL, 
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);";

// Execute the table creation query
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Table 'posts' created successfully.<br>"; // Success message if table is created
} else {
    echo "Error creating table: " . mysqli_error($conn); // Error message if table creation fails
}

// Check for existing data to avoid duplication
$check_sql = "SELECT COUNT(*) AS count FROM `posts`"; // Query to count existing posts
$check_result = mysqli_query($conn, $check_sql); // Execute the count query
$row = mysqli_fetch_assoc($check_result); // Fetch the count result

if ($row['count'] == 0) { // If no posts exist
    // Insert real data for display on the website
    $sql = "INSERT INTO `posts` (`title`, `content`, `author`) VALUES 
    ('Abu Zaid al-Hilali','".mysqli_real_escape_string($conn, $abouzaid_elhelaly)."','Abdel Rahman El-Abnudi'),
    ('Salah al-Din Al-Ayyubi','".mysqli_real_escape_string($conn, $salah_eldien)."','Sami Girgis'),
    ('The Mamluks in Egypt','".mysqli_real_escape_string($conn, $mamluks)."','Mona Zaki'),
    ('Ibn Sina','".mysqli_real_escape_string($conn, $sina)."','Ali Mohammed'),
    ('One Thousand and One Nights','".mysqli_real_escape_string($conn, $thousand)."','Fatima Selim'),
    ('Caliph Umar ibn al-Khattab','".mysqli_real_escape_string($conn, $umar)."','Mohamed Shawqi'),
    ('Islamic Manuscripts','".mysqli_real_escape_string($conn, $manuscripts)."','Reem Khaled'),
    ('Al-Farabi','".mysqli_real_escape_string($conn, $farabi)."','Samer Tawfiq'),
    ('Ibn Rushd','".mysqli_real_escape_string($conn, $rushd)."','Issam Helmy'),
    ('Islamic architecture','".mysqli_real_escape_string($conn, $architecture)."','Hala Yahya'),
    ('Al-Ghazali','".mysqli_real_escape_string($conn, $ghazali)."','Adnan Al-Rifai'),
    ('Adnan Al-Rifai','".mysqli_real_escape_string($conn, $adnan)."','Abdel Rahman ALi'),
    ('History of Al-Andalus','".mysqli_real_escape_string($conn, $history)."','Ghada Ahmed'),
    ('The Arabian Peninsula','".mysqli_real_escape_string($conn, $peninsula)."','Badr Al-Din'),
    ('Arabic Poetry','".mysqli_real_escape_string($conn, $poetry)."','Sirin Fouad'),
    ('Ibn Al-Haytham','".mysqli_real_escape_string($conn, $haytham)."','AOmar Al-Shami')
    "; // Prepare the insert query with sample posts

    // Execute the insert query
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Sample posts data inserted successfully.<br>"; // Success message if data is inserted
    } else {
        echo "Error inserting data: " . mysqli_error($conn); // Error message if insertion fails
    }
} else {
    echo "Data already exists in 'posts'. No duplicate insertion.<br>"; // Message if data already exists
}

