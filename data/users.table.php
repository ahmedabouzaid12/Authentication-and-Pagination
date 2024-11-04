<?php
require_once('./postaty.php'); // Include the database connection file

// Create the `users` table if it doesn't already exist
$sql = "CREATE TABLE IF NOT EXISTS `users` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(250) NOT NULL,
    `email` VARCHAR(250) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `phone` VARCHAR(15) NOT NULL,
    `role` ENUM('user', 'admin') NOT NULL DEFAULT 'user',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";

// Execute the query to create the users table
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Table 'users' created successfully.<br>"; // Success message if table is created
} else {
    echo "Error creating table 'users': " . mysqli_error($conn); // Error message if table creation fails
}

// Sample Egyptian user data to insert
$users = [
    ['name' => 'Ahmed Khaled', 'email' => 'ahmed.khaled@example.com', 'password' => password_hash('password1', PASSWORD_DEFAULT), 'phone' => '01012345678'],
    ['name' => 'Fatma Mohamed', 'email' => 'fatma.mohamed@example.com', 'password' => password_hash('password2', PASSWORD_DEFAULT), 'phone' => '01023456789'],
    ['name' => 'Mohamed Ali', 'email' => 'mohamed.ali@example.com', 'password' => password_hash('password3', PASSWORD_DEFAULT), 'phone' => '01034567890'],
    ['name' => 'Sara Hassan', 'email' => 'sara.hassan@example.com', 'password' => password_hash('password4', PASSWORD_DEFAULT), 'phone' => '01045678901'],
    ['name' => 'Youssef El-Sayed', 'email' => 'youssef.sayed@example.com', 'password' => password_hash('password5', PASSWORD_DEFAULT), 'phone' => '01056789012'],
    ['name' => 'Mona Magdy', 'email' => 'mona.magdy@example.com', 'password' => password_hash('password6', PASSWORD_DEFAULT), 'phone' => '01067890123'],
    ['name' => 'Omar Abdelaziz', 'email' => 'omar.abdelaziz@example.com', 'password' => password_hash('password7', PASSWORD_DEFAULT), 'phone' => '01078901234'],
    ['name' => 'Nourhan Mostafa', 'email' => 'nourhan.mostafa@example.com', 'password' => password_hash('password8', PASSWORD_DEFAULT), 'phone' => '01089012345'],
    ['name' => 'Hossam Mahmoud', 'email' => 'hossam.mahmoud@example.com', 'password' => password_hash('password9', PASSWORD_DEFAULT), 'phone' => '01090123456'],
    ['name' => 'Dina Saeed', 'email' => 'dina.saeed@example.com', 'password' => password_hash('password10', PASSWORD_DEFAULT), 'phone' => '01001234567'],
    ['name' => 'Karim Nabil', 'email' => 'karim.nabil@example.com', 'password' => password_hash('password11', PASSWORD_DEFAULT), 'phone' => '01012345679'],
    ['name' => 'Hanan Kamel', 'email' => 'hanan.kamel@example.com', 'password' => password_hash('password12', PASSWORD_DEFAULT), 'phone' => '01023456780'],
    ['name' => 'Ali Ramadan', 'email' => 'ali.ramadan@example.com', 'password' => password_hash('password13', PASSWORD_DEFAULT), 'phone' => '01034567891'],
    ['name' => 'Sahar Youssef', 'email' => 'sahar.youssef@example.com', 'password' => password_hash('password14', PASSWORD_DEFAULT), 'phone' => '01045678902'],
    ['name' => 'Mostafa El-Farouk', 'email' => 'mostafa.farouk@example.com', 'password' => password_hash('password15', PASSWORD_DEFAULT), 'phone' => '01056789013'],
    ['name' => 'Rania Gamal', 'email' => 'rania.gamal@example.com', 'password' => password_hash('password16', PASSWORD_DEFAULT), 'phone' => '01067890124']
];

// Insert the sample users into the database
foreach ($users as $user) {
    $sql = "INSERT INTO `users` (`name`, `email`, `password`, `phone`) VALUES ('{$user['name']}', '{$user['email']}', '{$user['password']}', '{$user['phone']}')";
    $result = mysqli_query($conn, $sql); // Execute the insert query
    if (!$result) {
        echo "Error inserting user '{$user['name']}': " . mysqli_error($conn) . "<br>"; // Error message if insertion fails
    }
}

// Success message after inserting all users
echo "Sample users data inserted successfully.<br>";
?>
