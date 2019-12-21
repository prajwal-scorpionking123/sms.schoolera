<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SchoolEra</title>
      <link rel="icon" href="logo1.png">
  <!--////////->
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <!--HHH-->
 <style>
 ul a:hover
 { 
   background-color:#;
 }
 
 </style>

  <!--HHH-->
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
    <div class="card card-register mx-auto mt-10">
      <div class="card-header">Admision Form</div>
      <div class="card-body">
        <form action="./ctr_stud_add.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="InputName">First name</label>
                <input class="form-control" name="txtFname" id="FirstName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required>
              </div>
              <div class="col-md-6">
                <label for="MiddleName">Middle name</label>
                <input class="form-control" id="MiddleName" type="text" aria-describedby="nameHelp" placeholder="Enter Middle name" name="txtMname" required>
              </div>
			   </div>
			    </div>
			   <div class="form-group">
              <div class="form-row">
			  <div class="col-md-6">
                <label for="LastName">Last name</label>
                <input class="form-control" id="LastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name" name="txtLname" required>
              </div>  
			  <div class="col-md-6">
                <label for="">Mother Name</label>
                <input class="form-control" id="M_Name" type="text" aria-describedby="" placeholder="EnterMotherName" name="txt_M" required>
              </div>  
			  
			</div>
			</div>
      
		   <div class="form-group">
            <div class="form-row">
			  <div class="col-md-3">
                <label for="DOA">Date of Admision</label>
                <input class="form-control" id="DOA" type="text" aria-describedby="DateHelp" placeholder="dd/mm/yyyy" name="txtDOA" required>
            </div>
			<div class="col-md-3">
                <label for="DOB">Date of Birth</label>
                <input class="form-control" id="DOB" type="text" aria-describedby="DateHelp" placeholder="dd/mm/yyyy" name="txtDOB" required>
            </div>
			 <div class="col-md-3">
			  <label for="gender">Gender</label>
			  <select class="form-control" id="gender" name="txtgen">
              <option>Male</option>
              <option>Female</option>
              </select>	
             </div>	
               			 
		 </div>
		</div>
          <div class="form-group">
            <div class="form-row">
            <div class="col-md-6">
            <label for="Address">Address</label>
            <input class="form-control" id="Address" rows="2" cols="50" aria-describedby="addressHelp" placeholder="Enter Address" name="txtadd" required>
			
          </div>
		   <div class="col-md-3">
		    <label for="Mob">Mobile No</label>
			<input class="form-control"type="text" id="Mob" aria-describedby="mobHelp" placeholder="Enter MobileNo" name="txtmob" required>
			</div>
                 <div class="col-md-3">
		    <label for="">CLASS</label>
			<input class="form-control" type="text" id="" aria-describedby="" placeholder="class" name="txtclass" required>
			</div>
            </div>
          </div>

			 <div class="form-group">
            <div class="form-row">
			 <div class="col-md-6">
		    <label for="">Aadhar_ID</label>
			<input class="form-control" type="text" id="" aria-describedby="" placeholder="Aadhar_ID" name="txt_Aadhar" required>
			</div>
			 <div class="col-md-3">
		    <label for="">Caste</label>
			<input class="form-control" type="text" id="" aria-describedby="" placeholder="Caste" name="txt_Caste" required>
			</div>
			 <div class="col-md-3">
		    <label for="">BloodGroup</label>
			<input class="form-control" type="text" id="" aria-describedby="" placeholder="BloodGroup" name="txt_BLG" required>
			</div>
              
			</div>
			</div>
         <Button type="submit" name="cmd" class="btn btn-primary btn-block">Submit</button>
        </form>
        </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
