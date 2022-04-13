<?php
include('../include/db_connection.php');
include '../include/session.php';
// $host     = 'localhost';
// $db       = 'mst';
// $user     = 'postgres';
// $password = 'postgress';
// $dsn = "pgsql:host=$host;dbname=$db;port=5432;";
$lang = $_REQUEST['lang'];
$content = $_REQUEST['value'];
$operation = $_POST['operation'];
$type = $_REQUEST['type'];
$sessionId = $_SESSION['userId'];
$checkrowcount = $_REQUEST['checkrowcount'];
// if($type =='vision')
// {
if ($lang == "english") {
     if ($operation == 'save' && $checkrowcount == 0) {
          $sql = "INSERT INTO mst_about_en($type, inserted_by) VALUES('$content','$sessionId' )";
          
     } else {
          $sql = "update mst_about_en set $type = '$content' ";
     }
} else if ($lang == "hindi") {
     if ($operation == 'save' && $checkrowcount == 0) {
          $sql = "INSERT INTO mst_about_hi($type, inserted_by) VALUES('$content','$sessionId' )";

     } else {
          $sql = "update mst_about_hi set $type= '$content' ";
     }
} else if ($lang == "tamil"){
     if ($operation == 'save' && $checkrowcount == 0) {
          $sql = "INSERT INTO mst_about_ta($type, inserted_by) VALUES('$content','$sessionId' )";
          echo $sql;
     } else {
          $sql = "update mst_about_ta set $type= '$content' ";
     }
}
// }
// else if($type =='missionstatement')
// {
// $sql = "INSERT INTO mst_about($type, created_by) VALUES('$content','$sessionId' )";
// }

echo $sql;
$result = pg_query($db, $sql);



// echo $_REQUEST['title'];
// echo $_REQUEST['title'];
echo "Post saved successfully!";
