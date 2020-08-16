<?php
include_once('db/connection.php');

session_start();// Starting Session 
// Storing Session 
$user_check = $_SESSION['login_user']; 
$query = "SELECT * from admin where email = '$user_check'";
$ses_sql = mysqli_query($conn, $query); 
$row = mysqli_fetch_assoc($ses_sql); 
$login_session = $row['email'];
?>