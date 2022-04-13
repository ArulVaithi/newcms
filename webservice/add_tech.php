<?php
include('../include/db_connection.php');
include '../include/session.php';

$technology_en = $_REQUEST['technology_en'];
$technology_hi = $_REQUEST['technology_hi'];
$technology_ta = $_REQUEST['technology_ta'];

$status = $_REQUEST['status'];

$operation = $_REQUEST['operation'];
$sessionId = $_SESSION['userId'];
// $currdate = date('Y-m-d h:i:s');

if ($operation == 'save') {
    $sql = "insert into mst_technology_en(title, inserted_by) VALUES('$technology_en','$sessionId')";
    $result = pg_query($db, $sql);


    $get_id = "select max(tech_id) as id from mst_technology_en ";
    $result_getid = pg_query($db, $get_id);
    $row = pg_fetch_assoc($result_getid);


    $lastid = $row['id'];

    $sql = "insert into mst_technology_hi(title, inserted_by,mas_id) VALUES('$technology_hi','$sessionId',$lastid )";
    $result = pg_query($db, $sql);
    $sql = "insert into mst_technology_ta(title, inserted_by,mas_id) VALUES('$technology_ta','$sessionId',$lastid )";
    if ($sql === false) {
        echo 'error';
    } else {
        echo 'success';
    }
    $result = pg_query($db, $sql);
    // if($type =='vision')
    // {
    // if ($operation == 'save' ) {
    //      $sql = "insert into niot_addtech(technology, created_by) VALUES('$technology','$sessionId')";
    // } else {
    //      $sql = "update niot_addtech set technology= '$technology', status = '$status',uploaded_on ='$currdate'  where techid = $techid ";
    // }
    // }
    // else if($type =='missionstatement')
    // {
    // $sql = "INSERT INTO niot_about($type, created_by) VALUES('$content','$sessionId' )";
    // }








    // echo $_REQUEST['title'];
    // echo $_REQUEST['title'];
    // echo "Post saved successfully!";
} else if ($operation == 'edit' && $status == 'A') {
    $technology = $_REQUEST['technology'];
    $mas_id = $_REQUEST['techid'];
    $status = $_REQUEST['status'];
    $lang = $_REQUEST['lang'];

    if ($lang == 'english') {
        $sql = "update mst_technology_en set  title = '$technology', status  = '$status' where tech_id = $mas_id";
        // if ($sql == false) {
        //     echo 'error';
        // } else {
        //     echo 'success';
        // }
        $result = pg_query($db, $sql);
    } else if ($lang == 'hindi') {

        $setlang  = 'hi';
    } else {
        $setlang = 'ta';
    }
    $sql = "update mst_technology_$setlang set  title = '$technology', status  = '$status' where mas_id = $mas_id";
    echo $sql;
    if ($sql == false) {
        echo 'error';
    } else {
        echo 'success';
    }
    $result = pg_query($db, $sql);
}

if ($operation == 'edit' && $status == 'H') {
    $technology = $_REQUEST['technology'];
    $mas_id = $_REQUEST['techid'];
    $status = $_REQUEST['status'];
    $lang = $_REQUEST['lang'];

    $sql = "update mst_technology_en set  status  = '$status' where tech_id = $mas_id";
    $result = pg_query($db, $sql);

    $sql = "update mst_technology_hi set  status  = '$status' where mas_id = $mas_id";
    $result = pg_query($db, $sql);

    $sql = "update mst_technology_ta set   status  = '$status' where mas_id = $mas_id";
    $result = pg_query($db, $sql);

    // if ($lang == 'english' ) {
    //     $sql = "update mst_technology_e set  status  = 'H' where tech_id = $mas_id";
    //     // if ($sql == false) {
    //     //     echo 'error';
    //     // } else {
    //     //     echo 'success';
    //     // }
    //     $result = pg_query($db, $sql);
    // } else if ($lang == 'hindi') {

    //     $lang  = 'hi';
    // } else {
    //     $lang = 'ta';
    // }
    // $sql = "update mst_technology_$lang set  status  = 'H' where mas_id = $mas_id";
    echo $sql;
    $result = pg_query($db, $sql);
    if ($sql == false) {
        echo 'error';
    } else {
        echo 'success';
    }
}

// echo 'update successfully';
