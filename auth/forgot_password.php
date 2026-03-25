<?php
@session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Force India Timezone to match your system
date_default_timezone_set('Asia/Kolkata');

require '../includes/db.php';

require dirname(__DIR__) . '/PHPMailer/Exception.php';
require dirname(__DIR__) . '/PHPMailer/PHPMailer.php';
require dirname(__DIR__) . '/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$message = "";

if (isset($_POST['send_otp'])) {
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));

    $user_check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    if (mysqli_num_rows($user_check) > 0) {
        $otp = rand(100000, 999999);

        // Sync these two variables to the SAME timezone
        $email_time = date("Y-m-d H:i:s");
        $expiry_time = date("Y-m-d H:i:s", strtotime('+15 minutes'));

        mysqli_query($conn, "DELETE FROM password_token WHERE email='$email'");

        $insert = "INSERT INTO password_token (email, otp, created_at, expires_at) VALUES ('$email', '$otp', '$email_time', '$expiry_time')";

        if (mysqli_query($conn, $insert)) {
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'pkapadiya257@rku.ac.in';
                $mail->Password   = 'gpjwmfrddjcwtvab';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;
                $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));

                $mail->setFrom('pkapadiya257@rku.ac.in', 'CampusCMS');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = "Password Reset OTP";
                $mail->Body    = "<h3>Your OTP is: $otp</h3><p>Valid for 15 minutes.</p>";

                if ($mail->send()) {
                    $_SESSION['forgot_email'] = $email;
                    echo "<script>alert('OTP Sent Successfully!'); window.location.href='verify_otp.php';</script>";
                    exit();
                }
            } catch (Exception $e) {
                $message = "Mailer Error: " . $mail->ErrorInfo;
            }
        } else {
            $message = "Database Error: " . mysqli_error($conn);
        }
    } else {
        $message = "Error: This email address is not registered.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center" style="height: 100vh;">
    <div class="container card p-4 shadow-sm" style="max-width: 400px;">
        <h3 class="text-center mb-4">Forgot Password</h3>

        <?php if ($message): ?>
            <div class="alert alert-danger small"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="POST" action="forgot_password.php">
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter registered email" required>
            </div>
            <button type="submit" name="send_otp" class="btn btn-primary w-100">Get OTP</button>
        </form>
        <div class="mt-3 text-center">
            <a href="login.php" class="text-decoration-none">Back to Login</a>
        </div>
    </div>
</body>

</html>