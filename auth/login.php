<?php
session_start();
$pageTitle = "Login | CampusCMS";

// 1. DATABASE & PATH LOGIC
$possible_paths = [
    __DIR__ . '/includes/db.php',
    __DIR__ . '/../includes/db.php',
    $_SERVER['DOCUMENT_ROOT'] . '/campusmanagementsystem/includes/db.php'
];

$db_found = false;
$path = "";
foreach ($possible_paths as $p) {
    if (file_exists($p)) {
        require_once $p;
        $path = $p;
        $db_found = true;
        break;
    }
}

// 2. LOGIN PROCESSING
if ($db_found && $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_btn'])) {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (!empty($email) && !empty($password)) {
        try {
            $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
            $stmt->execute([':email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                // Set Session Data
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['full_name'];
                $_SESSION['user_role'] = $user['role'];

                // REDIRECT TO STUDENT DASHBOARD
                echo "<script>
                        alert('Welcome back, " . addslashes($user['full_name']) . "!'); 
                        window.location.href='../=student/dashboard.php';
                      </script>";
                exit();
            } else {
                echo "<script>alert('Invalid Email or Password!');</script>";
            }
        } catch (PDOException $e) {
            // Error handled silently for clean UI
        }
    }
}

// 3. HEADER & NAVBAR
if ($db_found) {
    $headerPath = str_replace('db.php', 'header.php', $path);
    $navbarPath = str_replace('db.php', 'navbar.php', $path);
    if (file_exists($headerPath)) include_once $headerPath;
    if (file_exists($navbarPath)) include_once $navbarPath;
}
?>

<style>
    /* -------------------- RESTORED PREMIUM CSS -------------------- */
    .login-section {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f1f5f9;
        padding: 120px 0 60px 0;
        position: relative;
    }

    .login-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 50vh;
        background: #0f172a;
        /* Matches var(--dark) */
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

    .login-form-area {
        width: 55%;
        padding: 60px;
        background: white;
    }

    .form-label {
        font-weight: 700;
        color: #0f172a;
        font-size: 0.9rem;
    }

    .login-form-area .form-control {
        padding: 15px;
        border-radius: 15px;
        border: 2px solid #f1f5f9;
        background: #f8fafc;
    }

    .login-form-area .form-control:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.15);
        background: white;
    }

    .error-msg {
        display: block;
        margin-top: 5px;
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

                <form id="loginForm" action="login.php" method="POST" novalidate>
                    <div class="mb-4">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="name@university.edu" data-validation="required email">
                        <small id="email_error" class="error-msg" style="display:none;"></small>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="••••••••" data-validation="required min" data-min="6">
                        <small id="password_error" class="error-msg" style="display:none;"></small>
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

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        function validateInput(input) {
            let field = $(input);
            let value = field.val() ? field.val().trim() : "";
            let errorField = $("#" + field.attr("name") + "_error");
            let validationType = field.data("validation");
            let minLength = field.data("min") || 0;
            let errorMessage = "";

            if (validationType) {
                if (validationType.includes("required") && value === "") {
                    errorMessage = "This field is required.";
                } else if (value !== "") {
                    if (validationType.includes("email")) {
                        const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w]{2,4}$/;
                        if (!emailRegex.test(value)) errorMessage = "Please enter a valid email.";
                    }
                    if (validationType.includes("min") && value.length < minLength) {
                        errorMessage = `Minimum ${minLength} characters required.`;
                    }
                }

                if (errorMessage) {
                    errorField.text(errorMessage).show().addClass("text-danger small");
                    field.addClass("is-invalid").removeClass("is-valid");
                    return false;
                } else {
                    errorField.hide();
                    field.removeClass("is-invalid").addClass("is-valid");
                    return true;
                }
            }
            return true;
        }

        $("input").on("input change", function() {
            validateInput(this);
        });

        $("#loginForm").on("submit", function(e) {
            let isValid = true;
            $(this).find("input").each(function() {
                if (!validateInput(this)) isValid = false;
            });
            if (!isValid) e.preventDefault();
        });
    });
</script>

<?php
if ($db_found) {
    $footerPath = str_replace('db.php', 'footer.php', $path);
    if (file_exists($footerPath)) include_once $footerPath;
}
?>