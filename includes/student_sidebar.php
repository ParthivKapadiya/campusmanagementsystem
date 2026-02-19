<?php

/**
 * Student Sidebar Component
 * Integrated with Dashboard Layout
 */
$project_root = "/campusmanagementsystem/";
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="student-sidebar-content py-4 px-3">
    <div class="brand-area text-center mb-5">
        <div class="logo-icon bg-warning rounded-circle d-inline-flex align-items-center justify-content-center mb-2" style="width: 45px; height: 45px;">
            <i class="bi bi-mortarboard-fill text-dark fs-4"></i>
        </div>
        <h5 class="text-white fw-bold mb-0">Student<span>CMS</span></h5>
        <small class="text-muted fw-bold" style="font-size: 0.65rem; letter-spacing: 1px;">PORTAL v1.0</small>
    </div>

    <div class="nav flex-column">
        <small class="text-muted text-uppercase fw-bold mb-3 ps-2" style="font-size: 0.7rem;">General</small>

        <a href="dashboard.php" class="nav-link-student <?= ($current_page == 'dashboard.php') ? 'active' : '' ?>">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>

        <a href="submit_complaint.php" class="nav-link-student <?= ($current_page == 'submit_complaint.php') ? 'active' : '' ?>">
            <i class="bi bi-plus-square"></i> New Ticket
        </a>

        <a href="my_complaints.php" class="nav-link-student <?= ($current_page == 'my_complaints.php') ? 'active' : '' ?>">
            <i class="bi bi-clock-history"></i> My Complaints
        </a>

        <hr class="my-4 border-secondary opacity-25">

        <small class="text-muted text-uppercase fw-bold mb-3 ps-2" style="font-size: 0.7rem;">Account</small>

        <a href="profile.php" class="nav-link-student <?= ($current_page == 'profile.php') ? 'active' : '' ?>">
            <i class="bi bi-person-circle"></i> Profile
        </a>

        <a href="<?= $project_root ?>auth/login.php" class="nav-link-student text-danger mt-4 logout-link">
            <i class="bi bi-box-arrow-left"></i> Logout
        </a>
    </div>
</div>

<style>
    /* Premium Sidebar Styling */
    .nav-link-student {
        display: flex;
        align-items: center;
        gap: 12px;
        color: rgba(255, 255, 255, 0.6);
        padding: 12px 18px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 500;
        margin-bottom: 5px;
        transition: all 0.3s ease;
    }

    .nav-link-student i {
        font-size: 1.1rem;
    }

    .nav-link-student:hover {
        background: rgba(255, 255, 255, 0.05);
        color: #fff;
        transform: translateX(5px);
    }

    .nav-link-student.active {
        background: var(--bs-warning);
        color: #000 !important;
        font-weight: 700;
        box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
    }

    .logout-link:hover {
        background: rgba(220, 53, 69, 0.1) !important;
        color: #ff4d5e !important;
    }

    .brand-area h5 span {
        color: var(--bs-warning);
    }
</style>