<head>
<style>
.media img{width:auto;height:200px;}
.post-cont:hover{ box-shadow: 10px 10px 5px #888888;
 cursor:pointer;
}

</style>

<script>
function post_view(){
	alert("Sorry No content avialable for now Come Back soon !!");
}

</script>
</head>

<div class="col-md-8" id="post1" hidden>
<form  class="form-group" action=" " method="post" enctype="multipart/form-data">
<input type="file" name="fupload"></br>
<input type="text" name="head1" placeholder="heading" size="80">
<textarea class="form-control" rows="8" cols="200" name="message"  placeholder="content">
</textarea>
<input class="btn-lg btn-success "type="submit" name="content" value="POST" id="btn">
</form>
</div>



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