<?php include "database.php"; ?>
 <?php 
       if (!empty($_GET)){
           $CartId = $_GET['removeId'];
           $sql_14 = "DELETE FROM cart WHERE CartId='$CartId'";
           mysqli_query($link, $sql_14);
       }
       header("Location:http://localhost/GadgetHouse/cart.php");
?>