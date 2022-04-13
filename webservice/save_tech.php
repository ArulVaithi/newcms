<?php
include('../include/db_connection.php');
include '../include/session.php';

$contents = $_REQUEST['contents'];
$techid = $_REQUEST['techid'];
$status = $_REQUEST['status'];
$operation = $_POST['operation'];
$sessionId = $_SESSION['userId'];
$currdate = date('Y-m-d h:i:s');
$lang = $_REQUEST['lang'];
$shortlang;


if ($lang == 'english') {
    $shortlang = 'en';
} else if ($lang == 'hindi') {
    $shortlang = 'hi';
} else if ($lang == 'tamil') {
    $shortlang = 'ta';
}

if ($operation == 'save' ) {
    $sql = "insert into niot_technology_$shortlang(contents, mas_id,inserted_by) VALUES('$contents',$techid,'$sessionId')";
    $result = pg_query($db, $sql);

    if ($result) {
        $data['status'] = 'ok';
        $data['result'] = $sql;
        // $data['result'] = '';
        // $userData = pg_fetch_assoc($result);
       
        // $data['result'] = $userData;
        
    } else {
        // $userData = pg_fetch_assoc($result);
        $data['status'] = 'err';
        $data['result'] = $sql;
       
    }
    // echo $sql;
    echo json_encode($data);
} else  {
    if ($lang == 'english') {
        $sql = "update niot_technology_$shortlang set contents= '$contents',uploaded_on ='$currdate'  where techid = $techid ";
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
    $sql = "update niot_technology_$shortlang set  contents = '$contents', uploaded_on ='$currdate' where mas_id = $techid";
    $result = pg_query($db, $sql);

    if ($result) {
        // $userData = pg_fetch_assoc($result);
        $data['status'] = 'ok';
        $data['result'] = $sql;
        
    } else {
        // $userData = pg_fetch_assoc($result);
        $data['status'] = 'error';
        // $data['result'] = '';
        $data['result'] = $sql;
       
    }
    
    // echo $sql;

    
    echo json_encode($data);
 
    // $sql = "update niot_technology_$shortlang set contents= '$contents',uploaded_on ='$currdate'  where mas_id = $techid ";
    // $result = pg_query($db, $sql);
  
    
} 


// }
// else if($type =='missionstatement')
// {
// $sql = "INSERT INTO niot_about($type, created_by) VALUES('$content','$sessionId' )";
// }
// $result = [];


// echo $sql;
