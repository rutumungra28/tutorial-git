<?php
session_start();
error_reporting(0);
include('connection.php');
//if (strlen($_SESSION['sid']==0)) {
  //header('location:logout.php');
//} 
?>
<!DOCTYPE html>
<html>
<?php include("head.php"); ?>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include("header.php"); ?>

<!--  <div class="w3ls-banner-1" style="background-image:url(images/reg.jpg)"> 
<div style="margin:5px 0px; padding:100px 0px;">
      <h3><marquee behavior="alternate" style="color:#FFFFFF; font-size:35px; font-weight:50s;">All Appointment....</marquee></h3>
      </div>
</div> -->



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid" style="background-image:url(images/head8.png)">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Appointments</h1>
            </div>
      <!--      <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">New Appointments</li>
              </ol>
            </div>
          </div>   -->
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header" style="background-image:url(images/head8.png)">
                  <h3 class="card-title">DataTable with New Appointment</h3>
                </div>
                <!-- /.card-header -->
                <div id="editData" class="modal fade" style="background-image:url(images/head8.png)">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">New Appointment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" id="info_update" style="background-image:url(images/head8.png)">
                       <?php include("view_appointment.php");?>
                     </div>
                     <div class="modal-footer ">
                     </div>
                     <!-- /.modal-content -->
                   </div>
                   <!-- /.modal-dialog -->
                 </div>
                 <!-- /.modal -->
               </div>
               <!--   end modal -->
               <div class="card-body">
                <table id="example1" class="table table-bordered table-hover" style="background-image:url(images/head8.png)">
                  <thead> 
                    <tr> 
                      <th>#</th> 
                      <th> Appointment Number</th> 
                      <th>Name</th><th>Mobile Number</th> 
                      <th>Appointment Date</th>
                      <th>Appointment Time</th>
                      <th>Action</th> 
                    </tr> 
                  </thead> 
                  <tbody>
                    <?php
                    $ret=mysqli_query($con,"select *from  appointment where Status=''");
                    $cnt=1;
                    while ($row=mysqli_fetch_array($ret)) {

                      ?>

                      <tr> 
                        <th scope="row"><?php echo $cnt;?></th> 
                        <td><?php  echo $row['aptnumber'];?></td> 
                        <td><?php  echo $row['name'];?></td>
                        <td><?php  echo $row['phonenumber'];?></td>
                        <td><?php  echo $row['aptdate'];?></td> 
                        <td><?php  echo $row['apttime'];?></td> 
                        <td><a href="#" class=" edit_data" id="<?php echo  $row['id']; ?>" title="click for edit">View</a></td> 
                      </tr>   
                      <?php 
                      $cnt=$cnt+1;
                    }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("footer.php"); ?>

</div>
<?php include("foot.php"); ?>
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click','.edit_data',function(){
      var edit_id=$(this).attr('id');
      $.ajax({
        url:"view_appointment.php",
        type:"post",
        data:{edit_id:edit_id},
        success:function(data){
          $("#info_update").html(data);
          $("#editData").modal('show');
        }
      });
    });
  });
</script>

</body>
</html>
