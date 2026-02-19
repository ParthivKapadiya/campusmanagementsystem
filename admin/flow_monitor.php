<?php
$pageTitle = "Complaint Flow Monitor | Admin Console";
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
            --bg-body: #f8fafc;
        }

        body {
            background: var(--bg-body);
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #1e293b;
        }

        /* --- FIXED SIDEBAR CSS --- */
        .sidebar-admin {
            width: var(--sidebar-width);
            background: var(--admin-dark);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding: 40px 20px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
        }

        .sidebar-admin .brand {
            font-size: 1.6rem;
            font-weight: 800;
            color: white;
            margin-bottom: 50px;
            padding-left: 15px;
        }

        .sidebar-admin .brand span {
            color: var(--admin-indigo);
        }

        .nav-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex-grow: 1;
        }

        .nav-link-admin {
            display: flex;
            align-items: center;
            gap: 15px;
            color: rgba(255, 255, 255, 0.5);
            padding: 14px 20px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .nav-link-admin:hover {
            background: rgba(255, 255, 255, 0.05);
            color: white;
        }

        .nav-link-admin.active {
            background: rgba(99, 102, 241, 0.15);
            color: var(--admin-indigo);
        }

        .sidebar-footer {
            margin-top: auto;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* --- CONTENT AREA --- */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 50px 60px;
        }

        /* --- FLOW TIMELINE --- */
        .flow-container {
            position: relative;
            padding-left: 50px;
            margin-top: 40px;
        }

        .flow-container::before {
            content: '';
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #e2e8f0;
            border-radius: 2px;
        }

        .flow-event {
            position: relative;
            background: white;
            border-radius: 25px;
            padding: 30px;
            margin-bottom: 30px;
            border: 1px solid #f1f5f9;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
            transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .flow-event:hover {
            transform: translateX(10px);
            border-color: var(--admin-indigo);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.08);
        }

        .flow-dot {
            position: absolute;
            left: -38px;
            top: 35px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: white;
            border: 4px solid var(--admin-indigo);
            z-index: 2;
        }

        /* Status Badges */
        .step-badge {
            font-size: 0.7rem;
            font-weight: 800;
            padding: 6px 14px;
            border-radius: 10px;
            text-transform: uppercase;
            margin-bottom: 12px;
            display: inline-block;
            letter-spacing: 0.5px;
        }

        .step-new {
            background: #eff6ff;
            color: #1e40af;
        }

        .step-hod {
            background: #fff7ed;
            color: #9a3412;
        }

        .step-esc {
            background: #fef2f2;
            color: #991b1b;
        }

        .step-res {
            background: #f0fdf4;
            color: #166534;
        }

        .flow-path {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px dashed #e2e8f0;
            color: #64748b;
            font-size: 0.85rem;
            font-weight: 700;
        }
    </style>
</head>

<body>

    <div class="sidebar-admin">
        <div class="brand">Admin<span>CMS</span></div>
        <div class="nav-group">
            <a href="dashboard.php" class="nav-link-admin">
                <i class="bi bi-cpu-fill"></i> System Hub
            </a>
            <a href="user_account.php" class="nav-link-admin">
                <i class="bi bi-people-fill"></i> User Accounts
            </a>
            <a href="flow_monitor.php" class="nav-link-admin active">
                <i class="bi bi-activity"></i> Flow Monitor
            </a>
            <a href="security_logs.php" class="nav-link-admin">
                <i class="bi bi-shield-lock-fill"></i> Security Logs
            </a>

            <div class="sidebar-footer">
                <a href="../logout.php" class="nav-link-admin text-danger">
                    <i class="bi bi-power"></i> Shutdown
                </a>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h1 class="fw-bolder" style="letter-spacing: -1.5px;">Complaint Flow Monitor</h1>
                <p class="text-muted fw-medium">Real-time lifecycle tracking of campus grievances (SRS 4.3)</p>
            </div>
            <div class="badge bg-white text-dark border p-2 px-4 rounded-pill shadow-sm fw-bold">
                <span class="text-success me-2">●</span> Live Monitoring Active
            </div>
        </div>



        <div class="flow-container">
            <div class="flow-event">
                <div class="flow-dot" style="border-color: #ef4444;"></div>
                <span class="step-badge step-esc">Escalated to Director</span>
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="fw-bold mb-1">CMP-9902: Laboratory Equipment Shortage</h5>
                    <span class="badge bg-light text-muted fw-bold">14:20 PM</span>
                </div>
                <p class="text-muted small mb-0 mt-2">HOD Mechanical exceeded response time threshold (48h). System auto-escalated to Executive Office for immediate intervention.</p>
                <div class="flow-path">
                    <span>Student</span> <i class="bi bi-chevron-right"></i>
                    <span>HOD Mechanical</span> <i class="bi bi-chevron-right text-danger"></i>
                    <span class="text-danger">Director Oversight</span>
                </div>
            </div>

            <div class="flow-event">
                <div class="flow-dot" style="border-color: #10b981;"></div>
                <span class="step-badge step-res">Resolved by HOD</span>
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="fw-bold mb-1">CMP-9881: Wi-Fi Downtime - Block C</h5>
                    <span class="badge bg-light text-muted fw-bold">13:45 PM</span>
                </div>
                <p class="text-muted small mb-0 mt-2">Issue verified and resolved by IT support staff. Student Rahul Sharma has been notified via the portal.</p>
                <div class="flow-path">
                    <span>Student</span> <i class="bi bi-chevron-right"></i>
                    <span class="text-success">HOD IT</span> <i class="bi bi-check-circle-fill text-success ms-1"></i>
                </div>
            </div>

            <div class="flow-event">
                <div class="flow-dot"></div>
                <span class="step-badge step-new">New Submission</span>
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="fw-bold mb-1">CMP-9915: Mess Food Quality Complaint</h5>
                    <span class="badge bg-light text-muted fw-bold">13:10 PM</span>
                </div>
                <p class="text-muted small mb-0 mt-2">Complaint initiated by Student ID 202401. Automatically routed to HOD Hostel Administration queue.</p>
                <div class="flow-path">
                    <span class="text-primary">Student</span> <i class="bi bi-chevron-right"></i>
                    <span class="text-muted">Awaiting HOD Review</span>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>