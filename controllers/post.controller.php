<?php


function get_row_by_id($table,$id){
    global $conn ;
    $sql = "SELECT * FROM `$table` WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result) ?? [];
}



if(isset($_GET['id'])){
    $id = $_GET['id'];
    $post = get_row_by_id("posts",$id);
    require_once BASE_PATH . 'views/post.view.php'; 
}

