<?php
$pageTitle = "System Entry Portal | CampusCMS";
include 'includes/header.php';
?>

<style>
    .gatekeeper-bg {
        background: radial-gradient(circle at top right, #1e293b, #0f172a);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .portal-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 30px;
        padding: 50px;
        width: 100%;
        max-width: 900px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
    }

    .role-box {
        background: white;
        border-radius: 20px;
        padding: 30px;
        text-align: center;
        text-decoration: none;
        color: #1e293b;
        transition: all 0.3s ease;
        display: block;
        border: 4px solid transparent;
    }

    .role-box:hover {
        transform: translateY(-10px);
        border-color: #3b82f6;
        box-shadow: 0 10px 20px rgba(59, 130, 246, 0.2);
        color: #3b82f6;
    }

    .role-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
        display: block;
    }
</style>

<div class="gatekeeper-bg">
    <div class="portal-card">
        <div class="text-center mb-5">
            <h1 class="text-white fw-black mb-2">Campus<span class="text-primary">CMS</span></h1>
            <p class="text-light opacity-50">Project Presentation Mode: Select a Dashboard to Enter</p>
        </div>

        <div class="row g-4">
            <div class="col-md-3">
                <a href="student/dashboard.php" class="role-box">
                    <i class="bi bi-mortarboard role-icon"></i>
                    <span class="fw-bold">Student</span>
                </a>
            </div>

            <div class="col-md-3">
                <a href="hod/dashboard.php" class="role-box">
                    <i class="bi bi-person-badge role-icon"></i>
                    <span class="fw-bold">HOD</span>
                </a>
            </div>

            <div class="col-md-3">
                <a href="director/dashboard.php" class="role-box">
                    <i class="bi bi-building role-icon"></i>
                    <span class="fw-bold">Director</span>
                </a>
            </div>

            <div class="col-md-3">
                <a href="admin/dashboard.php" class="role-box text-danger">
                    <i class="bi bi-shield-lock role-icon"></i>
                    <span class="fw-bold">Admin</span>
                </a>
            </div>
        </div>

        <div class="mt-5 text-center">
            <span class="badge rounded-pill bg-primary px-4 py-2 opacity-75">
                <i class="bi bi-cpu me-2"></i> Development Build v1.0
            </span>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>