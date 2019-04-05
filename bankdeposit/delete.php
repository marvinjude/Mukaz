<?php 
session_start();
$connection = include('../resources/conection.inc.php');
if(!isset($_SESSION['user']))
  header("Location: ../");

if(isset($_GET['bd_id'])){
    $bd_id =  $_GET['bd_id'];
    $query = "DELETE FROM bank_deposits WHERE id = '$bd_id'";
    mysqli_query($connection, $query);
    header("Location: view.php");
}
?>