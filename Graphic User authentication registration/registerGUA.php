<?php
session_start();
?>

<html>

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Cyber Project</title>
</head>
<body>


<nav class="navbar navbar-dark bg-dark navbar navbar-expand-lg">
<a class="navbar-brand" href="#">Cyber Security</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
</ul>
</div>
</nav>


<div class="jumbotron">
<h1 class="display-4">Hello, <?php echo $_SESSION['name'];?> </h1>
<p class="lead">We are almost there !! For security you have to set up Graphic User Authnetication. Select 6 images in order as your GUA.</p>
<hr class="my-4">
<p>Please remember these sequence of images, as it is necessary for login purpose.</p>
<p style='color:red;'>NOTE : Arrangement of images are bound to change for security.</p>
</div>



<div class="container" style="text-align:center;">
<h3>Selected : <span id='s'>0</span> / 6</h3>
<div class="progress row">
<div class="progress-bar progress-bar-striped progress-bar-animated" id='p' role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0 "></div>
</div>
<br>
<table style="width:max-content;margin:0px auto;" border>
<tr id='selected'>
</tr>
</table>
<br>
<div id="done" style="display:none">
<button class="btn btn-success" onclick="proceed()">Confirm Selections</button><br><br>
<a href=""><button class="btn btn-info">Discard and Re-Select</button></a>
 
</div>


<br><br>
<div id="cat" class="row" style="border-radius:25px;padding:20px;margin:0px auto;width:max-content;border:1px solid black;box-shadow:3px 3px 3px black;">
<table>
<?php
$a=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25];
shuffle($a);
for ($i = 0; $i<25; $i=$i+5) { echo '<tr>
<td><img onclick=add(id) id='.($a[$i]).' src="images/'.($a[$i]).'.PNG" width="200px" height="200px"/></td>
<td><img onclick=add(id) id='.($a[$i+1]).' src="images/'.($a[$i+1]).'.PNG" width="200px" height="200px"/></td>
<td><img onclick=add(id) id='.($a[$i+2]).' src="images/'.($a[$i+2]).'.PNG" width="200px" height="200px"/></td>
<td><img onclick=add(id) id='.($a[$i+3]).' src="images/'.($a[$i+3]).'.PNG" width="200px" height="200px"/></td>
<td><img onclick=add(id) id='.($a[$i+4]).' src="images/'.($a[$i+4]).'.PNG" width="200px" height="200px"/></td>
</tr>';
}
?>

</table>
</div>
</div>
<br>
<br>
<script>
var selected=0; var complete=0; var arr=[];
const add=function(id){ selected=selected+1; complete=(selected/6)*100;
document.getElementById(id).onclick=""; document.getElementById(id).style.opacity='.3'; document.getElementById(id).style.border='3px solid black'; document.getElementById('p').style.width=complete+"  "; document.getElementById('s').innerHTML=selected; arr.push(id);
document.getElementById('selected').innerHTML +="<td><img src='images/"+id+".PNG' width='150px' height='150px'/></td>"
if(selected==6){ next()
}
}
const next=function(){ arr=arr.join()
document.getElementById('cat').style.display='none'; document.getElementById('done').style.display='block';
}


const proceed=function(){
window.location.href = "register2.php?gua="+arr;
}
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
