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

            <div class="mb-5">
                <h1 class="fw-bold">My Profile</h1>
                <p class="text-muted">Manage your personal information and account settings.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 text-center">
                    <div class="bg-white p-5 rounded-5 shadow-sm">
                        <div class="position-relative d-inline-block mb-4">
                            <img src="https://ui-avatars.com/api/?name=Aryan+Mehta&size=150&background=0d6efd&color=fff"
                                class="rounded-circle border border-5 border-light shadow-sm" width="150">
                            <button class="btn btn-sm btn-primary rounded-circle position-absolute bottom-0 end-0 p-2 shadow">
                                <i class="bi bi-camera-fill"></i>
                            </button>
                        </div>
                        <h4 class="fw-bold mb-1">Aryan Mehta</h4>
                        <p class="text-muted small mb-4">ID: 2024-CMS-0045</p>

                        <hr class="my-4 opacity-25">

                        <div class="text-start mb-4">
                            <h6 class="fw-bold small text-uppercase text-primary mb-3">Account Status</h6>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="small text-muted">Enrollment:</span>
                                <span class="badge bg-success-glow text-success rounded-pill">Verified</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">Portal Access:</span>
                                <span class="badge bg-primary-glow text-primary rounded-pill">Active</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="bg-white p-5 rounded-5 shadow-sm mb-4">
                        <h5 class="fw-bold mb-4 border-bottom pb-3">Personal Details</h5>
                        <form action="update_profile.php" method="POST">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small">FULL NAME</label>
                                    <input type="text" class="form-control border-0 bg-light p-3 rounded-4" value="Aryan Mehta" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small">PHONE NUMBER</label>
                                    <input type="text" class="form-control border-0 bg-light p-3 rounded-4" value="+91 9876543210" name="phone">
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold small">EMAIL ADDRESS</label>
                                    <input type="email" class="form-control border-0 bg-light p-3 rounded-4 text-muted" value="aryan@campus.edu" readonly>
                                    <small class="text-muted mt-2 d-block px-1"><i class="bi bi-info-circle me-1"></i> Email cannot be changed by the student.</small>
                                </div>
                                <div class="col-12 text-end mt-4">
                                    <button type="submit" class="btn btn-warning fw-bold px-5 py-3 rounded-pill shadow-sm">
                                        Save Profile Changes <i class="bi bi-check-circle-fill ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="p-4 rounded-5 bg-dark text-white d-flex align-items-center justify-content-between shadow-lg">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-secondary rounded-circle p-3">
                                <i class="bi bi-shield-lock-fill fs-4"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">Security Settings</h6>
                                <p class="small mb-0 opacity-50">Last password change: 2 months ago</p>
                            </div>
                        </div>
                        <a href="change_password.php" class="btn btn-outline-light btn-sm rounded-pill px-4">Update Password</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>