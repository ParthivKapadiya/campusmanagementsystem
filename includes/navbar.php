<?php
// Get current file name
$current_page = basename($_SERVER['PHP_SELF']);

// Detect if we are inside the 'auth' folder to adjust paths
$is_in_auth = (basename(dirname($_SERVER['PHP_SELF'])) == 'auth');
$prefix = $is_in_auth ? '../' : '';
$auth_prefix = $is_in_auth ? '' : 'auth/';
?>

<nav class="navbar navbar-expand-lg fixed-top custom-navbar">
    <div class="container py-2">

        <a class="navbar-brand d-flex align-items-center" href="<?php echo $prefix; ?>index.php">
            <div class="brand-icon-box me-2">
                <i class="bi bi-mortarboard-fill"></i>
            </div>
            <span class="brand-text">Campus<span>CMS</span></span>
        </a>

        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <i class="bi bi-list fs-1 text-white"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-2">

                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="<?php echo $prefix; ?>index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>" href="<?php echo $prefix; ?>about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>" href="<?php echo $prefix; ?>contact.php">Contact</a>
                </li>

                <li class="nav-item ms-lg-4">
                    <a class="btn btn-nav-login <?php echo ($current_page == 'login.php') ? 'active' : ''; ?>" href="<?php echo $auth_prefix; ?>login.php">
                        <i class="bi bi-person-circle"></i> Login
                    </a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-nav-register shadow-sm <?php echo ($current_page == 'register.php') ? 'active' : ''; ?>" href="<?php echo $auth_prefix; ?>register.php">
                        Register
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>