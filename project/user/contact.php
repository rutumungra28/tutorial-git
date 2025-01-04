<?php
include "header.php";
?>

<div class="w3ls-banner-1" style="background-image:url(images/head2.jpg)"> 
 <div style="margin:5px 0px; padding:150px 0px;">
 <h3><marquee behavior="alternate" style="color:#000000; font-size:50px; font-weight:600s;">Contact Now...</marquee></h3>   
      </div>
</div>


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
<body>
 <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg" style="background-image:url(images/head1.jpg)">     
      <div class="container">
	 
         <h2></h2><br>
        <div class="section-title">
		<h2></h2>
          <h2>Contact</h2>
          <!--p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga</p-->
        </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
            <form action="#" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                 <input type="name" class="form-control" name="nm" id="name" placeholder="Your name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading" style="font-family:"Times New Roman", Times, serif">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center">
			  <input type="submit" value="submit" name="submit">
            </form>
          </div>


        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com<br>contact@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                </div>
              </div>
            </div>
        </div>

      </div>
    </section> <!-- End Contact Section -->
	<?php
if(isset($_POST["submit"]))
{
	include "connection.php";
	$name=$_POST["nm"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];

    $qry="insert into
    contact(name,email,subject,message)
    VALUES('$name','$email','$subject','$message')";

    $a=mysqli_query($con,$qry);
    if($a>0)
    {
    	echo "<script>alert('success'); location.href='index1.php';</script>" ; 
    }	                          

    else
    {
     echo "not" ;
    }


    }
?>

<?php
include "footer.php";
?>

