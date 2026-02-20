<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="container-fluid">
<div class="d-flex justify-content-between align-items-center mb-4">
    <div class="d-flex align-items-center">
        <a href="../cohort/index.php" class="btn btn-outline-secondary btn-sm me-3 px-3 py-2 fw-medium ghost-btn text-decoration-none" style="border-color: #ddd; color: #555; border-radius: 8px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); transition: all 0.2s;">
            <i class="fas fa-arrow-left me-2"></i> Back to Cohort
        </a>
        <h2 class="fw-bold mb-0">Subject Mapping</h2>
    </div>
    <button type="button" class="btn btn-primary px-4 py-2 shadow-sm fw-medium d-flex align-items-center" style="border-radius: 8px; transition: all 0.2s; background-color: var(--academic-blue); border-color: var(--academic-blue);" data-bs-toggle="modal" data-bs-target="#addSubjectModal">
        <i class="fas fa-plus me-2"></i> Add Subject
    </button>
</div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Assign Subjects</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Select Cohort</label>
                        <select class="form-select">
                            <option>2024-2025 | CSE | Sem 6</option>
                            <option>2024-2025 | CSE | Sem 4</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Subjects</label>
                        <div class="border rounded p-3" id="subjectCheckboxList" style="max-height: 200px; overflow-y: auto;">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="sub1">
                                <label class="form-check-label" for="sub1">Machine Learning (CS601)</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="sub2">
                                <label class="form-check-label" for="sub2">Computer Networks (CS602)</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="sub3">
                                <label class="form-check-label" for="sub3">Software Engineering (CS603)</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="sub4">
                                <label class="form-check-label" for="sub4">Compiler Design (CS604)</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="sub5">
                                <label class="form-check-label" for="sub5">Artificial Intelligence (CS605)</label>
                            </div>
                        </div>
                    </div>
                    <button id="assignSubjectBtn" class="btn btn-primary w-100">Assign Subjects</button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Mapped Subjects</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Subject Code</th>
                                    <th>Subject Name</th>
                                    <th>Cohort</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>CS601</td>
                                    <td>Machine Learning</td>
                                    <td>CSE | Sem 6</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-unlink"></i>
                                            Unmap</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>CS602</td>
                                    <td>Computer Networks</td>
                                    <td>CSE | Sem 6</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-unlink"></i>
                                            Unmap</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>CS401</td>
                                    <td>Database Systems</td>
                                    <td>CSE | Sem 4</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-unlink"></i>
                                            Unmap</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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

// Scripts for Add Subject Functionality
<script>
document.addEventListener('DOMContentLoaded', function () {
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
                // DYNAMIC CONTENT LOADING (Subject Injection)
                // ---------------------------------------------------------
                const subName = document.getElementById('subjectName').value;
                const subCode = document.getElementById('subjectCode').value;
                
                // Update Subject Mapping Checkbox List dynamically
                const subjectCheckboxList = document.getElementById('subjectCheckboxList');
                if (subjectCheckboxList) {
                    const newId = 'sub_dyn_' + Date.now();
                    const newDiv = document.createElement('div');
                    newDiv.className = 'form-check mb-2 p-2 rounded';
                    newDiv.style.backgroundColor = '#e8f4fd'; // Highlight color representing academic-light
                    newDiv.style.transition = 'all 0.8s ease';
                    newDiv.style.opacity = '0';
                    newDiv.innerHTML = `
                        <input class="form-check-input" type="checkbox" id="${newId}" checked>
                        <label class="form-check-label fw-bold" for="${newId}" style="color: var(--academic-blue);">${subName} (${subCode}) <span class="badge ms-2" style="background-color: var(--academic-blue); font-size: 0.65rem;">NEW</span></label>
                    `;
                    subjectCheckboxList.prepend(newDiv);
                    
                    // Trigger reflow for animation
                    void newDiv.offsetWidth;
                    newDiv.style.opacity = '1';
                    
                    // Fade out background highlight after 3 seconds
                    setTimeout(() => {
                        newDiv.style.backgroundColor = 'transparent';
                    }, 3000);
                }
                
                // Hide modal gracefully
                const addSubjectModal = document.getElementById('addSubjectModal');
                const modalInstance = bootstrap.Modal.getInstance(addSubjectModal) || new bootstrap.Modal(addSubjectModal);
                modalInstance.hide();
                
                // Show success toast
                const toastElement = document.getElementById('subjectSuccessToast');
                const toast = new bootstrap.Toast(toastElement, { delay: 4000 });
                toast.show();
                
                // Reset form state
                addSubjectForm.reset();
                addSubjectForm.classList.remove('was-validated');
                facultySelect.innerHTML = '<option value="" selected disabled>Search Faculty...</option>'; // Reset dependent dropdown
                checkFormValidity();
                
            }, 1200);
        });
    }
});
</script>

<?php include '../includes/footer.php'; ?>