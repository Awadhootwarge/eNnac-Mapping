<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="container-fluid">
    <!-- Breadcrumb -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <div class="d-flex align-items-center mb-1">
                <a href="../syllabus/index.php" class="btn btn-outline-secondary btn-sm me-3 px-3 py-2 fw-medium ghost-btn text-decoration-none" style="border-color: #ddd; color: #555; border-radius: 8px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); transition: all 0.2s;">
                    <i class="fas fa-arrow-left me-2"></i> Back to Syllabus & CO
                </a>
                <h2 class="fw-bold mb-0">CO–PO Mapping Matrix</h2>
            </div>
            <p class="text-muted mb-0 mt-2">Subject: <span id="dynamicSubjectTitle" class="fw-bold text-primary">Loading subject...</span></p>
        </div>
        <div class="d-flex align-items-center gap-2">
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle px-3 py-2 shadow-sm" type="button" data-bs-toggle="dropdown" style="border-radius: 8px;">
                    <i class="fas fa-download me-1"></i> Export
                </button>
                <ul class="dropdown-menu shadow border-0" style="border-radius: 12px; margin-top: 5px;">
                    <li><a class="dropdown-item py-2" href="#"><i class="fas fa-file-pdf me-2 text-danger"></i>Export as PDF</a></li>
                    <li><a class="dropdown-item py-2" href="#"><i class="fas fa-file-excel me-2 text-success"></i>Export for NAAC</a></li>
                </ul>
            </div>
            <button id="saveMappingBtn" class="btn btn-primary px-4 py-2 shadow-sm fw-medium d-flex align-items-center" style="border-radius: 8px; transition: all 0.2s; background-color: var(--academic-blue); border-color: var(--academic-blue);">
                <i class="fas fa-save me-2"></i> Save Mapping & Continue
            </button>
        </div>
    </div>

    <!-- ============================================================ -->
    <!-- MAPPING MATRIX (ENHANCED - 16 OUTCOMES)                      -->
    <!-- ============================================================ -->
    <div class="card section-card mb-4" id="mapping-matrix-section">
        <div class="card-header bg-white d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div class="section-icon section-icon-matrix me-3">
                    <i class="fas fa-th"></i>
                </div>
                <div>
                    <h5 class="mb-0 fw-bold">Program Outcomes & Specific Outcomes – NBA/AICTE Framework</h5>
                    <small class="text-muted">12 Standard Program Outcomes (POs) and 4 Program Specific Outcomes (PSOs) (0 = No Mapping, 1 = Low, 2 = Medium, 3 = High)</small>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered text-center align-middle mb-0" id="co-po-matrix">
                    <thead class="bg-light">
                        <tr class="matrix-header-row">
                            <th rowspan="2" class="align-middle matrix-co-header" style="min-width: 150px;">Course Outcome</th>
                            <th colspan="12" class="matrix-po-group-header">Program Outcomes (PO)</th>
                            <th colspan="2" class="matrix-po-group-header" style="background-color: #f1f8e9;">Program Specific Outcomes (PSO)</th>
                            <th rowspan="2" class="align-middle" style="width: 100px;">Tools</th>
                        </tr>
                        <tr class="matrix-header-row">
                            <?php for ($i = 1; $i <= 12; $i++): ?>
                                <th class="matrix-po-header" title="PO<?php echo $i; ?>">PO<?php echo $i; ?></th>
                            <?php
endfor; ?>
                            <?php for ($i = 1; $i <= 2; $i++): ?>
                                <th class="matrix-po-header" style="background-color: #f1f8e9;" title="PSO<?php echo $i; ?>">PSO<?php echo $i; ?></th>
                            <?php
