<?php
session_start();

include_once("config.php");
if(isset($_GET['l_id'])){
    $l_id = $_GET['l_id'];
    $sql = "SELECT l_id, fname, lname FROM staff WHERE l_id='$l_id';";
    $sql2 = "SELECT assignment_2.l_id, title FROM staff_module INNER JOIN module ON staff_module.mcode=moduel.mcode WHERE l_id='$l_id';";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));

    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
    }else{
        echo "Error";
    }


}
if(isset($_POST["submit"])){
    $l_id = $_POST["l_id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $department = $_POST["department"];
    $mcode = trim($_POST["mcode"]);
    $r = explode(" ", $mcode);

    $sql1 = "INSERT INTO staff(l_id, fname, lname, dep_id) VALUES ('$l_id', '$fname', '$lname', '$department');";
    $result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));

    if($result1){
        $msg = "* registration successed !";
    }else{
        $msg = "* Falied! ";
    }

    for ($i=0; $i <count($r) ; $i++) {
        $sql1 = "INSERT INTO staff_module(mcode, l_id) VALUES ('$r[$i]', '$l_id');";
        $result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));

        if($result1){
            $msg = "* registration successed !";
        }else{
            echo mysqli_error($con);
        }
    }
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title>DBMS- database system</title>
     <link rel="stylesheet" href="css/form.css?modified=02209">
     <link rel="stylesheet" href="css/test.css?modified=0211009">
     <link rel="stylesheet" href="css/tab.css?modified=0202309">
     <link rel="stylesheet" href="css/navbar.css?modified=032209">
 </head>
 <body>
     <ul class="navbar">
         <li class="navli activenav" onclick="active(this);"><a href="#">home</a></li>
         <li class="navli" onclick="active(this);"><a href="#">tmp1</a></li>
         <li class="navli" onclick="active(this);"><a href="#">tmp2</a></li>
         <li class="navli" onclick="active(this);"><a href="#">tmp3</a></li>
         <li class="space" onclick="active(this);"><a href="#">space</a></li>
         <li class="navli" id="logout"><a href="logout.php">logout</a></li>
     </ul>
     <h1>DBMS System</h1>
     <h1>Registeration page</h1>
     <div class="container-main">
         <div id="signup" class="tabcontent">
             <ul class="tab tabani">
                 <li class="tabLi" ><a style="margin-left: 17%;" id="default" class="tablink" >Register Lecture</a></li>
             </ul>
             <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                 <p style="color: red; margin-left: 5%;">
                     <?php if(isset($msg)) echo $msg; ?>
                 </p>
                 <p>
                     <label for="sign-id">Id:</label>
                     <input type="text" name="id" id="sign-id" placeholder="Enter ID" value="<?php echo $row['l_id']?>" required>
                 </p>
                 <p>
                     <label for="sign-fname">First Name:</label>
                     <input type="name" name="fname" id="sign-fname" placeholder="Enter First name" value="<?php echo $row['fname']?>" required>
                 </p>
                 <p>
                     <label for="sign-lname">Last Name:</label>
                     <input type="text" name="lname" id="sign-lname" placeholder="Enter Last name" value="<?php echo $row['lname']?>" required>
                 </p>
                 <p>
                     <label for="sign-department">Department id:</label>
                     <input type="text" name="department" id="sign-department" placeholder="Department Id" value="<?php echo $row['title']?>" required>
                 </p>
                 <p>
                     <label for="sign-id">mcode:</label>
                     <input type="text" name="mcode" id="sign-id" placeholder="Module codes (seperate by a space)" required>
                 </p>
                 <input id="submit" type="submit" name="submit"value="Register" onclick="return validatePassword()">
             </form>
         </div>
     </div>
     <script src="js/validation.js"></script>
     <script src="js/navbar.js"></script>
     </body>
 </html>
