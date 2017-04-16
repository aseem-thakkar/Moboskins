<?php

$connection = mysqli_connect("localhost", "root", "", "moboskins") or die("Please, check the server connection!");

$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$completename = $_POST['name'];
$address1 = $_POST['add1'];
$address2 = $_POST['add2'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$zipcode = $_POST['zipcode'];
$phone_no = $_POST['phone_no'];

$insert_query = "insert into customers (email, password, cust_name, address_line1, address_line2, city, state, zipcode, country, cellphone_no) Values ('$email', (PASSWORD('$password')), '$completename', '$address1', '$address2', '$city', '$state', '$zipcode','$country', '$phone_no')";

$result = mysqli_query($connection, $insert_query) or die(mysql_error());

if ($result > 0) {
    ?>
    <p>Dear, <?php echo $completename; ?>, your account is successfully created!</p>
    <?php
} else {
    echo "Some error occurred while creating your account! Please try again!";
}

?>