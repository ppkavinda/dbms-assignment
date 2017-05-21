<?php
session_start();
if (!isset($_SESSION["id"]) || !isset($_SESSION["level"])) {
    header("Location: index.php");
    $link = "hide";
}else{
    $link = "";
}

if(isset($_GET["id"])){
    include_once("config.php");
    $s_id = $_GET["id"];
    $sql1 = "SELECT date, student_exam.mcode, grade, title FROM student_exam INNER JOIN module ON student_exam.mcode=module.mcode WHERE student_exam.s_id='$s_id';";
    $sql2 = "SELECT title FROM module WHERE d_id=(SELECT d_id FROM students WHERE s_id='$s_id');";
    $result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
    $result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));

    if(mysqli_num_rows($result1)>0){
        $str = '';
        while($row=mysqli_fetch_assoc($result1)){
            $str .= "<tr style='margin: 10px;'><td>$row[date]</td><td>$row[title]</td><td>$row[grade]</td></tr>";
        }
    }else{
        $str = "<tr><td style='border: none;'>No data</td></tr>";
    }
    if(mysqli_num_rows($result2)>0){
        $str2 = '';
        while($row=mysqli_fetch_assoc($result2)){
            $str2 .="<li style='margin: 10px; list-style-type: none;'>$row[title]</li>";
        }
    }else{
        $str2 = "Non data";
    }
}
 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DBMS- database system</title>
    <link rel="stylesheet" href="css/form.css?modified=205209">
    <link rel="stylesheet" href="css/test.css?modified=2009">
    <link rel="stylesheet" href="css/tab.css?modified=200209">
    <link rel="stylesheet" href="css/navbar.css?modified=20209">
    <style>
        table, th, td{border: 3px solid #ddd; border-collapse: collapse; padding: 10px;}
        table{width: 100%;}
        .container{margin-left: auto; margin-right: auto; width: 50%; display: block;}
        table{background: #888;}
        th{background: #555;}
    </style>
</head>
<body>
    <ul class="navbar">
        <li class="navli activenav" onclick="active(this);"><a href="#">home</a></li>
        <li class="navli" onclick="active(this);"><a href="#">tmp1</a></li>
        <li class="navli" onclick="active(this);"><a href="#">tmp2</a></li>
        <li class="navli" onclick="active(this);"><a href="#">tmp3</a></li>
        <li class="space" onclick="active(this);"><a href="#">space</a></li>
        <li class="navli" id="logout"><a href="logout.php" class="<?php echo $link ?>">Log out</a></li>
    </ul>
    <h1>DBMS System</h1>
        <h1>Student page</h1>
        <div class="container-main2">
            <h2>Exam Results</h2>
            <table>
                <tr>
                    <th>date</th><th>module</th><th>grade</th>
                </tr>
                <tr>
                    <?php if(isset($str)){echo $str; } ?>
                </tr>
            </table>
        </div>
        <div class="container-main2">
            <h2>Modules you taken</h2>
            <ul>
                <?php echo $str2 ?>
            </ul>
        </div>
        <script src="js/navbar.js"></script>
    </body>
</html>
