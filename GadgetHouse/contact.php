<?php include "database.php"; ?>
<?php include "head.php"; ?>
<?php include "header.php"; ?>
<body style="background-image: linear-gradient(#ddd6f3,#faaca8)">
    <div class="container my-4" >
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5 col-md-12 py-2 align-self-center">
                <h2 class="mb-4">Let's get in touch</h2>
                <p >If you get any problem or need any query, feel free to contact with us.</p>
                <br>
                <p>398/C, Road 2, Mirpur-1, Dhaka-1216</p>
                <p>gadgethouse2@gmail.com</p>
                <p>01485234789</p>
                <div>
                    <a href="https://www.facebook.com/profile.php?id=100018195018371" rel="" target="_blank"><i class="fab fa-facebook-square" style="font-size:30px;color:rgb(47, 139, 250)"></i></a>
                    <a class="ms-2" href="https://www.youtube.com/watch?v=rnx56F8cdQ0" rel="" target="_blank"><i class="fab fa-youtube" style="font-size:30px;color:rgb(209, 12, 8)"></i></a>
                    <a class="ms-2" href="https://github.com/shohanur021?tab=repositories" rel="" target="_blank"><i class="fab fa-github-square" style="font-size:30px;color:rgb(48, 47, 47)"></i></a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 py-2 px-5 rounded" style="background-color: #50C9C3;">
                <h2>Contact Us</h2>
                <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleName" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleName" >
                </div>
                <div class="mb-3">
                    <label for="exampleEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleEmail">
                </div>
                <div class="mb-3">
                    <label for="examplePhone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="examplePhone">
                </div>
                <div class="mb-3">
                    <label for="exampleMessage" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="exampleMessage" rows="3" style="resize: none;"></textarea>
                </div>
                <div class="mb-3">
              
                    <input class="btn btn-warning btn-lg" type="submit" value="Submit" />
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="js/bootstrap.bundle.min.js"></script>
<?php 
if (!empty($_POST)) {
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $phone = $_POST['phone'];
    $message =  $_POST['message'];

    $sql15 = "INSERT INTO contact (name, email, phone, message) VALUES ('$name','$email', '$phone', '$message')";
    mysqli_query($link, $sql15);
}
?>