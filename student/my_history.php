<?php
session_start();
include '../includes/header.php';
// Mock data - replace with SQL: SELECT * FROM complaints WHERE student_id = ?
?>

<div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-md-2 bg-dark shadow-lg" style="min-height: 100vh;">
            <?php include '../includes/student_sidebar.php'; ?>
        </div>

        <div class="col-md-10" style="background-color: #f4f7fe; padding: 40px;">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h1 class="fw-bold text-dark">Complaint History</h1>
                    <p class="text-muted">Review and monitor all your submitted requests.</p>
                </div>
                <a href="submit_complaint.php" class="btn btn-primary rounded-pill px-4 fw-bold shadow-sm">
                    <i class="bi bi-plus-lg me-2"></i> New Lodge
                </a>
            </div>

            <div class="bg-white p-4 rounded-5 shadow-sm border-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="bg-light">
                            <tr class="text-muted small">
                                <th class="ps-4">TICKET ID</th>
                                <th>SUBJECT</th>
                                <th>CATEGORY</th>
                                <th>DATE FILED</th>
                                <th>STATUS</th>
                                <th class="text-end pe-4">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-transparent">
                                <td class="ps-4 fw-bold text-primary">#CMS-8812</td>
                                <td>
                                    <div class="fw-bold">Broken AC in Lab 4</div>
                                    <small class="text-muted">High Urgency</small>
                                </td>
                                <td><span class="badge bg-light text-dark border rounded-pill">IT Support</span></td>
                                <td>Oct 12, 2023</td>
                                <td><span class="badge bg-warning-subtle text-warning px-3 rounded-pill">In Progress</span></td>
                                <td class="text-end pe-4">
                                    <a href="track_complaint.php?id=8812" class="btn btn-dark btn-sm rounded-pill px-3">Track</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4 fw-bold text-primary">#CMS-8790</td>
                                <td>
                                    <div class="fw-bold">Water Supply Issue</div>
                                    <small class="text-muted">Normal Urgency</small>
                                </td>
                                <td><span class="badge bg-light text-dark border rounded-pill">Maintenance</span></td>
                                <td>Oct 05, 2023</td>
                                <td><span class="badge bg-success-subtle text-success px-3 rounded-pill">Resolved</span></td>
                                <td class="text-end pe-4">
                                    <a href="track_complaint.php?id=8790" class="btn btn-outline-dark btn-sm rounded-pill px-3">View Details</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>