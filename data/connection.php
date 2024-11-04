<?php


$conn = mysqli_connect("localhost","root","","cleaning_blog");
if(!$conn){
    die("connection Failed : " . mysqli_connect_error());
}