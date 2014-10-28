
<?php session_start(); 
$_SESSION["first_name"]="Kristi";
$_SESSION["last_name"]="Henno";
$_SESSION["email"]="hennokri@gmail.com";
$first_name = $_SESSION["first_name"];
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
   <title>harjutus-9-Sessions</title>
  </head>
  
<body>
<pre><?php print_r($_SESSION);?></pre>
<br>
<?php echo $first_name; ?>
<a href="teinephp.php">Teine leht </a>
</body>
</html>