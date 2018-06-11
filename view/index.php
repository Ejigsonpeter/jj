<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <title>Users dashboard</title>

   <!-- Favicons-->
   <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
   <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
   <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
   <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
   <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

   <!-- Bootstrap core CSS-->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <!-- Main styles -->
   <link href="css/admin.css" rel="stylesheet">
   <!-- Icon fonts-->
   <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <!-- Plugin styles -->
   <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
   <!-- Your custom styles -->
   <link href="css/custom.css" rel="stylesheet">

 </head>

 <body class="fixed-nav sticky-footer" id="page-top">
   <!-- Navigation-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
     <a class="navbar-brand" href="index.php"><img src="img/logo.png" data-retina="true" alt="" width="163" height="36"></a>
     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
           <a class="nav-link" href="index.php">
             <i class="fa fa-fw fa-dashboard"></i>
             <span class="nav-link-text">Dashboard</span>
           </a>
         </li>
 		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
           <a class="nav-link" href="messages.php">
             <i class="fa fa-fw fa-envelope-open"></i>
             <span class="nav-link-text">Courses</span>
           </a>
         </li>
 		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookings">
           <a class="nav-link" href="courses.php">
             <i class="fa fa-fw fa-archive"></i>
             <span class="nav-link-text">Quiz<span class="badge badge-pill badge-primary">6 New</span></span>
           </a>
         </li>

         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookings">
                <a class="nav-link" href="user-profile.php">
                  <i class="fa fa-fw fa-archive"></i>
                  <span class="nav-link-text">User profile<span class="badge badge-pill badge-primary"></span></span>
                </a>
              </li>


       </ul>
       <ul class="navbar-nav sidenav-toggler">
         <li class="nav-item">
           <a class="nav-link text-center" id="sidenavToggler">
             <i class="fa fa-fw fa-angle-left"></i>
           </a>
         </li>
       </ul>
       <ul class="navbar-nav ml-auto">
         <li class="nav-item">
           <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
             <i class="fa fa-fw fa-sign-out"></i>Logout</a>
         </li>
       </ul>
     </div>
   </nav>
   <!-- /Navigation-->
   <div class="content-wrapper">
     <div class="container-fluid">
       <!-- Breadcrumbs-->
       <ol class="breadcrumb">
         <li class="breadcrumb-item">
           <a href="#">Dashboard</a>
         </li>
         <li class="breadcrumb-item active">My Dashboard</li>
       </ol>
 	  <!-- Icon Cards-->
       <div class="row">
         <div class="col-xl-3 col-sm-6 mb-3">
           <div class="card dashboard text-white bg-primary o-hidden h-100">
             <div class="card-body">
               <div class="card-body-icon">
                 <i class="fa fa-fw fa-envelope-open"></i>
               </div>
               <div class="mr-5"><h5> &nbsp; Messages!</h5></div>
             </div>
             <a class="card-footer text-white clearfix small z-1" href="messages.php">
               <span class="float-left">View Details</span>
               <span class="float-right">
                 <i class="fa fa-angle-right"></i>
               </span>
             </a>
           </div>
         </div>
         <div class="col-xl-3 col-sm-6 mb-3">
           <div class="card dashboard text-white bg-warning o-hidden h-100">
             <div class="card-body">
               <div class="card-body-icon">
                 <i class="fa fa-fw fa-star"></i>
               </div>
 				<div class="mr-5"><h5> Students!</h5></div>
             </div>
             <a class="card-footer text-white clearfix small z-1" href="tables.php">
               <span class="float-left">View Details</span>
               <span class="float-right">
                 <i class="fa fa-angle-right"></i>
               </span>
             </a>
           </div>
         </div>
         <div class="col-xl-3 col-sm-6 mb-3">
           <div class="card dashboard text-white bg-success o-hidden h-100">
             <div class="card-body">
               <div class="card-body-icon">
                 <i class="fa fa-fw fa-calendar-check-o"></i>
               </div>
               <div class="mr-5"><h5>10  Courses!</h5></div>
             </div>
             <a class="card-footer text-white clearfix small z-1" href="bookings.php">
               <span class="float-left">View Details</span>
               <span class="float-right">
                 <i class="fa fa-angle-right"></i>
               </span>
             </a>
           </div>
         </div>
         <div class="col-xl-3 col-sm-6 mb-3">
           <div class="card dashboard text-white bg-danger o-hidden h-100">
             <div class="card-body">
               <div class="card-body-icon">
                 <i class="fa fa-fw fa-heart"></i>
               </div>
               <div class="mr-5"><h5>10 Teachers!</h5></div>
             </div>
             <a class="card-footer text-white clearfix small z-1" href="bookmarks.php">
               <span class="float-left">View Details</span>
               <span class="float-right">
                 <i class="fa fa-angle-right"></i>
               </span>
             </a>
           </div>
         </div>
 		</div>
 		<!-- /cards -->
     <div class="card mb-3">
       <div class="card-header">
         <i class="fa fa-table"></i> STUDENT DATABASE</div>
       <div class="card-body">
         <div class="table-responsive">

             <h1>WELCOME TO ADMINISTRATOR DASHBOARD </h1>


         </div>
       </div>
       <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
     </div>
   <!-- /tables-->

 	  </div>
 	  <!-- /.container-fluid-->
    	</div>
     <!-- /.container-wrapper-->
     <footer class="sticky-footer">
       <div class="container">
         <div class="text-center">
           <small>Copyright © OjLaury 2018</small>
         </div>
       </div>
     </footer>
     <!-- Scroll to Top Button-->
     <a class="scroll-to-top rounded" href="#page-top">
       <i class="fa fa-angle-up"></i>
     </a>
     <!-- Logout Modal-->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
             </button>
           </div>
           <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
           <div class="modal-footer">
             <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
             <a class="btn btn-primary" href="login.php">Logout</a>
           </div>
         </div>
       </div>
     </div>
     <!-- Bootstrap core JavaScript-->
     <script src="vendor/jquery/jquery.min.js"></script>
     <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- Core plugin JavaScript-->
     <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
     <!-- Page level plugin JavaScript-->
     <script src="vendor/chart.js/Chart.js"></script>
     <script src="vendor/datatables/jquery.dataTables.js"></script>
     <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
 	<script src="vendor/jquery.selectbox-0.2.js"></script>
 	<script src="vendor/retina-replace.min.js"></script>
 	<script src="vendor/jquery.magnific-popup.min.js"></script>
     <!-- Custom scripts for all pages-->
     <script src="js/admin.js"></script>
 	<!-- Custom scripts for this page-->
     <script src="js/admin-charts.js"></script>

 </body>


 </html>
