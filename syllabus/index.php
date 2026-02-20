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
                <h2 class="fw-bold mb-0">Syllabus & Course Outcomes</h2>
            </div>
            <p class="text-muted mb-0 mt-2">Current Subject: <span id="dynamicSubjectTitle" class="fw-bold text-primary">Loading subject...</span></p>
        </div>
        <div class="d-flex align-items-center gap-2">
            <button type="button" class="btn btn-outline-primary px-4 py-2 shadow-sm fw-medium d-flex align-items-center" style="border-radius: 8px; transition: all 0.2s;" data-bs-toggle="modal" data-bs-target="#addSubjectModal">
                <i class="fas fa-plus me-2"></i> Add Subject
            </button>
            <a id="nextMappingBtn" href="../mapping/index.php" class="btn btn-primary px-4 py-2 shadow-sm fw-medium d-flex align-items-center" style="border-radius: 8px; transition: all 0.2s; background-color: var(--academic-blue); border-color: var(--academic-blue);">
                Next: CO–PO Mapping <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
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
                        <label class="form-label fw-medium text-muted mb-2">Attached Syllabus</label>
                        <div class="border rounded p-4 bg-light text-center border-dashed mb-3" style="position: relative; transition: all 0.3s;" id="uploadDropzone">
                            <i class="fas fa-cloud-upload-alt fa-3x text-primary opacity-50 mb-3" id="uploadIcon" style="transition: all 0.3s;"></i>
                            <h6 id="uploadTitle">Drag & Drop or Click to Upload</h6>
                            <p class="text-muted small mb-3" id="uploadSubtitle">Max file size 2MB (.pdf, .doc)</p>
                            <input type="file" class="d-none" id="fileInput" accept=".pdf,.doc,.docx">
                            
                            <div class="d-flex justify-content-center gap-2">
                                <button class="btn btn-sm btn-outline-primary" id="browseFilesBtn" onclick="document.getElementById('fileInput').click()">Browse Files</button>
                                <button class="btn btn-sm btn-info text-white d-none" id="viewSyllabusBtn" data-bs-toggle="modal" data-bs-target="#viewSyllabusModal">
                                    <i class="fas fa-eye me-1"></i> View Syllabus
                                </button>
                            </div>
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
            <div class="modal-footer border-top-0 pt-0 pb-3 px-3">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save CO</button>
            </div>
        </div>
    </div>
</div>

<!-- View Syllabus Modal -->
<div class="modal fade" id="viewSyllabusModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 12px; overflow: hidden; height: 85vh;">
            <div class="modal-header border-bottom px-4 pt-4 pb-3 bg-light">
                <div>
                    <h5 class="modal-title fw-bold" style="color: var(--academic-blue);">
                        <i class="fas fa-file-pdf text-danger me-2"></i> Machine_Learning_Syllabus.pdf
                    </h5>
                    <p class="text-muted small mb-0 mt-1">Uploaded just now • 1.2 MB</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 bg-secondary d-flex align-items-center justify-content-center">
                <!-- PDF Preview Simulation Context -->
                <div class="bg-white p-5 text-start w-100 h-100 overflow-auto shadow" style="max-width: 800px;">
                    <h4 class="text-center fw-bold mb-4">Course Syllabus: CS601 Machine Learning</h4>
                    
                    <h6 class="fw-bold mt-4 text-primary border-bottom pb-2">Module 1: Introduction to Machine Learning</h6>
                    <p class="text-muted small">Definition of Learning Systems, Goals and Applications of Machine Learning, Aspects of developing a learning system: training data, concept representation, function approximation. Basic concepts: hypothesis space, hypothesis evaluation, cross-validation.</p>
                    
                    <h6 class="fw-bold mt-4 text-primary border-bottom pb-2">Module 2: Supervised Learning (Regression/Classification)</h6>
                    <p class="text-muted small">Linear regression (gradient descent, normal equations), Logistic regression, Perceptron. Decision Trees: Decision tree representation, appropriate problems, entropy and information gain. Support Vector Machines: Linear and Non-Linear, Kernel trick.</p>
                    
                    <h6 class="fw-bold mt-4 text-primary border-bottom pb-2">Course Objectives</h6>
                    <ul class="text-muted small">
                         <li>To understand the core principles, algorithms, and applications of machine learning.</li>
                         <li>To evaluate and optimize machine learning models for real-world scenarios.</li>
                         <li>To be able to formulate and solve complex problems using predictive models.</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer border-top px-4 py-3 bg-light d-flex justify-content-between">
                <button type="button" class="btn btn-outline-danger btn-sm" onclick="document.getElementById('fileInput').value = ''; location.reload();">
                    <i class="fas fa-trash me-1"></i> Remove File
                </button>
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-outline-secondary btn-sm">
                        <i class="fas fa-download me-1"></i> Download
                    </button>
                    <button type="button" class="btn btn-primary btn-sm px-4" data-bs-dismiss="modal">Close Viewer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Subject Modal -->
