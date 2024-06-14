<?php
$conn = mysqli_connect("localhost", "root", "", "my-test");
if(!$conn){
    echo "Conection Failed";
}
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$query = "INSERT INTO `students`(`fname`, `lname`) VALUES ('$fname','$lname')";
if(mysqli_query($conn, $query)){
    echo 1;
}else{
    echo 0;
}


?>