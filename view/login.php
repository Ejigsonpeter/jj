
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin Login</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="css/skins/square/grey.css" rel="stylesheet">
	<link href="css/wizard.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body id="admission_bg">

	<nav id="menu" class="fake_menu"></nav>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->

	<div id="form_container" class="clearfix">
		<figure>
			<a href="index-2.html"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
		</figure>
		<div id="wizard_container">
			<div id="top-wizard">
				<div id="progressbar"></div>
			</div>
			<!-- /top-wizard -->
			<center><img src = "a.png"/ width="100" height="100" ></center>
			<form  id="wrapped" method="POST" action = "control/login.php" enctype="multipart/form-data">
				<input id="website" name="website" type="text" value="">
				<!-- Leave for security protection, read docs for details -->





						<div class="form-group">
							<input type="text" name="Email" class="form-control required" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="password" name="Password" class="form-control required" placeholder="Password">
						</div>



						<div class="form-group terms">
							<input name="terms" type="checkbox" class="icheck required" value="yes">
							<label>click to  <a href="#" data-toggle="modal" data-target="#terms-txt">save login details</a> </label>
						</div>

						<div id="bottom-wizard">

								<button type="submit" name="submit" class="submit">Login</button>
							</div>
            </form>
					<!-- <>/step-->

				<!-- /middle-wizard -->

				<!-- /bottom-wizard -->
			</form>
		</div>
		<!-- /Wizard container -->
	</div>
	<!-- /Form_container -->

	<!-- Modal terms -->

	<div class="copy">© 2017 Ojlaury </div>
	<!-- /.modal -->

	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>

	<!-- SPECIFIC SCRIPTS -->
	<script src="js/jquery-ui-1.8.22.min.js"></script>
	<script src="js/jquery.wizard.js"></script>
	<script src="js/jquery.validate.js"></script>

</body>
</html>
