<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title>DBMS- database system</title>
     <link rel="stylesheet" href="css/form.css?modified=02209">
     <link rel="stylesheet" href="css/test.css?modified=0211009">
     <link rel="stylesheet" href="css/tab.css?modified=020209">
     <link rel="stylesheet" href="css/navbar.css?modified=02209">
 </head>
 <body>
     <ul class="navbar">
         <li class="navli activenav" onclick="active(this);"><a href="#">home</a></li>
         <li class="navli" onclick="active(this);"><a href="#">tmp1</a></li>
         <li class="navli" onclick="active(this);"><a href="#">tmp2</a></li>
         <li class="navli" onclick="active(this);"><a href="#">tmp3</a></li>
         <li class="space" onclick="active(this);"><a href="#">space</a></li>
         <li class="navli" id="logout"><a href="#">logout</a></li>
     </ul>
     <h1>DBMS System</h1>
     <h1>Admin page</h1>
     <div class="container-main">
         <div id="signup" class="tabcontent">
             <ul class="tab tabani">
                 <li class="tabLi" ><a id="default" class="tablink" >Register Student</a></li>
             </ul>
             <form action="signup_control.php" method="post">
                 <p>
                     <label for="sign-fname">First Name:</label>
                     <input type="name" name="fname" id="sign-fname" placeholder="Enter your First name" required>
                 </p>
                 <p>
                     <label for="sign-lname">Last Name:</label>
                     <input type="text" name="lname" id="sign-lname" placeholder="Enter your Last name" required>
                 </p>
                 <p>
                     <label for="sign-username">Username:</label>
                     <input type="text" name="username" id="sign-username" placeholder="Create a Username" required>
                 </p>
                 <p>
                     <label for="sign-password">Password:</label>
                     <input type="password" name="password" id="sign-password" placeholder="Create a Password" required>
                 </p>
                 <p>
                     <label for="sign-password">Re-enter password:</label>
                     <input type="password" name="password" id="sign-re-password" placeholder="Re-enter password" required>
                 </p>
                 <input id="submit" type="submit" name="submit"value="Sign up" onclick="return validatePassword()">
             </form>
         </div>
     </div>
     </body>
 </html>
