<?php
include('../include/db_connection.php');
include '../include/session.php';
// $host     = 'localhost';
// $db       = 'niot';
// $user     = 'postgres';
// $password = 'postgress';
// $dsn = "pgsql:host=$host;dbname=$db;port=5432;";
// $value = $_REQUEST['name'];
$content = $_REQUEST['value'];
$operation = $_POST['operation'];
$types = $_REQUEST['type'];
$sessionId = $_SESSION['userId'];
// $checkrowcount = $_REQUEST['checkrowcount']; 
$lang = $_REQUEST['lang'];
$shortlang;

// if($type =='vision')
// {
if ($lang == 'english') {
     $shortlang = 'en';
} else if ($lang == 'hindi') {
     $shortlang = 'hi';
} else if ($lang == 'tamil') {
     $shortlang = 'ta';
}

if ($operation == 'save') {
     $sql = "INSERT INTO mst_whoswho_$shortlang(designation,contents, inserted_by) VALUES('$types','$content','$sessionId' )";
} else {
     $sql = "update mst_whoswho_$shortlang set contents= '$content' where designation = '$types' and status='A'";
}
// if ($lang == 'english') {
//      if ($operation == 'save') {
//           $shortlang = 'en';

//           $sql = "INSERT INTO niot_whos_who(designation,contents, created_by) VALUES('$types','$content','$sessionId' )";
//      } else {
//           $sql = "update niot_whos_who set contents= '$content' where designation = '$types' and status='A'";
//      }
// } else if ($lang == 'hindi') {
//      if ($operation == 'save') {
//           $sql = "INSERT INTO niot_whos_who(designation,contents, created_by) VALUES('$types','$content','$sessionId' )";
//      } else {
//           $sql = "update niot_whos_who set contents= '$content' where designation = '$types' and status='A'";
//      }
// } else if ($lang == 'tamil') {
//      if ($operation == 'save') {
//           $sql = "INSERT INTO niot_whos_who(designation,contents, created_by) VALUES('$types','$content','$sessionId' )";
//      } else {
//           $sql = "update niot_whos_who set contents= '$content' where designation = '$types' and status='A'";
//      }
// }
// }
// else if($type =='missionstatement')
// {
// $sql = "INSERT INTO niot_about($type, created_by) VALUES('$content','$sessionId' )";
// }

echo $sql;
$result = pg_query($db, $sql);



// echo $_REQUEST['title'];
// echo $_REQUEST['title'];
echo "Post saved successfully!";
