<?php
if (isset($_GET["name"] )|| isset( $_GET["age"]))

 {
 	echo "welcome".$_GET['name']."<br>";
 	echo "You Are ".$_GET['age']." Years old<br>";
	echo "password".$_GET['pass']."This is unsecured";
	# code...
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>getmethod</title>
</head>
<body bgcolor="pink">
<center> <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name:  <input style="margin-left: 20px;" type = "text" name = "name" /><br><br>
         Age: <input style="margin-left: 30px;" type = "text" name = "age" /><br><br>
         password  :	       <input style="margin-left: -5px;" type="password" name="pass"/><br><br>
         <input style="font-size: 20px;border-radius: 2px;margin-left: 50px;" type = "submit" value="submit" /><br><br><br><br><br>
      </form>
      <a href="index.php">  Back</a>
      </div> </center>
</body>
</html>