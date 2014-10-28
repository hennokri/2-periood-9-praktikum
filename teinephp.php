<?php session_start(); 
$first_name = $_SESSION["first_name"];
?>


<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
   <title>harjutus-9-Sessions</title>
  </head>
<body>
<a href="index.php">Esimene leht </a>
<pre><?php print_r($_SESSION);?></pre>
<br>
</body>
</html>