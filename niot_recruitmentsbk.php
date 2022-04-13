<?php include 'include/session.php'; include("include/db_connection.php");

$sessionId = $_SESSION['userId'];

// $max_id = "select title_id from mst_recruitment_en";

// $result = pg_query($db, $max_id);
// $row = pg_fetch_assoc($result);
// $title_id = $row['title_id'];
// echo $title_id;
// if ($title_id == 0 || $title_id == '') {
//     $lasttitle_id = 1;
// } else {
//     $lasttitle_id = $lasttitle_id + 1;
// }
// echo $lasttitle_id;
// // exit;

// $resultDraftEn = pg_query_params($db, $max_id);
// $resultdirector_hi_count = pg_num_rows($resultDraftEn);
// echo $resultDraftEn;
// // echo  $lasttitle_id;

// if ($resultdirector_hi_count == 0) {
//     $lasttitle_id = 1;
// } else {
//     $lasttitle_id = $lasttitle_id + 1;
// }
// // echo $resultdirector_hi_count;
// echo $lasttitle_id;
// exit;
$statusChange = ['ta', 'hi', 'en'];

$language = ['en', 'hi', 'ta'];
// $statusChange = $language;

$statuslang["en"] = array();
$statuslang["ta"] = array();
$statuslang["hi"] = array();
// array_push($statuslang["en"],array("Name"=>array("en","ta","hi"),"E-Mail"=>"isuru.eshan@gmail.com"));
// array_push($statuslang["ta"],array("Name"=>array("en","ta","hi"),"E-Mail"=>"isuru.eshan@gmail.com"));
// array_push($statuslang["hi"],array("Name"=>array("en","ta","hi"),"E-Mail"=>"isuru.eshan@gmail.com"));
// echo "<pre>";
// echo json_encode($statuslang,JSON_PRETTY_PRINT);
// echo "</pre>";

// echo $language[0];

$table_en = 'mst_recruitment_en';
$table_hi = 'mst_recruitment_hi';
$table_ta = 'mst_recruitment_ta';
// $connect = pg_connect("localhost", "root", "", "testing");
// $draftEn = "SELECT * FROM $table_en WHERE inserted_by='$sessionId'   AND status='N' ORDER BY rec_id desc";
// $draftEn = "select * FROM $table_en WHERE inserted_by='$sessionId'
// AND status='N' UNION ALL
// select * FROM $table_en WHERE inserted_by='$sessionId' 
// AND status<>'N' ";
// // echo $draftEn;
// // exit;
// $resultDraftEn = pg_query($db, $draftEn);

$draftEn = "select * FROM $table_en WHERE inserted_by='$sessionId'
AND status='N' UNION ALL
select * FROM $table_en WHERE inserted_by='$sessionId' 
AND status<>'N' ";
// echo $draftEn;
// exit;
$resultDraftEn = pg_query($db, $draftEn);

$draftHi = "select * FROM $table_hi WHERE inserted_by='$sessionId'
AND status='N' UNION ALL
select * FROM $table_hi WHERE inserted_by='$sessionId' 
AND status<>'N' ";
// echo $draftEn;
// exit;
$resultDraftHi = pg_query($db, $draftHi);

// $publishedEn = "SELECT * FROM $table_en WHERE inserted_by='$sessionId'   AND status <> 'N' ORDER BY updated_on desc";
// $resultPublishEn = pg_query($db, $publishedEn);

// $draftHi = "select * FROM $table_hi WHERE inserted_by='$sessionId'
// AND status='N' UNION ALL
// select * FROM $table_hi WHERE inserted_by='$sessionId' 
// AND status<>'N' ";
// $resultDraftHi = pg_query($db, $draftHi);

// $publishedHi = "SELECT * FROM $table_hi WHERE inserted_by='$sessionId'   AND status <> 'N' ORDER BY updated_on desc";
// $resultPublishHi = pg_query($db, $publishedHi);

// $draftTa = "SELECT * FROM $table_ta WHERE inserted_by='$sessionId'   AND status='N' ORDER BY updated_on desc";
// $resultDraftTa = pg_query($db, $draftTa);

// $publishedTa = "SELECT * FROM $table_ta WHERE inserted_by='$sessionId'   AND status <> 'N' ORDER BY uploaded_on desc";
// $resultPublishTa = pg_query($db, $publishedTa);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>NIOT - Recruitments</title>

    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

    <?php include 'include/source_css.php'; ?>

</head>

