<?php
include_once '../db/db_connection.php';

include '../session.php';



if ($_FILES['file']['name'] != '') {

	$name = $_FILES['file']['name'];
	$temp_name = $_FILES['file']['tmp_name'];

	if (isset($name)) {

		if (!empty($name)) {
			$location = '../uploads/';
		}

		if (move_uploaded_file($temp_name, $location . $name)) {

			
			$id = $_POST['id'];
			$title = $_POST['title'];
			// $ad_filepath = $_POST['ad_filepath'];
			$end_date = $_POST['end_date'];
			$statusType = $_POST['statusType'];
			$language = $_POST['language'];
			$link = $_POST['modalLink'];
			$filesize = $_POST['filesize'];
			$sessionId = $_SESSION['userId'];
			$currdate = date('Y-m-d h:i:s');


			//Generate the sql query based on username and password
			if ($language == 'en') {
				$table = 'mst_newsannouncement_en';
				// $query = "insert into niot_announce_en(title,date,fileName,link,insertedId,updated_at) values('$title',STR_TO_DATE('$end_date', '%d-%m-%Y'),'$ad_filepath','$link',$sessionId,'$currdate')";
			} else if ($language == 'hi') {
				$table = 'mst_newsannouncement_hi';
				//$query = "insert into niot_announce_hi(title,date,fileName,link,insertedId,updated_at) values('$title',STR_TO_DATE('$end_date', '%d-%m-%Y'),'$ad_filepath',$sessionId,'$currdate')";
			} else {
				$table = 'mst_newsannouncement_ta';
				//$query = "insert into niot_announce_ta(title,date,fileName,link,insertedId,updated_at) values('$title',STR_TO_DATE('$end_date', '%d-%m-%Y'),'$ad_filepath',$sessionId,'$currdate')";

			}

			$query = "update $table set title='$title',announce_dt='$end_date',filename='$name',inserted_by='$sessionId' ,uploaded_on='$currdate',status ='$statusType'  where newsid = $id";

			echo $query;
			$result = pg_query($db, $query);
			if (!$result) {
				echo 'failed';
			} else {
				echo 'success';
			}
		}
	} else {
		echo 'please uploaded';
		exit;
	}

	echo ($result);
}


// $id = $_POST['id'];
// $title = $_POST['title'];
// $ad_filepath = $_POST['ad_filepath'];
// $end_date = $_POST['end_date'];
// $statusType = $_POST['statusType'];
// $language = $_POST['language'];
// $link = $_POST['modalLink'];


// $sessionId = $_SESSION['userId'];

// $currdate = date('Y-m-d h:i:s'); 

// if($statusType =='N')
// {
// 	if($language == 'en')
// 	{
		
// 		$table = 'mst_newsannouncement_en';
		
// 	}
	
// 	else if($language == 'hi')
// 	{
// 		$table = 'mst_newsannouncement_hi';
// 	}
	
// 	else 
// 	{
// 		$table = 'mst_newsannouncement_ta';
// 	}
	
// }

// else 
// {
// 	if($language == 'en')
// 	{
// 		$table = 'mst_newsannouncement_en';
// 	}
	
// 	else if($language == 'hi')
// 	{
// 		$table = 'mst_newsannouncement_hi';
// 	}
	
// 	else 
// 	{
// 		$table = 'mst_newsannouncement_ta';
// 	}
// }
// $query = "update $table set title='$title',announce_dt='$end_date',filename='$ad_filepath',inserted_by='$sessionId' ,uploaded_on='$currdate',status ='$statusType'  where newsid = $id";
// //Generate the sql query based on username and password
// //$query = "insert into mst_newsannouncement(title,date,fileName,insertedId) values('$title',STR_TO_DATE('$end_date', '%d-%m-%Y'),'$ad_filepath',$sessionId)";

// echo  $query;


// $result = pg_query($db, $query);

// if (!$result) {
//     echo 'failed';
// } else {
//     echo 'success';
// }

// echo ($result);
