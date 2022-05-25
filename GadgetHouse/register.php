<?php include "database.php"; ?>
<?php include "head.php"; ?>

<body>
    <div class="login-container h-100 d-flex align-items-center">
        <div class="login-form mx-auto bg-white">
            <form action="" method="POST">
                <div class="form-group my-3">
                    <label for="exampleInputName">Enter Your Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName" required />
                </div>
                <div class="form-group my-3">
                    <label for="exampleInputEmail">Enter Your Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail" required />
                </div>
                <div class="form-group my-3">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword" required />
                </div>
                <div class="d-flex justify-content-center">
                    <input type="submit" class="btn btn-info my-3 w-25" value="Register" />
                </div>
            </form>
        </div>
    </div>
</body>

<?php
if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    date_default_timezone_set('Asia/Dhaka');
    $date = date('Y-m-d h:i:s', time());
    echo $date;

    $sql12 = "INSERT INTO register (UserName, Email, Password, CreatedDate, Status) VALUES ('$name','$email', '$password', '$date', '1')";
    $result12 = mysqli_query($link, $sql12);

    header("Location:http://localhost/GadgetHouse/login.php");
}


if (isset($_SESSION['login'])) {
    header("Location:http://localhost/GadgetHouse/index.php");
}
?>