<div class="modal fade" id="addSubjectModal" tabindex="-1" aria-labelledby="addSubjectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 12px; overflow: hidden;">
            <div class="modal-header border-bottom-0 pb-0 pt-4 px-4 bg-white">
                <h4 class="modal-title fw-bold" id="addSubjectModalLabel" style="color: var(--academic-blue);">Create New Subject</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 py-4">
                <form id="addSubjectForm" class="needs-validation" novalidate>
                    <div class="row g-4">
                        <!-- Left Column -->
                        <div class="col-md-6">
                            <h6 class="text-uppercase text-muted mb-3" style="font-size: 0.75rem; letter-spacing: 0.5px; font-weight: 600;">Basic Details</h6>
                            
                            <div class="mb-3">
                                <label for="subjectName" class="form-label text-uppercase text-muted mb-1" style="font-size: 0.75rem; font-weight: 600;">Subject Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control bg-light border-0 shadow-none" id="subjectName" placeholder="e.g. Data Structures" required style="border-radius: 8px; padding: 0.6rem 1rem;">
                                <div class="invalid-feedback" style="font-size: 0.75rem;">Subject Name is required.</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="subjectCode" class="form-label text-uppercase text-muted mb-1" style="font-size: 0.75rem; font-weight: 600;">Subject Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control bg-light border-0 shadow-none" id="subjectCode" placeholder="e.g. CS201" required style="border-radius: 8px; padding: 0.6rem 1rem;">
                                <div class="invalid-feedback" style="font-size: 0.75rem;">Subject Code is required.</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="credits" class="form-label text-uppercase text-muted mb-1" style="font-size: 0.75rem; font-weight: 600;">Credits <span class="text-danger">*</span></label>
                                <input type="number" class="form-control bg-light border-0 shadow-none" id="credits" min="1" max="10" placeholder="e.g. 4" required style="border-radius: 8px; padding: 0.6rem 1rem;">
                                <div class="invalid-feedback" style="font-size: 0.75rem;">Please enter a valid credit value.</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="semester" class="form-label text-uppercase text-muted mb-1" style="font-size: 0.75rem; font-weight: 600;">Semester <span class="text-danger">*</span></label>
                                <select class="form-select bg-light border-0 shadow-none" id="semester" required style="border-radius: 8px; padding: 0.6rem 1rem;">
                                    <option value="" selected disabled>Select Semester</option>
                                    <option value="1">Semester 1</option>
                                    <option value="2">Semester 2</option>
                                    <option value="3">Semester 3</option>
                                    <option value="4">Semester 4</option>
                                    <option value="5">Semester 5</option>
                                    <option value="6">Semester 6</option>
                                    <option value="7">Semester 7</option>
                                    <option value="8">Semester 8</option>
                                </select>
                                <div class="invalid-feedback" style="font-size: 0.75rem;">Please select a semester.</div>
                            </div>
                        </div>
                        
                        <!-- Right Column -->
                        <div class="col-md-6 border-start ps-md-4">
                            <h6 class="text-uppercase text-muted mb-3" style="font-size: 0.75rem; letter-spacing: 0.5px; font-weight: 600;">Academic Details</h6>
                            
                            <div class="mb-3">
                                <label for="regulation" class="form-label text-uppercase text-muted mb-1" style="font-size: 0.75rem; font-weight: 600;">Regulation <span class="text-danger">*</span></label>
                                <select class="form-select bg-light border-0 shadow-none" id="regulation" required style="border-radius: 8px; padding: 0.6rem 1rem;">
                                    <option value="" selected disabled>Select Regulation</option>
                                    <option value="R2020">R-2020</option>
                                    <option value="R2021">R-2021</option>
                                    <option value="R2024">R-2024</option>
                                </select>
                                <div class="invalid-feedback" style="font-size: 0.75rem;">Please select a regulation.</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="academicYear" class="form-label text-uppercase text-muted mb-1" style="font-size: 0.75rem; font-weight: 600;">Academic Year <span class="text-danger">*</span></label>
                                <select class="form-select bg-light border-0 shadow-none" id="academicYear" required style="border-radius: 8px; padding: 0.6rem 1rem;">
                                    <option value="" selected disabled>Select Academic Year</option>
                                    <option value="2023-2024">2023-2024</option>
                                    <option value="2024-2025">2024-2025</option>
                                    <option value="2025-2026">2025-2026</option>
                                </select>
                                <div class="invalid-feedback" style="font-size: 0.75rem;">Please select an academic year.</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="department" class="form-label text-uppercase text-muted mb-1" style="font-size: 0.75rem; font-weight: 600;">Department</label>
                                <select class="form-select bg-light border-0 shadow-none" id="department" style="border-radius: 8px; padding: 0.6rem 1rem;">
                                    <option value="" selected disabled>Select Department</option>
                                    <option value="cse">Computer Science Engineering</option>
                                    <option value="ece">Electronics & Communication</option>
                                    <option value="eee">Electrical Engineering</option>
                                    <option value="me">Mechanical Engineering</option>
                                    <option value="aiml">Artificial Intelligence & Machine Learning (AIML)</option>
                                    <option value="ds">Data Science (DS)</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="facultyAssigned" class="form-label text-uppercase text-muted mb-1" style="font-size: 0.75rem; font-weight: 600;">Faculty Assigned</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0 text-muted" style="border-radius: 8px 0 0 8px;"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control bg-light border-0 shadow-none" id="facultyAssigned" placeholder="Enter faculty name..." style="border-radius: 0 8px 8px 0; padding: 0.6rem 1rem;">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-top-0 pt-0 pb-4 px-4 bg-white d-flex justify-content-end">
                <button type="button" class="btn btn-outline-secondary px-4 py-2 me-2" data-bs-dismiss="modal" style="border-radius: 8px; font-weight: 500;">Cancel</button>
                <button type="button" class="btn btn-primary px-4 py-2" id="saveSubjectBtn" style="border-radius: 8px; font-weight: 500; transition: all 0.2s; background-color: var(--academic-blue); border-color: var(--academic-blue);" disabled>
                    <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true"></span>
                    Save Subject
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Toast Container -->
<div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1080;">
    <div id="subjectSuccessToast" class="toast align-items-center text-white bg-success border-0 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true" style="border-radius: 8px;">
        <div class="d-flex">
            <div class="toast-body fw-medium d-flex align-items-center">
                <i class="fas fa-check-circle me-2 fs-5"></i>
                Subject created successfully!
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<!-- Scripts for Add Subject Functionality -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // ---------------------------------------------------------------------------------
    // SYLLABUS PDF PREVIEW & UPLOAD SIMULATION
    // ---------------------------------------------------------------------------------
    const fileInput = document.getElementById('fileInput');
    const viewSyllabusBtn = document.getElementById('viewSyllabusBtn');
    const browseFilesBtn = document.getElementById('browseFilesBtn');
    const uploadTitle = document.getElementById('uploadTitle');
    const uploadSubtitle = document.getElementById('uploadSubtitle');
    const uploadIcon = document.getElementById('uploadIcon');
    const uploadDropzone = document.getElementById('uploadDropzone');

    if (fileInput) {
        fileInput.addEventListener('change', function(e) {
            if (e.target.files.length > 0) {
                const fileName = e.target.files[0].name;
                
                // Simulate Upload Success UX
                uploadDropzone.classList.replace('border-dashed', 'border');
                uploadDropzone.style.borderColor = 'var(--academic-blue)';
                uploadDropzone.style.backgroundColor = '#f0f8ff'; // light blue tint
                
                uploadIcon.className = 'fas fa-file-pdf fa-3x text-danger mb-3';
                uploadIcon.style.opacity = '1';
                
                uploadTitle.textContent = fileName;
                uploadTitle.className = 'text-primary fw-bold';
                
                uploadSubtitle.textContent = 'Upload complete • Ready to process';
                uploadSubtitle.className = 'text-success small mb-3 fw-medium';
                
                // Reveal View Button
                viewSyllabusBtn.classList.remove('d-none');
                browseFilesBtn.textContent = 'Replace File';
                browseFilesBtn.classList.replace('btn-outline-primary', 'btn-outline-secondary');
            }
        });
    }

    const addSubjectForm = document.getElementById('addSubjectForm');
    const saveSubjectBtn = document.getElementById('saveSubjectBtn');

    // ---------------------------------------------------------------------------------
    // FORM VALIDATION & DYNAMIC CONTENT LOADING ON SAVE
    // ---------------------------------------------------------------------------------
    if (addSubjectForm) {
        const requiredFields = addSubjectForm.querySelectorAll('[required]');

        // Validate form to enable/disable Save button
        function checkFormValidity() {
            let isFormValid = true;
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isFormValid = false;
                }
            });
            saveSubjectBtn.disabled = !isFormValid;
        }

        // Attach validation check to required inputs
        requiredFields.forEach(field => {
            field.addEventListener('input', checkFormValidity);
            field.addEventListener('change', checkFormValidity);
        });

        // Handle Save Button click
        saveSubjectBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Show validation state via Bootstrap 'was-validated' API
            if (!addSubjectForm.checkValidity()) {
                addSubjectForm.classList.add('was-validated');
                return;
            }

            // Show spinner and disable button
            const spinner = saveSubjectBtn.querySelector('.spinner-border');
            spinner.classList.remove('d-none');
            saveSubjectBtn.disabled = true;

            // Simulate save process
            setTimeout(() => {
                spinner.classList.add('d-none');
                
                // ---------------------------------------------------------
                // DYNAMIC CONTENT LOADING (Subject Update)
                // ---------------------------------------------------------
                const subName = document.getElementById('subjectName').value;
                const subCode = document.getElementById('subjectCode').value;
                
                // Update Syllabus Page Subject Title dynamically
                const dynamicSubjectTitle = document.getElementById('dynamicSubjectTitle');
                if (dynamicSubjectTitle) {
                    dynamicSubjectTitle.textContent = `${subName} (${subCode})`;
                    dynamicSubjectTitle.style.transition = 'color 0.5s ease';
                    dynamicSubjectTitle.style.setProperty('color', '#198754', 'important'); // Success Green
                    
                    setTimeout(() => {
                        dynamicSubjectTitle.style.color = ''; 
                    }, 3000);
                }
                
                // Hide modal gracefully
                const addSubjectModal = document.getElementById('addSubjectModal');
                const modalInstance = bootstrap.Modal.getInstance(addSubjectModal) || new bootstrap.Modal(addSubjectModal);
                modalInstance.hide();
                
                // Show toast
                const toastElement = document.getElementById('subjectSuccessToast');
                const toast = new bootstrap.Toast(toastElement, { delay: 4000 });
                toast.show();
                
                // Reset form state
                addSubjectForm.reset();
                addSubjectForm.classList.remove('was-validated');
                facultySelect.innerHTML = '<option value="" selected disabled>Search Faculty...</option>';
                checkFormValidity();
                
            }, 1200);
        });
    }
});
</script>

<?php include '../includes/footer.php'; ?>