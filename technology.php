<?php include("include/db_connection.php");
include 'include/session.php';
$sessionId = $_SESSION['userId'];

$techid = $_REQUEST['link'];

// print_r($_REQUEST['link']);
$decodevalue = base64_decode($techid);

$tech_en = "SELECT * FROM mst_technology_en where status='A' and  tech_id=$decodevalue ";

$resulttech_en = pg_query($db, $tech_en);

$techcount_en = pg_num_rows($resulttech_en);
$techrow_en = pg_fetch_array(
    $resulttech_en
);

$tech_hi = "SELECT * FROM mst_technology_hi where status='A' and mas_id=$decodevalue";
$resulttech_hi = pg_query($db, $tech_hi);



$techcount_hi = pg_num_rows($resulttech_hi);
$techrow_hi = pg_fetch_array(
    $resulttech_hi
);

$tech_ta = "SELECT * FROM mst_technology_ta where status='A' and mas_id=$decodevalue";
$resulttech_ta = pg_query($db, $tech_ta);


$techcount_ta = pg_num_rows($resulttech_ta);
$techrow_ta = pg_fetch_array(
    $resulttech_ta
);

$en_masid = $techrow_en['tech_id'];
$hi_masid = $techrow_hi['tech_id'];
$ta_masid = $techrow_ta['tech_id'];
// $techvalue_en = "select * from niot_technology 	 
// inner join mst_technology_en on niot_technology.mas_id = mst_technology_en.tech_id
// where mst_technology_en.status ='A' and niot_technology.status = 'A' and niot_technology.mas_id = 1 ";

$techvalue_en = "select * from niot_technology_en  as a1 	 
inner join mst_technology_en as b1  on a1.mas_id = b1.tech_id
where b1.status ='A' and a1.status = 'A' and a1.mas_id = $en_masid ";

$resulttechvalue_en = pg_query($db, $techvalue_en);

$techrowvalue_en = pg_fetch_array(
    $resulttechvalue_en
);

$techvaluecount_en = pg_num_rows($resulttechvalue_en);


$techvalue_hi = "select * from niot_technology_hi  as a1 	 
inner join mst_technology_hi as b1  on a1.mas_id = b1.tech_id
where b1.status ='A' and a1.status = 'A' and a1.mas_id =  $hi_masid";


$resulttechvalue_hi = pg_query($db, $techvalue_hi);

$techrowvalue_hi = pg_fetch_array(
    $resulttechvalue_hi
);


$techvaluecount_hi = pg_num_rows($resulttechvalue_hi);

$techvalue_ta = "select * from niot_technology_ta  as a1 	 
inner join mst_technology_ta as b1  on a1.mas_id = b1.tech_id
where b1.status ='A' and a1.status = 'A' and a1.mas_id =  $ta_masid";


$resulttechvalue_ta = pg_query($db, $techvalue_ta);

$techrowvalue_ta = pg_fetch_array(
    $resulttechvalue_ta
);

$techvaluecount_ta = pg_num_rows($resulttechvalue_ta);


