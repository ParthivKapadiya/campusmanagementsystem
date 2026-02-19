<?php
session_start();
$pageTitle = "System Command | Admin Console";
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

        /* --- Sidebar & Layout --- */
        /* These styles ensure the main content respects the external sidebar's width */
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

        .main-content {
            margin-left: var(--sidebar-width);
            padding: 60px;
        }

        /* --- SRS 4.1: SYSTEM HUD --- */
        .stat-card {
            background: white;
            border-radius: 30px;
            padding: 30px;
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
            transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(99, 102, 241, 0.1);
        }

        .icon-box {
            width: 50px;
            height: 50px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 20px;
        }

        /* --- USER MANAGEMENT TABLE --- */
        .control-panel {
            background: white;
            border-radius: 35px;
            padding: 40px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.03);
            margin-top: 40px;
        }

        .user-row {
            transition: 0.2s;
            border-radius: 15px;
        }

        .user-row:hover {
            background: #f8fafc;
        }

        .role-badge {
            font-size: 0.7rem;
            font-weight: 800;
            padding: 6px 14px;
            border-radius: 10px;
            letter-spacing: 0.5px;
        }

        .badge-director {
            background: #fffbeb;
            color: #b45309;
        }

        .badge-hod {
            background: #f0fdf4;
            color: #15803d;
        }

        .badge-student {
            background: #eff6ff;
            color: #1d4ed8;
        }

        .action-btn {
            width: 38px;
            height: 38px;
            border-radius: 12px;
            border: none;
            background: #f1f5f9;
            color: #64748b;
            transition: 0.3s;
        }

        .action-btn:hover {
            background: var(--admin-indigo);
            color: white;
        }

        /* --- Validation Styles --- */
        .error {
            color: #6366f1;
            font-size: 0.75rem;
            font-weight: 700;
            margin-top: 5px;
            display: block;
        }

        .is-invalid {
            border: 2px solid var(--admin-indigo) !important;
            background-color: #f5f3ff !important;
        }
    </style>
</head>

<body>

    <?php include '../includes/admin_sidebar.php'; ?>

    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h1 class="fw-bolder">Command Center</h1>
                <p class="text-muted fw-medium">Unified System Oversight & User Governance</p>
            </div>
            <button class="btn btn-dark rounded-pill px-4 py-2 fw-bold" data-bs-toggle="modal" data-bs-target="#addUserModal">
                <i class="bi bi-person-plus-fill me-2"></i> Provision Account
            </button>
        </div>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="icon-box bg-primary-subtle text-primary"><i class="bi bi-people"></i></div>
                    <small class="text-muted fw-bold text-uppercase">Total Users</small>
                    <h2 class="fw-black mb-0">4,102</h2>
                    <div class="mt-2 small text-success fw-bold"><i class="bi bi-graph-up"></i> +12 this week</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="icon-box bg-warning-subtle text-warning"><i class="bi bi-envelope-exclamation"></i></div>
                    <small class="text-muted fw-bold text-uppercase">Active Flow</small>
                    <h2 class="fw-black mb-0">84</h2>
                    <div class="mt-2 small text-muted">Complaints in transit</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="icon-box bg-success-subtle text-success"><i class="bi bi-check2-all"></i></div>
                    <small class="text-muted fw-bold text-uppercase">System Uptime</small>
                    <h2 class="fw-black mb-0">99.9%</h2>
                    <div class="mt-2 small text-muted">Core Services: Active</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="icon-box bg-danger-subtle text-danger"><i class="bi bi-shield-shaded"></i></div>
                    <small class="text-muted fw-bold text-uppercase">Security Alerts</small>
                    <h2 class="fw-black mb-0">0</h2>
                    <div class="mt-2 small text-success fw-bold">System Secure</div>
                </div>
            </div>
        </div>

        <div class="control-panel">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <h4 class="fw-bold mb-0">User Authority Matrix</h4>
                <div class="d-flex gap-3">
                    <div class="input-group">
                        <span class="input-group-text bg-light border-0"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control bg-light border-0" placeholder="Filter identities...">
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table align-middle border-0">
                    <thead>
                        <tr class="text-muted small fw-bolder">
                            <th class="border-0">IDENTITY</th>
                            <th class="border-0">PRIVILEGE LEVEL</th>
                            <th class="border-0">DEPARTMENT</th>
                            <th class="border-0">STATUS</th>
                            <th class="border-0 text-end">COMMANDS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="user-row">
                            <td>
                                <div class="fw-bold">Dr. Alistair Thorne</div>
                                <small class="text-muted">UID: EXE-001</small>
                            </td>
                            <td><span class="role-badge badge-director">Director Privilege</span></td>
                            <td class="fw-semibold small">Executive Office</td>
                            <td><span class="badge bg-success rounded-pill px-2">Live</span></td>
                            <td class="text-end">
                                <button class="action-btn me-2"><i class="bi bi-sliders"></i></button>
                                <button class="action-btn text-danger"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr class="user-row">
                            <td>
                                <div class="fw-bold">Prof. Sarah Jenkins</div>
                                <small class="text-muted">UID: HOD-882</small>
                            </td>
                            <td><span class="role-badge badge-hod">HOD Authority</span></td>
                            <td class="fw-semibold small">Computer Science</td>
                            <td><span class="badge bg-success rounded-pill px-2">Live</span></td>
                            <td class="text-end">
                                <button class="action-btn me-2"><i class="bi bi-sliders"></i></button>
                                <button class="action-btn text-danger"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addUserModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 p-4" style="border-radius: 40px;">
                <div class="modal-header border-0">
                    <h4 class="fw-bold">Provision New Account</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="provisionForm" action="process_account.php" method="POST">
                        <div class="mb-4">
                            <label class="form-label small fw-bold text-muted">ACCOUNT HOLDER NAME</label>
                            <input type="text" name="fullname" class="form-control border-0 bg-light p-3 rounded-4" placeholder="Enter full name...">
                        </div>
                        <div class="mb-4">
                            <label class="form-label small fw-bold text-muted">ACCESS LEVEL</label>
                            <select name="access_level" class="form-select border-0 bg-light p-3 rounded-4 fw-bold">
                                <option value="">Select Level...</option>
                                <option value="student">Student Access</option>
                                <option value="hod">HOD Authority</option>
                                <option value="director">Director Oversight</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small fw-bold text-muted">DEPARTMENT ASSIGNMENT</label>
                            <select name="department" class="form-select border-0 bg-light p-3 rounded-4 fw-bold">
                                <option value="">Select Dept...</option>
                                <option value="IT">Information Technology</option>
                                <option value="ME">Mechanical Eng.</option>
                                <option value="CE">Civil Eng.</option>
                                <option value="MGMT">Management</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 p-3 rounded-4 fw-bold shadow-lg" style="background: var(--admin-indigo);">
                            Initialize Authority
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
            // jQuery Validation logic
            $("#provisionForm").validate({
                rules: {
                    fullname: {
                        required: true,
                        minlength: 3
                    },
                    access_level: "required",
                    department: "required"
                },
                messages: {
                    fullname: "Please enter the identity name",
                    access_level: "Assign a privilege level",
                    department: "Assign a department"
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                },
                highlight: function(element) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form) {
                    const btn = $(form).find('button[type="submit"]');
                    btn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-2"></span>Provisioning...');
                    form.submit();
                }
            });
        });
    </script>
</body>

</html>