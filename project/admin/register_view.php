
<!DOCTYPE html>
<html lang="en">
<?php
include "head.php";
?>
<body class="hold-transition sidebar-mini">
  <div class="wrapper"> 

<?php
include"header.php";
?>


<!-- <body >-->


<div class="content-wrapper" style="background-image:url(images/head2.jpg)"> 
      <!-- Content Header (Page header) -->
      <section class="content-header">
         <div class="container-fluid">
          <div class="row mb-2">
           <!-- <div class="col-sm-6">
              <h1>Manage Services</h1>
            </div> -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="addservices.php">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header" style="background-image:url(images/1234.jpg)">
                  <h3 class="card-title">DataTable with Register</h3>
                </div>

<!--<div style="background-color:#CCFFFF;"> 
<div style="margin-top:10%; margin-bottom:20%; margin-left:10%; margin-right:10%;">

	<caption style="color: black; font-family: Arial Black; font-size: x-large; margin-right:50px;">
	<h1 align="center">Register View</h1></caption>    -->
           <!--   <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead> 
                      <tr> 
                        <th>#</th> 
                        <th>First Name</th> 
                        <th>Last Name</th>
						<th>Email</th> 
                        <th>Password</th>
						<th>Cpwd</th>
                        <th>Phone</th>
                        <th>Action</th> 
                      </tr> 
                    </thead> -->
					
					
					
					 <div class="card-body" style="background-image:url(images/head3.jpg)">
               <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th> 
                      <th>First Name</th>
					   <th>Last Name</th> 
					   <th>Email</th> 
                      <th>Password</th> 
                      <th>Cpwd</th>
					  <th>Phone</th>
                      <th>Action</th> 
                    </tr>
                  </thead>
                  <tbody>
					 <?php
					 include "connection.php";
                    $ret=mysqli_query($con,"select *from  register");
                    $cnt=1;
                    while ($row=mysqli_fetch_array($ret)) {
                      ?>
                      <tr>
                        <th scope="row"><?php echo $cnt;?></th>
                        <td><?php  echo $row['1'];?></td>
						<td><?php  echo $row['2'];?></td>
						<td><?php  echo $row['3'];?></td>
						<td><?php  echo $row['4'];?></td>
						<td><?php  echo $row['5'];?></td>
						<td><?php  echo $row['6'];?></td>
						<td><?php  echo $row['7'];?></td>
						
						
                      
                      </tr>   
                      <?php 
                      $cnt=$cnt+1;
                    }?>

                  </tbody>
                </table>
					
					
	
</div>	
</body>
</html>

<?php

include "footer.php";

?>