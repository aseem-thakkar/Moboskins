<!DOCTYPE html>
<html>
<head>
    <title>MoboSkins</title>
    <script language="JavaScript" type="text/javascript" src="js/checkform.js"></script>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/custom.css" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<?php
include('topmenu.php');
?>
<body>
<form action="validateuser.php" method="post" class="sign-in-form">
    <table border="0" cellspacing="1" cellpadding="3">
        <tr>
            <td>Email address:</td>
            <td><input type="text" name="emailaddress"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <!--            <button class="waves-effect waves-light btn" type="submit">Login</button>-->
            <!--            <td colspan="2" align="center"><input type="submit" name="submit" value="Login"></td>-->
            <td>
                <button class="waves-effect waves-light btn" type="submit" name="action"
                        style="background-color: #ee6e73">Login
                </button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>