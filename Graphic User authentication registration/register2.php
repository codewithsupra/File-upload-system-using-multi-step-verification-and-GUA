<?php
session_start();
$link=mysqli_connect("localhost","root","","cyber");
if(isset($_SESSION["password"]) and isset($_SESSION["name"]) and isset($_SESSION["email"]) and isset($_GET["gua"])){
$query="SELECT * FROM users WHERE email='".$_SESSION['email']."'";
$result=mysqli_query($link,$query); if(mysqli_num_rows($result)==0)
{
$hashGUA=md5($_GET["gua"]);
$verifyKey=rand(10000000,99999999);
$hashVerifyKey=md5($verifyKey);
$hashPassword=md5($_SESSION["password"]);
$query2="INSERT INTO users (name,email,password,guakey,verified) VALUES ('".$_SESSION["name"]."','".$_SESSION["email"]."','".$hashPassword."','".$hashGUA."','".$hashVerifyKey."');";
mysqli_query($link,$query2);
$last_id = $link->insert_id; mkdir("data/".$last_id);

$to = $_SESSION['email'];
$subject = "Account Verification";
$txt = '

<div style="background-color:rgb(214, 248, 255);color:black;padding:20px;border:2px solid blue;">
<div style="margin:0px auto;width:max-content;">
<img style="margin:0px auto;border:1px solid blue;"
src="https://encrypted-tbn0.gstatic.com/images?q=tbn  3AANd9GcRC1EYeECG_M1yV_ZALhcHWKgbD6j_C1c1bKA&usqp=CAU" />
<br>
<div style="width:100  ;text-align:center;"><h3>Cyber Security Project</h3></div>
</div>
<br><br>Hello user,<br><br>
Take you for registering with us, please click on verify button below to verify your account and complete your
 
registration.
 

<br><br>
<div style="text-align:center;">
<a href="http://localhost/cyber/verify.php?key='.$verifyKey.'&user='.$_SESSION['email'].'"><button
 
style="border-radius:10px;border:none;padding:10px;font-size:20px;color:white;background-color:rgb(84, 196, 108)">Verify Account</button></a>
</div>

<hr>

You may alternatively use the following links :
<br><br>
To Verify : http://localhost/cyber/verify.php?key='.$verifyKey.'&user='.$_SESSION['email'].'
<br><br>


</div>



';
$headers = "From: cyber@gmail.com";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
mail($to,$subject,$txt,$headers); header("Location:login.php?done=1");

 



}
else{
 
}else{

}
 

header("Location:signup.php?fail=3");
 
header("Location:signup.php?fail=1");
}
?>
