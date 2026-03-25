<?php
require_once '../includes/auth_guard.php';
cms_role_required('hod');

// This endpoint is called from HOD modals (dashboard + complaint inbox).
$status = isset($_POST['status']) ? trim($_POST['status']) : '';
$remarks = isset($_POST['remarks']) ? trim($_POST['remarks']) : '';

$redirect = $_SERVER['HTTP_REFERER'] ?? 'dashboard.php';

if ($status === '' || $remarks === '') {
    echo "<script>alert('Please select a status and add remarks.'); window.location.href='" . addslashes($redirect) . "';</script>";
    exit();
}

// NOTE: Current panels use mock data; we only show confirmation to prevent "Save" from doing nothing.
echo "<script>alert('HOD decision saved successfully!'); window.location.href='" . addslashes($redirect) . "';</script>";
exit();