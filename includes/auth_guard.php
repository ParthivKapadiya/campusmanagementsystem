<?php
/**
 * Shared authentication/authorization guards.
 *
 * Goal: prevent "guest users" (not logged-in) from accessing role dashboards.
 * This file is intentionally PHP-only to avoid impacting any page CSS/HTML.
 */

function cms_session_start_once(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

function cms_login_required(string $loginUrl = '/campusmanagementsystem/auth/login.php'): void
{
    cms_session_start_once();

    // If you want debug message, you can add it as a query param, but keep it simple.
    if (empty($_SESSION['user_id']) || empty($_SESSION['user_role'])) {
        // Remember where user came from (best-effort).
        $_SESSION['redirect_after_login'] = $_SESSION['redirect_after_login'] ?? ($_SERVER['REQUEST_URI'] ?? '/campusmanagementsystem/index.php');
        header('Location: ' . $loginUrl);
        exit();
    }
}

function cms_role_required(string $role, string $loginUrl = '/campusmanagementsystem/auth/login.php'): void
{
    cms_login_required($loginUrl);

    if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== $role) {
        $_SESSION['redirect_after_login'] = $_SESSION['redirect_after_login'] ?? ($_SERVER['REQUEST_URI'] ?? '/campusmanagementsystem/index.php');
        header('Location: ' . $loginUrl);
        exit();
    }
}

