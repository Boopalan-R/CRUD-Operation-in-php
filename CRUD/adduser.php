<?php
if(!isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $con=mysqli_connect("localhost","root","","crud");
    $insert = "insert into users(first_name,last_name,email,gender)VALUES('$first_name','$last_name','$email','$gender')";
    $result = mysqli_query($con,$insert);
    if($result){
        echo "add success";
        header("location:index.php");
    }else{
        echo "failed";
    }
}
?>