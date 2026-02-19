<?php
// Define project root to ensure links work across all folders
$project_root = "/campusmanagementsystem/";
$current_page = basename($_SERVER['PHP_SELF']);
?>

<aside class="sidebar-glass">
    <div class="logo-text">Campus<span>CMS</span></div>

    <div class="nav-group mb-5">
        <small class="text-uppercase text-muted fw-bold mb-3 d-block ps-3" style="font-size: 0.65rem;">Main Menu</small>

        <a href="dashboard.php" class="nav-link-custom <?= ($current_page == 'dashboard.php') ? 'active' : '' ?>">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>

        <a href="complaint_inbox.php" class="nav-link-custom <?= ($current_page == 'complaint_inbox.php') ? 'active' : '' ?>">
            <i class="bi bi-inboxes-fill"></i> Complaint Inbox
        </a>

        <a href="staff_directory.php" class="nav-link-custom <?= ($current_page == 'staff_directory.php') ? 'active' : '' ?>">
            <i class="bi bi-person-gear"></i> Staff Directory
        </a>
    </div>

    <div class="nav-group">
        <small class="text-uppercase text-muted fw-bold mb-3 d-block ps-3" style="font-size: 0.65rem;">Reports & Analytics</small>

        <a href="performance.php" class="nav-link-custom <?= ($current_page == 'performance.php') ? 'active' : '' ?>">
            <i class="bi bi-graph-up-arrow"></i> Performance
        </a>

        <a href="export_data.php" class="nav-link-custom <?= ($current_page == 'export_data.php') ? 'active' : '' ?>">
            <i class="bi bi-file-earmark-pdf"></i> Export Data
        </a>
    </div>

    <div style="margin-top: 100px;">
        <hr class="opacity-10 mb-4">
        <a href="<?= $project_root ?>auth/login.php" class="nav-link-custom text-danger logout-hover">
            <i class="bi bi-box-arrow-left"></i> Logout System
        </a>
    </div>
</aside>

<style>
    .logout-hover:hover {
        background: rgba(220, 53, 69, 0.1) !important;
        color: #ff4d5e !important;
        transform: translateX(5px);
    }
</style>