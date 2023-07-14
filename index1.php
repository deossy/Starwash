<?php
session_start();
if(isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Star Wash</title>

    <?php
      include "include/header.php";
    ?>

<body>
  <div id="header">
  <div class="jumbotron text-center" style="padding:10px;">
    <h1>Star wash</h1>
  </div>
  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
      <a class="navbar-brand" href="#">Star Wash</a>
    </div>
    <ul class="nav navbar-nav">
      <?php
        include "include/list.php"
      ?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h1>Hi Selamat Datang di Halaman Admin</h1>
  </div>
</div>

</body>
</html>
<?php
}else{
	header("location:login/index.php");
}
