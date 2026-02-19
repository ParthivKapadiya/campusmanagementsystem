<?php
session_start();
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

        /* --- Sidebar Style --- */
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
            transition: 0.3s;
        }

        .nav-link-exec:hover,
        .nav-link-exec.active {
            background: linear-gradient(45deg, #1e293b, #334155);
            color: var(--director-gold);
        }

        .main-content {
            margin-left: var(--sidebar-width);
            padding: 60px;
        }

        /* --- Performance Cards --- */
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

        /* --- Validation Errors --- */
        .error {
            color: #ef4444;
            font-size: 0.75rem;
            font-weight: 700;
            margin-top: 5px;
            display: block;
        }

        .is-invalid {
            border: 2px solid #ef4444 !important;
            background-color: #fef2f2 !important;
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
                <p class="text-muted">Analyzing departmental head response times & satisfaction</p>
            </div>
            <div class="d-flex gap-3">
                <button class="btn btn-outline-dark rounded-pill px-4 fw-bold">View History</button>
                <button class="btn btn-dark rounded-pill px-4 fw-bold">Send Feedback</button>
            </div>
        </div>

        <div class="perf-card">
            <div class="row align-items-center">
                <div class="col-md-1">
                    <img src="https://ui-avatars.com/api/?name=Sarah+Jenkins&background=0f172a&color=fff" class="avatar-circle">
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
                    <h4 class="fw-bold mb-0">94%</h4>
                </div>
                <div class="col-md-2 text-center">
                    <p class="text-muted small fw-bold mb-1">AVG. TIME</p>
                    <h4 class="fw-bold mb-0">1.2 Days</h4>
                </div>
                <div class="col-md-2 text-center">
                    <p class="text-muted small fw-bold mb-1">ESCALATIONS</p>
                    <h4 class="fw-bold mb-0 text-danger">02</h4>
                </div>
                <div class="col-md-2 text-end">
                    <span class="score-badge">TOP PERFORMER</span>
                </div>
            </div>
        </div>

        <div class="perf-card">
            <div class="row align-items-center">
                <div class="col-md-1">
                    <img src="https://ui-avatars.com/api/?name=Robert+Miller&background=64748b&color=fff" class="avatar-circle">
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
                    <h4 class="fw-bold mb-0">68%</h4>
                </div>
                <div class="col-md-2 text-center">
                    <p class="text-muted small fw-bold mb-1">AVG. TIME</p>
                    <h4 class="fw-bold mb-0">4.5 Days</h4>
                </div>
                <div class="col-md-2 text-center">
                    <p class="text-muted small fw-bold mb-1">ESCALATIONS</p>
                    <h4 class="fw-bold mb-0 text-danger">08</h4>
                </div>
                <div class="col-md-2 text-end">
                    <span class="score-badge" style="background: #fff7ed; color: #c2410c;">NEEDS REVIEW</span>
                </div>
            </div>
        </div>

        <div class="mt-5 p-5 rounded-5 bg-dark text-white shadow-lg">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="fw-bold mb-1 text-warning">Direct Action Required</h5>
                    <p class="small opacity-75 mb-0">Specific departments are showing delays in critical escalations. Coordinate a leadership meeting immediately.</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <button class="btn btn-warning rounded-pill px-5 py-3 fw-bold shadow" data-bs-toggle="modal" data-bs-target="#scheduleMeetingModal">
                        Schedule Meeting <i class="bi bi-calendar-check ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="scheduleMeetingModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-5 shadow-lg overflow-hidden">
                <div class="modal-header border-0 p-4 pb-0">
                    <h4 class="fw-bold mb-0">Meeting Coordinator</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="meetingForm" action="process_meeting.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">TARGET HOD</label>
                            <select class="form-select border-0 bg-light p-3 rounded-4" name="hod_id" required>
                                <option value="">Select Department Head...</option>
                                <option value="1">Prof. Robert Miller (Mechanical)</option>
                                <option value="2">Dr. Sarah Jenkins (IT)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">MEETING SUBJECT</label>
                            <input type="text" class="form-control border-0 bg-light p-3 rounded-4" name="meeting_subject" placeholder="Agenda Description" required>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label class="form-label small fw-bold text-muted">DATE</label>
                                <input type="date" class="form-control border-0 bg-light p-3 rounded-4" name="meeting_date" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label small fw-bold text-muted">TIME</label>
                                <input type="time" class="form-control border-0 bg-light p-3 rounded-4" name="meeting_time" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small fw-bold text-muted">VENUE</label>
                            <input type="text" class="form-control border-0 bg-light p-3 rounded-4" name="venue" placeholder="e.g. Director's Office" required>
                        </div>
                        <button type="submit" class="btn btn-warning w-100 py-3 rounded-pill fw-bold">
                            Send Meeting Invite <i class="bi bi-send-fill ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function() {
            // Validation Logic
            $("#meetingForm").validate({
                rules: {
                    hod_id: "required",
                    meeting_subject: {
                        required: true,
                        minlength: 5
                    },
                    meeting_date: "required",
                    meeting_time: "required",
                    venue: "required"
                },
                messages: {
                    hod_id: "Please select an HOD",
                    meeting_subject: "Enter a valid agenda (min 5 chars)",
                    venue: "Venue cannot be empty"
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                },
                highlight: function(element) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
</body>

</html>