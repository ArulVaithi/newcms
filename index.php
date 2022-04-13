<?php
include 'include/session.php';
include 'include/db_connection.php';


// echo basename('$_server['']')
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

   <div class="wrapper">
      <div class="loader-bg">
         <div class="loader-bar">
         </div>
      </div>
      <?php include("include/header.php") ?>
      <!-- Side-Nav-->
      <?php include("include/sidebar.php"); ?>

      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4>Dashboard</h4>
               </div>
            </div>
            <!-- <section class="aboutsection">
               <div class="header">
                  <h3>About</h3>
               </div>
               <div class="row">

                  <div class="col-lg-4">
                     <div class="aboutcard aboutcard-1">
                        <h4 class="text-center">vision</h4>
                        <div class="scroll-box">
                           <a class="waves-effect waves-dark" href="about_vision.php"><i class="icon-arrow-right"></i>
                              To develop world class technologies and their applications for sustainable utilization
                              of ocean resources.</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="aboutmission aboutmission-1">
                        <h4 class="text-center">Mission Statement</h4>
                        <div class="scroll-box">
                           <a class="waves-effect waves-dark" href="about_mission.php"><i class="icon-arrow-right"></i>
                              To develop world class technologies and their applications for sustainable utilization
                              of ocean resources.</a>

                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="aboutobjective aboutobjective-1">
                        <h4 class="text-center">Key Objectives</h4>
                        <div class="scroll-box">
                           <a class="waves-effect waves-dark" href="about_keyobjectives.php"><i class="icon-arrow-right"></i>
                              To develop world class technologies and their applications for sustainable utilization
                              of ocean resources.</a>
                        </div>
                     </div>
                  </div>
              
               </div>
            </section> -->
            <div class="col-lg-8">
               <div class="card dashboard-product">
                  <ul class="nav nav-tabs md-tabs " role="tablist">
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
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#rtidoc" role="tab"><i class="icofont icofont-ui-file"></i> RTI Documents</a>
                        <div class="slide"></div>
                     </li>

                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane active" id="home7" role="tabpanel">
                        <ul class="treeview-menu" style="padding-top:20px;">
                           <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i>
                                 To develop world class technologies and their applications for sustainable utilization
                                 of ocean resources.</a></li>
                           <br>
                           <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> To
                                 develop world class technologies and their applications for sustainable utilization of
                                 ocean resources.</a></li>
                           <br>
                           <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> To develop world class technologies and their
                                 applications for sustainable utilization of ocean resources.</a></li>
                           <br>

                        </ul>
                        <br>
                        <p align="right"><a class="waves-effect waves-dark" href="press_release.php">More<i class="icon-arrow-right"></i></a></p>
                     </div>
                     <div class="tab-pane" id="profile7" role="tabpanel">
                        <ul class="treeview-menu" style="padding-top:20px;">
                           <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i>
                                 class technologies and their applications for sustainable utilization
                                 of ocean resources.</a></li>
                           <br>
                           <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> To
                                 develop world class technologies and their applications for sustainable utilization of
                                 ocean resources.</a></li>
                           <br>
                           <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> To develop world class technologies and their
                                 applications for sustainable utilization of ocean resources.</a></li>

                           <br>
                        </ul>
                        <br>
                        <p align="right"><a class="waves-effect waves-dark" href="newsletter.php">More<i class="icon-arrow-right"></i></a></p>

                     </div>
                     <div class="tab-pane" id="messages7" role="tabpanel">
                        <ul class="treeview-menu" style="padding-top:20px;">
                           <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i>
                                 To develop world class technologies and their applications for sustainable utilization
                                 of ocean resources.</a></li> <br>
                           <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> To
                                 develop world class technologies and their applications for sustainable utilization of
                                 ocean resources.</a></li>
                           <br>
                           <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> To develop world class technologies and their
                                 applications for sustainable utilization of ocean resources.</a></li>

                           <br>
                        </ul>
                        <br>
                        <p align="right"><a class="waves-effect waves-dark" href="announcement.php">More<i class="icon-arrow-right"></i></a></p>

                     </div>
                     <div class="tab-pane" id="rtidoc" role="tabpanel">
                        <ul class="treeview-menu" style="padding-top:20px;">
                           <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i>
                                 applications for sustainable utilization
                                 of ocean resources.</a></li>
                           <br>
                           <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> To
                                 develop world class technologies and their applications for sustainable utilization of
                                 ocean resources.</a></li>
                           <br>
                           <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> To develop world class technologies and their
                                 applications for sustainable utilization of ocean resources.</a></li>

                           <br>
                        </ul>
                        <br>
                        <p align="right"><a class="waves-effect waves-dark" href="newsletter.php">More<i class="icon-arrow-right"></i></a></p>

                     </div>

                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="card">
                  <div class="user-block-2">
                     <h5>Who's Who</h5>
                  </div>
                  <div class="card-block horizontal-card-img d-flex">
                     <img class="media-object img-circle" src="assets/images/leaders/leader1.jpg" alt="Generic placeholder image">
                     <a href="whos_minister.php">
                        <div class="d-inlineblock  p-l-20">
                           <h6>DR Jitendra Singh</h6>
                           <a>Honble Minister for Earth Science</a>
                        </div>
                        <h6 class="txt-warning rotate-txt">Minister</h6>
                     </a>
                  </div>

                  <div class="card-block horizontal-card-img d-flex">
                     <img class="media-object img-circle" src="assets/images/leaders/leader2.jpg" alt="Generic placeholder image">
                     <a href="whos_secretary.php">
                        <div class="d-inlineblock  p-l-20">
                           <h6>Dr.M.Ravichandran</h6>
                           <a>Secretary / Minister for Earth Science</a>
                        </div>
                        <h6 class="txt-warning rotate-txt">Secretary</h6>
                     </a>
                  </div>

                  <div class="card-block horizontal-card-img d-flex">
                     <img class="media-object img-circle" src="assets/images/leaders/leader3.jpg" alt="Generic placeholder image">
                     <a href="whos_director.php">
                        <div class="d-inlineblock  p-l-20">
                           <h6>DR. G A RamaDass</h6>
                           <a>Director/ National Institue of Ocean Technology</a>
                        </div>
                        <h6 class="txt-warning rotate-txt">Director</h6>
                     </a>
                  </div>

               </div>
            </div>
         </div>

         <!-- 1-3-block row start -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-4">
                  <div class="panel panel-warning">
                     <div class="panel-heading bg-warning">
                        Technology
                     </div>
                     <div class="panel-body">
                        <ul class="list-group">
                           <li class="list-group-item d-flex justify-content-between ">
                              <div class="image-parent align-items-right">
                                 <img style="float:left;" src="assets/images/deepsea.jpg" class="img-fluid" alt="quixote">
                              </div>
                              <a href="technology.php?link=<?php echo base64_encode(15) ?> ">
                                 <p style="padding-left:10px;"> Deep Sea Technology </p>
                              </a>
                           </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              <div class="image-parent align-items-right">
                                 <img style="float:right;" src="assets/images/bg.jpg" class="img-fluid" alt="lay">
                              </div>
                              <a href="technology.php?link=<?php echo base64_encode(16) ?> ">
                                 <p style="padding-left:10px;"> Energy & Fresh Water </p>
                              </a>
                           </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              <div class="image-parent align-items-right">
                                 <img style="float:right;" src="assets/images/deepsea.jpg" class="img-fluid" alt="lay">
                              </div>
                              <a href="technology.php?link=<?php echo base64_encode(17) ?> ">
                                 <p style="padding-left:10px;"> Vessel Management Cell </p>
                              </a>
                           </li>
                        </ul>

                     </div>
                     <div class="panel-footer">
                        <p align="right"><a class="waves-effect waves-dark" href="technology.php?link=<?php echo base64_encode(15) ?>">More <i class="icon-arrow-right"></i></a></p>
                     </div>
                  </div>

                  <div class="row" style="padding-top:20px;">
                     <div class="col-lg-12">
                        <div class="panel panel-warning">
                           <div class="panel-heading bg-warning">
                              Photo Gallery
                           </div>
                           <div class="panel-body" style="padding-top:10px;">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="col-xl-4 col-lg-12 col-sm-6 col-xs-12">
                                       <a href="assets/images/award2.png" data-toggle="lightbox" data-gallery="example-gallery">
                                          <img src="assets/images/award2.png" class="img-fluid" alt="">
                                       </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-12">
                                       <a href="assets/images/banner_tolic.png" data-toggle="lightbox" data-gallery="example-gallery">
                                          <img src="assets/images/banner_tolic.png" class="img-fluid" alt="">
                                       </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-12">
                                       <a href="assets/images/banner_tolic.png" data-toggle="lightbox" data-gallery="example-gallery">
                                          <img src="assets/images/banner_tolic.png" class="img-fluid" alt="">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <br />
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="col-xl-4 col-lg-12 col-sm-6 col-xs-12">
                                       <a href="assets/images/light-box/l1.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                          <img src="assets/images/award2.png" class="img-fluid" alt="">
                                       </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-12">
                                       <a href="assets/images/light-box/l2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                          <img src="assets/images/banner_tolic.png" class="img-fluid" alt="">
                                       </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-12">
                                       <a href="assets/images/light-box/l2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                          <img src="assets/images/banner_tolic.png" class="img-fluid" alt="">
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <br />
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="col-xl-4 col-lg-12 col-sm-6 col-xs-12">
                                       <a href="assets/images/light-box/l1.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                          <img src="assets/images/award2.png" class="img-fluid" alt="">
                                       </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-12">
                                       <a href="assets/images/light-box/l2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                          <img src="assets/images/banner_tolic.png" class="img-fluid" alt="">
                                       </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-12">
                                       <a href="assets/images/light-box/l2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                          <img src="assets/images/banner_tolic.png" class="img-fluid" alt="">
                                       </a>
                                    </div>
                                 </div>
                              </div>

                              <br />
                              <!-- <br>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12">
                                       <a href="assets/images/light-box/l3.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                          <img src="assets/images/light-box/sl3.jpg" class="img-fluid" alt="">
                                       </a>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12">
                                       <a href="assets/images/light-box/l4.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                          <img src="assets/images/light-box/sl4.jpg" class="img-fluid" alt="">
                                       </a>
                                    </div>
                                 </div>
                              </div> -->
                           </div>

                           <div lass="panel-footer">
                              <p align="right"><a class="waves-effect waves-dark" href="niot_photogallery.php">More <i class="icon-arrow-right"></i></a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <!--<div class="card">
                     <div class="card-header">
                        <h5 class="card-header-text">AnnualReports</h5>
                     </div>
                     <div class="card-block">
 <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Techologiesssdfasdfdasf</a></li>
                        <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> Techologiesssdfasdfdasf</a></li>
                        <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> LTechologiesssdfasdfdasf</a></li>
                        <li><a class="waves-effect waves-dark" href="bootstrap-ui.html"><i class="icon-arrow-right"></i> GriTechologiesssdfasdfdasfd system</a></li>
                        <li><a class="waves-effect waves-dark" href="box-shadow.html"><i class="icon-arrow-right"></i> TechologiesssdfasdfdasfBox Shadow</a></li>
                        <li><a class="waves-effect waves-dark" href="color.html"><i class="icon-arrow-right"></i> TechologiesssdfasdfdasfColor</a></li>
                        <li><a class="waves-effect waves-dark" href="light-box.html"><i class="icon-arrow-right"></i> TechologiesssdfasdfdasfLight Box</a></li>
                        
                       </ul>
                     </div>
                  </div>-->
                  <div class="panel panel-info">
                     <div class="panel-heading bg-info">
                        Annual Reports
                     </div>
                     <div class="panel-body">
                        <ul class="timeline">
                           <li>


                              <p><a target="_blank" href="https://www.totoprayogo.com/#" style="padding-left:20px;float:left">Annual Report 2020-2021 <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                 </a></p>
                           </li>
                           <li>

                              <p><a target="_blank" href="https://www.totoprayogo.com/#" style="padding-left:20px;float:left">Annual Report 2019-2020 <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                 </a></p>
                           </li>
                           <li>


                              <p> <a target="_blank" href="https://www.totoprayogo.com/#" style="padding-left:20px;float:left">Annual Report 2018-2019 <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                 </a></p>
                           </li>
                        </ul>

                     </div>
                     <div class="panel-footer">
                        <p align="right"><a class="waves-effect waves-dark" href="annualreports.php">More <i class="icon-arrow-right"></i></a></p>
                     </div>
                  </div>
                  <br />
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="panel panel-warning">
                           <div class="panel-heading bg-warning">
                              Video Gallery
                           </div>
                           <div class="panel-body" style="padding-top:10px;">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <video controls>
                                       <source src="movie.mp4" type="video/mp4">
                                    </video>

                                 </div>

                                 <!-- <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12">
                                          <a href="assets/images/light-box/l1.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                             <img src="assets/images/light-box/sl1.jpg" class="img-fluid" alt="">
                                          </a>
                                       </div>
                                       <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12">
                                          <a href="assets/images/light-box/l2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                             <img src="assets/images/light-box/sl2.jpg" class="img-fluid" alt="">
                                          </a>
                                       </div> -->
                              </div>
                           </div>
                           <!-- <br>
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12">
                                          <a href="assets/images/light-box/l3.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                             <img src="assets/images/light-box/sl3.jpg" class="img-fluid" alt="">
                                          </a>
                                       </div>
                                       <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12">
                                          <a href="assets/images/light-box/l4.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                                             <img src="assets/images/light-box/sl4.jpg" class="img-fluid" alt="">
                                          </a>
                                       </div>
                                    </div>
                                 </div> -->
                           <div lass="panel-footer">
                              <p align="right"><a class="waves-effect waves-dark" href="niot_videogallery.php">More <i class="icon-arrow-right"></i></a></p>
                           </div>
                        </div>


                        <!-- <div class="panel-footer">

                              </div> -->
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
                              <i class="icofont icofont-clock-time"></i> Director
                              <label class="label label-primary">1</label>
                           </div>
                        </div>
                        <div class="user-block-2-activities">
                           <div class="user-block-2-active">
                              <i class="icofont icofont-users"></i> Scientist G
                              <label class="label label-primary">390</label>
                           </div>
                        </div>

                        <div class="user-block-2-activities">
                           <div class="user-block-2-active">
                              <i class="icofont icofont-ui-user"></i> Scientist F
                              <label class="label label-primary">485</label>
                           </div>

                        </div>
                        <div class="user-block-2-activities">
                           <div class="user-block-2-active">
                              <i class="icofont icofont-picture"></i> Scientist E
                              <label class="label label-primary">506</label>
                           </div>
                        </div>
                        <div class="user-block-2-activities">
                           <div class="user-block-2-active">
                              <i class="icofont icofont-picture"></i> Scientist D
                              <label class="label label-primary">506</label>
                           </div>
                        </div>

                        <!-- <div class="text-center">
                           <button type="button" class="btn btn-warning waves-effect waves-light text-uppercase m-r-30">
                              Follows
                           </button>
                           <button type="button" class="btn btn-primary waves-effect waves-light text-uppercase">
                              Message
                           </button>
                        </div> -->
                     </div>
                     <div lass="panel-footer">
                        <p align="right"><a class="waves-effect waves-dark" href="announcement.php">More <i class="icon-arrow-right"></i></a></p>
                     </div>
                  </div>


               </div>
            </div>
            <section class="events" style="padding-top:20px;background:#fff">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="row">
                        <div class="col-lg-12 text-center">
                           <h3>Events</h3>
                        </div>
                     </div>

                     <div class="eventcard">
                        <div class="post">
                           <img class="post-image" src="assets/images/Indias_Scientific_Endeavour_in_the_Exploration_of_Ocean_Resources.png" />

                           <div class="post-content" style="float:right;">
                              <p class="post-header"> </p>
                              <p class="post-text">
                                 Eminent Person Lecture (EPL) by Dr GA Ramadass Hosted by Oliver Nelson Gonsalves
                              </p>
                              <!-- <div class="author">
                           <img src="https://assets.codepen.io/2642098/internal/avatars/users/default.png?format=auto&height=80&version=1543776877&width=80" alt="" class="author-image">
                           <div class="author-content">
                              <p class="author-name">Özgür Kurucan</p>
                              <p class="date">Jun 20, 2020</p>
                           </div>
                        </div> -->
                           </div>

                        </div>
                     </div>
                     <div class="eventcard">
                        <div class="post">
                           <img class="post-image" src="assets/images/IOC_Blue_Economy_Summit1.jpg" />

                           <div class="post-content">
                              <p class="post-header"> </p>
                              <p class="post-text">
                                 Webinar on Blue economy in the Indian Ocean region towards UN Decade of Ocean Science for Sustainability (2021-2030)
                              </p>
                              <!-- <div class="author">
                           <img src="https://assets.codepen.io/2642098/internal/avatars/users/default.png?format=auto&height=80&version=1543776877&width=80" alt="" class="author-image">
                           <div class="author-content">
                              <p class="author-name">Özgür Kurucan</p>
                              <p class="date">Jun 20, 2020</p>
                           </div>
                        </div> -->
                           </div>

                        </div>
                     </div>
                     <div lass="panel-footer" style="padding:30px">
                        <p align="right"><a class="waves-effect waves-dark" href="niot_events.php">More <i class="icon-arrow-right"></i></a></p>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="row">
                        <div class="col-lg-12 text-center">
                           <h3>Awards</h3>
                        </div>
                     </div>
                     <div class="eventcard">
                        <div class="post">
                           <img class="post-image" src="assets/images/banner_tolic.png" />

                           <div class="post-content" style="float:right;">
                              <p class="post-header"> </p>
                              <p class="post-text">
                                 Tolic Award
                              </p>
                              <!-- <div class="author">
                           <img src="https://assets.codepen.io/2642098/internal/avatars/users/default.png?format=auto&height=80&version=1543776877&width=80" alt="" class="author-image">
                           <div class="author-content">
                              <p class="author-name">Özgür Kurucan</p>
                              <p class="date">Jun 20, 2020</p>
                           </div>
                        </div> -->
                           </div>

                        </div>
                     </div>
                     <div class="eventcard">
                        <div class="post">
                           <img class="post-image" src="assets/images/award2.png" />

                           <div class="post-content">
                              <p class="post-header"> </p>
                              <p class="post-text">
                                 Dr. Purnima Jalihal, GH, EFW, Moes Niot was awarded the Uehara Prize for the long term contribution to OTEC <a href="#">more..</a>

                              </p>
                              <!-- <div class="author">
                           <img src="https://assets.codepen.io/2642098/internal/avatars/users/default.png?format=auto&height=80&version=1543776877&width=80" alt="" class="author-image">
                           <div class="author-content">
                              <p class="author-name">Özgür Kurucan</p>
                              <p class="date">Jun 20, 2020</p>
                           </div>
                        </div> -->
                           </div>

                        </div>
                     </div>
                     <div lass="panel-footer" style="padding:30px">
                        <p align="right"><a class="waves-effect waves-dark" href="niot_awards.php">More <i class="icon-arrow-right"></i></a></p>
                     </div>
                  </div>

            </section>
            <!-- <div class="row">

               <div class="col-lg-6">
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
               </div>
               <div class="col-lg-6">
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

            </div> -->
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

      <!-- Required Jqurey -->
      <?php include("include/source_js.php"); ?>
</body>

</html>