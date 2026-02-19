<?php
$pageTitle = "Staff Directory | CampusCMS";
$root = $_SERVER['DOCUMENT_ROOT'] . '/campusmanagementsystem/';
// include_once $root . 'db_config.php'; // Uncomment when database is ready
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

        /* Sidebar Styling */
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
            transition: 0.3s;
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
            height: 100%;
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

        /* Form Customization */
        .form-control-pill {
            border-radius: 15px;
            padding: 12px 20px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
        }

        label.error {
            color: #ef4444;
            font-size: 0.75rem;
            font-weight: 600;
            margin-top: 5px;
            padding-left: 15px;
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
            <div class="mt-4">
                <small class="text-uppercase text-muted fw-bold mb-3 d-block ps-3" style="font-size: 0.65rem;">Reports & Analytics</small>
                <a href="performance.php" class="nav-link-custom"><i class="bi bi-graph-up-arrow"></i> Performance</a>
                <a href="../auth/login.php" class="nav-link-custom text-danger mt-5"><i class="bi bi-box-arrow-left"></i> Logout</a>
            </div>
        </aside>

        <main class="main-viewport">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h1 class="fw-bold text-dark mb-1">Staff Directory</h1>
                    <p class="text-muted fw-medium">Manage and assign departmental personnel</p>
                </div>
                <button class="btn btn-dark rounded-pill px-4 fw-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#addStaffModal">
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
                        <button class="btn btn-outline-primary w-100 rounded-pill fw-bold btn-sm py-2 view-perf-btn">View Performance</button>
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
                        <button class="btn btn-outline-primary w-100 rounded-pill fw-bold btn-sm py-2 view-perf-btn">View Performance</button>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="staff-card" style="border: 2px dashed #e2e8f0; background: transparent;">
                        <div class="d-flex flex-column align-items-center justify-content-center h-100">
                            <i class="bi bi-plus-circle-dotted fs-1 text-muted"></i>
                            <p class="text-muted fw-bold small mt-2 text-center">New Department<br>Position</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div class="modal fade" id="addStaffModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 30px; border: none; overflow: hidden;">
                <div class="modal-header bg-dark text-white p-4 border-0">
                    <h5 class="modal-title fw-bold">Register New Staff</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="addStaffForm" method="POST" action="process_staff.php">
                        <div class="mb-3">
                            <label class="form-label fw-bold small text-muted">FULL NAME</label>
                            <input type="text" name="staff_name" class="form-control form-control-pill" placeholder="Enter name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold small text-muted">EMAIL ADDRESS</label>
                            <input type="email" name="staff_email" class="form-control form-control-pill" placeholder="institutional@email.com">
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold small text-muted">DEPARTMENT</label>
                            <select name="staff_role" class="form-select form-control-pill">
                                <option value="">Select Department</option>
                                <option value="Hardware">Hardware & Labs</option>
                                <option value="Network">Network Admin</option>
                                <option value="Academics">Academics</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 rounded-pill py-3 fw-bold">SAVE STAFF MEMBER</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="performanceModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" style="border-radius: 32px; border: none;">
                <div class="modal-body p-5">
                    <div class="text-center mb-4">
                        <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2 mb-2">Analytics Report</span>
                        <h3 class="fw-bold">Staff Performance Overview</h3>
                    </div>



                    <div class="row g-4 mt-3">
                        <div class="col-md-4">
                            <div class="p-4 bg-light rounded-4 text-center">
                                <h2 class="fw-bold text-primary mb-0">94%</h2>
                                <small class="text-muted fw-bold">Resolution Rate</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-4 bg-light rounded-4 text-center">
                                <h2 class="fw-bold text-warning mb-0">1.2d</h2>
                                <small class="text-muted fw-bold">Avg. Response</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-4 bg-light rounded-4 text-center">
                                <h2 class="fw-bold text-success mb-0">48</h2>
                                <small class="text-muted fw-bold">Total Solved</small>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-dark w-100 rounded-pill mt-5 fw-bold" data-bs-dismiss="modal">Close Analytics</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function() {
            // Trigger Performance Modal
            $('.view-perf-btn').on('click', function() {
                $('#performanceModal').modal('show');
            });

            // jQuery Validation for Add Staff Form
            $("#addStaffForm").validate({
                rules: {
                    staff_name: {
                        required: true,
                        minlength: 3
                    },
                    staff_email: {
                        required: true,
                        email: true
                    },
                    staff_role: "required"
                },
                messages: {
                    staff_name: "Please enter the staff's full name",
                    staff_email: "Valid institutional email is required",
                    staff_role: "Select a department"
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                },
                submitHandler: function(form) {
                    // This is where you would normally use AJAX or form.submit()
                    alert("Staff member successfully added to directory!");
                    form.submit();
                }
            });
        });
    </script>
</body>

</html>