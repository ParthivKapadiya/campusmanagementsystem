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
                <div class="mb-4">
                    <h3 class="fw-bold">Login</h3>
                    <p class="text-muted">Enter your credentials to continue</p>
                </div>

                <div class="role-tabs">
                    <div class="role-tab active">Student</div>
                    <div class="role-tab">Faculty</div>
                    <div class="role-tab">Admin</div>
                </div>

                <form action="login.php" method="POST">
                    <div class="mb-4">
                        <label class="form-label">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text bg-transparent border-end-0" style="border-radius: 15px 0 0 15px; border: 2px solid #f1f5f9;">
                                <i class="bi bi-envelope text-muted"></i>
                            </span>
                            <input type="email" name="email" class="form-control border-start-0 shadow-none" placeholder="name@university.edu" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex justify-content-between">
                            <label class="form-label">Password</label>
                            <a href="#" class="text-primary small fw-bold text-decoration-none">Forgot?</a>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text bg-transparent border-end-0" style="border-radius: 15px 0 0 15px; border: 2px solid #f1f5f9;">
                                <i class="bi bi-shield-lock text-muted"></i>
                            </span>
                            <input type="password" name="password" class="form-control border-start-0 shadow-none" placeholder="••••••••" required>
                        </div>
                    </div>

                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label small text-muted" for="remember">Keep me logged in</label>
                    </div>

                    <button type="submit" name="login_btn" class="btn btn-main w-100 py-3 shadow-lg fs-5">
                        Sign In <i class="bi bi-box-arrow-in-right ms-2"></i>
                    </button>
                </form>

                <p class="text-center mt-5 mb-0 text-muted">
                    New to the platform? <a href="register.php" class="text-primary fw-bold text-decoration-none">Create Account</a>
                </p>
            </div>

        </div>
    </div>
</div>

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