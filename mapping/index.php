<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <div class="d-flex align-items-center mb-1">
                <a href="../dashboard/index.php" class="btn btn-outline-secondary btn-sm me-3 px-3 py-2 fw-medium ghost-btn text-decoration-none" style="border-color: #ddd; color: #555; border-radius: 8px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); transition: all 0.2s;">
                    <i class="fas fa-arrow-left me-2"></i> Back to Dashboard
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
                <i class="fas fa-save me-2"></i> Save Mapping
            </button>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-white">
            <h5 class="mb-0">Mapping Matrix (Visual Heatmap)</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered text-center align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th rowspan="2" class="align-middle" style="width: 150px;">Course Outcome</th>
                            <th colspan="5" class="text-center py-3 bg-white" style="border-bottom: 2px solid var(--academic-blue);">Program Outcomes (POs)</th>
                            <th rowspan="2" class="align-middle" style="width: 100px;">Tools</th>
                        </tr>
                        <tr>
                            <th title="Engineering Knowledge">PO1</th>
                            <th title="Problem Analysis">PO2</th>
                            <th title="Design/Development of Solutions">PO3</th>
                            <th title="Conduct Investigations of Complex Problems">PO4</th>
                            <th title="Modern Tool Usage">PO5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$cos = ['CO1: Understand AI basics', 'CO2: Apply algorithms', 'CO3: Analyze Performance'];
foreach ($cos as $index => $co):
    $coCode = "CO" . ($index + 1);
?>
                            <tr>
                                <td class="text-start ps-3 fw-bold bg-light" style="font-size: 0.85rem;">
                                    <?php echo $co; ?>
                                </td>
                                <?php for ($i = 1; $i <= 5; $i++):
        $colName = "PO$i";
?>
                                    <td class="matrix-cell level-0" style="transition: background-color 0.3s ease;">
                                        <span class="justification-indicator d-none" id="just-<?php echo $coCode . $colName; ?>"><i
                                                class="fas fa-comment"></i></span>
                                        <select class="form-select form-select-sm matrix-select border-0 bg-transparent shadow-none fw-bold mx-auto" style="cursor: pointer;" onchange="updateHeatmap(this)">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="mt-1">
                                            <span class="justification-btn text-muted" data-bs-toggle="modal"
                                                data-bs-target="#justificationModal"
                                                onclick="openJustificationModal('<?php echo $coCode; ?>', '<?php echo $colName; ?>')"
                                                style="cursor: pointer;">
                                                <i class="fas fa-pencil-alt"></i> Justify
                                            </span>
                                        </div>
                                    </td>
                                <?php
    endfor; ?>
                                <td>
                                    <button class="btn btn-sm btn-link copy-row-btn" title="Copy mapping to next row">
                                        <i class="fas fa-copy me-1"></i> Copy
                                    </button>
                                </td>
                            </tr>
                        <?php
endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white border-top">
            <div class="d-flex align-items-center">
                <span class="me-3 fw-bold small">Heatmap Legend:</span>
                <span class="badge level-3 me-2" style="border: 1px solid #ddd">3 (High)</span>
                <span class="badge level-2 me-2" style="border: 1px solid #ddd">2 (Medium)</span>
                <span class="badge level-1 me-2" style="border: 1px solid #ddd">1 (Low)</span>
                <span class="badge level-0 me-2" style="border: 1px solid #ddd">0 (N/A)</span>
            </div>
        </div>
    </div>
</div>

<!-- Justification Modal -->
<div class="modal fade" id="justificationModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 12px;">
            <div class="modal-header border-bottom-0 pt-4 px-4 bg-light">
                <h5 class="modal-title fw-bold" style="color: var(--academic-blue);">Mapping Justification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 pb-4">
                <p class="small text-muted mb-3">Provide a rationale for the correlation level selected for <strong id="justificationCellTarget" class="text-primary"></strong> (Required for NAAC/NBA Audits).</p>
                <textarea class="form-control bg-light border-0" rows="4" placeholder="e.g., CO1 directly addresses the technical foundational requirements defined in PO1..." style="border-radius: 8px;"></textarea>
            </div>
            <div class="modal-footer border-top-0 pt-0 pb-4 px-4 d-flex justify-content-end">
                <button type="button" class="btn btn-outline-secondary px-3 py-2" data-bs-dismiss="modal" style="border-radius: 8px;">Cancel</button>
                <button type="button" class="btn btn-primary px-4 py-2" data-bs-dismiss="modal" style="border-radius: 8px; background-color: var(--academic-blue); border-color: var(--academic-blue);">Save Justification</button>
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
                Mapping and Justifications saved successfully!
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

    // -------------------------------------------------------------------------
    // 2. Save Mapping Button Logic
    // -------------------------------------------------------------------------
    const saveBtn = document.getElementById('saveMappingBtn');
    if (saveBtn) {
        saveBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const originalContent = this.innerHTML;
            
            // Show Spinner
            this.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Saving...';
            this.disabled = true;
            this.style.opacity = '0.8';
            
            setTimeout(() => {
                // Success State Styling
                this.innerHTML = '<i class="fas fa-check me-2"></i> Saved Successfully';
                this.classList.replace('btn-primary', 'btn-success');
                this.style.backgroundColor = '#198754';
                this.style.borderColor = '#198754';
                
                // Show Success Toast
                const toastEl = document.getElementById('successToast');
                const toast = new bootstrap.Toast(toastEl, { delay: 4000 });
                toast.show();
                
                // Return button to normal after 3 seconds
                setTimeout(() => {
                    this.innerHTML = originalContent;
                    this.classList.replace('btn-success', 'btn-primary');
                    this.style.backgroundColor = 'var(--academic-blue)';
                    this.style.borderColor = 'var(--academic-blue)';
                    this.disabled = false;
                    this.style.opacity = '1';
                }, 3000);
            }, 1000); // 1s simulation delay
        });
    }
});
</script>

<?php include '../includes/footer.php'; ?>