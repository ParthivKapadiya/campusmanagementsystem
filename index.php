<?php
$pageTitle = "Campus Resource & Complaint Management System";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- HERO -->
    <section class="hero-section d-flex align-items-center">
        <div class="hero-overlay"></div>
        <div class="container hero-content text-white">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="hero-badge">Smart Campus Platform</span>
                    <h1 class="hero-title">Modern Complaint & <span>Resource Management System</span></h1>
                    <p class="hero-desc">Centralized digital system for students and departments to manage, track, and resolve campus issues with transparency and speed.</p>
                    <div class="hero-buttons mt-4">
                        <a href="auth/register.php" class="btn btn-main">Get Started</a>
                        <a href="auth/login.php" class="btn btn-outline-light">Login</a>
                    </div>
                    <div class="hero-stats mt-5 d-flex flex-wrap gap-4">
                        <div class="stat-card">
                            <h4>1200+</h4>
                            <p>Resolved Tickets</p>
                        </div>
                        <div class="stat-card">
                            <h4>30+</h4>
                            <p>Departments</p>
                        </div>
                        <div class="stat-card">
                            <h4>2500+</h4>
                            <p>Active Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="assets/images/hero.jpeg" alt="Hero Image" class="img-fluid hero-img shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="features-section py-5">
        <div class="container">
            <h2 class="section-heading text-center">Core Platform Features</h2>
            <div class="row mt-5 justify-content-center">
                <div class="col-md-4">
                    <div class="feature-card-2">
                        <div class="feature-icon"><i class="bi bi-ticket-perforated"></i></div>
                        <h5>Smart Ticketing</h5>
                        <p>Tickets are auto-assigned and prioritized for faster resolution.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card-2">
                        <div class="feature-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5>Automated Workflow</h5>
                        <p>Track the entire process: Submitted → Assigned → In Progress → Resolved.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card-2">
                        <div class="feature-icon"><i class="bi bi-bar-chart-line"></i></div>
                        <h5>Analytics & Reports</h5>
                        <p>Insights on departmental performance, ticket trends, and user stats.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WORKFLOW -->
    <section class="workflow-section py-5">
        <div class="container text-center">
            <div class="badge-glow mb-3">System Logic</div>
            <h2 class="section-heading">How It Works</h2>
            <div class="row g-4 workflow-container mt-5">
                <?php
                $steps = [
                    ['bi-lightning-charge', 'Submit Ticket', 'Instant submission with priority tagging.'],
                    ['bi-diagram-3', 'Auto-Routing', 'Smart assignment to the relevant department.'],
                    ['bi-clock-history', 'Live Tracking', 'Real-time status updates via your dashboard.'],
                    ['bi-shield-check', 'Resolution', 'Verified closing with feedback loop.']
                ];
                $count = 1;
                foreach ($steps as $step) {
                    echo '
                <div class="col-lg-3 col-md-6">
                    <div class="workflow-card-premium">
                        <div class="step-indicator">0' . $count++ . '</div>
                        <div class="workflow-icon-wrapper">
                            <i class="bi ' . $step[0] . '"></i>
                        </div>
                        <h5>' . $step[1] . '</h5>
                        <p>' . $step[2] . '</p>
                    </div>
                </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- ROLES -->
    <section class="roles-section py-5">
        <div class="container text-center">
            <div class="badge-glow mb-3">Permissions</div>
            <h2 class="section-heading">Role-Based Access</h2>
            <p class="mb-5 text-muted">Tailored dashboards for every campus stakeholder.</p>

            <div class="row mt-5 justify-content-center g-4">
                <div class="col-md-4">
                    <div class="role-card-premium">
                        <div class="role-icon-bg">
                            <i class="bi bi-mortarboard-fill"></i>
                        </div>
                        <h5>Student</h5>
                        <div class="role-divider"></div>
                        <p>Submit complaints, request resources, and track ticket status in real-time with instant notifications.</p>
                        <ul class="role-features">
                            <li><i class="bi bi-check2-circle"></i> Submit Tickets</li>
                            <li><i class="bi bi-check2-circle"></i> Live Tracking</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="role-card-premium active-role">
                        <div class="role-icon-bg">
                            <i class="bi bi-person-workspace"></i>
                        </div>
                        <h5>HOD</h5>
                        <div class="role-divider"></div>
                        <p>Manage department-specific tickets, assign tasks to staff, and monitor resolution timelines.</p>
                        <ul class="role-features">
                            <li><i class="bi bi-check2-circle"></i> Ticket Assignment</li>
                            <li><i class="bi bi-check2-circle"></i> Staff Management</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="role-card-premium">
                        <div class="role-icon-bg">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h5>Director</h5>
                        <div class="role-divider"></div>
                        <p>Access high-level analytics, performance metrics, and oversee the entire campus management ecosystem.</p>
                        <ul class="role-features">
                            <li><i class="bi bi-check2-circle"></i> Data Analytics</li>
                            <li><i class="bi bi-check2-circle"></i> Performance Reports</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DEPARTMENTS -->
    <section class="departments-section py-5">
        <div class="container text-center">
            <div class="badge-glow mb-3">Academic Units</div>
            <h2 class="section-heading">Departments Overview</h2>
            <p class="mb-5 text-muted">Specialized management for every campus division.</p>

            <div class="row g-4 mt-2 justify-content-center">
                <?php
                $depts = [
                    ['Computer Science', 'assets/images/cs.jpeg', 'Tech & Innovation'],
                    ['Electrical', 'assets/images/electrical.jpeg', 'Power & Circuits'],
                    ['Mechanical', 'assets/images/mechanical.jpeg', 'Design & Dynamics'],
                    ['Administration', 'assets/images/administration.jpeg', 'Operations & Support']
                ];
                foreach ($depts as $dept) {
                    echo '
                <div class="col-lg-3 col-md-6">
                    <div class="dept-card-premium">
                        <img src="' . $dept[1] . '" alt="' . $dept[0] . '" class="dept-img">
                        <div class="dept-overlay">
                            <div class="dept-info">
                                <h6>' . $dept[2] . '</h6>
                                <h4>' . $dept[0] . '</h4>
                                <a href="#" class="dept-link">View Details <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="testimonials-section py-5">
        <div class="container text-center">
            <div class="badge-glow mb-3">Feedback</div>
            <h2 class="section-heading">What Users Say</h2>
            <p class="mb-5 text-muted">Join thousands of students and faculty members using our platform.</p>

            <div class="row mt-5 justify-content-center g-4">
                <div class="col-md-4">
                    <div class="testimonial-card-premium">
                        <div class="quote-icon"><i class="bi bi-quote"></i></div>
                        <div class="stars mb-3">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>"The system is incredibly intuitive. I submitted a plumbing issue in my hostel and it was resolved within 4 hours!"</p>
                        <div class="user-meta mt-4">
                            <img src="https://i.pravatar.cc/150?u=a042581f4e29026704d" alt="Student" class="user-avatar">
                            <div class="user-info">
                                <h6>Student A.</h6>
                                <span>B.Tech CSE</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="testimonial-card-premium">
                        <div class="quote-icon"><i class="bi bi-quote"></i></div>
                        <div class="stars mb-3">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>"Managing department resources has never been this organized. The analytics help us stay ahead of recurring issues."</p>
                        <div class="user-meta mt-4">
                            <img src="https://i.pravatar.cc/150?u=a042581f4e29026704e" alt="HOD" class="user-avatar">
                            <div class="user-info">
                                <h6>HOD B.</h6>
                                <span>Electrical Dept.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section py-5">
        <div class="container">
            <div class="cta-glass-wrapper text-center">
                <div class="cta-content">
                    <span class="cta-badge">Join the Future</span>
                    <h2>Ready to Digitize Your Campus?</h2>
                    <p>Streamline complaints, manage resources, and improve student satisfaction with our centralized platform.</p>
                    <div class="cta-buttons mt-4">
                        <a href="auth/register.php" class="btn btn-light-premium">Create Account Now <i class="bi bi-arrow-right-short"></i></a>
                        <div class="mt-3">
                            <small class="text-white-50">Have questions? <a href="contact.php" class="text-white text-decoration-underline">Contact Support</a></small>
                        </div>
                    </div>
                </div>
                <div class="cta-circle circle-1"></div>
                <div class="cta-circle circle-2"></div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>

</html>