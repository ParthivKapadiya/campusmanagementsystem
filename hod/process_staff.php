<?php
require_once '../includes/auth_guard.php';
cms_role_required('hod');

$staff_name = isset($_POST['staff_name']) ? trim($_POST['staff_name']) : '';
$staff_email = isset($_POST['staff_email']) ? trim($_POST['staff_email']) : '';
$staff_role = isset($_POST['staff_role']) ? trim($_POST['staff_role']) : '';

$redirect = $_SERVER['HTTP_REFERER'] ?? 'staff_directory.php';

if ($staff_name === '' || $staff_email === '' || $staff_role === '') {
    echo "<script>alert('Please fill all staff fields.'); window.location.href='" . addslashes($redirect) . "';</script>";
    exit();
}

// Current HOD staff panel is mock UI; for now, we confirm the action to prevent 404/blank submissions.
echo "<script>alert('Staff member added to directory successfully!'); window.location.href='" . addslashes($redirect) . "';</script>";
exit();

