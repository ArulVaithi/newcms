<?php
include_once '../include/db_connection.php';

include '../include/session.php';
// $userInfo = $_POST['title'];
// echo $_POST['link'];
// exit;
if($_POST['link'] !="")
{
    $title = $_POST['title'];

    // $ad_filepath = $_POST['ad_files_'];
    $end_date = $_POST['end_date'];
    $link = $_POST['link'];
    $lang = $_POST['lang'];
    $filesize = 0;
    $sessionId = $_SESSION['userId'];
    $currdate = date('Y-m-d h:i:s');

    $tablename = $_POST['pagename'];
    // $tablename . = $lang;
    //Generate the sql query based on username and password
    // if ($lang == 'en') {
    //     $table = "mst_".$tablename."_en";
    //     // $query = "insert into niot_announce_en(title,date,fileName,link,insertedId,updated_at) values('$title',STR_TO_DATE('$end_date', '%d-%m-%Y'),'$ad_filepath','$link',$sessionId,'$currdate')";
    // } else if ($lang == 'hi') {
    //     $table = "mst_".$tablename."_hi";
    //     //$query = "insert into niot_announce_hi(title,date,fileName,link,insertedId,updated_at) values('$title',STR_TO_DATE('$end_date', '%d-%m-%Y'),'$ad_filepath',$sessionId,'$currdate')";
    // } else {
    //     $table = "mst_$newsannouncement_ta";
    //     //$query = "insert into niot_announce_ta(title,date,fileName,link,insertedId,updated_at) values('$title',STR_TO_DATE('$end_date', '%d-%m-%Y'),'$ad_filepath',$sessionId,'$currdate')";

    // }

    $query = "insert into mst_".$tablename."_".$lang." (title,filename,link,filesize,inserted_by,uploaded_on,updated_on) values('$title','','$link','','$sessionId','$currdate','$currdate')";

     echo $query;
    $result = pg_query($db, $query);
    if ($result) {
        // $userData = pg_fetch_assoc($result);
       echo 'ok';
        // $data['result'] = $userData;
        
    } else {
        // $userData = pg_fetch_assoc($result);
       echo  'error';
        // $data['result'] = '';
       
    }
   // exit;
}

else
{

if ($_FILES['file']['name'] != "") {
    

    $name = $_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name'];

    if (isset($name)) {

        if (!empty($name)) {
            $location = '../uploads/employeescorner/'.$tablename.'';
        }

        if (move_uploaded_file($temp_name, $location . $name)) {

            // exit;
            $title = $_POST['title'];
            // $ad_filepath = $_POST['ad_files_'];
            $end_date = $_POST['end_date'];
            $link = $_POST['link'];
            $lang = $_POST['lang'];
            $filesize = $_POST['filesize'];
            $sessionId = $_SESSION['userId'];
            $tablename = $_POST['pagename'];
            $currdate = date('Y-m-d h:i:s');


            //Generate the sql query based on username and password
            // if ($lang == 'en') {
            //     $table = "mst_".$tablename."_en";
            //     // $query = "insert into niot_announce_en(title,date,fileName,link,insertedId,updated_at) values('$title',STR_TO_DATE('$end_date', '%d-%m-%Y'),'$ad_filepath','$link',$sessionId,'$currdate')";
            // } else if ($lang == 'hi') {
            //     $table = "mst_".$tablename."_hi";
            //     //$query = "insert into niot_announce_hi(title,date,fileName,link,insertedId,updated_at) values('$title',STR_TO_DATE('$end_date', '%d-%m-%Y'),'$ad_filepath',$sessionId,'$currdate')";
            // } else {
            //     $table = "mst_".$newsannouncement."_ta";
            //     //$query = "insert into niot_announce_ta(title,date,fileName,link,insertedId,updated_at) values('$title',STR_TO_DATE('$end_date', '%d-%m-%Y'),'$ad_filepath',$sessionId,'$currdate')";
        
            // }

            $query = "insert into mst_".$tablename."_".$lang." (title,filename,link,filesize,inserted_by,uploaded_on,updated_on) values('$title','$name','$link','$filesize','$sessionId','$currdate','$currdate')";

            echo $query;
            $result = pg_query($db, $query);
            if ($result) {
                // $userData = pg_fetch_assoc($result);
               echo 'ok';
                // $data['result'] = $userData;
                
            } else {
                // $userData = pg_fetch_assoc($result);
               echo  'error';
                // $data['result'] = '';
               
            }
        
            // echo json_encode($data);
        }
    } else {
        echo 'please uploaded';
        exit;
    }




    // echo ($result);
} 
}
?>