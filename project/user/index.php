

   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container"s>
	<h1 class="font-weight-bold" style="color:#CCCCCC">WALCOME TO USER</h1>
      <!--   <a class="navbar-brand" href="index.php">RK<span>Salon</span></a>  -->   
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>   



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RK Salon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">

 
  </head>     



<?php session_start(); ?>

<!-- <body>  -->

<body class="hold-transition login-page" style="background-color:#9999CC"> 
    <!-- Logo box -->
    <div class="login-box">        
      
       <div class="card">           
        <div class="card-body login-card-body">    
          <div class="login-logo">
            <p><b>
            </b></p><!-- Link can also be removed -->
            <center><img src="images/about_img1.jpg" width="150" height="130" class="user-image" alt="User Image"/></center>
          </div>
          <p class="login-box-msg"><b> <h4> <center> Welcome </center></h4> </b></p>

<!-- Login Form Start-->
                            <div class="login-form"> 
                            <form method="post" id="login">
                              
                                <div class="form-group col-md-12">
                                <label>Email</label>
                                <input class="form-control"  name="email" placeholder="Email"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter valid format :ex - abc@gmail.com">
                            </div>
							
							  <div class="form-group col-md-12">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" id="name" required pattern="[A-Za-z0-9._%+-@$%&*]{6,20}" title="Enter greater than 6 digit">
                            </div>
							
							 <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember"  <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?>>
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              
             </div>
		 <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
        </div>     
							
					               
   </form>

							</div>
							</div>
							</div>
							</div>
<!-- Login Form End-->
 <?php

	if(isset($_POST['submit']))
	{
		include "connection.php";
		
		$email=$_POST['email'];
		
		$pass=$_POST['password'];
		
		$q="select * from register where email='$email' and Password='$pass'";
		$qq=mysqli_query($con,$q);
		$rec=mysqli_fetch_array($qq);
		
		
		if($rec[2]==$email && $rec[3]==$pass && $rec[4]=='user')
		{
		  $_SESSION['email']=$rec[2];
			$_SESSION['user']=$rec[1];
			
			
			echo "<script>alert('Successfully Login'); location.href='index1.php';  </script>";
		}
	else if($email="admin@gmail.com" && $pass=="admin1" && $rec[2]!='user')
		{
		
				echo "<script> location.href='index1.php';</script>";
		}
		else
		{
			echo "<script>alert('could not match');</script>";
		}
		
	}
?>
</body>
</html>
