<?php
$pageTitle = "Our Story | Campus Management System";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<style>
    /* -------------------- ABOUT PAGE PREMIUM CSS -------------------- */

    /* 1. Hero with Brand Gradient */
    .about-hero-premium {
        height: 60vh;
        background: linear-gradient(135deg, rgba(15, 23, 42, 0.9), rgba(13, 110, 253, 0.8)),
            url('https://images.unsplash.com/photo-1541339907198-e08756ebafe1?auto=format&fit=crop&q=80') center/cover fixed;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        margin-top: -80px;
        /* Offset for transparent navbar */
    }

    .about-hero-premium h1 {
        font-size: 4rem;
        font-weight: 800;
    }

    .about-hero-premium h1 span {
        color: var(--accent);
    }

    /* 2. Philosophy Section */
    .philosophy-section {
        padding: 100px 0;
        background: #ffffff;
    }

    .phil-main-img {
        border-radius: 40px;
        width: 100%;
        border: 10px solid var(--primary-glow);
    }

    .phil-floating-card {
        position: absolute;
        bottom: -30px;
        right: -10px;
        background: var(--dark);
        color: white;
        padding: 30px;
        border-radius: 25px;
        border-bottom: 5px solid var(--accent);
        width: 220px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .phil-floating-card h3 {
        color: var(--accent);
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 5px;
    }

    /* 3. Problem/Solution Section (Brand Blue) */
    .problem-section {
        background: var(--primary);
        color: white;
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    /* Decorative Circles to match Index CTA */
    .problem-section::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        top: -100px;
        left: -100px;
    }

    .icon-box-premium {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 40px;
        border-radius: 30px;
        transition: 0.4s;
        height: 100%;
    }

    .icon-box-premium:hover {
        background: var(--white);
        transform: translateY(-10px);
    }

    .icon-box-premium:hover h4,
    .icon-box-premium:hover p {
        color: var(--dark);
    }

    .icon-box-premium i {
        font-size: 3rem;
        color: var(--accent);
        margin-bottom: 20px;
        display: block;
    }

    /* 4. Timeline Journey */
    .journey-section {
        padding: 100px 0;
        background: #f8fafc;
    }

    .timeline-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .timeline-item {
        border-left: 3px solid var(--primary);
        padding-left: 40px;
        padding-bottom: 40px;
        position: relative;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: -11px;
        top: 0;
        width: 20px;
        height: 20px;
        background: var(--accent);
        border: 4px solid white;
        border-radius: 50%;
    }

    /* 5. Team Section */
    .team-card-premium {
        background: white;
        border-radius: 30px;
        padding: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
        text-align: center;
    }

    .team-card-premium:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px var(--primary-glow);
    }

    .team-img-wrapper {
        border-radius: 20px;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .team-card-premium h5 {
        font-weight: 800;
        color: var(--dark);
    }

    .team-card-premium span {
        color: var(--primary);
        font-weight: 600;
        font-size: 0.85rem;
        text-transform: uppercase;
    }

    @media (max-width: 768px) {
        .about-hero-premium h1 {
            font-size: 2.5rem;
        }

        .phil-floating-card {
            position: static;
            width: 100%;
            margin-top: 20px;
        }
    }
</style>

<body>

    <section class="about-hero-premium">
        <div class="container">
            <span class="hero-badge">Our Legacy</span>
            <h1 class="text-white">The Vision Behind <br><span>Campus Management</span></h1>
        </div>
    </section>

    <section class="philosophy-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 position-relative">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655" alt="Vision" class="phil-main-img">
                    <div class="phil-floating-card">
                        <h3>99.9%</h3>
                        <p class="m-0">Efficiency Rate in Resolve Times.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="badge-glow mb-3">Our Mission</div>
                    <h2 class="section-heading text-start">Digital First. <br>Students Always.</h2>
                    <p class="lead">We didn't just build a portal; we built a bridge between students and campus infrastructure.</p>
                    <p>CampusCMS was engineered to solve the most common frustrations in university life. By combining modern tech stacks with intuitive design, we ensure that every student voice is heard and every campus resource is optimized.</p>
                    <div class="row g-3 mt-4">
                        <div class="col-6">
                            <div class="p-3 border-start border-4 border-warning bg-light">
                                <h6 class="fw-bold mb-1">Secure</h6>
                                <p class="small text-muted mb-0">Role-based data safety</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border-start border-4 border-primary bg-light">
                                <h6 class="fw-bold mb-1">Fast</h6>
                                <p class="small text-muted mb-0">Instant ticket routing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="problem-section">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="icon-box-premium">
                        <i class="bi bi-cpu-fill"></i>
                        <h4>The Technology</h4>
                        <p>Automated algorithms that prioritize complaints based on urgency and department capacity.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box-premium">
                        <i class="bi bi-people-fill"></i>
                        <h4>The Community</h4>
                        <p>Built by developers who understand the campus ecosystem from the inside out.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box-premium">
                        <i class="bi bi-shield-lock-fill"></i>
                        <h4>The Integrity</h4>
                        <p>A transparent logging system where no ticket can be closed without verified resolution.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="journey-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading">Our Roadmap</h2>
            </div>
            <div class="timeline-container">
                <div class="timeline-item">
                    <h5 class="fw-bold text-primary">Concept Phase</h5>
                    <p>Identifying the communication gaps in resource allocation across campus departments.</p>
                </div>
                <div class="timeline-item">
                    <h5 class="fw-bold text-primary">Alpha Testing</h5>
                    <p>Launching the first module for the Computer Science department to track lab issues.</p>
                </div>
                <div class="timeline-item" style="border-color: transparent;">
                    <h5 class="fw-bold text-primary">Global Deployment</h5>
                    <p>Scaling to the entire campus ecosystem with support for HOD and Director roles.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <div class="badge-glow mb-3">Architects</div>
                <h2 class="section-heading">Meet The Team</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="team-card-premium">
                        <div class="team-img-wrapper">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrH3yPCQeXe2NWXJtnQF2srR3wDwngP6HtPQ&s" class="img-fluid" alt="Team">
                        </div>
                        <h5>Mitchell Starc</h5>
                        <span>Full Stack Lead</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card-premium">
                        <div class="team-img-wrapper">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTW6iq8xFcmdjswKRnrJBO05ZS-RZl92oXRrA&s" class="img-fluid" alt="Team">
                        </div>
                        <h5>Patrick James Cummins</h5>
                        <span>UI/UX Designer</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card-premium">
                        <div class="team-img-wrapper">
                            <img src="data:image/jpeg;base64,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" class="img-fluid" alt="Team">
                        </div>
                        <h5>Josh Hazlewood</h5>
                        <span>System Architect</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>