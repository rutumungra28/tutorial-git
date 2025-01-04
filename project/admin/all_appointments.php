<?php
session_start();
error_reporting(0);
include('connection.php');
if (strlen($_SESSION['sid']==0)) {
//  header('location:logout.php');
} 
?>
<!DOCTYPE html>
<html>
<?php include("head.php"); ?>
<body class="hold-transition sidebar-mini">
  <div class="wrapper" style="background-image:url(images/head2.jpg)">
    <!-- Navbar -->
    <?php include("header.php"); ?>
    <!-- /.navbar -->

    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Appointments</h1>
            </div>
            
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with All Appointment</h3>
                </div>
                <!-- /.card-header -->
                <div id="editData" class="modal fade">
                  <div class="modal-dialog  ">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">View Appointment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" id="info_update" style="background-image:url(images/head1.jpg)">
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
                <div class="card-body" style="background-image:url(images/head1.jpg)">
                  <table id="example1" class="table table-bordered table-hover">
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
                      $ret=mysqli_query($con,"select *from  appointment");
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
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

  </div>

    <!-- ./wrapper -->
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
