<?php include "database.php"; ?>
<?php include "head.php"; ?>
<?php
if (!empty($_GET)) {
    $id = $_GET['id'];
    $catagory = $_GET['catagory'];
    $sql5 = "SELECT * FROM $catagory WHERE MobileID=$id";
    $sql6 = "SELECT * FROM $catagory WHERE HeadphoneID=$id";
    $sql7 = "SELECT * FROM $catagory WHERE WatchID=$id";
    $resultMob = mysqli_query($link, $sql5);
    $resultHeadP = mysqli_query($link, $sql6);
    $resultWatch = mysqli_query($link, $sql7);
    if ($catagory == 'mobile') {
        while ($row = $resultMob->fetch_assoc()) {
?>          
<body>
            <?php include "header.php"; ?>
            <div class="container details">
                <div class="text-center mb-3">
                    <img class="mobile-img" src="./images/mobile/<?php echo $row['Image'] ?>.jpg" />
                </div>
                <h3><?php echo $row["Name"] ?></h3>
                <h5>Connectivity</h5>
                <p>Network: <span><?php echo $row["Network"] ?></span></p>
                <p>SIM: <span><?php echo $row["Sim"] ?></span></p>
                <p>USB Type-C: <span><?php echo $row["USB-Type-C"] ?></span></p>
                <h5>Body</h5>
                <p>Material: <span><?php echo $row["Material"] ?></span></p>
                <p>Weight: <span><?php echo $row["Weight"] ?></span></p>
                <h5>Display</h5>
                <p>Size: <span><?php echo $row["Size"] ?></span></p>
                <p>Resolution: <span><?php echo $row["DisplayResolution"] ?></span></p>
                <p>Technology: <span><?php echo $row["Technology"] ?></span></p>
                <p>Protection: <span><?php echo $row["Protection"] ?></span></p>
                <h5>Back Camera</h5>
                <p>Resolution: <span><?php echo $row["Back-Camera-Resolution"] ?></span></p>
                <p>Video Recording: <span><?php echo $row["Video-Recording"] ?></span></p>
                <h5>Front Camera</h5>
                <p>Resolution: <span><?php echo $row["Front-Camera-Resolution"] ?></span></p>
                <p>Features: <span><?php echo $row["Features"] ?></span></p>
                <h5>Battery</h5>
                <p>Type and Capacity: <span><?php echo $row["Type-and-Capacity"] ?></span></p>
                <p>Fast Charging: <span><?php echo $row["Fast-Charging"] ?></span></p>
                <h5>Performance</h5>
                <p>Operating System: <span><?php echo $row["Operating System"] ?></span></p>
                <p>Chipset: <span><?php echo $row["Chipset"] ?></span></p>
                <p>RAM: <span><?php echo $row["RAM"] ?></span></p>
                <p>Processor: <span><?php echo $row["Processor"] ?></span></p>
                <p>GPU: <span><?php echo $row["GPU"] ?></span></p>     
                <h5>Storage</h5>
                <p>ROM: <span><?php echo $row["ROM"] ?></span></p>    
                <h5>Others</h5>
                <p>3.5mm Jack: <span><?php echo $row["3.5mm Jack"] ?></span></p>    
                <p>Sensors: <span><?php echo $row["Sensors"] ?></span></p> 
                <?php
                 if(isset($_GET['offerPrice'])){
                ?>  
                <h5>Price: <span><?php echo $_GET['offerPrice'] ?></span></h5> 
                <?php
                }else{
                ?> 
                <h5>Price: <span><?php echo $row["Price"] ?></span></h5> 
                 <?php
                }
                ?> 
            </div>
<?php
        }
    }
    else if($catagory == 'headphone'){
            while ($row = $resultHeadP->fetch_assoc()) {       
?>
             <div class="container">
                <div class="text-center mb-3">
                    <img class="mobile-img" src="./images/headphone/<?php echo $row['Image'] ?>.jpg" />
                </div>
                <h3><?php echo $row["Name"] ?></h3>
                <p>Sensitivity: <span><?php echo $row["Sensitivity"] ?></span></p>    
                <p>CableLength: <span><?php echo $row["CableLength"] ?></span></p>  
                <p>Connectivity: <span><?php echo $row["Connectivity"] ?></span></p>    
                <p>Frequency: <span><?php echo $row["Frequency"] ?></span></p>  
                <?php
                 if(isset($_GET['offerPrice'])){
                ?>  
                <h5>Price: <span><?php echo $_GET['offerPrice'] ?></span></h5> 
                <?php
                }else{
                ?> 
                <h5>Price: <span><?php echo $row["Price"] ?></span></h5> 
                 <?php
                }
                ?>
            </div>
<?php 
        }
    }  
    else if($catagory == 'smartwatch'){
        while ($row = $resultWatch->fetch_assoc()) {       
?>
         <div class="container">
            <div class="text-center mb-3">
                <img class="mobile-img" src="./images/smartwatch/<?php echo $row['image'] ?>.jpg" />
            </div>
            <h3><?php echo $row["name"] ?></h3>
            <p>Compatibility: <span><?php echo $row["Compatibility"] ?></span></p>    
            <p>Bluetooth: <span><?php echo $row["Bluetooth"] ?></span></p>  
            <p>Display: <span><?php echo $row["Display"] ?></span></p>    
            <p>Weight: <span><?php echo $row["Weight"] ?></span></p>  
            <p>BatteryCapacity: <span><?php echo $row["BatteryCapacity"] ?></span></p>    
            <p>BatteryLife: <span><?php echo $row["BatteryLife"] ?></span></p>  
            <?php
                 if(isset($_GET['offerPrice'])){
                ?>  
                <h5>Price: <span><?php echo $_GET['offerPrice'] ?></span></h5> 
                <?php
                }else{
                ?> 
                <h5>Price: <span><?php echo $row["price"] ?></span></h5> 
                 <?php
                }
                ?>
            <script src="js/bootstrap.bundle.min.js"></script>
            </div>
<?php 
    }
} 
}
?>
</body>