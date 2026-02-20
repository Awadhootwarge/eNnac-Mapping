document.addEventListener('DOMContentLoaded', function () {
    console.log('ENnAC Mapping Script Loaded');

    // Sidebar Toggle
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');
    const sidebarCollapse = document.getElementById('sidebarCollapse');

    if (sidebarCollapse) {
        sidebarCollapse.addEventListener('click', function () {
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('expanded');
        });
    }

    // Dummy Data for Schools and Subjects
    const schoolData = {
        'AI': [
            { code: 'CS601', name: 'Machine Learning' },
            { code: 'CS602', name: 'Deep Learning' },
            { code: 'CS603', name: 'Natural Language Processing' },
            { code: 'CS604', name: 'Computer Vision' },
            { code: 'CS605', name: 'Reinforcement Learning' }
        ],
        'MBA': [
            { code: 'MBA101', name: 'Financial Accounting' },
            { code: 'MBA102', name: 'Marketing Management' },
            { code: 'MBA103', name: 'Organizational Behavior' },
            { code: 'MBA104', name: 'Business Statistics' }
        ],
        'SOUND': [
            { code: 'SND101', name: 'Acoustics & Sound' },
            { code: 'SND102', name: 'Digital Audio Workstation' },
            { code: 'SND103', name: 'Sound Engineering' }
        ]
    };

    // Selection Logic: School to Subject (Direct Flow)
    document.addEventListener('click', function (e) {
        const card = e.target.closest('.selection-card');
        if (!card) return;

        const step = card.dataset.step;
        const type = card.dataset.type;
        const value = card.dataset.value;

        // Highlight selection
        const parent = card.closest('.selection-row');
        if (parent) {
            parent.querySelectorAll('.selection-card').forEach(c => c.classList.remove('selected'));
        }
        card.classList.add('selected');

        if (type === 'school') {
            console.log('School selected:', value);
            populateSubjects(value);

            // Show the next step (Subject Selection)
            const nextStep = document.getElementById('step-2');
            if (nextStep) {
                nextStep.classList.remove('d-none');
                setTimeout(() => {
                    nextStep.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 100);
            }
        }
    });

    function populateSubjects(school) {
        const subjectContainer = document.getElementById('subject-list');
        if (!subjectContainer) return;

        const subjects = schoolData[school] || [];
        subjectContainer.innerHTML = '';

        if (subjects.length === 0) {
            subjectContainer.innerHTML = '<div class="col-12 text-center text-muted">No subjects found for this selection.</div>';
            return;
        }

        subjects.forEach(sub => {
            const col = document.createElement('div');
            col.className = 'col-md-4';
            col.innerHTML = `
                <div class="card selection-card h-100" data-step="2">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">${sub.name}</h6>
                            <small class="text-muted">${sub.code}</small>
                        </div>
                        <a href="../syllabus/index.php?subject=${sub.code}&name=${encodeURIComponent(sub.name)}" class="btn btn-sm btn-primary" style="background-color: var(--academic-blue); border-color: var(--academic-blue);">
                            Map <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            `;
            subjectContainer.appendChild(col);
        });

        // Add the "Add Subject" Card
        const addCardCol = document.createElement('div');
        addCardCol.className = 'col-md-4';
        addCardCol.innerHTML = `
            <div id="add-subject-card" class="card selection-card h-100" style="border: 2px dashed #ccc; background-color: #f8f9fa; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#addSubjectModal">
                <div class="card-body d-flex justify-content-center align-items-center flex-column text-muted" style="min-height: 80px;">
                    <i class="fas fa-plus-circle fa-2x mb-2 text-primary"></i>
                    <h6 class="mb-0 fw-bold">Add Subject</h6>
                </div>
            </div>
        `;
        subjectContainer.appendChild(addCardCol);
    }

    // Matrix functionality (Heatmap)
    const updateMatrixColor = (el) => {
        const val = el.value;
        const cell = el.parentElement;
        cell.classList.remove('level-0', 'level-1', 'level-2', 'level-3');
        cell.classList.add(`level-${val}`);
    };

    const matrixSelects = document.querySelectorAll('.matrix-select');
    matrixSelects.forEach(select => {
        updateMatrixColor(select);
        select.addEventListener('change', function () {
            updateMatrixColor(this);
        });
    });

    // Copy Row Mapping
    document.addEventListener('click', function (e) {
        const btn = e.target.closest('.copy-row-btn');
        if (!btn) return;

        const row = btn.closest('tr');
        const values = Array.from(row.querySelectorAll('.matrix-select')).map(s => s.value);
        const nextRow = row.nextElementSibling;
        if (nextRow) {
            const nextSelects = nextRow.querySelectorAll('.matrix-select');
            nextSelects.forEach((s, i) => {
                s.value = values[i];
                updateMatrixColor(s);
            });
            alert('Mapping copied to next row!');
        }
    });

    // Syllabus Page: Toggle Upload vs Paste
    document.addEventListener('click', function (e) {
        if (e.target.id === 'uploadTab') {
            e.preventDefault();
            switchSyllabusTab('upload');
        } else if (e.target.id === 'pasteTab') {
            e.preventDefault();
            switchSyllabusTab('paste');
        }
    });

    function switchSyllabusTab(type) {
        const uTab = document.getElementById('uploadTab');
        const pTab = document.getElementById('pasteTab');
        const uArea = document.getElementById('uploadArea');
        const pArea = document.getElementById('pasteArea');

        if (!uTab || !pTab) return;

        if (type === 'upload') {
            uTab.classList.add('active');
            pTab.classList.remove('active');
            uArea.classList.remove('d-none');
            pArea.classList.add('d-none');
        } else {
            pTab.classList.add('active');
            uTab.classList.remove('active');
            pArea.classList.remove('d-none');
            uArea.classList.add('d-none');
        }
    }

    // Dynamic Title for Syllabus and Mapping Pages
    const subTitle = document.getElementById('dynamicSubjectTitle');
    const urlParams = new URLSearchParams(window.location.search);
    const subName = urlParams.get('name');
    const subCode = urlParams.get('subject');

    if (subName && subCode) {
        // Update Title
        if (subTitle) {
            subTitle.innerText = `${subName} (${subCode})`;
        }

        // Update "Next: CO-PO Mapping" button (has id="nextMappingBtn" on syllabus page)
        const nextMappingBtn = document.getElementById('nextMappingBtn');
        if (nextMappingBtn) {
            nextMappingBtn.href = `../mapping/index.php?subject=${encodeURIComponent(subCode)}&name=${encodeURIComponent(subName)}`;
        }

        // Update "Back to Syllabus" link (on mapping page)
        const backToSyllabusLink = document.querySelector('a[href*="syllabus/index.php"]');
        if (backToSyllabusLink) {
            backToSyllabusLink.href = `../syllabus/index.php?subject=${encodeURIComponent(subCode)}&name=${encodeURIComponent(subName)}`;
        }
    } else if (subTitle) {
        // No subject in URL - show a friendly fallback
        subTitle.innerText = 'No subject selected';
        subTitle.style.color = '#999';
    }
});
