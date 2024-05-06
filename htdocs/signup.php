<?php
include('includes/config.inc.php');
include('includes/function.inc.php');
include('includes/database.inc.php');
include('includes/header.inc.php');

if (isset($_POST['username'])) {
    $email = $_POST['email'];

    // Check if email already exists in the database
    $checkStmt = $connect->prepare('SELECT COUNT(*) FROM users WHERE email = ?');
    $checkStmt->bind_param('s', $email);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();
    $emailCount = $checkResult->fetch_row()[0];

    if ($emailCount > 0) {
        // Email already exists

        set_message("The email address is already in use.");
        header('Location: signup.php');
        die();
    }

    // Proceed with user insertion if email is not a duplicate
    if ($stm = $connect->prepare('INSERT INTO users (username, email, password, active) VALUES (?, ?, ?, ?)')) {
        $hashed = SHA1($_POST['password']);
        $active = 1; // Assuming 1 means active, modify as needed
        $stm->bind_param('sssi', $_POST['username'], $_POST['email'], $hashed, $active);
        $stm->execute();

        set_message("A new user " . $_SESSION['username'] . " has been added");
        header('Location: index.php');
        die();
    } else { 
        echo 'Could not prepare statement';
    }
}
?>

<br>

<div class="container mt-5">
    <div class="row justify-content center">
        <h1 class="display-1">Sign Up</h1>
        <form method="post">
            <!-- Username input -->
            <div class="form-outline mb-4">
                <input type="text" id="username" name="username" class="form-control" />
                <label class="form-label" for="username">Username</label>
            </div>

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
            
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
        </form>
    </div>
</div>

<?php
include('includes/footer.inc.php');
?>
