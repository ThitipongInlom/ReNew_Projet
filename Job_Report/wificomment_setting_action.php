<?php  
$host = '172.16.1.253';
$username = 'root';
$password = 'itminadthezign';
$db = 'new_projet'; 
$conn = new mysqli($host, $username, $password, $db);
if ($_POST['id']) {
$sql ="DELETE FROM `new_projet`.`set_level_below` WHERE `set_level_below`.`Level_Below_id` ='".$_POST['id']."'";
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	echo $sql;
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
}
if ($_POST['add']) {
	$sql = "INSERT INTO set_level_below (Level_Below_data)VALUES ('".$_POST['add']."')";
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
	     	
?>