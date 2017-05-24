<?php
include_once("config.php");
if(isset($_GET['s_id'])){
    $s_id = $_GET['s_id'];
    $sql = "DELETE FROM students WHERE s_id='$s_id';";
    
}else if(isset($_GET['l_id'])){
    $l_id = $_GET['l_id'];
    $sql = "DELETE FROM staff WHERE l_id='$l_id'";
}

$result = mysqli_query($con, $sql) or die(mysqli_error($con));
if($result){
    echo "Deleted Successfully!";
}else{
    echo "Error";
}
