<?php
include("config.php");
extract($_POST);
$query = "INSERT INTO `contact-data`(`firstname`, `lastname`, `phone`, `email`, `message`) VALUES ('".$firstname."','".$lastname."',".$phone.",'".$email."','".$message."')";
$result = $mysqli->query($query);
if(!$result){
    echo "Couldn't enter data: ".$mysqli->error;
}else{
echo "Thank You For Contacting Us ";}
$mysqli->close();

?>
