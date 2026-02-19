<?php
$pageTitle = "Security Audit | Admin Console";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --admin-indigo: #6366f1;
            --admin-dark: #0f172a;
            --sidebar-width: 280px;
            --log-bg: #1e293b;
        }

        body { background: #f8fafc; font-family: 'Plus Jakarta Sans', sans-serif; }

        .sidebar-admin {
            width: var(--sidebar-width); background: var(--admin-dark);
            height: 100vh; position: fixed; left: 0; top: 0; padding: 45px 25px; z-index: 1000;
        }
        .sidebar-admin .brand { font-size: 1.6rem; font-weight: 800; color: white; margin-bottom: 50px; }
        .sidebar-admin .brand span { color: var(--admin-indigo); }

        .main-content { margin-left: var(--sidebar-width); padding: 60px; }

        /* --- SECURITY MONITORING CARDS --- */
        .log-terminal {
            background: var(--log-bg); border-radius: 24px; padding: 30px;
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.15); border: 1px solid rgba(255,255,255,0.05);
        }

        .log-entry {
            font-family: 'JetBrains Mono', monospace; font-size: 0.85rem;
            padding: 12px 15px; border-bottom: 1px solid rgba(255,255,255,0.05);
            display: flex; align-items: flex-start; gap: 15px; color: #cbd5e1;
        }
        .log-entry:last-child { border-bottom: none; }
        
        .timestamp { color: #64748b; font-weight: 700; min-width: 160px; }
        .log-level { font-weight: 800; min-width: 80px; }
        .level-info { color: #22d3ee; }
        .level-warning { color: #fbbf24; }
        .level-critical { color: #f43f5e; text-shadow: 0 0 10px rgba(244, 63, 94, 0.3); }

        .ip-badge { background: rgba(255,255,255,0.1); padding: 2px 8px; border-radius: 6px; font-size: 0.75rem; }
    </style>
</head>
<body>

<div class="sidebar-admin">
    <div class="brand">Admin<span>CMS</span></div>
    <div class="nav-group">
        <a href="dashboard.php" class="nav-link-admin text-decoration-none d-flex align-items-center gap-3" style="color: rgba(255,255,255,0.5);"><i class="bi bi-cpu-fill"></i> System Hub</a>
        <a href="user_account.php" class="nav-link-admin text-decoration-none d-flex align-items-center gap-3 mt-3" style="color: rgba(255,255,255,0.5);"><i class="bi bi-people-fill"></i> User Accounts</a>
        <a href="flow_monitor.php" class="nav-link-admin text-decoration-none d-flex align-items-center gap-3 mt-3" style="color: rgba(255,255,255,0.5);"><i class="bi bi-activity"></i> Flow Monitor</a>
        <a href="#" class="nav-link-admin active text-decoration-none d-flex align-items-center gap-3 mt-3" style="color: var(--admin-indigo); background: rgba(99,102,241,0.1); padding: 15px; border-radius: 12px;"><i class="bi bi-shield-lock-fill"></i> Security Logs</a>
    </div>
</div>

<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h1 class="fw-bolder">Security Audit Logs</h1>
            <p class="text-muted">Analyzing authentication patterns & system modifications</p>
        </div>
        <div class="d-flex gap-3">
            <button class="btn btn-outline-danger rounded-pill px-4 fw-bold small"><i class="bi bi-trash-fill me-2"></i> Clear History</button>
            <button class="btn btn-indigo text-white rounded-pill px-4 fw-bold small" style="background: var(--admin-indigo);"><i class="bi bi-download me-2"></i> Export Report</button>
        </div>
    </div>

    

    <div class="log-terminal">
        <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom border-secondary">
            <div class="text-white fw-bold"><i class="bi bi-terminal-fill me-2 text-info"></i> ACTIVE LOG FEED</div>
            <span class="badge bg-success-subtle text-success px-3">Live Monitoring Active</span>
        </div>

        <div class="log-entry">
            <span class="timestamp">2026-02-17 20:42:11</span>
            <span class="log-level level-critical">[CRITICAL]</span>
            <div class="flex-grow-1">
                Multiple failed login attempts detected for <strong>UID: DIR-101</strong>. 
                <span class="ip-badge ms-2">IP: 192.168.1.44</span>
                <div class="mt-1 small opacity-50">Action: Temporary account lockout engaged.</div>
            </div>
        </div>

        <div class="log-entry">
            <span class="timestamp">2026-02-17 20:15:45</span>
            <span class="log-level level-warning">[WARNING]</span>
            <div class="flex-grow-1">
                Privilege Modification: <strong>Admin</strong> updated permissions for <strong>HOD_IT</strong>.
                <div class="mt-1 small opacity-50">Role changed from "Departmental Read-Only" to "Global Resolve".</div>
            </div>
        </div>

        <div class="log-entry">
            <span class="timestamp">2026-02-17 19:55:22</span>
            <span class="log-level level-info">[INFO]</span>
            <div class="flex-grow-1">
                User Login: <strong>Rahul Sharma (Student)</strong> authenticated successfully.
                <span class="ip-badge ms-2">IP: 10.0.0.12</span>
            </div>
        </div>

        <div class="log-entry">
            <span class="timestamp">2026-02-17 19:30:10</span>
            <span class="log-level level-info">[INFO]</span>
            <div class="flex-grow-1">
                System Backup: Automated weekly snapshot completed on Node-01.
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>