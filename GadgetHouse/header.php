<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
        <div class="container-fluid">
            <div class="navbar-brand d-flex">
                <img src="./images/logo.png" alt="logo" width="58" height="45" class="d-inline-block align-text-top ms-2">
                <h2 class="my-auto logo-design">GadgetHouse</h2>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item me-3">
                        <a class="nav-link nav-decoration text-white" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Products</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#mobile-section">Mobile</a></li>
                            <li><a class="dropdown-item" href="#headphone-section">Headphone</a></li>
                            <li><a class="dropdown-item" href="#smart-watch-section">Smart Watch</a></li>
                        </ul>
                    </li>
                    <?php
                     if(isset($_SESSION['login']) && isset($_SESSION['status'])){
                     if($_SESSION['status']==3){
                    ?>
                        <li class="nav-item me-3">
                            <a class="nav-link nav-decoration text-white" href="offerPage.php">Special Offer</a>
                        </li>
                    <?php
                     }
                    }
                    ?>
                    <li class="nav-item me-3">
                        <a class="nav-link nav-decoration text-white" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link nav-decoration text-white" href="team.php">Team</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link nav-decoration text-white" href="aboutUS.php">About Us</a>
                    </li>
                    <li class="nav-item me-4">
                        <?php
                        if (isset($_SESSION['login'])) {
                        ?>
                            <form class="my-1" action="logout.php" method="POST">
                                <input class="btn btn-danger text-white" style="font-size:12px;" type="submit" value="logOut" />
                            </form>
                        <?php
                        } else {
                        ?>
                            <form class="my-1" action="login.php" method="POST">
                                <input class="btn btn-info text-dark" style="font-size:12px;" type="submit" value="login" />
                            </form>
                        <?php
                        }
                        ?>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link nav-decoration text-white" href="cart.php"> <i class="fas fa-shopping-cart" style="font-size:25px;color:#CEF05E"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>