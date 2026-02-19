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
                <h1 class="fw-bold text-dark">Submit a Complaint</h1>
                <p class="text-muted">Fill out the form below to report an issue. Our team will review it within 24 hours.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="bg-white p-5 rounded-5 shadow-sm border-0">
                        <form id="complaintForm" action="process_complaint.php" method="POST" enctype="multipart/form-data">

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-uppercase">Issue Category</label>
                                    <select class="form-select border-0 bg-light p-3 rounded-4" name="category" required>
                                        <option value="">Select Category...</option>
                                        <option value="Academic">Academic & Faculty</option>
                                        <option value="Hostel">Hostel & Housing</option>
                                        <option value="IT">IT & WiFi Support</option>
                                        <option value="Facility">Facility Maintenance</option>
                                        <option value="Canteen">Canteen & Food</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-uppercase">Urgency Level</label>
                                    <div class="d-flex gap-2">
                                        <input type="radio" class="btn-check" name="priority" id="urgent" value="Urgent">
                                        <label class="btn btn-outline-danger w-100 rounded-pill p-3" for="urgent">Urgent</label>

                                        <input type="radio" class="btn-check" name="priority" id="normal" value="Normal" checked>
                                        <label class="btn btn-outline-primary w-100 rounded-pill p-3" for="normal">Normal</label>
                                    </div>
                                    <div id="priority-error-container"></div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold small text-uppercase">Detailed Description</label>
                                    <textarea class="form-control border-0 bg-light p-4 rounded-4" name="description" id="description" rows="6" placeholder="Please describe the issue in detail (e.g., Room number, specific error, time occurred)..." required></textarea>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold small text-uppercase">Attach Evidence (Optional)</label>
                                    <div class="p-4 border-2 border-dashed rounded-4 text-center bg-light" style="border: 2px dashed #dee2e6;">
                                        <i class="bi bi-cloud-arrow-up fs-1 text-primary mb-2"></i>
                                        <input type="file" class="form-control" name="evidence" id="evidence" accept="image/*,.pdf">
                                        <small class="text-muted d-block mt-2">Upload photos or documents (Max 5MB: JPG, PNG, PDF).</small>
                                    </div>
                                </div>

                                <div class="col-12 pt-3">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill py-3 fw-bold shadow">
                                        Submit My Request <i class="bi bi-send-fill ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bg-white p-4 rounded-5 shadow-sm mb-4">
                        <h5 class="fw-bold mb-4 text-primary"><i class="bi bi-shield-check me-2"></i> Filing Tips</h5>
                        <ul class="list-unstyled">
                            <li class="mb-4 d-flex">
                                <i class="bi bi-1-circle-fill text-primary me-3 fs-4"></i>
                                <p class="small mb-0 text-muted"><strong>Be Specific:</strong> Mention exact locations like "Room 302, Floor 3".</p>
                            </li>
                            <li class="mb-4 d-flex">
                                <i class="bi bi-2-circle-fill text-primary me-3 fs-4"></i>
                                <p class="small mb-0 text-muted"><strong>Attach Photos:</strong> Helps the team identify tools needed before arrival.</p>
                            </li>
                            <li class="d-flex">
                                <i class="bi bi-3-circle-fill text-primary me-3 fs-4"></i>
                                <p class="small mb-0 text-muted"><strong>Check Status:</strong> Track live progress on your dashboard.</p>
                            </li>
                        </ul>
                    </div>

                    <div class="p-4 rounded-5 bg-dark text-white shadow-sm">
                        <h6 class="fw-bold mb-3">Response Times</h6>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="small opacity-75">Urgent Requests:</span>
                            <span class="badge bg-danger">2-4 Hours</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="small opacity-75">Normal Requests:</span>
                            <span class="badge bg-primary">24-48 Hours</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>

<style>
    /* CSS for validation messages - No harm to original layout */
    .error {
        color: #dc3545;
        font-size: 0.75rem;
        font-weight: 700;
        margin-top: 5px;
        display: block;
    }

    input.error,
    select.error,
    textarea.error {
        border: 1px solid #dc3545 !important;
        background-color: #fff8f8 !important;
    }
</style>

<script>
    $(document).ready(function() {
        $("#complaintForm").validate({
            rules: {
                category: "required",
                priority: "required",
                description: {
                    required: true,
                    minlength: 20
                },
                evidence: {
                    extension: "jpg|jpeg|png|pdf",
                    filesize: 5242880 // 5MB limit
                }
            },
            messages: {
                category: "Please select a category",
                description: {
                    required: "Description cannot be empty",
                    minlength: "Please provide at least 20 characters of detail"
                },
                evidence: {
                    extension: "Only JPG, PNG, and PDF files are allowed"
                }
            },
            errorPlacement: function(error, element) {
                if (element.attr("name") == "priority") {
                    error.appendTo("#priority-error-container");
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                // Optional: Show a loading state on the button
                $(form).find('button[type="submit"]').html('Processing... <div class="spinner-border spinner-border-sm ms-2"></div>').attr('disabled', true);
                form.submit();
            }
        });

        // Custom rule for file size
        $.validator.addMethod('filesize', function(value, element, param) {
            return this.optional(element) || (element.files[0].size <= param)
        }, 'File size must be less than 5MB');
    });
</script>

<?php include '../includes/footer.php'; ?>