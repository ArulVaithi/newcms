<?php

include 'include/db_connection.php';
include 'include/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>NIOT - Dashboard</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <?php include("include/source_css.php"); ?>

</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <?php include("include/header.php") ?>
        <!-- Side-Nav-->
        <?php include("include/sidebar.php"); ?>
        <!-- Sidebar chat start -->
        <div id="sidebar" class="p-fixed header-users showChat">
            <div class="had-container">
                <div class="card card_main header-users-main">
                    <div class="card-content user-box">
                        <div class="md-group-add-on p-20">
                            <span class="md-add-on">
                                <i class="icofont icofont-search-alt-2 chat-search"></i>
                            </span>
                            <div class="md-input-wrapper">
                                <input type="text" class="md-form-control" name="username" id="search-friends">
                                <label>Search</label>
                            </div>

                        </div>
                        <div class="media friendlist-main">

                            <h6>Friend List</h6>

                        </div>
                        <div class="main-friend-list">
                            <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Josephin Doe</div>
                                    <span>20min ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Alice</div>
                                    <span>1 hour ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="7" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                    <div class="live-status bg-danger"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Michael Scofield</div>
                                    <span>3 hours ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="5" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Irina Shayk</div>
                                    <span>1 day ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="6" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
                                    <div class="live-status bg-danger"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Sara Tancredi</div>
                                    <span>2 days ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Josephin Doe</div>
                                    <span>20min ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Alice</div>
                                    <span>1 hour ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Josephin Doe</div>
                                    <span>20min ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Alice</div>
                                    <span>1 hour ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Josephin Doe</div>
                                    <span>20min ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Alice</div>
                                    <span>1 hour ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Josephin Doe</div>
                                    <span>20min ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Josephin Doe</div>
                                    <span>20min ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Josephin Doe</div>
                                    <span>20min ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Josephin Doe</div>
                                    <span>20min ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="icofont icofont-rounded-left"></i> Josephin Doe
                </a>
            </div>
            <div class="media chat-messages">
                <a class="media-left photo-table" href="#!">
                    <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                    <div class="live-status bg-success"></div>
                </a>
                <div class="media-body chat-menu-content">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="media chat-messages">
                <div class="media-body chat-menu-reply">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media-right photo-table">
                    <a href="#!">
                        <img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                    </a>
                </div>
            </div>
            <div class="media chat-reply-box">
                <div class="md-input-wrapper">
                    <input type="text" class="md-form-control" id="inputEmail" name="inputEmail">
                    <label>Share your thoughts</label>
                    <span class="highlight"></span>
                    <span class="bar"></span> <button type="button" class="chat-send waves-effect waves-light">
                        <i class="icofont icofont-location-arrow f-20 "></i>
                    </button>

                    <button type="button" class="chat-send waves-effect waves-light">
                        <i class="icofont icofont-location-arrow f-20 "></i>
                    </button>
                </div>

            </div>
        </div>
        <!-- Sidebar chat end-->
        <div class="content-wrapper">
            <!-- Container-fluid starts -->
            <!-- Main content starts -->
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header">
                        <h4>Dashboard</h4>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card dashboard-product">
                        <ul class="nav nav-tabs md-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><i class="icofont icofont-home"></i> PressRelease</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><i class="icofont icofont-ui-user"></i> NewsLetter</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#messages7" role="tab"><i class="icofont icofont-ui-message"></i> NewsAnnouncements</a>
                                <div class="slide"></div>
                            </li>


                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="home7" role="tabpanel">
                                <ul class="treeview-menu" style="padding-top:10px;">
                                    <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i>
                                            To develop world class technologies and their applications for sustainable utilization
                                            of ocean resources.</a></li>
                                    <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> To
                                            develop world class technologies and their applications for sustainable utilization of
                                            ocean resources.</a></li>
                                    <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> To develop world class technologies and their
                                            applications for sustainable utilization of ocean resources.</a></li>


                                </ul>
                                <p align="right"><a class="waves-effect waves-dark" href="announcement.php">More.<i class="icon-arrow-right"></i></a></p>

                            </div>
                            <div class="tab-pane" id="profile7" role="tabpanel">
                                <ul class="treeview-menu" style="padding-top:10px;">
                                    <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i>
                                            To develop world class technologies and their applications for sustainable utilization
                                            of ocean resources.</a></li>
                                    <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> To
                                            develop world class technologies and their applications for sustainable utilization of
                                            ocean resources.</a></li>
                                    <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> To develop world class technologies and their
                                            applications for sustainable utilization of ocean resources.</a></li>


                                </ul>
                                <p align="right"><a class="waves-effect waves-dark" href="announcement.php">More.<i class="icon-arrow-right"></i></a></p>

                            </div>
                            <div class="tab-pane" id="messages7" role="tabpanel">
                                <ul class="treeview-menu" style="padding-top:10px;">
                                    <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i>
                                            To develop world class technologies and their applications for sustainable utilization
                                            of ocean resources.</a></li>
                                    <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> To
                                            develop world class technologies and their applications for sustainable utilization of
                                            ocean resources.</a></li>
                                    <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> To develop world class technologies and their
                                            applications for sustainable utilization of ocean resources.</a></li>


                                </ul>
                                <p align="right"><a class="waves-effect waves-dark" href="announcement.php">More.<i class="icon-arrow-right"></i></a></p>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">


                    <div class="card">
                        <div class="card-block horizontal-card-img d-flex">
                            <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                            <div class="d-inlineblock  p-l-20">
                                <h6>Josephin Doe</h6>
                                <a href="#">contact@admin.com</a>
                            </div>
                            <h6 class="txt-warning rotate-txt">Director</h6>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-block horizontal-card-img d-flex">
                            <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                            <div class="d-inlineblock  p-l-20">
                                <h6>Josephin Doe</h6>
                                <a href="#">contact@admin.com</a>
                            </div>
                            <h6 class="txt-warning rotate-txt">Minister</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-block horizontal-card-img d-flex">
                            <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                            <div class="d-inlineblock  p-l-20">
                                <h6>Josephin Doe</h6>
                                <a href="#">contact@admin.com</a>
                            </div>
                            <h6 class="txt-warning rotate-txt">Secretary</h6>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1-3-block row start -->
            <div class="row">


                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header text-center" >
                            <h5 class="card-header-text ">Technologies</h5>
                        </div>
                        <div class="card-block">
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="technology.php?link=<?php echo base64_encode(15) ?>"><i class="icon-arrow-right"></i>
                                        Deep Sea Technology</a></li>
                                <li><a class="waves-effect waves-dark" href="technology.php?link=<?php echo base64_encode(16) ?>"><i class="icon-arrow-right"></i>
                                        Energy and Fresh Water</a></li>
                                <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i>
                                        Ocean Observations</a></li>
                                <li><a class="waves-effect waves-dark" href="bootstrap-ui.html"><i class="icon-arrow-right"></i>
                                        Vessel Management Cell</a></li>
                                <li><a class="waves-effect waves-dark" href="box-shadow.html"><i class="icon-arrow-right"></i>
                                        Ocean Acoustics</a></li>
                                <li><a class="waves-effect waves-dark" href="color.html"><i class="icon-arrow-right"></i>
                                        Ocean Structures</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">AnnualReports</h5>
                        </div>
                        <div class="card-block">
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i>
                                        Techologiesssdfasdfdasf</a></li>
                                <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i>
                                        Techologiesssdfasdfdasf</a></li>
                                <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i>
                                        LTechologiesssdfasdfdasf</a></li>
                                <li><a class="waves-effect waves-dark" href="bootstrap-ui.html"><i class="icon-arrow-right"></i>
                                        GriTechologiesssdfasdfdasfd system</a></li>
                                <li><a class="waves-effect waves-dark" href="box-shadow.html"><i class="icon-arrow-right"></i>
                                        TechologiesssdfasdfdasfBox Shadow</a></li>
                                <li><a class="waves-effect waves-dark" href="color.html"><i class="icon-arrow-right"></i>
                                        TechologiesssdfasdfdasfColor</a></li>
                                <li><a class="waves-effect waves-dark" href="light-box.html"><i class="icon-arrow-right"></i>
                                        TechologiesssdfasdfdasfLight Box</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Documents</h5>
                        </div>
                        <div class="card-block">
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i>
                                        Techologiesssdfasdfdasf</a></li>
                                <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i>
                                        Techologiesssdfasdfdasf</a></li>
                                <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i>
                                        LTechologiesssdfasdfdasf</a></li>
                                <li><a class="waves-effect waves-dark" href="bootstrap-ui.html"><i class="icon-arrow-right"></i>
                                        GriTechologiesssdfasdfdasfd system</a></li>
                                <li><a class="waves-effect waves-dark" href="box-shadow.html"><i class="icon-arrow-right"></i>
                                        TechologiesssdfasdfdasfBox Shadow</a></li>
                                <li><a class="waves-effect waves-dark" href="color.html"><i class="icon-arrow-right"></i>
                                        TechologiesssdfasdfdasfColor</a></li>
                                <li><a class="waves-effect waves-dark" href="light-box.html"><i class="icon-arrow-right"></i>
                                        TechologiesssdfasdfdasfLight Box</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">PhotoGallery</h5>

                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 col-sm-3 col-xs-12">
                                    <a href="assets/images/light-box/l1.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                        <img src="assets/images/light-box/sl1.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-sm-3 col-xs-12">
                                    <a href="assets/images/light-box/l2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                        <img src="assets/images/light-box/sl2.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-sm-3 col-xs-12">
                                    <a href="assets/images/light-box/l3.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                        <img src="assets/images/light-box/sl3.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-sm-3 col-xs-12">
                                    <a href="assets/images/light-box/l4.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                        <img src="assets/images/light-box/sl4.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Video Gallery</h5>

                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 col-sm-3 col-xs-12">
                                    <a href="assets/images/light-box/l1.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                        <img src="assets/images/light-box/sl1.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-sm-3 col-xs-12">
                                    <a href="assets/images/light-box/l2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                        <img src="assets/images/light-box/sl2.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-sm-3 col-xs-12">
                                    <a href="assets/images/light-box/l3.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                        <img src="assets/images/light-box/sl3.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-sm-3 col-xs-12">
                                    <a href="assets/images/light-box/l4.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                        <img src="assets/images/light-box/sl4.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="user-block-2">

                            <h5>NIOT STAFF</h5>

                        </div>
                        <div class="card-block">
                            <div class="user-block-2-activities">
                                <div class="user-block-2-active">
                                    <i class="icofont icofont-clock-time"></i> Recent Activities
                                    <label class="label label-primary">480</label>
                                </div>
                            </div>
                            <div class="user-block-2-activities">
                                <div class="user-block-2-active">
                                    <i class="icofont icofont-users"></i> Current Employees
                                    <label class="label label-primary">390</label>
                                </div>
                            </div>

                            <div class="user-block-2-activities">
                                <div class="user-block-2-active">
                                    <i class="icofont icofont-ui-user"></i> Following
                                    <label class="label label-primary">485</label>
                                </div>

                            </div>
                            <div class="user-block-2-activities">
                                <div class="user-block-2-active">
                                    <i class="icofont icofont-picture"></i> Pictures
                                    <label class="label label-primary">506</label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-warning waves-effect waves-light text-uppercase m-r-30">
                                    Follows
                                </button>
                                <button type="button" class="btn btn-primary waves-effect waves-light text-uppercase">
                                    Message
                                </button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- 4-blocks row end -->


            <!-- Main content ends -->
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
    <?php include("include/source_js.php"); ?>
</body>

</html>