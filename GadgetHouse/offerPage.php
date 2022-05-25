<?php include "database.php"; ?>
<?php include "head.php"; ?>
<?php
$sql_17 = "SELECT * FROM offeritem";
$res_17 = mysqli_query($link, $sql_17);
?>

<body>
    <?php include "header.php"; ?>
    <section id="offer-section" class="container my-4">
        <h2 class="mb-3 text-decoration-underline">Offer Items:</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <?php
            while ($rows = mysqli_fetch_assoc($res_17)) {
            ?>
                <div class="col">
                    <div class="card shadow">
                        <img src="./images/<?php echo $rows['cetagory'] ?>/<?php echo $rows['image'] ?>.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $rows['name'] ?></h6>
                            <p class="card-text m-0 text-secondary" style="font-size:13px;"> Price : <span class="price-color"><?php echo $rows['price'] ?>৳  <span class="text-info">(<?php echo $rows['offerPercentage'] ?>% off)</span></span></p>
                        </div>
                        <div class="card-footer  px-2">
                            <div class="d-flex justify-content-between" style="height:33px">
                                <form action="details.php" method="GET">
                                    <input type="hidden" name="id" value="<?php echo $rows['product_id'] ?>" />
                                    <input type="hidden" name="catagory" value=<?php echo $rows['cetagory'] ?> />
                                    <input type="hidden" name="offerPrice" value=<?php echo $rows['price'] ?> />
                                    <input class="btn btn-warning" style="font-size:12px;" type="submit" value="Details" />
                                </form>
                                <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $rows['offer_id'] ?>" />
                                    <input type="hidden" name="catagory" value=<?php echo $rows['cetagory'] ?> />
                                    <input type="hidden" name="name" value="<?php echo $rows['name'] ?>" />
                                    <input type="hidden" name="price" value="<?php echo $rows['price'] ?>" />
                                    <input class="btn btn-warning" style="font-size:12px;" type="submit" value="Add to cart" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

<?php
if (!empty($_POST)) {
  $id =  $_POST['id'];
  $category =  $_POST['catagory'];
  $email = $_SESSION['email'];
  $name =  $_POST['name'];
  $price = $_POST['price'];

  $sql19 = "SELECT * From cart WHERE Email='$email' AND Category='$category' AND ProductId='$id'";
  $result_19 = mysqli_query($link, $sql19);
  
  if ($result_19->num_rows > 0) {
    echo '<script>alert("Already added")</script>';
  } else {
    $sql12 = "INSERT INTO cart (Category, ProductId, ProductName, Price, Email) VALUES ('$category','$id', '$name', '$price', '$email')";
    $result12 = mysqli_query($link, $sql12);
  }
}
?>
