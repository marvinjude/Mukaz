<?php 
session_start();
$connection = include('../resources/conection.inc.php');
if(!isset($_SESSION['user']))
  header("Location: ../");

if(isset($_GET['e_id'])){
    $e_id =  $_GET['e_id'];
    $query = "DELETE FROM expenses WHERE id = '$e_id'";
    mysqli_query($connection, $query);
    header("Location: view.php");
}
?>