<?php
$pageTitle = "Department Analytics & Control | CampusCMS";
$root = $_SERVER['DOCUMENT_ROOT'] . '/campusmanagementsystem/';
// include_once $root . 'includes/header.php'; // Uncomment this in your local environment
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title><?php echo $pageTitle; ?></title>
</head>

<style>
    /* -------------------- THE WORLD-CLASS HOD UI -------------------- */
    :root {
        --side-nav-width: 280px;
        --glass-bg: rgba(255, 255, 255, 0.9);
        --primary-blue: #0d6efd;
        --dark-navy: #0f172a;
        --accent-gold: #ffc107;
        --success-emerald: #10b981;
    }

    body {
        background: #f8fafc;
        font-family: 'Inter', sans-serif;
        overflow-x: hidden;
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
        box-shadow: 10px 0 30px rgba(0, 0, 0, 0.05);
    }

    .sidebar-glass .logo-text {
        font-size: 1.4rem;
        font-weight: 800;
        color: white;
        letter-spacing: -1px;
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
        transition: 0.3s;
        margin-bottom: 8px;
    }

    .nav-link-custom:hover,
    .nav-link-custom.active {
        background: var(--primary-blue);
        color: white;
        box-shadow: 0 10px 20px rgba(13, 110, 253, 0.2);
    }

    /* Main Content Area */
    .main-viewport {
        margin-left: var(--side-nav-width);
        padding: 40px;
    }

    /* Premium Stat Cards */
    .super-card {
        background: white;
        border: none;
        border-radius: 28px;
        padding: 30px;
        transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.02);
        position: relative;
        overflow: hidden;
    }

    .super-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
    }

    .card-icon-blob {
        width: 60px;
        height: 60px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin-bottom: 20px;
    }

    /* Table Container */
    .glass-table-container {
        background: white;
        border-radius: 32px;
        padding: 35px;
        box-shadow: 0 20px 60px rgba(15, 23, 42, 0.04);
        margin-top: 40px;
    }

    .table-premium thead th {
        background: #f1f5f9;
        padding: 20px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 1px;
        border: none;
        color: #64748b;
    }

    .table-premium tbody td {
        padding: 22px 20px;
        vertical-align: middle;
        border-bottom: 1px solid #f1f5f9;
    }

    .user-avatar-stack {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        object-fit: cover;
        background: #e2e8f0;
    }

    .priority-chip {
        padding: 6px 14px;
        border-radius: 10px;
        font-size: 0.7rem;
        font-weight: 800;
    }

    .urgent {
        background: #fee2e2;
        color: #dc2626;
    }

    .normal {
        background: #f0f9ff;
        color: #0284c7;
    }

    .staff-selector {
        background: #f8fafc;
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        font-size: 0.85rem;
        padding: 8px 12px;
        font-weight: 600;
        cursor: pointer;
    }

    /* Modal Styling */
    .modal-content {
        border-radius: 30px;
        border: none;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    .btn-review {
        background: var(--success-emerald);
        color: white;
        border: none;
    }

    .btn-review:hover {
        background: #059669;
        color: white;
    }
</style>

<div class="dashboard-wrapper">
    <aside class="sidebar-glass">
        <div class="logo-text">Campus<span>CMS</span></div>
        <div class="nav-group mb-5">
            <small class="text-uppercase text-muted fw-bold mb-3 d-block ps-3" style="font-size: 0.65rem;">Main Menu</small>
            <a href="#" class="nav-link-custom active"><i class="bi bi-speedometer2"></i> Dashboard</a>
            <a href="complaint_inbox.php" class="nav-link-custom"><i class="bi bi-inboxes-fill"></i> Complaint Inbox</a>
            <a href="staff_directory.php" class="nav-link-custom"><i class="bi bi-person-gear"></i> Staff Directory</a>
        </div>
        <div class="nav-group">
            <small class="text-uppercase text-muted fw-bold mb-3 d-block ps-3" style="font-size: 0.65rem;">Reports & Analytics</small>
            <a href="performance.php" class="nav-link-custom"><i class="bi bi-graph-up-arrow"></i> Performance</a>
            <a href="export_data.php" class="nav-link-custom"><i class="bi bi-file-earmark-pdf"></i> Export Data</a>
        </div>
        <div style="margin-top: 100px;">
            <a href="../auth/logout.php" class="nav-link-custom text-danger"><i class="bi bi-box-arrow-left"></i> Logout System</a>
        </div>
    </aside>

    <main class="main-viewport">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h1 class="fw-black text-dark mb-1">Department Console</h1>
                <p class="text-muted fw-medium">Monitoring <span class="text-primary fw-bold">Information Technology</span> Resources</p>
            </div>
            <div class="profile-pill bg-white p-2 rounded-pill shadow-sm d-flex align-items-center gap-3 pe-4">
                <img src="https://ui-avatars.com/api/?name=HOD+Admin&background=0d6efd&color=fff" class="rounded-circle" width="40" height="40">
                <div>
                    <p class="mb-0 fw-bold small">Dr. Robert Fox</p>
                    <small class="text-primary fw-bold" style="font-size: 0.7rem;">DEPT HEAD</small>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-xl-3 col-md-6">
                <div class="super-card">
                    <div class="card-icon-blob" style="background: #eef2ff; color: #4f46e5;"><i class="bi bi-envelope-exclamation"></i></div>
                    <h2 class="fw-black mb-1">56</h2>
                    <p class="text-muted fw-bold small mb-0">Unassigned Tickets</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="super-card">
                    <div class="card-icon-blob" style="background: #fffbeb; color: #d97706;"><i class="bi bi-arrow-repeat"></i></div>
                    <h2 class="fw-black mb-1">24</h2>
                    <p class="text-muted fw-bold small mb-0">Active Resolution</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="super-card">
                    <div class="card-icon-blob" style="background: #ecfdf5; color: #059669;"><i class="bi bi-patch-check"></i></div>
                    <h2 class="fw-black mb-1">182</h2>
                    <p class="text-muted fw-bold small mb-0">Resolved Monthly</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="super-card">
                    <div class="card-icon-blob" style="background: #fef2f2; color: #dc2626;"><i class="bi bi-lightning-charge"></i></div>
                    <h2 class="fw-black mb-1">08</h2>
                    <p class="text-muted fw-bold small mb-0">Critical Overdue</p>
                </div>
            </div>
        </div>

        <div class="glass-table-container">
            <h4 class="fw-bold mb-5"><i class="bi bi-list-stars text-primary me-2"></i> Department Resolution Queue</h4>
            <div class="table-responsive">
                <table class="table table-premium">
                    <thead>
                        <tr>
                            <th>Student Detail</th>
                            <th>Inquiry Type</th>
                            <th>Priority</th>
                            <th>Staff Assignment</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <img src="https://i.pravatar.cc/150?u=1" class="user-avatar-stack">
                                    <div>
                                        <p class="mb-0 fw-bold small">Michael Scott</p><small class="text-muted">ID: #CS-001</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="fw-bold small">Network Outage</span><br><small class="text-muted">Lab 4</small></td>
                            <td><span class="priority-chip urgent">CRITICAL</span></td>
                            <td>
                                <select class="staff-selector shadow-none">
                                    <option selected>Prof. Dwight Shrute</option>
                                    <option>Prof. Jim Halpert</option>
                                </select>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="spinner-grow spinner-grow-sm text-warning"></div><span class="small fw-bold">In-Progress</span>
                                </div>
                            </td>
                            <td><button class="btn btn-review btn-sm rounded-pill px-3 fw-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#actionModal">Review & Act</button></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <img src="https://i.pravatar.cc/150?u=5" class="user-avatar-stack">
                                    <div>
                                        <p class="mb-0 fw-bold small">Pam Beesly</p><small class="text-muted">ID: #CS-042</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="fw-bold small">Broken Chair</span><br><small class="text-muted">Room 202</small></td>
                            <td><span class="priority-chip normal">NORMAL</span></td>
                            <td>
                                <select class="staff-selector shadow-none">
                                    <option>Select Staff Member</option>
                                    <option>Prof. Stanley</option>
                                </select>
                            </td>
                            <td><span class="badge bg-light text-muted rounded-pill px-3">Pending</span></td>
                            <td><button class="btn btn-review btn-sm rounded-pill px-3 fw-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#actionModal">Review & Act</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

<div class="modal fade" id="actionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 p-4 pb-0">
                <h5 class="fw-bold"><i class="bi bi-shield-check text-success me-2"></i> HOD Decision Center</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <form>
                    <div class="mb-4">
                        <label class="form-label fw-bold small">UPDATE COMPLAINT STATUS (SRS 4.3)</label>
                        <select class="form-select border-0 bg-light p-3 rounded-4 fw-bold">
                            <option value="review">Mark as Under Review</option>
                            <option value="resolved">Mark as Resolved</option>
                            <option value="director">Forward to Director</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-bold small">ADD REMARKS / COMMENTS (SRS 4.4)</label>
                        <textarea class="form-control border-0 bg-light p-3 rounded-4" rows="4" placeholder="Enter instructions for staff or notes for the Director..."></textarea>
                    </div>
                    <button type="button" class="btn btn-primary w-100 p-3 rounded-4 fw-bold shadow-sm" data-bs-dismiss="modal">Save Decision & Notify</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php // include_once $root . 'includes/footer.php'; 
?>
</body>

</html>