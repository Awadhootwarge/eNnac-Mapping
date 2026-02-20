<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Attainment Computation</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="../dashboard/index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Attainment</li>
            </ol>
        </nav>
    </div>

    <div class="alert alert-info border-0 shadow-sm mb-4">
        <i class="fas fa-info-circle me-2"></i>
        <strong>Status:</strong> CO-PO Mapping is required before initiating attainment computation.
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Run Computation</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Select Subject</label>
                        <select class="form-select">
                            <option>Machine Learning (CS601)</option>
                            <option disabled>Computer Networks (CS602) - Mapping Pending</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Calculation Method</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="calcMethod" id="method1" checked>
                            <label class="form-check-label" for="method1">Direct Attainment (80%) + Indirect
                                (20%)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="calcMethod" id="method2">
                            <label class="form-check-label" for="method2">Custom Weighted</label>
                        </div>
                    </div>
                    <button class="btn btn-primary w-100 mt-2">Generate Attainment</button>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Computation Results (Preview)</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr class="bg-light">
                                    <th>CO Code</th>
                                    <th>Direct Attainment</th>
                                    <th>Indirect Attainment</th>
                                    <th>Overall Attainment</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CO1</td>
                                    <td>2.45</td>
                                    <td>2.80</td>
                                    <td>2.52</td>
                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> Met</span></td>
                                </tr>
                                <tr>
                                    <td>CO2</td>
                                    <td>1.85</td>
                                    <td>2.10</td>
                                    <td>1.90</td>
                                    <td><span class="text-warning"><i class="fas fa-minus"></i> Partial</span></td>
                                </tr>
                                <tr>
                                    <td>CO3</td>
                                    <td>2.10</td>
                                    <td>2.40</td>
                                    <td>2.16</td>
                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> Met</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>