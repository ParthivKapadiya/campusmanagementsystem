<?php
$pageTitle = "Advanced Inbox | CampusCMS";
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
        /* -------------------- GLOBAL DASHBOARD UI (Fixes Execution) -------------------- */
        :root {
            --side-nav-width: 280px;
            --primary-blue: #0d6efd;
            --dark-navy: #0f172a;
            --accent-gold: #ffc107;
        }

        body {
            background: #f8fafc;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
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
            transition: 0.3s;
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

        /* -------------------- INBOX SPECIFIC STYLES -------------------- */
        .inbox-container {
            display: flex;
            height: calc(100vh - 200px);
            gap: 25px;
        }

        .ticket-list-panel {
            flex: 1;
            background: white;
            border-radius: 32px;
            overflow-y: auto;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.02);
        }

        .preview-panel {
            flex: 1.5;
            background: white;
            border-radius: 32px;
            box-shadow: 0 20px 60px rgba(15, 23, 42, 0.04);
            display: flex;
            flex-direction: column;
            padding: 40px;
        }

        .inbox-card {
            padding: 20px;
            border-radius: 20px;
            transition: 0.3s;
            cursor: pointer;
            border: 2px solid transparent;
            margin-bottom: 12px;
            background: #fff;
        }

        .inbox-card:hover {
            background: #f1f5f9;
        }

        .inbox-card.active {
            background: #f0f7ff;
            border-color: #0d6efd;
        }

        .chat-bubble-hod {
            background: #f8fafc;
            padding: 20px;
            border-radius: 20px 20px 20px 0;
            margin-top: 20px;
            border-left: 5px solid var(--primary-blue);
        }

        .attachment-preview {
            width: 80px;
            height: 60px;
            border-radius: 12px;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64748b;
        }

        .modal-content {
            border-radius: 30px;
            border: none;
        }
    </style>
</head>

<body>

    <div class="dashboard-wrapper">
        <aside class="sidebar-glass">
            <div class="logo-text">Campus<span>CMS</span></div>
            <div class="nav-group">
                <a href="dashboard.php" class="nav-link-custom"><i class="bi bi-speedometer2"></i> Dashboard</a>
                <a href="complaint_inbox.php" class="nav-link-custom active"><i class="bi bi-inboxes-fill"></i> Complaint Inbox</a>
                <a href="staff_directory.php" class="nav-link-custom"><i class="bi bi-person-gear"></i> Staff Directory</a>
            </div>
            <div class="nav-group">
                <small class="text-uppercase text-muted fw-bold mb-3 d-block ps-3" style="font-size: 0.65rem;">Reports & Analytics</small>
                <a href="performance.php" class="nav-link-custom"><i class="bi bi-graph-up-arrow"></i> Performance</a>
                <a href="export_data.php" class="nav-link-custom"><i class="bi bi-file-earmark-pdf"></i> Export Data</a>
            </div>
        </aside>

        <main class="main-viewport">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="fw-black text-dark mb-1">Complaint Inbox</h1>
                    <p class="text-muted fw-medium small">SRS 4.2: Departmental Triage Center</p>
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-white bg-white shadow-sm rounded-pill px-4 fw-bold small border">Filter</button>
                    <button class="btn btn-dark rounded-pill px-4 fw-bold small shadow">Refresh</button>
                </div>
            </div>

            <div class="inbox-container">
                <div class="ticket-list-panel">
                    <div class="inbox-card active shadow-sm">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-danger rounded-pill px-2" style="font-size: 0.6rem;">URGENT</span>
                            <small class="text-muted fw-bold">10m ago</small>
                        </div>
                        <h6 class="fw-bold mb-1">Network Outage: Lab 4</h6>
                        <p class="small text-muted mb-0">Student: Michael Scott</p>
                    </div>

                    <div class="inbox-card">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary rounded-pill px-2" style="font-size: 0.6rem;">NORMAL</span>
                            <small class="text-muted fw-bold">2h ago</small>
                        </div>
                        <h6 class="fw-bold mb-1">Broken Projector</h6>
                        <p class="small text-muted mb-0">Student: Pam Beesly</p>
                    </div>
                </div>

                <div class="preview-panel">
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <div>
                            <h3 class="fw-black mb-1">Network Outage: Lab 4</h3>
                            <p class="text-muted small mb-0">Ticket <span class="text-primary fw-bold">#CMS-901</span> | Feb 17, 2026</p>
                        </div>
                        <button class="btn btn-success rounded-pill px-4 fw-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#actionModal">
                            Take Action
                        </button>
                    </div>

                    <div class="p-3 bg-light rounded-4 d-flex align-items-center gap-3 mb-4">
                        <img src="https://ui-avatars.com/api/?name=Michael+Scott&background=0d6efd&color=fff" class="rounded-circle" width="45">
                        <div>
                            <p class="mb-0 fw-bold small">Michael Scott</p>
                            <small class="text-muted">ID: #CS-2024-001</small>
                        </div>
                    </div>

                    <div class="complaint-body flex-grow-1">
                        <label class="text-muted small fw-bold text-uppercase mb-2 d-block">Description</label>
                        <p class="text-dark fw-medium">"Entire row 3 in Lab 4 has no internet connectivity. Students are unable to access the local server for their Java programming lab."</p>

                        <label class="text-muted small fw-bold text-uppercase mt-4 mb-2 d-block">Evidence</label>
                        <div class="d-flex gap-2">
                            <div class="attachment-preview"><i class="bi bi-image"></i></div>
                            <div class="attachment-preview"><i class="bi bi-filetype-pdf"></i></div>
                        </div>
                    </div>

                    <div class="chat-bubble-hod">
                        <small class="fw-bold text-primary">HOD DRAFT NOTES</small>
                        <p class="mb-0 small text-muted">Checking with server room staff.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div class="modal fade" id="actionModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-2">
                <div class="modal-header border-0">
                    <h5 class="fw-bold">Process Complaint</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">STATUS</label>
                            <select class="form-select border-0 bg-light p-3 rounded-4">
                                <option>Mark as Under Review</option>
                                <option>Mark as Resolved</option>
                                <option>Forward to Director</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">REMARKS (SRS 4.4)</label>
                            <textarea class="form-control border-0 bg-light p-3 rounded-4" rows="3"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary w-100 p-3 rounded-4 fw-bold" data-bs-dismiss="modal">Confirm Action</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>