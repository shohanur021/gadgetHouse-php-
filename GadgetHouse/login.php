<?php include "database.php"; ?>
<?php include "head.php"; ?>

<body>
    <div class="login-container h-100 d-flex align-items-center">
        <div class="login-form mx-auto bg-white rounded">
            <form action="" method="POST">
                <div class="form-group my-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="mail" id="exampleInputEmail1" required />
                </div>
                <div class="form-group my-3">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required />
                </div>
                <div class="d-flex justify-content-center">
                    <input type="submit" class="btn btn-info my-3 w-25" value="Login" />
                </div>
                <p class="text-center">Don't have an account yet?</p>
            </form>
            <a href="register.php"  alt=""><p>Register Now</p></a>
        </div>
    </div>
</body>
<?php
if (!empty($_POST)) {
    $email = $_POST['mail'];
    $password = md5($_POST['password']);

    $sql_8 = "SELECT * FROM register WHERE Email='$email' AND Password='$password'";
    $result_8 = mysqli_query($link, $sql_8);
    $sql_9 = "SELECT * FROM register WHERE Email='$email'";
    $result_9 = mysqli_query($link, $sql_9);

    if ($result_8->num_rows == 1) {
        $row_8 = mysqli_fetch_assoc($result_8);
        if ($row_8['Status'] != 4) {
            if (!isset($_SESSION['login'])) {
                $_SESSION['login'] = true;
                $_SESSION['username'] = $row_8['UserName'];
                $_SESSION['email'] = $row_8['Email'];
                $_SESSION['status'] = $row_8['Status'];
                header("Location:http://localhost/GadgetHouse/index.php");
            }
        } else {
            echo '<script>alert("The user is banned")</script>';
        }
    } else {
        if ($result_9->num_rows == 1) {
            echo '<script>alert("Wrong Password")</script>';
        } else {
            echo '<script>alert("The user is not registerd")</script>';
        }
    }
}

if (isset($_SESSION['login'])) {
    header("Location:http://localhost/GadgetHouse/index.php");
}
?>

<script src="js/bootstrap.bundle.min.js"></script>