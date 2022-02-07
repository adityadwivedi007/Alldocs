<?php
    // database connection
    $conn = mysqli_connect('localhost', 'root', '', 'test') or die("unable to connect to database.");

    echo "connected to database.<br>";

    if(isset($_POST['submit'])){

        $uid = $_POST['id'];
        $uname = $_POST['username'];
        $uemail = $_POST['email'];
        $uphone = $_POST['phone'];
        $uaddress = $_POST['add'];
        $upassword = $_POST['password'];

        $query = mysqli_query($conn, "Insert into student(id,name,email,phone,address,password) values($uid,'$uname','$uemail',$uphone,'$uaddress','$upassword')") or die("query failed.");

        if($query){
            echo "data inserted succesfully.";
        }else{
            echo "failed to insert data.";
        }

    }

    // mysqli_close($conn);
?>