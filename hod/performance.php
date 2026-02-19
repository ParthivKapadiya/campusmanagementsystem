<?php
$pageTitle = "Performance Analytics | CampusCMS";
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

        .analytics-card {
            background: white;
            border-radius: 32px;
            padding: 30px;
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
        }

        .stat-bar {
            height: 200px;
            width: 40px;
            background: #f1f5f9;
            border-radius: 10px;
            position: relative;
            display: flex;
            align-items: flex-end;
        }

        .bar-fill {
            width: 100%;
            border-radius: 10px;
            background: var(--primary-blue);
            transition: 1s ease;
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
                <a href="performance.php" class="nav-link-custom active"><i class="bi bi-graph-up-arrow"></i> Performance</a>
                <a href="export_data.php" class="nav-link-custom"><i class="bi bi-file-earmark-pdf"></i> Export Data</a>
            </div>
        </aside>

        <main class="main-viewport">
            <h1 class="fw-black text-dark mb-1">Performance Analytics</h1>
            <p class="text-muted mb-5">Weekly resolution efficiency for IT Department</p>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="analytics-card">
                        <h5 class="fw-bold mb-5">Complaints Resolved (Past 7 Days)</h5>
                        <div class="d-flex justify-content-between align-items-end px-4">
                            <div class="text-center">
                                <div class="stat-bar">
                                    <div class="bar-fill" style="height: 40%"></div>
                                </div><small class="fw-bold mt-2 d-block">Mon</small>
                            </div>
                            <div class="text-center">
                                <div class="stat-bar">
                                    <div class="bar-fill" style="height: 65%"></div>
                                </div><small class="fw-bold mt-2 d-block">Tue</small>
                            </div>
                            <div class="text-center">
                                <div class="stat-bar">
                                    <div class="bar-fill" style="height: 30%"></div>
                                </div><small class="fw-bold mt-2 d-block">Wed</small>
                            </div>
                            <div class="text-center">
                                <div class="stat-bar">
                                    <div class="bar-fill" style="height: 85%"></div>
                                </div><small class="fw-bold mt-2 d-block">Thu</small>
                            </div>
                            <div class="text-center">
                                <div class="stat-bar">
                                    <div class="bar-fill" style="height: 50%"></div>
                                </div><small class="fw-bold mt-2 d-block">Fri</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="analytics-card h-100">
                        <h5 class="fw-bold mb-4">Task Distribution</h5>
                        <div class="mb-4">
                            <small class="fw-bold text-muted">Hardware (70%)</small>
                            <div class="progress rounded-pill mt-1" style="height: 10px;">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <small class="fw-bold text-muted">Network (20%)</small>
                            <div class="progress rounded-pill mt-1" style="height: 10px;">
                                <div class="progress-bar bg-warning" style="width: 20%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>