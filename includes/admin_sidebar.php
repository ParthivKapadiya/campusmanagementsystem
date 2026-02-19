<?php

/**
 * Admin Sidebar Component
 * Modular navigation for System Administrators
 */
$project_root = "/campusmanagementsystem/";
$current_page = basename($_SERVER['PHP_SELF']);
?>

<style>
    /* --- SIDEBAR CORE STYLES --- */
    .sidebar-admin {
        width: 280px;
        background: #0f172a;
        /* Admin Dark Navy */
        height: 100vh;
        position: fixed;
        left: 0;
        top: 0;
        padding: 45px 25px;
        z-index: 1000;
        border-right: 1px solid rgba(255, 255, 255, 0.05);
    }

    .sidebar-admin .brand {
        font-size: 1.6rem;
        font-weight: 800;
        color: white;
        margin-bottom: 50px;
        letter-spacing: -0.5px;
    }

    .sidebar-admin .brand span {
        color: #6366f1;
        /* Admin Indigo */
    }

    .nav-link-admin {
        display: flex;
        align-items: center;
        gap: 15px;
        color: rgba(255, 255, 255, 0.5);
        padding: 15px 20px;
        border-radius: 16px;
        text-decoration: none;
        font-weight: 600;
        margin-bottom: 8px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Hover & Active States */
    .nav-link-admin:hover {
        color: #6366f1;
        background: rgba(99, 102, 241, 0.08);
        transform: translateX(5px);
    }

    .nav-link-admin.active {
        background: rgba(99, 102, 241, 0.15);
        color: #6366f1;
        box-shadow: inset 0 0 0 1px rgba(99, 102, 241, 0.2);
    }

    .nav-link-admin i {
        font-size: 1.2rem;
    }

    /* Logout Section */
    .logout-hover {
        transition: 0.3s !important;
    }

    .logout-hover:hover {
        background: rgba(220, 53, 69, 0.1) !important;
        color: #ff4d5e !important;
        transform: translateX(5px);
    }

    /* Custom Scrollbar for Sidebar if links overflow */
    .sidebar-admin::-webkit-scrollbar {
        width: 4px;
    }

    .sidebar-admin::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
    }
</style>

<div class="sidebar-admin">
    <div class="brand">Admin<span>CMS</span></div>

    <div class="nav-group">
        <a href="dashboard.php" class="nav-link-admin <?= ($current_page == 'dashboard.php') ? 'active' : '' ?>">
            <i class="bi bi-cpu-fill"></i>
            <span>System Hub</span>
        </a>

        <a href="user_account.php" class="nav-link-admin <?= ($current_page == 'user_account.php') ? 'active' : '' ?>">
            <i class="bi bi-people-fill"></i>
            <span>User Accounts</span>
        </a>

        <a href="flow_monitor.php" class="nav-link-admin <?= ($current_page == 'flow_monitor.php') ? 'active' : '' ?>">
            <i class="bi bi-activity"></i>
            <span>Flow Monitor</span>
        </a>

        <a href="security_logs.php" class="nav-link-admin <?= ($current_page == 'security_logs.php') ? 'active' : '' ?>">
            <i class="bi bi-shield-lock-fill"></i>
            <span>Security Logs</span>
        </a>

        <div style="margin-top: 220px;">
            <hr class="opacity-10 mb-4" style="border-color: rgba(255,255,255,0.1)">
            <a href="<?= $project_root ?>auth/login.php" class="nav-link-admin text-danger logout-hover">
                <i class="bi bi-power"></i>
                <span>Shutdown</span>
            </a>
        </div>
    </div>
</div>