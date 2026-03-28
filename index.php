<?php
$pageTitle = "Campus Resource & Complaint Management System";
include 'includes/header.php';
include 'includes/navbar.php';
require_once 'includes/db.php';

// FETCH ALL DATA
$hero = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM site_content WHERE page_name='index' AND section_name='hero'"));

$features = mysqli_query($conn, "SELECT * FROM site_content 
WHERE page_name='index' AND section_name='feature' 
ORDER BY order_no ASC");

$workflow = mysqli_query($conn, "SELECT * FROM site_content WHERE section_name='workflow'");

$roles = mysqli_query($conn, "SELECT * FROM site_content WHERE section_name='role'");

$departments = mysqli_query($conn, "SELECT * FROM site_content WHERE section_name='department'");

$testimonials = mysqli_query($conn, "SELECT * FROM site_content WHERE section_name='testimonial'");

$cta = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM site_content WHERE section_name='cta'"));
?>

<!-- HERO -->
<section class="hero-section d-flex align-items-center">
    <div class="hero-overlay"></div>
    <div class="container hero-content text-white">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <span class="hero-badge">Smart Campus Platform</span>

                <h1 class="hero-title"><?php echo $hero['title']; ?></h1>

                <p class="hero-desc"><?php echo $hero['description']; ?></p>

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
                <img src="assets/images/<?php echo $hero['image']; ?>" class="img-fluid hero-img shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- FEATURES -->
<div class="row mt-5 justify-content-center">
    <?php while ($f = mysqli_fetch_assoc($features)) { ?>
        <div class="col-md-4">
            <div class="feature-card-2">
                <div class="feature-icon">
                    <i class="bi <?php echo $f['image']; ?>"></i>
                </div>
                <h5><?php echo $f['title']; ?></h5>
                <p><?php echo $f['description']; ?></p>
            </div>
        </div>
    <?php } ?>
</div>

<!-- WORKFLOW -->
<section class="workflow-section py-5">
    <div class="container text-center">
        <h2 class="section-heading">How It Works</h2>

        <div class="row g-4 mt-5">
            <?php $count = 1;
            while ($w = mysqli_fetch_assoc($workflow)) { ?>
                <div class="col-lg-3 col-md-6">
                    <div class="workflow-card-premium">
                        <div class="step-indicator">0<?php echo $count++; ?></div>
                        <div class="workflow-icon-wrapper">
                            <i class="bi <?php echo $w['image']; ?>"></i>
                        </div>
                        <h5><?php echo $w['title']; ?></h5>
                        <p><?php echo $w['description']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- ROLES -->
<section class="roles-section py-5">
    <div class="container text-center">
        <h2 class="section-heading">Role-Based Access</h2>

        <div class="row mt-5 justify-content-center g-4">
            <?php $i = 0;
            while ($r = mysqli_fetch_assoc($roles)) {
                $active = ($i == 1) ? 'active-role' : ''; ?>
                <div class="col-md-4">
                    <div class="role-card-premium <?php echo $active; ?>">
                        <div class="role-icon-bg">
                            <i class="bi <?php echo $r['image']; ?>"></i>
                        </div>
                        <h5><?php echo $r['title']; ?></h5>
                        <div class="role-divider"></div>
                        <p><?php echo $r['description']; ?></p>
                    </div>
                </div>
            <?php $i++;
            } ?>
        </div>
    </div>
</section>

<!-- DEPARTMENTS -->
<section class="departments-section py-5">
    <div class="container text-center">
        <h2 class="section-heading">Departments Overview</h2>

        <div class="row g-4 mt-2 justify-content-center">
            <?php while ($d = mysqli_fetch_assoc($departments)) { ?>
                <div class="col-lg-3 col-md-6">
                    <div class="dept-card-premium">
                        <img src="assets/images/<?php echo $d['image']; ?>" class="dept-img">
                        <div class="dept-overlay">
                            <div class="dept-info">
                                <h6><?php echo $d['description']; ?></h6>
                                <h4><?php echo $d['title']; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section py-5">
    <div class="container text-center">
        <h2 class="section-heading">What Users Say</h2>

        <div class="row mt-5 justify-content-center g-4">
            <?php while ($t = mysqli_fetch_assoc($testimonials)) { ?>
                <div class="col-md-4">
                    <div class="testimonial-card-premium">
                        <p>"<?php echo $t['description']; ?>"</p>
                        <div class="user-meta mt-4">
                            <img src="<?php echo $t['image']; ?>" class="user-avatar">
                            <h6><?php echo $t['title']; ?></h6>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section py-5">
    <div class="container text-center">
        <h2><?php echo $cta['title']; ?></h2>
        <p><?php echo $cta['description']; ?></p>

        <a href="auth/register.php" class="btn btn-light-premium">
            Create Account
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>