<?php
include('db_connection.php');

$sql  = "select * from mst_technology_en where status = 'A'";

$result =  pg_query($db, $sql);

?>
<aside class="main-sidebar hidden-print ">
   <section class="sidebar" id="sidebar-scroll">
      <!-- Sidebar Menu-->
      <ul class="sidebar-menu">
         <li class="nav-level"></li>
         <li class=" active treeview">
            <a class="waves-effect waves-dark" href="index.php">
               <i class="fa fa-dashboard"></i><span> Dashboard</span>
            </a>
         </li>
         <li class=" treeview">
            <a class="waves-effect waves-dark" href="niot_media.php">
               <i class="icon-speedometer"></i><span> Media</span>
            </a>
         </li>
         <!-- <li class="nav-level"></li> -->
         <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="fa fa-info " ></i><span>
                  About NIOT</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
               <li><a class="waves-effect waves-dark" href="accordion.html"><span>
                        About NIOT</span><i class="icon-arrow-down"></i>
                  </a>
                  <ul class="treeview-menu">
                     <li>
                        <a class="waves-effect waves-dark" href="about_vision.php">
                           Vision
                        </a>
                     </li>
                     <li>
                        <a class="waves-effect waves-dark" href="about_mission.php">
                           Mission Statement
                        </a>
                     </li>
                     <li>
                        <a class="waves-effect waves-dark" href="about_keyobjectives.php">

                           Key Objectives

                        </a>
                     </li>
                  </ul>

               </li>
               <li><a class="waves-effect waves-dark" href="#">
                     Administration</a></li>
               <li><a class="waves-effect waves-dark" href="#"><span>
                        Who's Who </span><i class="icon-arrow-down"></i></a>
                  <ul class="treeview-menu">
                     <li>
                        <a class="waves-effect waves-dark" href="whos_minister.php">
                           Union Minister, MoES
                        </a>
                     </li>
                     <li>
                        <a class="waves-effect waves-dark" href="whos_secretary.php">
                           Secretary, MoES
                        </a>
                     </li>
                     <li>
                        <a class="waves-effect waves-dark" href="whos_director.php">
                           Director, NIOT
                        </a>
                     </li>
                  </ul>
               </li>
               <!-- <li><a class="waves-effect waves-dark" href="#">
                     Contact Us</a></li>
               <li><a class="waves-effect waves-dark" href="#">
                     RTI Contacts</a></li> -->
               <!-- <li><a class="waves-effect waves-dark" href="color.html"><i class="icon-arrow-right"></i> Color</a>
                     </li>
                     <li><a class="waves-effect waves-dark" href="light-box.html"><i class="icon-arrow-right"></i> Light
                           Box</a></li>
                     <li><a class="waves-effect waves-dark" href="notification.html"><i class="icon-arrow-right"></i>
                           Notification</a></li>
                     <li><a class="waves-effect waves-dark" href="panels-wells.html"><i class="icon-arrow-right"></i>
                           Panels-Wells</a></li>
                     <li><a class="waves-effect waves-dark" href="tabs.html"><i class="icon-arrow-right"></i> Tabs</a>
                     </li>
                     <li><a class="waves-effect waves-dark" href="tooltips.html"><i class="icon-arrow-right"></i>
                           Tooltips</a></li>
                     <li><a class="waves-effect waves-dark" href="typography.html"><i class="icon-arrow-right"></i>
                           Typography</a></li> -->
            </ul>
         </li>

         <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="fa fa-clipboard"></i><span>
                  Technology</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
               <?php $i = 0;
               $file;
               while (
                  $row = pg_fetch_array($result)
               ) { ?>
                  <li><a class="waves-effect waves-dark" href="technology.php?link=<?php echo base64_encode($row['tech_id']) ?>">
                        <?php echo $row['title'] ?></a></li>

               <?php } ?>
               <!-- <li><a class="waves-effect waves-dark" href="technology.php?link=<?php echo base64_encode(16) ?>">
                     Energy and Fresh Water</a></li>
               <li><a class="waves-effect waves-dark" href="#">
                     Ocean Observations</a>
               </li>
               <li><a class="waves-effect waves-dark" href="#">
                     Vessel Management Cell</a></li>
               <li><a class="waves-effect waves-dark" href="#">
                     Ocean Acoustics</a></li>
               <li><a class="waves-effect waves-dark" href="#">
                     Ocean Structures</a></li> -->
               <!-- <li><a class="waves-effect waves-dark" href="color.html"><i class="icon-arrow-right"></i> Color</a>
                     </li>
                     <li><a class="waves-effect waves-dark" href="light-box.html"><i class="icon-arrow-right"></i> Light
                           Box</a></li>
                     <li><a class="waves-effect waves-dark" href="notification.html"><i class="icon-arrow-right"></i>
                           Notification</a></li>
                     <li><a class="waves-effect waves-dark" href="panels-wells.html"><i class="icon-arrow-right"></i>
                           Panels-Wells</a></li>
                     <li><a class="waves-effect waves-dark" href="tabs.html"><i class="icon-arrow-right"></i> Tabs</a>
                     </li>
                     <li><a class="waves-effect waves-dark" href="tooltips.html"><i class="icon-arrow-right"></i>
                           Tooltips</a></li>
                     <li><a class="waves-effect waves-dark" href="typography.html"><i class="icon-arrow-right"></i>
                           Typography</a></li> -->
            </ul>
         </li>
         <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="fa fa-file"></i><span>
                  Documents / Publications
               </span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
               <li><a class="waves-effect waves-dark" href="announcement.php">
                     News / Announcements</a></li>
               <li><a class="waves-effect waves-dark" href="press_release.php">
                     Press Releases</a></li>
               <li><a class="waves-effect waves-dark" href="newsletter.php">
                     Newsletters</a></li>
               <li><a class="waves-effect waves-dark" href="annualreports.php">
                     Annual Reports</a></li>
               <li><a class="waves-effect waves-dark" href="#">
                     RTI Documents</a></li>
               <li><a class="waves-effect waves-dark" href="#">
                     Technology Transfers & Patents</a></li>
            </ul>
         </li>

         <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="fa fa-user"></i><span> NIOT
                  Staff
               </span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
               <li><a class="waves-effect waves-dark" href="#">
                     NIOT Staff</a></li>
               <li><a class="waves-effect waves-dark" href="employeescorner.php">
                     Employees Corner</a>
               </li>
            </ul>
         </li>

         <li class="treeview"><a class="waves-effect waves-dark" href="niot_recruitments.php"><i class="fa fa-briefcase"></i><span>
                  Recruitments
               </span></a>
            <!-- <ul class="treeview-menu">
               <li><a class="waves-effect waves-dark" href="#">
                     Advt No. NIOT/E&P/03/2021 (Consultants)</a></li>
               <li><a class="waves-effect waves-dark" href="#">
                     Advt No. NIOT/E&P/02/2021 (Project)</a>
               </li>
               <li><a class="waves-effect waves-dark" href="#">
                     Advt No. NIOT/E&P/01/2021(Regular)</a>
               </li>
            </ul> -->
         </li>
         <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-book-open"></i><span>
                  Contact</span><i class="fa-solid fa-address-card"></i></a>
            <ul class="treeview-menu">
               <li><a class="waves-effect waves-dark" href="niot_contactus.php"><i class="icon-arrow-right"></i> Contact Us</a></li>
               <li><a class="waves-effect waves-dark" href="niot_rticontact.php"><i class="icon-arrow-right"></i> RTI Contacts</a></li>
               <li><a class="waves-effect waves-dark" href="niot_wim.php"><i class="icon-arrow-right"></i> WIM</a></li>
            </ul>
         </li>
         <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="fa fa-calendar"></i><span>
                  Events
               </span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
               <li><a class="waves-effect waves-dark" href="niot_events.php"><i class="icon-arrow-right"></i>
                     Events</a></li>
               <li><a class="waves-effect waves-dark" href="niot_eventgallery.php"><i class="icon-arrow-right"></i>
                     Events Gallery</a></li>
               <li><a class="waves-effect waves-dark" href="niot_awards.php"><i class="icon-arrow-right"></i>
                     Awards</a>
               </li>
            </ul>
         </li>

         <li class="treeview"><a class="waves-effect waves-dark" href="niot_photogallery.php"><i class="fa fa-image"></i><span>
                  Photo Gallery</span></a>
            <!-- <ul class="treeview-menu">
                     <li><a class="waves-effect waves-dark" href="form-elements-bootstrap.html"><i
                              class="icon-arrow-right"></i> Form Elements Bootstrap</a></li>

                     <li><a class="waves-effect waves-dark" href="form-elements-advance.html"><i
                              class="icon-arrow-right"></i> Form Elements Advance</a></li>
                  </ul> -->
         </li>

         <li class="treeview">
            <a class="waves-effect waves-dark" href="niot_videogallery.php">
               <i class="fa fa-play-circle"></i><span> Video Gallery</span>
            </a>
         </li>

         <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-book-open"></i><span>
                  Portal Content</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
               <li><a class="waves-effect waves-dark" href="#"><i class="icon-arrow-right"></i> Slider Images</a></li>

               <li><a class="waves-effect waves-dark" href="#"><i class="icon-arrow-right"></i> Important Links</a></li>
            </ul>
         </li>
         <!-- <li class="nav-level">--- More</li>

               <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                        class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
                  <ul class="treeview-menu">
                     <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Authentication</span><i
                              class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                           <li><a class="waves-effect waves-dark" href="register1.html" target="_blank"><i
                                    class="icon-arrow-right"></i> Register 1</a></li>

                           <li><a class="waves-effect waves-dark" href="login1.html" target="_blank"><i
                                    class="icon-arrow-right"></i><span> Login 1</span></a></li>
                           <li><a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i
                                    class="icon-arrow-right"></i><span> Forgot Password</span></a></li>

                        </ul>
                     </li>

                     <li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i
                              class="icon-arrow-right"></i> Error 404</a></li>
                     <li><a class="waves-effect waves-dark" href="sample-page.html"><i class="icon-arrow-right"></i>
                           Sample Page</a></li>

                  </ul>
               </li>


               <li class="nav-level">--- Menu Level</li>

               <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                        class="icofont icofont-company"></i><span>Menu Level 1</span><i class="icon-arrow-down"></i></a>
                  <ul class="treeview-menu">
                     <li>
                        <a class="waves-effect waves-dark" href="#!">
                           <i class="icon-arrow-right"></i>
                           Level Two
                        </a>
                     </li>
                     <li class="treeview">
                        <a class="waves-effect waves-dark" href="#!">
                           <i class="icon-arrow-right"></i>
                           <span>Level Two</span>
                           <i class="icon-arrow-down"></i>
                        </a>
                        <ul class="treeview-menu">
                           <li>
                              <a class="waves-effect waves-dark" href="#!">
                                 <i class="icon-arrow-right"></i>
                                 Level Three
                              </a>
                           </li>
                           <li>
                              <a class="waves-effect waves-dark" href="#!">
                                 <i class="icon-arrow-right"></i>
                                 <span>Level Three</span>
                                 <i class="icon-arrow-down"></i>
                              </a>
                              <ul class="treeview-menu">
                                 <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                       <i class="icon-arrow-right"></i>
                                       Level Four
                                    </a>
                                 </li>
                                 <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                       <i class="icon-arrow-right"></i>
                                       Level Four
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </li> -->
      </ul>
   </section>
</aside>
<!-- 
      <script>
        var url = window.location;
        // for sidebar menu but not for treeview submenu
        $('ul.sidebar-menu treeview a').filter(function() {
            return this.href == url;
        }).parent().siblings().removeClass('active').end().addClass('active');
        // for treeview which is like a submenu
        $('ul.treeview-menu a').filter(function() {
            return this.href == url;
        }).parentsUntil(".sidebar-menu > .treeview-menu").siblings().removeClass('active menu-open ').end().addClass(('active menu-open').css("background","blue"));
    </script> -->