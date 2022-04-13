<?php
include_once '../include/db_connection.php';

include '../include/session.php';
// $userInfo = $_POST['title'];

$id = $_REQUEST['id'];

$status = $_REQUEST['status'];

$lang = $_REQUEST['lang'];

$sessionId = $_SESSION['userId'];
$currdate = date('Y-m-d h:i:s');
// echo $currdate;
// exit;   
$tablename = $_REQUEST['pagename'];

if ($tablename == 'recruitment') {
    $primary_id = 'rec_id';
} else {
    $primary_id = 'doc_id';
}


if ($tablename == 'events') {
    $primary_id = 'events_id';
} else {
    $primary_id = 'doc_id';
}

$table = "mst_" . $tablename . "_" . $lang . "";

if ($lang == 'en') {

    if ($status == 'Archive') {
        $setStatus = 'A';

        // $query = "update mst_newsannouncement_en set status='A',updated_by='$sessionId',	updated_on='$currdate'    where newsid = $id";
    } else if ($status == 'Hide') {
        $setStatus = 'H';
        // $query = "update mst_newsannouncement_en set status='H',updated_by='$sessionId',	updated_on='$currdate'    where newsid = $id";
    } else if ($status == 'Delete') {
        $setStatus = 'D';
        // $query = "update mst_newsannouncement_en set status='D',updated_by='$sessionId',	updated_on='$currdate'    where newsid = $id";
    } else {
        $setStatus = 'L';
        // $query = "update mst_newsannouncement_en set status='L',updated_by='$sessionId',	updated_on='$currdate'    where newsid = $id";
    }
} else if ($lang == 'hi') {
    // $table = 'mst_newsannouncement_hi';
    if ($status == 'Archive') {
        $setStatus = 'A';
        // $query = "update mst_newsannouncement_hi set status='A',updated_by='$sessionId',	updated_on='$currdate'    where newsid = $id";
    } else if ($status == 'Hide') {
        $setStatus = 'H';
        // $query = "update mst_newsannouncement_hi set status='H',updated_by='$sessionId',	updated_on='$currdate'    where newsid = $id";
    } else if ($status == 'Delete') {
        $setStatus = 'D';
        // $query = "update mst_newsannouncement_hi set status='D',updated_by='$sessionId',	updated_on='$currdate'    where newsid = $id";
    } else {
        $setStatus = 'L';
        // $query = "update mst_newsannouncement_hi set status='L',updated_by='$sessionId',	updated_on='$currdate'    where newsid = $id";
    }
} else {
    // $table = 'mst_newsannouncement_ta';
    if ($status == 'Archive') {
        $setStatus = 'A';
        // $query = "update mst_newsannouncement_ta set status='A',updated_by='$sessionId',	updated_on='$currdate'    where newsid = $id";
    } else if ($status == 'Hide') {
        $setStatus = 'H';
        // $query = "update mst_newsannouncement_ta set status='H',updated_by='$sessionId',	updated_on='$currdate'    where newsid = $id";
    } else if ($status == 'Delete') {
        $setStatus = 'D';
        // $query = "update mst_newsannouncement_ta set status='D',updated_by='$sessionId',	updated_on='$currdate'    where newsid = $id";
    } else {
        $setStatus = 'L';
        //  $query = "update mst_newsannouncement_ta set status='L',updated_by='$sessionId',	updated_on='$currdate'    where newsid = $id";
    }
}

//Generate the sql query based on username and password
$query = "update $table set status='$setStatus',updated_by='$sessionId',	updated_on='$currdate'    where $primary_id = $id";

echo  $query;


$result = pg_query($db, $query);

if (!$result) {
    echo 'failed';
} else {
    echo 'success';
}


    
// echo ($result);
