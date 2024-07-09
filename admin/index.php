<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/index1.css" />
</head>
<body>
<section class="header">
<a class="logo">Pramukh Solar</a>
</section>
<div class="gra">
<div class="form">
<center><p class="p1">Welcome <?php echo $_SESSION['username']; ?>!</p></center>
<center><p><a href="dashboard.php" class="p3">Dashboard</a></p></center>
<center><a href="logout.php" class="p4">Logout</a></center>


</div>
</div>
</body>
</html>
