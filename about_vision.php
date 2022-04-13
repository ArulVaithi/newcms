<?php include("include/db_connection.php");
include('include/session.php');

$checkrow_en = "select * from mst_about_en";
$resultcheckrow_en = pg_query($db, $checkrow_en);
$vision_encount = pg_num_rows($resultcheckrow_en);


$checkrow_hi = "select * from mst_about_hi";
$resultcheckrow_hi = pg_query($db, $checkrow_hi);
$vision_hicount = pg_num_rows($resultcheckrow_hi);


$checkrow_ta = "select * from mst_about_ta";
$resultcheckrow_ta = pg_query($db, $checkrow_ta);
$vision_tacount = pg_num_rows($resultcheckrow_ta);


// $annualreport = "select  *  from _events limit 1";
$vision_en = "select  vision  from mst_about_en where vision <> '' limit 1";
// echo $annualreport;
$resultvision_en = pg_query($db, $vision_en);
$resultvision_en_count = pg_num_rows($resultvision_en);

$row1 = pg_fetch_array(
    $resultvision_en
);


$vision_hi = "select  vision  from mst_about_hi  where vision <> '' limit 1";

$resultvision_hi = pg_query($db, $vision_hi);
$resultvision_hi_count = pg_num_rows($resultvision_hi);

$row2 = pg_fetch_array(
    $resultvision_hi
);



$vision_ta = "select  vision  from mst_about_ta where vision <> '' limit 1";

$resultvision_ta = pg_query($db, $vision_ta);
$resultvision_ta_count = pg_num_rows($resultvision_ta);

