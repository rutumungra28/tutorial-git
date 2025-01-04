<?php 
		$con=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($con,"salon");
        if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}


	/*if($db)
		{
			echo "connect";
		}
		else
		{
			echo"not";
		}

*/
?>