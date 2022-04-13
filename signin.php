<?php
//include ("include/session.php");
include("include/db_connection.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
  
    $myusername = pg_escape_string($db, $_POST['username']);
    $mypassword = pg_escape_string($db, $_POST['password']);
    // echo $myusername;
    $sql = "SELECT userid FROM mst_login WHERE username = '$myusername' and password = '$mypassword'";

    // exit;
    $result = pg_query($db, $sql);
    $row = pg_fetch_array($result);
    //     $active = $row['userId'];
    // echo $result;

    $count = pg_num_rows($result);
    // echo $count;

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        //    session_register("myusername");
        //  echo $mypassword;
        //  echo $myusername;
        $_SESSION['username'] = $myusername;

         header("location:index.php");
        // echo 1;
        //=exit;


    } else {
        $error = "Your Login Name or Password is invalid";
    }
    // exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>NIOT - Signin</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">
    <?php include("include/source_css.php") ?>

</head>

<body>
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="login-card card-block">

                        <div class="text-center">
                            <img src="assets/images/niot_logo.png" alt="logo">
                        </div>
                        <h3 class="text-center txt-primary">
                            Sign In
                        </h3>
                        <form class="md-float-material" action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control" name="username" required="required" autofocus/>
                                        <label>User Name</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                        <input type="password" class="md-form-control" name="password" required="required" />
                                        <label>Password</label>
                                    </div>
                                </div>
                                <?php echo $error; ?>
                            </div>
                            <div class="row">
                                <div class="col-xs-10 offset-xs-1">
                                    <button type="submit" style="border-radius: 25px;" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                </div>
                            </div>
                        </form>
                        <!-- <div class="card-footer"> -->
                        <!-- <div class="col-sm-12 col-xs-12 text-center">
							<span class="text-muted">Don't have an account?</span>
							<a href="register2.html" class="f-w-600 p-l-5">Sign up Now</a>
						</div> -->

                        <!-- </div> -->

                        <!-- end of form -->
                    </div>
                    <!-- end of login-card -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

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
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/plugins/tether/dist/js/tether.min.js"></script>

    <!-- Required Fremwork -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- waves effects.js -->
    <script src="assets/plugins/Waves/waves.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets/pages/elements.js"></script>



</body>

</html>