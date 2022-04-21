<?php

session_start();
header('location:index.html')
$con = mysql_connect('localhost','root','');

mysqli_select_db($con,'test');

$name=$_POST['user']
$pass=$_POST['password']

$s="select * signuptable where username = '$name'";
$result = mysqli_query($con,$s);

$num = mysql_num_row($result);

if($num==1){
    echo"username already taken";

}else{
    $reg="insert into signuptable(username,password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo"registration successful";
}

?>