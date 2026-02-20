document.addEventListener('DOMContentLoaded', function () {
    console.log('ENnAC Mapping Script Loaded');

    // ========================================
    // SIDEBAR TOGGLE
    // ========================================
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');
    const sidebarCollapse = document.getElementById('sidebarCollapse');

    if (sidebarCollapse) {
        sidebarCollapse.addEventListener('click', function () {
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('expanded');
        });
    }

    // ========================================
    // DATA STORES
    // ========================================
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

    const programOutcomes = {
        'PO1': { title: 'Engineering Knowledge', short: 'Engg. Knowledge' },
        'PO2': { title: 'Problem Analysis', short: 'Problem Analysis' },
        'PO3': { title: 'Design/Development of Solutions', short: 'Design/Dev.' },
        'PO4': { title: 'Conduct Investigations', short: 'Investigations' },
        'PO5': { title: 'Modern Tool Usage', short: 'Modern Tools' },
        'PO6': { title: 'The Engineer and Society', short: 'Engg. & Society' },
        'PO7': { title: 'Environment and Sustainability', short: 'Env. & Sustain.' },
        'PO8': { title: 'Ethics', short: 'Ethics' },
        'PO9': { title: 'Individual and Team Work', short: 'Teamwork' },
        'PO10': { title: 'Communication', short: 'Communication' },
        'PO12': { title: 'Life-long Learning', short: 'Lifelong Learn.' },
        'PSO1': { title: 'Program Specific Outcome 1', short: 'PSO 1' },
        'PSO2': { title: 'Program Specific Outcome 2', short: 'PSO 2' },
        'PSO3': { title: 'Program Specific Outcome 3', short: 'PSO 3' },
        'PSO4': { title: 'Program Specific Outcome 4', short: 'PSO 4' }
    };

    const courseOutcomes = {
        'CO1': 'Understand fundamental concepts of machine learning, supervised and unsupervised learning paradigms.',
        'CO2': 'Apply various machine learning algorithms for classification, regression, and clustering problems.',
        'CO3': 'Analyze the performance of ML models using appropriate metrics and validation techniques.',
        'CO4': 'Design and implement neural network architectures for real-world applications.',
        'CO5': 'Evaluate ethical implications and societal impact of ML-based systems.'
    };

    // ========================================
    // DASHBOARD: SELECTION LOGIC
    // ========================================
    document.addEventListener('click', function (e) {
        const card = e.target.closest('.selection-card');
        if (!card) return;

        const type = card.dataset.type;
        const value = card.dataset.value;

        const parent = card.closest('.selection-row');
        if (parent) {
            parent.querySelectorAll('.selection-card').forEach(c => c.classList.remove('selected'));
        }
        card.classList.add('selected');

        if (type === 'school') {
            populateSubjects(value);
            const nextStep = document.getElementById('step-2');
            if (nextStep) {
                nextStep.classList.remove('d-none');
                setTimeout(() => nextStep.scrollIntoView({ behavior: 'smooth', block: 'nearest' }), 100);
            }
        }
    });

    function populateSubjects(school) {
        const subjectContainer = document.getElementById('subject-list');
        if (!subjectContainer) return;
        const subjects = schoolData[school] || [];
        subjectContainer.innerHTML = '';
        if (subjects.length === 0) {
            subjectContainer.innerHTML = '<div class="col-12 text-center text-muted">No subjects found.</div>';
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
                </div>`;
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

    // ========================================
    // MAPPING PAGE: MATRIX FUNCTIONALITY
    // ========================================
    const matrixTable = document.getElementById('co-po-matrix');
    if (matrixTable) initializeMatrix();

    function initializeMatrix() {
        const matrixSelects = document.querySelectorAll('.matrix-select');
        const totalCellsEl = document.getElementById('totalCells');
        if (totalCellsEl) totalCellsEl.textContent = matrixSelects.length;

        const savedMapping = JSON.parse(localStorage.getItem('coPoMapping') || '{}');

        matrixSelects.forEach(select => {
            const co = select.dataset.co;
            const po = select.dataset.po;
            const key = `${co}-${po}`;
            if (savedMapping[key] !== undefined) select.value = savedMapping[key];
            updateMatrixColor(select);
            select.addEventListener('change', function () {
                updateMatrixColor(this);
                updateMappingCounter();
                updateAverages();
                updateSaveButtonState();
            });
        });

        updateMappingCounter();
        updateAverages();
        updateSaveButtonState();

        const saveMappingBtn = document.getElementById('saveMappingBtn');
        if (saveMappingBtn) {
            saveMappingBtn.addEventListener('click', saveMappingData);
        }
    }

    function updateMatrixColor(el) {
        const val = el.value;
        const cell = el.closest('.matrix-cell');
        if (!cell) return;
        cell.classList.remove('level-0', 'level-1', 'level-2', 'level-3');
        cell.classList.add(`level-${val}`);
    }

    function updateMappingCounter() {
        const selects = document.querySelectorAll('.matrix-select');
        const mapped = Array.from(selects).filter(s => parseInt(s.value) > 0).length;
        const el = document.getElementById('mappedCount');
        if (el) el.textContent = mapped;
    }

    function updateAverages() {
        Object.keys(programOutcomes).forEach(poCode => {
            const poSelects = document.querySelectorAll(`[data-po="${poCode}"].matrix-select`);
            if (poSelects.length === 0) return;
            let sum = 0, count = 0;
            poSelects.forEach(s => { const v = parseInt(s.value); if (v > 0) { sum += v; count++; } });
            const avgCell = document.getElementById(`avg-${poCode}`);
            if (avgCell) {
                avgCell.textContent = count > 0 ? (sum / count).toFixed(1) : '–';
                avgCell.style.opacity = count > 0 ? '1' : '0.4';
            }
        });
    }

    function updateSaveButtonState() {
        const selects = document.querySelectorAll('.matrix-select');
        const mapped = Array.from(selects).filter(s => parseInt(s.value) > 0).length;
        const btn = document.getElementById('saveMappingBtn');
        if (btn) {
            btn.disabled = mapped === 0;
            if (mapped > 0) btn.classList.add('pulse-glow');
            else btn.classList.remove('pulse-glow');
        }
    }

    function saveMappingData() {
        const selects = document.querySelectorAll('.matrix-select');
        const mappingData = {};
        selects.forEach(s => { mappingData[`${s.dataset.co}-${s.dataset.po}`] = s.value; });
        localStorage.setItem('coPoMapping', JSON.stringify(mappingData));

        const toastEl = document.getElementById('successToast');
        if (toastEl) { const t = new bootstrap.Toast(toastEl, { delay: 1800 }); t.show(); }
        setTimeout(() => { window.location.href = 'details.php'; }, 2000);
    }

    // ========================================
    // STRICT HTML TABLE (DETAILS PAGE)
    // ========================================
    const strictTbody = document.getElementById('strict-mapping-tbody');

    if (strictTbody) {
        initializeStrictDetailsPage();
    }

    function initializeStrictDetailsPage() {
        const savedMapping = JSON.parse(localStorage.getItem('coPoMapping') || '{}');
        const savedNotes = JSON.parse(localStorage.getItem('coPoNotes') || '{}');
        const coKeys = Object.keys(courseOutcomes);
        const poKeys = Object.keys(programOutcomes);
        let html = '';

        coKeys.forEach(coCode => {
            const poCount = poKeys.length;

            poKeys.forEach((poCode, idx) => {
                const isFirst = (idx === 0);
                const level = parseInt(savedMapping[`${coCode}-${poCode}`] || '0');
                const note = savedNotes[`${coCode}-${poCode}`] || '';

                html += `<tr style="border-bottom: 1px solid black;">`;

                // CO cell with rowspan (only on first PO row)
                if (isFirst) {
                    html += `
                        <td rowspan="${poCount}" style="border: 1px solid black; padding: 12px; vertical-align: top; background-color: white;">
                            <strong>${coCode}</strong><br>
                            <span style="font-size: 0.85em; color: #555;">${escapeHtml(courseOutcomes[coCode])}</span>
                        </td>`;
                }

                // PO Code
                html += `
                    <td style="border: 1px solid black; padding: 12px; text-align: center; vertical-align: middle; background-color: white;">
                        <strong style="color: #1a237e;">${poCode}</strong>
                        ${level > 0 ? `<br><small class="text-muted">Level ${level}</small>` : ''}
                    </td>`;

                // Justification Textbox
                html += `
                    <td style="border: 1px solid black; padding: 12px; vertical-align: middle; background-color: white;">
                        <textarea class="form-control strict-po-note-input"
                                  data-co="${coCode}" data-po="${poCode}"
                                  rows="2" style="width: 100%; border: 1px solid #999; border-radius: 4px; padding: 8px; font-size: 0.9em; resize: vertical;">${escapeHtml(note)}</textarea>
                    </td>`;

                html += `</tr>`;
            });
        });

        strictTbody.innerHTML = html;

        // Auto-save typing
        strictTbody.addEventListener('input', function (e) {
            if (e.target.classList.contains('strict-po-note-input')) {
                const coCode = e.target.dataset.co;
                const poCode = e.target.dataset.po;
                const currentNotes = JSON.parse(localStorage.getItem('coPoNotes') || '{}');
                currentNotes[`${coCode}-${poCode}`] = e.target.value;
                localStorage.setItem('coPoNotes', JSON.stringify(currentNotes));
            }
        });

        // Submit All button (existing HTML ID)
        const submitAllBtn = document.getElementById('submitAllBtn');
        if (submitAllBtn) {
            submitAllBtn.addEventListener('click', function () {
                const modal = new bootstrap.Modal(document.getElementById('confirmSubmitModal'));
                modal.show();
            });
        }

        const confirmSubmitBtn = document.getElementById('confirmSubmitBtn');
        if (confirmSubmitBtn) {
            confirmSubmitBtn.addEventListener('click', function () {
                bootstrap.Modal.getInstance(document.getElementById('confirmSubmitModal')).hide();
                showToast('All mappings submitted! Redirecting to Attainment...', 'success');
                setTimeout(() => { window.location.href = '../attainment/index.php'; }, 2200);
            });
        }

        recalculateAllStats();
    }

    function escapeHtml(str) {
        if (!str) return '';
        const div = document.createElement('div');
        div.appendChild(document.createTextNode(str));
        return div.innerHTML;
    }

    // ========================================
    // STATS RECALCULATION
    // ========================================
    function recalculateAllStats() {
        // Simple recalculation based on mapping
        const savedMapping = JSON.parse(localStorage.getItem('coPoMapping') || '{}');
        let totalMapped = 0, totalSum = 0, totalNonZero = 0;
        const totalCOs = Object.keys(courseOutcomes).length;
        const poCount = Object.keys(programOutcomes).length;
        const totalPossible = totalCOs * poCount;

        Object.values(savedMapping).forEach(v => {
            const num = parseInt(v);
            if (num > 0) {
                totalMapped++;
                totalSum += num;
                totalNonZero++;
            }
        });

        const el = (id) => document.getElementById(id);
        if (el('statTotalCOs')) el('statTotalCOs').textContent = totalCOs;
        if (el('statMappedCells')) el('statMappedCells').textContent = totalMapped;
        if (el('statAvgLevel')) el('statAvgLevel').textContent = totalNonZero > 0 ? (totalSum / totalNonZero).toFixed(1) : '–';
        if (el('statCoverage')) el('statCoverage').textContent = totalPossible > 0 ? Math.round((totalMapped / totalPossible) * 100) + '%' : '0%';
    }

    // ========================================
    // TOAST UTILITY
    // ========================================
    function showToast(message, type) {
        const toastEl = document.getElementById('updateToast');
        if (!toastEl) return;
        const body = document.getElementById('toastMessage');
        if (body) {
            const icon = type === 'success' ? 'check-circle' : 'info-circle';
            body.innerHTML = `<i class="fas fa-${icon} me-2"></i> ${message}`;
        }
        toastEl.classList.remove('bg-success', 'bg-danger', 'bg-warning');
        toastEl.classList.add(`bg-${type === 'success' ? 'success' : 'primary'}`);
        const bsToast = new bootstrap.Toast(toastEl, { delay: 2500 });
        bsToast.show();
    }

    // ========================================
    // SYLLABUS PAGE: TAB TOGGLE
    // ========================================
    document.addEventListener('click', function (e) {
        if (e.target.id === 'uploadTab') { e.preventDefault(); switchSyllabusTab('upload'); }
        else if (e.target.id === 'pasteTab') { e.preventDefault(); switchSyllabusTab('paste'); }
    });

    function switchSyllabusTab(type) {
        const uTab = document.getElementById('uploadTab'), pTab = document.getElementById('pasteTab');
        const uArea = document.getElementById('uploadArea'), pArea = document.getElementById('pasteArea');
        if (!uTab || !pTab) return;
        if (type === 'upload') { uTab.classList.add('active'); pTab.classList.remove('active'); uArea.classList.remove('d-none'); pArea.classList.add('d-none'); }
        else { pTab.classList.add('active'); uTab.classList.remove('active'); pArea.classList.remove('d-none'); uArea.classList.add('d-none'); }
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
