<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-0">Syllabus & Course Outcomes</h2>
            <p class="text-muted mb-0">Current Subject: <span id="dynamicSubjectTitle"
                    class="fw-bold text-primary">Machine Learning (CS601)</span></p>
        </div>
        <a href="../mapping/index.php" class="btn btn-primary">
            Next: CO–PO Mapping <i class="fas fa-arrow-right ms-1"></i>
        </a>
    </div>

    <div class="row">
        <!-- Syllabus Administration Section -->
        <div class="col-md-5 mb-4">
            <div class="card h-100">
                <div class="card-header bg-white">
                    <ul class="nav nav-tabs card-header-tabs" id="syllabusTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="uploadTab" href="#">Upload File</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pasteTab" href="#">Copy-Paste Text</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <!-- Upload Area -->
                    <div id="uploadArea">
                        <label class="form-label">Attached Syllabus (PDF/DOC)</label>
                        <div class="border rounded p-4 bg-light text-center border-dashed mb-3">
                            <i class="fas fa-cloud-upload-alt fa-3x text-primary opacity-50 mb-3"></i>
                            <h6>Drag & Drop or Click to Upload</h6>
                            <p class="text-muted small">Max file size 2MB</p>
                            <input type="file" class="d-none" id="fileInput">
                            <button class="btn btn-sm btn-outline-primary"
                                onclick="document.getElementById('fileInput').click()">Browse Files</button>
                        </div>
                    </div>

                    <!-- Paste Area (Hidden by default) -->
                    <div id="pasteArea" class="d-none">
                        <label class="form-label">Paste Syllabus Content</label>
                        <textarea class="form-control mb-3" rows="8"
                            placeholder="Paste syllabus text here (modules, objectives, etc.)..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Syllabus Version</label>
                        <input type="text" class="form-control form-control-sm" placeholder="e.g. 2024-V1">
                    </div>
                    <button type="button" class="btn btn-primary w-100">Save & Process Syllabus</button>
                </div>
            </div>
        </div>

        <!-- CO Definition Section -->
        <div class="col-md-7 mb-4">
            <div class="card h-100">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Course Outcomes Configuration</h5>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addCOModal">
                        <i class="fas fa-plus me-1"></i> Add New CO
                    </button>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped mb-0" style="font-size: 0.9rem;">
                            <thead class="bg-light">
                                <tr>
                                    <th style="width: 80px;">Code</th>
                                    <th>Description</th>
                                    <th style="width: 100px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold">CO1</td>
                                    <td>Understand the fundamental concepts of machine learning and its paradigms.</td>
                                    <td>
                                        <button class="btn btn-sm btn-link text-primary p-0"><i
                                                class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-link text-danger p-0 ms-2"><i
                                                class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">CO2</td>
                                    <td>Develop skills to implement linear and polynomial regression techniques.</td>
                                    <td>
                                        <button class="btn btn-sm btn-link text-primary p-0"><i
                                                class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-link text-danger p-0 ms-2"><i
                                                class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-white text-end">
                    <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-magic me-1"></i> AI Suggest
                        COs</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add CO Modal -->
<div class="modal fade" id="addCOModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Define New CO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">CO Code</label>
                        <input type="text" class="form-control" placeholder="e.g. CO4">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">CO Description</label>
                        <textarea class="form-control" rows="3" placeholder="Describe the course outcome..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save CO</button>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>