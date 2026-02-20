<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Reports & Analytics</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="../dashboard/index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Reports</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card text-center p-4">
                <i class="fas fa-file-pdf fa-3x text-danger mb-3"></i>
                <h6>Syllabus Compliance</h6>
                <button class="btn btn-sm btn-outline-primary mt-2">Download PDF</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-4">
                <i class="fas fa-table fa-3x text-success mb-3"></i>
                <h6>CO-PO Matrix Report</h6>
                <button class="btn btn-sm btn-outline-primary mt-2">Export Excel</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-4">
                <i class="fas fa-chart-bar fa-3x text-primary mb-3"></i>
                <h6>Attainment Summary</h6>
                <button class="btn btn-sm btn-outline-primary mt-2">View Analytics</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-4">
                <i class="fas fa-graduation-cap fa-3x text-warning mb-3"></i>
                <h6>OBE Gap Analysis</h6>
                <button class="btn btn-sm btn-outline-primary mt-2">Download Report</button>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-white">
            <h5 class="mb-0">PO Attainment Visualization</h5>
        </div>
        <div class="card-body">
            <div class="alert alert-light border text-center py-5">
                <i class="fas fa-chart-pie fa-4x opacity-10 mb-3"></i>
                <p class="text-muted">Analytics visualization module (Placeholder for Chart.js Integration)</p>
                <div class="d-flex justify-content-center gap-2">
                    <div class="bg-primary opacity-25 rounded" style="width: 30px; height: 100px;"></div>
                    <div class="bg-primary opacity-50 rounded" style="width: 30px; height: 120px;"></div>
                    <div class="bg-primary rounded" style="width: 30px; height: 150px;"></div>
                    <div class="bg-primary opacity-75 rounded" style="width: 30px; height: 110px;"></div>
                    <div class="bg-primary opacity-25 rounded" style="width: 30px; height: 90px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>