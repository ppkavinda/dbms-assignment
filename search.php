<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Search for students</title>
        <link rel="stylesheet" href="css/form.css?modified=205209">
        <link rel="stylesheet" href="css/test.css?modified=2011009">
        <link rel="stylesheet" href="css/tab.css?modified=200209">
    </head>
    <body>
        <h1>DBMS System</h1>
        <div class="container-main">
            <ul class="tab">
                <li class="tabLi" onclick='selTab(event, "login");'><a href="javascript:void(0)" id="default" class="tablink" >Search</a></li>
            </ul>
            <!-- Login form -->
            <div id="login" class="tabcontent">
                <form action="search_control.php" method="post">
                    <p id="sp">
                        <label for="log-username">Search:</label>
                        <input type="search" name="search" id="search" placeholder="Enter a name for search" required>
                    </p>
                        <input id="submit" type="submit" name="submit" value="Search">
                </form>
            </div>
        </div>

    <script src="js/tab.js"></script>
    <script src="js/validation.js"></script>
    </body>
</html>
