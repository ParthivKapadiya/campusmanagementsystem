<?php
$pageTitle = "Export Reports | CampusCMS";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --side-nav-width: 280px;
            --primary-blue: #0d6efd;
            --dark-navy: #0f172a;
            --accent-gold: #ffc107;
        }

        body {
            background: #f8fafc;
            font-family: 'Inter', sans-serif;
        }

        .sidebar-glass {
            width: var(--side-nav-width);
            background: var(--dark-navy);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding: 40px 20px;
        }

        .sidebar-glass .logo-text {
            font-size: 1.4rem;
            font-weight: 800;
            color: white;
            margin-bottom: 50px;
            padding-left: 15px;
        }

        .sidebar-glass .logo-text span {
            color: var(--accent-gold);
        }

        .nav-link-custom {
            display: flex;
            align-items: center;
            gap: 15px;
            color: rgba(255, 255, 255, 0.6);
            padding: 14px 18px;
            border-radius: 16px;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .nav-link-custom:hover,
        .nav-link-custom.active {
            background: var(--primary-blue);
            color: white;
        }

        .main-viewport {
            margin-left: var(--side-nav-width);
            padding: 40px;
        }

        .export-box {
            background: white;
            border-radius: 32px;
            padding: 40px;
            border: 2px dashed #e2e8f0;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="dashboard-wrapper">
        <aside class="sidebar-glass">
            <div class="logo-text">Campus<span>CMS</span></div>
            <div class="nav-group">
                <a href="dashboard.php" class="nav-link-custom"><i class="bi bi-speedometer2"></i> Dashboard</a>
                <a href="complaint_inbox.php" class="nav-link-custom"><i class="bi bi-inboxes-fill"></i> Complaint Inbox</a>
                <a href="staff_directory.php" class="nav-link-custom"><i class="bi bi-person-gear"></i> Staff Directory</a>
                <a href="performance.php" class="nav-link-custom"><i class="bi bi-graph-up-arrow"></i> Performance</a>
                <a href="export_data.php" class="nav-link-custom active"><i class="bi bi-file-earmark-pdf"></i> Export Data</a>
            </div>
        </aside>

        <main class="main-viewport">
            <h1 class="fw-black text-dark mb-5">Export Reports</h1>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6">
                    <div class="export-box">
                        <i class="bi bi-file-earmark-pdf fs-1 text-danger mb-3"></i>
                        <h5 class="fw-bold">Monthly Summary (PDF)</h5>
                        <p class="text-muted small">Generate a PDF report of all resolved and pending complaints for the Director's review.</p>
                        <button class="btn btn-dark rounded-pill px-5 fw-bold mt-3">Download PDF</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="export-box">
                        <i class="bi bi-file-earmark-excel fs-1 text-success mb-3"></i>
                        <h5 class="fw-bold">Staff Raw Data (CSV)</h5>
                        <p class="text-muted small">Export a full list of staff task assignments and completion times for Excel analysis.</p>
                        <button class="btn btn-outline-success rounded-pill px-5 fw-bold mt-3">Download Excel</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>