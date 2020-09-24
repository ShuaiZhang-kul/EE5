<html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shuai's test web page</title>
  </head>
  <style type="text/css">
  .box-1{
    float:left;
    border:solid;
    border-color: rgb(120, 120, 121);

  }
  .box-2{
    margin-left: 30px;
    float:left;
    border:solid;
    border-color: rgb(120, 120, 121);
  }
  </style>
  <body>
    <!--
  <a href="https://www.google.com" target="_blank">
  sdf</a>

  <img src="https://www.buffmoun.com/wp-contentpage-hero-2400x897.jpg" alt="images">
  <video src="" controls>video</video>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/FRB4HbgGDNo?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
<span></span>
<span></span>
-->
<div id="box-1 box-2">
  <form class="form" action="login.php" method="post">
				<input type="text" class=" form-control log  " name="account" placeholder="Username">
				<input type="password"  class="form-control log" name="password" placeholder="Password">
				<button type="submit" id="login-button">Login</button>
			</form>
</div>
<div id="box-2">
<?php
if(!function_exists('mysqli_init')&&!extension_loaded('mysqli')){
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}
?>

</div>
</body>
</html>
