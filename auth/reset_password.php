<?php
@session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('Asia/Kolkata');
require '../includes/db.php';

if (!isset($_SESSION['otp_verified']) || !isset($_SESSION['forgot_email'])) {
    header("Location: forgot_password.php");
    exit();
}

$message = "";
$email = $_SESSION['forgot_email'];

if (isset($_POST['reset_btn'])) {
    // 1. Get the raw passwords from the form
    $raw_password = $_POST['password'];
    $confirm_pass = $_POST['confirm_password'];

    if ($raw_password === $confirm_pass) {

        // 2. CREATE THE HASH (This is the missing step!)
        // This converts "myPassword123" into a secure string like "$2y$10$..."
        $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);

        // 3. Update the users table with the HASHED password
        $update_query = "UPDATE users SET password = '$hashed_password' WHERE email = '$email'";

        if (mysqli_query($conn, $update_query)) {
            mysqli_query($conn, "DELETE FROM password_token WHERE email = '$email'");
            session_destroy();

            echo "<script>alert('Password updated and secured! Please login.'); window.location.href='login.php';</script>";
            exit();
        } else {
            $message = "Database Error: " . mysqli_error($conn);
        }
    } else {
        $message = "Passwords do not match!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password | CampusCMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #0f172a;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .reset-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <div class="reset-card">
        <h3 class="fw-bold text-center mb-3">New Password</h3>
        <p class="text-center text-muted small">Set a new password for <br><b><?php echo $email; ?></b></p>

        <?php if ($message): ?>
            <div class="alert alert-danger py-2 small"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label small fw-bold">New Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required minlength="4">
            </div>
            <div class="mb-3">
                <label class="form-label small fw-bold">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" placeholder="••••••••" required>
            </div>
            <button type="submit" name="reset_btn" class="btn btn-primary w-100">Update Password</button>
        </form>
    </div>
</body>

</html>