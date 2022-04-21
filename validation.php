<?php

session_start();

$con = mysql_connect('localhost','root','');

mysqli_select_db($con,'test');

$name=$_POST['user']
$pass=$_POST['password']

$s="select * signuptable where username = '$name' && password='$pass'";
$result = mysqli_query($con,$s);

$num = mysql_num_row($result);

if($num==1){
    $_SESSION['username']=$name;
    header('location:index.php')

}else{
    header('location:index.php')
}

?>