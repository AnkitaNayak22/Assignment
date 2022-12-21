<?php

$server="localhost";
$username = "root";
$password = "";
$dbname = "laundry1";


$conn=mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])){
        if(!empty($_POST['user_fullname']) && !empty($_POST['user_username']) && !empty($_POST['user_number']) &&
        !empty($_POST['user_password'])){

         $user_fullname = $_POST['user_fullname'];
         $user_username = $_POST['user_username'];
         $user_number = $_POST['user_number'];
         $user_password = $_POST['user_password'];


         $query ="insert into user(user_fullname, user_username, user_number, user_password)
         VALUES ('$user_fullname','$user_username','$user_number','$user_password')";

         $run=mysqli_query($conn,$query) or die(mysqli_error());

         if($run){
           header("Location:http://localhost/laundry-master1/index.php");
         }
         else {
            echo" Form not submitted";
         }

    }

}
else{
    echo" all fields required";
}

?>
