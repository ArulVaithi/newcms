<?php include 'include/session.php';
include("include/db_connection.php");

$masid = $_REQUEST['link'];

// print_r($_REQUEST['link']);
$decodevalue = base64_decode($masid);
$coloumn1 = "select *  from mst_recruitment where rec_id=$decodevalue";

$result_coloumn1 = pg_query($db, $coloumn1);

$coloumn2 = "select *  from mst_recruitment where rec_id=$decodevalue";

$result_coloumn2 = pg_query($db, $coloumn2);

$coloumn3 = "select *  from mst_recruitment where rec_id=$decodevalue";

$result_coloumn3 = pg_query($db, $coloumn3);

$coloumn4 = "select *  from mst_recruitment where rec_id=$decodevalue";

$result_coloumn4 = pg_query($db, $coloumn4);

$importantdates = "select *  from mst_recruitment where rec_id=$decodevalue";

$result_importantdates = pg_query($db, $importantdates);
// $resultdirector_en_count = pg_num_rows($resultdir_en);
$rowdates = pg_fetch_array(
    $result_importantdates
);

// $row1 = pg_fetch_array(
//     $resultdir_en
// );

// $dir_hi_query = "select  *  from niot_whoswho_hi where designation='niot_director' and contents <> '' limit 1";

// $resultdir_hi = pg_query($db, $dir_hi_query);
// $resultdirector_hi_count = pg_num_rows($resultdir_hi);



// $dir_ta_query = "select  *  from niot_whoswho_ta where designation='niot_director' and contents <> '' limit 1";

// $resultdir_ta = pg_query($db, $dir_ta_query);
// $resultdirector_ta_count = pg_num_rows($resultdir_ta);


