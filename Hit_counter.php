<?php 
 class Database{
	
	public function connection($dbname){
		$servername="localhost";
		$username="root";
		$password="";
		$conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
		die("Unable to connect db $dbname <br> ".mysqli_error());
		}
		else{
	
		//echo "$dbname connected successfully <br>";
		return $conn;
		}
	}
	//ip info func
	function getUserIP(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
		return $ip;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
		return $ip;
    }
    else
    {
        $ip = $remote;
		return $ip;
    }

    
}


		//end of ip address  function
	public function visitorInfo($dbname,$tablename,$ip_address,$browser){
		$conn=new Database();
		$database_obj=$conn->connection($dbname);
		$sql="insert into $tablename (ip_address) values('$ip_address')";
		if(mysqli_query($database_obj,$sql)){
			echo "recored user info";
		}
		else{
			echo "error";
		}
	}
	public function hitCounter($dbname,$tablename){
		$conn=new Database();
		$database_obj=$conn->connection($dbname);
		
		$sql="select sno from $tablename where sno=(select max(sno) from $tablename)";
		$data=mysqli_query($database_obj,$sql);
		$count=0;
		while($rec=mysqli_fetch_array($data)){
		//echo "$rec[sno]";
		$count=$rec['sno'];
			}
			
			return $count;
		
	}
 }
	
 

$conn=new Database();
/* $conn->visitorInfo("imagegrafia","hits","ip_addr","browser");//visitor info
$count=$conn->hitCounter("imagegrafia","hits");//print return type of this fun
echo "$count";
 */$ip_addr=$conn->getUserIp();
echo "$ip_addr";
?>
