<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="container-fluid">
    <!-- Breadcrumb -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">CO–PO Mapping</h2>
            <p class="text-muted mb-0">Subject: Machine Learning (CS601) | Semester 6 | School of AI</p>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="../dashboard/index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../subject/index.php">Subject</a></li>
                <li class="breadcrumb-item active">CO–PO Mapping</li>
            </ol>
        </nav>
    </div>

    <!-- ============================================================ -->
    <!-- PART 1: PROGRAM OUTCOMES (PO) SETUP SECTION                  -->
    <!-- ============================================================ -->
    <div class="card section-card mb-4" id="po-setup-section">
        <div class="card-header bg-white d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div class="section-icon me-3">
                    <i class="fas fa-bullseye"></i>
                </div>
                <div>
                    <h5 class="mb-0 fw-bold">Program Outcomes (PO) – As per AICTE Graduate Attributes</h5>
                    <small class="text-muted">12 Standard Program Outcomes aligned with NBA/AICTE guidelines</small>
                </div>
            </div>
            <span class="badge bg-academic-badge">
                <i class="fas fa-shield-alt me-1"></i> AICTE Compliant
            </span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="po-table">
                    <thead>
                        <tr class="po-table-header">
                            <th style="width: 100px;">PO Code</th>
                            <th style="width: 260px;">PO Title (Short Name)</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="po-code-badge">PO1</span></td>
                            <td class="fw-semibold">Engineering Knowledge</td>
                            <td class="po-desc">Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems.</td>
                        </tr>
                        <tr>
                            <td><span class="po-code-badge">PO2</span></td>
                            <td class="fw-semibold">Problem Analysis</td>
                            <td class="po-desc">Identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.</td>
                        </tr>
                        <tr>
                            <td><span class="po-code-badge">PO3</span></td>
                            <td class="fw-semibold">Design/Development of Solutions</td>
                            <td class="po-desc">Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for public health and safety, and cultural, societal, and environmental considerations.</td>
                        </tr>
                        <tr>
                            <td><span class="po-code-badge">PO4</span></td>
                            <td class="fw-semibold">Conduct Investigations</td>
                            <td class="po-desc">Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.</td>
                        </tr>
                        <tr>
                            <td><span class="po-code-badge">PO5</span></td>
                            <td class="fw-semibold">Modern Tool Usage</td>
                            <td class="po-desc">Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.</td>
                        </tr>
                        <tr>
                            <td><span class="po-code-badge">PO6</span></td>
                            <td class="fw-semibold">The Engineer and Society</td>
                            <td class="po-desc">Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal, and cultural issues and the consequent responsibilities relevant to the professional engineering practice.</td>
                        </tr>
                        <tr>
                            <td><span class="po-code-badge">PO7</span></td>
                            <td class="fw-semibold">Environment and Sustainability</td>
                            <td class="po-desc">Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.</td>
                        </tr>
                        <tr>
                            <td><span class="po-code-badge">PO8</span></td>
                            <td class="fw-semibold">Ethics</td>
                            <td class="po-desc">Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice.</td>
                        </tr>
                        <tr>
                            <td><span class="po-code-badge">PO9</span></td>
                            <td class="fw-semibold">Individual and Team Work</td>
                            <td class="po-desc">Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.</td>
                        </tr>
                        <tr>
                            <td><span class="po-code-badge">PO10</span></td>
                            <td class="fw-semibold">Communication</td>
                            <td class="po-desc">Communicate effectively on complex engineering activities with the engineering community and with society at large, such as being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions.</td>
                        </tr>
                        <tr>
                            <td><span class="po-code-badge">PO11</span></td>
                            <td class="fw-semibold">Project Management and Finance</td>
                            <td class="po-desc">Demonstrate knowledge and understanding of the engineering and management principles and apply these to one's own work, as a member and leader in a team, to manage projects and in multidisciplinary environments.</td>
                        </tr>
                        <tr>
                            <td><span class="po-code-badge">PO12</span></td>
                            <td class="fw-semibold">Life-long Learning</td>
                            <td class="po-desc">Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Justification for Program Outcomes -->
    <div class="card section-card mb-5" id="po-justification-section">
        <div class="card-header bg-white d-flex align-items-center">
            <div class="section-icon section-icon-info me-3">
                <i class="fas fa-file-alt"></i>
            </div>
            <div>
                <h5 class="mb-0 fw-bold">Justification for Program Outcomes</h5>
                <small class="text-muted">Academic rationale for PO adoption as per accreditation standards</small>
            </div>
        </div>
        <div class="card-body justification-body">
            <div class="justification-paragraph">
                <h6 class="justification-heading"><i class="fas fa-check-circle me-2 text-success"></i>Importance of the 12 Program Outcomes</h6>
                <p>The 12 Program Outcomes (PO1 to PO12) represent the fundamental graduate attributes that every engineering program must cultivate in its students. These outcomes are derived from the internationally recognized Washington Accord framework and have been adopted by the All India Council for Technical Education (AICTE) and the National Board of Accreditation (NBA) as mandatory criteria for program accreditation. Each PO addresses a distinct dimension of engineering competency — from core technical knowledge and analytical reasoning to ethical awareness, communication skills, and the ability to learn independently throughout one's professional career. Together, they form a holistic framework that ensures graduates are not only technically proficient but also socially responsible, ethically grounded, and professionally adaptable.</p>
            </div>

            <div class="justification-paragraph">
                <h6 class="justification-heading"><i class="fas fa-university me-2 text-primary"></i>Alignment with AICTE & NBA Guidelines</h6>
                <p>The AICTE Model Curriculum and the NBA Self-Assessment Report (SAR) mandate that every undergraduate engineering program must define and assess all 12 graduate attributes. These attributes serve as the foundation for Outcome-Based Education (OBE), ensuring that curriculum design, pedagogical strategy, and assessment methodology are all aligned toward measurable student outcomes. The NBA Tier-I and Tier-II accreditation criteria explicitly require institutions to demonstrate a well-documented CO–PO mapping matrix, evidence of attainment measurement, and continuous improvement through feedback loops. Therefore, the adoption of these 12 POs is not merely a recommendation but a regulatory requirement for quality assurance in engineering education across India.</p>
            </div>

            <div class="justification-paragraph">
                <h6 class="justification-heading"><i class="fas fa-user-graduate me-2 text-warning"></i>Role in Graduate Competency Development</h6>
                <p>Each Program Outcome contributes to a specific facet of graduate readiness. PO1 through PO5 ensure strong technical and analytical capabilities — graduates can apply engineering knowledge, analyze complex problems, design innovative solutions, conduct research, and leverage modern tools. PO6 through PO8 emphasize the societal and ethical dimensions — engineers must understand the impact of their work on society, commit to environmental sustainability, and adhere to professional ethics. PO9 through PO12 develop essential soft skills — effective teamwork, professional communication, project management acumen, and a commitment to continuous learning. This balanced framework ensures that graduates possess the comprehensive skill set needed to address real-world engineering challenges responsibly and competently.</p>
            </div>

            <div class="justification-paragraph">
                <h6 class="justification-heading"><i class="fas fa-industry me-2 text-danger"></i>Industry Relevance & Accreditation Compliance</h6>
                <p>Modern industries demand engineers who are not just specialists in their domain but also collaborative, communicative, and ethically aware professionals. The 12 POs ensure close alignment between academic outcomes and industry expectations. Graduates trained under this framework demonstrate higher employability, adaptability to evolving technologies, and the leadership skills necessary for professional growth. Furthermore, institutions that comply with these accreditation standards—through NBA, NAAC, and international equivalency agreements such as the Washington Accord—gain global recognition for the quality of their programs, enabling their graduates to pursue professional engineering practice and advanced studies worldwide. Rigorous adherence to the PO framework also drives institutional excellence through data-driven assessment, continuous quality improvement, and stakeholder satisfaction, making accreditation compliance both a regulatory necessity and a marker of academic distinction.</p>
            </div>
        </div>
    </div>

    <!-- ============================================================ -->
    <!-- PART 2: CO–PO MAPPING MATRIX (ENHANCED - 12 POs)             -->
    <!-- ============================================================ -->
    <div class="card section-card mb-4" id="mapping-matrix-section">
        <div class="card-header bg-white d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div class="section-icon section-icon-matrix me-3">
                    <i class="fas fa-th"></i>
                </div>
                <div>
                    <h5 class="mb-0 fw-bold">CO–PO Mapping Matrix</h5>
                    <small class="text-muted">Map each Course Outcome to Program Outcomes (0 = No Mapping, 1 = Low, 2 = Medium, 3 = High)</small>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="fas fa-download me-1"></i> Export
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf me-2 text-danger"></i>Export as PDF</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-file-excel me-2 text-success"></i>Export for NAAC</a></li>
                </ul>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered text-center align-middle mb-0" id="co-po-matrix">
                    <thead>
                        <tr class="matrix-header-row">
                            <th rowspan="2" class="align-middle matrix-co-header" style="min-width: 200px;">Course Outcome</th>
                            <th colspan="12" class="matrix-po-group-header">Program Outcomes (PO1 – PO12)</th>
                        </tr>
                        <tr class="matrix-header-row">
                            <th class="matrix-po-header" title="Engineering Knowledge">PO1</th>
                            <th class="matrix-po-header" title="Problem Analysis">PO2</th>
                            <th class="matrix-po-header" title="Design/Development of Solutions">PO3</th>
                            <th class="matrix-po-header" title="Conduct Investigations">PO4</th>
                            <th class="matrix-po-header" title="Modern Tool Usage">PO5</th>
                            <th class="matrix-po-header" title="The Engineer and Society">PO6</th>
                            <th class="matrix-po-header" title="Environment and Sustainability">PO7</th>
                            <th class="matrix-po-header" title="Ethics">PO8</th>
                            <th class="matrix-po-header" title="Individual and Team Work">PO9</th>
                            <th class="matrix-po-header" title="Communication">PO10</th>
                            <th class="matrix-po-header" title="Project Management and Finance">PO11</th>
                            <th class="matrix-po-header" title="Life-long Learning">PO12</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$cos = [
    'CO1' => 'Understand fundamental concepts of machine learning, supervised and unsupervised learning paradigms.',
    'CO2' => 'Apply various machine learning algorithms for classification, regression, and clustering problems.',
    'CO3' => 'Analyze the performance of ML models using appropriate metrics and validation techniques.',
    'CO4' => 'Design and implement neural network architectures for real-world applications.',
    'CO5' => 'Evaluate ethical implications and societal impact of ML-based systems.'
];
foreach ($cos as $coCode => $coDesc):
?>
                        <tr class="matrix-data-row">
                            <td class="text-start ps-3 matrix-co-cell">
                                <span class="co-code-label"><?php echo $coCode; ?></span>
                                <span class="co-desc-text"><?php echo $coDesc; ?></span>
                            </td>
                            <?php for ($i = 1; $i <= 12; $i++): ?>
                            <td class="matrix-cell" id="cell-<?php echo $coCode . '-PO' . $i; ?>">
                                <select class="form-select form-select-sm matrix-select"
                                        data-co="<?php echo $coCode; ?>"
                                        data-po="PO<?php echo $i; ?>"
                                        id="select-<?php echo $coCode . '-PO' . $i; ?>">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                            <?php
    endfor; ?>
                        </tr>
                        <?php
endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr class="matrix-avg-row">
                            <td class="text-start ps-3 fw-bold">Average</td>
                            <?php for ($i = 1; $i <= 12; $i++): ?>
                            <td class="avg-cell" id="avg-PO<?php echo $i; ?>">–</td>
                            <?php
endfor; ?>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white border-top">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-2">
                    <span class="fw-bold small me-2">Legend:</span>
                    <span class="legend-chip level-3-chip">3 – High</span>
                    <span class="legend-chip level-2-chip">2 – Medium</span>
                    <span class="legend-chip level-1-chip">1 – Low</span>
                    <span class="legend-chip level-0-chip">0 – No Mapping</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span class="mapping-counter" id="mappingCounter">
                        <i class="fas fa-info-circle me-1"></i> <span id="mappedCount">0</span> of <span id="totalCells">60</span> cells mapped
                    </span>
                    <button id="saveMappingBtn" class="btn btn-primary btn-save-mapping" disabled>
                        <i class="fas fa-save me-1"></i> Save Mapping
                        <i class="fas fa-arrow-right ms-1"></i>
                    </button>
                </div>
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
                <i class="fas fa-check-circle me-2"></i> Mapping saved successfully! Redirecting...
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>