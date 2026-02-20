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
    <!-- Overview Statistics Cards -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 12px; border-left: 4px solid var(--academic-blue) !important;">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px;">
                        <i class="fas fa-book fs-5" style="color: var(--academic-blue);"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1" style="font-size: 0.8rem; text-transform: uppercase;">Total Subjects</h6>
                        <h3 class="fw-bold mb-0">24</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 12px; border-left: 4px solid #ffc107 !important;">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="bg-warning bg-opacity-10 text-warning rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px;">
                        <i class="fas fa-file-alt fs-5"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1" style="font-size: 0.8rem; text-transform: uppercase;">Pending Syllabus</h6>
                        <h3 class="fw-bold mb-0">8</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 12px; border-left: 4px solid #17a2b8 !important;">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="bg-info bg-opacity-10 text-info rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px;">
                        <i class="fas fa-project-diagram fs-5"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1" style="font-size: 0.8rem; text-transform: uppercase;">Pending Mapping</h6>
                        <h3 class="fw-bold mb-0">12</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 12px; border-left: 4px solid #198754 !important;">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px;">
                        <i class="fas fa-check-circle fs-5"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1" style="font-size: 0.8rem; text-transform: uppercase;">Mapped Subjects</h6>
                        <h3 class="fw-bold mb-0">4</h3>
                    </div>
                </div>
            </div>
        </div>
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
                            </div>
                            
                            <div class="mb-3">
                                <label for="academicYear" class="form-label text-uppercase text-muted mb-1" style="font-size: 0.75rem; font-weight: 600;">Academic Year <span class="text-danger">*</span></label>
                                <select class="form-select bg-light border-0 shadow-none" id="academicYear" required style="border-radius: 8px; padding: 0.6rem 1rem;">
                                    <option value="" selected disabled>Select Academic Year</option>
                                    <option value="2023-2024">2023-2024</option>
                                    <option value="2024-2025">2024-2025</option>
                                </select>
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    const addSubjectForm = document.getElementById('addSubjectForm');
    const saveSubjectBtn = document.getElementById('saveSubjectBtn');

    if (addSubjectForm) {
        const requiredFields = addSubjectForm.querySelectorAll('[required]');

        function checkFormValidity() {
            let isFormValid = true;
            requiredFields.forEach(field => {
                if (!field.value.trim()) isFormValid = false;
            });
            saveSubjectBtn.disabled = !isFormValid;
        }

        requiredFields.forEach(field => {
            field.addEventListener('input', checkFormValidity);
            field.addEventListener('change', checkFormValidity);
        });

        saveSubjectBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (!addSubjectForm.checkValidity()) {
                addSubjectForm.classList.add('was-validated');
                return;
            }

            const spinner = saveSubjectBtn.querySelector('.spinner-border');
            spinner.classList.remove('d-none');
            saveSubjectBtn.disabled = true;

            setTimeout(() => {
                spinner.classList.add('d-none');
                
                const subName = document.getElementById('subjectName').value;
                const subCode = document.getElementById('subjectCode').value;
                
                // Dashboard Dynamic append logic
                const subjectList = document.getElementById('subject-list');
                const addSubjectCard = document.getElementById('add-subject-card'); // Added reference
                
                if (subjectList && addSubjectCard) {
                    const newCol = document.createElement('div');
                    newCol.className = 'col-md-4 mb-3';
                    
                    newCol.innerHTML = `
                        <div class="card selection-card h-100" data-step="2" style="background-color: #f0f8ff; border: 1px solid var(--academic-blue);">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">${subName}</h6>
                                    <small class="text-muted">${subCode}</small>
                                </div>
                                <a href="../syllabus/index.php?subject=${encodeURIComponent(subCode)}&name=${encodeURIComponent(subName)}" class="btn btn-sm btn-primary" style="background-color: var(--academic-blue); border-color: var(--academic-blue);">
                                    Map <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    `;
                    // Insert before the "Add Subject" card block
                    subjectList.insertBefore(newCol, addSubjectCard.parentElement);
                }
                
                // Hide modal gracefully
                const addSubjectModal = document.getElementById('addSubjectModal');
                const modalInstance = bootstrap.Modal.getInstance(addSubjectModal) || new bootstrap.Modal(addSubjectModal);
                modalInstance.hide();
                
                // Show success toast
                const toastElement = document.getElementById('subjectSuccessToast');
                const toast = new bootstrap.Toast(toastElement, { delay: 4000 });
                toast.show();
                
                // Reset form
                addSubjectForm.reset();
                addSubjectForm.classList.remove('was-validated');
                checkFormValidity();
                
            }, 1000);
        });
    }
});
</script>

<?php include '../includes/footer.php'; ?>