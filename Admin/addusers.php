
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Administrator</title>

    <!-- Bootstrap core CSS -->
    <link href="file/bootstrap.min.css" rel="stylesheet">
   	<link href="file/signin.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="file/cover.css" rel="stylesheet">
  </head>

  <body>
   
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">
         
          <div class="masthead clearfix">
            <div class="inner">
                <center><h1 style="font-size:100px;"><strong><i>SchoolEra</i></strong></h1></center>         
            </div>
          </div>
         <div class="inner cover">
            <h1 class="cover-heading"></h1>
	   
	   <h1 class="form-signin-heading">signin</h1>
       <form action="useradd.php" method="post" class="form-signin">
	   	   <input type="text" placeholder="First name" name="Fname" class="form-control" required autofocus>
	   <input type="text" placeholder="Last name" name="Sname" class="form-control" required autofocus>
	   <input type="text" placeholder="username" name="uname" class="form-control" required autofocus>
	   <input type="password" placeholder="password" name="password" class="form-control" required autofocus>
	   <input type="submit" class="btn btn-lg btn-primary btn-block">
	   <input type="reset" class="btn btn-lg btn-primary btn-block">
	   </form>
       
        
          <div class="mastfoot">
            <div class="inner">
          <p>SchoolEra.com <a href="Info.html">by PRAJWAL PATIL AND GROUP</a></p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="file/jquery.min.js"><\/script>')</script>
    <script src="file/popper.min.js"></script>
    <script src="file/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
