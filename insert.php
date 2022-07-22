<?php
include_once 'connect.php';
if(isset($_POST['submit']))
{    
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $phone = $_POST['phone'];
     $sql = "INSERT INTO my_data (fname, lname, phone) VALUES ('$fname','$lname','$phone')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
   
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>