<?php
include_once('db/connection.php');// mysqli_connect() function opens a new connection to the MySQL server. 
include('session.php');
//session_start();


mysqli_close($conn);

session_destroy();

header('Location: index.php');


?>