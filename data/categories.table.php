<?php



// SQL query to create the `categories` table if it does not exist
$sql = "CREATE TABLE IF NOT EXISTS `categories` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(250) NOT NULL
);";

// Execute the table creation query
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Table 'categories' created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Check if the `categories` table already contains data
$check_sql = "SELECT COUNT(*) AS count FROM `categories`";
$check_result = mysqli_query($conn, $check_sql);
$row = mysqli_fetch_assoc($check_result);

// Insert sample data only if the table is empty
if ($row['count'] == 0) {
    // SQL query to insert sample data into `categories`
    $sql = "INSERT INTO `categories` (`title`) VALUES 
        ('Home Cleaning'), 
        ('Office Cleaning'), 
        ('Carpet Cleaning'), 
        ('Window Cleaning'), 
        ('Gardening'), 
        ('Pest Control'), 
        ('Plumbing'), 
        ('Electrical Services'), 
        ('Painting'), 
        ('Moving Services'), 
        ('Air Conditioning'), 
        ('Furniture Cleaning'), 
        ('Pool Maintenance'), 
        ('Roof Cleaning'), 
        ('Waterproofing'), 
        ('Laundry Services')";

    // Execute the insert query
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Sample data inserted into 'categories' successfully.<br>";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
} else {
    echo "Data already exists in 'categories'. No duplicate insertion.<br>";
}

