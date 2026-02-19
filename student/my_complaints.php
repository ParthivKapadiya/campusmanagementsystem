<?php
session_start();
include '../includes/header.php';
?>

<div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-md-2 bg-dark shadow-lg" style="min-height: 100vh;">
            <?php include '../includes/student_sidebar.php'; ?>
        </div>

        <div class="col-md-10" style="background-color: #f4f7fe; padding: 40px;">

            <div class="d-flex justify-content-between align-items-end mb-4">
                <div>
                    <h1 class="fw-bold text-dark m-0">Tracking History</h1>
                    <p class="text-muted">Review and track the status of all your submitted requests.</p>
                </div>
                <div class="text-end">
                    <span class="badge bg-white text-primary shadow-sm px-3 py-2 rounded-pill fw-bold">
                        <i class="bi bi-ticket-perforated me-2"></i>Total Tickets: 12
                    </span>
                </div>
            </div>

            <div class="bg-white p-3 rounded-4 shadow-sm mb-4 d-flex gap-3 align-items-center">
                <span class="small fw-bold text-muted ps-2">FILTER BY:</span>
                <select class="form-select border-0 bg-light rounded-pill px-3" style="width: 200px;">
                    <option>All Statuses</option>
                    <option>Pending</option>
                    <option>In-Progress</option>
                    <option>Resolved</option>
                </select>
                <select class="form-select border-0 bg-light rounded-pill px-3" style="width: 200px;">
                    <option>All Categories</option>
                    <option>IT Support</option>
                    <option>Maintenance</option>
                    <option>Hostel</option>
                </select>
                <button class="btn btn-primary rounded-pill px-4 ms-auto">Search <i class="bi bi-search ms-2"></i></button>
            </div>

            <div class="bg-white rounded-5 shadow-sm overflow-hidden border-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr class="text-muted small">
                                <th class="ps-4 py-3">TICKET ID</th>
                                <th class="py-3">SUBJECT & DEPARTMENT</th>
                                <th class="py-3 text-center">STATUS</th>
                                <th class="py-3">LAST UPDATE</th>
                                <th class="pe-4 py-3 text-end">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 fw-bold text-primary">#CMS-8812</td>
                                <td>
                                    <div class="fw-bold">Broken AC in Block B</div>
                                    <small class="text-muted">Hostel Maintenance Dept.</small>
                                </td>
                                <td class="text-center">
                                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill" style="font-size: 0.75rem;">
                                        <i class="bi bi-hourglass-split me-1"></i> Pending
                                    </span>
                                </td>
                                <td class="text-muted small">Feb 16, 2026</td>
                                <td class="pe-4 text-end">
                                    <a href="complaint_details.php?id=8812" class="btn btn-dark btn-sm rounded-pill px-3 fw-bold">Track <i class="bi bi-geo-alt ms-1"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td class="ps-4 fw-bold text-primary">#CMS-8705</td>
                                <td>
                                    <div class="fw-bold">WiFi Connectivity Issues</div>
                                    <small class="text-muted">IT Infrastructure</small>
                                </td>
                                <td class="text-center">
                                    <span class="badge bg-success px-3 py-2 rounded-pill" style="font-size: 0.75rem;">
                                        <i class="bi bi-check-circle me-1"></i> Resolved
                                    </span>
                                </td>
                                <td class="text-muted small">Feb 12, 2026</td>
                                <td class="pe-4 text-end">
                                    <a href="complaint_details.php?id=8705" class="btn btn-outline-dark btn-sm rounded-pill px-3 fw-bold">View History</a>
                                </td>
                            </tr>

                            <tr>
                                <td class="ps-4 fw-bold text-primary">#CMS-8644</td>
                                <td>
                                    <div class="fw-bold">Library Light Replacement</div>
                                    <small class="text-muted">General Facility</small>
                                </td>
                                <td class="text-center">
                                    <span class="badge bg-info text-white px-3 py-2 rounded-pill" style="font-size: 0.75rem;">
                                        <i class="bi bi-tools me-1"></i> In-Progress
                                    </span>
                                </td>
                                <td class="text-muted small">Feb 08, 2026</td>
                                <td class="pe-4 text-end">
                                    <a href="complaint_details.php?id=8644" class="btn btn-dark btn-sm rounded-pill px-3 fw-bold">Track <i class="bi bi-geo-alt ms-1"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="bg-light p-3 d-flex justify-content-between align-items-center">
                    <small class="text-muted">Showing 3 of 12 tickets</small>
                    <nav>
                        <ul class="pagination pagination-sm m-0">
                            <li class="page-item disabled"><a class="page-link rounded-circle me-2" href="#">Prev</a></li>
                            <li class="page-item active"><a class="page-link rounded-circle me-2" href="#">1</a></li>
                            <li class="page-item"><a class="page-link rounded-circle me-2" href="#">2</a></li>
                            <li class="page-item"><a class="page-link rounded-circle" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="mt-5 p-4 rounded-5 bg-white shadow-sm border-start border-primary border-5">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-primary-glow p-3 rounded-circle text-primary">
                        <i class="bi bi-lightbulb fs-4"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Status Meanings</h6>
                        <p class="small text-muted mb-0"><strong>Pending:</strong> Waiting for HOD. <strong>In-Progress:</strong> Staff is working. <strong>Resolved:</strong> Issue is fixed!</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>