// $techid = $techrow['techno_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>NIOT - Who's Who</title>

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
                            <!-- <h4>Technology</h4> -->
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Technology</a>
                                </li>
                                <li class="breadcrumb-item"><a href="sample-page.html"><?php echo $techrow_en['title']; ?></a>
                                </li>
                            </ol>
                        </div>

                    </div>
                    <div class="col-lg-2 " style="padding-top:70px;padding-left:70px;">
                        <button class="btn btn-success " type="button" data-toggle="modal" data-target="#addModal"><i class="icofont icofont-plus"></i> Add New</button>
                    </div>
                </div>
                <div class="row">
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
                                        <!-- Row start -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="col-lg-12 text-center">
                                                    <h4>Technology</h4>
                                                </div>
                                                <div class="sub-title" style="border-bottom:none;">
                                                    <ul class="nav nav-tabs  tabs langtab" role="tablist">

                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#home1" role="tab"><b>English</b></a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#profile1" role="tab"><b>Hindi</b></a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#messages1" role="tab"><b>Tamil</b></a>
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
                                                            <h3 class="text-center"><?php echo $techrow_en['title'];  ?>
                                                                <i class="icofont icofont-edit " data-toggle="modal" data-target="#editModal" title="Edit Here " style="font-size:1rem;" onclick="editbtn(<?php echo $techrow_en['tech_id'] ?>,'english','<?php echo $techrow_en['title'] ?>','<?php echo $techrow_en['status'] ?>')"></i>
                                                            </h3>

                                                            <!-- <form id="save-content-form" data-parsley-validate="">

                                                            <div class="form-group ">
                                                                <textarea class="tinymce" id="saveniot_minister"></textarea>
                                                                </br>
                                                                <button class="btn btn-primary mt-4" type="button" onclick="savedata('niot_minister')">Submit</button>
                                                            </div>
                                                        </form> -->


                                                            <?php if ($techrowvalue_en == 0) {
                                                            ?>
                                                                <form id="settechnology_en">

                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <textarea class="tinymce" id="savetechnology<?php echo $techrow_en['tech_id'] ?>"></textarea>
                                                                                </br>
                                                                                <div class="row text-center">
                                                                                    <button class="btn btn-primary mt-4" type="button" onclick="savedata(<?php echo $techrow_en['tech_id'] ?>,'english')">Submit</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            <?php } else {

                                                            ?>

                                                                <form id="puttechnology_en">
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-lg-12" style="border: 2px solid #041e42;border-radius:25px;">
                                                                                <div class="form-group">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;padding-bottom:10px;">
                                                                                        <textarea class="tinymce" id="edittechnology<?php echo $techrow_en['tech_id'] ?>"><?php echo $techrowvalue_en['contents'] ?></textarea>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row text-center" style="padding-top:10px;">
                                                                            <button class="btn btn-primary mt-4" type="button" onclick="updateText(<?php echo $techrowvalue_en['mas_id'] ?>,'english');"> Update</button>
                                                                            <!-- <button class="btn btn-danger mt-4">Close</button> -->
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            <?php } ?>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="profile1" role="tabpanel">
                                                        <div class="col-lg-12" style="padding:10px;background:#eeeeee;border: 2px solid  #eeeeee;border-radius:25px; ">
                                                            <h3 class="text-center"><?php echo $techrow_hi['title']; ?>
                                                                <!-- <button type="submit" class="btn btn-primary btn-icon waves-effect waves-light" data-toggle="modal" data-target="#editModal" title="Edit Here " onclick="editbtn(<?php echo $techrow_hi['mas_id'] ?>,'hindi')">
                                                                    <i class="icofont icofont-edit "></i>
                                                                </button> -->
                                                                <i class="icofont icofont-edit " data-toggle="modal" data-target="#editModal" title="Edit Here " style="font-size:1rem;" onclick="editbtn(<?php echo $techrow_hi['mas_id'] ?>,'hindi','<?php echo $techrow_hi['title'] ?>','<?php echo $techrow_hi['status'] ?>')"></i>
                                                            </h3>
                                                            <?php if ($techrowvalue_hi == 0) {
                                                            ?>
                                                                <form id="settechnology_hi">
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <textarea class="tinymce" id="savetechnology<?php echo $techrow_hi['tech_id'] ?>"></textarea>
                                                                                </br>
                                                                                <div class="row text-center">
                                                                                    <button class="btn btn-primary mt-4" type="button" onclick="savedata(<?php echo  $techrow_hi['tech_id'] ?>,'hindi')">Submit</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            <?php  } else {

                                                            ?>
                                                                <form id="puttechnology_hi">
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-lg-12" style="border: 2px solid #041e42;border-radius:25px;">
                                                                                <div class="form-group">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;padding-bottom:10px;">
                                                                                        <textarea class="tinymce" id="edittechnology<?php echo $techrowvalue_hi['tech_id'] ?>"><?php echo $techrowvalue_hi['contents'] ?></textarea>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row text-center" style="padding-top:10px;   ">
                                                                            <button class="btn btn-primary mt-4" type="button" onclick="updateText(<?php echo $techrowvalue_hi['tech_id'] ?>,'hindi');"> Update</button>
                                                                            <!-- <button class="btn btn-danger mt-4">Close</button> -->
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            <?php } ?>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="messages1" role="tabpanel">
                                                        <div class="col-lg-12" style="padding:10px;background:#eeeeee;border: 2px solid  #eeeeee;border-radius:25px; ">
                                                            <h3 class="text-center"><?php echo $techrow_ta['title']; ?>
                                                                <!-- <button type="submit" class="btn btn-primary btn-icon waves-effect waves-light" data-toggle="modal" data-target="#editModal" title="Edit Here " onclick="editbtn(<?php echo $techrow_ta['mas_id'] ?>,'tamil')">
                                                                    <i class="icofont icofont-edit "></i>
                                                                </button> -->
                                                                <i class="icofont icofont-edit " data-toggle="modal" data-target="#editModal" title="Edit Here " style="font-size:1rem;" onclick="editbtn(<?php echo $techrow_ta['mas_id'] ?>,'tamil','<?php echo $techrow_ta['title'] ?>','<?php echo $techrow_ta['status'] ?>')"></i>
                                                            </h3>

                                                            <?php if ($techrowvalue_ta == 0) {
                                                            ?>
                                                                <form id="settechnology_ta">

                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <textarea class="tinymce" id="savetechnology<?php echo $techrow_ta['tech_id'] ?>"></textarea>
                                                                                </br>
                                                                                <div class="row text-center">
                                                                                    <button class="btn btn-primary mt-4" type="button" onclick="savedata(<?php echo $techrow_ta['tech_id'] ?>,'tamil')">Submit</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php } else {

                                                                    ?>
                                                                        <form id="puttechnology_ta">

                                                                            <div class="form-group ">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12" style="border: 2px solid #041e42;border-radius:25px;">
                                                                                        <div class="form-group">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;padding-bottom:10px;">
                                                                                                <textarea class="tinymce" id="edittechnology<?php echo $techrowvalue_ta['tech_id'] ?>"><?php echo $techrowvalue_ta['contents'] ?></textarea>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row text-center" style="padding-top:10px;">
                                                                                    <button class="btn btn-primary mt-4" type="button" onclick="updateText(<?php echo $techrowvalue_ta['tech_id'] ?>,'tamil');"> Update</button>
                                                                                    <!-- <button class="btn btn-danger mt-4">Close</button> -->
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    <?php } ?>

                                                                    </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="tab-pane" id="settings1" role="tabpanel">
                                                        <p>4.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
                                                    </div> -->
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

    <div class="modal animated fade " id="addModal" role="dialog" tabindex="-1" data-keyboard="true" data-backdrop="static">
        <div class="modal-dialog modals-default">
            <div class="modal-content">
                <div class="modal-header" style=" border-bottom: 1px solid #e8e8e8;">
                    <div class="col-lg-12" style="padding-bottom:10px;">
                        <div class="col-lg-2">
                            <!-- <a href="#" > -->
                            <img src="assets/images/niotHeader.png" alt="Niot Logo" class="pull-right">
                        </div>
                        <span hidden id="techid"></span>
                        <div class="col-lg-9" style="padding-top:10px;">
                            <h2 class="text-center">Add Technology</h2>

                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                </div>
                <form id="tech-form" data-parsley-validate="">
                    <div class="modal-body" style="padding-top:10px;">

                        <div class="form-group">
                            <label for="title">Technology - English<span class="mandatory"> *</span></label>
                            <input type="text" class="form-control" id="txtTitle_en" name="title-en" placeholder="Enter Technology" required="required" data-parsley-length="[2, 200]" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="title">Technology - Hindi<span class="mandatory"> *</span></label>
                            <input type="text" class="form-control" id="txtTitle_hi" name="title-hi" placeholder="Enter Technology" required="required" data-parsley-length="[2, 200]" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="title">Technology - Tamil <span class="mandatory"> *</span></label>
                            <input type="text" class="form-control" id="txtTitle_ta" name="title-ta" placeholder="Enter Technology" required="required" data-parsley-length="[2, 200]" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->

                    </div>
                    <div class="modal-footer text-center">
                        <button type="button" class="btn btn-success" onclick="add_tech();">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Modal popup Start-->

    <div class="modal animated fade " id="editModal" role="dialog" tabindex="-1" data-keyboard="true" data-backdrop="static">
        <div class="modal-dialog modals-default">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-lg-12" style="padding-bottom:10px;">
                        <span id="edittech_id" hidden></span>
                        <span id="language" hidden></span>
                        <div class="col-lg-2">
                            <!-- <a href="#" > -->
                            <img src="assets/images/niotHeader.png" alt="Niot Logo" class="pull-right">
                        </div>
                        <div class="col-lg-9" style="padding-top:10px;">
                            <h2 class="text-center">Edit Technology</h2>
                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="modal-body" style="padding-top:10px;">
                    <form id="edit-tech-form" data-parsley-validate="">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="title">Technology<span class="mandatory"> *</span></label>
                                <input type="text" class="form-control" id="editTitle" name="title" placeholder="Enter Technology" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                                <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="title">Technology<span class="mandatory"> *</span></label>
                                <div class="">
                                    <select class="select2" id="sltstatus">
                                        <option value="A">Active</option>
                                        <option value="H">InActive</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->

                    </form>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-success" onclick="edit_tech();">update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Modal popup End-->
    <?php include("include/source_js.php") ?>

    <script>
        $(document).ready(function() {
            // $(".select2").select2({
            //     placeholder: 'Select Status'
            // });
            tinymce.init({
                selector: '.tinymce',

                language: 'hi',
                browser_spellcheck: true,
                document_base_url: 'http://localhost:8080/niotadmin/uploads',
                images_upload_base_path: 'http://localhost:8080/niotadmin/uploads',
                images_upload_url: {
                    "location": "http://localhost:8080/niotadmin/uploads"
                },
                images_upload_credentials: true,
                // images_file_types: 'jpg,svg,webp',
                images_upload_handler: function(blobInfo, success, failure) {
                    setTimeout(function() {
                        /* no matter what you upload, we will turn it into TinyMCE logo :)*/
                        success({
                            location: 'http://localhost:8080/niotadmin/uploads'
                        });
                    }, 2000);
                },
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
                plugins: [
                    "advlist autolink textcolor colorpicker lists link image  charmap print anchor",
                    "searchreplace visualblocks code",
                    "insertdatetime media paste codesample table preview"
                ],
                toolbar: "preview undo redo | fontselect styleselect fontsizeselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | codesample action section button | custom_button | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol | language",
                // content_css: [window.location.origin+"/assets/css/custom_css_tinymce.css"],
                font_formats: "Segoe UI=Segoe UI;Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;AkrutiKndPadmini=Akpdmi-n",
                fontsize_formats: "8px 9px 10px 11px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px 50px 52px 54px 56px 58px 60px 62px 64px 66px 68px 70px 72px 74px 76px 78px 80px 82px 84px 86px 88px 90px 92px 94px 94px 96px",
                advlist_bullet_styles: 'square',
                language_url: 'assets/plugins/tinymce/plugins/langs/ta_IN.js',
                content_langs: [{
                        title: 'English',
                        code: 'en'
                    },
                    {
                        title: 'Spanish',
                        code: 'es'
                    },
                    {
                        title: 'French',
                        code: 'fr'
                    },
                    {
                        title: 'German',
                        code: 'de'
                    },
                    {
                        title: 'Portuguese',
                        code: 'pt'
                    },
                    {
                        title: 'Chinese',
                        code: 'zh'
                    }
                ],
                // language: "ta_IN,hi_IN",
                codesample_languages: [{
                        text: 'HTML/XML',
                        value: 'markup'
                    },
                    {
                        text: 'JavaScript',
                        value: 'javascript'
                    },
                    {
                        text: 'CSS',
                        value: 'css'
                    },
                    {
                        text: 'PHP',
                        value: 'php'
                    },
                    {
                        text: 'Ruby',
                        value: 'ruby'
                    },
                    {
                        text: 'Python',
                        value: 'python'
                    },
                    {
                        text: 'Java',
                        value: 'java'
                    },
                    {
                        text: 'C',
                        value: 'c'
                    },
                    {
                        text: 'C#',
                        value: 'csharp'
                    },
                    {
                        text: 'C++',
                        value: 'cpp'
                    }
                ],
                height: 400,
                statusbar: false,
                setup: function(editor) {
                    editor.ui.registry.addButton('custom_button', {
                        text: 'Add Button',
                        onAction: function() {
                            // Open a Dialog
                            editor.windowManager.open({
                                title: 'Add custom button',
                                body: {
                                    type: 'panel',
                                    items: [{
                                        type: 'input',
                                        name: 'button_label',
                                        label: 'Button label',
                                        flex: true
                                    }, {
                                        type: 'input',
                                        name: 'button_href',
                                        label: 'Button href',
                                        flex: true
                                    }, {
                                        type: 'selectbox',
                                        name: 'button_target',
                                        label: 'Target',
                                        items: [{
                                                text: 'None',
                                                value: ''
                                            },
                                            {
                                                text: 'New window',
                                                value: '_blank'
                                            },
                                            {
                                                text: 'Self',
                                                value: '_self'
                                            },
                                            {
                                                text: 'Parent',
                                                value: '_parent'
                                            }
                                        ],
                                        flex: true
                                    }, {
                                        type: 'selectbox',
                                        name: 'button_rel',
                                        label: 'Rel',
                                        items: [{
                                                text: 'No value',
                                                value: ''
                                            },
                                            {
                                                text: 'Alternate',
                                                value: 'alternate'
                                            },
                                            {
                                                text: 'Help',
                                                value: 'help'
                                            },
                                            {
                                                text: 'Manifest',
                                                value: 'manifest'
                                            },
                                            {
                                                text: 'No follow',
                                                value: 'nofollow'
                                            },
                                            {
                                                text: 'No opener',
                                                value: 'noopener'
                                            },
                                            {
                                                text: 'No referrer',
                                                value: 'noreferrer'
                                            },
                                            {
                                                text: 'Opener',
                                                value: 'opener'
                                            }
                                        ],
                                        flex: true
                                    }, {
                                        type: 'selectbox',
                                        name: 'button_style',
                                        label: 'Style',
                                        items: [{
                                                text: 'Success',
                                                value: 'success'
                                            },
                                            {
                                                text: 'Info',
                                                value: 'info'
                                            },
                                            {
                                                text: 'Warning',
                                                value: 'warning'
                                            },
                                            {
                                                text: 'Error',
                                                value: 'error'
                                            }
                                        ],
                                        flex: true
                                    }]
                                },
                                onSubmit: function(api) {

                                    var html = '<a href="' + api.getData().button_href + '" class="btn btn-' + api.getData().button_style + '" rel="' + api.getData().button_rel + '" target="' + api.getData().button_target + '">' + api.getData().button_label + '</a>';

                                    // insert markup
                                    editor.insertContent(html);

                                    // close the dialog
                                    api.close();
                                },
                                buttons: [{
                                        text: 'Close',
                                        type: 'cancel',
                                        onclick: 'close'
                                    },
                                    {
                                        text: 'Insert',
                                        type: 'submit',
                                        primary: true,
                                        enabled: false
                                    }
                                ]
                            });
                        }
                    });
                },
                automatic_uploads: true,
                file_picker_types: 'image',
                file_picker_callback: function(cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');

                    /*
                      Note: In modern browsers input[type="file"] is functional without
                      even adding it to the DOM, but that might not be the case in some older
                      or quirky browsers like IE, so you might want to add it to the DOM
                      just in case, and visually hide it. And do not forget do remove it
                      once you do not need it anymore.
                    */

                    input.onchange = function() {
                        var file = this.files[0];

                        var reader = new FileReader();
                        reader.onload = function() {
                            /*
                              Note: Now we need to register the blob in TinyMCEs image blob
                              registry. In the next release this part hopefully won't be
                              necessary, as we are looking to handle it internally.
                            */
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);

                            /* call the callback and populate the Title field with the file name */
                            cb(blobInfo.blobUri(), {
                                title: file.name
                            });
                        };
                        reader.readAsDataURL(file);
                        console.log(file, blobInfo);
                    };

                    input.click();
                },
            });
        });


        function savedata(techno_id, lang) {
            var value;
            value = tinyMCE.get('savetechnology' + techno_id + '').getContent().replace(/'/g, "");
            // var techno_id = $('#technologyid').text();

            data = {
                contents: value,
                techid: techno_id,
                operation: 'save',
                lang: lang
                // checkrowcount: checkrowcount
            }


            $.ajax({
                type: 'POST',
                // contentType: "application/json",
                dataType: "json",
                url: 'webservice/save_tech.php',
                data: data,
                success: function(data) {
                    console.log(data);
                    if (data.status == "ok") {
                        swal("", "Successully Saved", "success");
                        // $('#addModal').modal('hide');
                    } else {
                        swal("Error!", "Please try again", "error");
                        // $('#addModal').modal('hide');
                    }
                    // swal({
                    //     title: "",
                    //     text: "Successfully Saved!",
                    //     type: "success",
                    //     buttons: [
                    //         'NO',
                    //         'YES'
                    //     ],
                    // }).then(function(isConfirm) {
                    //     if (isConfirm) {
                    //         location.reload();
                    //         get_records();
                    //     } else {
                    //         //if no clicked => do something else
                    //     }
                    // });
                },
                complete: function(xhr) {

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    var response = XMLHttpRequest;
                    swal("Error :Archive!", "Please try again", "error");

                }
            });
        }

        function updateText(editid, lang) {
            var editvalue;
            editvalue = tinyMCE.get('edittechnology' + editid + '').getContent().replace(/'/g, "");
            // var editid = $('#editid').text();

            data = {
                contents: editvalue,
                techid: editid,
                operation: 'edit',
                lang: lang
                // checkrowcount: checkrowcount
            }

            $.ajax({
                type: 'POST',
                // contentType: "application/json",
                dataType: "json",
                url: 'webservice/save_tech.php',
                data: data,
                success: function(data) {
                    console.log(data);
                    if (data.status == "ok") {
                        swal("", "Successully Updated", "success");
                        // $('#addModal').modal('hide');
                    } else {
                        swal("Error!", "Please try again", "error");
                        // $('#addModal').modal('hide');
                    }
                },
                complete: function(xhr) {

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    var response = XMLHttpRequest;
                    swal("Error :Archive!", "Please try again", "error");

                }
            });
        }


        function add_tech() {

            if ($('#tech-form').parsley().validate() != true) {
                return false;
            } else {

                var technology_en = $("#txtTitle_en").val();
                var technology_hi = $("#txtTitle_hi").val();
                var technology_ta = $("#txtTitle_ta").val();
                $.ajax({
                    url: "webservice/add_tech.php",
                    type: "POST",
                    data: {
                        technology_en: technology_en,
                        technology_hi: technology_hi,
                        technology_ta: technology_ta,
                        operation: 'save'
                    },
                    // dataType: "html",
                    success: function(data) {
                        console.log(data);
                        if (data = 'success') {

                            swal("", "Successully Saved", "success");
                            $('#addModal').modal('hide');
                            // swal({
                            //         title: "",
                            //         text: "Successfully Saved",
                            //         type: "success",
                            //         allowEscapeKey: false,
                            //         allowOutsideClick: false,
                            //         showCancelButton: true,
                            //         confirmButtonColor: "#DD6B55",
                            //         confirmButtonText: "Yes",
                            //         // cancelButtonText: "No",
                            //         showLoaderOnConfirm: true,
                            //         closeOnConfirm: false
                            //     })
                            //     .then((isConfirm) => {
                            //         if (isConfirm) {
                            //             $('#addModal').modal('hide');
                            //         }
                            //         return false;
                            //     });
                            // swal({
                            //     title: "",
                            //     text: "Successfully Saved!",
                            //     type: "success",
                            //     buttons: [
                            //         'NO',
                            //         'YES'
                            //     ],
                            // }).then(function(isConfirm) {
                            //     if (isConfirm) {
                            //         $('#addModal').modal('hide');


                            //     } else {
                            //         //if no clicked => do something else
                            //     }
                            // });

                        } else {
                            swal("Error : ", "Please try again", "error");

                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        swal("Error :", "Please try again", "error");
                    }


                });
            }
        }

        function edit_tech() {

            if ($('#edit-tech-form').parsley().validate() != true) {
                return false;

            } else {

                var techid = $('#edittech_id').text();
                var edittech = $('#editTitle').val();
                var sltstatus = $('#sltstatus').val();
                var lang = $('#language').text();
                var data = {
                    technology: edittech,
                    techid: techid,
                    status: sltstatus,
                    lang: lang,
                    operation: 'edit'
                }

                $.ajax({
                    url: "webservice/add_tech.php",
                    type: "POST",
                    data: data,
                    // dataType: "html",
                    success: function(data) {
                        console.log(data);
                        if (data = 'success') {
                            swal("", "Successully Updated", "success");
                            $('#editModal').modal('hide');
                            // swal({
                            //     title: "",
                            //     text: "Successfully updated!",
                            //     type: "success",
                            //     buttons: [
                            //         'NO',
                            //         'YES'
                            //     ],
                            // }).then(function(isConfirm) {
                            //     if (isConfirm) {
                            //         $('#editModal').modal('hide');


                            //     } else {
                            //         //if no clicked => do something else
                            //     }
                            // });

                        } else {
                            swal("Error : ", "Please try again", "error");

                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        swal("Error :", "Please try again", "error");
                    }


                });
            }
        }


        function editbtn(mas_id, lang, technology, status) {
            $('#edittech_id').text(mas_id);
            $('#language').text(lang);
            $('#editTitle').val(technology);
            // console.log(technology);
            $('#sltstatus option:selected').val(status);

        }
    </script>
</body>

</html>