<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DBMS- database system</title>
        <link rel="stylesheet" href="css/form.css?modified=205209">
        <link rel="stylesheet" href="css/test.css?modified=2011009">
        <link rel="stylesheet" href="css/tab.css?modified=200209">
    </head>
    <body>
        <h1>DBMS System</h1>
        <div class="container-main">
            <ul class="tab">
                <li class="tabLi" onclick='selTab(event, "login");'><a href="javascript:void(0)" id="default" class="tablink" >Log In</a></li>
                <li class="tabLi" onclick='selTab(event, "signup")'><a href="javascript:void(0)" class="tablink">Sign Up</a></li>
            </ul>
            <!-- Login form -->
            <div id="login" class="tabcontent">
                <form action="login_control.php" method="post">
                    <p id="sp">
                        <label for="log-username">Username:</label>
                        <input type="text" name="username" id="log-username" placeholder="Username" required>
                    </p>
                    <p>
                        <label for="log-password">Password:</label>
                        <input type="password" name="password" id="log-password" placeholder="Password" required>
                    </p>
                        <input id="submit" type="submit" name="submit" value="Log in">
                </form>
            </div>
            <!-- signup form -->
            <div id="signup" class="tabcontent">
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

    <script src="js/tab.js"></script>
    <script src="js/validation.js"></script>
    </body>
</html>
