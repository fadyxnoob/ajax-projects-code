<?php
$conn = mysqli_connect("localhost", "root", "", "my-test");
if(!$conn){
    echo "Conection Failed";
}
 $studentID = $_POST['id'];
 $query = "DELETE FROM students WHERE id = '$studentID'";
 if(mysqli_query($conn, $query)){
    echo 1;
 }else{
    echo 0;
 }
?>