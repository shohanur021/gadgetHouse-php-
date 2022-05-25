<?php include "database.php"; ?>
<?php include "head.php"; ?>
<?php include "header.php"; ?>
<?php
if (!isset($_SESSION['login'])) {
    header("Location:http://localhost/GadgetHouse/login.php");
}
$mail = $_SESSION['email'];
$sql13 = "SELECT * From cart WHERE Email='$mail'";
$result_13 = mysqli_query($link, $sql13);
?>

<body>
    <?php
    if ($result_13->num_rows > 0) {
    ?>
        <table class="table table-success table-striped container mt-3 ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ProductName</th>
                    <th scope="col">price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Sub Price</th>
                    <th scope="col">Delete Item</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $c = 1;
                $totalDom  = [];
                while ($rows = mysqli_fetch_assoc($result_13)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $c ?></th>
                        <td><?php echo $rows['ProductName'] ?></td>
                        <td><?php echo $rows['Price'] ?></td>
                        <td>
                            <input onchange="quantityChange('qu<?php echo $c ?>', <?php echo $rows['Price'] ?>, 'sub<?php echo $c ?>')" id="qu<?php echo $c ?>" type="number" name="quantity" min="1" value="1" autocomplete="off" />
                        </td>
                        <td id="sub<?php echo $c ?>"> <?php echo $rows['Price'] ?> </td>
                        <td>
                            <form action="cartDelete.php" method="GET" style="margin:0px" ;>
                                <input type="hidden" name="removeId" value="<?php echo $rows['CartId'] ?>" />
                                <input type="submit" name="remove-btn" value="Remove" id='removeBtn' />
                            </form>
                        </td>
                    </tr>
                <?php
                    array_push($totalDom, "sub$c");
                    $c++;
                }
                ?>
                <tr class="table-light">
                    <th></th>
                    <td></td>
                    <td></td>
                    <td class="text-center text-danger fw-bold fs-5">Total Price =</td>
                    <td id="totalP" class="fw-bold pt-2"></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <form action="confirm.php" method="POST">
            <input type="hidden" name="confirm"  value="done" />
            <input type="submit" value="Confirm Order" class="btn btn-success mt-4 mx-auto d-block" />
        </form>
    <?php
    } else {
    ?>
        <img src="./images/empty.png" class="img-fluid mx-auto mt-4 d-block " alt="empty cart">
    <?php
    }
    ?>
</body>

<script src="js/bootstrap.bundle.min.js"></script>
<script>
    function quantityChange(i, p, s) {
        var x = document.getElementById(i).value;
        if (x > 0) {
            var mul = x * p;
            document.getElementById(s).innerText = mul;
            totalCalculate();
        } else {
            alert("negative number not expectable");
        }
    }

    function totalCalculate() {
        var total = 0;
        var subId = <?php echo json_encode($totalDom); ?>;
        subId.map(si => {
            total = total + parseInt(document.getElementById(si).innerText);
        });
        document.getElementById('totalP').innerText = total;
    }
    totalCalculate();
</script>