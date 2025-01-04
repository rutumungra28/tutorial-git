<?php 
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>RK Salon</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	


<?php
 include("header.php");
 ?>
 
 
  </div>
<div class="w3ls_address_mail_footer_grids">
	<div class="container">
	
	<h2 class="heading-agileinfo"><span><br>
				<i class="fa fa-users" aria-hidden="true"></i><br /></span></h2>
	<div class="col-md-15 contact-form">
				<h4 class="white-w3ls" align="center">Registration</h4><br />

				<form id="register_form" method="post">
				
				 <div class="col-lg-8 form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="fnm" placeholder="First Name" required pattern="[A-Za-z ]+" title="Enter Alphabetic A to Z Only">
                            </div>
							 
                            <div class="col-lg-8 form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="lnm" placeholder="Last Name" required pattern="[A-Za-z ]+" title="Enter Alphabetic A to Z Only">
                            </div>
							
							<div class="col-lg-8 form-group">
                                <label>Email</label>
                                <input class="form-control"  name="email" placeholder="Email"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter valid format :ex - abc@gmail.com">
                            </div>
							
							 <div class="col-lg-8 form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" id="name" required pattern="[A-Za-z0-9._%+-@$%&*]{6,20}" title="Enter greater than 6 digit">
                            </div>
							 <div class="col-lg-8 form-group">
                                <label>Confirm Password</label>
                                <input class="form-control" type="password" name="cpassword" placeholder="Conform Password" id="name" required="">
                            </div>
                       
                        
                            <div class="col-lg-8 form-group">
                                <label>Phone</label>
                                <input class="form-control" type="text" name="mno" placeholder="Phone Number*" required pattern="[0-9]{10}" title="Enter Numeric value (must be 10 digit)" maxlength="10">
                            </div>

                   
	          
				 <input type="submit" class="btn submit mt-3" name="submit" value="register &raquo;&raquo;">
		               </form>
					
	</div>
</div>


<?php
if(isset($_POST['submit']))
{
     $fnm=$_POST['fnm'];
	 $lnm=$_POST['lnm'];
	 $email=$_POST['email'];
	 $pass=$_POST['password'];
	 $cpass=$_POST['cpassword'];
	 $phone=$_POST['mno'];
	 
	 
	  $qry="insert into   
	  register(fname,lname,email,password,cpwd,mno,role)
	  values('$fnm','$lnm','$email','$pass','$cpass','$phone','user')";
	//  echo $qry;
	  $res=mysqli_query($con,$qry);
	    // mysqli_error($res);
		  echo $res; 
		  if($res)
		  {
		     
			 echo "<script>alert('inserted')</script>";
			
			 
			 echo "<script>window.location.href='login.php'</script>";
			 
			 
			 
		  }
		  else
	      {
	         echo "<script>alert('Not Register Successfully...');</script>";
	      }

		 }
		  ?>
		  

<?php
 include("footer.php");
 ?>

 