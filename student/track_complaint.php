<?php
session_start();
include '../includes/header.php';
// Mock ID from URL: $ticket_id = $_GET['id'];
?>

<style>
    /* Tracking Timeline CSS */
    .track-line {
        height: 4px;
        background: #e2e8f0;
        position: absolute;
        top: 18px;
        left: 0;
        right: 0;
        z-index: 1;
    }

    .track-line-fill {
        height: 4px;
        background: #3b82f6;
        width: 66%;
        position: absolute;
        top: 18px;
        left: 0;
        z-index: 2;
    }

    .step-node {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: white;
        border: 4px solid #e2e8f0;
        position: relative;
        z-index: 3;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.3s;
    }

    .step-node.active {
        border-color: #3b82f6;
        background: #3b82f6;
        color: white;
        box-shadow: 0 0 15px rgba(59, 130, 246, 0.4);
    }

    .step-node.completed {
        border-color: #3b82f6;
        background: white;
        color: #3b82f6;
    }
</style>

<div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-md-2 bg-dark shadow-lg" style="min-height: 100vh;">
            <?php include '../includes/student_sidebar.php'; ?>
        </div>

        <div class="col-md-10" style="background-color: #f4f7fe; padding: 40px;">

            <a href="my_history.php" class="text-decoration-none text-muted small fw-bold mb-4 d-inline-block">
                <i class="bi bi-arrow-left me-1"></i> BACK TO HISTORY
            </a>

            <div class="row g-4">
                <div class="col-12">
                    <div class="bg-white p-5 rounded-5 shadow-sm border-0 mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                            <div>
                                <span class="badge bg-primary-subtle text-primary mb-2">Ticket #CMS-8812</span>
                                <h2 class="fw-bold">Broken AC in Lab 4</h2>
                            </div>
                            <div class="text-end">
                                <p class="mb-0 text-muted small fw-bold">CURRENT STATUS</p>
                                <h4 class="text-warning fw-bold">In Progress</h4>
                            </div>
                        </div>

                        <div class="position-relative mb-5 py-4">
                            <div class="track-line"></div>
                            <div class="track-line-fill"></div>
                            <div class="d-flex justify-content-between">
                                <div class="text-center">
                                    <div class="step-node completed"><i class="bi bi-check-lg"></i></div>
                                    <small class="fw-bold mt-2 d-block">Submitted</small>
                                    <small class="text-muted small">Oct 12</small>
                                </div>
                                <div class="text-center">
                                    <div class="step-node completed"><i class="bi bi-check-lg"></i></div>
                                    <small class="fw-bold mt-2 d-block">Assigned</small>
                                    <small class="text-muted small">Oct 13</small>
                                </div>
                                <div class="text-center">
                                    <div class="step-node active">3</div>
                                    <small class="fw-bold mt-2 d-block text-primary">Fixing</small>
                                    <small class="text-muted small">Oct 14</small>
                                </div>
                                <div class="text-center">
                                    <div class="step-node">4</div>
                                    <small class="fw-bold mt-2 d-block text-muted">Closed</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="bg-white p-4 rounded-5 shadow-sm h-100">
                        <h5 class="fw-bold mb-4 border-bottom pb-2">Complaint Log</h5>
                        <div class="mb-4">
                            <label class="small fw-bold text-muted text-uppercase">Student Description</label>
                            <p class="text-dark bg-light p-3 rounded-4 mt-2">The AC in the back corner of Lab 4 has been leaking water and making a loud rattling noise since morning. It's making the floor slippery.</p>
                        </div>
                        <div class="mb-4">
                            <label class="small fw-bold text-muted text-uppercase">HOD Remarks</label>
                            <p class="text-dark p-3 border-start border-4 border-primary bg-primary-subtle rounded-end-4 mt-2 italic">"Issue verified. Assigned to Maintenance Lead (Mr. Kumar) for gas refill and coil check."</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="bg-dark text-white p-4 rounded-5 shadow-sm">
                        <h5 class="fw-bold mb-4"><i class="bi bi-info-circle me-2 text-warning"></i> Case Info</h5>
                        <div class="mb-3 d-flex justify-content-between">
                            <span class="opacity-50 small">Department:</span>
                            <span class="small fw-bold">Maintenance & Infrastructure</span>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <span class="opacity-50 small">Priority:</span>
                            <span class="badge bg-danger">Urgent</span>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <span class="opacity-50 small">Assigned To:</span>
                            <span class="small fw-bold">Mr. Rajesh Kumar</span>
                        </div>
                        <hr class="opacity-10">
                        <button class="btn btn-outline-light w-100 rounded-pill py-2 mt-2" onclick="window.print()">
                            <i class="bi bi-printer me-2"></i> Download Receipt
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>