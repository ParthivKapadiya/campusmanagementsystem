<?php
$pageTitle = "Login | CampusCMS";

// This finds the correct path regardless of folder depth
// include_once dirname(__FILE__) . '/../includes/db_connect.php';
include_once dirname(__FILE__) . '/../includes/header.php';
include_once dirname(__FILE__) . '/../includes/navbar.php';
?>
<style>
    /* -------------------- LOGIN PAGE PREMIUM CSS -------------------- */
    .login-section {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f1f5f9;
        padding: 120px 0 60px 0;
        position: relative;
    }

    /* Background Decoration */
    .login-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 50vh;
        background: var(--dark);
        z-index: 0;
    }

    .login-container {
        background: white;
        border-radius: 40px;
        overflow: hidden;
        box-shadow: 0 40px 100px rgba(0, 0, 0, 0.2);
        z-index: 1;
        display: flex;
        width: 100%;
        max-width: 1000px;
    }

    /* Left Side: Visual/Welcome */
    .login-visual {
        background: linear-gradient(135deg, rgba(13, 110, 253, 0.8), rgba(15, 23, 42, 0.9)),
            url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&q=80');
        background-size: cover;
        background-position: center;
        width: 45%;
        padding: 60px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: white;
    }

    .login-visual h2 span {
        color: var(--accent);
    }

    /* Right Side: Form */
    .login-form-area {
        width: 55%;
        padding: 60px;
        background: white;
    }

    .form-label {
        font-weight: 700;
        color: var(--dark);
        font-size: 0.9rem;
    }

    .login-form-area .form-control {
        padding: 15px;
        border-radius: 15px;
        border: 2px solid #f1f5f9;
        background: #f8fafc;
    }

    .login-form-area .form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 4px var(--primary-glow);
        background: white;
    }

    /* Role Switcher Styling */
    .role-tabs {
        background: #f1f5f9;
        padding: 5px;
        border-radius: 15px;
        display: flex;
        gap: 5px;
        margin-bottom: 30px;
    }

    .role-tab {
        flex: 1;
        text-align: center;
        padding: 10px;
        border-radius: 12px;
        cursor: pointer;
        font-weight: 700;
        font-size: 0.8rem;
        transition: 0.3s;
        color: #64748b;
    }

    .role-tab.active {
        background: white;
        color: var(--primary);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    @media (max-width: 991px) {
        .login-visual {
            display: none;
        }

        .login-form-area {
            width: 100%;
            padding: 40px;
        }
    }
</style>
<div class="login-section">
    <div class="container d-flex justify-content-center">
        <div class="login-container">

            <div class="login-visual">
                <div class="badge-glow mb-3" style="width: fit-content;">Secure Access</div>
                <h2 class="display-6 fw-bold">Welcome Back to <span>CampusCMS</span></h2>
                <p class="opacity-75 mt-3">Log in to manage your tickets, access resources, and stay updated with campus notifications.</p>
                <div class="mt-auto">
                    <small class="opacity-50">Authorized Personnel Only</small>
                </div>
            </div>

            <div class="login-form-area">
                <h3 class="fw-bold mb-2">Login</h3>
                <p class="text-muted mb-4">Enter your credentials to continue</p>

                <form action="login.php" method="POST" novalidate>

                    <!-- EMAIL -->
                    <div class="mb-4">
                        <label class="form-label">Email Address</label>
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="name@university.edu"
                            data-validation="required email"
                            data-min="5">
                        <small id="email_error" style="display:none;"></small>
                    </div>

                    <!-- PASSWORD -->
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="••••••••"
                            data-validation="required min"
                            data-min="6">
                        <small id="password_error" style="display:none;"></small>
                    </div>

                    <!-- REMEMBER -->
                    <div class="mb-4 form-check">
                        <input
                            type="checkbox"
                            class="form-check-input"
                            id="remember"
                            name="remember"
                            data-validation="required">
                        <label class="form-check-label" for="remember">Keep me logged in</label>
                        <small id="remember_error" style="display:none;"></small>
                    </div>

                    <button type="submit" name="login_btn" class="btn btn-main w-100 py-3 shadow-lg fs-5">
                        Sign In <i class="bi bi-box-arrow-in-right ms-2"></i>
                    </button>
                    <p class="text-center mt-5 mb-0 text-muted">
                        New to the platform? <a href="register.php" class="text-primary fw-bold text-decoration-none">Create Account</a>
                    </p>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- YOUR ORIGINAL VALIDATION SCRIPT (UNCHANGED) -->
<script>
    $(document).ready(function() {
        function validateInput(input) {
            var field = $(input);
            var value = field.val() ? field.val().trim() : "";
            var errorfield = $("#" + field.attr("name") + "_error");
            var validationType = field.data("validation");
            var minLength = field.data("min") || 0;
            var maxLength = field.data("max") || 9999;
            var fileSize = field.data("filesize") || 0;
            var fileType = field.data("filetype") || "";
            let errorMessage = "";
            var isFileInput = field.attr("type") === "file";
            var isCheckbox = field.attr("type") === "checkbox";

            if (validationType) {
                if (validationType.includes("required")) {
                    if (isCheckbox && !field.is(":checked")) {
                        errorMessage = "This field is required.";
                    } else if (!isCheckbox && value === "") {
                        errorMessage = "This field is required.";
                    }
                }

                if (value !== "" && !errorMessage) {
                    if (validationType.includes("min") && value.length < minLength) {
                        errorMessage = `Minimum ${minLength} characters required.`;
                    }

                    if (validationType.includes("email")) {
                        const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w]{2,4}$/;
                        if (!emailRegex.test(value)) {
                            errorMessage = "Please enter a valid email address.";
                        }
                    }
                }

                if (errorMessage) {
                    errorfield.text(errorMessage).show().addClass("text-danger small");
                    field.addClass("is-invalid").removeClass("is-valid");
                    return false;
                } else {
                    errorfield.text("").hide();
                    field.removeClass("is-invalid").addClass("is-valid");
                    return true;
                }
            }
            return true;
        }

        $("input, textarea, select").on("input change", function() {
            validateInput(this);
        });

        $("form").on("submit", function(e) {
            let isValid = true;
            $(this).find("input, textarea, select").each(function() {
                if (!validateInput(this)) isValid = false;
            });
            if (!isValid) e.preventDefault();
        });
    });
</script>

<!-- <?php
        // // PHP LOGIN LOGIC
        // if (isset($_POST['login_btn'])) {
        //     // $email = mysqli_real_escape_string($con, $_POST['email']);
        //     $password = $_POST['password'];

        //     // $query = "SELECT * FROM users WHERE email = '$email'";
        //     // $result = mysqli_query($con, $query);

        //     // if (mysqli_num_rows($result) > 0) {
        //         $row = mysqli_fetch_assoc($result);

        //         // Verify the hashed password
        //         if (password_verify($password, $row['password'])) {
        //             // Start session and save user info
        //             session_start();
        //             $_SESSION['user_id'] = $row['id'];
        //             $_SESSION['user_name'] = $row['name'];
        //             $_SESSION['user_role'] = $row['role'];

        //             echo "<script>
        //                     alert('Login Successful! Redirecting to Dashboard...');
        //                     window.location.href='../dashboard/index.php';
        //                   </script>";
        //         } else {
        //             echo "<script>alert('Invalid Password!');</script>";
        //         }
        //     } else {
        //         echo "<script>alert('No account found with this email!');</script>";
        //     } 


        include '../includes/footer.php';
        ?>