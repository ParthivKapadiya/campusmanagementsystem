<?php
$pageTitle = "Escalation Triage | Director Console";
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
            --executive-navy: #0f172a;
            --director-gold: #fbbf24;
            --sidebar-width: 300px;
        }

        body {
            background: #f1f5f9;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* --- SIDEBAR (Consistent with Dashboard) --- */
        .sidebar-executive {
            width: var(--sidebar-width);
            background: var(--executive-navy);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding: 50px 30px;
            z-index: 1000;
        }

        .sidebar-executive .brand {
            font-size: 1.8rem;
            font-weight: 800;
            color: white;
            margin-bottom: 60px;
        }

        .sidebar-executive .brand span {
            color: var(--director-gold);
        }

        .nav-link-exec {
            display: flex;
            align-items: center;
            gap: 18px;
            color: rgba(255, 255, 255, 0.6);
            padding: 16px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .nav-link-exec.active {
            background: linear-gradient(45deg, #1e293b, #334155);
            color: var(--director-gold);
        }

        .main-content {
            margin-left: var(--sidebar-width);
            padding: 60px;
        }

        /* --- ESCALATION CARDS --- */
        .case-card {
            background: white;
            border-radius: 35px;
            border: none;
            transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            margin-bottom: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
            overflow: hidden;
        }

        .case-card:hover {
            transform: scale(1.01);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
        }

        .dept-indicator {
            width: 5px;
            background: var(--director-gold);
        }

        .hod-quote {
            background: #fffbeb;
            border-radius: 20px;
            padding: 20px;
            border-left: 4px solid var(--director-gold);
            font-style: italic;
        }

        .status-pill {
            padding: 6px 15px;
            border-radius: 12px;
            font-weight: 800;
            font-size: 0.7rem;
        }

        .pill-escalated {
            background: #fee2e2;
            color: #dc2626;
        }
    </style>
</head>

<body>

    <div class="sidebar-executive">
        <div class="brand">Direct<span>CMS</span></div>
        <div class="nav-group">
            <a href="dashboard.php" class="nav-link-exec"><i class="bi bi-grid-1x2-fill"></i> Command Hub</a>
            <a href="escalations.php" class="nav-link-exec active"><i class="bi bi-shield-lock-fill"></i> Escalations</a>
            <a href="insights.php" class="nav-link-exec"><i class="bi bi-bar-chart-steps"></i> Campus Insights</a>
            <a href="hod_performance.php" class="nav-link-exec"><i class="bi bi-people-fill"></i> HOD Performance</a>
        </div>
    </div>

    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h1 class="fw-bolder">Escalated Cases</h1>
                <p class="text-muted">Reviewing matters beyond HOD jurisdiction (SRS 4.2)</p>
            </div>
            <div class="badge bg-dark rounded-pill px-4 py-3 shadow-sm">
                <i class="bi bi-shield-exclamation text-warning me-2"></i> 3 Critical Appeals
            </div>
        </div>

        <div class="case-card d-flex">
            <div class="dept-indicator"></div>
            <div class="p-4 w-100">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <span class="status-pill pill-escalated mb-2 d-inline-block text-uppercase">Financial Escalation</span>
                        <h5 class="fw-bold mb-0">#ESC-8842</h5>
                        <small class="text-muted">Sophia Reynolds | IT Dept</small>
                    </div>
                    <div class="col-md-4">
                        <p class="small fw-bold text-muted text-uppercase mb-1">Issue Overview</p>
                        <p class="mb-0 fw-semibold">High-Performance Computing Cluster (Lab 4) Upgrade</p>
                    </div>
                    <div class="col-md-3">
                        <div class="hod-quote small">
                            "Budget exceeds Departmental Limit. HOD recommends Executive approval."
                        </div>
                    </div>
                    <div class="col-md-2 text-end">
                        <button class="btn btn-dark rounded-pill px-4 fw-bold" data-bs-toggle="modal" data-bs-target="#finalAction">Review</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="case-card d-flex">
            <div class="dept-indicator" style="background: #6366f1;"></div>
            <div class="p-4 w-100">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <span class="status-pill mb-2 d-inline-block text-uppercase" style="background:#e0e7ff; color:#4338ca;">Policy Appeal</span>
                        <h5 class="fw-bold mb-0">#ESC-8850</h5>
                        <small class="text-muted">Mark Z. | Mech Dept</small>
                    </div>
                    <div class="col-md-4">
                        <p class="small fw-bold text-muted text-uppercase mb-1">Issue Overview</p>
                        <p class="mb-0 fw-semibold">Grievance against Exam Fee Fine Policy</p>
                    </div>
                    <div class="col-md-3">
                        <div class="hod-quote small" style="background:#f5f3ff; border-color:#6366f1;">
                            "Student claims medical emergency. HOD cannot override policy."
                        </div>
                    </div>
                    <div class="col-md-2 text-end">
                        <button class="btn btn-dark rounded-pill px-4 fw-bold" data-bs-toggle="modal" data-bs-target="#finalAction">Review</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="finalAction" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0" style="border-radius: 40px; overflow: hidden;">
                <div class="row g-0">
                    <div class="col-md-4 bg-dark p-5 text-white">
                        <h4 class="fw-bold mb-4">Executive Decision</h4>
                        <p class="small opacity-75">Your decision will close this case permanently and notify the Student and HOD.</p>
                    </div>
                    <div class="col-md-8 p-5">
                        <form>
                            <div class="mb-4">
                                <label class="form-label small fw-bold text-muted">FINAL STATUS</label>
                                <select class="form-select border-0 bg-light p-3 rounded-4 fw-bold">
                                    <option>Approve & Authorize</option>
                                    <option>Reject & Maintain Policy</option>
                                    <option>Refer back for Audit</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label small fw-bold text-muted">DIRECTOR'S CLOSING REMARKS</label>
                                <textarea class="form-control border-0 bg-light rounded-4 p-4" rows="4" placeholder="Enter final verdict..."></textarea>
                            </div>
                            <button type="button" class="btn btn-primary w-100 p-3 rounded-4 fw-bold" data-bs-dismiss="modal">Execute Decision</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>