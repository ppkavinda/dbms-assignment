<?php
if(isset($_POST["submit"])){
    include_once("config.php");

    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT id FROM users WHERE username = '$username' AND password = '" . md5($password) . "';";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        echo $row["id"];
    }else{
        echo "You have Failed! #This city.";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Logged In</title>
    </head>
    <body>
        <h1>Logged In</h1>
    </body>
</html>
