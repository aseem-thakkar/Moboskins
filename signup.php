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

<body>

<div class="row">
<!--    <form class="col s12" action="addcustomer.php" method="post" onsubmit="return validate(this);">-->
    <form class="col s12 table-row-custom" action="addcustomer.php" method="post">
        <div class="row">
            <div class="input-field col s12">
                <input name="name" id="name" type="text" class="validate">
                <label for="name">Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="password" id="password" type="password" class="validate">
                <label for="password">Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="repassword" id="password" type="password" class="validate">
                <label for="repassword"> Retype Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="email" id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="add1" type="text">
                <label for="add1">Address Line 1</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="add2" type="text">
                <label for="add2">Address Line 2</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="city" type="text">
                <label for="city">City</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="pincode" type="text">
                <label for="pincode">Pin Code</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="state" type="text">
                <label for="state">State</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="country" type="text">
                <label for="country">Country</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="phone_no" type="text">
                <label for="phone_no">phone_no</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <button class="waves-effect waves-light btn" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>


<!--    <form action="addcustomer.php" method="post" onsubmit="return validate(this);">-->
<!--    <table border="0" cellspacing="1" cellpadding="3">-->
<!--        <tr>-->
<!--            <td colspan="2" align="center">Enter your information</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Email address:</td>-->
<!--            <td><input size="20" type="text" name="emailaddress"><span id="emailmsg"></span></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Password:</td>-->
<!--            <td><input size="20" type="password" name="password"><span id="passwdmsg"></span></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Retype password:</td>-->
<!--            <td><input size="20" type="password" name="repassword"><span id="repasswdmsg"></span></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Complete name:</td>-->
<!--            <td><input size="50" type="text" name="complete_name"><span id="usermsg"></span></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Address:</td>-->
<!--            <td><input size="80" type="text" name="address1"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td></td>-->
<!--            <td><input size="80" type="text" name="address2"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>City:</td>-->
<!--            <td><input size="30" type="text" name="city"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>State:</td>-->
<!--            <td><input size="30" type="text" name="state"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Country:</td>-->
<!--            <td><input size="30" type="text" name="country"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Zip code:</td>-->
<!--            <td><input size="20" type="text" name="zipcode"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Phone number:</td>-->
<!--            <td><input size="30" type="text" name="phone_no"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td><input name="submit" type="submit" value="Submit"></td>-->
<!--            <td><input type="reset" value="Cancel"></td>-->
<!--        </tr>-->
<!--    </table>-->
<!--</form>-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>