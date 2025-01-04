<?php
session_start();
error_reporting(0);
include('connection.php');
 if(isset($_POST['submit']))
  {
    $sername=$_POST['sername'];
    $cost=$_POST['cost'];
    $query=mysqli_query($con, "insert into  services(ServiceName,Cost) value('$sername','$cost')");
    if ($query) {
      echo "<script>alert('Service has been added.');</script>"; 
      echo "<script>window.location.href = 'addservices.php'</script>";   
      $msg="";
    }
    else
    {
      echo "<script>alert('Something Went Wrong. Please try again.');</script>";    
    }
  }
?>
  
    <?php include("header.php"); ?>

  
  <body class="hold-transition sidebar-mini" style="background-image:url(images/123.jpg)">
    <div class="wrapper">  
       
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="addservices.php">Home</a></li>
                  <li class="breadcrumb-item active">Add service</li>
                </ol>
              </div>  
            </div>
          </div>
        </section>  
<!-- /.container-fluid -->
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid" >
            <div class="row offset-md-2">
             <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add service</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" style="background-image:url(images/head5.jpg)">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Service Name</label>
                      <input type="text" class="form-control" id="sername" name="sername" placeholder="Enter service name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Cost</label>
                      <input type="text" class="form-control" id="cost" name="cost" placeholder="cost">
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
     
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
	 </section>
    <?php include("footer.php"); ?>


    
</body>
</html>
