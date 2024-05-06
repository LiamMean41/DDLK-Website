
<?php
//includes
include "includes/config.inc.php";
include "includes/function.inc.php";
include "includes/database.inc.php";
include "includes/header.inc.php";

if (mysqli_connect_errno()) {
    exit("Failed to connect to MySQL: " . mysqli_connect_error());
}

if(isset($_SESSION['id']))
    {
       header('Location: storepage.php');
        die();
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Products available</title>
    <style>
        .container {
            
            justify-content: center;
        }
        .box {
            background-color: #f2f2f2;
            border: 5px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 300px;
            height: auto;
            overflow: hidden;
        }
        .box a {
            text-decoration: none;
            color: #333;
        }
        h1 {
            color: black;
            text-align: center;
        }
        h2 {
            color: grey;
        }
        p {
            color: black;
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

</div>
</div>

</html>


<?php


if (!isset($_SESSION["id"])) {
    if (isset($_POST["email"])) {
        if (
            $stm = $connect->prepare(
                "SELECT * FROM users WHERE email = ? AND  password = ? AND active = 1"
            )
        ) {
            $hashed = SHA1($_POST["password"]);
            $stm->bind_param("ss", $_POST["email"], $hashed);
            $stm->execute();

            $result = $stm->get_result();
            $user = $result->fetch_assoc();

            if ($user) {
                $_SESSION["id"] = $user["id"];
                $_SESSION["email"] = $user["email"];
                $_SESSION["username"] = $user["username"];

                set_message(
                    "You have successfully logged in " . $_SESSION["username"]
                );
                header("Location: storepage.php");
                die();
            }
            $stm->close();
            //var_dump($user);
        } else {
            echo "Could not prepare statement";
        }
    } 
?>

<br>


<!-- Login input -->
<br><br><br>
<link rel="stylesheet" href="css/mainstyle.css">
<div class="container mt-5">
    <div class="row justify-content center" id="wrap">
        <div class="col-mid-6">
            <h1 class="display-1">Login</h1>
            <form method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control" />
                    <label class="form-label" for="email">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control" />
                    <label class="form-label" for="password">Password</label>
                </div>

                <!-- Simple link -->
                <div class="col">
                <a href="signup.php">Sign up!</a>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </form>
        </div>
    </div>
</div>
</div>
</head>



<br>

<?php
} ?>


<?php //var_dump($_POST); //Helps to see what data is being past
include "includes/footer.inc.php";

?>
