<?php
include "conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `users` WHERE id = $id";
$result = mysqli_query($con, $sql);
if($result){
    header("location:index.php");
}