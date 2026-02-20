<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Faculty Portal</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>

    <!-- Workflow Progress Tracker -->
    <div class="card mb-4">
        <div class="card-body py-4">
            <div class="workflow-tracker mb-0">
                <div class="step completed">
                    <div class="step-icon"><i class="fas fa-check"></i></div>
                    <div class="step-label">Selection</div>
                </div>
                <div class="step active">
                    <div class="step-icon">2</div>
                    <div class="step-label">Syllabus & CO</div>
                </div>
                <div class="step">
                    <div class="step-icon">3</div>
                    <div class="step-label">Mapping</div>
                </div>
                <div class="step border-0">
                    <div class="step-icon">4</div>
                    <div class="step-label">Attainment</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stage 1: School Selection -->
    <div id="step-1" class="mb-5">
        <h6 class="funnel-step-header"><i class="fas fa-university me-2"></i>Stage 1: Select School / Department</h6>
        <div class="row selection-row g-3">
            <div class="col-md-2">
                <div class="card selection-card" data-step="1" data-type="school" data-value="AI">
                    <div class="card-body">
                        <i class="fas fa-robot fa-2x mb-2 text-primary"></i>
                        <h6 class="mb-0">School of AI</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card selection-card" data-step="1" data-type="school" data-value="MBA">
                    <div class="card-body">
                        <i class="fas fa-chart-line fa-2x mb-2 text-primary"></i>
                        <h6 class="mb-0">MBA Finance</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card selection-card" data-step="1" data-type="school" data-value="SOUND">
                    <div class="card-body">
                        <i class="fas fa-music fa-2x mb-2 text-primary"></i>
                        <h6 class="mb-0">School of Sound</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card selection-card" data-step="1">
                    <div class="card-body">
                        <i class="fas fa-bullhorn fa-2x mb-2 text-primary"></i>
                        <h6 class="mb-0">Marketing</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card selection-card" data-step="1">
                    <div class="card-body">
                        <i class="fas fa-gear fa-2x mb-2 text-primary"></i>
                        <h6 class="mb-0">Engineering</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card selection-card" data-step="1">
                    <div class="card-body">
                        <i class="fas fa-ellipsis-h fa-2x mb-2 text-muted"></i>
                        <h6 class="mb-0">Others</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stage 2: Subject Selection -->
    <div id="step-2" class="mb-5 d-none">
        <h6 class="funnel-step-header"><i class="fas fa-book-open me-2"></i>Stage 2: Select Subject</h6>
        <div id="subject-list" class="row selection-row g-3">
            <!-- Dynamically populated by JS based on school selection -->
            <div class="col-12 text-center text-muted py-4">
                <i class="fas fa-info-circle me-1"></i> Selection required.
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>