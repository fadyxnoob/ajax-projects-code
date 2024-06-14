<?php

    $conn = mysqli_connect("localhost", "root", "", "my-test");
    if(!$conn){
        echo "Conection Failed";
    }
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $query = "UPDATE students SET fname = '$fname', lname = '$lname' WHERE id = '$id' ";
    if(mysqli_query($conn, $query)){
        echo 1;
    }else{
        echo 0;
    }
?>