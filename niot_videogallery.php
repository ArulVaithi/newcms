<?php include("include/db_connection.php");
include 'include/session.php';
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
    <title>NIOT - Video Gallery</title>

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
                                <li class="breadcrumb-item"><a href="#!">Video Gallery</a>
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
                        <h3 style="color:#111">Video Gallery</h3>
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
                                        <div class="row" style="padding-top:10px;">
                                            <div class="col-lg-12">
                                                <div class="video-gallery">
                                                    <div class="col-lg-3">
                                                        <div class="gallery-item">
                                                            <img src="https://i.pinimg.com/originals/75/f9/97/75f997ee6acf59dc51bbea05eae36677.jpg" alt="North Cascades National Park" />
                                                            <div class="gallery-item-caption">
                                                                <div>
                                                                    <h2>North Cascades</h2>
                                                                    <p>The mountains are calling</p>
                                                                </div>
                                                                <a class="vimeo-popup" href="https://www.youtube.com/embed/-_pT-tO9LJc"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                    <div class="gallery-item ">
                                                        <img src="https://cdn.davemorrowphotography.com/wp-content/uploads/2016/08/Mount-Rainier-Star-Photography-Workshops-and-Tours-Header-900x394.jpg" alt="Mt. Rainier" />
                                                        <div class="gallery-item-caption">
                                                            <div>
                                                                <h2>Mt. Rainier</h2>
                                                                <p>14410 feet of adventure</p>
                                                            </div>
                                                            <a class="vimeo-popup" href="https://www.youtube.com/embed/-_pT-tO9LJc"></a>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                    <div class="gallery-item">
                                                        <img src="https://wqtcq1f34a8kduuv3sc0e76o-wpengine.netdna-ssl.com/wp-content/uploads/2018/06/12394537_web1_180620-pdn-goat-web.jpg" alt="Olympic National Park" />
                                                        <div class="gallery-item-caption">
                                                            <div>
                                                                <h2>Olympic National Park</h2>
                                                                <p>Mountains, rain forests, wild coastlines</p>
                                                            </div>
                                                            <a class="vimeo-popup" href="https://youtu.be/-_pT-tO9LJc"></a>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                    <div class="gallery-item">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/d/dc/MSH82_st_helens_plume_from_harrys_ridge_05-19-82.jpg" alt="Mount St. Helens" />
                                                        <div class="gallery-item-caption">
                                                            <div>
                                                                <h2>Mount St. Helens</h2>
                                                                <p>The one and only</p>
                                                            </div>
                                                            <a class="vimeo-popup" href="https://vimeo.com/171540296"></a>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Row end -->
 <!-- Row start -->
 <div class="row" style="padding-top:10px;">
                                            <div class="col-lg-12">
                                                <div class="video-gallery">
                                                    <div class="col-lg-3">
                                                        <div class="gallery-item">
                                                            <img src="https://i.pinimg.com/originals/75/f9/97/75f997ee6acf59dc51bbea05eae36677.jpg" alt="North Cascades National Park" />
                                                            <div class="gallery-item-caption">
                                                                <div>
                                                                    <h2>North Cascades</h2>
                                                                    <p>The mountains are calling</p>
                                                                </div>
                                                                <a class="vimeo-popup" href="https://www.youtube.com/embed/-_pT-tO9LJc"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                    <div class="gallery-item ">
                                                        <img src="https://cdn.davemorrowphotography.com/wp-content/uploads/2016/08/Mount-Rainier-Star-Photography-Workshops-and-Tours-Header-900x394.jpg" alt="Mt. Rainier" />
                                                        <div class="gallery-item-caption">
                                                            <div>
                                                                <h2>Mt. Rainier</h2>
                                                                <p>14410 feet of adventure</p>
                                                            </div>
                                                            <a class="vimeo-popup" href="https://www.youtube.com/embed/-_pT-tO9LJc"></a>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                    <div class="gallery-item">
                                                        <img src="https://wqtcq1f34a8kduuv3sc0e76o-wpengine.netdna-ssl.com/wp-content/uploads/2018/06/12394537_web1_180620-pdn-goat-web.jpg" alt="Olympic National Park" />
                                                        <div class="gallery-item-caption">
                                                            <div>
                                                                <h2>Olympic National Park</h2>
                                                                <p>Mountains, rain forests, wild coastlines</p>
                                                            </div>
                                                            <a class="vimeo-popup" href="https://youtu.be/-_pT-tO9LJc"></a>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                    <div class="gallery-item">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/d/dc/MSH82_st_helens_plume_from_harrys_ridge_05-19-82.jpg" alt="Mount St. Helens" />
                                                        <div class="gallery-item-caption">
                                                            <div>
                                                                <h2>Mount St. Helens</h2>
                                                                <p>The one and only</p>
                                                            </div>
                                                            <a class="vimeo-popup" href="https://vimeo.com/171540296"></a>
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

    <!-- Container-fluid ends -->
    </div>




    <?php include("include/source_js.php") ?>

    <script>
        $(document).ready(function() {
            $('.video-gallery').magnificPopup({
                delegate: 'a',
                type: 'iframe',
                gallery: {
                    enabled: true
                }
            });
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