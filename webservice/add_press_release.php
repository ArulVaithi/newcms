<?php
include_once '../include/db_connection.php';

include '../include/session.php';
$operation = $_POST['operation'];
// echo $_POST['link'];
// exit;
if ($operation ==  'save') {
    if ($_POST['link'] != "") {
        $title = $_POST['title'];

        // $ad_filepath = $_POST['ad_files_'];
        $end_date = $_POST['end_date'];
        $link = $_POST['link'];
        $lang = $_POST['lang'];
        $filesize = 0;
        $sessionId = $_SESSION['userId'];
        $currdate = date('Y-m-d h:i:s');
        $mas_id = $_POST['mas_id'];
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
        if ($lang == 'en') {
            $sql = "insert into mst_pressrelease_en(title,announce_dt,filename,ad_link,filesize,inserted_by,uploaded_on,updated_on) values('$title','$end_date','','$link','','$sessionId','$currdate','$currdate')";
            $result = pg_query($db, $sql);
        } else {
            $query = "insert into mst_" . $tablename . "_" . $lang . " (title,announce_dt,filename,ad_link,filesize,inserted_by,uploaded_on,updated_on,mas_docid) values('$title','$end_date','','$link','','$sessionId','$currdate','$currdate',$mas_id)";
            $result = pg_query($db, $sql);
        }

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
    } else {

        if ($_FILES['file']['name'] != "") {


            $name = $_FILES['file']['name'];
            $temp_name = $_FILES['file']['tmp_name'];

            if (isset($name)) {

                if (!empty($name)) {
                    $location = '../uploads/';
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
                    $mas_id = $_POST['mas_id'];
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

                    // $query = "insert into mst_" . $tablename . "_" . $lang . " (title,announce_dt,filename,ad_link,filesize,inserted_by,uploaded_on,updated_on) values('$title','$end_date','$name','$link','$filesize','$sessionId','$currdate','$currdate')";
                    if ($lang == 'en') {
                        echo $lang;
                        $sql = "insert into mst_pressrelease_en(title,announce_dt,filename,ad_link,filesize,inserted_by,uploaded_on,updated_on) values('$title','$end_date','$name','$link','$filesize','$sessionId','$currdate','$currdate')";
                        echo  $sql;
                        $result = pg_query($db, $sql);
                    } else {
                        $query = "insert into mst_" . $tablename . "_" . $lang . " (title,announce_dt,filename,ad_link,filesize,inserted_by,uploaded_on,updated_on,mas_docid) values('$title','$end_date','$name','$link','$filesize','$sessionId','$currdate','$currdate',$mas_id)";
                        $result = pg_query($db, $sql);
                    }
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
}
