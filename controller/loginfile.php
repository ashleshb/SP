<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['submit'])){


$email = $_POST['email'];

$password= $_POST['password'];

$stmt=$admin->ret("SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);

$num=$stmt->rowCount();
if($num>0){
	$id=$row['u_id'];
	$_SESSION['uid']=$id;
	echo "<script>alert('Login Successfully');window.location='../index.php';</script>";

}
else{
	echo "<script>alert('Wrong username or password');window.location='../login.php';</script>";


}



}

?>