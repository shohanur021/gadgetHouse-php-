<?php include "database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>

<body id="homepage">
  <?php include "header.php"; ?>
  <div id="carouselExampleControls" class="carousel slide carouselStyle" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php
      $countIndex = 0;
      while ($rows = mysqli_fetch_assoc($result)) {
      ?>
        <div class="carousel-item <?php if ($countIndex == 0) {
                                    echo 'active';
                                  } ?>" data-bs-interval="10000">
          <div class="row d-flex align-items-center p-5">
            <div class="col-md-7">
              <h1> <?php echo $rows['name'] ?></h1>
              <p> <?php echo $rows['details'] ?>
              <p>
              <div class="d-flex justify-content-start">
                <h3><?php echo $rows['price'] ?>৳ </h3>
                <?php
                if (!isset($_SESSION['login'])) {
                ?>
                  <form action="login.php" method="POST">
                    <input class="btn btn-success ms-5 font-1" type="submit" value="Buy Now >>" />
                  </form>
                <?php
                } else {
                ?>
                  <form action="" method="POST">
                    <input type="hidden" name="id" value="<?php echo $rows['offer_id'] ?>" />
                    <input type="hidden" name="catagory" value="carousel" />
                    <input type="hidden" name="name" value="<?php echo $rows['name'] ?>" />
                    <input type="hidden" name="price" value="<?php echo $rows['price'] ?>" />
                    <input class="btn btn-success ms-5 font-2" type="submit" value="Buy Now" />
                  </form>
                <?php
                }
                ?>
              </div>
            </div>
            <div class="col-md-5">
              <img src="<?php echo $rows['image_url'] ?>" class="d-block w-100" alt="..." />
            </div>
          </div>
        </div>
      <?php
        $countIndex++;
      }
      ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>

  <section id="mobile-section" class="container my-4">
    <br> <br> <br>
    <h2 class="mb-3 text-decoration-underline">Mobile:</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
      <?php
      while ($rows = mysqli_fetch_assoc($mobiles)) {
      ?>
        <div class="col">
          <div class="card shadow">
            <img src="./images/mobile/<?php echo $rows['Image'] ?>.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h6 class="card-title"><?php echo $rows['Name'] ?></h6>
              <p class="card-text m-0 text-secondary font-1">Processor : <span> <?php echo $rows['Processor'] ?></span></p>
              <p class="card-text m-0 text-secondary font-1"> Ram/Rom : <span> <?php echo $rows['RAM'] ?> GB/ <?php echo $rows['ROM'] ?> GB</span></p>
              <p class="card-text m-0 text-secondary font-1"> Price : <span class="price-color"><?php echo $rows['Price'] ?>৳</span></p>
            </div>
            <div class="card-footer  px-2">
              <div class="d-flex justify-content-between">
                <form action="details.php" method="GET">
                  <input type="hidden" name="id" value="<?php echo $rows['MobileID'] ?>" />
                  <input type="hidden" name="catagory" value="mobile" />
                  <input class="btn btn-warning font-2" type="submit" value="Details" />
                </form>
                <?php
                if (!isset($_SESSION['login'])) {
                ?>
                  <form action="login.php" method="POST">
                    <input class="btn btn-warning font-2" type="submit" value="Add to cart" />
                  </form>
                <?php
                } else {
                ?>
                  <form action="" method="POST">
                    <input type="hidden" name="id" value="<?php echo $rows['MobileID'] ?>" />
                    <input type="hidden" name="catagory" value="mobile" />
                    <input type="hidden" name="name" value="<?php echo $rows['Name'] ?>" />
                    <input type="hidden" name="price" value="<?php echo $rows['Price'] ?>" />
                    <input class="btn btn-warning font-2" type="submit" value="Add to cart" />
                  </form>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </section>

  <section id="headphone-section" class="container my-4 ">
    <br> <br> <br>
    <h2 class="mb-3 text-decoration-underline">Headphone:</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
      <?php
      while ($rows = mysqli_fetch_assoc($headphones)) {
      ?>
        <div class="col">
          <div class="card shadow">
            <img src="./images/headphone/<?php echo $rows['Image'] ?>.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h6 class="card-title"><?php echo $rows['Name'] ?></h6>
              <p class="card-text m-0 text-secondary font-1">Frequency : <span><?php echo $rows['Frequency'] ?></span></p>
              <p class="card-text m-0 text-secondary font-1"> Sensitivity : <span><?php echo $rows['Sensitivity'] ?></span></p>
              <p class="card-text m-0 text-secondary font-1"> Price : <span class="price-color"><?php echo $rows['Price'] ?>৳</span></p>
            </div>
            <div class="card-footer  px-2">
              <div class="d-flex justify-content-between">
                <form action="details.php" method="GET">
                  <input type="hidden" name="id" value="<?php echo $rows['HeadphoneID'] ?>" />
                  <input type="hidden" name="catagory" value="headphone" />
                  <input class="btn btn-warning font-2" type="submit" value="Details" />
                </form>
                <?php
                if (!isset($_SESSION['login'])) {
                ?>
                  <form action="login.php" method="POST">
                    <input class="btn btn-warning font-2" type="submit" value="Add to cart" />
                  </form>
                <?php
                } else {
                ?>
                  <form action="" method="POST">
                    <input type="hidden" name="id" value="<?php echo $rows['HeadphoneID'] ?>" />
                    <input type="hidden" name="catagory" value="headphone" />
                    <input type="hidden" name="name" value="<?php echo $rows['Name'] ?>" />
                    <input type="hidden" name="price" value="<?php echo $rows['Price'] ?>" />
                    <input class="btn btn-warning font-2" type="submit" value="Add to cart" />
                  </form>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </section>

  <section id="smart-watch-section" class="container my-4 ">
    <br> <br> <br>
    <h2 class="mb-3 text-decoration-underline">Smart Watch:</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
      <?php
      while ($rows = mysqli_fetch_assoc($watches)) {
      ?>
        <div class="col">
          <div class="card shadow">
            <img src="./images/smartwatch/<?php echo $rows['image'] ?>.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h6 class="card-title"><?php echo $rows['name'] ?></h6>
              <p class="card-text m-0 text-secondary font-1" >Compatibility : <span><?php echo $rows['Compatibility'] ?></span></p>
              <p class="card-text m-0 text-secondary font-1"> Price : <span class="price-color"><?php echo $rows['price'] ?>৳</span></p>
            </div>
            <div class="card-footer  px-2">
              <div class="d-flex justify-content-between">
                <form action="details.php" method="GET">
                  <input type="hidden" name="id" value="<?php echo $rows['WatchID'] ?>" />
                  <input type="hidden" name="catagory" value="smartwatch" />
                  <input class="btn btn-warning font-2" type="submit" value="Details" />
                </form>
                <?php
                if (!isset($_SESSION['login'])) {
                ?>
                  <form action="login.php" method="POST">
                    <input class="btn btn-warning font-2" type="submit" value="Add to cart" />
                  </form>
                <?php
                } else {
                ?>
                  <form action="" method="POST">
                    <input type="hidden" name="id" value="<?php echo $rows['WatchID'] ?>" />
                    <input type="hidden" name="catagory" value="smartwatch" />
                    <input type="hidden" name="name" value="<?php echo $rows['name'] ?>" />
                    <input type="hidden" name="price" value="<?php echo $rows['price'] ?>" />
                    <input class="btn btn-warning font-2" type="submit" value="Add to cart" />
                  </form>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </section>

  <footer class="bg-dark text-white mt-5">
    <p class='text-center'>©️gadgetHouse 2021.All rights reserved</p>
  </footer>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
if (!empty($_POST)) {
  $id =  $_POST['id'];
  $category =  $_POST['catagory'];
  $email = $_SESSION['email'];
  $name =  $_POST['name'];
  $price = $_POST['price'];

  $sql11 = "SELECT * From cart WHERE Email='$email' AND Category='$category' AND ProductId='$id'";
  $result_11 = mysqli_query($link, $sql11);

  if ($result_11->num_rows > 0) {
    echo '<script>alert("Already added")</script>';
  } else {
    $sql12 = "INSERT INTO cart (Category, ProductId, ProductName, Price, Email) VALUES ('$category','$id', '$name', '$price', '$email')";
    mysqli_query($link, $sql12);
  }
}
?>