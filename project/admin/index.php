

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container"s>
	<h1 class="font-weight-bold" style="color:#CCCCCC">WALCOME TO ADMIN</h1>
    <!--    <a class="navbar-brand" href="index.php">RK<span>Salon</span></a>   -->
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

 <body class="hold-transition login-page"> 
    <!-- Logo box -->
    <div class="login-box">    
      <!-- /.login-logo -->
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
    <form action="" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="user_name" placeholder="Username" autofocus required="required">
        </div>
        <div class="form-group">
            <input type="password" name="user_password" class="form-control" placeholder="Password" required="required">
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
<!-- Login Form End-->
<?php
$connect=mysqli_connect("localhost","root","","salon");

if(isset($_POST['submit']))
{
  $user_name=$_POST['user_name'];
  $user_password=$_POST['user_password'];

 
  $query="select * from admin_login where user_name='$user_name' and user_password='$user_password'";
  $result=mysqli_query($connect,$query)or die(mysqli_error($connect));
 
   if($a=mysqli_fetch_array($result))
       {
          
           $_SESSION['USER']=$user_name;
           echo"<script>alert('You have Successfully Logged in.');window.location.assign('index1.php');</script>";
       }
   
   else{
        echo"<script>alert('You Entered User Name and Password are not matched.');window.location.assign('login.php');</script>";
   
       }
}
?>   

 

</body>
</html>
