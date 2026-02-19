<?php
$pageTitle = "Staff Directory | CampusCMS";
$root = $_SERVER['DOCUMENT_ROOT'] . '/campusmanagementsystem/';
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
            z-index: 1000;
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

        /* Staff Card Styling */
        .staff-card {
            background: white;
            border-radius: 32px;
            padding: 30px;
            border: none;
            transition: 0.4s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
            text-align: center;
        }

        .staff-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(13, 110, 253, 0.1);
        }

        .avatar-wrapper {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }

        .staff-avatar {
            width: 100px;
            height: 100px;
            border-radius: 30px;
            object-fit: cover;
            border: 4px solid #f1f5f9;
        }

        .status-indicator {
            position: absolute;
            bottom: -5px;
            right: -5px;
            width: 20px;
            height: 20px;
            background: #10b981;
            border: 4px solid white;
            border-radius: 50%;
        }

        .workload-badge {
            font-size: 0.7rem;
            font-weight: 800;
            padding: 6px 15px;
            border-radius: 10px;
            background: #f1f5f9;
            color: #64748b;
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
                <a href="staff_directory.php" class="nav-link-custom active"><i class="bi bi-person-gear"></i> Staff Directory</a>
            </div>
            <div class="nav-group">
                <small class="text-uppercase text-muted fw-bold mb-3 d-block ps-3" style="font-size: 0.65rem;">Reports & Analytics</small>
                <a href="performance.php" class="nav-link-custom"><i class="bi bi-graph-up-arrow"></i> Performance</a>
                <a href="export_data.php" class="nav-link-custom"><i class="bi bi-file-earmark-pdf"></i> Export Data</a>
            </div>
        </aside>

        <main class="main-viewport">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h1 class="fw-black text-dark mb-1">Staff Directory</h1>
                    <p class="text-muted fw-medium">Manage and assign departmental personnel</p>
                </div>
                <button class="btn btn-dark rounded-pill px-4 fw-bold shadow-sm">
                    <i class="bi bi-person-plus me-2"></i> Add New Staff
                </button>
            </div>

            <div class="row g-4">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="staff-card">
                        <div class="avatar-wrapper">
                            <img src="https://ui-avatars.com/api/?name=Dwight+Shrute&background=0d6efd&color=fff" class="staff-avatar">
                            <div class="status-indicator"></div>
                        </div>
                        <h5 class="fw-bold mb-1">Prof. Dwight Shrute</h5>
                        <p class="text-primary small fw-bold mb-3">Hardware & Labs</p>

                        <div class="d-flex flex-column gap-2 mb-4">
                            <div class="d-flex justify-content-between align-items-center bg-light p-2 rounded-3">
                                <small class="text-muted fw-bold">Active Tasks</small>
                                <span class="badge bg-white text-dark shadow-sm">04</span>
                            </div>
                        </div>

                        <button class="btn btn-outline-primary w-100 rounded-pill fw-bold btn-sm py-2">View Performance</button>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="staff-card">
                        <div class="avatar-wrapper">
                            <img src="https://ui-avatars.com/api/?name=Jim+Halpert&background=6366f1&color=fff" class="staff-avatar">
                            <div class="status-indicator" style="background: #f59e0b;"></div>
                        </div>
                        <h5 class="fw-bold mb-1">Prof. Jim Halpert</h5>
                        <p class="text-primary small fw-bold mb-3">Network Admin</p>

                        <div class="d-flex flex-column gap-2 mb-4">
                            <div class="d-flex justify-content-between align-items-center bg-light p-2 rounded-3">
                                <small class="text-muted fw-bold">Active Tasks</small>
                                <span class="badge bg-white text-dark shadow-sm">02</span>
                            </div>
                        </div>

                        <button class="btn btn-outline-primary w-100 rounded-pill fw-bold btn-sm py-2">View Performance</button>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="staff-card border-dashed" style="border: 2px dashed #e2e8f0; background: transparent; display: flex; align-items: center; justify-content: center; height: 100%;">
                        <div class="text-center">
                            <i class="bi bi-plus-circle-dotted fs-1 text-muted"></i>
                            <p class="text-muted fw-bold small mt-2">New Department<br>Position</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 p-4 rounded-5 bg-white shadow-sm border-start border-primary border-5">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h6 class="fw-bold mb-1">Department Resource Note</h6>
                        <p class="small text-muted mb-0">Staff members are automatically notified via email when a complaint is assigned to them via the <strong>Complaint Inbox</strong>.</p>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <button class="btn btn-primary btn-sm rounded-pill px-4 fw-bold">Email All Staff</button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>