<?php
@session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Force India Timezone
date_default_timezone_set('Asia/Kolkata');

require '../includes/db.php';

$error = "";
$email = $_SESSION['forgot_email'] ?? '';

if (empty($email)) {
    header("Location: forgot_password.php");
    exit();
}

if (isset($_POST['verify_btn'])) {
    $otp_input = trim($_POST['otp']);

    // Tell MySQL to use India Time for this specific query check
    mysqli_query($conn, "SET time_zone = '+05:30'");

    // Check if OTP matches AND if the current DB time is still before expires_at
    $q = "SELECT * FROM password_token 
          WHERE email='$email' 
          AND otp='$otp_input' 
          AND expires_at > NOW()";

    $res = mysqli_query($conn, $q);

    if (mysqli_num_rows($res) > 0) {
        $_SESSION['otp_verified'] = true;
        header("Location: reset_password.php");
        exit();
    } else {
        // If query finds nothing, it means wrong OTP or expired
        $error = "Incorrect OTP or it has expired. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Verify OTP | CampusCMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #0f172a;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .otp-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .otp-input {
            letter-spacing: 10px;
            font-size: 24px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="otp-card text-center">
        <h3 class="fw-bold mb-3">Verify OTP</h3>
        <p class="text-muted small">We sent a 6-digit code to <br><b><?php echo $email; ?></b></p>

        <?php if ($error): ?>
            <div class="alert alert-danger py-2 small"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-4">
                <input type="text" name="otp" class="form-control otp-input" placeholder="000000" maxlength="6" required>
            </div>
            <button type="submit" name="verify_btn" class="btn btn-primary w-100 mb-3">Verify & Proceed</button>
        </form>
        <div class="small">
            <a href="forgot_password.php" class="text-decoration-none">Resend Code</a>
        </div>
    </div>
</body>

</html>