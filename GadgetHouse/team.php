<?php include "database.php"; ?>
<?php include "head.php"; ?>
<?php include "header.php"; ?>
<?php
$sql16 = "SELECT * From team ";
$result_16 = mysqli_query($link, $sql16);
?>

<body>
   <div class="container">
      <?php
      while ($rows = mysqli_fetch_assoc($result_16)) {
      ?>
         <div class="row mt-4 p-2 rounded" style="background-image: linear-gradient(#003973,#e5e5be)">
            <div class="col-7 align-self-center">
               <h3 class="text-light"><?php echo $rows['name'] ?></h3>
               <div>
                  <a href="<?php echo $rows['fb'] ?>" rel="" target="_blank"><i class="fab fa-facebook-square" style="font-size:30px;color:rgb(47, 139, 250);background:white"></i></a>
                  <a class="ms-2" href="<?php echo $rows['github'] ?>" rel="" target="_blank"><i class="fab fa-github-square" style="font-size:30px;color:rgb(48, 47, 47);background:white"></i></a>
               </div>
            </div>
            <div class="col-5">
               <img src="./images/<?php echo $rows['image'] ?>.jpg" class="img-fluid rounded" alt="">
            </div>
         </div>
      <?php
      }
      ?>
      <br>
   </div>

   <script src="js/bootstrap.bundle.min.js"></script>
</body>