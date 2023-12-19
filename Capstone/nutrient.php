<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','samplelogindb');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];
$txtTemp = $_POST['txtTemp'];
$txtHum = $_POST['txtHum'];
$txtImg = $_POST['txtImg'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact`(`id`, `Nitrogen`, `Phosphorus`, `Calcium`, `pH`, `Temperature`, `Humidity`, `Images`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage', '$txtTemp', '$txtHum', '$txtImg')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Nutrient Data Inserted Successfully";
}
}
else
{
	echo "Submission error";
	
}
?>
