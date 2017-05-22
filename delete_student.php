<?php
$s_id = $_GET['s_id'];
include_once("config.php");
$sql = "DELETE FROM students WHERE s_id='$s_id';";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));

if($result){
    echo "Deleted Successfully!";
}else{
    echo "Error";
}
