<?php include 'include/session.php';
include("include/db_connection.php");

$sessionId = $_SESSION['userId'];

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

$table_en = 'mst_rticontacts_en';
$table_hi = 'mst_rticontacts_hi';
$table_ta = 'mst_rticontacts_ta';
// $connect = pg_connect("localhost", "root", "", "testing");
$draftEn = "SELECT * FROM $table_en WHERE inserted_by='$sessionId'   AND status='A' ORDER BY rti_id asc";
// $draftEn = "select * FROM $table_en WHERE inserted_by='$sessionId'
// AND status='N' UNION ALL
// select * FROM $table_en WHERE inserted_by='$sessionId' 
// AND status<>'N' ";
// // echo $draftEn;
// // exit;
$resultDraftEn = pg_query($db, $draftEn);



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
    <title>NIOT - RTI Contacts</title>

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
                                <li class="breadcrumb-item"><a href="#!"> Contacts</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">RTI Contacts</a>
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
                        <h4 style="color:#111">RTI Contacts</h4>
                    </div>
                    <div class="col-lg-12">
                        <!-- Row start -->
                        <div class="row"> <span hidden id="getLang"></span>
                            <div class="col-lg-12">
                                <div class="card">
                                    <!-- Radio-Button start -->
                                    <!-- <div class="card-header">
                                 <h5 class="card-header-text">Bootstrap Tab</h5>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                              </div> -->
                                    <div class="card-block">
                                        <!-- <div class="col-lg-12 text-center" style="border-radius:25px;">
                                            <h4>Annual Reports</h4>
                                        </div> -->

                                        <!-- Row start -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="sub-title" style="border-bottom:none;">
                                                    <ul class="nav nav-tabs tabs langtab" role="tablist">

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
                                                                <!-- <div class="col-lg-2" style="text-align:right">
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
                                                                </div> -->

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
                                                                                    <th>S.No</th>
                                                                                    <th class="text-center" style="width:10%;">Name</th>
                                                                                    <th style="width:10%;"> Role</th>
                                                                                    <th class="text-center" style="width:10%;">Designation</th>
                                                                                    <th class="text-center" style="width:30%;">Address</th>
                                                                                    <th>Phone Number</th>
                                                                                    <th> Email</th>
                                                                                    <!-- <th>Status</th> -->
                                                                                    <!-- <th>Status Change</th> -->
                                                                                    <th>Action</th>
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
                                                                                ?>
                                                                                    <tr>
                                                                                        <td><?php echo ++$i ?></td>
                                                                                        <td id="tblenname<?php echo $row['rti_id'] ?>"><?php echo $row['rtiname'] ?></td>
                                                                                        <td id="tblenrole<?php echo $row['rti_id'] ?>"><b><?php echo $row['rtirole'] ?></b></td>
                                                                                        <td id="tblendes<?php echo $row['rti_id'] ?>"><?php echo $row['rtidesignation'] ?></td>
                                                                                        <td id="tblenaddress<?php echo $row['rti_id'] ?>"><?php echo $row['rtiaddress'] ?></td>
                                                                                        <td id="tblenphone<?php echo $row['rti_id'] ?>"><?php echo $row['rtiphone'] ?></td>
                                                                                        <td id="tblenemail<?php echo $row['rti_id'] ?>"><?php echo $row['rtiemail'] ?></td>
                                                                                        <td><button type="button" class="btn btn-info notika-btn-info" data-toggle="modal" data-target="#editModal" onclick="editBtn('<?php echo $row['rti_id'] ?>','en');" title="Edit Here"><i class="fa fa-edit"></i></button></td>
                                                                                    </tr>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </tbody>
                                                                            <!-- <tbody>
                                                                                <?php
                                                                                // $i = 0;
                                                                                // $file;
                                                                                // while (
                                                                                //     $row = pg_fetch_array(
                                                                                //         $resultDraftEn
                                                                                //     )
                                                                                // ) {
                                                                                //     if ($row['filename'] != "") {
                                                                                //         $file = $row['filename'];
                                                                                //     } else if ($row['link'] != "") {
                                                                                //         $file = $row['link'];
                                                                                //     }

                                                                                //     $statusArray = [];
                                                                                //     $statusLang['lang'] = ['en'];
                                                                                //     $statusArray['status'] =
                                                                                //         $row['status'];
                                                                                //     $statusArray['id'] =
                                                                                //         $row['doc_id'];
                                                                                //     $statusChange[] = $statusArray;

                                                                                //     array_push($statuslang["en"], array("status" =>   $row['status'], "id" => $row['doc_id']));
                                                                                ?>

                                                                                    <tr>

                                                                                        <td>
                                                                                            <?php echo ++$i; ?>
                                                                                        </td>
                                                                                        <td id="tblEnTitle" <?php echo $row['doc_id']  ?>>
                                                                                            <?php echo $row['title'] ?>
                                                                                        </td>

                                                                                        <td id="tblEnTitle" <?php echo $row['doc_id']  ?>>
                                                                                            <?php echo $file ?>
                                                                                        </td>
                                                                                        <td id="tblEnTitle" <?php echo $row['doc_id']  ?>>
                                                                                            <?php echo date('d-m-Y ', strtotime($row['announce_dt'])) ?>
                                                                                        </td>
                                                                                        <td><strong><b id="tblEnStatus<?php echo $row['doc_id'] ?>"></b></strong>
                                                                                        </td>
                                                                                        <td>
                                                                                            <select class="select2" id="sltEnStatus<?php echo $row['doc_id'] ?>
                                                                            '" data-live-search="true" style="width: 100%" onchange="statusChange( <?php echo  $row['doc_id'] ?>,this.value);">
                                                                                                <option value="Draft">Draft</option>
                                                                                                <option value="Published">Published</option>
                                                                                                <option value="Archive">Archive</option>
                                                                                                <option value="Hide">Hide</option>
                                                                                                <option value="Delete">Delete</option>
                                                                                            </select>

                                                                                        </td>

                                                                                        <td id="tblEnTitle" <?php echo $row['doc_id']  ?>><button type="button" class="btn btn-info notika-btn-info" data-toggle="modal" data-target="#editModal" onclick="editBtn(' <?php echo $row['doc_id'] ?> ','<?php echo $row['status'] ?>');" title="Edit Here"><i class="fa fa-edit"></i></button>
                                                                                            &nbsp;&nbsp;<button class="btn btn-success notika-btn-success" title="Preview Here" data-toggle="modal" data-target="#previewModal"><i class="fa fa-eye"></i></button>

                                                                                        </td>


                                                                                    </tr>
                                                                                <?php
                                                                                // }
                                                                                ?>


                                                                
                                                                            </tbody> -->


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
                                                                <table class="tbl-en-draft" class="table table-borderd" width="100%">
                                                                    <thead style="color:#fff;width:100%;background:#40c4ff">
                                                                        <tr>
                                                                            <!-- <th><input type="checkbox" class="" id='checkallusers' onclick="checkAll(id);"> All
                                                                    </th> -->
                                                                            <th>क्रमांक (S.No)</th>
                                                                            <th>शीर्षक (Title)</th>
                                                                            <th>दिनांक (Date)</th>
                                                                            <th>फ़ाइल का नाम (File Name)</th>
                                                                            <!-- <th>संपर्क (Link)</th> -->

                                                                            <th>स्थिति (Status)</th>
                                                                            <th>स्थिति परिवर्तन (Status Change)</th>
                                                                            <th>कार्य (Action)</th>
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
                                                                            $statusLang['lang'] = ['hi'];
                                                                            $statusArray['status'] =
                                                                                $row['status'];
                                                                            $statusArray['id'] =
                                                                                $row['doc_id'];
                                                                            $statusChange[] = $statusArray;

                                                                            array_push($statuslang["hi"], array("status" =>   $row['status'], "id" => $row['doc_id']));
                                                                        ?>

                                                                            <tr>

                                                                                <td>
                                                                                    <?php echo ++$i; ?>
                                                                                </td>
                                                                                <td id="tblHiTitle" <?php echo $row['doc_id']  ?>>
                                                                                    <?php echo $row['title'] ?>
                                                                                </td>

                                                                                <td id="tblHiTitle" <?php echo $row['doc_id']  ?>>
                                                                                    <?php echo  $file ?>
                                                                                </td>
                                                                                <td id="tblHiTitle" <?php echo $row['doc_id']  ?>>
                                                                                    <?php echo date('d-m-Y ', strtotime($row['announce_dt'])) ?>
                                                                                </td>
                                                                                <td><strong><b id="tblHiStatus<?php echo $row['doc_id'] ?>"></b></strong>
                                                                                </td>
                                                                                <td>
                                                                                    <select class="js-example-responsive  select2" id="sltHiStatus<?php echo $row['doc_id'] ?>
                                                                            '" data-live-search="true" style="width: 100%" onchange="statusChange( <?php echo  $row['doc_id'] ?>,this.value);">
                                                                                        <option value="Draft">Draft</option>
                                                                                        <option value="Published">Published</option>
                                                                                        <option value="Archive">Archive</option>
                                                                                        <option value="Hide">Hide</option>
                                                                                        <option value="Delete">Delete</option>
                                                                                    </select>

                                                                                </td>

                                                                                <td id="tblHiTitle" <?php echo $row['doc_id']  ?>><button type="button" class="btn btn-info notika-btn-info" data-toggle="modal" data-target="#editModal" onclick="editBtn(' <?php echo $row['doc_id'] ?> ','<?php echo $row['status'] ?>');" title="Edit Here"><i class="fa fa-edit"></i></button>
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
                                                                                $row['doc_id'];
                                                                            $statusChange[] = $statusArray;

                                                                            array_push($statuslang["ta"], array("status" =>   $row['status'], "id" => $row['doc_id']));
                                                                        ?>

                                                                            <tr>

                                                                                <td>
                                                                                    <?php echo ++$i; ?>
                                                                                </td>
                                                                                <td id="tblTaTitle" <?php echo $row['doc_id']  ?>>
                                                                                    <?php echo $row['title'] ?>
                                                                                </td>

                                                                                <td id="tblTaTitle" <?php echo $row['doc_id']  ?>>
                                                                                    <?php echo  $file ?>
                                                                                </td>
                                                                                <td id="tblTaTitle" <?php echo $row['doc_id']  ?>>
                                                                                    <?php echo date('d-m-Y ', strtotime($row['announce_dt'])) ?>
                                                                                </td>
                                                                                <td><strong><b id="tblTaStatus<?php echo $row['doc_id'] ?>"></b></strong>
                                                                                </td>
                                                                                <td>
                                                                                    <select class="js-example-responsive  select2" id="sltTaStatus<?php echo $row['doc_id'] ?>
                                                                            '" data-live-search="true" style="width: 100%" onchange="statusChange( <?php echo  $row['doc_id'] ?>,this.value);">
                                                                                        <option value="Draft">Draft</option>
                                                                                        <option value="Published">Published</option>
                                                                                        <option value="Archive">Archive</option>
                                                                                        <option value="Hide">Hide</option>
                                                                                        <option value="Delete">Delete</option>
                                                                                    </select>

                                                                                </td>

                                                                                <td id="tblTaTitle" <?php echo $row['doc_id']  ?>><button type="button" class="btn btn-info notika-btn-info" data-toggle="modal" data-target="#editModal" onclick="editBtn(' <?php echo $row['doc_id'] ?> ','<?php echo $row['status'] ?>');" title="Edit Here"><i class="fa fa-edit"></i></button>
                                                                                    &nbsp;&nbsp;<button class="btn btn-success notika-btn-success" title="Preview Here" data-toggle="modal" data-target="#previewModal"><i class="fa fa-eye"></i></button>

                                                                                </td>


                                                                            </tr>
                                                                        <?php } ?>
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

    <div class="modal animated fade modal-popout-bg" id="addModal" role="dialog" data-keyboard="true" data-backdrop="static">
        <div class="modal-dialog modals-default">
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
                        <div class="form-group">
                            <label for="title"><span class="rtiname"> </span><span class="mandatory"> *</span></label>
                            <input type="text" class="form-control" id="txtrtiname" name="title" placeholder="Enter Title" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="title"><span class="rtirole"> </span><span class="mandatory"> *</span></label>
                            <select type="text" class="form-control select2" id="txtrtirole" name="title" placeholder="Enter Designation(eg:Scientist-E)" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                                <option value="">select RTI Role</option>
                                <option value="Central Public Information Officer">Central Public Information Officer</option>
                                <option value="First Appellate Authority">First Appellate Authority</option>
                                <option value="Vigilance Officer">Vigilance Officer</option>
                                <option value="Grievance Officer">Grievance Officer</option>
                                <!-- <option value="WY">Deleted</option> -->
                            </select>
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="title"><span class="rtides"> </span><span class="mandatory"> *</span></label>
                            <input type="text" class="form-control" id="txtrtides" name="title" placeholder="Enter Designation(eg:Scientist-E)" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="title"><span class="rtiaddress"> </span><span class="mandatory"> *</span></label>
                            <textarea type="text" class="form-control" id="txtrtiaddress" name="title" placeholder="Enter Address" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change"></textarea>
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="title"><span class="rtiphone"> </span><span class="mandatory"> *</span></label>
                            <input type="number" class="form-control" id="txtrtiphone" name="title" placeholder="Enter Phone Number" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <!-- <div class="color-tags">
                            <input class="form-control" type="email"  data-role="tagsinput" >
                        </div> -->
                        <div class="form-group">
                            <label for="title"><span class="rtiemail"> </span><span class="mandatory"> *</span></label>
                            <input type="email" class="form-control" id="txtrtiemail" data-parsley-type="email" multiple name="email" placeholder="Enter Email" required="" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->

                    </form>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-success" onclick="add_rticontacts(this.value);" id="subLang">Submit</button>
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
                    <span hidden id="getlanguage"></span>

                </div>
                <div class="modal-body" style="padding-top:10px;">
                    <form id="edit-demo-form" data-parsley-validate="">
                        <div class="form-group">
                            <label for="title"><span class="editrtiname"> </span><span class="mandatory"> *</span></label>
                            <input type="text" class="form-control" id="editname" name="title" placeholder="Enter Title" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="title"><span class="editrtirole"> </span><span class="mandatory"> *</span></label>
                            <select class="form-control select2" id="editrole" name="title" placeholder="Enter Designation(eg:Scientist-E)" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                                <option value="">select RTI Role</option>
                                <option value="Central Public Information Officer">Central Public Information Officer</option>
                                <option value="First Appellate Authority">First Appellate Authority</option>
                                <option value="Vigilance Officer">Vigilance Officer</option>
                                <option value="Grievance Officer">Grievance Officer</option>
                                <!-- <option value="WY">Deleted</option> -->
                            </select>
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="title"><span class="editrtides"> </span><span class="mandatory"> *</span></label>
                            <input type="text" class="form-control" id="editdes" name="title" placeholder="Enter Designation(eg:Scientist-E)" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="title"><span class="editrtiaddress"> </span><span class="mandatory"> *</span></label>
                            <textarea type="text" class="form-control" id="editaddress" name="title" placeholder="Enter Address" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change"></textarea>
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="title"><span class="editrtiphone"> </span><span class="mandatory"> *</span></label>
                            <input type="number" class="form-control" id="editphone" name="title" placeholder="Enter Phone Number" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <!-- <div class="color-tags">
                            <input class="form-control" type="email"  data-role="tagsinput" >
                        </div> -->
                        <div class="form-group">
                            <label for="title"><span class="editrtiemail"> </span><span class="mandatory"> *</span></label>
                            <input type="email" class="form-control" id="editemail" data-parsley-type="email" multiple name="email" placeholder="Enter Email" required="" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
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
        var currDate, table, previewId, archiveId, language, filesize, exactSize, ad_files, form_data, ad_filepath;
        var label = {
            "en_label": {
                "header": "RTI Contacts",
                "editHeader": "Edit RTI Contacts",
                "name": 'Name',
                "role": 'RTI Role',
                "designation": "Designation",
                "address": 'Address',
                "phone": "Phone Number",
                "email": "Email",
                "lang": "en",
                "niotaddress": "",
                "url": "Link"
            },
            "hi_label": {
                "header": "समाचार पत्र (News Letter)",
                "editHeader": "समाचार पत्र संपादित करें (Edit News Letter)",
                "title": 'प्रेस शीर्षक (Title)',
                "date": "पर प्रविष्ट किया (Posted On)",
                "file": "फ़ाइल का नाम (File Name)",
                "url": "संपर्क (Link)"
            },
            "ta_label": {
                "header": "செய்திமடல் (News Letter)",
                "editHeader": "செய்திக் கடிதத்தைத் திருத்தவும் (Edit News Letter)",
                "title": 'தலைப்பு (News Letter)',
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

            $('.tbl-en-draft').dataTable({
                // // scrollY: "330px",
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

            // $('#dropdown1').on('change', function(e) {
            //     var status = $(this).val();
            //     $('#dropdown1').val(status);
            //     console.log(status);
            //     // table.column(5).search('\\s' + status + '\\s', true, false, true).draw();
            //     table.column(3).search(status).draw();
            // })
            //     table = $('#tbl-hi-draft').DataTable({
            //     // scrollY: "330px",
            //     // scrollX: true,
            //     scrollCollapse: true,
            //     scrollY: 360,
            //     paging: false,
            //     // searching: false
            //     "info": false
            // });
            // if ($.fn.dataTable.isDataTable('.tbl-hi-draft')) {
            //     table = $('.tbl-hi-draft').DataTable({
            //         scrollY: "330px",
            //         scrollY: true,
            //         scrollX: true,
            //         ScrollX: "100px",
            //         scrollCollapse: false,
            //         paging: true,

            //     }).columns.adjust().draw();
            // } else {
            //     table = $('.tbl-hi-draft').DataTable({

            //     }).columns.adjust().draw();
            // }
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

        // $(".dataTables_scrollHeadInner").css({
        //     "width": "100%"
        // });
        // $(".table ").css({
        //     "width": "100%"
        // });

        // $("#checkallusers").change(function(e) {
        //     e.preventDefault();
        //     var checked = $(this).is(':checked');

        //     // Select all
        //     if (checked) {
        //         $('.sel_users').each(function() {
        //             $(this).prop('checked', true);
        //             $('#btnPublish').removeAttr('disabled'); //enable input
        //             $('#btnArchive').show();
        //         });
        //     } else {
        //         // Deselect All
        //         $('.sel_users').each(function() {
        //             $(this).prop('checked', false);
        //             $('#btnPublish').attr('disabled', true); //disable input
        //             $('#btnArchive').hide();

        //         });
        //     }


        // });


        function tabs(val) {

            $(".select2").select2();
            var tabHeader = {
                "en": "News Letter",
                "hi": "समाचार पत्र (News Letter)",
                "ta": "செய்திமடல் (News Letter)"
            }
            $('#getLang').text(val);
            // $('#subLang').val(val);

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
            // statusAppend();


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


        // function tblShow() {

        //     if ($('#demo-form').parsley().validate() != true) {
        //         return false;
        //     }

        //     $(".data-table-area").show();
        // }

        function addNew(lang) {
            console.log(lang);
            // return false;
            $('#subLang').val(lang);

            if (lang == 'en') {

                $('#modalHeader').text(label.en_label.header);
                $('#editModalHeader').text(label.en_label.header);
                $('.rtiname').text(label.en_label.name);
                $('.rtides').text(label.en_label.designation);
                $('.rtiaddress').text(label.en_label.address);
                $('.rtiphone').text(label.en_label.phone);
                $('.rtiemail').text(label.en_label.email);
                $('.rtirole').text(label.en_label.role);
                $('.addDate').text(label.en_label.date);
                // $('#txtrtiaddress').val(label.en_label.niotaddress);

            } else if (lang == 'hi') {
                $('#modalHeader').text(label.hi_label.header);
                $('#editModalHeader').text(label.hi_label.header);
                $('.addTitle').text(label.hi_label.title);
                $('.addFile').text(label.hi_label.file);
                $('.addURl').text(label.en_label.url);
                $('.addDate').text(label.hi_label.date);
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
            $(".select2").select2({
                dropdownParent: $('#addModal')
            });

            return false;
        }

        function editBtn(id, editbtnlang) {
            // console.log(id,editlang);
            // return false;
            $('#getlanguage').text(editbtnlang);
            console.log(editbtnlang);
            // return false;
            var editId, editname, editdes, editrole, editaddress, editphone, editemail;
            // console.log(language);
            var editLabel = {
                "en_label": {

                    // "header": "Edit RTI Contacts",
                    "editHeader": "Edit RTI Contacts",
                    "name": 'Edit Name',
                    "role": 'Edit RTI Role',
                    "designation": "Edit Designation",
                    "address": 'Edit Address',
                    "phone": "Edit Phone Number",
                    "email": "Edit Email",
                    "lang": "en",

                },
                "hi_label": {
                    "header": "समाचार पत्र संपादित करें (Edit News Letter)",
                    "preview": "पूर्वावलोकन समाचार पत्र(Preview News Letter)",
                    "title": "शीर्षक संपादित करें (Edit Title)",
                    "date": "संपादन की तारीख (Edit Date)",
                    "file": " फ़ाइल का नाम संपादित करें (Edit File Name)",
                    "url": "लिंक संपादित करें (Edit Link)"
                },
                "ta_label": {
                    "header": "செய்திக் கடிதத்தைத் திருத்தவும் (Edit News Letter)",
                    "preview": "செய்திக் கடிதத்தின் முன்னோட்டம் (Preview News Letter)",
                    "title": "தலைப்பைத் திருத்து (Edit Title)",
                    "date": "தேதியைத் திருத்தவும்(Edit Date)",
                    "file": "கோப்பு பெயரைத் திருத்தவும்(Edit File Name)",
                    "url": "இணைப்பைத் திருத்தவும் (Edit Link)"
                }

            }

            if (editbtnlang == 'en') {

                $('#editModalHeader').text(editLabel.en_label.header);
                $('#previewModalHeader').text(editLabel.en_label.preview);
                $('.editrtiname').text(editLabel.en_label.name);
                $('.editrtides').text(editLabel.en_label.designation);
                $('.editrtiaddress').text(editLabel.en_label.address);
                $('.editrtiphone').text(editLabel.en_label.phone);
                $('.editrtiemail').text(editLabel.en_label.email);
                $('.editrtirole').text(editLabel.en_label.role);
                $('.addDate').text(editLabel.en_label.date);
                // append the data

                // editname = $('#tblenname4').text();

                editname = $('#tblenname' + id + '').text();
                // console.log(id);
                // return false;
                editdes = $('#tblendes' + id + '').text();
                editrole = $('#tblenrole' + id + '').text();
                editaddress = $('#tblenaddress' + id + '').text();
                editphone = $('#tblenphone' + id + '').text();
                editemail = $('#tblenemail' + id + '').text();
                // editDate = $('#tblEnDate' + id + '').text();
                // tblFileName = $('#tblEnFileName' + id + '').text();
                // tblLink = $('#tblEnLink' + id + '').text();
                // tblFileName = $('#tblEnFileName' + id + '').text();
                // tblLink = $('#tblEnLink' + id + '').text();

            } else if (editbtnlang == 'hi') {
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


            // return false;
            // edit Modal popup
            $('#editId').text(id);
            // $('#StatusType').text(datatype);
            $('#editname').val(editname);
            $('#editrole').val(editrole);
            $('#editdes').val(editdes);
            $('#editaddress').val(editaddress);
            $('#editphone').val(editphone);
            $('#editemail').val(editemail);
            // $('#editTxtDate').val(editDate);
            // $('#editTxtlink').val(tblLink);

            // // Preview Modal popup
            // $('#previewId').text(id);
            // $('#prevTitle').text(editTitle);
            // $('#prevFileName').text(tblFileName);
            // $('#prevDate').text(editDate);
        }

        // function showFile() {
        //     $('#fileDiv').show();
        //     $('#linkDiv').hide();
        //     $("#linkCheck").prop('checked', false);
        //     $('#add_link').removeAttr('required');
        //     $('#ad_file').attr('required', 'required');

        //     var checked = $("input[type=checkbox]:checked").length;
        //     if (checked == 0) {
        //         $("#fileCheck").prop('checked', true);
        //     }

        // }

        // function showLink() {
        //     $('#linkDiv').show();
        //     $('#fileDiv').hide();
        //     $("#fileCheck").prop('checked', false);
        //     $('#ad_file').removeAttr('required');
        //     $('#add_link').attr('required', 'required');
        //     var checked = $("input[type=checkbox]:checked").length;
        //     if (checked == 0) {
        //         $("#linkCheck").prop('checked', true);
        //     }

        //     exactSize = 0;
        //     ad_files = "";
        // }

        function add_rticontacts(value) {

            console.log(value);

            // return false;
            if ($('#demo-form').parsley().validate() != true) {
                return false;

            } else {
                var rtiname, rtidesignation, rtirole, rtiaddress, rtiphone, rtiemail, lang;
                rtiname = $('#txtrtiname').val();
                rtidesignation = $('#txtrtides').val();
                rtirole = $('#txtrtirole').val();
                rtiaddress = $('#txtrtiaddress').val();
                rtiphone = $('#txtrtiphone').val();
                lang = $('#subLang').val();
                // rtiemail = $('#txtrtiemail').tagsinput('items').split(',');
                // console.log(rtiemail);
                // return false;
                rtiemail = $('#txtrtiemail').val();
                data = {
                    'rtiname': rtiname,
                    'rtidesignation': rtidesignation,
                    'rtirole': rtirole,
                    'rtiaddress': rtiaddress,
                    'rtiphone': rtiphone,
                    'rtiemail': rtiemail,
                    'operation': 'save',
                    'lang': lang
                    // 'rtiname':rtiname,
                }
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    // cache: false,
                    // contentType: false,
                    // processData: false,
                    url: "webservice/add_rticontacts.php",
                    data: data,
                    beforeSend: function() {
                        $('#subLang').attr("disabled", "disabled");
                        // $('.wrapper').css("opacity", ".5");
                    },
                    success: function(data) {
                        console.log(data);
                        // return false;
                        if (data.status == 'ok') {

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
                        $('#subLang').removeAttr('disabled');
                    },

                });
            }

        }

        // console.log();



        function getrecords() {

        }

        function editFunction() {
            var editlang = $('#getlanguage').text();

            if ($('#edit-demo-form').parsley().validate() != true) {
                return false;

            } else {
                var modalId, modalname, modalrole, modaldes, modalphone, modaladdress, modalemail;
                modalId = $('#editId').text();
                // $('#editId').text(id);

                modalname = $('#editname').val();
                modalrole = $('#editrole').val();
                modaldes = $('#editdes').val();
                modaladdress = $('#editaddress').val();
                modalphone = $('#editphone').val();
                modalemail = $('#editemail').val();
                // modalLink = $('#editTxtlink').val();
                // $('#StatusType').text(datatype);
                // $('#editname').val(editname);
                // $('#editrole').val(editrole);
                // $('#editdes').val(editdes);
                // $('#editaddress').val(editaddress);
                // $('#editphone').val(editphone);
                // $('#editemail').val(editemail);

                data = {
                    'id': parseInt(modalId),
                    'rtiname': modalname,
                    'rtidesignation': modaldes,
                    'rtirole': modalrole,
                    'rtiaddress': modaladdress,
                    'rtiphone': modalphone,
                    'rtiemail': modalemail,
                    'operation': 'edit',
                    'lang': editlang
                }

                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    // what to expect back from the PHP script, if anything
                    // cache: false,
                    // contentType: false,
                    // processData: false,
                    url: "webservice/add_rticontacts.php",
                    data: data,


                    success: function(data) {

                        if (data.status == 'ok') {

                            //Success Message
                            //  $('#sa-success').on('click', function() {
                            swal("", "Updated Succesfully", "success")
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


        // function statusChange(id, status) {

        //     language = $('#getLang').text();
        //     //  console.log(language);
        //     //   return false;
        //     swal({
        //             title: "Are you sure?",
        //             text: "You will not be able to recover this imaginary file!",
        //             type: "warning",
        //             showCancelButton: true,
        //             confirmButtonColor: "#DD6B55",
        //             confirmButtonText: "Yes, " + status + " it!",
        //             cancelButtonText: "No, cancel!",
        //             closeOnConfirm: false,
        //             closeOnCancel: false
        //         },
        //         function(isConfirm) {
        //             if (isConfirm) {
        //                 $.ajax({
        //                     url: "webservice/statusChange.php",
        //                     type: "POST",
        //                     data: {
        //                         status: status,
        //                         id: id,
        //                         lang: language,
        //                         pagename: 'newsletter'
        //                     },
        //                     // dataType: "html",
        //                     success: function(data) {
        //                         console.log(data);
        //                         if (data = 'success') {
        //                             $('#tblStatus' + id + '').append(status);
        //                             swal("Done!", "It was succesfully " + status + "!", "success");

        //                             statusAppend();
        //                         } else {
        //                             swal("Error :" + status + "!", "Please try again", "error");

        //                         }
        //                     },
        //                     error: function(xhr, ajaxOptions, thrownError) {
        //                         swal("Error :" + status + "!", "Please try again", "error");
        //                     }


        //                 });
        //             } else {
        //                 swal("Cancelled", "Your imaginary file is safe :)", "error");
        //             }
        //         }
        //     );
        //     // swal({
        //     //     title: "Are you sure?",
        //     //     text: "You will not be able to recover this imaginary file!",
        //     //     type: "warning",
        //     //     showCancelButton: true,
        //     //     confirmButtonText: "Yes, " + status + " it!",
        //     //     cancelButtonText: "No, cancel!",

        //     // }).then((result) => {
        //     //     /* Read more about isConfirmed, isDenied below */
        //     //     console.log(result);
        //     //     return false;
        //     //     if (result.isConfirmed) {
        //     //         $.ajax({
        //     //             url: "webservice/statusChange.php",
        //     //             type: "POST",
        //     //             data: {
        //     //                 status: status,
        //     //                 id: id,
        //     //                 lang: language
        //     //             },
        //     //             // dataType: "html",
        //     //             success: function(data) {
        //     //                 console.log(data);
        //     //                 if (data = 'success') {
        //     //                     $('#tblStatus' + id + '').append(status);
        //     //                     swal("Done!", "It was succesfully " + status + "!", "success");

        //     //                     statusAppend();
        //     //                 } else {
        //     //                     swal("Error :" + status + "!", "Please try again", "error");

        //     //                 }
        //     //             },
        //     //             error: function(xhr, ajaxOptions, thrownError) {
        //     //                 swal("Error :" + status + "!", "Please try again", "error");
        //     //             }


        //     //         });
        //     //     } else if (result.isDenied) {
        //     //         Swal.fire('Changes are not saved', '', 'info')
        //     //     }



        //     //     // if (isConfirm) {

        //     //     //     swal("Deleted!", "Your imaginary file has been deleted.", "success");
        //     //     // } else {
        //     //     //     swal("Cancelled", "Your imaginary file is safe :)", "error");
        //     //     // }
        //     // });


        // }

        // function statusAppend() {
        //     var tabLang = $('#getLang').text();

        //     var statusChange = <?php echo json_encode($statuslang); ?>;
        //     //  console.log(statusChange);
        //     var statusJson = {
        //         "N": 'Draft',
        //         "A": 'Archive',
        //         "H": "Hide",
        //         "D": "Delete",
        //         "L": "Published"
        //     }
        //     var arraylength, checkStatus, i;


        //     if (tabLang == 'en') {
        //         arraylength = statusChange.en.length;
        //         // console.log(arraylength);
        //         for (i = 0; i < arraylength; i++) {

        //             if (statusChange.en[i].status == 'A') {

        //                 $('#tblEnStatus' + statusChange.en[i].id + '').text(statusJson.A).css({
        //                     // "background-color": "#800080",
        //                     "font-size": "125%",
        //                     "color": "#800080"
        //                 });
        //                 // css("color", "#800080");

        //                 $('#sltEnStatus' + statusChange.en[i].id + '').val(statusJson.A);

        //                 // $('#tblStatus' + statusChange.en[i].id + '').append(statusJson.A);
        //                 // $('#tblStatus' + statusChange.en[i].id + '').css("color", "blue");
        //             } else if (statusChange.en[i].status == 'H') {
        //                 $('#tblEnStatus' + statusChange.en[i].id + '').text(statusJson.H).css({
        //                     // "background-color": "#00008B",
        //                     "font-size": "125%",
        //                     "color": "#00008B"
        //                 });
        //                 // ("color", "#00008B");
        //                 $('#sltEnStatus' + statusChange.en[i].id + '').val(statusJson.H);
        //                 // $('#tblStatus')
        //             } else if (statusChange.en[i].status == 'D') {
        //                 $('#tblEnStatus' + statusChange.en[i].id + '').text(statusJson.D).css({
        //                     // "background-color": "#FF0000",
        //                     "font-size": "125%",
        //                     "color": "#FF0000"
        //                 });
        //                 // ("color", "#FF0000");
        //                 $('#sltEnStatus' + statusChange.en[i].id + '').val(statusJson.D);
        //                 // $('#tblStatus')
        //             } else if (statusChange.en[i].status == 'N') {
        //                 $('#tblEnStatus' + statusChange.en[i].id + '').text(statusJson.N).css({
        //                     // "background-color": "#FF0000",
        //                     "font-size": "125%",
        //                     "color": "#F535AA"
        //                 });
        //                 // ("color", "#FF0000");
        //                 $('#sltEnStatus' + statusChange.en[i].id + '').val(statusJson.N);
        //                 // $('#tblStatus')
        //             } else {
        //                 $('#tblEnStatus' + statusChange.en[i].id + '').text(statusJson.L).css({
        //                     // "background-color": "#008000",
        //                     "font-size": "125%",
        //                     "color": "#008000"
        //                 });
        //                 // css("color", "#008000");
        //                 // alert();
        //                 $('#tblEnStatus' + statusChange.en[i].id + '').val(statusJson.L).trigger("change");

        //                 var change = $('#tblEnStatus' + statusChange.en[i].id + '').text();

        //                 $('#sltEnStatus31' + statusChange.en[i].id + '').val(change).trigger("change");
        //                 //                       var select =   $('#sltEnStatus31').val();
        //                 // console.log(select);
        //                 //                         // $('#sltEnStatus31 option:selected').select2("value", "Published");
        //                 //                         // Change the value or make some change to the internal state
        //                 //                         $('#sltEnStatus31').trigger('change.select2');
        //                 //                         // $('.select2').trigger('change');
        //                 // $('#tblStatus')

        //                 // console.log($("#sltEnStatus31").val(change));
        //                 // $("#sltEnStatus31 option:selected").val("Published").trigger("change");
        //             }
        //         }

        //     } else if (tabLang == 'hi') {

        //         arraylength = statusChange.hi.length;
        //         for (i = 0; i < arraylength; i++) {
        //             //    console.log(statusChange.hi[i].status,statusChange.hi[i].id,statusJson.A);
        //             if (statusChange.hi[i].status == 'A') {
        //                 console.log(statusChange.hi[i].status);
        //                 $('#tblHiStatus' + statusChange.hi[i].id + '').text(statusJson.A).css({
        //                     // "background-color": "#800080",
        //                     "font-size": "125%",
        //                     "color": "#800080"
        //                 });
        //                 // css("color", "#800080");

        //                 console.log(statusChange.hi[i].id);

        //                 //  $('#sltHiStatus' + statusChange.hi[i].id + '').val(statusJson.A);
        //                 $('#sltHiStatus' + statusChange.hi[i].id + '').val(statusJson.A);
        //                 // $('#tblStatus' + statusChange.en[i].id + '').append(statusJson.A);
        //                 // $('#tblStatus' + statusChange.en[i].id + '').css("color", "blue");
        //             } else if (statusChange.hi[i].status == 'H') {
        //                 $('#tblHiStatus' + statusChange.hi[i].id + '').text(statusJson.H).css({
        //                     // "background-color": "#00008B",
        //                     "font-size": "125%",
        //                     "color": "#00008B"
        //                 });
        //                 // ("color", "#00008B");
        //                 $('#sltHiStatus' + statusChange.hi[i].id + '').val(statusJson.H);
        //                 // $('#tblStatus')
        //             } else if (statusChange.hi[i].status == 'D') {
        //                 $('#tblHiStatus' + statusChange.hi[i].id + '').text(statusJson.D).css({
        //                     // "background-color": "#FF0000",
        //                     "font-size": "125%",
        //                     "color": "#FF0000"
        //                 });
        //                 // ("color", "#FF0000");
        //                 $('#sltHiStatus' + statusChange.hi[i].id + '').val(statusJson.D);
        //                 // $('#tblStatus')
        //             } else if (statusChange.hi[i].status == 'N') {

        //                 $('#tblHiStatus' + statusChange.hi[i].id + '').text(statusJson.N).css({
        //                     // "background-color": "#FF0000",
        //                     "font-size": "125%",
        //                     "color": "#F535AA"
        //                 });
        //                 // ("color", "#FF0000");
        //                 $('#sltHiStatus' + statusChange.hi[i].id + '').val(statusJson.N);
        //                 // $('#tblStatus')
        //             } else {
        //                 $('#tblHiStatus' + statusChange.hi[i].id + '').text(statusJson.L).css({
        //                     // "background-color": "#008000",
        //                     "font-size": "125%",
        //                     "color": "#008000"
        //                 });
        //                 // css("color", "#008000");
        //                 $('#sltHiStatus' + statusChange.hi[i].id + '').val(statusJson.L);
        //                 // $('#tblStatus')
        //             }
        //         }
        //     } else {
        //         arraylength = statusChange.ta.length;
        //         for (i = 0; i < arraylength; i++) {

        //             if (statusChange.ta[i].status == 'A') {

        //                 $('#tblTaStatus' + statusChange.ta[i].id + '').text(statusJson.A).css({
        //                     // "background-color": "#800080",
        //                     "font-size": "125%",
        //                     "color": "#800080"
        //                 });
        //                 // css("color", "#800080");
        //                 $('#sltTaStatus' + statusChange.ta[i].id + '').val(statusJson.A);

        //                 // $('#tblStatus' + statusChange.en[i].id + '').append(statusJson.A);
        //                 // $('#tblStatus' + statusChange.en[i].id + '').css("color", "blue");
        //             } else if (statusChange.ta[i].status == 'H') {
        //                 $('#tblTaStatus' + statusChange.ta[i].id + '').text(statusJson.H).css({
        //                     // "background-color": "#00008B",
        //                     "font-size": "125%",
        //                     "color": "#00008B"
        //                 });
        //                 // ("color", "#00008B");
        //                 $('#sltTaStatus' + statusChange.ta[i].id + '').val(statusJson.H);
        //                 // $('#tblStatus')
        //             } else if (statusChange.ta[i].status == 'D') {
        //                 $('#tblTaStatus' + statusChange.ta[i].id + '').text(statusJson.D).css({
        //                     // "background-color": "#FF0000",
        //                     "font-size": "125%",
        //                     "color": "#FF0000"
        //                 });
        //                 // ("color", "#FF0000");
        //                 $('#sltTaStatus' + statusChange.ta[i].id + '').val(statusJson.D);
        //                 // $('#tblStatus')
        //             } else if (statusChange.ta[i].status == 'N') {
        //                 $('#tblTaStatus' + statusChange.ta[i].id + '').text(statusJson.N).css({
        //                     // "background-color": "#FF0000",
        //                     "font-size": "125%",
        //                     "color": "#F535AA"
        //                 });
        //                 // ("color", "#FF0000");
        //                 $('#sltTaStatus' + statusChange.ta[i].id + '').val(statusJson.N);
        //                 // $('#tblStatus')
        //             } else {
        //                 $('#tblTaStatus' + statusChange.ta[i].id + '').text(statusJson.L).css({
        //                     // "background-color": "#008000",
        //                     "font-size": "125%",
        //                     "color": "#008000"
        //                 });
        //                 // css("color", "#008000");
        //                 $('#sltTaStatus' + statusChange.ta[i].id + '').val(statusJson.L);
        //                 // $('#tblStatus')
        //             }
        //         }
        //     }


        //     // return false;


        //     $(".select2").select2();

        //     // $('#tbl-en-published').DataTable().ajax.reload();
        //     // $('#tbl-en-published').DataTable().ajax.reload(null, false);
        // }

        // function archiveBtn(archiveId) {

        //     editBtn(archiveId);
        //     archiveId = $('#previewId').text();

        //     swal({
        //         title: "Are you sure?",
        //         text: "You will not be able to recover this imaginary file!",
        //         type: "warning",
        //         showCancelButton: true,
        //         confirmButtonText: "Yes, Archive it!",
        //         cancelButtonText: "No, cancel plx!",
        //     }).then(function(isConfirm) {
        //         $.ajax({
        //             url: "webservice/archiveAnnounce.php",
        //             type: "POST",
        //             data: {
        //                 id: archiveId
        //             },
        //             // dataType: "html",
        //             success: function(data) {
        //                 console.log(data);
        //                 swal("Done!", "It was succesfully Archived!", "success");
        //             },
        //             error: function(xhr, ajaxOptions, thrownError) {
        //                 swal("Error :Archive!", "Please try again", "error");
        //             }
        //         });

        //         // if (isConfirm) {

        //         //     swal("Deleted!", "Your imaginary file has been deleted.", "success");
        //         // } else {
        //         //     swal("Cancelled", "Your imaginary file is safe :)", "error");
        //         // }
        //     });

        // }

        // function deleteBtn(id) {

        //     swal({
        //         title: "Are you sure?",
        //         text: "You will not be able to recover this imaginary file!",
        //         type: "warning",
        //         showCancelButton: true,
        //         confirmButtonText: "Yes, delete it!",
        //         cancelButtonText: "No, cancel plx!",
        //     }).then(function(isConfirm) {
        //         $.ajax({
        //             url: "webservice/deleteAnnounce.php",
        //             type: "POST",
        //             data: {
        //                 id: id
        //             },
        //             // dataType: "html",
        //             success: function(data) {
        //                 console.log(data);
        //                 swal("Done!", "It was succesfully deleted!", "success");
        //             },
        //             error: function(xhr, ajaxOptions, thrownError) {
        //                 swal("Error deleting!", "Please try again", "error");
        //             }
        //         });

        //         // if (isConfirm) {

        //         //     swal("Deleted!", "Your imaginary file has been deleted.", "success");
        //         // } else {
        //         //     swal("Cancelled", "Your imaginary file is safe :)", "error");
        //         // }
        //     });

        // }

        $('#addModal').on('hidden.bs.modal', function() {
            $(this).find('form').trigger('reset');
        })
    </script>
</body>

</html>