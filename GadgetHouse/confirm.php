<?php include "database.php"; ?>
<?php 
 if(!empty($_POST)) {
  $email = $_SESSION['email'];

  $sql20 = "DELETE From cart WHERE Email='$email'";
  mysqli_query($link, $sql20);

  header("Location:http://localhost/GadgetHouse/index.php");
 }
?>