<?php
session_start();
// Beginner Tip: This line checks if the user is logged in
$studentName = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : "Student";
include '../includes/header.php';
?>

<div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-md-2 bg-dark shadow-lg" style="min-height: 100vh;">
            <?php include '../includes/student_sidebar.php'; ?>
        </div>

        <div class="col-md-10" style="background-color: #f4f7fe; padding: 40px;">

            <div class="p-5 mb-5 text-white rounded-5 shadow" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
                <h1 class="display-5 fw-bold">Welcome back, <?php echo $studentName; ?>!</h1>
                <p class="lead opacity-75">You have 2 active tickets. Need help with something else?</p>
                <a href="submit_complaint.php" class="btn btn-warning btn-lg rounded-pill fw-bold mt-3 px-5 shadow">
                    <i class="bi bi-plus-lg me-2"></i>Create New Ticket
                </a>
            </div>

            <div class="row g-4 mb-5 text-center">
                <?php
                $stats = [
                    ['Total Filed', '16', 'primary', 'bi-folder'],
                    ['In Progress', '02', 'warning', 'bi-gear'],
                    ['Resolved', '14', 'success', 'bi-check-circle'],
                    ['Feedback Due', '01', 'danger', 'bi-star']
                ];
                foreach ($stats as $stat):
                ?>
                    <div class="col-md-3">
                        <div class="bg-white p-4 rounded-4 shadow-sm border-bottom border-<?php echo $stat[2]; ?> border-5">
                            <i class="bi <?php echo $stat[3]; ?> fs-3 text-<?php echo $stat[2]; ?> mb-2 d-block"></i>
                            <h6 class="text-muted small fw-bold text-uppercase"><?php echo $stat[0]; ?></h6>
                            <h2 class="fw-bold mb-0"><?php echo $stat[1]; ?></h2>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="bg-white p-4 rounded-5 shadow-sm">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="fw-bold m-0">Recent Activity</h4>
                            <span class="badge bg-light text-primary p-2">Showing last 3 items</span>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr class="text-muted small">
                                        <th>ID</th>
                                        <th>Complaint Details</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-bold">#8812</td>
                                        <td><strong>Broken AC in Lab 4</strong><br><small class="text-muted">IT Infrastructure Dept.</small></td>
                                        <td><span class="badge bg-warning text-dark rounded-pill">In Progress</span></td>
                                        <td><a href="complaint_details.php?id=8812" class="btn btn-sm btn-outline-dark">Track</a></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">#8790</td>
                                        <td><strong>Water Supply Issue</strong><br><small class="text-muted">Maintenance Dept.</small></td>
                                        <td><span class="badge bg-success rounded-pill">Resolved</span></td>
                                        <td><a href="#" class="btn btn-sm btn-outline-dark disabled">Resolved</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bg-white p-4 rounded-5 shadow-sm mb-4">
                        <h5 class="fw-bold mb-3"><i class="bi bi-info-circle-fill me-2 text-primary"></i> Guide</h5>
                        <ol class="small text-muted ps-3">
                            <li class="mb-2">Click <strong>New Ticket</strong> to report a problem.</li>
                            <li class="mb-2">An HOD will assign your ticket to a staff member.</li>
                            <li>You will get an alert once it's marked <strong>Resolved</strong>.</li>
                        </ol>
                    </div>

                    <div class="p-4 rounded-5 bg-primary text-white shadow">
                        <h6 class="fw-bold"><i class="bi bi-megaphone me-2"></i> Campus Alert</h6>
                        <p class="small mb-0 opacity-75">Hostel WiFi upgrade scheduled for this Sunday. Expect 2 hours of downtime.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>