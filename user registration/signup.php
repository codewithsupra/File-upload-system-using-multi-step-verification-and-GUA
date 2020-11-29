<?php
 

session_start(); if(array_key_exists("id",$_SESSION))
{
 
header("Location:home.php");
}
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
<li class="nav-item active">
<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
<a class="nav-link" href="#">About</a>
</li>
</ul>
<a href="login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign In</button></a>
 
</div>
</nav>


<br><br>
<div class="container">


<div class="row">


<div class="col" style="text-align:center;"><h3>Multi-step User Verification and Authentication using Hashed GUA</h3><hr></div>
</div>
<div class="row">
<div class="col-md" style="text-align:center;"><img src="logo.png" class="img-fluid" alt="VIT logo"><br><hr></div>
<div class="col-md" >
<div style="border:1px solid rgb(187, 199, 247);padding:20px;border-radius:0px 20px 20px 0px;box-shadow:3px 3px 3px rgb(187, 199, 247);">
<h3>Sign up</h3><hr><br>
<div style="display:none;" id='er' class="alert alert-danger" role="alert"> Error : Email already registered !
</div>
<div style="display:none;" id='pm' class="alert alert-danger" role="alert"> Error : Password and Confirm password did not match.
</div>
<div style="display:none;" id='e' class="alert alert-danger" role="alert"> Error : Failed to create account.
</div>
<form action="register.php" method="post">
<div class="form-group">
<label for="exampleInputEmail1">Full name</label>
<input required name="name" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Full name">
</div>


<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
</div>


<div class="form-group">
<label	for="exampleInputPassword1">Password</label>
 
<input minlength="8" required name="password1" type="password" class="form-control" placeholder="Password">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Confirm Password</label>
<input    minlength="8" required name="password2" type="password" class="form-control" placeholder="Confirm Password">
</div>
<br>
<button type="submit" class="btn btn-primary">Continue</button>
</form>


</div>
<hr>
<h6>Already have an account? <a href="login.php">Sign In</a></h6>
</div>


</div>
</div>


<br><br>
<script>
<?php if(array_key_exists("fail",$_GET))
{
if($_GET['fail']==1)
{
echo 'document.getElementById("er").style.display = "block"';
}
else if($_GET['fail']==2)
{
echo 'document.getElementById("pm").style.display = "block"';
}
else if($_GET['fail']==3)
{
echo 'document.getElementById("e").style.display = "block"';
}
}
?>
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

