<?php
$pageTitle = "Get in Touch | CampusCMS";

// Robust Path Logic for MAMP
$root = $_SERVER['DOCUMENT_ROOT'] . '/campusmanagementsystem/';
if (file_exists($root . 'includes/db_connect.php')) {
    include_once $root . 'includes/db_connect.php';
    include_once $root . 'includes/header.php';
    include_once $root . 'includes/navbar.php';
} else {
    // Fallback for different local setups
    // include_once 'includes/db_connect.php';
    include_once 'includes/header.php';
    include_once 'includes/navbar.php';
}
?>

<style>
    /* -------------------- CONTACT PAGE WORLD-CLASS CSS -------------------- */
    :root {
        --glass-white: rgba(255, 255, 255, 0.85);
        --primary-glow: rgba(13, 110, 253, 0.15);
    }

    .contact-master-section {
        padding: 120px 0 80px 0;
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        min-height: 100vh;
    }

    /* 1. Cinematic Header */
    .contact-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .contact-header h1 {
        font-size: 3.5rem;
        font-weight: 900;
        color: var(--dark);
    }

    .contact-header h1 span {
        color: var(--primary);
        position: relative;
    }

    .contact-header h1 span::after {
        content: '';
        position: absolute;
        bottom: 8px;
        left: 0;
        width: 100%;
        height: 12px;
        background: var(--accent);
        z-index: -1;
        opacity: 0.6;
    }

    /* 2. Glassmorphic Contact Card */
    .contact-glass-card {
        background: var(--glass-white);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.5);
        border-radius: 40px;
        padding: 50px;
        box-shadow: 0 30px 80px rgba(15, 23, 42, 0.08);
    }

    .form-label {
        font-weight: 700;
        color: var(--dark);
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .contact-glass-card .form-control,
    .contact-glass-card .form-select {
        border: 2px solid #edf2f7;
        background: #fdfdfd;
        padding: 15px 20px;
        border-radius: 18px;
        transition: all 0.3s ease;
    }

    .contact-glass-card .form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 5px var(--primary-glow);
        background: white;
    }

    /* 3. Info Hub Styling */
    .hub-tile {
        background: white;
        padding: 25px;
        border-radius: 30px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 20px;
        transition: 0.4s;
        border: 1px solid transparent;
    }

    .hub-tile:hover {
        transform: translateY(-5px);
        border-color: var(--accent);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
    }

    .hub-icon {
        width: 65px;
        height: 65px;
        background: var(--dark);
        color: var(--accent);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        flex-shrink: 0;
    }

    .hub-text h6 {
        font-weight: 800;
        margin-bottom: 3px;
        color: var(--dark);
    }

    /* 4. Support Hours Badge */
    .hours-box {
        background: var(--primary);
        color: white;
        padding: 30px;
        border-radius: 30px;
        margin-top: 30px;
        position: relative;
        overflow: hidden;
    }

    .hours-box::after {
        content: '\F2DA';
        /* Bootstrap Clock Icon */
        font-family: bootstrap-icons;
        position: absolute;
        right: -20px;
        bottom: -20px;
        font-size: 8rem;
        opacity: 0.1;
    }

    @media (max-width: 991px) {
        .contact-glass-card {
            padding: 30px;
        }

        .contact-header h1 {
            font-size: 2.5rem;
        }
    }
</style>

<div class="contact-master-section">
    <div class="container">

        <div class="contact-header">
            <span class="badge-glow mb-3">24/7 Digital Support</span>
            <h1>Have a Question? <span>Let's Talk.</span></h1>
            <p class="lead text-muted">We typically respond to student and faculty inquiries within 2 hours.</p>
        </div>

        <div class="row g-5">
            <div class="col-lg-7">
                <div class="contact-glass-card">
                    <h3 class="fw-bold mb-4" style="color: var(--dark);">Direct Messaging</h3>
                    <form action="process_contact.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control shadow-none" placeholder="e.g. John" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control shadow-none" placeholder="name@university.edu" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Inquiry Department</label>
                            <select class="form-select shadow-none">
                                <option selected disabled>Choose Department...</option>
                                <option>General Administration</option>
                                <option>Technical Support / IT</option>
                                <option>Facility Management</option>
                                <option>Security & Safety</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Your Message</label>
                            <textarea class="form-control shadow-none" rows="5" placeholder="Describe your issue or query in detail..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-main w-100 py-3 shadow-lg fs-5">
                            Send Message <i class="bi bi-send-check-fill ms-2 text-warning"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="info-sidebar">
                    <div class="hub-tile">
                        <div class="hub-icon"><i class="bi bi-building"></i></div>
                        <div class="hub-text">
                            <h6>Campus Office</h6>
                            <p class="mb-0 text-muted small">Admin Block C, 4th Floor, Room 402</p>
                        </div>
                    </div>

                    <div class="hub-tile">
                        <div class="hub-icon"><i class="bi bi-headset"></i></div>
                        <div class="hub-text">
                            <h6>Support Hotline</h6>
                            <p class="mb-0 text-muted small">+1 (800) CAMPUS-CMS</p>
                        </div>
                    </div>

                    <div class="hub-tile">
                        <div class="hub-icon"><i class="bi bi-chat-heart"></i></div>
                        <div class="hub-text">
                            <h6>Direct Email</h6>
                            <p class="mb-0 text-muted small">helpdesk@campuscms.edu</p>
                        </div>
                    </div>

                    <div class="hours-box shadow-lg">
                        <h5 class="fw-bold mb-3"><i class="bi bi-lightning-charge-fill text-warning"></i> Support Hours</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Monday - Friday:</span>
                            <span class="fw-bold">08:00 - 20:00</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Saturday:</span>
                            <span class="fw-bold">10:00 - 16:00</span>
                        </div>
                        <hr class="opacity-25">
                        <p class="small mb-0 opacity-75">Emergency technical issues are monitored 24/7 by our on-call team.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include_once $root . 'includes/footer.php'; ?>