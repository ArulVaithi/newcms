<?php
include_once '../include/db_connection.php';

include '../include/session.php';

print_r($_FILES['file']['name']);
// $max_id = "select title_id from mst_recruitment_en";

// $result = pg_query($db, $max_id);
// $row = pg_fetch_assoc($result);
// $title_id = $row['title_id'];
// // echo $title_id;
// if ($title_id == 0 || $title_id == '') {
//     $lasttitle_id = 1;
// } else {
//     $lasttitle_id = $title_id + 1;
// }
// print_r($_FILES['file']);
// print_r($_FILES['appfile']);

// exit;
// exit;s
// $userInfo = $_POST['title'];
// echo $_POST['link'];
// exit;
// if ($_POST['link'] != "") {
//     $title = $_POST['title'];

//     // $ad_filepath = $_POST['ad_files_'];
//     $end_date = $_POST['end_date'];
//     $link = $_POST['link'];
//     $lang = $_POST['lang'];
//     $filesize = 0;
//     $sessionId = $_SESSION['userId'];
//     $currdate = date('Y-m-d h:i:s');

//     $tablename = $_POST['pagename'];
//     // $tablename . = $lang;
//     //Generate the sql query based on username and password
//     // if ($lang == 'en') {
//     //     $table = "mst_".$tablename."_en";
//     //     // $query = "insert into niot_announce_en(title,date,fileName,link,insertedId,updated_at) values('$title',STR_TO_DATE('$end_date', '%d-%m-%Y'),'$ad_filepath','$link',$sessionId,'$currdate')";
//     // } else if ($lang == 'hi') {
//     //     $table = "mst_".$tablename."_hi";
//     //     //$query = "insert into niot_announce_hi(title,date,fileName,link,insertedId,updated_at) values('$title',STR_TO_DATE('$end_date', '%d-%m-%Y'),'$ad_filepath',$sessionId,'$currdate')";
//     // } else {
//     //     $table = "mst_$newsannouncement_ta";
//     //     //$query = "insert into niot_announce_ta(title,date,fileName,link,insertedId,updated_at) values('$title',STR_TO_DATE('$end_date', '%d-%m-%Y'),'$ad_filepath',$sessionId,'$currdate')";

//     // }

//     $query = "insert into mst_" . $tablename . "_" . $lang . " (title,announce_dt,filename,link,filesize,inserted_by,uploaded_on,updated_on) values('$title','$end_date','','$link','','$sessionId','$currdate','$currdate')";

//     echo $query;
//     $result = pg_query($db, $query);
//     if ($result) {
//         // $userData = pg_fetch_assoc($result);
//         echo 'ok';
//         // $data['result'] = $userData;

//     } else {
//         // $userData = pg_fetch_assoc($result);
//         echo  'error';
//         // $data['result'] = '';

//     }
//     // exit;
// } else {

if ($_FILES['file']['name'] != "" ) {

    $ad_name = $_FILES['file']['name'];
    $add_temp_name = $_FILES['file']['tmp_name'];


    if (isset($ad_name)) {

        if (!empty($ad_name)) {
            $location = '../uploads/events/';
        }
        echo 'success';

        if (move_uploaded_file($add_temp_name, $location . $ad_name) ) {
            
            $eventtitle = $_POST['eventtitle'];
            // $ad_filepath = $_POST['ad_files_'];
            $end_date = $_POST['end_date'];
            $link = $_POST['link'];
            $lang = $_POST['lang'];
            $filesize = $_POST['filesize'];
            // $app_filesize = $_POST['app_filesize'];
            $eventvenue = $_POST['eventvenue'];
            // $onlinedate = $_POST['onlinedate'];
            // $hardcopydate = $_POST['hardcopydate'];
            // $receiptdate = $_POST['receiptdate'];
            $sessionId = $_SESSION['userId'];
            $tablename = $_POST['pagename'];
            $currdate = date('Y-m-d h:i:s');

            // form_data.append('ad_files', app_filename);
            // form_data.append('app_files', ad_files);
            // form_data.append('filesize', exactSize);
            // form_data.append('announcement', announcements);
            // form_data.append('onlinedate', onlinedate);
            // form_data.append('receiptdate', receiptdate);
            // form_data.append('hardcopydate', hardcopydate);
            // form_data.append('pagename', 'recruitement');

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

            // echo $lasttitle_id;
            // echo $resultdirector_hi_count;
            // echo $lasttitle_id;
            // exit;

            $query = "insert into mst_" . $tablename . "_" . $lang . " (title,event_dt,eventvenue,eventfile,ad_link,ad_filesize,inserted_by,updated_on) values('$eventtitle','$end_date','$eventvenue','$ad_name','$link','$filesize','$sessionId','$currdate')";

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
// }
