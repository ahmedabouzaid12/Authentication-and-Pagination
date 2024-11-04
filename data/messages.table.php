<?php



$sql = "CREATE TABLE IF NOT EXISTS `messages` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(250) NOT NULL,
    `email` VARCHAR(250) NOT NULL,
    `phone` VARCHAR(15),
    `content` TEXT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";


$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Table 'messages' created successfully.<br>";
} else {
    echo "Error creating table 'messages': " . mysqli_error($conn);
}