endfor; ?>
                        </tr>
                    </thead>
                    <tbody id="matrix-tbody">
                        <!-- Dynamically populated by script.js -->
                    </tbody>
                    <tfoot id="matrix-tfoot">
                        <!-- Dynamically populated by script.js -->
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white border-top">
            <div class="d-flex align-items-center">
                <span class="me-3 fw-bold small">Heatmap Legend:</span>
                <span class="badge level-3 me-2" style="border: 1px solid #ddd; padding: 6px 12px; color: #fff;">3 (High)</span>
                <span class="badge level-2 me-2" style="border: 1px solid #ddd; padding: 6px 12px; color: #fff;">2 (Medium)</span>
                <span class="badge level-1 me-2" style="border: 1px solid #ddd; padding: 6px 12px; color: #fff;">1 (Low)</span>
                <span class="badge level-0 me-2" style="border: 1px solid #ddd; padding: 6px 12px; color: #444;">0 (N/A)</span>
            </div>
        </div>
    </div>
</div>

<!-- Justification Modal -->
<div class="modal fade" id="justificationModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mapping Justification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="small text-muted mb-2">Provide a rationale for the correlation level selected in this cell
                    (Required for NAAC/NBA Audits).</p>
                <textarea class="form-control" rows="4"
                    placeholder="e.g., CO1 directly addresses the technical foundational requirements defined in PO1..."></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save Justification</button>
            </div>
        </div>
    </div>
</div>

<!-- Success Toast -->
<div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1080;">
    <div id="successToast" class="toast align-items-center text-white bg-success border-0 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true" style="border-radius: 8px;">
        <div class="d-flex">
            <div class="toast-body fw-medium d-flex align-items-center">
                <i class="fas fa-check-circle me-2 fs-5"></i>
                Mapping saved successfully! Redirecting...
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<script>
// Logic to update Heatmap Styles Dynamically
function updateHeatmap(selectElement) {
    const td = selectElement.closest('.matrix-cell');
    const val = selectElement.value;
    
    // Remove existing level classes
    td.classList.remove('level-0', 'level-1', 'level-2', 'level-3');
    
    // Add new level class
    td.classList.add('level-' + val);
    
    // Adjust Text Color dynamically for contrast (assuming level-3 gets dark background)
    if (val === '3') {
        selectElement.style.color = '#fff';
    } else if (val === '1' || val === '2') {
        selectElement.style.color = '#0d47a1';
    } else {
        selectElement.style.color = '#333';
    }
}

// Justification Target setter
function openJustificationModal(co, outcome) {
    document.getElementById('justificationCellTarget').innerText = co + ' mapped to ' + outcome;
}

document.addEventListener('DOMContentLoaded', function() {
    // -------------------------------------------------------------------------
    // 1. Initialize Heatmaps automatically
    // -------------------------------------------------------------------------
    document.querySelectorAll('.matrix-select').forEach(select => {
        // Apply random dummy values visually for demo purposes initially if value is 0
        if(select.value === '0' && Math.random() > 0.4){
           select.value = Math.floor(Math.random() * 3) + 1;
        }
        updateHeatmap(select);
    });

    // -------------------------------------------------------------------------
    // 2. Copy Row Action Script
    // -------------------------------------------------------------------------
    document.querySelectorAll('.copy-row-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const currentRow = this.closest('tr');
            const nextRow = currentRow.nextElementSibling;
            
            if (nextRow) {
                const currentSelects = currentRow.querySelectorAll('select.matrix-select');
                const nextSelects = nextRow.querySelectorAll('select.matrix-select');
                
                currentSelects.forEach((select, index) => {
                    nextSelects[index].value = select.value;
                    updateHeatmap(nextSelects[index]); // trigger dynamic styles
                });
                
                // Show visual feedback on the copied row
                nextRow.style.transition = 'background-color 0.5s';
                nextRow.style.backgroundColor = '#e0f7fa'; // light cyan flash
                setTimeout(() => {
                    nextRow.style.backgroundColor = '';
                }, 800);
                
                // Show tiny success toast specifically for copying mapping
                const toastEl = document.getElementById('successToast');
                toastEl.querySelector('.toast-body').innerHTML = '<i class="fas fa-copy me-2 fs-5"></i> Row values copied successfully!';
                new bootstrap.Toast(toastEl, { delay: 2000 }).show();
            } else {
                alert("This is the last row. There is no row below it to copy to.");
            }
        });
    });

    // Inline save logic removed because it is fully handled natively by script.js function saveMappingData()
});
</script>

<?php include '../includes/footer.php'; ?>