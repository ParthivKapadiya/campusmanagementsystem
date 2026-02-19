<?php
$pageTitle = "Login | CampusCMS";

// Use absolute paths based on the document root
$root = $_SERVER['DOCUMENT_ROOT'] . '/campusmanagementsystem/';

if (file_exists($root . 'db_config.php')) {
    include_once $root . 'db_config.php';
    include_once $root . 'includes/header.php';
    include_once $root . 'includes/navbar.php';
} else {
    die("Critical Error: The file " . $root . "db_config.php was not found. Please check your folder names.");
}
?>

<style>
    /* -------------------- REGISTER PAGE PREMIUM CSS -------------------- */
    .register-section {
        min-height: 100vh;
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        padding: 120px 0 80px 0;
        position: relative;
        overflow: hidden;
    }

    /* Decorative background glow */
    .register-section::before {
        content: '';
        position: absolute;
        width: 500px;
        height: 500px;
        background: var(--primary-glow);
        border-radius: 50%;
        top: -100px;
        left: -100px;
        filter: blur(100px);
        z-index: 0;
    }

    .register-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 40px;
        box-shadow: 0 40px 100px rgba(15, 23, 42, 0.1);
        z-index: 1;
        position: relative;
    }

    .reg-header {
        background: var(--dark);
        padding: 40px;
        border-radius: 40px 40px 0 0;
        text-align: center;
        color: white;
    }

    .reg-header h2 span {
        color: var(--accent);
    }

    .form-label {
        font-weight: 700;
        color: var(--dark);
        font-size: 0.85rem;
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-control,
    .form-select {
        padding: 12px 20px;
        border-radius: 15px;
        border: 2px solid #edf2f7;
        background: #f8fafc;
        transition: 0.3s;
    }

    .form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 4px var(--primary-glow);
        background: white;
    }

    /* Custom Profile Upload Button */
    .file-upload-wrapper {
        position: relative;
        width: 100%;
    }

    .btn-social {
        border: 2px solid #edf2f7;
        border-radius: 15px;
        padding: 10px;
        transition: 0.3s;
        background: white;
        width: 100%;
    }

    .btn-social:hover {
        background: #f8fafc;
        border-color: var(--primary);
        color: var(--primary);
    }

    .stepper-text {
        font-size: 0.8rem;
        color: #64748b;
        font-weight: 600;
    }
</style>

<div class="register-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">
                <div class="register-card">
                    <div class="reg-header">
                        <div class="badge-glow mb-2">Student & Faculty Portal</div>
                        <h2>Create Your <span>Account</span></h2>
                        <p class="text-white-50 mb-0">Enter your details to access the management system</p>
                    </div>

                    <div class="card-body p-5">
                        <form action="register.php" method="POST" enctype="multipart/form-data" id="campusRegForm">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <i class="bi bi-person-badge text-primary fs-4"></i>
                                        <span class="stepper-text text-uppercase">Basic Information</span>
                                    </div>
                                    <hr class="mt-0 opacity-10">
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="firstName" placeholder="e.g. Alex" required>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="lastName" placeholder="e.g. Smith" required>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" name="email" placeholder="alex@university.edu" required>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" name="phone" placeholder="+1 (555) 000-0000" required>
                                </div>

                                <div class="col-12 mb-4 mt-2">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <i class="bi bi-shield-lock text-primary fs-4"></i>
                                        <span class="stepper-text text-uppercase">Security & Role</span>
                                    </div>
                                    <hr class="mt-0 opacity-10">
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="••••••••" required>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirmPassword" placeholder="••••••••" required>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Gender</label>
                                    <select class="form-select" name="gender" required>
                                        <option value="" selected disabled>Choose...</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Profile Picture</label>
                                    <input type="file" class="form-control" name="profile_picture" accept="image/*">
                                </div>

                                <div class="col-12 mb-4">
                                    <div class="form-check custom-check">
                                        <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                        <label class="form-check-label small text-muted" for="terms">
                                            I agree to the <a href="#" class="text-primary fw-bold">Terms of Service</a> and acknowledge the <a href="#" class="text-primary fw-bold">Privacy Policy</a>.
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" name="reg_btn" class="btn btn-main w-100 py-3 shadow-lg fs-5">
                                        Create My Account <i class="bi bi-arrow-right-short fs-4"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="text-center my-5 position-relative">
                            <hr class="opacity-10">
                            <span class="position-absolute top-50 start-50 translate-middle bg-white px-3 text-muted small fw-bold">OR REGISTER WITH</span>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <button class="btn btn-social"><i class="bi bi-google me-2"></i> Google</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-social"><i class="bi bi-github me-2"></i> GitHub</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-social"><i class="bi bi-microsoft me-2"></i> Microsoft</button>
                            </div>
                        </div>

                        <p class="text-center mt-5 mb-0 text-muted">
                            Already have a campus account? <a href="login.php" class="text-primary fw-bold text-decoration-none">Sign In here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// PHP BACKEND PROCESSING
if (isset($_POST['reg_btn'])) {
    // 1. Collect Data
    $fname    = mysqli_real_escape_string($con, $_POST['firstName']);
    $lname    = mysqli_real_escape_string($con, $_POST['lastName']);
    $email    = mysqli_real_escape_string($con, $_POST['email']);
    $phone    = mysqli_real_escape_string($con, $_POST['phone']);
    $pass     = $_POST['password'];
    $confirm  = $_POST['confirmPassword'];
    $gender   = $_POST['gender'];
    $fullname = $fname . " " . $lname;

    // 2. Simple Validation Check
    if ($pass !== $confirm) {
        echo "<script>alert('Passwords do not match!');</script>";
    } else {
        // Handle File Upload
        $profile_picture = $_FILES['profile_picture']['name'];
        $tmp_name = $_FILES['profile_picture']['tmp_name'];
        $upload_dir = "assets/uploads/profiles/";

        // Ensure directory exists
        if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);

        // 3. Encrypt Password (World Class Security)
        $hashed_password = password_hash($pass, PASSWORD_BCRYPT);

        // 4. Database Query
        $insert_query = "INSERT INTO `users`(`name`, `email`, `password`, `mobile`, `gender`, `profile_picture`, `role`) 
                         VALUES ('$fullname', '$email', '$hashed_password', '$phone', '$gender', '$profile_picture', 'student')";

        if (mysqli_query($con, $insert_query)) {
            move_uploaded_file($tmp_name, $upload_dir . $profile_picture);
            echo "<script>
                    alert('Registration successful! Welcome to CampusCMS.');
                    window.location.href='login.php';
                  </script>";
        } else {
            echo "<script>alert('Database Error: Unable to register.');</script>";
        }
    }
}

include 'includes/footer.php';
?>