// echo $vision_ta_count;
// exit;
$row3 = pg_fetch_array(
    $resultvision_ta
);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>NIOT - About Vision</title>

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
                    <div class="col-sm-12 p-0">
                        <div class="main-header">

                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">About NIOT</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">About NIOT</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Vision</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center" style="border-radius:0px;padding-bottom:0px;background-color:#d3d3d3;">
                        <h4 style="color:#111">About - Vision</h4>
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
                                        <!-- Row start -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- <div class="col-lg-12 text-center">
                                                    <h4>About - Vision</h4>
                                                </div> -->
                                                <div class="sub-title" style="border-bottom:none;">
                                                    <!-- end of modal -->
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs tabs langtab" role="tablist">
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
                                                            <h3 class="text-center">Vision</h3>
                                                            <!-- <form id="save-content-form" data-parsley-validate="">

                                                            <div class="form-group ">
                                                                <textarea class="tinymce" id="saveniot_director "></textarea>
                                                                </br>
                                                                <button class="btn btn-primary mt-4" type="button" onclick="savedata('niot_director ')">Submit</button>
                                                            </div>
                                                        </form> -->


                                                            <?php if ($resultvision_en_count == 0) {
                                                            ?>
                                                                <form data-parsley-validate="" id="setvision_en">

                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <textarea class="tinymce" id="savevision_en"></textarea>
                                                                            </br>
                                                                            <div class="row text-center">
                                                                                <button class="btn btn-primary mt-4" type="button" onclick="savedata('vision_en','english')">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            <?php } else {

                                                            ?>

                                                                <form data-parsley-validate="" id="putvision_en">
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-lg-12" style="border: 2px solid #041e42;border-radius:25px;">
                                                                                <div class="form-group">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;padding-bottom:10px;">
                                                                                        <textarea class="tinymce" id="editvision_en"><?php echo $row1['vision'] ?></textarea>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row text-center" style="padding-top:10px;">
                                                                            <button class="btn btn-primary mt-4" type="button" onclick="updateText('vision_en','english');"> Update</button>
                                                                            <!-- <button class="btn btn-danger mt-4">Close</button> -->
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            <?php } ?>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="profile1" role="tabpanel">
                                                        <div class="col-lg-12" style="padding:10px;background:#eeeeee;border: 2px solid  #eeeeee;border-radius:25px; ">
                                                            <h3 class="text-center">दृष्टि ( Vision)</h3>
                                                            <?php if ($resultvision_hi_count == 0) {
                                                            ?>
                                                                <form data-parsley-validate="" id="setvision_hi">

                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <textarea class="tinymce" id="savevision_hi"></textarea>
                                                                            </br>
                                                                            <div class="row text-center">
                                                                                <button class="btn btn-primary mt-4" type="button" onclick="savedata('vision_hi','hindi')">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            <?php  } else {

                                                            ?>
                                                                <form data-parsley-validate="" id="putvision_hi">
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-lg-12" style="border: 2px solid #041e42;border-radius:25px;">
                                                                                <div class="form-group">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;padding-bottom:10px;">
                                                                                        <textarea class="tinymce" id="editvision_hi"><?php echo $row2['vision'] ?></textarea>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row text-center" style="padding-top:10px;   ">
                                                                            <button class="btn btn-primary mt-4" type="button" onclick="updateText('vision_hi','hindi');"> Update</button>
                                                                            <!-- <button class="btn btn-danger mt-4">Close</button> -->
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            <?php } ?>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="messages1" role="tabpanel">
                                                        <div class="col-lg-12" style="padding:10px;background:#eeeeee;border: 2px solid  #eeeeee;border-radius:25px; ">
                                                            <h3 class="text-center">பார்வை ( Vision )</h3>


                                                            <?php if ($resultvision_ta_count == 0) {
                                                            ?>
                                                                <form data-parsley-validate="" id="setvision_ta">

                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <textarea class="tinymce" id="savevision_ta"></textarea>
                                                                            </br>
                                                                            <div class="row text-center">
                                                                                <button class="btn btn-primary mt-4" type="button" onclick="savedata('vision_ta','tamil')">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    <?php } else {

                                                                    ?>
                                                                        <form data-parsley-validate="" id="putvision_ta">

                                                                            <div class="form-group ">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12" style="border: 2px solid #041e42;border-radius:25px;">
                                                                                        <div class="form-group">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;padding-bottom:10px;">
                                                                                                <textarea class="tinymce" id="editvision_ta"><?php echo $row3['vision'] ?></textarea>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row text-center" style="padding-top:10px;">
                                                                                    <button class="btn btn-primary mt-4" type="button" onclick="updateText('vision_ta','tamil');"> Update</button>
                                                                                    <!-- <button class="btn btn-danger mt-4">Close</button> -->
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    <?php } ?>

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

    <?php include("include/source_js.php") ?>

    <script>
        var vision_encount = "<?php echo $vision_encount ?>";
        var vision_hicount = "<?php echo $vision_hicount ?>";
        var vision_tacount = "<?php echo $vision_tacount ?>";
        $(document).ready(function() {

            // tab('english');
            tinymce.init({
                selector: '.tinymce',
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
                toolbar: "preview undo redo | fontselect styleselect fontsizeselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | codesample action section button | custom_button | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol ",
                // content_css: [window.location.origin+"/assets/css/custom_css_tinymce.css"],
                font_formats: "Segoe UI=Segoe UI;Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;AkrutiKndPadmini=Akpdmi-n",
                fontsize_formats: "8px 9px 10px 11px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px 50px 52px 54px 56px 58px 60px 62px 64px 66px 68px 70px 72px 74px 76px 78px 80px 82px 84px 86px 88px 90px 92px 94px 94px 96px",
                advlist_bullet_styles: 'square',
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

        function savedata(type, lang) {
            var value, checkrowcount;
            console.log(type);
            value = tinyMCE.get('save' + type + '').getContent().replace(/'/g, "");
            // value = tinyMCE.get('savevision_hi').getContent().replace(/'/g, "");
            // checkrowcount = vision_encount;
            if (type == 'vision_en') {
                checkrowcount = vision_encount;
                //   value = tinyMCE.get('savevision_en').getContent().replace(/'/g, "");
            } else if (type == 'vision_hi') {
                checkrowcount = vision_hicount;
                //value = tinyMCE.get('savevision_hi').getContent().replace(/'/g, "");
            } else {
                checkrowcount = vision_tacount;
                // value = tinyMCE.get('savevision_ta').getContent().replace(/'/g, "");
            }

            data = {
                value: value,
                type: 'vision',
                lang: lang,
                operation: 'save',
                checkrowcount: checkrowcount
            }

            // console.log(editdata[0].edit);
            $.ajax({
                type: 'POST',
                // contentType: "application/json",
                // dataType: "json",
                url: 'webservice/texteditorsave.php',
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

        function updateText(type, lang) {
            var editvalue;
            editvalue = tinyMCE.get('edit' + type + '').getContent().replace(/'/g, "");
            // if (type == 'vision') {
            //     editvalue = tinyMCE.get('editvision').getContent().replace(/'/g, "");
            // } else if (type == 'missionstatement') {
            //     editvalue = tinyMCE.get('editmision').getContent().replace(/'/g, "");
            // } else {
            //     editvalue = tinyMCE.get('editkey').getContent().replace(/'/g, "");
            // }

            data = {
                value: editvalue,
                type: 'vision',
                lang: lang,
                operation: 'edit',
                // checkrowcount: checkrowcount
            }
            $.ajax({
                type: 'POST',
                // contentType: "application/json",
                // dataType: "json",
                url: 'webservice/texteditorsave.php',
                data: data,
                success: function(response, textStatus, xhr) {

                    console.log(response);

                    // swal({
                    // 		title: "Good job",
                    // 		text: "You clicked the button!",
                    // 		type: "success"
                    // 	},
                    // 	function() {
                    // 		location.reload();
                    // 	}
                    // );
                    swal({
                        title: "",
                        text: "Successfully Updated!",
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


        // function tab(result) {

        //     console.log(vision_encount);
        //     if (result == 'english') {
        //         if (vision_encount == 0) {
        //             $('#setvision_en').show();
        //             $('#putvision_en').hide();
        //             $('#setvision_hi').hide();
        //             $('#putvision_hi').hide();
        //             $('#setvision_ta').hide();
        //             $('#putvision_ta').hide();
        //         } else {
        //             $('#putvision_en').show();
        //             $('#setvision_en').hide();
        //             $('#setvision_hi').hide();
        //             $('#putvision_hi').hide();
        //             $('#setvision_ta').hide();
        //             $('#putvision_ta').hide();
        //         }

        //         // $('#texteditordiv2').hide();
        //         // $('#textAddDiv2').hide();
        //         // $('#texteditordiv3').hide();
        //         // $('#textAddDiv3').hide();
        //     } else if (result == 'hindi' ) {

        //         if (vision_hicount == 0) {
        //             $('#setvision_hi').show();
        //             $('#putvision_hi').hide();
        //             $('#setvision_en').hide();
        //             $('#putvision_en').hide();
        //             $('#setvision_ta').hide();
        //             $('#putvision_ta').hide();
        //         } else {
        //             // alert();
        //             $('#putvision_hi').show();
        //             $('#setvision_hi').hide();
        //             $('#setvision_en').hide();
        //             $('#putvision_en').hide();
        //             $('#setvision_ta').hide(); 
        //             $('#putvision_ta').hide();
        //         }
        //         // $('#texteditordiv3').hide();
        //         // $('#textAddDiv3').hide();
        //         // $('#texteditordiv1').hide();
        //         // $('#textAddDiv1').hide();
        //     } else if (result == 'tamil') {

        //         if (vision_tacount == 0) {
        //             $('#setvision_ta').show();
        //             $('#putvision_ta').hide();
        //             $('#putvision_hi').hide();
        //             $('#setvision_hi').hide();
        //             $('#setvision_en').hide();
        //             $('#putvision_en').hide();
        //             // $('#texteditordiv2').hide();
        //             // $('#textAddDiv2').hide();
        //             // $('#texteditordiv3').hide();
        //             // $('#textAddDiv3').hide();
        //         } else {
        //             $('#putvision_ta').show();
        //             $('#setvision_ta').hide();
        //             $('#putvision_hi').hide();
        //             $('#setvision_hi').hide();
        //             $('#setvision_en').hide();
        //             $('#putvision_en').hide();

        //         }
        //     }
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