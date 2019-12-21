
<?php
error_reporting(E_PARSE |E_ERROR);

?>
<html>
<head>
<title> insert data in class </title>
<link rel="icon" href="logo1.png">
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<style>
 ul a:hover
 { 
   background-color:#;
 }
 
 </style>

</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav style="background-color:black;" class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#"><h4><i><strong>SchoolEra</strong></i></h4></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul  style="background-color:black;" class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i  class="fa fa-fw fa-dashboard"></i>
            <span  class="nav-link-text">DASHBOARD</span>
          </a>
        </li>
      
 
		 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">STUDENTS</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="AdmisionForm.php">Admit Student</a>
            </li>
            <li>
              <a href="./student_record.php">View Students</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">TEACHERS</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="./ManageStaff.php">View Teachers</a>
            </li>
            <li>
              <a href="./AddStaff.html">Admit Teacher</a>
            </li>
           
          </ul>
        </li>
		      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">CLASSES & SUBJECTS</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="./subject_record.php">View Subjects</a>
            </li>
            <li>
              <a href="./class_record.php">View Classes</a>
            </li>
            <li>
              <a href="./AddClassFrm.php">Add New Class</a>
            </li>
            <li>
              <a href="./AddSubFrm.php">Add New Subject</a>
            </li>
          </ul>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages2" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Result</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages2">
            <li>
              <a href="AddResult.php">Add Result</a>
            </li>
            <li>
              <a href="ManageResult.php">ManageResult</a>
            </li>
          </ul>
        </li>
		   <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="./feedback_record.php">
            <i  class="fa fa-fw fa-envelope"></i>
            <span  class="nav-link-text">FEEDBACK</span>
          </a>
        </li>
      </ul>
      <ul  style="background-color:black;"class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
	  
      <ul class="navbar-nav ml-auto">
	   
	   <li class="nav-item">
          <a href="cal.html" class="nav-link" data-toggle=""  data-target="#">
            <i class="fa fa-fw fa-calendar-o"></i>Calender</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal"  data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">class</li>
      </ol>


<div class="container">
    <div class="card card-register mx-auto mt-10">
      <div class="card-header">Class Form</div>
      <div class="card-body">
<form  action="./ctr_class_add.php" method="post" >
<label>CLASS ROOM NUMBER:</label><input class="form-control" type="text" name="classroomno" required>
<label>CLASS TEACHER:</label><input class="form-control" type="text" name="teach" required>
<label>ClASS:</label><input class ="form-control" type="text" name="class" required ><br>
<input class="btn btn-primary btn-block" type="submit" value="Insert" >
<input class="btn btn-primary btn-block" type="reset" value="Reset">
</form>
</div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer style="background-color:black;color:white;" class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright©SchoolEra@2k18</small>
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
            <a class="btn btn-primary" href="Logout.php">Logout</a>
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
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>

</body>
</html>