// $row3 = pg_fetch_array(
//     $resultdir_ta
// );

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>NIOT - Recruitment</title>

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
        <div class="content-wrapper">
            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <!-- <h4>Who's Who</h4> -->
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="niot_recruitments.php">Recruitments</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Recruitment Edit</a>
                                </li>
                                <!-- <li class="breadcrumb-item"><a href="#!">Mission Statement </a>
                                </li> -->
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center" style="border-radius:0px;padding-bottom:0px;background-color:#d3d3d3;">
                        <h3 style="color:#111">Recruitment Edit</h3>
                    </div>
                    <div class="col-lg-12" style="padding-top:30px;">
                        <div class="data-table-list-En-draft">
                            <h2 class="text-center">Advertisment Title</h2>
                            <div class="table-responsive">
                                <table class="tbl-en-draft" class="table table-borderd ">
                                    <thead id="thead" style="color:#fff;background:#40c4ff" class="text-center">
                                        <tr>
                                            <!-- <th><input type="checkbox" class="" id='checkallusers' onclick="checkAll(id);"> All
                                                                            </th> -->
                                            <th class="text-center" style="width:20%">Advertisement Title</th>
                                            <th class="text-center" style="width:20%">Download Advertisment</th>
                                            <th class="text-center" style="width:20%">Application Form</th>

                                            <th class="text-center" style="width:20%"> Important Dates</th>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <!-- <td>1</td> -->
                                            <td>
                                                <?php
                                                $i = 0;
                                                $file;
                                                while (
                                                    $row = pg_fetch_array(
                                                        $result_coloumn1
                                                    )
                                                ) { ?>
                                                    <div style="border-bottom:1px solid #bebebe;padding-top:5px;">
                                                        <div class="" style="margin-bottom: 40px;"> <?php echo $row['title'] ?>
                                                            <div class="pull-right" style="padding-top:3px;">
                                                                <button type="button" rel="tooltip" data-toggle="modal" data-target="#editModal" data-placement="top" title="Edit Here" class="btn btn-success btnrec waves-effect waves-light" onclick="editModal('1');">
                                                                    <i class="fa fa-pencil"></i>
                                                                </button> &nbsp;&nbsp; <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btnrec waves-effect waves-light" onclick="deletebtn()">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <!-- <div style="border-bottom:1px solid #bebebe;padding-top:5px;">
                                                    <div class="" style="margin-bottom: 40px;"> Advertisement Title Advertisement Title Advertisement Title Advertisement TitleAdvertisement TitleAdvertisement Title

                                                        <div class="pull-right" style="padding-top:3px;">
                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#addModal" data-placement="top" title="Edit Here" class="btn btn-success btnrec waves-effect waves-light">
                                                                <i class="fa fa-pencil"></i>
                                                            </button> &nbsp;&nbsp; <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btnrec waves-effect waves-light">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <br><br>
                                                <div class="pull-right">
                                                    <button class="btn btn-success notika-btn-success " type="button" title="Preview Here" data-toggle="modal" data-target="#addModal" onclick="addnew('1');"><i class="fa fa-plus"></i> Add New</button>
                                                </div>
                                            </td>
                                            <td>
                                                <?php
                                                $i = 0;
                                                $file;
                                                while (
                                                    $row2 = pg_fetch_array(
                                                        $result_coloumn2
                                                    )
                                                ) { ?>
                                                    <div style="border-bottom:1px solid #bebebe;padding-top:5px;">
                                                        <div class="" style="margin-bottom: 40px;"> <?php echo $row2['downloadtitle'] ?>
                                                            <div class="pull-right" style="padding-top:3px;">
                                                                <button type="button" rel="tooltip" data-toggle="modal" data-target="#addModal" data-placement="top" title="Edit Here" class="btn btn-success btnrec waves-effect waves-light">
                                                                    <i class="fa fa-pencil"></i>
                                                                </button> &nbsp;&nbsp; <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btnrec waves-effect waves-light">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <!-- <div style="border-bottom:1px solid #bebebe;padding-top:5px;">
                                                    <div class="" style="margin-bottom: 40px;"> Advertisement Title Advertisement Title Advertisement Title Advertisement TitleAdvertisement TitleAdvertisement Title

                                                        <div class="pull-right" style="padding-top:3px;">
                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#addModal" data-placement="top" title="Edit Here" class="btn btn-success btnrec waves-effect waves-light">
                                                                <i class="fa fa-pencil"></i>
                                                            </button> &nbsp;&nbsp; <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btnrec waves-effect waves-light">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <br><br>
                                                <div class="pull-right">
                                                    <button class="btn btn-success notika-btn-success " title="Preview Here" data-toggle="modal" data-target="#addModal" onclick="addnew('2');"><i class="fa fa-plus"></i> Add New</button>
                                                </div>
                                            </td>
                                            <td>
                                                <?php
                                                $i = 0;
                                                $file;
                                                while (
                                                    $row3 = pg_fetch_array(
                                                        $result_coloumn3
                                                    )
                                                ) { ?>
                                                    <div style="border-bottom:1px solid #bebebe;padding-top:5px;">
                                                        <div class="" style="margin-bottom: 40px;"> <?php echo $row3['apptitle'] ?>
                                                            <div class="pull-right" style="padding-top:3px;">
                                                                <button type="button" rel="tooltip" data-toggle="modal" data-target="#addModal" data-placement="top" title="Edit Here" class="btn btn-success btnrec waves-effect waves-light">
                                                                    <i class="fa fa-pencil"></i>
                                                                </button> &nbsp;&nbsp; <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btnrec waves-effect waves-light">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <br><br>
                                                <div class="pull-right">
                                                    <button class="btn btn-success notika-btn-success " title="Preview Here" data-toggle="modal" data-target="#addModal" onclick="addnew('3');"><i class="fa fa-plus"></i> Add New</button>
                                                </div>
                                            </td>
                                            <td>
                                                <?php ?>
                                                <div style="border-bottom:1px solid #bebebe;padding-top:5px;">
                                                    <div class="" style="margin-bottom: 40px;">
                                                        Last Date Online Applications Date: <b><?php echo $rowdates['onlinedate_on'] ?></b>
                                                        <div class="pull-right" style="padding-top:3px;">
                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#addModal" data-placement="top" title="Edit Here" class="btn btn-success btnrec waves-effect waves-light">
                                                                <i class="fa fa-pencil"></i>
                                                            </button> &nbsp;&nbsp; <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btnrec waves-effect waves-light">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </div><br><br>
                                                        Last Date for Receipt: <b><?php echo $rowdates['receiptdate_on'] ?></b>
                                                        <div class="pull-right" style="padding-top:3px;">
                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#addModal" data-placement="top" title="Edit Here" class="btn btn-success btnrec waves-effect waves-light">
                                                                <i class="fa fa-pencil"></i>
                                                            </button> &nbsp;&nbsp; <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btnrec waves-effect waves-light">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </div><br><br>
                                                        Last Date for Hard Copy: <b><?php echo $rowdates['hardcopyon'] ?></b>
                                                        <div class="pull-right" style="padding-top:3px;">
                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#addModal" data-placement="top" title="Edit Here" class="btn btn-success btnrec waves-effect waves-light">
                                                                <i class="fa fa-pencil"></i>
                                                            </button> &nbsp;&nbsp; <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btnrec waves-effect waves-light">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                $i = 0;
                                                $file;
                                                while (
                                                    $row4 = pg_fetch_array(
                                                        $result_coloumn4
                                                    )
                                                ) {
                                                    
                                                ?>
                                                <div style="border-bottom:1px solid #bebebe;padding-top:5px;">
                                                    <div class="" style="margin-bottom: 40px;"> <?php echo $row4['impdate_title'] ?>
                                                        <div class="pull-right" style="padding-top:3px;">
                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#addModal" data-placement="top" title="Edit Here" class="btn btn-success btnrec waves-effect waves-light">
                                                                <i class="fa fa-pencil"></i>
                                                            </button> &nbsp;&nbsp; <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btnrec waves-effect waves-light">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
<?php } ?>
                                                <br><br>
                                                <div class="pull-right">
                                                    <button class="btn btn-success notika-btn-success " title="Preview Here" data-toggle="modal" data-target="#addModal" onclick="addnew('4');"><i class="fa fa-plus"></i> Add New</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- <?php
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
                                                ?> -->

                                        <!-- <tr>

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
                                                                                    </tr> -->
                                        <!-- <?php } ?> -->

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid ends -->
    </div>

    <!-- Container-fluid ends -->
    </div>


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
                            <h2 class="text-center" id="modalheader">
                            </h2>
                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="modal-body" style="padding-top:10px;">
                    <form id="demo-form" data-parsley-valida te="">
                        <div class="form-group">
                            <label for="title">Title<span class="mandatory"> *</span></label>
                            <input type="text" class="form-control" id="txtrtiname" name="title" placeholder="Enter Title" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
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
                        <div class="row">
                            <div class="col-lg-12" id="fileDiv">
                                <div class="form-group">
                                    <label for="email1">File <span class="mandatory"> *</span></label>
                                    <input type="file" class="form-control input-sm" id="editad_file" accept="application/pdf" name="file" data-parsley-trigger="change">
                                </div>
                            </div>

                            <div class="col-lg-12" id="linkDiv">
                                <div class="form-group">
                                    <label for="email1">Link<span class="mandatory"> *</span></label>
                                    <input type="text" class="form-control input-sm" id="editTxtlink" name="url" placeholder="Enter Link" data-parsley-type="url" data-parsley-trigger="change">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="color-tags">
                            <input class="form-control" type="email"  data-role="tagsinput" >
                        </div> -->

                    </form>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-success" onclick="add_rticontacts(this.value);" id="subLang">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal animated fade modal-popout-bg" id="editModal" role="dialog" data-keyboard="true" data-backdrop="static">
        <div class="modal-dialog modals-default">
            <div class="modal-content">
                <div class="modal-header" style=" border-bottom: 1px solid #e8e8e8;">
                    <div class="col-lg-12" style="padding-bottom:10px;">
                        <div class="col-lg-2">
                            <!-- <a href="#" > -->
                            <img src="assets/images/niotHeader.png" alt="Niot Logo" class="pull-right">
                        </div>
                        <div class="col-lg-9" style="padding-top:10px;">
                            <h2 class="text-center" id="editmodalheader">
                            </h2>
                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="modal-body" style="padding-top:10px;">
                    <form id="demo-form" data-parsley-valida te="">
                        <div class="form-group">
                            <label for="title">Title<span class="mandatory"> *</span></label>
                            <input type="text" class="form-control" id="txtrtiname" name="title" placeholder="Enter Title" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>

                        <div class="form-group">
                            <label>File : <span> File upload.pdf </span></label>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-4" style="padding-top:10px;">
                                <label>Document Type<span class="mandatory">*</span> </label>
                            </div>
                            <div class="col-lg-3">
                                <div class="fm-checkbox form-group">
                                    <label> File <input type="checkbox" class="" id="editfileCheck" onclick="editshowFile();" name="checkbox" required="" data-parsley-trigger="change" data-parsley-group="block1" data-parsley-mincheck="1" /> <i></i> </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="fm-checkbox form-group">
                                    <label>Link <input type="checkbox" class="" id="editlinkCheck" name="checkbox" onchange="editshowLink();" /> <i></i> </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" id="editfileDiv">
                                <div class="form-group">
                                    <label for="email1">File <span class="mandatory"> *</span></label>
                                    <input type="file" class="form-control input-sm" id="editad_file" accept="application/pdf" name="file" data-parsley-trigger="change">
                                </div>
                            </div>

                            <div class="col-lg-12" id="editlinkDiv">
                                <div class="form-group">
                                    <label for="email1">Link<span class="mandatory"> *</span></label>
                                    <input type="text" class="form-control input-sm" id="editTxtlink" name="url" placeholder="Enter Link" data-parsley-type="url" data-parsley-trigger="change">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="color-tags">
                            <input class="form-control" type="email"  data-role="tagsinput" >
                        </div> -->

                    </form>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-success" onclick="add_rticontacts(this.value);" id="subLang">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Modal popup End-->

    <?php include("include/source_js.php") ?>

    <script>
        $(document).ready(function() {
            $('#fileDiv').hide();
            $('#linkDiv').hide();
            $('#editfileDiv').hide();
            $('#editlinkDiv').hide();
            $('.tbl-en-draft').DataTable({
                // scrollY: "330px",
                // scrollX: true,
                // scrollCollapse: true,
                // scrollY: 360,
                paging: false,
                searching: false,
                "info": false,
                // drawCallback: function() {
                //     $('.select2').select2();
                // }
            });
        });
        $('[rel="tooltip"]').tooltip('manual');
        if (!$('#addModal').is(':visible')) {
            $('[rel="tooltip"]').tooltip('hide');
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


        function editshowFile() {
            $('#editfileDiv').show();
            $('#editlinkDiv').hide();
            $("#editlinkCheck").prop('checked', false);
            $('#add_link').removeAttr('required');
            $('#ad_file').attr('required', 'required');

            var checked = $("input[type=checkbox]:checked").length;
            if (checked == 0) {
                $("#editfileCheck").prop('checked', true);
            }

        }

        function editshowLink() {
            $('#editlinkDiv').show();
            $('#editfileDiv').hide();
            $("#editfileCheck").prop('checked', false);
            $('#ad_file').removeAttr('required');
            $('#add_link').attr('required', 'required');
            var checked = $("input[type=checkbox]:checked").length;
            if (checked == 0) {
                $("#editlinkCheck").prop('checked', true);
            }

            exactSize = 0;
            ad_files = "";
        }

        function addnew(coloumn) {
            if (coloumn == '1') {
                $('#modalheader').text('Add New Advertisment Title');
            } else if (coloumn == '2') {
                $('#modalheader').text('Add New Download Advertisment');
            } else if (coloumn == '3') {
                $('#modalheader').text('Add New Application Form');
            } else if (coloumn == '4') {
                $('#modalheader').text('Add New Importants Dates');
            }
        }

        function editModal(coloumn) {
            if (coloumn == '1') {
                $('#editmodalheader').text('Edit Advertisment Title');
            } else if (coloumn == '2') {
                $('#editmodalheader').text('Edit Download Advertisment');
            } else if (coloumn == '3') {
                $('#editmodalheader').text('Edit Application Form');
            } else if (coloumn == '4') {
                $('#editmodalheader').text('Edit Importants Dates');
            }
        }

        function savedata(type, lang) {
            var value, checkrowcount;
            console.log(type);
            value = tinyMCE.get('save' + type + '').getContent().replace(/'/g, "");
            // value = tinyMCE.get('savevision_hi').getContent().replace(/'/g, "");
            // checkrowcount = vision_encount;
            // if (type == 'vision_en') {
            //     checkrowcount = vision_encount;
            //     //   value = tinyMCE.get('savevision_en').getContent().replace(/'/g, "");
            // } else if (type == 'vision_hi') {
            //     checkrowcount = vision_hicount;
            //     //value = tinyMCE.get('savevision_hi').getContent().replace(/'/g, "");
            // } else {
            //     checkrowcount = vision_tacount;
            //     // value = tinyMCE.get('savevision_ta').getContent().replace(/'/g, "");
            // }

            data = {
                value: value,
                type: 'niot_director',
                lang: lang,
                operation: 'save',
                // checkrowcount: checkrowcount
            }


            $.ajax({
                type: 'POST',
                // contentType: "application/json",
                // dataType: "json",
                url: 'webservice/whos_whosave.php',
                data: data,
                success: function(response, textStatus, xhr) {

                    console.log(response);

                    swal({
                        title: "",
                        text: "Successfully Saved!",
                        type: "success",
                        buttons: [
                            'NO',
                            'YES'
                        ],
                    }).then(function(isConfirm) {
                        if (isConfirm) {
                            location.reload();
                        } else {
                            //if no clicked => do something else
                        }
                    });
                },
                complete: function(xhr) {

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    var response = XMLHttpRequest;
                    swal("Error :Archive!", "Please try again", "error");

                }
            });
        }

        function deletebtn() {
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Yes, delete it!',
                    closeOnConfirm: false,
                    //closeOnCancel: false
                },
                function() {
                    swal("Deleted!", "Your imaginary file has been deleted!", "success");
                });
            // swal({
            //     title: 'Are you sure?',
            //     text: "You won't be able to revert this!",
            //     type: 'warning',
            //     showCancelButton: true,
            //     confirmButtonColor: '#3085d6',
            //     cancelButtonColor: '#d33',
            //     confirmButtonText: 'Yes, delete it!',
            //     cancelButtonText: 'No, cancel!',
            //     confirmButtonClass: 'btn btn-success',
            //     cancelButtonClass: 'btn btn-danger',
            //     buttonsStyling: false,
            //     closeOnConfirm: false,
            //     closeOnCancel: false
            // }).then(function(isConfirm) {
            //     if (isConfirm === true) {
            //         swal(
            //             'Deleted!',
            //             'Your file has been deleted.',
            //             'success'
            //         );
            //     } else if (isConfirm === false) {
            //         swal(
            //             'Cancelled',
            //             'Your imaginary file is safe :)',
            //             'error'
            //         );
            //     } else {
            //         // Esc, close button or outside click
            //         // isConfirm is undefined
            //     }
            // })

        }

        // function updateText(type, lang) {
        //     var editvalue;
        //     editvalue = tinyMCE.get('edit' + type + '').getContent().replace(/'/g, "");
        //     // if (type == 'vision') {
        //     //     editvalue = tinyMCE.get('editvision').getContent().replace(/'/g, "");
        //     // } else if (type == 'missionstatement') {
        //     //     editvalue = tinyMCE.get('editmision').getContent().replace(/'/g, "");
        //     // } else {
        //     //     editvalue = tinyMCE.get('editkey').getContent().replace(/'/g, "");
        //     // }

        //     data = {
        //         value: editvalue,
        //         type: 'niot_director',
        //         lang: lang,
        //         operation: 'edit',
        //         // checkrowcount: checkrowcount
        //     }


        //     $.ajax({
        //         type: 'POST',
        //         // contentType: "application/json",
        //         // dataType: "json",
        //         url: 'webservice/whos_whosave.php',
        //         data: data,
        //         success: function(response, textStatus, xhr) {

        //             console.log(response);

        //             // swal({
        //             // 		title: "Good job",
        //             // 		text: "You clicked the button!",
        //             // 		type: "success"
        //             // 	},
        //             // 	function() {
        //             // 		location.reload();
        //             // 	}
        //             // );
        //             swal({
        //                 title: "",
        //                 text: "Successfully Updated!",
        //                 type: "success",
        //                 buttons: [
        //                     'NO',
        //                     'YES'
        //                 ],
        //             }).then(function(isConfirm) {
        //                 if (isConfirm) {
        //                     location.reload();
        //                 } else {
        //                     //if no clicked => do something else
        //                 }
        //             });
        //         },
        //         complete: function(xhr) {

        //         },
        //         error: function(XMLHttpRequest, textStatus, errorThrown) {
        //             var response = XMLHttpRequest;
        //             swal("Error :Archive!", "Please try again", "error");

        //         }
        //     });
        // }



        // var url = window.location;
        // console.log(url);
        // // for sidebar menu but not for treeview submenu
        // $('ul.sidebar-menu a').filter(function() {
        //     return this.href == url;

        // }).parent().siblings().removeClass('active').end().addClass('active');
        // // for treeview which is like a submenu
        // $('ul.treeview-menu a').filter(function() {
        //     return this.href == url;
        // }).parentsUntil(".sidebar-menu > .treeview-menu").siblings().removeClass('active menu-open').end().addClass('active menu-open');
    </script>
</body>

</html>