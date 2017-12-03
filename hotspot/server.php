<?php 
header('Access-Control-Allow-Origin: *'); 
$ip = "172.16.0.129";
$exe= exec("ping -n 1 $ip");
   if(!$exe){ 	
   $status = 'Offline';	
   }else{
   $status = 'Online';
   }   
$GET = $_GET['username'];
$host = '172.16.0.240';
	        $username = 'root';
	        $password = '';
	        $db = 'new_projet'; 
	        $conn = new mysqli($host, $username, $password, $db);
	        $sql="SELECT * from set_level_below WHERE Level_Below_data='".$GET."'";
	        $result = $conn->query($sql);
			$row = mysqli_num_rows($result);
$Data = array(
	'status' => $status, 
	'num_row'=> $row,
	'username' => $GET);

echo json_encode($Data);

?>