<body class="sidebar-mini fixed">
    <div class="wrapper">
        <div class="loader-bg">
            <div class="loader-bar">
            </div>
        </div>
        <!-- Navbar-->
        <?php include 'include/header.php'; ?>
        <!-- Side-Nav-->
        <?php include('include/sidebar.php') ?>
        <!-- Sidebar chat end-->
        <div class="content-wrapper">
            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-lg-10">
                        <div class="main-header">
                            <!-- <h4>News / Announcement</h4> -->
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icofont icofont-home"></i></a>
                                </li>
                                <!-- <li class="breadcrumb-item"><a href="#!"> Documents - Publications</a>
                                </li> -->
                                <li class="breadcrumb-item"><a href="#">Recruitments</a>
                                </li>
                            </ol>
                        </div>

                    </div>
                    <!-- <div class="col-lg-2 " style="padding-top:70px;padding-left:70px;">
                        <button class="btn btn-success " type="button" data-toggle="modal" data-target="#addModal"><i class="icofont icofont-plus"></i> Add New</button>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center" style="border-radius:0px;padding-bottom:0px;background-color:#d3d3d3;">
                        <h3 style="color:#111">Recruitments</h3>
                    </div>
                    <div class="col-lg-12">
                        <!-- Row start -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <!-- Radio-Button start -->
                                    <!-- <div class="card-header">
                                 <h5 class="card-header-text">Bootstrap Tab</h5>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                              </div> -->
                                    <div class="card-block">
                                        <!-- <div class="col-lg-12 text-center" style="border-radius:25px;">
                                            <h4>Recruitments</h4>
                                        </div> -->

                                        <!-- Row start -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="sub-title" style="border-bottom:none;">
                                                    <ul class="nav nav-tabs tabs langtab" role="tablist">
                                                        <span hidden id="getLang"></span>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#home1" role="tab" onclick="tabs('en')"><b>English</b></a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#profile1" role="tab" onclick="tabs('hi')"><b>Hindi</b></a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#messages1" role="tab" onclick="tabs('ta')"><b>Tamil</b></a>
                                                        </li>
                                                        <!-- <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Settings</a>
                                                    </li> -->

                                                    </ul>
                                                </div>
                                                <!-- Tab panes -->
                                                <div class="tab-content tabs">
                                                    <div class="tab-pane active" id="home1" role="tabpanel">
                                                        <div class="col-lg-12" style="padding:10px;background:#eeeeee;border: 2px solid  #eeeeee;border-radius:25px; ">
                                                            <h3 class="text-center"><?php echo $techrow_en['title']; ?></h3>
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <button class="btn btn-success notika-btn-success pull-left" data-toggle="modal" data-target="#addModal" style="margin-left:10px;" onclick="addNew('en');"><i class="icofont icofont-plus"> </i> Add New</button>
                                                                </div>
                                                                <div class="col-lg-5   ">
                                                                    <!-- <h3 class="text-center">Draft Items</h3> -->
                                                                </div>
                                                                <div class="col-lg-2" style="text-align:right">
                                                                    <label for="cars">Choose Status :</label>
                                                                </div>
                                                                <div class="col-lg-3" style="padding-left:2px;">

                                                                    <select class="js-example-responsive select2" style="width: 100%" onchange="">
                                                                        <option value="">All</option>
                                                                        <option value="AL">Published</option>
                                                                        <option value="WY">Draft</option>
                                                                        <option value="WY">Archive</option>
                                                                        <option value="WY">Hide</option>
                                                                        <option value="WY">Deleted</option>
                                                                    </select>
                                                                </div>

                                                                <!-- <div class="col-lg-6 ">

                                                                    <div class="checkbox-fade fade-in-primary">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon fa fa-check txt-primary"></i>
                                                                            </span> <span>All</span>
                                                                        </label>
                                                                    </div>



                                                                    <div class="checkbox-fade fade-in-success">
                                                                        <label>
                                                                            <input type="checkbox" value="" id="published">
                                                                            <span class="cr">
                                                                                <i class="cr-icon fa fa-check txt-success"></i>
                                                                            </span> <span>Published</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox-fade fade-in-danger">
                                                                        <label>
                                                                            <input type="checkbox" value="" id="draft">
                                                                            <span class="cr">
                                                                                <i class="cr-icon fa fa-check txt-danger"></i>
                                                                            </span><span> Draft</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox-fade fade-in-info">
                                                                        <label>
                                                                            <input type="checkbox" value="" id="archive">
                                                                            <span class="cr">
                                                                                <i class="cr-icon fa fa-check txt-info"></i>
                                                                            </span><span> Archive</span>
                                                                        </label>
                                                                    </div>


                                                                    <div class="checkbox-fade fade-in-danger">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon fa fa-check txt-danger"></i>
                                                                            </span><span> Hide</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox-fade fade-in-warning">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon fa fa-check txt-warning"></i>
                                                                            </span><span> Deleted</span>
                                                                        </label>
                                                                    </div>

                                                                </div> -->
                                                            </div>
                                                            <br>
                                                            <div class="col-lg-12">
                                                                <div class="data-table-list-En-draft">
                                                                    <!-- <h2 class="text-center">News/Announcement</h2> -->
                                                                    <div class="table-responsive">
                                                                        <table class="tbl-en-draft" class="table table-borderd ">
                                                                            <thead id="thead" style="color:#fff;width:100%;background:#40c4ff" class="text-center">
                                                                                <tr>
                                                                                    <!-- <th><input type="checkbox" class="" id='checkallusers' onclick="checkAll(id);"> All
                                                                            </th> -->
                                                                                    <th rowspan="2">S.No</th>
                                                                                    <th class="text-center" rowspan="2">Advertisement Title</th>
                                                                                    <th class="text-center" rowspan="2">Advertisement File</th>
                                                                                    <th class="text-center" rowspan="2">Application File</th>
                                                                                    <th class="text-center" rowspan="2">Announcements</th>
                                                                                    <th rowspan="2"> Date</th>
                                                                                    <th class="text-center" colspan="3"> Important Dates</th>
                                                                                    <th rowspan="2">Status</th>
                                                                                    <th rowspan="2">Status Change</th>
                                                                                    <th rowspan="2">Action</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <!-- <th><input type="checkbox" class="" id='checkallusers' onclick="checkAll(id);"> All
                                                                            </th> -->

                                                                                    <th style="width:10%;">Online Applications Date</th>
                                                                                    <th style="width:10%;">Date for Receipt</th>
                                                                                    <th style="width:10%;">Hard Copy Date</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                $i = 0;
                                                                                $file;
                                                                                while (
                                                                                    $row = pg_fetch_array(
                                                                                        $resultDraftEn
                                                                                    )
                                                                                ) {
                                                                                    if ($row['filename'] != "") {
                                                                                        $file = $row['filename'];
                                                                                    } else if ($row['link'] != "") {
                                                                                        $file = $row['link'];
                                                                                    }

                                                                                    $statusArray = [];
                                                                                    $statusLang['lang'] = ['en'];
                                                                                    $statusArray['status'] =
                                                                                        $row['status'];
                                                                                    $statusArray['id'] =
                                                                                        $row['rec_id'];
                                                                                    $statusChange[] = $statusArray;

                                                                                    array_push($statuslang["en"], array("status" =>   $row['status'], "id" => $row['rec_id']));
                                                                                ?>

                                                                                    <tr>

                                                                                        <td>
                                                                                            <?php echo ++$i; ?>
                                                                                        </td>
                                                                                        <td style="width:50px;" id="tblEnTitle" <?php echo $row['rec_id']  ?>>
                                                                                            <?php echo $row['title'] ?>
                                                                                        </td>
                                                                                        <td id="tblEnadfile" <?php echo $row['rec_id']  ?>>
                                                                                            <?php echo $row['adfile_name'] ?>
                                                                                        </td>
                                                                                        <td id="tblEnappfile" <?php echo $row['rec_id']  ?>>
                                                                                            <?php echo $row['appfile_name'] ?>
                                                                                        </td>
                                                                                        <td id="tblEnannounce" <?php echo $row['rec_id']  ?>>
                                                                                            <?php echo $row['announcement'] ?>
                                                                                        </td>
                                                                                        <td id="tblEnTitle" <?php echo $row['rec_id']  ?>>
                                                                                            <?php echo date('d-m-Y ', strtotime($row['announce_dt'])) ?>
                                                                                        </td>
                                                                                        <td id="tblEnonlinedate" <?php echo $row['rec_id']  ?>>
                                                                                            <?php echo date('d-m-Y ', strtotime($row['onlinedate_on'])) ?>
                                                                                        </td>
                                                                                        <td id="tblEnreceiptdate" <?php echo $row['rec_id']  ?>>
                                                                                            <?php echo date('d-m-Y ', strtotime($row['receiptdate_on'])) ?>
                                                                                        </td>
                                                                                        <td id="tblEnhardcopydate" <?php echo $row['rec_id']  ?>>
                                                                                            <?php echo date('d-m-Y ', strtotime($row['hardcopy_on'])) ?>
                                                                                        </td>
                                                                                        <td><strong><b id="tblEnStatus<?php echo $row['rec_id'] ?>"></b></strong>
                                                                                        </td>
                                                                                        <td>
                                                                                            <select class="select2" id="sltEnStatus<?php echo $row['rec_id'] ?>
                                                                                  '" data-live-search="true" style="width: 100%" onchange="statusChange( <?php echo  $row['rec_id'] ?>,this.value);">
                                                                                                <option value="Draft">Draft</option>
                                                                                                <option value="Published">Published</option>
                                                                                                <option value="Archive">Archive</option>
                                                                                                <option value="Hide">Hide</option>
                                                                                                <option value="Delete">Delete</option>
                                                                                            </select>

                                                                                        </td>

                                                                                        <td id="tblEnTitle" <?php echo $row['rec_id']  ?>><button type="button" class="btn btn-info notika-btn-info" data-toggle="modal" data-target="#editModal" onclick="editBtn(' <?php echo $row['rec_id'] ?> ','<?php echo $row['status'] ?>');" title="Edit Here"><i class="fa fa-edit"></i></button>
                                                                                            &nbsp;&nbsp;<button class="btn btn-success notika-btn-success" title="Preview Here" data-toggle="modal" data-target="#previewModal"><i class="fa fa-eye"></i></button>

                                                                                        </td>
                                                                                    </tr>
                                                                                <?php } ?>

                                                                            </tbody>

                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="profile1" role="tabpanel">
                                                        <h3 class="text-center"><?php echo $techrow_hi['title']; ?></h3>
                                                        <div class="col-lg-12" style="padding:10px;background:#eeeeee;border: 2px solid  #eeeeee;border-radius:25px; ">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <button class="btn btn-success notika-btn-success pull-left" data-toggle="modal" data-target="#addModal" style="margin-left:10px;" onclick="addNew('hi');"><i class="icofont icofont-plus"> </i> नया जोड़ो (Add New)</button>
                                                                </div>
                                                                <div class="col-lg-5   ">
                                                                    <!-- <h3 class="text-center">Draft Items</h3> -->
                                                                </div>
                                                                <div class="col-lg-2" style="text-align:right">
                                                                    <label for="cars">Choose Status :</label>
                                                                </div>
                                                                <div class="col-lg-3" style="padding-left:2px;">

                                                                    <select class="js-example-responsive select2" style="width: 100%">
                                                                        <option value="">All</option>
                                                                        <option value="Published">Published</option>
                                                                        <option value="Draft">Draft</option>
                                                                        <option value="Archive">Archive</option>
                                                                        <option value="Hide">Hide</option>
                                                                        <option value="Deleted">Deleted</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="table-responsive">
                                                                <table class="tbl-en-draft" class="table table-borderd ">
                                                                    <thead id="thead" style="color:#fff;width:100%;background:#40c4ff" class="text-center">
                                                                        <tr>
                                                                            <!-- <th><input type="checkbox" class="" id='checkallusers' onclick="checkAll(id);"> All
                                                                            </th> -->
                                                                            <th rowspan="2">क्रमांक</th>
                                                                            <th class="text-center" rowspan="2">विज्ञापन शीर्षक (Advertisement Title)</th>
                                                                            <th class="text-center" rowspan="2">विज्ञापन फ़ाइल (Advertisement File)</th>
                                                                            <th class="text-center" rowspan="2">आवेदन फ़ाइल (Application File)</th>
                                                                            <th class="text-center" rowspan="2">घोषणाओं (Announcements)</th>
                                                                            <th rowspan="2"> घोषित तिथि (Announced Date)</th>
                                                                            <th class="text-center" colspan="3"> महत्वपूर्ण तिथियाँ (Important Dates)</th>
                                                                            <th rowspan="2">स्थिति (Status)</th>
                                                                            <th rowspan="2">स्थिति परिवर्तन (Status Change)</th>
                                                                            <th rowspan="2">कार्य (Action)</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <!-- <th><input type="checkbox" class="" id='checkallusers' onclick="checkAll(id);"> All
                                                                            </th> -->

                                                                            <th style="width:10%;">ऑनलाइन आवेदन तिथि (Online Applications Date)</th>
                                                                            <th style="width:10%;">प्राप्ति की तिथि (Date for Receipt)</th>
                                                                            <th style="width:10%;">हार्ड कॉपी तिथि (Hard Copy Date)</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $i = 0;
                                                                        $file;
                                                                        while (
                                                                            $row = pg_fetch_array(
                                                                                $resultDraftHi
                                                                            )
                                                                        ) {
                                                                            if ($row['filename'] != "") {
                                                                                $file = $row['filename'];
                                                                            } else if ($row['link'] != "") {
                                                                                $file = $row['link'];
                                                                            }

                                                                            $statusArray = [];
                                                                            $statusLang['lang'] = ['en'];
                                                                            $statusArray['status'] =
                                                                                $row['status'];
                                                                            $statusArray['id'] =
                                                                                $row['rec_id'];
                                                                            $statusChange[] = $statusArray;

                                                                            array_push($statuslang["en"], array("status" =>   $row['status'], "id" => $row['rec_id']));
                                                                        ?>

                                                                            <tr>

                                                                                <td>
                                                                                    <?php echo ++$i; ?>
                                                                                </td>
                                                                                <td style="width:50px;" id="tblEnTitle" <?php echo $row['rec_id']  ?>>
                                                                                    <?php echo $row['title'] ?>
                                                                                </td>
                                                                                <td id="tblEnadfile" <?php echo $row['rec_id']  ?>>
                                                                                    <?php echo $row['adfile_name'] ?>
                                                                                </td>
                                                                                <td id="tblEnappfile" <?php echo $row['rec_id']  ?>>
                                                                                    <?php echo $row['appfile_name'] ?>
                                                                                </td>
                                                                                <td id="tblEnannounce" <?php echo $row['rec_id']  ?>>
                                                                                    <?php echo $row['announcement'] ?>
                                                                                </td>
                                                                                <td id="tblEnTitle" <?php echo $row['rec_id']  ?>>
                                                                                    <?php echo date('d-m-Y ', strtotime($row['announce_dt'])) ?>
                                                                                </td>
                                                                                <td id="tblEnonlinedate" <?php echo $row['rec_id']  ?>>
                                                                                    <?php echo date('d-m-Y ', strtotime($row['onlinedate_on'])) ?>
                                                                                </td>
                                                                                <td id="tblEnreceiptdate" <?php echo $row['rec_id']  ?>>
                                                                                    <?php echo date('d-m-Y ', strtotime($row['receiptdate_on'])) ?>
                                                                                </td>
                                                                                <td id="tblEnhardcopydate" <?php echo $row['rec_id']  ?>>
                                                                                    <?php echo date('d-m-Y ', strtotime($row['hardcopy_on'])) ?>
                                                                                </td>
                                                                                <td><strong><b id="tblEnStatus<?php echo $row['rec_id'] ?>"></b></strong>
                                                                                </td>
                                                                                <td>
                                                                                    <select class="select2" id="sltEnStatus<?php echo $row['rec_id'] ?>
                                                                                  '" data-live-search="true" style="width: 100%" onchange="statusChange( <?php echo  $row['rec_id'] ?>,this.value);">
                                                                                        <option value="Draft">Draft</option>
                                                                                        <option value="Published">Published</option>
                                                                                        <option value="Archive">Archive</option>
                                                                                        <option value="Hide">Hide</option>
                                                                                        <option value="Delete">Delete</option>
                                                                                    </select>

                                                                                </td>

                                                                                <td id="tblEnTitle" <?php echo $row['rec_id']  ?>><button type="button" class="btn btn-info notika-btn-info" data-toggle="modal" data-target="#editModal" onclick="editBtn(' <?php echo $row['rec_id'] ?> ','<?php echo $row['status'] ?>');" title="Edit Here"><i class="fa fa-edit"></i></button>
                                                                                    &nbsp;&nbsp;<button class="btn btn-success notika-btn-success" title="Preview Here" data-toggle="modal" data-target="#previewModal"><i class="fa fa-eye"></i></button>

                                                                                </td>
                                                                            </tr>
                                                                        <?php } ?>

                                                                    </tbody>

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="messages1" role="tabpanel">
                                                        <h3 class="text-center"><?php echo $techrow_hi['title']; ?></h3>
                                                        <div class="col-lg-12" style="padding:10px;background:#eeeeee;border: 2px solid  #eeeeee;border-radius:25px; ">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <button class="btn btn-success notika-btn-success pull-left" data-toggle="modal" data-target="#addModal" style="margin-left:10px;" onclick="addNew('ta');"><i class="icofont icofont-plus"> </i> புதிதாக சேர்க்க (Add New)</button>
                                                                </div>
                                                                <div class="col-lg-5   ">
                                                                    <!-- <h3 class="text-center">Draft Items</h3> -->
                                                                </div>
                                                                <div class="col-lg-2" style="text-align:right">
                                                                    <label for="cars">Choose Status :</label>
                                                                </div>
                                                                <div class="col-lg-3" style="padding-left:2px;">

                                                                    <select class="js-example-responsive select2" style="width: 100%">
                                                                        <option value="">All</option>
                                                                        <option value="AL">Published</option>
                                                                        <option value="WY">Draft</option>
                                                                        <option value="WY">Archive</option>
                                                                        <option value="WY">Hide</option>
                                                                        <option value="WY">Deleted</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="table-responsive">
                                                                <table class="tbl-en-draft" class="table table-borderd" width="100%">
                                                                    <thead style="color:#fff;width:100%;background:#40c4ff">
                                                                        <tr>
                                                                            <!-- <th><input type="checkbox" class="" id='checkallusers' onclick="checkAll(id);"> All
                                                                    </th> -->
                                                                            <th>வ.எண் (S.No)</th>
                                                                            <th>தலைப்பு (Title)</th>
                                                                            <th>தேதி (Date)</th>
                                                                            <th>கோப்பு பெயர் (File Name)</th>
                                                                            <!-- <th>இணைப்பு (Link)</th> -->

                                                                            <th>நிலை (Status)</th>
                                                                            <th>நிலை மாற்றம் (Status Change)</th>
                                                                            <th>செயல் (Action)</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <?php
                                                                        $i = 0;
                                                                        $file;
                                                                        while (
                                                                            $row = pg_fetch_array(
                                                                                $resultDraftTa
                                                                            )
                                                                        ) {
                                                                            if ($row['filename'] != "") {
                                                                                $file = $row['filename'];
                                                                            } else if ($row['link'] != "") {
                                                                                $file = $row['link'];
                                                                            }

                                                                            $statusArray = [];
                                                                            $statusLang['lang'] = ['ta'];
                                                                            $statusArray['status'] =
                                                                                $row['status'];
                                                                            $statusArray['id'] =
                                                                                $row['rec_id'];
                                                                            $statusChange[] = $statusArray;

                                                                            array_push($statuslang["ta"], array("status" =>   $row['status'], "id" => $row['rec_id']));
                                                                        ?>

                                                                            <tr>

                                                                                <td>
                                                                                    <?php echo ++$i; ?>
                                                                                </td>
                                                                                <td id="tblTaTitle" <?php echo $row['rec_id']  ?>>
                                                                                    <?php echo $row['title'] ?>
                                                                                </td>

                                                                                <td id="tblTaTitle" <?php echo $row['rec_id']  ?>>
                                                                                    <?php echo  $file ?>
                                                                                </td>
                                                                                <td id="tblTaTitle" <?php echo $row['rec_id']  ?>>
                                                                                    <?php echo date('d-m-Y ', strtotime($row['announce_dt'])) ?>
                                                                                </td>
                                                                                <td><strong><b id="tblTaStatus<?php echo $row['rec_id'] ?>"></b></strong>
                                                                                </td>
                                                                                <td>
                                                                                    <select class="js-example-responsive  select2" id="sltTaStatus<?php echo $row['rec_id'] ?>
                                                                            '" data-live-search="true" style="width: 100%" onchange="statusChange( <?php echo  $row['rec_id'] ?>,this.value);">
                                                                                        <option value="Draft">Draft</option>
                                                                                        <option value="Published">Published</option>
                                                                                        <option value="Archive">Archive</option>
                                                                                        <option value="Hide">Hide</option>
                                                                                        <option value="Delete">Delete</option>
                                                                                    </select>

                                                                                </td>

                                                                                <td id="tblTaTitle" <?php echo $row['rec_id']  ?>><button type="button" class="btn btn-info notika-btn-info" data-toggle="modal" data-target="#editModal" onclick="editBtn(' <?php echo $row['rec_id'] ?> ','<?php echo $row['status'] ?>');" title="Edit Here"><i class="fa fa-edit"></i></button>
                                                                                    &nbsp;&nbsp;<button class="btn btn-success notika-btn-success" title="Preview Here" data-toggle="modal" data-target="#previewModal"><i class="fa fa-eye"></i></button>

                                                                                </td>


                                                                            </tr>
                                                                        <?php } ?>


                                                                        <!-- <tr>
                                                                                    <td> <?php echo ++$i ?></td>
                                                                                    <td>Jacob</td>
                                                                                    <td>Thornton</td>
                                                                                    <td>@fat</td>
                                                                                    <td>Ducky</td>
                                                                                    <td>@fat</td>
                                                                                    <td>Ducky</td>
                                                                                </tr> -->
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Row end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid ends -->
    </div>
    </div>


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->

    <!-- Add Modal popup Start-->

    <div class="modal animated fade modal-popout-bg" id="addModal" role="dialog" tabindex="-1" data-keyboard="true" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style=" border-bottom: 1px solid #e8e8e8;">
                    <div class="col-lg-12" style="padding-bottom:10px;">
                        <div class="col-lg-2">
                            <!-- <a href="#" > -->
                            <img src="assets/images/niotHeader.png" alt="Niot Logo" class="pull-right">
                        </div>
                        <div class="col-lg-9" style="padding-top:10px;">
                            <h2 class="text-center"><span id="modalHeader"></span></h2>
                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="modal-body" style="padding-top:10px;">
                    <form id="demo-form" data-parsley-validate="">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title"><span class="addTitle"> </span><span class="mandatory"> *</span></label>
                                        <input type="text" class="form-control" id="txtTitle" name="title" placeholder="Enter Title" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                                        <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email1"><span id="advertisementlabel"> </span><span class="mandatory"> *</span></label>
                                        <input type="file" class="form-control input-sm" id="ad_file" accept="application/pdf" name="file" data-parsley-trigger="change">
                                    </div>
                                    <label for="advertisment">
                                        <a style="color:#40c4ff">Add More File <i class="fa fa-plus"></i></a>

                                    </label>
                                    <input type="file" name="file1[]" accept=".pdf" id="advertisment" style="visibility: hidden; position: absolute;" multiple />
                                    <p id="files-area1">
                                        <span id="filesList">
                                            <span id="files-names"></span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title"><span class="addTitle"> </span><span class="mandatory"> *</span></label>
                                        <input type="text" class="form-control" id="txtTitle" name="title" placeholder="Enter Title" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                                        <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div id="getinput">
                                        </div>
                                        <label for="email1"><span id="advertisement"> </span><span class="mandatory"> *</span></label>
                                        <input type="file" class="form-control input-sm" id="ad_file" accept="application/pdf" name="file" data-parsley-trigger="change">
                                    </div>
                                    <label for="email1" style="color:#40c4ff">Add More File <i class="fa fa-plus" onclick="addmorefile();"></i></label>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title"><span id="announcement"> </span><span class="mandatory"> *</span></label>
                                        <textarea type="text" class="form-control" id="txtannounce" name="title" placeholder="Enter Title" required="" data-parsley-length="[2, 5000]" data-parsley-group="block1" data-parsley-trigger="change"></textarea>
                                        <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email1"><span id="applicationform"> </span><span class="mandatory"> *</span></label>
                                        <input type="file" class="form-control input-sm" id="app_file" accept="application/pdf" name="appfile" data-parsley-trigger="change">
                                    </div>
                                    <label for="application">
                                        <a style="color:#40c4ff">Add More File <i class="fa fa-plus"></i></a>

                                    </label>
                                    <input type="file" name="appfile1[]" accept=".pdf" id="app_file1" style="visibility: hidden; position: absolute;" multiple />
                                    <p id="files-area">
                                        <span id="applicationList">
                                            <span id="application-names"></span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 style="padding:13px;">Important Dates</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="date"> <span class="addDate"> </span> <span class="mandatory">*</span></label>
                                        <div class="input-group date ">
                                            <span class="input-group-addon " data-provide="datepicker"> <span class="fa fa-calendar"></span></span>
                                            <input type="text" class="form-control" readonly id="endDate" name="date" value='' placeholder="Enter Date" required="" data-parsley-trigger="change">
                                        </div>
                                        <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="date"> <span id="lastonlineapp"> </span> <span class="mandatory">*</span></label>
                                        <div class="input-group date ">
                                            <span class="input-group-addon " data-provide="datepicker"> <span class="fa fa-calendar"></span></span>
                                            <input type="text" class="form-control" readonly id="onlinedate" name="date" value='' placeholder="Enter Date" required="" data-parsley-trigger="change">
                                        </div>
                                        <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="date"> <span id="last_receipt"> </span> <span class="mandatory">*</span></label>
                                        <div class="input-group date ">
                                            <span class="input-group-addon " data-provide="datepicker"> <span class="fa fa-calendar"></span></span>
                                            <input type="text" class="form-control" readonly id="receiptdate" name="date" value='' placeholder="Enter Date" required="" data-parsley-trigger="change">
                                        </div>
                                        <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="date"> <span id="last_hardcopy"> </span> <span class="mandatory">*</span></label>
                                        <div class="input-group date ">
                                            <span class="input-group-addon " data-provide="datepicker"> <span class="fa fa-calendar"></span></span>
                                            <input type="text" class="form-control" readonly id="hardcopydate" name="date" value='' placeholder="Enter Date" required="" data-parsley-trigger="change">
                                        </div>
                                        <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-6">
                                <div class="col-lg-12">
                                    <div class="col-lg-4" style="padding-top:10px;">
                                        <label>Document Type<span class="mandatory">*</span> </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="fm-checkbox form-group">
                                            <label> File <input type="checkbox" class="" id="fileCheck" onclick="showFile();" name="checkbox" required="" data-parsley-trigger="change" data-parsley-group="block1" data-parsley-mincheck="1" /> <i></i> </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="fm-checkbox form-group">
                                            <label>Link <input type="checkbox" class="" id="linkCheck" name="checkbox" onchange="showLink();" /> <i></i> </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" id="fileDiv">
                                <div class="form-group">
                                    <label for="email1"><span class="addFile"> </span><span class="mandatory"> *</span></label>
                                    <input type="file" class="form-control input-sm" id="ad_file" accept="application/pdf" name="file" data-parsley-trigger="change">
                                </div>
                                <label for="email1" style="color:#40c4ff">Add More File <i class="fa fa-plus" onclick="addmorefile();"></i></label>
                            </div>
                            <div class="col-lg-1" style="padding-top:30px;">
                                    <b> or </b>
                                </div>
                            <div class="col-lg-12" id="linkDiv">
                                <div class="form-group">
                                    <label for="email1"><span class="addURl"> </span><span class="mandatory"> *</span></label>
                                    <input type="text" class="form-control input-sm" id="add_link" name="url" placeholder="Enter Link" data-parsley-type="url" data-parsley-trigger="change">
                                </div>
                            </div>
                        </div> -->
                        <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="add_Recruitments(this.value);" id="subLang">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Modal popup End-->
    <!-- Edit Modal popup Start-->

    <div class="modal animated fade" id="editModal" role="dialog" tabindex="-1" data-keyboard="true" data-backdrop="static">
        <div class="modal-dialog modals-default">
            <div class="modal-content">
                <div class="modal-header" style=" border-bottom: 1px solid #e8e8e8;">
                    <div class="col-lg-12" style="padding-bottom:10px;">
                        <div class="col-lg-2">
                            <!-- <a href="#" > -->
                            <img src="assets/images/niotHeader.png" alt="Niot Logo" class="pull-right">
                        </div>
                        <div class="col-lg-9">
                            <h2 class="text-center"><span id="editModalHeader"></span></h2>
                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 ">
                        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12" style="padding-right: 240px;padding-bottom:5px;">
                         
                            <img src="img/niotHeader.png" alt="Niot Logo" class="pull-right">
                        </div>

                    </div>
                    <h2 class="text-center"><span id="editModalHeader"></span></h2> -->
                    <span hidden id="editId"></span>
                    <span hidden id="StatusType"></span>

                </div>
                <div class="modal-body" style="padding-top:10px;">
                    <form id="edit-demo-form" data-parsley-validate="">
                        <div class="form-group">
                            <label for="title"><span id="editTitle"> </span><span class="mandatory"> *</span></label>
                            <input type="text" class="form-control" name="title" id="editTxtTitle" placeholder="Enter Title" required="">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="date"> <span id="editDate"> </span> <span class="mandatory">*</span></label>
                            <div class="input-group date ">
                                <span class="input-group-addon " data-provide="datepicker"> <span class="fa fa-calendar"></span></span>
                                <input type="text" class="form-control" readonly id="editTxtDate" value='' required="">
                            </div>
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-4" style="padding-top:10px;">
                                <label>Document Type<span class="mandatory">*</span> </label>
                            </div>
                            <div class="col-lg-3">
                                <div class="fm-checkbox form-group">
                                    <label> File <input type="checkbox" class="" id="editfileCheck" onclick="showFile();" name="checkbox" required="" data-parsley-trigger="change" data-parsley-group="block1" data-parsley-mincheck="1" /> <i></i> </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="fm-checkbox form-group">
                                    <label>Link <input type="checkbox" class="" id="editlinkCheck" name="checkbox" onchange="showLink();" /> <i></i> </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12" id="fileDiv">
                                <div class="form-group">
                                    <label for="email1"><span id="editFile"> </span><span class="mandatory"> *</span></label>
                                    <input type="file" class="form-control input-sm" id="editad_file" accept="application/pdf" name="file" data-parsley-trigger="change">
                                </div>
                            </div>
                            <!-- <div class="col-lg-1" style="padding-top:30px;">
                            <b> or </b>
                        </div> -->
                            <div class="col-lg-12" id="linkDiv">
                                <div class="form-group">
                                    <label for="email1"><span class="addURl"> </span><span class="mandatory"> *</span></label>
                                    <input type="text" class="form-control input-sm" id="editTxtlink" name="url" placeholder="Enter Link" data-parsley-type="url" data-parsley-trigger="change">
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success " onclick="editFunction();">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal popup End-->

    <?php include("include/source_js.php") ?>

    <script>
        var currDate, table, previewId, archiveId, language, filesize,
            exactSize, ad_files, form_data, ad_filepath, attachlength;
        var label = {
            "en_label": {
                "header": "Recruitments",
                "editHeader": "Edit Recruitments",
                "title": 'Advertisement Title',
                "advertisement": 'Advertisement File',
                "application": 'Application Form',
                "announcements": 'Announcements',
                "onlineapplications": "Last Date for Online Applications",
                "nonremotelocalities": "Last Date for Receipt of Non Remote Localities",
                "hardcopy": "Last Date for Hard Copy of Applications - Remote Localities ",
                "date": "Dated On",
                // "file": "File (PDF only)",
                // "lang": "en",
                // "url": "Link"
            },
            "hi_label": {
                "header": "प्रेस विज्ञप्ति (Recruitments)",
                "editHeader": "प्रेस विज्ञप्ति संपादित करें (Edit Recruitments)",
                "title": 'प्रेस शीर्षक (Advertisement Title)',
                "advertisement": 'विज्ञापन फ़ाइल (Advertisement File)',
                "application": 'आवेदन फार्म (Application Form)',
                "announcements": 'घोषणाओं (Announcements)',
                "onlineapplications": "ऑनलाइन आवेदन की अंतिम तिथि (Last Date for Online Applications)",
                "nonremotelocalities": "गैर दूरस्थ इलाकों की प्राप्ति की अंतिम तिथि (Last Date for Receipt of Non Remote Localities)",
                "hardcopy": "आवेदनों की हार्ड कॉपी की अंतिम तिथि - दूरस्थ इलाके (Last Date for Hard Copy of Applications - Remote Localities) ",
                "date": "पर दिनांक (Dated On)",
                // "file": "फ़ाइल का नाम (File Name)",
                // "url": "संपर्क (Link)"
            },
            "ta_label": {
                "header": "பத்திரிக்கை செய்தி (Recruitments)",
                "editHeader": "பத்திரிகை வெளியீட்டைத் திருத்தவும் (Edit Recruitments)",
                "title": 'தலைப்பு (Advertisement Title)',
                "date": "தேதியில் வெளியிடப்பட்டது (Posted On)",
                "file": "கோப்பு பெயர் (File Name)",
                "url": "இணைப்பு (Link)"
            }

        }

        $(document).ready(function() {

            var date = new Date();
            var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

            currDate = $('.date').datepicker('setDate', today);
            $('#fileDiv').hide();
            $('#linkDiv').hide();

            // $(".data-table-area").hide();

            $('.tbl-en-draft').DataTable({
                // scrollY: "330px",
                // scrollX: true,
                // scrollCollapse: true,
                // scrollY: 360,
                // paging: false,
                // // searching: false
                // "info": false,
                // drawCallback: function() {
                //     $('.select2').select2();
                // }
            });





            $('#tbl-en-published').DataTable({
                scrollY: "330px",
                scrollX: true,
                scrollCollapse: true,
                scrollY: 250,
                paging: false,
                // searching: false
                "info": false

            });
            // $('#tbl-hi-draft').DataTable({
            //     scrollY: "330px",
            //     scrollX: true,
            //     scrollCollapse: true,
            //     scrollY: 250,
            //     paging: false,
            //     "info": false
            //     // scrollX: true,
            //     // scrollCollapse: true,
            //     // searching: false
            // });
            $('#tbl-hi-published').DataTable({
                scrollY: "330px",
                scrollX: true,
                scrollCollapse: true,
                scrollY: 250,
                paging: false,
                // searching: false
                "info": false
                // searching: false
            });
            $('#tbl-ta-draft').DataTable({
                scrollY: "330px",
                scrollX: true,
                scrollCollapse: true,
                scrollY: 250,
                paging: false,
                // searching: false
                "info": false
                // searching: false
            });
            $('#tbl-ta-published').DataTable({
                scrollY: "330px",
                scrollX: true,
                scrollCollapse: true,
                scrollY: 250,
                paging: false,
                // searching: false
                "info": false
            });
            //  loadData();
            // statusAppend();
            tabs('en');

            // $("#dropdown1").on("change", function() {
            //     console.log(this.value);
            //     table
            //         .columns(6)
            //         .search(this.value)
            //         .draw();

            //         console.log(table);
            // });

            $('#dropdown1').on('change', function(e) {
                var status = $(this).val();
                $('#dropdown1').val(status);
                console.log(status);
                // table.column(5).search('\\s' + status + '\\s', true, false, true).draw();
                table.column(3).search(status).draw();
            })
            //     table = $('#tbl-hi-draft').DataTable({
            //     // scrollY: "330px",
            //     // scrollX: true,
            //     scrollCollapse: true,
            //     scrollY: 360,
            //     paging: false,
            //     // searching: false
            //     "info": false
            // });
            if ($.fn.dataTable.isDataTable('.tbl-hi-draft')) {
                table = $('.tbl-hi-draft').DataTable({
                    scrollY: "330px",
                    scrollY: true,
                    scrollX: true,
                    ScrollX: "100px",
                    scrollCollapse: false,
                    paging: true,

                }).columns.adjust().draw();
            } else {
                table = $('.tbl-hi-draft').DataTable({

                }).columns.adjust().draw();
            }
            // $('#tbl-hi-draft').DataTable()
            //     .columns.adjust();

            // var table = $('#tbl-hi-draft').DataTable({
            //     scrollY: "330px",
            //     scrollX: true,
            //     ScrollX: "100px",
            //     scrollCollapse: true,

            //     paging: true,
            //     // ScrollXInner: "100%",
            //     // searching: false
            //     // "info": false
            // }).columns.adjust();
            // table.columns.adjust().draw();

            $(".select2").select2();
        });

        $(".dataTables_scrollHeadInner").css({
            "width": "100%"
        });
        $(".table ").css({
            "width": "100%"
        });

        $("#checkallusers").change(function(e) {
            e.preventDefault();
            var checked = $(this).is(':checked');

            // Select all
            if (checked) {
                $('.sel_users').each(function() {
                    $(this).prop('checked', true);
                    $('#btnPublish').removeAttr('disabled'); //enable input
                    $('#btnArchive').show();
                });
            } else {
                // Deselect All
                $('.sel_users').each(function() {
                    $(this).prop('checked', false);
                    $('#btnPublish').attr('disabled', true); //disable input
                    $('#btnArchive').hide();

                });
            }


        });
        const dt = new DataTransfer(); // Permet de manipuler les fichiers de l'input file

        $("#advertisment").on('change', function(e) {

            for (var i = 0; i < this.files.length; i++) {

                let fileBloc = $('<span/>', {
                        class: 'file-block',
                        // id: 'advertisment' + i + ''
                    }),
                    fileName = $('<span/>', {
                        class: 'name',
                        text: this.files.item(i).name,
                        id: 'advertisment' + i + ''
                    });
                fileBloc.append('<span class="file-delete"><span></span></span>')
                    .append(fileName);
                $("#filesList > #files-names").append(fileBloc);

            };
            // Ajout des fichiers dans l'objet DataTransfer
            for (let file of this.files) {
                dt.items.add(file);
            }
            attachlength = dt.items.length;
            //    console.log(attachlength);
            // Mise à jour des fichiers de l'input file après ajout
            this.files = dt.files;

            // EventListener pour le bouton de suppression créé
            $('span.file-delete').click(function() {
                let name = $(this).next('span.name').text();
                // Supprimer l'affichage du nom de fichier
                $(this).parent().remove();
                for (let i = 0; i < dt.items.length; i++) {

                    // Correspondance du fichier et du nom
                    if (name === dt.items[i].getAsFile().name) {
                        // Suppression du fichier dans l'objet DataTransfer
                        dt.items.remove(i);
                        continue;
                    }
                }
                // Mise à jour des fichiers de l'input file après suppression
                document.getElementById('advertisment').files = dt.files;
            });
        });

        $("#application").on('change', function(e) {
            for (var i = 0; i < this.files.length; i++) {
                let fileBloc = $('<span/>', {
                        class: 'file-block',
                        id: 'application' + i + ''
                    }),
                    fileName = $('<span/>', {
                        class: 'name',
                        text: this.files.item(i).name,
                    });
                fileBloc.append('<span class="file-delete"><span id="application"></span></span>')
                    .append(fileName);
                $("#applicationList > #application-names").append(fileBloc);
            };
            // Ajout des fichiers dans l'objet DataTransfer
            for (let file of this.files) {
                dt.items.add(file);
            }
            // Mise à jour des fichiers de l'input file après ajout
            this.files = dt.files;

            // EventListener pour le bouton de suppression créé
            $('span.file-delete').click(function() {
                let name = $(this).next('span.name').text();
                // Supprimer l'affichage du nom de fichier
                $(this).parent().remove();
                for (let i = 0; i < dt.items.length; i++) {
                    // Correspondance du fichier et du nom
                    if (name === dt.items[i].getAsFile().name) {
                        // Suppression du fichier dans l'objet DataTransfer
                        dt.items.remove(i);
                        continue;
                    }
                }
                // Mise à jour des fichiers de l'input file après suppression
                document.getElementById('application').files = dt.files;
            });
        });

        function tabs(val) {

            $(".select2").select2();
            var tabHeader = {
                "en": "Recruitments",
                "hi": "प्रेस विज्ञप्ति (Recruitments)",
                "ta": "பத்திரிக்கை செய்தி (Recruitments)"
            }
            $('#getLang').text(val);
            if (val == 'en') {

                $('#tabHeader').text(tabHeader.en);

            } else if (val == 'hi') {

                $('#tabHeader').text(tabHeader.hi);
                $(".select2").select2();
                //statusAppend();

            } else {


                $('#tabHeader').text(tabHeader.ta);
                //	statusAppend();
            }
            statusAppend();

        }
        // function checkAll() {

        //     var checked = $('.i-checks').is(':checked');

        //     console.log(checked);
        //     // Select all
        //     if (checked) {
        //         $('.i-checks').each(function() {
        //             $(this).prop('checked', true);
        //         });
        //     } else {
        //         // Deselect All
        //         $('.i-checks').each(function() {
        //             $(this).prop('checked', false);
        //         });
        //     }

        //     $(':checkbox').prop('checked', true);
        // }


        function tblShow() {

            if ($('#demo-form').parsley().validate() != true) {
                return false;
            }

            $(".data-table-area").show();
        }


        function addNew(lang) {
            console.log(lang);
            // return false;
            $('#subLang').val(lang);

            if (lang == 'en') {

                $('#modalHeader').text(label.en_label.header);
                $('#editModalHeader').text(label.en_label.header);
                $('.addTitle').text(label.en_label.title);
                $('.addFile').text(label.en_label.file);
                $('.addURl').text(label.en_label.url);
                $('.addDate').text(label.en_label.date);

                $('#advertisementlabel').text(label.en_label.advertisement);
                $('#announcement').text(label.en_label.announcements);
                $('#applicationform').text(label.en_label.application);
                $('#lastonlineapp').text(label.en_label.onlineapplications);
                $('#last_receipt').text(label.en_label.nonremotelocalities);
                $('#last_hardcopy').text(label.en_label.hardcopy);

            } else if (lang == 'hi') {
                $('#modalHeader').text(label.hi_label.header);
                $('#editModalHeader').text(label.hi_label.header);
                $('.addTitle').text(label.hi_label.title);
                $('.addFile').text(label.hi_label.file);
                $('.addURl').text(label.en_label.url);
                $('.addDate').text(label.hi_label.date);

                $('#advertisementlabel').text(label.hi_label.advertisement);
                $('#announcement').text(label.hi_label.announcements);
                $('#applicationform').text(label.hi_label.application);
                $('#lastonlineapp').text(label.hi_label.onlineapplications);
                $('#last_receipt').text(label.hi_label.nonremotelocalities);
                $('#last_hardcopy').text(label.hi_label.hardcopy);
                // $('#subLang').val(label.hi_label.lang);
            } else {
                $('#modalHeader').text(label.ta_label.header);
                $('#editModalHeader').text(label.ta_label.header);
                $('.addTitle').text(label.ta_label.title);
                $('.addFile').text(label.ta_label.file);
                $('.addURl').text(label.en_label.url);
                $('.addDate').text(label.ta_label.date);
                // $('#subLang').val(label.ta_label.lang);s
            }

        }

        function editBtn(id, datatype) {
            // console.log(id,datatype);
            // return false;
            language = $('#getLang').text();
            // console.log(language, datatype);
            // return false;
            var editId, editTitle, editDate, editFilename, tblLink;
            // console.log(language);
            var editLabel = {
                "en_label": {
                    "header": "Edit Recruitments",
                    "preview": "Preview Recruitments",
                    "title": "Edit Title",
                    "date": "Edit Date",
                    "file": "Edit File Name",
                    "url": "Edit Link"
                },
                "hi_label": {
                    "header": "प्रेस विज्ञप्ति संपादित करें (Edit Recruitments)",
                    "preview": "पूर्वावलोकन प्रेस विज्ञप्ति (Preview Recruitments)",
                    "title": "शीर्षक संपादित करें (Edit Title)",
                    "date": "संपादन की तारीख (Edit Date)",
                    "file": " फ़ाइल का नाम संपादित करें (Edit File Name)",
                    "url": "लिंक संपादित करें (Edit Link)"
                },
                "ta_label": {
                    "header": "பத்திரிகை வெளியீட்டைத் திருத்தவும் (Edit Recruitments)",
                    "preview": "முன்னோட்டம் பத்திரிகை வெளியீடு (Preview Recruitments)",
                    "title": "தலைப்பைத் திருத்து (Edit Title)",
                    "date": "தேதியைத் திருத்தவும்(Edit Date)",
                    "file": "கோப்பு பெயரைத் திருத்தவும்(Edit File Name)",
                    "url": "இணைப்பைத் திருத்தவும் (Edit Link)"
                }

            }


            if (language == 'en') {

                $('#editModalHeader').text(editLabel.en_label.header);
                $('#previewModalHeader').text(editLabel.en_label.preview);
                $('#editTitle').text(editLabel.en_label.title);
                $('#editFile').text(editLabel.en_label.file);
                $('#editDate').text(editLabel.en_label.date);
                $('#editLink').text(editLabel.en_label.date);

                $('.addTitle').text(label.en_label.title);
                $('.addFile').text(label.en_label.file);
                $('.addDate').text(label.en_label.date);
                $('#advertisement').text(label.en_label.advertisement);
                $('#announcement').text(label.en_label.announcements);
                $('#applicationform').text(label.en_label.application);
                // append the data

                editTitle = $('#tblEnTitle' + id + '').text();
                editDate = $('#tblEnDate' + id + '').text();
                tblFileName = $('#tblEnFileName' + id + '').text();
                tblLink = $('#tblEnLink' + id + '').text();

            } else if (language == 'hi') {
                $('#modalHeader').text(editLabel.hi_label.header);
                $('#editModalHeader').text(editLabel.hi_label.header);
                $('#previewModalHeader').text(editLabel.hi_label.preview);
                $('#editTitle').text(editLabel.hi_label.title);
                $('#editFile').text(editLabel.hi_label.file);
                $('#editDate').text(editLabel.hi_label.date);
                $('#editLink').text(editLabel.hi_label.url);

                $('.addTitle').text(label.hi_label.title);
                $('.addFile').text(label.hi_label.file);
                $('.addDate').text(label.hi_label.date);

                editTitle = $('#tblHiTitle' + id + '').text();
                editDate = $('#tblHiDate' + id + '').text();
                tblFileName = $('#tblHiFileName' + id + '').text();
                tblLink = $('#tblHiLink' + id + '').text();

                // $('#subLang').val(label.hi_label.lang);
            } else {
                $('#modalHeader').text(editLabel.ta_label.header);
                $('#editModalHeader').text(editLabel.ta_label.header);
                $('#previewModalHeader').text(editLabel.ta_label.preview);
                $('#editTitle').text(editLabel.ta_label.title);
                $('#editFile').text(editLabel.ta_label.file);
                $('#editDate').text(editLabel.ta_label.date);
                $('#editLink').text(editLabel.ta_label.url);

                $('.addTitle').text(label.ta_label.title);
                $('.addFile').text(label.ta_label.file);
                $('.addDate').text(label.ta_label.date);

                editTitle = $('#tblTaTitle' + id + '').text();
                editDate = $('#tblTaDate' + id + '').text();
                tblFileName = $('#tblTaFileName' + id + '').text();
                tblLink = $('#tblTaLink' + id + '').text();
                // $('#subLang').val(label.ta_label.lang);s
            }

            console.log(editTitle, editDate, editFilename, tblLink);
            // edit Modal popup
            $('#editId').text(id);
            $('#StatusType').text(datatype);
            $('#editTxtTitle').val(editTitle);
            $('#editad_file').text(tblFileName);
            $('#editTxtDate').val(editDate);
            $('#editTxtlink').val(tblLink);

            // Preview Modal popup
            $('#previewId').text(id);
            $('#prevTitle').text(editTitle);
            $('#prevFileName').text(tblFileName);
            $('#prevDate').text(editDate);
        }

        function showFile() {
            $('#fileDiv').show();
            $('#linkDiv').hide();
            $("#linkCheck").prop('checked', false);
            $('#add_link').removeAttr('required');
            $('#ad_file').attr('required', 'required');

            var checked = $("input[type=checkbox]:checked").length;
            if (checked == 0) {
                $("#fileCheck").prop('checked', true);
            }

        }

        function showLink() {
            $('#linkDiv').show();
            $('#fileDiv').hide();
            $("#fileCheck").prop('checked', false);
            $('#ad_file').removeAttr('required');
            $('#add_link').attr('required', 'required');
            var checked = $("input[type=checkbox]:checked").length;
            if (checked == 0) {
                $("#linkCheck").prop('checked', true);
            }

            exactSize = 0;
            ad_files = "";
        }

        function add_Recruitments(value) {
            // var advertisment = $('#advertisment').files;
            // console.log(advertisment);
            // return false;

            // var fileName = document.getElementById("advertisment").files;
            // var filename = $('#advertisment').val().replace(/.*(\/|\\)/, '');
            //             var fileName = $('#advertisment').files.split(',').pop();
            //             // var fileName = $(this).val().split(',').pop();s
            //             console.log(fileName);
            //             return false;
            //         //    var advertisment = $('#advertisment0').text();
            //         //    console.log(advertisment);
            //             var  advertisment;
            //             var advertismentvalue = [];
            //                   console.log(attachlength);
            //                     for (i = 0; i < attachlength; i++) {
            //                         advertisment = $('#advertisment'+i+'').text();
            //                         // console.log(advertisment.split(" ").join());

            //                         advertismentvalue.push(advertisment);

            //                     }
            //                     advertismentvalue.join(', ');
            //                     console.log(advertismentvalue);
            // return false;
            // return false;
            if ($('#demo-form').parsley().validate() != true) {
                return false;

            } else {


                var title, ad_filepath, end_date, announcements, app_form, onlinedate, receiptdate, hardcopydate, description, ad_desc, link, lang;
                title = $('#txtTitle').val();
                // ad_filepath = $('#ad_file').prop("files")[0];
                end_date = $('#endDate').val();
                link = $('#add_link').val();
                announcements = $('#txtannounce').val();
                onlinedate = $('#onlinedate').val();
                receiptdate = $('#receiptdate').val();
                hardcopydate = $('#hardcopydate').val();
                // console.log('FILE SIZE = ', exactSize);
                // alert(exactSize);

                // if ($("#fileCheck").is(':checked')) {
                var filesize = $('#ad_file')[0].files[0].size;
                var fSExt = new Array('Bytes', 'KB', 'MB', 'GB'),
                    i = 0;
                while (filesize > 900) {
                    filesize /= 1024;
                    i++;
                }
                exactSize = (Math.round(filesize * 100) / 100) + ' ' + fSExt[i];
                console.log(exactSize);

                var app_filesize = $('#app_file')[0].files[0].size;
                var fSExt = new Array('Bytes', 'KB', 'MB', 'GB'),
                    i = 0;
                while (app_filesize > 900) {
                    app_filesize /= 1024;
                    i++;
                }
                var app_exactSize = (Math.round(app_filesize * 100) / 100) + ' ' + fSExt[i];

                // app_exactSize = (Math.round(filesize * 100) / 100) + ' ' + fSExt[i];
                form_data = new FormData();
                ad_files = $('#ad_file')[0].files[0].name;
                var app_filename = $('#app_file')[0].files[0].name;
                ad_filepath = $('#ad_file').prop("files")[0];
                var app_file = $('#app_file').prop("files")[0];
                form_data.append("file", ad_filepath);
                form_data.append("file[]", ad_filepath);
                form_data.append("appfile", app_file);
                // var filesize = $('#ad_file')[0].files[0].size;
                form_data.append('title', title);
                form_data.append('end_date', end_date);
                form_data.append('lang', value);
                form_data.append('link', '');
                form_data.append('ad_files', app_filename);
                form_data.append('app_files', ad_files);
                form_data.append('filesize', exactSize);
                form_data.append('app_filesize', app_exactSize);
                form_data.append('announcement', announcements);
                form_data.append('onlinedate', onlinedate);
                form_data.append('receiptdate', receiptdate);
                form_data.append('hardcopydate', hardcopydate);
                form_data.append('pagename', 'recruitment');
                // form_data.append('title ', title);
                data = form_data;
                console.log(data);

                $.ajax({
                    type: "POST",
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    url: "webservice/addrecruitment.php",
                    data: data,
                    beforeSend: function() {
                        $('#subLang').attr("disabled", "disabled");
                        // $('.wrapper').css("opacity", ".5");
                    },
                    success: function(data) {
                        console.log(data);

                        if (data = 'ok') {

                            //Success Message
                            //  $('#sa-success').on('click', function() {
                            swal('', "Successfully Created", "success")
                            // });

                            $('#txtTitle').val('');
                            $('#ad_file').val('');
                            $('#addModal').modal('hide');
                            // $('.wrapper').css("opacity", "0");
                            // $("#data-table-basic").dataTable().fnReloadAjax();
                        } else {

                            swal("Error :Publish!", "Please try again", "error");
                            // $('.wrapper').css("opacity", ".5");
                        }

                        // $('.text').text(JSON.stringify(data));
                    },

                });



                //  else {

                // data = {
                //     lang: value,
                //     title: title,
                //     end_date: end_date,
                //     ad_filepath: '',
                //     filesize: exactSize,
                //     link: link,
                //     pagename: 'pressrelease'
                // }
                // $.ajax({
                //     type: "POST",
                //     dataType: 'text',
                //     url: "webservice/announcement_new.php",
                //     data: data,
                //     success: function(data) {
                //         console.log(data);
                //         // return false;
                //         if (data = "ok") {

                //             //Success Message
                //             //  $('#sa-success').on('click', function() {
                //             swal('', "Successfully Created", "success")
                //             // });

                //             $('#txtTitle').val('');
                //             $('#ad_file').val('');
                //             $('#addModal').modal('hide');
                //             // $("#data-table-basic").dataTable().fnReloadAjax();
                //         } else {

                //             swal("Error :Publish!", "Please try again", "error");
                //         }

                //         // $('.text').text(JSON.stringify(data));
                //     },

                // });


                // }

            }

            // console.log();
        }


        // function getrecords() {

        // }

        function editFunction() {
            language = $('#getLang').text();
            if ($('#edit-demo-form').parsley().validate() != true) {
                return false;

            } else {
                var modalId, modalTitle, modalDate, modalFilename, statusType, modalLink;
                modalId = $('#editId').text();
                statusType = $('#StatusType').text();
                modalTitle = $('#editTxtTitle').val();
                modalDate = $('#editTxtDate').val();
                modalLink = $('#editTxtlink').val();
                // var ad_files = $('#editad_file')[0].files[0].name;
                var ad_filepath = $('#editad_file').prop("files")[0];
                var editform_data = new FormData();

                var filesize = $('#editad_file')[0].files[0].size;
                var fSExt = new Array('Bytes', 'KB', 'MB', 'GB'),
                    i = 0;
                while (filesize > 900) {
                    filesize /= 1024;
                    i++;
                }
                var exactSize = (Math.round(filesize * 100) / 100) + ' ' + fSExt[i];
                editform_data.append("file", ad_filepath);


                // var filesize = $('#ad_file')[0].files[0].size;
                editform_data.append('id', modalId);
                editform_data.append('title', modalTitle);
                editform_data.append('end_date', modalDate);
                editform_data.append('language', language);
                editform_data.append('modalLink', modalLink);
                editform_data.append('ad_filepath', ad_filepath);
                editform_data.append('filesize', exactSize);
                editform_data.append('statusType', statusType);
                // modalFilename = $('#editad_file')[0].files[0].name;
                //     console.log(modalId, modalTitle, modalFilename, modalDate);
                $.ajax({
                    type: "POST",
                    // what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    url: "webservice/editAnnounce.php",
                    data: editform_data,


                    success: function(data) {
                        console.log(data);
                        if (data = 'success') {

                            //Success Message
                            //  $('#sa-success').on('click', function() {
                            swal("Good job!", "Lorem ipsum dolor cry sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, Spensaduran pellentesque maximus eniman. Mauriseleifend ex semper, lobortis purus.", "success")
                            // });

                            $('#txtTitle').val('');
                            $('#ad_file').val('');


                            $('#editModal').modal('hide');

                            // table.ajax.reload(null, false); 
                            // var table = $('#ata-table-basic').DataTable();
                            // table.ajax.reload();
                            // $("#data-table-basic").dataTable().fnReloadAjax();
                        } else {

                            swal("Error :Publish!", "Please try again", "error");
                        }

                        // $('.text').text(JSON.stringify(data));
                    },
                });
            }

        }

        // function publish(previewId) {

        //     editBtn(previewId);
        //     previewId = $('#previewId').text();

        //     swal({
        //         title: "Are you sure?",
        //         text: "You will not be able to recover this imaginary file!",
        //         type: "warning",
        //         showCancelButton: true,
        //         confirmButtonText: "Yes, Publish it!",
        //         cancelButtonText: "No, cancel plx!",
        //     }).then(function(isConfirm) {
        //         $.ajax({
        //             url: "webservice/previewAnnounce.php",
        //             type: "POST",
        //             data: {
        //                 id: previewId
        //             },
        //             // dataType: "html",
        //             success: function(data) {
        //                 console.log(data);
        //                 swal("Done!", "It was succesfully Published!", "success");
        //             },
        //             error: function(xhr, ajaxOptions, thrownError) {
        //                 swal("Error :Publish!", "Please try again", "error");
        //             }
        //         });

        //         // if (isConfirm) {

        //         //     swal("Deleted!", "Your imaginary file has been deleted.", "success");
        //         // } else {
        //         //     swal("Cancelled", "Your imaginary file is safe :)", "error");
        //         // }
        //     });

        // }


        function statusChange(id, status) {

            language = $('#getLang').text();
            //  console.log(language);
            //   return false;
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, " + status + " it!",
                    cancelButtonText: "No, cancel!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            url: "webservice/statuschange.php",
                            type: "POST",
                            data: {
                                status: status,
                                id: id,
                                lang: language,
                                pagename: 'recruitment'
                            },
                            // dataType: "html",
                            success: function(data) {
                                console.log(data);
                                if (data = 'success') {
                                    $('#tblStatus' + id + '').append(status);
                                    swal("Done!", "It was succesfully " + status + "!", "success");

                                    statusAppend();
                                } else {
                                    swal("Error :" + status + "!", "Please try again", "error");

                                }
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                swal("Error :" + status + "!", "Please try again", "error");
                            }


                        });
                    } else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                }
            );
            // swal({
            //     title: "Are you sure?",
            //     text: "You will not be able to recover this imaginary file!",
            //     type: "warning",
            //     showCancelButton: true,
            //     confirmButtonText: "Yes, " + status + " it!",
            //     cancelButtonText: "No, cancel!",

            // }).then((result) => {
            //     /* Read more about isConfirmed, isDenied below */
            //     console.log(result);
            //     return false;
            //     if (result.isConfirmed) {
            //         $.ajax({
            //             url: "webservice/statusChange.php",
            //             type: "POST",
            //             data: {
            //                 status: status,
            //                 id: id,
            //                 lang: language
            //             },
            //             // dataType: "html",
            //             success: function(data) {
            //                 console.log(data);
            //                 if (data = 'success') {
            //                     $('#tblStatus' + id + '').append(status);
            //                     swal("Done!", "It was succesfully " + status + "!", "success");

            //                     statusAppend();
            //                 } else {
            //                     swal("Error :" + status + "!", "Please try again", "error");

            //                 }
            //             },
            //             error: function(xhr, ajaxOptions, thrownError) {
            //                 swal("Error :" + status + "!", "Please try again", "error");
            //             }


            //         });
            //     } else if (result.isDenied) {
            //         Swal.fire('Changes are not saved', '', 'info')
            //     }



            //     // if (isConfirm) {

            //     //     swal("Deleted!", "Your imaginary file has been deleted.", "success");
            //     // } else {
            //     //     swal("Cancelled", "Your imaginary file is safe :)", "error");
            //     // }
            // });


        }

        function statusAppend() {
            var tabLang = $('#getLang').text();

            var statusChange = <?php echo json_encode($statuslang); ?>;
            //  console.log(statusChange);
            var statusJson = {
                "N": 'Draft',
                "A": 'Archive',
                "H": "Hide",
                "D": "Delete",
                "L": "Published"
            }
            var arraylength, checkStatus, i;


            if (tabLang == 'en') {
                arraylength = statusChange.en.length;
                // console.log(arraylength);
                for (i = 0; i < arraylength; i++) {

                    if (statusChange.en[i].status == 'A') {

                        $('#tblEnStatus' + statusChange.en[i].id + '').text(statusJson.A).css({
                            // "background-color": "#800080",
                            "font-size": "125%",
                            "color": "#800080"
                        });
                        // css("color", "#800080");

                        $('#sltEnStatus' + statusChange.en[i].id + '').val(statusJson.A);

                        // $('#tblStatus' + statusChange.en[i].id + '').append(statusJson.A);
                        // $('#tblStatus' + statusChange.en[i].id + '').css("color", "blue");
                    } else if (statusChange.en[i].status == 'H') {
                        $('#tblEnStatus' + statusChange.en[i].id + '').text(statusJson.H).css({
                            // "background-color": "#00008B",
                            "font-size": "125%",
                            "color": "#00008B"
                        });
                        // ("color", "#00008B");
                        $('#sltEnStatus' + statusChange.en[i].id + '').val(statusJson.H);
                        // $('#tblStatus')
                    } else if (statusChange.en[i].status == 'D') {
                        $('#tblEnStatus' + statusChange.en[i].id + '').text(statusJson.D).css({
                            // "background-color": "#FF0000",
                            "font-size": "125%",
                            "color": "#FF0000"
                        });
                        // ("color", "#FF0000");
                        $('#sltEnStatus' + statusChange.en[i].id + '').val(statusJson.D);
                        // $('#tblStatus')
                    } else if (statusChange.en[i].status == 'N') {
                        $('#tblEnStatus' + statusChange.en[i].id + '').text(statusJson.N).css({
                            // "background-color": "#FF0000",
                            "font-size": "125%",
                            "color": "#F535AA"
                        });
                        // ("color", "#FF0000");
                        $('#sltEnStatus' + statusChange.en[i].id + '').val(statusJson.N);
                        // $('#tblStatus')
                    } else {
                        $('#tblEnStatus' + statusChange.en[i].id + '').text(statusJson.L).css({
                            // "background-color": "#008000",
                            "font-size": "125%",
                            "color": "#008000"
                        });
                        // css("color", "#008000");
                        // alert();
                        $('#tblEnStatus' + statusChange.en[i].id + '').val(statusJson.L).trigger("change");

                        var change = $('#tblEnStatus' + statusChange.en[i].id + '').text();

                        $('#sltEnStatus31' + statusChange.en[i].id + '').val(change).trigger("change");
                        //                       var select =   $('#sltEnStatus31').val();
                        // console.log(select);
                        //                         // $('#sltEnStatus31 option:selected').select2("value", "Published");
                        //                         // Change the value or make some change to the internal state
                        //                         $('#sltEnStatus31').trigger('change.select2');
                        //                         // $('.select2').trigger('change');
                        // $('#tblStatus')

                        // console.log($("#sltEnStatus31").val(change));
                        // $("#sltEnStatus31 option:selected").val("Published").trigger("change");
                    }
                }

            } else if (tabLang == 'hi') {

                arraylength = statusChange.hi.length;
                for (i = 0; i < arraylength; i++) {
                    //    console.log(statusChange.hi[i].status,statusChange.hi[i].id,statusJson.A);
                    if (statusChange.hi[i].status == 'A') {
                        console.log(statusChange.hi[i].status);
                        $('#tblHiStatus' + statusChange.hi[i].id + '').text(statusJson.A).css({
                            // "background-color": "#800080",
                            "font-size": "125%",
                            "color": "#800080"
                        });
                        // css("color", "#800080");

                        console.log(statusChange.hi[i].id);

                        //  $('#sltHiStatus' + statusChange.hi[i].id + '').val(statusJson.A);
                        $('#sltHiStatus' + statusChange.hi[i].id + '').val(statusJson.A);
                        // $('#tblStatus' + statusChange.en[i].id + '').append(statusJson.A);
                        // $('#tblStatus' + statusChange.en[i].id + '').css("color", "blue");
                    } else if (statusChange.hi[i].status == 'H') {
                        $('#tblHiStatus' + statusChange.hi[i].id + '').text(statusJson.H).css({
                            // "background-color": "#00008B",
                            "font-size": "125%",
                            "color": "#00008B"
                        });
                        // ("color", "#00008B");
                        $('#sltHiStatus' + statusChange.hi[i].id + '').val(statusJson.H);
                        // $('#tblStatus')
                    } else if (statusChange.hi[i].status == 'D') {
                        $('#tblHiStatus' + statusChange.hi[i].id + '').text(statusJson.D).css({
                            // "background-color": "#FF0000",
                            "font-size": "125%",
                            "color": "#FF0000"
                        });
                        // ("color", "#FF0000");
                        $('#sltHiStatus' + statusChange.hi[i].id + '').val(statusJson.D);
                        // $('#tblStatus')
                    } else if (statusChange.hi[i].status == 'N') {

                        $('#tblHiStatus' + statusChange.hi[i].id + '').text(statusJson.N).css({
                            // "background-color": "#FF0000",
                            "font-size": "125%",
                            "color": "#F535AA"
                        });
                        // ("color", "#FF0000");
                        $('#sltHiStatus' + statusChange.hi[i].id + '').val(statusJson.N);
                        // $('#tblStatus')
                    } else {
                        $('#tblHiStatus' + statusChange.hi[i].id + '').text(statusJson.L).css({
                            // "background-color": "#008000",
                            "font-size": "125%",
                            "color": "#008000"
                        });
                        // css("color", "#008000");
                        $('#sltHiStatus' + statusChange.hi[i].id + '').val(statusJson.L);
                        // $('#tblStatus')
                    }
                }
            } else {
                arraylength = statusChange.ta.length;
                for (i = 0; i < arraylength; i++) {

                    if (statusChange.ta[i].status == 'A') {

                        $('#tblTaStatus' + statusChange.ta[i].id + '').text(statusJson.A).css({
                            // "background-color": "#800080",
                            "font-size": "125%",
                            "color": "#800080"
                        });
                        // css("color", "#800080");
                        $('#sltTaStatus' + statusChange.ta[i].id + '').val(statusJson.A);

                        // $('#tblStatus' + statusChange.en[i].id + '').append(statusJson.A);
                        // $('#tblStatus' + statusChange.en[i].id + '').css("color", "blue");
                    } else if (statusChange.ta[i].status == 'H') {
                        $('#tblTaStatus' + statusChange.ta[i].id + '').text(statusJson.H).css({
                            // "background-color": "#00008B",
                            "font-size": "125%",
                            "color": "#00008B"
                        });
                        // ("color", "#00008B");
                        $('#sltTaStatus' + statusChange.ta[i].id + '').val(statusJson.H);
                        // $('#tblStatus')
                    } else if (statusChange.ta[i].status == 'D') {
                        $('#tblTaStatus' + statusChange.ta[i].id + '').text(statusJson.D).css({
                            // "background-color": "#FF0000",
                            "font-size": "125%",
                            "color": "#FF0000"
                        });
                        // ("color", "#FF0000");
                        $('#sltTaStatus' + statusChange.ta[i].id + '').val(statusJson.D);
                        // $('#tblStatus')
                    } else if (statusChange.ta[i].status == 'N') {
                        $('#tblTaStatus' + statusChange.ta[i].id + '').text(statusJson.N).css({
                            // "background-color": "#FF0000",
                            "font-size": "125%",
                            "color": "#F535AA"
                        });
                        // ("color", "#FF0000");
                        $('#sltTaStatus' + statusChange.ta[i].id + '').val(statusJson.N);
                        // $('#tblStatus')
                    } else {
                        $('#tblTaStatus' + statusChange.ta[i].id + '').text(statusJson.L).css({
                            // "background-color": "#008000",
                            "font-size": "125%",
                            "color": "#008000"
                        });
                        // css("color", "#008000");
                        $('#sltTaStatus' + statusChange.ta[i].id + '').val(statusJson.L);
                        // $('#tblStatus')
                    }
                }
            }


            // return false;


            $(".select2").select2();

            // $('#tbl-en-published').DataTable().ajax.reload();
            // $('#tbl-en-published').DataTable().ajax.reload(null, false);
        }

        function archiveBtn(archiveId) {

            editBtn(archiveId);
            archiveId = $('#previewId').text();

            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, Archive it!",
                cancelButtonText: "No, cancel plx!",
            }).then(function(isConfirm) {
                $.ajax({
                    url: "webservice/archiveAnnounce.php",
                    type: "POST",
                    data: {
                        id: archiveId
                    },
                    // dataType: "html",
                    success: function(data) {
                        console.log(data);
                        swal("Done!", "It was succesfully Archived!", "success");
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        swal("Error :Archive!", "Please try again", "error");
                    }
                });

                // if (isConfirm) {

                //     swal("Deleted!", "Your imaginary file has been deleted.", "success");
                // } else {
                //     swal("Cancelled", "Your imaginary file is safe :)", "error");
                // }
            });

        }

        function deleteBtn(id) {

            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
            }).then(function(isConfirm) {
                $.ajax({
                    url: "webservice/deleteAnnounce.php",
                    type: "POST",
                    data: {
                        id: id
                    },
                    // dataType: "html",
                    success: function(data) {
                        console.log(data);
                        swal("Done!", "It was succesfully deleted!", "success");
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        swal("Error deleting!", "Please try again", "error");
                    }
                });

                // if (isConfirm) {

                //     swal("Deleted!", "Your imaginary file has been deleted.", "success");
                // } else {
                //     swal("Cancelled", "Your imaginary file is safe :)", "error");
                // }
            });

        }

        $('#addModal').on('hidden.bs.modal', function() {
            $(this).find('form').trigger('reset');
        })
    </script>
</body>

</html>