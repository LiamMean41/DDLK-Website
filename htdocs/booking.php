<?php
// Include database configuration
include "includes/config.inc.php";
include "includes/function.inc.php";
include "includes/database.inc.php";
include "includes/header.inc.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Information</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="display-1">Booking Information</h1>

                <form method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="<?php echo $name; ?>"/>
                        <span class="text-danger"><?php echo $nameErr; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date" class="form-control" value="<?php echo $date; ?>" />
                    </div>

                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="time" id="time" name="time" class="form-control" value="<?php echo $time; ?>" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block" onclick="showTest()">Book Now</button>
                    <div class="test" id="test">
                    </div>
                </form>
            </div>
        </div>
    </div>



<script>
function showTest() {
  var test = document.getElementById("test");
  if (test.style.display === "none") {
    test.innerHTML = "This is the test text.";
    test.style.display = "block";
  } else {
    test.style.display = "none";
  }
}
</script>


    <!-- TODO: THE FORM SUBMITTION ITS BREAKING THE SITE -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
