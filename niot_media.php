<?php include 'include/session.php';
include("include/db_connection.php");

$dir_en_query = "select  *  from niot_whoswho_en where designation='niot_director' and contents <> '' limit 1";

$resultdir_en = pg_query($db, $dir_en_query);
$resultdirector_en_count = pg_num_rows($resultdir_en);


$row1 = pg_fetch_array(
    $resultdir_en
);

$dir_hi_query = "select  *  from niot_whoswho_hi where designation='niot_director' and contents <> '' limit 1";

$resultdir_hi = pg_query($db, $dir_hi_query);
$resultdirector_hi_count = pg_num_rows($resultdir_hi);

$row2 = pg_fetch_array(
    $resultdir_hi
);

$dir_ta_query = "select  *  from niot_whoswho_ta where designation='niot_director' and contents <> '' limit 1";

$resultdir_ta = pg_query($db, $dir_ta_query);
$resultdirector_ta_count = pg_num_rows($resultdir_ta);


$row3 = pg_fetch_array(
    $resultdir_ta
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>NIOT - Contact Us</title>

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
                                <li class="breadcrumb-item"><a href="#!">Media</a>
                                </li>
                                <!-- <li class="breadcrumb-item"><a href="#!">Contact Us</a>
                                </li> -->
                                <!-- <li class="breadcrumb-item"><a href="#!">Mission Statement </a>
                                </li> -->
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center" style="border-radius:0px;padding-bottom:0px;background-color:#d3d3d3;">
                        <h3 style="color:#111">Media</h3>
                    </div>
                    <div class="col-lg-12" style="padding-top:20px;">
                        <!-- Row start -->
                        <div class="row">
                            <div class="container">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <!-- Radio-Button start -->
                                        <!-- <div class="card-header">
                                 <h5 class="card-header-text">Bootstrap Tab</h5>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                              </div> -->
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- <div class="col-lg-6"> -->
                                                    <div class="col-lg-2">
                                                        <button class="btn btn-success notika-btn-success pull-left" data-toggle="modal" data-target="#addModal" style="margin-left:10px;" onclick="addNew('en');"><i class="icofont icofont-plus"> </i> Add New</button>
                                                    </div>
                                                    <!-- </div> -->

                                                </div>
                                            </div>
                                            <!-- Row start -->
                                            <div class="row" style="padding-top:10px;">
                                                <div class="col-lg-12">
                                                    <div class="col-lg-6">
                                                        <h2 class="text-center">Events<h2>
                                                                <a href="niot_awards.php">
                                                                    <div class="card-wrapper">
                                                                        <div class="hidden-cover"></div>
                                                                        <img style="max-height: 300px;" src="assets/images/bg_10a.jpg" alt="Danish Nature" />
                                                                        <div class="gallerytitle">View Gallery <i class="fa fa-eye"></i></div>
                                                                    </div>
                                                                </a>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h2 class="text-center">Awards<h2>
                                                                <a href="#">
                                                                    <div class="card-wrapper">
                                                                        <div class="hidden-cover"></div>
                                                                        <img style="max-height: 300px;" src="https://images.unsplash.com/photo-1600345957894-4854e82910ac?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1748&q=80" alt="Danish Nature" />
                                                                        <div class="gallerytitle">View Gallery <i class="fa fa-eye"></i></div>
                                                                    </div>
                                                                </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Row end -->
                                            <!-- Row start -->
                                            <div class="row" style="padding-top:10px;">
                                                <div class="col-lg-12">
                                                    <div class="col-lg-6">
                                                        <h2 class="text-center">Photo <h2>
                                                                <a href="#">
                                                                    <div class="card-wrapper">
                                                                        <div class="hidden-cover"></div>
                                                                        <div class="gallerytitle">View Gallery <i class="fa fa-eye"></i></div>
                                                                        <img style="max-height: 300px;" src="assets/images/bg.jpg" alt="Danish Nature" />

                                                                    </div>
                                                                </a>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h2 class="text-center">Video<h2>
                                                                <a href="#">
                                                                    <div class="card-wrapper">
                                                                        <div class="hidden-cover"></div>
                                                                        <img style="max-height: 300px;" src="https://images.unsplash.com/photo-1600345957894-4854e82910ac?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1748&q=80" alt="Danish Nature" />
                                                                        <div class="gallerytitle">View Gallery <i class="fa fa-eye"></i></div>
                                                                    </div>
                                                                </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Row end -->
                                            <!-- Row start -->
                                            <!-- <div class="row" style="padding-top:10px;">
                                            <div class="col-lg-12">
                                                <div class="col-lg-2">
                                                    <a href="#" class="gallerycard" data-lightbox="example-set">
                                                        <div class="card-wrapper">
                                                            <div class="hidden-cover"></div>
                                                            <img src="https://images.unsplash.com/photo-1600345957894-4854e82910ac?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1748&q=80" alt="Danish Nature" />
                                                            <div class="gallerytitle">Sea</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-2">
                                                    <a href="https://images.unsplash.com/photo-1600345957894-4854e82910ac?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1748&q=80" class="gallerycard" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing lorem impus dolorsit.onsectetur adipiscing.">
                                                        <div class="card-wrapper">
                                                            <div class="hidden-cover"></div>
                                                            <img src="https://images.unsplash.com/photo-1600345957894-4854e82910ac?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1748&q=80" alt="Danish Nature" />
                                                            <div class="gallerytitle">Sea</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-2">
                                                    <a href="https://images.unsplash.com/photo-1600345957894-4854e82910ac?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1748&q=80" class="gallerycard" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing lorem impus dolorsit.onsectetur adipiscing.">
                                                        <div class="card-wrapper">
                                                            <div class="hidden-cover"></div>
                                                            <img src="https://images.unsplash.com/photo-1600345957894-4854e82910ac?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1748&q=80" alt="Danish Nature" />
                                                            <div class="gallerytitle">Sea</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-2">
                                                    <a href="https://images.unsplash.com/photo-1600345957894-4854e82910ac?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1748&q=80" class="gallerycard" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing lorem impus dolorsit.onsectetur adipiscing.">
                                                        <div class="card-wrapper">
                                                            <div class="hidden-cover"></div>
                                                            <img src="https://images.unsplash.com/photo-1600345957894-4854e82910ac?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1748&q=80" alt="Danish Nature" />
                                                            <div class="gallerytitle">Sea</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-2">
                                                    <a href="https://images.unsplash.com/photo-1600345957894-4854e82910ac?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1748&q=80" class="gallerycard" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing lorem impus dolorsit.onsectetur adipiscing.">
                                                        <div class="card-wrapper">
                                                            <div class="hidden-cover"></div>
                                                            <img src="https://images.unsplash.com/photo-1600345957894-4854e82910ac?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1748&q=80" alt="Danish Nature" />
                                                            <div class="gallerytitle">Sea</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-2">
                                                    <a href="https://images.unsplash.com/photo-1600345957894-4854e82910ac?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1748&q=80" class="gallerycard" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing lorem impus dolorsit.onsectetur adipiscing.">
                                                        <div class="card-wrapper">
                                                            <div class="hidden-cover"></div>
                                                            <img src="https://images.unsplash.com/photo-1600345957894-4854e82910ac?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1748&q=80" alt="Danish Nature" />
                                                            <div class="gallerytitle">Sea</div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
                                            <!-- Row end -->
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
                            <h2 class="text-center">Add New Media</h2>
                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="modal-body" style="padding-top:10px;">
                    <form id="demo-form" data-parsley-validate="">
                        <div class="form-group">
                            <label for="title">Title<span class="mandatory"> *</span></label>
                            <input type="text" class="form-control" id="txtrtiname" name="title" placeholder="Enter Title" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>

                        <div class="form-group">
                            <label for="title">Alternative Name<span class="mandatory"> *</span></label>
                            <input type="text" class="form-control" id="txtrtides" name="title" placeholder="Enter Designation(eg:Scientist-E)" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>

                        <div class="form-group">
                            <label for="title">category<span class="mandatory"> *</span></label>
                            <select type="text" class="form-control select2" id="txtrtirole" name="title" placeholder="Enter Designation(eg:Scientist-E)" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                                <option value="">select Category</option>
                                <option value="Central Public Information Officer">Events</option>
                                <option value="First Appellate Authority">Awards</option>
                                <option value="Vigilance Officer">Technology</option>
                                <option value="Grievance Officer">Photo gallery</option>
                                <!-- <option value="WY">Deleted</option> -->
                            </select>
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>

                        <div class="form-group">
                            <label for="title">File<span class="mandatory"> *</span></label>
                            <input type="file" class="form-control" id="txtrtiphone" name="title" placeholder="Enter Phone Number" required="" data-parsley-length="[2, 200]" data-parsley-group="block1" data-parsley-trigger="change">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
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
    <!-- Add Modal popup End-->

    <?php include("include/source_js.php") ?>

    <script>
        $(document).ready(function() {

        });


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