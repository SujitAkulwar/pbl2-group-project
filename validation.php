<?php

session_start();

$con = mysql_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name =$_POST['name'];

$password =$_POST['password'];

$s = " select * from usertable where name = '$name' && password='$password'";

$result = mysqli_query($con, $s);

$num = mysql_num_rows($result);

if($num == 1){
    // header('location:indexloginafter.php');

}
else{
    header('location:login.php');
}

?>