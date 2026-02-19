<?php
$pageTitle = "HOD Performance | Director Console";
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

        /* HOD Performance Cards */
        .perf-card {
            background: white;
            border-radius: 35px;
            border: none;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03);
            margin-bottom: 25px;
        }

        .avatar-circle {
            width: 60px;
            height: 60px;
            border-radius: 20px;
            object-fit: cover;
            border: 3px solid #f1f5f9;
        }

        .score-badge {
            background: #f0fdf4;
            color: #16a34a;
            padding: 8px 16px;
            border-radius: 12px;
            font-weight: 800;
        }

        .rating-star {
            color: var(--director-gold);
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <div class="sidebar-executive">
        <div class="brand">Direct<span>CMS</span></div>
        <div class="nav-group">
            <a href="dashboard.php" class="nav-link-exec"><i class="bi bi-grid-1x2-fill"></i> Command Hub</a>
            <a href="escalations.php" class="nav-link-exec"><i class="bi bi-shield-lock-fill"></i> Escalations</a>
            <a href="insights.php" class="nav-link-exec"><i class="bi bi-bar-chart-steps"></i> Campus Insights</a>
            <a href="hod_performance.php" class="nav-link-exec active"><i class="bi bi-people-fill"></i> HOD Performance</a>
        </div>
    </div>

    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h1 class="fw-bolder">HOD Leadership Index</h1>
                <p class="text-muted">Analyzing departmental head response times & student satisfaction</p>
            </div>
            <div class="d-flex gap-3">
                <button class="btn btn-outline-dark rounded-pill px-4 fw-bold">View History</button>
                <button class="btn btn-dark rounded-pill px-4 fw-bold">Send Feedback</button>
            </div>
        </div>

        <div class="perf-card">
            <div class="row align-items-center">
                <div class="col-md-1">
                    <img src="https://ui-avatars.com/api/?name=IT+HOD&background=0f172a&color=fff" class="avatar-circle">
                </div>
                <div class="col-md-3">
                    <h5 class="fw-bold mb-0">Dr. Sarah Jenkins</h5>
                    <small class="text-primary fw-bold">IT Department</small>
                    <div class="mt-1">
                        <i class="bi bi-star-fill rating-star"></i><i class="bi bi-star-fill rating-star"></i><i class="bi bi-star-fill rating-star"></i><i class="bi bi-star-fill rating-star"></i><i class="bi bi-star-half rating-star"></i>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <p class="text-muted small fw-bold mb-1">RESOLVED</p>
                    <h4 class="fw-black mb-0">94%</h4>
                </div>
                <div class="col-md-2 text-center">
                    <p class="text-muted small fw-bold mb-1">AVG. TIME</p>
                    <h4 class="fw-black mb-0">1.2 Days</h4>
                </div>
                <div class="col-md-2 text-center">
                    <p class="text-muted small fw-bold mb-1">ESCALATIONS</p>
                    <h4 class="fw-black mb-0 text-danger">02</h4>
                </div>
                <div class="col-md-2 text-end">
                    <span class="score-badge">TOP PERFORMER</span>
                </div>
            </div>
        </div>

        <div class="perf-card">
            <div class="row align-items-center">
                <div class="col-md-1">
                    <img src="https://ui-avatars.com/api/?name=ME+HOD&background=64748b&color=fff" class="avatar-circle">
                </div>
                <div class="col-md-3">
                    <h5 class="fw-bold mb-0">Prof. Robert Miller</h5>
                    <small class="text-primary fw-bold">Mechanical Dept</small>
                    <div class="mt-1">
                        <i class="bi bi-star-fill rating-star"></i><i class="bi bi-star-fill rating-star"></i><i class="bi bi-star-fill rating-star"></i><i class="bi bi-star rating-star"></i><i class="bi bi-star rating-star"></i>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <p class="text-muted small fw-bold mb-1">RESOLVED</p>
                    <h4 class="fw-black mb-0">68%</h4>
                </div>
                <div class="col-md-2 text-center">
                    <p class="text-muted small fw-bold mb-1">AVG. TIME</p>
                    <h4 class="fw-black mb-0">4.5 Days</h4>
                </div>
                <div class="col-md-2 text-center">
                    <p class="text-muted small fw-bold mb-1">ESCALATIONS</p>
                    <h4 class="fw-black mb-0 text-danger">08</h4>
                </div>
                <div class="col-md-2 text-end">
                    <span class="score-badge" style="background: #fff7ed; color: #c2410c;">NEEDS REVIEW</span>
                </div>
            </div>
        </div>



        <div class="mt-5 p-4 rounded-5 bg-dark text-white shadow-lg">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="fw-bold mb-1 text-warning">Direct Action Required</h5>
                    <p class="small opacity-75 mb-0">The Mechanical Department HOD has 8 pending escalations over 48 hours. Would you like to schedule a review meeting?</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <button class="btn btn-warning rounded-pill px-4 fw-bold">Schedule Meeting</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>