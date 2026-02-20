<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center">
            <a href="../dashboard/index.php" class="btn btn-outline-secondary btn-sm me-3 px-3 py-2 fw-medium ghost-btn text-decoration-none" style="border-color: #ddd; color: #555; border-radius: 8px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); transition: all 0.2s;">
                <i class="fas fa-arrow-left me-2"></i> Back to Dashboard
            </a>
            <h2 class="fw-bold mb-0">Attainment Computation</h2>
        </div>
        <button class="btn btn-outline-primary px-4 py-2 shadow-sm fw-medium d-flex align-items-center" style="border-radius: 8px;">
            <i class="fas fa-file-export me-2"></i> Export Report
        </button>
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
                    <button id="generateAttainmentBtn" class="btn btn-primary w-100 mt-2 px-4 py-2 shadow-sm fw-medium" style="border-radius: 8px; background-color: var(--academic-blue); border-color: var(--academic-blue);">
                        <i class="fas fa-calculator me-2"></i> Generate Attainment
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card shadow-sm border-0" style="border-radius: 12px; display: none;" id="resultsCard">
                <div class="card-header bg-white pt-4 pb-3 border-0">
                    <h5 class="mb-0 fw-bold" style="color: var(--academic-blue);">Computation Results</h5>
                </div>
                <div class="card-body">
                    <div class="progress mb-4" style="height: 10px; border-radius: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="text-muted small mb-4"><strong>Overall Subject Attainment:</strong> 85% Target Met</p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center align-middle">
                            <thead class="bg-light">
                                <tr>
                                    <th class="py-3">CO Code</th>
                                    <th class="py-3">Direct Attainment</th>
                                    <th class="py-3">Indirect Attainment</th>
                                    <th class="py-3">Overall Attainment</th>
                                    <th class="py-3">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold text-muted">CO1</td>
                                    <td>2.45</td>
                                    <td>2.80</td>
                                    <td class="fw-bold">2.52</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success px-3 py-2" style="border-radius: 6px;"><i class="fas fa-arrow-up me-1"></i> Met</span></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-muted">CO2</td>
                                    <td>1.85</td>
                                    <td>2.10</td>
                                    <td class="fw-bold">1.90</td>
                                    <td><span class="badge bg-warning bg-opacity-10 text-warning px-3 py-2" style="border-radius: 6px;"><i class="fas fa-minus me-1"></i> Partial</span></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-muted">CO3</td>
                                    <td>2.10</td>
                                    <td>2.40</td>
                                    <td class="fw-bold">2.16</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success px-3 py-2" style="border-radius: 6px;"><i class="fas fa-arrow-up me-1"></i> Met</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div id="emptyStateContainer" class="text-center py-5 mt-4">
                <i class="fas fa-chart-bar fa-4x text-muted opacity-25 mb-3"></i>
                <h5 class="text-muted">Awaiting Computation</h5>
                <p class="text-muted small">Select a subject and run the generation tool to view attainment matrices.</p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const generateBtn = document.getElementById('generateAttainmentBtn');
    const resultsCard = document.getElementById('resultsCard');
    const emptyState = document.getElementById('emptyStateContainer');
    
    if (generateBtn) {
        generateBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const originalContent = this.innerHTML;
            
            // Show Spinner
            this.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Calculating...';
            this.disabled = true;
            this.classList.add('opacity-75');
            
            // Simulate 1.5s Data Processing
            setTimeout(() => {
                this.innerHTML = '<i class="fas fa-check me-2"></i> Computed Successfully';
                this.classList.remove('opacity-75', 'btn-primary');
                this.classList.add('btn-success');
                this.style.backgroundColor = '#198754';
                this.style.borderColor = '#198754';
                
                // Hide empty state, reveal results smoothly
                emptyState.style.display = 'none';
                resultsCard.style.display = 'block';
                resultsCard.style.animation = 'fadeIn 0.5s ease';
                
                setTimeout(() => {
                    this.innerHTML = originalContent;
                    this.classList.replace('btn-success', 'btn-primary');
                    this.style.backgroundColor = 'var(--academic-blue)';
                    this.style.borderColor = 'var(--academic-blue)';
                    this.disabled = false;
                }, 3000);
            }, 1500);
        });
    }
});

// Polyfill dynamic Keyframe animation injection for fadeIn
const style = document.createElement('style');
style.innerHTML = `
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
`;
document.head.appendChild(style);
</script>

<?php include '../includes/footer.php'; ?>