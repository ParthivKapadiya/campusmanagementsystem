<?php
$pageTitle = "Account Directory | Admin Console";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --admin-indigo: #6366f1;
            --admin-dark: #0f172a;
            --sidebar-width: 280px;
        }

        body {
            background: #f1f5f9;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #1e293b;
        }

        .sidebar-admin {
            width: var(--sidebar-width);
            background: var(--admin-dark);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding: 45px 25px;
            z-index: 1000;
        }

        .sidebar-admin .brand {
            font-size: 1.6rem;
            font-weight: 800;
            color: white;
            margin-bottom: 50px;
        }

        .sidebar-admin .brand span {
            color: var(--admin-indigo);
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
            margin-bottom: 10px;
        }

        .nav-link-admin.active {
            background: rgba(99, 102, 241, 0.15);
            color: var(--admin-indigo);
        }

        .main-content {
            margin-left: var(--sidebar-width);
            padding: 60px;
        }

        /* --- USER CARD STYLING --- */
        .user-directory-card {
            background: white;
            border-radius: 30px;
            padding: 25px;
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
            position: relative;
            overflow: hidden;
        }

        .user-avatar {
            width: 60px;
            height: 60px;
            border-radius: 20px;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--admin-indigo);
            font-weight: 800;
        }

        .status-indicator {
            position: absolute;
            top: 25px;
            right: 25px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .badge-role {
            font-size: 0.65rem;
            font-weight: 800;
            padding: 4px 10px;
            border-radius: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .filter-pill {
            padding: 8px 20px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            background: white;
            color: #64748b;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .filter-pill.active {
            background: var(--admin-indigo);
            color: white;
            border-color: var(--admin-indigo);
        }
    </style>
</head>

<body>

    <div class="sidebar-admin">
        <div class="brand">Admin<span>CMS</span></div>
        <div class="nav-group">
            <a href="dashboard.php" class="nav-link-admin active"><i class="bi bi-cpu-fill"></i> System Hub</a>
            <a href="user_account.php" class="nav-link-admin"><i class="bi bi-people-fill"></i> User Accounts</a>
            <a href="flow_monitor.php" class="nav-link-admin"><i class="bi bi-activity"></i> Flow Monitor</a>
            <a href="security_logs.php" class="nav-link-admin"><i class="bi bi-shield-lock-fill"></i> Security Logs</a>
            <div style="margin-top: 220px;">
                <a href="#" class="nav-link-admin text-danger"><i class="bi bi-power"></i> Shutdown</a>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h1 class="fw-bolder">User Directory</h1>
                <p class="text-muted fw-medium">Managing <?php echo "4,102"; ?> registered campus identities</p>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-dark rounded-pill px-4 fw-bold">Export CSV</button>
                <button class="btn btn-dark rounded-pill px-4 fw-bold">+ Add User</button>
            </div>
        </div>

        <div class="d-flex gap-2 mb-5">
            <div class="filter-pill active">All Users</div>
            <div class="filter-pill">Directors</div>
            <div class="filter-pill">HODs</div>
            <div class="filter-pill">Students</div>
            <div class="filter-pill">Inactive</div>
        </div>



        <div class="row g-4">
            <div class="col-md-4">
                <div class="user-directory-card">
                    <div class="status-indicator bg-success"></div>
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="user-avatar">AT</div>
                        <div>
                            <h6 class="fw-bold mb-0">Dr. Alistair Thorne</h6>
                            <span class="badge-role bg-warning-subtle text-warning">Director</span>
                        </div>
                    </div>
                    <div class="small text-muted mb-4">
                        <div class="mb-1"><i class="bi bi-envelope me-2"></i> a.thorne@campus.edu</div>
                        <div><i class="bi bi-building me-2"></i> Executive Admin</div>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-light flex-grow-1 rounded-3 fw-bold small">Manage Access</button>
                        <button class="btn btn-light rounded-3"><i class="bi bi-three-dots"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="user-directory-card">
                    <div class="status-indicator bg-success"></div>
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="user-avatar">SJ</div>
                        <div>
                            <h6 class="fw-bold mb-0">Prof. Sarah Jenkins</h6>
                            <span class="badge-role bg-success-subtle text-success">HOD</span>
                        </div>
                    </div>
                    <div class="small text-muted mb-4">
                        <div class="mb-1"><i class="bi bi-envelope me-2"></i> s.jenkins@it.edu</div>
                        <div><i class="bi bi-building me-2"></i> IT Department</div>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-light flex-grow-1 rounded-3 fw-bold small">Manage Access</button>
                        <button class="btn btn-light rounded-3"><i class="bi bi-three-dots"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="user-directory-card">
                    <div class="status-indicator bg-danger"></div>
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="user-avatar" style="background: #fee2e2; color: #dc2626;">RK</div>
                        <div>
                            <h6 class="fw-bold mb-0">Rohan Kapoor</h6>
                            <span class="badge-role bg-primary-subtle text-primary">Student</span>
                        </div>
                    </div>
                    <div class="small text-muted mb-4">
                        <div class="mb-1"><i class="bi bi-envelope me-2"></i> r.kapoor@stud.edu</div>
                        <div><i class="bi bi-building me-2"></i> Mechanical Eng.</div>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-danger text-white flex-grow-1 rounded-3 fw-bold small">Reactivate</button>
                        <button class="btn btn-light rounded-3"><i class="bi bi-three-dots"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>