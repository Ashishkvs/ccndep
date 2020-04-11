

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

      <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">  
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>  
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>  
<script>
function post_view(){
	alert("Sorry No content avialable for now Come Back soon !!");
}

</script>
   <script>

	$(document).ready(function(){
	
	$("input").on({
	focus:function(){
    $(this).css("background-color","red");},
	keypress:function(){
	$(this).css("background-color","green")}
	
	
	
	
});
</script>
<style>
#post_content{margin:15px;}
.media img{width:auto;height:200px;}
.post-cont:hover{ box-shadow: 10px 10px 5px #888888;
 cursor:pointer;
}
</style>
</head>

<body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center bg-faded">Welcome Admin</h1>
        </div>
      <!-- Login form -->
     
    
			<!--Tab  -->
        <div class="col-md-12" >
		

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#mail" aria-controls="home" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#subs" aria-controls="profile" role="tab" data-toggle="tab">Subscriber</a></li>
    <li role="presentation"><a href="#post_content" aria-controls="messages" role="tab" data-toggle="tab">Post</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="mail">

<?php 
include'connection.php';
//*****for showing Subscriber content****
$sql="select * from users order by sno desc";
$data=mysqli_query($conn,$sql);
while($rec=mysqli_fetch_row($data)){
echo<<<MESSAGE
			<div class="col-md-12 thumbnail">
          <h3 class="text-gray-dark">$rec[0]. $rec[4]</h3>
         
          <div class="blockquote">
            <h4>$rec[1] <br>  $rec[2]  &nbsp; &nbsp;Mob:$rec[3]</h4>
            <div class="blockquote-footer"></b>Subject:$rec[5]</b></div>
          </div>
       
        <div class="col-md-6">
         <p><b>Messages :</b> <br> $rec[6]</p>
        </div>
		</div>		
MESSAGE;
}
?>
	
	
	</div>
    <div role="tabpanel" class="tab-pane" id="subs">
	<div class="col-md-12">
          <h1 class="">Subscriber</h1>
       
          <table class="table table-striped">
            <thead>
              <tr class="Active">
                <th>SNO</th>
                <th>Subscriber</th>
                <th>Date and Time</th>
              </tr>
            </thead>
            
<?php 
include'connection.php';
//*****for showing Subscriber content****
$sql="select * from subscription order by sno desc";
$data=mysqli_query($conn,$sql);
while($rec=mysqli_fetch_row($data)){
echo<<<SUBSCRIPTION
				<tr>
                <td>$rec[0]</td>
                <td>$rec[1]</td>
                <td>Otto</td>
              </tr>
SUBSCRIPTION;
}
?>		
           
            
          </table>
        </div>
	
	
	
	</div>
    <div role="tabpanel" class="tab-pane" id="post_content">
	<div class="col-md-6">
          
		  <form class="form-group" action=" " method="post" enctype="multipart/form-data">
		  
            <div class="form-group"> <input type="text" name="head1" class="form-control" placeholder="Content Heading"><br>
		  <input type="file"  name="fupload" class="form-control" > <br>
			  <textarea name="message" class="form-control" placeholder="Description" rows="10" cols="40">write your content   </textarea><br>
			 
			  <button type="submit" name="content" class="btn btn-primary pull-right">Post</button> </form>
			  </div>
        </div>
	</div>
  </div>

</div> <!--End of the tabbale pannel-->
		  

        </div>
      </div>
         
        
    
      

 
		
  

     <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>


<?php 
include'connection.php';
//*****for showing post content****
$sql="select * from post order by sno desc";
$data=mysqli_query($conn,$sql);
while($rec=mysqli_fetch_row($data)){

echo<<<CONTENT
<div class="col-md-4 ">
					<div class="thumbnail media post-cont" onclick="post_view();">
						<img alt="ccndep" src="$rec[1]">
						<div class="caption">
							<h3>
							$rec[2]
							</h3>
							<p>
								this is a dummy post created by Imagegrafia maintained by Ashish Yadhuvanshi
							</p>
							
								
							
						</div>
					</div>
				</div>

CONTENT;
}
//****end of post content

//**for creating new post
if(isset($_POST['content'])){
	if(empty($_POST['message'])){
		echo "You can't post empty";
	}
	
	else{
	$file=$_FILES['fupload']['tmp_name'];
	$image=addslashes(file_get_contents("$file"));
	$filename=addslashes($_FILES['fupload']['name']);
	move_uploaded_file($_FILES['fupload']['tmp_name'],"post/".$_FILES['fupload']['name']);
	$location="post/".$_FILES['fupload']['name'];
	
	extract($_POST);
		$sql="insert into post values('','$location','$head1','$message')";
		
		
			
			if(mysqli_query($conn,$sql)){
				echo "post succesfully !!<br>";
				
			}
			else{
				echo "error !! while Posting";
			}
			
	}

}




?>
