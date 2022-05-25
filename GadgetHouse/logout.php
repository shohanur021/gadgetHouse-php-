<?php include "database.php"; ?>
<?php
if (isset($_SESSION['login'])) {
    session_unset();
    session_destroy();
}                     
header("Location:http://localhost/GadgetHouse/index.php");
?>