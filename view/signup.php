<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="OJLAURY a modern educational site template">

    <title>OJLAURY | Modern Educational site template</title>

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

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->

	<div id="form_container" class="clearfix">
		<figure>
			<a href="index.html"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
		</figure>
		<div id="wizard_container">
			<div id="top-wizard">
				<div id="progressbar"></div>
			</div>
			<!-- /top-wizard -->
			<form  method="POST" action="admission_send.php" enctype="multipart/form-data">
				<input id="website" name="website" type="text" value="">
				<!-- Leave for security protection, read docs for details -->
				<div id="middle-wizard">
					<div class="step">
						<div id="intro">
							<figure><img src="img/wizard_intro_icon.svg" alt=""></figure>
							<h1>Welcome!</h1>
							<p>welcome to our personalized learning system. please the form appropriately and answer the question given to determine your learning style </p>
							<p><strong>click forward to continue</strong></p>
						</div>
					</div>

					<div class="step">
						<h3 class="main_question"><strong>1/3</strong>Please fill with your details</h3>
						<div class="form-group">
							<input type="text" name="firstname" class="form-control required" placeholder="First name">
						</div>
						<div class="form-group">
							<input type="text" name="lastname" class="form-control required" placeholder="Last name">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control required" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="number" name="phoneno" class="form-control" placeholder="Your Telephone">
						</div>
						<div class="form-group">
							<input type="date" name="dob" class="form-control" placeholder="Date of birth">
						</div>
						<div class="form-group select">
							<div class="styled-select">
								<select class="required" name="level" id="education_apply">
									<option value="" selected="">Select your education level</option>
									<option value="Less than high school">Less than high school</option>
									<option value="High school diploma or equivalent">High school diploma or equivalent</option>
									<option value="Some college no degree">Some college, no degree</option>
									<option value="Bachelor degree">Bachelor’s degree</option>
									<option value="Doctoral or professional degree">Doctoral or professional degree</option>
								</select>
							</div>
						</div>
						<div class="form-group radio_input">
							<label><input type="radio" value="Male" checked name="gender" class="icheck">Male</label>
							<label><input type="radio" value="Female" name="gender" class="icheck">Female</label>
						</div>
					</div>
					<!-- /step-->

					<div class="step">
						<h3 class="main_question"><strong>2/3</strong>Please fill your address</h3>
						<div class="form-group">
							<input type="text" name="address" class="form-control required" placeholder="Address">
						</div>
						<div class="form-group">
							<input type="text" name="city" class="form-control required" placeholder="City">
						</div>

						<div class="form-group">
							<div class="styled-select">
								<select class="required" name="country">
									<option value="" selected>Select your country</option>
									<option value="Nigeria">Nigeria</option>
									<option value="Ghana">Ghana</option>
									<option value="Cameroun">Cameroun</option>
									<option value="Ivory Coast">Ivory Coast</option>
								</select>
							</div>
						</div>
            <div class="form-group">
							<input type="file" name="upload" class="form-control required" placeholder="upload photo">
						</div>
					</div>
					<!-- /step-->
          <div class="step">

                    <div class="form-group radio_input">
                      <label>  1. I prefer traditional curriculum and step by step approach in learning  </label>
                    <label><input type="radio" name="q1" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
                    <label><input type="radio" name="q1" value="no"required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
                    <label><input type="radio" name="q1" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
        						</div>

                    <div class="form-group radio_input">
                      <label><label>2. I  Like using past experiences and standard ways to solve problems &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
                      <label><input type="radio" name="q2" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
                      <label><input type="radio" name="q2" value="no" required="" class="icheck" >no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
                      <label><input type="radio" name="q2" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>

                      <label><label>3. I Enjoy applying what is already known by giving examples and details	  &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
                      <label><input type="radio" name="q3" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
                      <label><input type="radio" name="q3" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
                      <label><input type="radio" name="q3" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
                    </div>
                    <div class="form-group radio_input">
                      <label><label>4. I  May ignore and not trust  inspirations from instructors &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
                      <label><input type="radio" name="q4" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
                      <label><input type="radio" name="q4" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
                      <label><input type="radio" name="q4" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
                    </div>
                    <div class="form-group radio_input">
                      <label><label>5.I  Likes suggestions that are straightforward and feasible  &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
                      <label><input type="radio" name="q5" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
                      <label><input type="radio" name="q5" value="no" required=""  class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
                      <label><input type="radio" name="q5" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
                    </div>
					</div>
					<!-- /step-->

          <div class="step">
            <div class="form-group radio_input">
              <label><label>6.I  am inclined to follow an agenda  &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q6" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q6" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q6" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>7.I Like to do practical things and prefers realistic applications &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q7" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q7" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q7" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>8.I  Seldom make errors of facts. &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q8" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q8" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q8" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>9. I  Focus on conceptual understanding and the use of self-instructional methods for learning  &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q9" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q9" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q9" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>10. I  Like solving new and complex problems &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q10" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q10" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q10" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
					</div>
					<!-- /step-->
          <div class="step">
            <div class="form-group radio_input">
              <label><label>11. I  Enjoy learning new skills more than using them. &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q11" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q11" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q11" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>12. I am Willing to follow instructor insights and rely on imagination. &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q12" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q12" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q12" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>13. I Like novel and unusual suggestions. &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q13" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q13" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q13" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>14. I Prefer change and proceeds with bursts of  energy to follow global schemes &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q14" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q14" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q14" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>15. I  Like to do innovative things. &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q15" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q15" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q15" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
          </div>
          <!-- /step-->
          <div class="step">
            <div class="form-group radio_input">
              <label><label>16. I  May make errors of facts &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q16" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q16" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q16" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>17. I prefer to Use simulations and case studies together with small group work for teaching. &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q17" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q17" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q17" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>18. I like to Use values to reach conclusions. &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q18" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q18" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q18" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>19. I Works best in harmony.g &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q19" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q19" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q19" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>20. I tend to be sympathetic and have difficulty providing criticism. &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q20" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q20" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q20" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>21. I  Feel rewarded when people's needs are met. &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q21" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q21" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q21" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
          </div>
          <!-- /step-->
          <div class="step">

            <div class="form-group radio_input">
              <label><label>22. I  Seeks involvement with people. &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q22" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q22" value="no" required ="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q22" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>23. I  always Present points of agreement first &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q23" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q23" value="no"required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q23" value="not Sure"required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>24. I am sociable and friendly &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q24" value="yes"required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q24" value="no"required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q24" value="not Sure"required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>25. I  prefer teacher-directed instructional approaches and peer tutoring. &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q25" value="yes"required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q25" value="no"required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q25" value="not Sure"required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>26. I  Use logical analysis to reach conclusions &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q26" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q26" value="no"required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q26" value="not Sure"required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>27. I  Can work without harmony &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q27" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q27" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q27" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
          </div>

					<!-- /step-->

					<!-- /step-->



					<div class="submit step">

            <div class="form-group radio_input">
              <label><label>28. I  am firm-minded and has little trouble giving criticism &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q28" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q28" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q28" value="not Sure" required="" class="icheck">>not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>29. I  Feel rewarded when task is done. &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q29" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q29" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q29" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>30. I tend to Seek involvement with tasks. &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q30" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q30" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q30" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>31. I  Presents goals and objectives first. &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q31" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q31" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q31" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
            <div class="form-group radio_input">
              <label><label>32. I  Tend to be brief and concise. &nbsp;&nbsp;&nbsp;&nbsp; </label></label>
              <label><input type="radio" name="q32" value="yes" required="" class="icheck">yes &nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q32" value="no" required="" class="icheck">no&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
              <label><input type="radio" name="q32" value="not Sure" required="" class="icheck">not sure&nbsp;&nbsp;&nbsp;&nbsp;</input></label>
            </div>
						<div class="form-group terms">
							<input name="terms" type="checkbox" class="icheck required" value="yes">
							<label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?</label>
						</div>
					</div>
					<!-- /step-->
				</div>
				<!-- /middle-wizard -->
				<div id="bottom-wizard">
					<button type="button" name="backward" class="backward">Backward </button>
					<button type="button" name="forward" class="forward">Forward</button>
					<button type="submit" name="submit" class="submit">Submit</button>
				</div>
				<!-- /bottom-wizard -->
			</form>
		</div>
		<!-- /Wizard container -->
	</div>
	<!-- /Form_container -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
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
	<script src="js/admission_func.js"></script>

</body>

</html>
