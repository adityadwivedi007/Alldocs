<?php
    error_reporting(0);
    ob_start();

    session_start();
    $did = $_GET['id'];

    include "connection.php";
    
    
    //getting the previous info
    $sql = "delete from student where id='$did'";

	$query = mysqli_query($con,$sql) or die("query failed.");


		if($sql){
			echo "data deleted successfully.";
            header('Location:dashboard.php');
		}else{
			echo "failed to delete data.";
		}
?>