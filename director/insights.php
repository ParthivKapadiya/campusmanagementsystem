<?php
$pageTitle = "Campus Intelligence | Director Console";
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
            background: #f8fafc;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* --- SIDEBAR --- */
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

        /* --- INSIGHT CARDS --- */
        .insight-card {
            background: white;
            border-radius: 35px;
            border: none;
            padding: 35px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03);
            height: 100%;
        }

        .metric-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 10px solid #f1f5f9;
            border-top-color: var(--director-gold);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 800;
            margin: 0 auto 20px;
        }

        .dept-stat-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .progress-slim {
            height: 6px;
            border-radius: 10px;
            background: #f1f5f9;
        }

        .progress-slim .bar {
            height: 100%;
            border-radius: 10px;
            background: var(--executive-navy);
        }
    </style>
</head>

<body>

    <div class="sidebar-executive">
        <div class="brand">Direct<span>CMS</span></div>
        <div class="nav-group">
            <a href="dashboard.php" class="nav-link-exec"><i class="bi bi-grid-1x2-fill"></i> Command Hub</a>
            <a href="escalations.php" class="nav-link-exec"><i class="bi bi-shield-lock-fill"></i> Escalations</a>
            <a href="insights.php" class="nav-link-exec active"><i class="bi bi-bar-chart-steps"></i> Campus Insights</a>
            <a href="hod_performance.php" class="nav-link-exec"><i class="bi bi-people-fill"></i> HOD Performance</a>
        </div>
    </div>

    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h1 class="fw-bolder">Campus Intelligence</h1>
                <p class="text-muted">Inter-departmental performance & trend analysis (SRS 4.5)</p>
            </div>
            <button class="btn btn-dark rounded-pill px-4 fw-bold">Generate Annual Audit</button>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="insight-card text-center">
                    <h6 class="fw-bold text-muted text-uppercase small mb-4">Overall Resolution Rate</h6>
                    <div class="metric-circle">88%</div>
                    <p class="small text-muted fw-medium">Goal: 95% <span class="text-success ms-2"><i class="bi bi-caret-up-fill"></i> 3%</span></p>
                    <hr>
                    <div class="row mt-3">
                        <div class="col-6 border-end border-light">
                            <p class="mb-0 fw-black fs-5">2.4</p>
                            <small class="text-muted">Avg. Days</small>
                        </div>
                        <div class="col-6">
                            <p class="mb-0 fw-black fs-5">12</p>
                            <small class="text-muted">Open Today</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="insight-card">
                    <h6 class="fw-bold text-muted text-uppercase small mb-4">Department Performance Index</h6>

                    <div class="dept-stat-row">
                        <div style="width: 150px;"><span class="fw-bold">Info. Tech</span></div>
                        <div class="flex-grow-1 px-4">
                            <div class="progress-slim">
                                <div class="bar" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="text-end"><span class="badge bg-light text-dark">85% Efficiency</span></div>
                    </div>

                    <div class="dept-stat-row">
                        <div style="width: 150px;"><span class="fw-bold">Mechanical</span></div>
                        <div class="flex-grow-1 px-4">
                            <div class="progress-slim">
                                <div class="bar" style="width: 62%; background: #f59e0b;"></div>
                            </div>
                        </div>
                        <div class="text-end"><span class="badge bg-light text-dark">62% Efficiency</span></div>
                    </div>

                    <div class="dept-stat-row">
                        <div style="width: 150px;"><span class="fw-bold">Business Admin</span></div>
                        <div class="flex-grow-1 px-4">
                            <div class="progress-slim">
                                <div class="bar" style="width: 94%; background: #10b981;"></div>
                            </div>
                        </div>
                        <div class="text-end"><span class="badge bg-light text-dark">94% Efficiency</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="insight-card">
                    <div class="d-flex justify-content-between mb-4">
                        <h6 class="fw-bold text-muted text-uppercase small">Top Complaint Categories</h6>
                        <span class="text-primary fw-bold small">Current Month View</span>
                    </div>

                    <div class="row text-center mt-4">
                        <div class="col-3">
                            <div class="p-3 bg-light rounded-4">
                                <i class="bi bi-router text-primary fs-3"></i>
                                <p class="mb-0 fw-bold mt-2">Network (42%)</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="p-3 bg-light rounded-4">
                                <i class="bi bi-tools text-warning fs-3"></i>
                                <p class="mb-0 fw-bold mt-2">Maintenance (28%)</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="p-3 bg-light rounded-4">
                                <i class="bi bi-wallet2 text-success fs-3"></i>
                                <p class="mb-0 fw-bold mt-2">Finance (18%)</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="p-3 bg-light rounded-4">
                                <i class="bi bi-shield-check text-danger fs-3"></i>
                                <p class="mb-0 fw-bold mt-2">Safety (12%)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>