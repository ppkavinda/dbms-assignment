<?php
header("Cache-Control: no-cache, must-revalidate");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DBMS- database system</title>
        <link rel="stylesheet" href="css/form.css?modified=20012009">
        <link rel="stylesheet" href="css/test.css?modified=20012009">
    </head>
    <body>
        <div class="container-main">
            <ul class="tab">
                <li class="tabLi" onclick='selTab(event, "login");'><a href="javascript:void(0)" id="default" class="tablink" >Log In</a></li>
                <li class="tabLi" onclick='selTab(event, "signup")'><a href="javascript:void(0)" class="tablink">Sign Up</a></li>
            </ul>
            <div class="tabcontent">
                <form action="login_control.php" method="post">
                    <label for="log-username">Username:</label>
                    <input type="text" name="username" id="log-username" required>
                    <label for="log-password">Password:</label>
                    <input type="password" name="password" id="log-password" required>
                    <input type="submit" name="submit" value="submit">
                </form>
            </div>
            <div class="tabcontent">
                <form action="signup_control.php" method="post">
                    <label for="sign-email">Email:</label>
                    <input type="text" name="email" id="sign-email" required>
                    <label for="sign-username">Username:</label>
                    <input type="text" name="username" id="sign-username" required>
                    <label for="sign-password">Password:</label>
                    <input type="password" name="password" id="sign-password" required>
                    <input type="submit" name="submit"value="submit">
                </form>
            </div>
        </div>

    <script src="js/tab.js"></script>
    </body>
</html>
