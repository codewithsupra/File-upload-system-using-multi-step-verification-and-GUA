<?php
session_start();
echo $_POST["password1"]; echo $_POST["password2"];
$link=mysqli_connect("localhost","root","","cyber");
if(isset($_POST["password1"]) and isset($_POST["password2"]) and isset($_POST["name"])and isset($_POST["email"])){
if($_POST["password1"] != $_POST["password2"]){ header("Location:signup.php?fail=2");
 
}
else{
 

$query="SELECT * FROM users WHERE email='".$_POST['email']."'";
$result=mysqli_query($link,$query); if(mysqli_num_rows($result)==0)
{
 






}
}
else{
 



}else{

}
 
$_SESSION['name']=$_POST['name'];
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password1']; header("Location:registerGUA.php");

header("Location:signup.php?fail=1");
 
header("Location:signup.php?fail=3");
}
?>
