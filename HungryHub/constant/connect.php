<?php 
// DB credentials.
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "youthappam";
$port = 3307;
//$store_url = "http://localhost/phpinventory/";
// db connection
$connect = new mysqli('localhost', 'root', $password, 'youthappam', 3307);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  //echo "Successfully connected";
}
?>





