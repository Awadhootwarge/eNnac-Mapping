<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="container-fluid">
    <!-- Breadcrumb -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">CO–PO Mapping Details</h2>
            <p class="text-muted mb-0">Review, edit, and fine-tune individual Course Outcome to Program Outcome mappings</p>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="../dashboard/index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../subject/index.php">Subject</a></li>
                <li class="breadcrumb-item"><a href="../mapping/index.php">CO–PO Mapping</a></li>
                <li class="breadcrumb-item active">Mapping Details</li>
            </ol>
        </nav>
    </div>

    <!-- Subject Info Card -->
    <div class="card section-card mb-4" id="subject-info-card">
        <div class="card-body">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="info-item">
                        <div class="info-label"><i class="fas fa-book me-2"></i>Subject Name</div>
                        <div class="info-value" id="detailSubjectName">Machine Learning</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-item">
                        <div class="info-label"><i class="fas fa-layer-group me-2"></i>Semester</div>
                        <div class="info-value" id="detailSemester">Semester 6</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-item">
                        <div class="info-label"><i class="fas fa-chalkboard-teacher me-2"></i>Faculty Name</div>
                        <div class="info-value" id="detailFaculty">Dr. Anil Kumar Sharma</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-item">
                        <div class="info-label"><i class="fas fa-calendar-alt me-2"></i>Academic Year</div>
                        <div class="info-value" id="detailYear">2025–2026</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mapping Summary Stats -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="stat-mini-card">
                <div class="stat-mini-icon bg-primary-subtle text-primary">
                    <i class="fas fa-list-ol"></i>
                </div>
                <div>
                    <div class="stat-mini-value" id="statTotalCOs">0</div>
                    <div class="stat-mini-label">Course Outcomes</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-mini-card">
                <div class="stat-mini-icon bg-success-subtle text-success">
                    <i class="fas fa-link"></i>
                </div>
                <div>
                    <div class="stat-mini-value" id="statMappedCells">0</div>
                    <div class="stat-mini-label">Mapped POs</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-mini-card">
                <div class="stat-mini-icon bg-warning-subtle text-warning">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div>
                    <div class="stat-mini-value" id="statAvgLevel">–</div>
                    <div class="stat-mini-label">Average Level</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-mini-card">
                <div class="stat-mini-icon bg-info-subtle text-info">
                    <i class="fas fa-percentage"></i>
                </div>
                <div>
                    <div class="stat-mini-value" id="statCoverage">0%</div>
                    <div class="stat-mini-label">Coverage</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================ -->
    <!-- STRICT ACADEMIC CO-PO MAPPING TABLE                          -->
    <!-- ============================================================ -->
    <div style="background: white; padding: 20px; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 30px;">
        <h4 style="margin-bottom: 20px; text-align: center; font-weight: bold; text-decoration: underline;">CO-PO & PSO Justification Sheet</h4>
        <table id="strict-co-po-table" style="width: 100%; border-collapse: collapse; border: 2px solid black;">
            <thead>
                <tr>
                    <th style="width: 30%; border: 1px solid black; padding: 12px; background-color: #f4f4f4; text-align: left;">Course Outcome</th>
                    <th style="width: 20%; border: 1px solid black; padding: 12px; background-color: #f4f4f4; text-align: center;">Outcome (PO/PSO)</th>
                    <th style="width: 50%; border: 1px solid black; padding: 12px; background-color: #f4f4f4; text-align: left;">Justification</th>
                </tr>
            </thead>
            <tbody id="strict-mapping-tbody">
                <!-- Rows are strictly generated by JS -->
            </tbody>
        </table>
    </div>

    <!-- Final Submit Section -->
    <div class="card section-card mt-4 mb-5" id="final-submit-section">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h6 class="mb-1 fw-bold"><i class="fas fa-flag-checkered me-2 text-success"></i>All mappings reviewed and confirmed?</h6>
                <small class="text-muted">Submit your final CO–PO mapping to proceed to attainment calculation.</small>
            </div>
            <button id="submitAllBtn" class="btn btn-success btn-lg btn-submit-final">
                <i class="fas fa-paper-plane me-2"></i> Submit All & Continue to Attainment
                <i class="fas fa-arrow-right ms-2"></i>
            </button>
        </div>
    </div>
</div>

<!-- PO Selection Modal -->
<div class="modal fade" id="poSelectionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold"><i class="fas fa-bullseye me-2 text-primary"></i>Select Program Outcomes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted small mb-3">Select the POs to map to <strong id="modalCoLabel">CO1</strong> and set their contribution level (1–3).</p>
                <div class="row g-2" id="poCheckboxGrid">
                    <!-- Populated by JS -->
                </div>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="applyPoSelectionBtn">
                    <i class="fas fa-check me-1"></i> Apply Selection
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Success Toast -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="updateToast" class="toast align-items-center text-white bg-success border-0" role="alert"
        aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body" id="toastMessage">
                <i class="fas fa-check-circle me-2"></i> Mapping updated successfully!
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmSubmitModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold"><i class="fas fa-exclamation-triangle me-2 text-warning"></i>Confirm Submission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-2">You are about to submit the CO–PO mapping for:</p>
                <div class="bg-light rounded p-3 mb-3">
                    <strong>Machine Learning (CS601)</strong><br>
                    <small class="text-muted">Semester 6 | Academic Year 2025–2026</small>
                </div>
                <p class="text-muted small mb-0">This action will finalize your mapping and redirect you to the Attainment module. You can still edit later if needed.</p>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" id="confirmSubmitBtn">
                    <i class="fas fa-check me-1"></i> Confirm & Continue
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteCoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <h6 class="modal-title fw-bold"><i class="fas fa-trash-alt me-2 text-danger"></i>Delete CO?</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="small text-muted mb-0">Are you sure you want to remove <strong id="deleteCoLabel">this CO</strong> and all its mappings?</p>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger btn-sm" id="confirmDeleteCoBtn">
                    <i class="fas fa-trash me-1"></i> Delete
                </button>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
