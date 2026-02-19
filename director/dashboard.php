<?php
$pageTitle = "Executive Command | CampusCMS";
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
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        /* --- YOUR ORIGINAL CSS: REMAINS UNHARMED --- */
        :root {
            --executive-navy: #0f172a;
            --director-gold: #fbbf24;
            --glass: rgba(255, 255, 255, 0.95);
            --sidebar-width: 300px;
        }

        body {
            background: #f1f5f9;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #1e293b;
        }

        .sidebar-executive {
            width: var(--sidebar-width);
            background: var(--executive-navy);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding: 50px 30px;
            box-shadow: 10px 0 40px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .sidebar-executive .brand {
            font-size: 1.8rem;
            font-weight: 800;
            color: white;
            letter-spacing: -1px;
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
            transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            margin-bottom: 10px;
        }

        .nav-link-exec:hover,
        .nav-link-exec.active {
            background: linear-gradient(45deg, #1e293b, #334155);
            color: var(--director-gold);
            transform: translateX(10px);
        }

        .main-content {
            margin-left: var(--sidebar-width);
            padding: 60px;
        }

        .exec-card {
            background: var(--glass);
            border: none;
            border-radius: 35px;
            padding: 35px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.03);
            transition: 0.3s;
            position: relative;
            overflow: hidden;
        }

        .exec-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.08);
        }

        .exec-card h2 {
            font-weight: 800;
            font-size: 2.5rem;
            margin: 10px 0;
        }

        .indicator {
            width: 50px;
            height: 6px;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .triage-panel {
            background: white;
            border-radius: 40px;
            padding: 40px;
            margin-top: 40px;
            box-shadow: 0 30px 60px rgba(15, 23, 42, 0.05);
        }

        .dept-chip {
            background: #f8fafc;
            padding: 6px 14px;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 800;
            color: var(--executive-navy);
            border: 1px solid #e2e8f0;
        }

        .btn-decision {
            background: var(--executive-navy);
            color: white;
            border-radius: 15px;
            padding: 10px 24px;
            font-weight: 700;
            transition: 0.3s;
        }

        .btn-decision:hover {
            background: var(--director-gold);
            color: var(--executive-navy);
        }

        .mini-chart {
            height: 60px;
            display: flex;
            align-items: flex-end;
            gap: 4px;
        }

        .chart-bar {
            width: 8px;
            background: var(--director-gold);
            border-radius: 4px;
            opacity: 0.3;
        }

        .modal-content {
            border-radius: 40px;
            overflow: hidden;
            border: none;
        }
    </style>
</head>

<body>

    <?php include_once $root . 'includes/director_sidebar.php'; ?>

    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h1 class="fw-bolder" style="font-size: 2.2rem;">Executive Summary</h1>
                <p class="text-muted fw-medium">Strategic oversight for <span class="text-dark fw-bold">Academic Year 2026</span></p>
            </div>
            <div class="d-flex align-items-center gap-4">
                <div class="text-end">
                    <p class="mb-0 fw-bold">Dr. Alistair Thorne</p>
                    <small class="text-warning fw-bold">CAMPUS DIRECTOR</small>
                </div>
                <img src="https://ui-avatars.com/api/?name=Director&background=fbbf24&color=0f172a" class="rounded-pill shadow-sm" width="55">
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="exec-card">
                    <div class="indicator bg-primary"></div>
                    <small class="fw-bold text-muted text-uppercase">Total Volume</small>
                    <h2>1,482</h2>
                    <div class="mini-chart">
                        <div class="chart-bar" style="height: 40%"></div>
                        <div class="chart-bar" style="height: 70%"></div>
                        <div class="chart-bar" style="height: 50%"></div>
                        <div class="chart-bar" style="height: 90%"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="exec-card">
                    <div class="indicator bg-warning"></div>
                    <small class="fw-bold text-muted text-uppercase">Escalated</small>
                    <h2 class="text-warning">24</h2>
                    <p class="small fw-bold text-muted"><i class="bi bi-arrow-up-right text-danger"></i> +4 from HODs today</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="exec-card">
                    <div class="indicator bg-success"></div>
                    <small class="fw-bold text-muted text-uppercase">Approved</small>
                    <h2 class="text-success">1,105</h2>
                    <p class="small fw-bold text-muted">92% Satisfaction Rate</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="exec-card">
                    <div class="indicator bg-danger"></div>
                    <small class="fw-bold text-muted text-uppercase">Rejected</small>
                    <h2 class="text-danger">38</h2>
                    <p class="small fw-bold text-muted">Policy Violations</p>
                </div>
            </div>
        </div>

        <div class="triage-panel">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <h3 class="fw-bold"><i class="bi bi-lightning-charge-fill text-warning me-2"></i> Escalated Resolution Queue</h3>
                <button class="btn btn-light rounded-pill px-4 fw-bold">Export Intelligence <i class="bi bi-download ms-2"></i></button>
            </div>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-muted small fw-bolder">
                            <th>CASE ID</th>
                            <th>STUDENT INFO</th>
                            <th>DEPARTMENT</th>
                            <th>HOD REMARKS</th>
                            <th>DECISION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle" style="height: 90px;">
                            <td class="fw-bold text-primary">#ESC-8842</td>
                            <td>
                                <div class="fw-bold">Sophia Reynolds</div>
                                <small class="text-muted">High Sensitivity Case</small>
                            </td>
                            <td><span class="dept-chip">Information Technology</span></td>
                            <td>
                                <div class="p-2 border-start border-3 border-warning bg-light small" style="max-width: 250px;">
                                    "Requires budget approval for Lab equipment > ₹5,00,000."
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-decision shadow-sm" data-bs-toggle="modal" data-bs-target="#finalAction">Review & Authorize</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="finalAction" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="row g-0">
                    <div class="col-md-4 bg-dark p-5 text-white d-flex flex-column justify-content-between">
                        <div>
                            <h4 class="fw-bold mb-4">Case #8842</h4>
                            <p class="small opacity-75">This decision will be final and cannot be overturned by the HOD.</p>
                        </div>
                        <i class="bi bi-shield-check" style="font-size: 6rem; opacity: 0.1;"></i>
                    </div>
                    <div class="col-md-8 p-5">
                        <h4 class="fw-bold mb-4">Final Decision Center</h4>
                        <form>
                            <div class="mb-4">
                                <label class="form-label small fw-bold text-muted">CHOOSE FINAL ACTION (SRS 4.3)</label>
                                <div class="d-flex gap-2">
                                    <input type="radio" class="btn-check" name="act" id="approve" checked>
                                    <label class="btn btn-outline-success w-100 rounded-4 p-3 fw-bold" for="approve">APPROVE</label>

                                    <input type="radio" class="btn-check" name="act" id="reject">
                                    <label class="btn btn-outline-danger w-100 rounded-4 p-3 fw-bold" for="reject">REJECT</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label small fw-bold text-muted">DIRECTOR'S CLOSING REMARKS (SRS 4.4)</label>
                                <textarea class="form-control border-0 bg-light rounded-4 p-4" rows="4" placeholder="Enter instructions..."></textarea>
                            </div>
                            <button type="button" class="btn btn-dark w-100 p-3 rounded-4 fw-bold shadow-lg" data-bs-dismiss="modal">Execute Final Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>