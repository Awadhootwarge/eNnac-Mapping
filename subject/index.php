<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Subject Mapping</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="../dashboard/index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Subject Mapping</li>
            </ol>
        </nav>
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
                        <div class="border rounded p-3" style="max-height: 200px; overflow-y: auto;">
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
</div>

<?php include '../includes/footer.php'; ?>