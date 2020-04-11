<!DOCTYPE html>
<html lang="en">
<head>
<title>ccndep</title>
<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{text-align:center;}
.cont{padding:10px;text-align:center; background-color:lightgrey;width:50%;margin-left:50%;margin-top:10%}
</style>
</head>
<body>
<?php
include'connection.php';

//**********query 
if(isset($_POST['query'])){
extract($_POST);
$sql = "insert into users values('','$name','$email','$phone','$company','$subject','$message')";
if (mysqli_query($conn, $sql)) {
    echo "<div class='jumbotron'><div class='container'><h1>Thank You for Writing us </h1>
	<p>You will be contacted soon ! !</p></div></div>";
	header( "refresh:2;url=/index.php" );
	
}
} 
/* else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} */

//*************end query

//*****SUBSCRIPTION***********
if(isset($_POST['subscribe'])){
	$email=$_POST['esubscribe'];
	$sql="insert into subscription(email)values('$email')";
	if(mysqli_query($conn,$sql)){
		echo "<div class='jumbotron'><div class='container'><h1>Thank You for Subscribing !!</h1>
		<p>We never share your information or use it to spam you we are happy to help you Hassle Free !! Genuine mail only</p></div></div>";
		header( "refresh:2;url=/index.php" );
	}
	
}
/* else{
	echo "error";
} */
//*******End of SUBSCRIPTION***********

//*******POST FEED********

mysqli_close($conn);
?>
</body>
</html>