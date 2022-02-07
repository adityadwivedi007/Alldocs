<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="login">
        <form action="" method="post">
            <input type="email" placeholder="Enter your email" name="email"><br>
            <input type="password" placeholder="Enter your password" name="password">
            <input type="submit" name="submit" placeholder="login">
            <input type="reset">
        </form>
    </div>
    
    
</body>
</html>





    <?php
    if(isset($_POST['submit'])){
    $uemail = $_POST['email'];
    $upassword = $_POST['password'];
    
    $query = "select * from student where email='$uemail' and password = '$upassword'";
    }
    ?>