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
                            <img src="https://i.pravatar.cc/300?u=1" class="img-fluid" alt="Team">
                        </div>
                        <h5>Alex Johnson</h5>
                        <span>Full Stack Lead</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card-premium">
                        <div class="team-img-wrapper">
                            <img src="https://i.pravatar.cc/300?u=2" class="img-fluid" alt="Team">
                        </div>
                        <h5>Sarah Smith</h5>
                        <span>UI/UX Designer</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card-premium">
                        <div class="team-img-wrapper">
                            <img src="https://i.pravatar.cc/300?u=3" class="img-fluid" alt="Team">
                        </div>
                        <h5>Michael Vane</h5>
                        <span>System Architect</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>