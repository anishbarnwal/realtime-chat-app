<?php
$conn = mysqli_connect("localhost","root","","chat");
if($conn){
echo "Database Connected";
}else{
echo "Error";
}

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "chat";

// $conn = mysqli_connect($servername,$username,$password,$database);
// if($conn){
//      echo "Database Connected";
//  }else{
//    echo "Error";
// }
?>


