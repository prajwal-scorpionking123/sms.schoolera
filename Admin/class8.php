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
      <!-- Breadcrumbs-->
     <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> class8 Result</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                 
                  <th>RollNo</th>				    
                  <th>English</th>				  
                  <th>Hindi</th>				  
                  <th>Marathi</th>				  
                  <th>Science</th>				  
                  <th>Maths</th>				  
                  <th>Social_Science</th>				  
				   <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  
                  <th>RollNo</th>				    
                  <th>English</th>				  
                  <th>Hindi</th>				  
                  <th>Marathi</th>				  
                  <th>Science</th>				  
                  <th>Maths</th>				  
                  <th>Social_Science</th>				  
				   <th>Action</th>
                </tr>
              </tfoot>
			  <tbody>
			     		 <?php
			require("db.php");
			 $sql="select * from rs8";
			 $q=mysqli_query($conn,$sql);
			
			  while($rows=mysqli_fetch_array($q))
			  {
				  echo "<tr>";
				  echo "<td>".$rows[0]."</td>";
				  echo "<td>".$rows[1]."</td>";
				  echo "<td>".$rows[2]."</td>";
				  echo "<td>".$rows[3]."</td>";
				  echo "<td>".$rows[4]."</td>";
				  echo "<td>".$rows[5]."</td>";
				  echo "<td>".$rows[6]."</td>";
		
				  echo "<td><input data-toggle=modal  data-target=#exampleModal1 type=submit value=delete> 
				  <form action=updateresult.php method=post><input type=hidden name=class value=rs8>
				  <input type=hidden name=roll value=".$rows[0]."><input type=submit value=update></form></td>";
			
                                                            echo "<div class=modal fade id=exampleModal1 tabindex=-1 role=dialog aria-labelledby=exampleModalLabel1 aria-hidden=true>
      <div class=modal-dialog role=document>
        <div class=modal-content>
          <div class=modal-header>
            <h5 class=modal-title id=exampleModalLabel1>Ready to Leave?</h5>
            <button class=close type=button data-dismiss=modal aria-label=Close>
              <span aria-hidden=true>×</span>
            </button>
          </div>
          <div class=modal-body> Are you sure</div>
          <div class=modal-footer>
		  <form action=deleteresult.php method=post>
		  <input type=hidden name=txtID value=". $rows[0].">
		  <input type=hidden name=txtclass value=class8>
		 
            <button class=btn btn-secondary type=submit >submit</button>
            <button class=btn btn-secondary type=button data-dismiss=modal>cancel</button>
		</form>	
            
          </div>
        </div>
      </div>
    </div>"; 
                                                              }  
			 ?>
			  </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
	 </div>
      </div>

	
      
	
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
            <a class="btn btn-primary" href="logout.php">Logout</a>
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
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
