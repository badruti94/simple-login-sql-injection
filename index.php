<?php
if(isset($_POST['submit'])){
    $con = mysqli_connect('localhost','root','','test');

    $username = $_POST['username'];
    $password = $_POST['password'];
    //' or true-- 
    $username = mysqli_real_escape_string($con,$username);
    $password = mysqli_real_escape_string($con,$password);
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $user = mysqli_query($con, $query);

    if($user->num_rows > 0){
        echo "masuk";
    }else{
        echo "username atau password salah";
    }
    exit;
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="username" placeholder="username"> <br>
        <input type="password" name="password" placeholder="password"> <br>
        <button type="submit" name="submit" >login</button> <br>
    </form>
</body>

</html>