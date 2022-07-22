<?php 
$servername= "localhost";
$username= "root";
$password="";
$db_name="task_db";

//sql connection 
$conn = mysqli_connect($servername ,$username ,$password ,$db_name);
// if($conn){
//     echo "connect";

// }
if(!$conn){
    echo "ConnectionFailed";
    exit();
}
