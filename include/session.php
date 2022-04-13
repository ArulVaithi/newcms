<?php
   include('db_connection.php');
session_start();

$user_check = $_SESSION['username'];

$ses_sql = pg_query($db,"select userid,username from mst_login where username = '$user_check'");

$row = pg_fetch_assoc($ses_sql);

$login_session = $row['username'];
// $login_userId = $row['userId'];
$_SESSION['userId']=$row['userid'];

if (!isset($_SESSION['username'])) {
    header('location:signin.php');
    die();
}
?>
