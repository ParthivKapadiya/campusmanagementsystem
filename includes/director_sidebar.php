<?php

/**
 * Director Sidebar Component
 * Absolute Pathing for Universal Navigation
 */
$project_root = "/campusmanagementsystem/";
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="sidebar-executive">
    <div class="brand">Direct<span>CMS</span></div>
    <div class="nav-group">
        <a href="dashboard.php" class="nav-link-exec <?= ($current_page == 'dashboard.php') ? 'active' : '' ?>">
            <i class="bi bi-grid-1x2-fill"></i> Command Hub
        </a>
        <a href="escalations.php" class="nav-link-exec <?= ($current_page == 'escalations.php') ? 'active' : '' ?>">
            <i class="bi bi-shield-lock-fill"></i> Escalations
        </a>
        <a href="insights.php" class="nav-link-exec <?= ($current_page == 'insights.php') ? 'active' : '' ?>">
            <i class="bi bi-bar-chart-steps"></i> Campus Insights
        </a>
        <a href="hod_performance.php" class="nav-link-exec <?= ($current_page == 'hod_performance.php') ? 'active' : '' ?>">
            <i class="bi bi-people-fill"></i> HOD Performance
        </a>

        <div style="margin-top: 150px;">
            <hr class="opacity-10 mb-4" style="border-color: rgba(255,255,255,0.1)">
            <a href="<?= $project_root ?>auth/login.php" class="nav-link-exec text-danger logout-hover">
                <i class="bi bi-power"></i> Secure Logout
            </a>
        </div>
    </div>
</div>

<style>
    .logout-hover:hover {
        background: rgba(220, 53, 69, 0.1) !important;
        color: #ff4d5e !important;
    }
</style>