<?php
include('../include/db_connection.php');
include '../include/session.php';

$rtiname = $_REQUEST['rtiname'];
$rtidesignation = $_REQUEST['rtidesignation'];
$rtirole = $_REQUEST['rtirole'];
$rtiaddress = $_REQUEST['rtiaddress'];
$rtiphone = $_REQUEST['rtiphone'];
$rtiemail = $_REQUEST['rtiemail'];
$operation = $_POST['operation'];
// $types = $_REQUEST['type'];
$sessionId = $_SESSION['userId'];
// $checkrowcount = $_REQUEST['checkrowcount']; 
$lang = $_REQUEST['lang'];
$rti_id = $_REQUEST['id'];
$shortlang;

// if($type =='vision')
// {
if ($lang == 'en') {
    $shortlang = 'en';
} else if ($lang == 'hi') {
    $shortlang = 'hi';
} else if ($lang == 'ta') {
    $shortlang = 'ta';
}

if ($operation == 'save') {
    $sql = "INSERT INTO mst_rticontacts_$shortlang(rtiname,rtidesignation,rtirole,rtiaddress,rtiphone, rtiemail,inserted_by) VALUES('$rtiname','$rtidesignation','$rtirole','$rtiaddress','$rtiphone','$rtiemail','$sessionId') ";
} else {
    $sql = "update mst_rticontacts_$shortlang set rtiname= '$rtiname',rtidesignation= '$rtidesignation',rtirole= '$rtirole',rtiaddress= '$rtiaddress',rtiphone= '$rtiphone',rtiemail= '$rtiemail' where rti_id=$rti_id and status='A'";
}

// $data;
// echo $sql;
$result = pg_query($db, $sql);

if ($result) {
    // $userData = pg_fetch_assoc($result);
    $data['status'] = 'ok';
     $data['result'] = $sql;

} else {
    // $userData = pg_fetch_assoc($result);
    $data['status'] = 'error';
     $data['result'] = $sql;

}

// echo $sql;


echo json_encode($data);

// echo $_REQUEST['title'];
// echo $_REQUEST['title'];
// echo "Post saved successfully!";
