<?php



$servername = "localhost";
$username = "root";
$password ="";
$databasename ="register";
//create connect db//
$conN = mysqli_connect($servername,$username,$password,$databasename);

//
if(!$conn){
    die("conectionfied " .mysqli_connect_error());

}
else{
    echo('conected Successfull');
}
?>
?>