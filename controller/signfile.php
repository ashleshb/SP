<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['submit'])){


$name = $_POST['name'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password= $_POST['password'];
$address = 'Dharmasthala';

$stmt=$admin->cud("INSERT INTO `user`(`name`,`phone`,`gender`,`email`,`password`,`address`,`date`) VALUES ('$name','$phone','$gender','$email','$password','$address',now())","saved");
echo "<script>alert('Registered Successfully');window.location='../index.php';</script>";

}

?>