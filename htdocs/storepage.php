
<?php

include('includes/config.inc.php');
include('includes/function.inc.php');
include('includes/database.inc.php');
include('includes/header.inc.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>


<!DOCTYPE html>
<html>
<head>
    <title>Products available</title>
    <style>
        .box {
            background-color: #f2f2f2;
            border: 5px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            width: 300px;
            height: auto;
            overflow: hidden;
            float: left;
            margin-right: 50px;
            margin-bottom: 10px;
        }
        .box a {
            text-decoration: none;
            color: #333;
        }
        h1 {
            color: black;
        }
        h2 {
            color: grey;
        }
        p {
            color: black; /* Changed color to black for better visibility */
        }
    </style>
</head>
<body>
    <h1>Here are our latest products:</h1>

    <div class="box">
        <h2><a href="#">Samsung Galaxy S10 Screen Replacement</a></h2>
        <p>Phone</p>
        <p>Samsung</p>
        <p>$150.00</p>
    </div>

    <div class="box">
        <h2><a href="#">Samsung Galaxy Note 20 Screen Replacement</a></h2>
        <p>Phone</p>
        <p>Samsung</p>
        <p>$200.00</p>
    </div>

    <div class="box">
        <h2><a href="#">Samsung Galaxy S20 Ultra Screen Replacement</a></h2>
        <p>Phone</p>
        <p>Samsung</p>
        <p>$250.00</p>
    </div>

    <div class="box">
        <h2><a href="#">Apple iPhone 11 Screen Replacement</a></h2>
        <p>Phone</p>
        <p>Apple</p>
        <p>$180.00</p>
    </div>

    <div class="box">
        <h2><a href="#">Apple iPhone 12 Pro Screen Replacement</a></h2>
        <p>Phone</p>
        <p>Apple</p>
        <p>$220.00</p>
    </div>

    <div class="box">
        <h2><a href="#">Apple iPhone 12 Pro Max Screen Replacement</a></h2>
        <p>Phone</p>
        <p>Apple</p>
        <p>$250.00</p>
    </div>

    <div class="box">
        <h2><a href="#">Asus ROG Strix G15 Display Repair</a></h2>
        <p>Laptop</p>
        <p>Asus</p>
        <p>$300.00</p>
    </div>

    <div class="box">
        <h2><a href="#">Asus ZenBook 14 Screen Replacement</a></h2>
        <p>Laptop</p>
        <p>Asus</p>
        <p>$250.00</p>
    </div>

    <div class="box">
        <h2><a href="#">Razer Blade 15 Screen Repair</a></h2>
        <p>Laptop</p>
        <p>Razer</p>
        <p>$350.00</p>
    </div>

    <div class="box">
        <h2><a href="#">Razer Blade Stealth 13 Display Replacement</a></h2>
        <p>Laptop</p>
        <p>Razer</p>
        <p>$280.00</p>
    </div>

    <div class="box">
        <h2><a href="#">MacBook Pro 13 Battery Replacement</a></h2>
        <p>Laptop</p>
        <p>Apple</p>
        <p>$200.00</p>
    </div>

    <div class="box">
        <h2><a href="#">MacBook Air 2020 Keyboard Repair</a></h2>
        <p>Laptop</p>
        <p>Apple</p>
        <p>$180.00</p>
    </div>

</body>
</html>
