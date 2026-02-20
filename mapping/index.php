<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-0">CO–PO Mapping Matrix</h2>
            <p class="text-muted mb-0">Subject: Machine Learning (CS601) | School of AI</p>
        </div>
        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle me-2" type="button" data-bs-toggle="dropdown">
                <i class="fas fa-download me-1"></i> Export
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf me-2 text-danger"></i>Export as PDF</a>
                </li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-file-excel me-2 text-success"></i>Export for
                        NAAC</a></li>
            </ul>
            <button id="saveMappingBtn" class="btn btn-primary">
                <i class="fas fa-save me-1"></i> Save Mapping
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
                            <th colspan="5">Program Outcomes (POs)</th>
                            <th rowspan="2" class="align-middle" style="width: 100px;">Tools</th>
                        </tr>
                        <tr>
                            <th title="Technical Knowledge">PO1</th>
                            <th title="Problem Solving">PO2</th>
                            <th title="Modern Tool Usage">PO3</th>
                            <th title="Ethics">PO4</th>
                            <th title="Communication">PO5</th>
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
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <td class="matrix-cell">
                                        <span class="justification-indicator d-none" id="just-<?php echo $coCode . $i; ?>"><i
                                                class="fas fa-comment"></i></span>
                                        <select class="form-select form-select-sm matrix-select">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="mt-1">
                                            <span class="justification-btn text-muted" data-bs-toggle="modal"
                                                data-bs-target="#justificationModal"
                                                data-cell="<?php echo $coCode . '-' . $i; ?>">
                                                <i class="fas fa-pencil-alt"></i> Justify
                                            </span>
                                        </div>
                                    </td>
                                <?php endfor; ?>
                                <td>
                                    <button class="btn btn-sm btn-link copy-row-btn" title="Copy mapping to next row">
                                        <i class="fas fa-copy me-1"></i> Copy
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
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
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="successToast" class="toast align-items-center text-white bg-success border-0" role="alert"
        aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <i class="fas fa-check-circle me-2"></i> Mapping and Justifications saved successfully!
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>