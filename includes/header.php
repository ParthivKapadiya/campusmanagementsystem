<?php
if (!isset($pageTitle)) {
    $pageTitle = "Campus Resource & Complaint Management System";
}

/* Detect if inside auth folder */
$is_in_auth = (basename(dirname($_SERVER['PHP_SELF'])) == 'auth');
$prefix = $is_in_auth ? '../' : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $prefix; ?>assets/css/style.css">
</head>

<body>

    <?php include $prefix . 'navbar.php'; ?>