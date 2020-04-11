<html>

<head>
<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all"><!-- Bootstrap stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->  
<link href="css/carousel.css" type="text/css" rel="stylesheet" media="all"><!-- carousel css --> 
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<style>.justify{
		position:relative;
		margin-left:30%;}</style>
<body>
<div class="container-fluid">
<div class="col-md-4 justify">
          <form class="form" action="" method="post">
            <div class="form-group" id="login-id">
			<label>Email address</label> <input type="email"  name="uname" class="form-control" placeholder="Enter email"> </div>
            <div class="form-group"> 
			<label>Password</label> <input type="text" name="pass" class="form-control" placeholder="Password"> 
			</div> 
			<input type="submit" class="btn btn-success" name="admin" data-toggle="modal" value="Login" data-target="#success" id="#login_id"> </form>
        </div>

		<?php 
		include 'connection.php';
		if(isset($_POST['admin'])){
		extract($_POST);
		$sql="select * from admin where username='$uname' and password='$pass'";
		
		$data=mysqli_query($conn,$sql);
if($rec=mysqli_fetch_row($data)){
		echo "$rec[0] $rec[1] ";
		header("location:../login_success.php");
}
else{
echo "<div class='btn-success'>Wrong username/password</div>";

}	
		}
		
		?>
		</div>
		</div>
		</body>
		</html>
		