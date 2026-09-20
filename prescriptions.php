<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
  <title>Clinic Management System - Prescriptions | Cuba Premium Admin</title>
  
  <!-- Slick Slider -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <!-- Select Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplebar/6.2.5/simplebar.min.css">
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/select.bootstrap5.css">
  <!-- Plugins css Ends-->
  <!-- Icofont -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icofont/1.0.1/icofont.min.css">
  <!-- Themify Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.2/css/themify-icons.css">
  <!-- Flag Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
  <!-- Feather Icons (JS required) -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  
  <style>
    .prescription-container {
      background: white;
      border-radius: 15px;
      padding: 20px;
      margin-top: 25px;
      box-shadow: 0 0 20px rgba(0, 82, 165, 0.08);
    }
    .add-prescription-btn {
      margin-bottom: 20px;
      float: right;
      background: linear-gradient(135deg, #0052a5 0%, #003d7a 100%);
      border: none;
      padding: 10px 25px;
    }
    .modal-header {
      background: linear-gradient(135deg, #0052a5 0%, #003d7a 100%);
      color: white;
      border-bottom: none;
      border-radius: 10px 10px 0 0;
    }
    .modal-header .btn-close {
      filter: brightness(0) invert(1);
    }
    .form-label {
      font-weight: 600;
      color: #2c3e50;
      margin-bottom: 8px;
    }
    .prescription-table th {
      background-color: #f8fafc;
      font-weight: 700;
      color: #1e293b;
      border-bottom: 2px solid #e2e8f0;
    }
    .prescription-table td {
  white-space: nowrap;
}
    .badge-status {
      padding: 5px 12px;
      border-radius: 20px;
      font-size: 11px;
      font-weight: 600;
    }
    .badge-active { background: #dcfce7; color: #16a34a; }
    .badge-completed { background: #dbeafe; color: #2563eb; }
    .badge-expired { background: #fee2e2; color: #dc2626; }
    .medicine-list {
      max-width: 250px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .print-btn {
      background: #6b7280;
      border-color: #6b7280;
    }
    .print-btn:hover {
      background: #4b5563;
    }
    .stats-card {
      background: white;
      border-radius: 12px;
      padding: 15px;
      margin-bottom: 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.04);
      border: 1px solid #f0f2f5;
    }
    .stats-icon {
      width: 45px;
      height: 45px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
    }
    .stats-value {
      font-size: 22px;
      font-weight: 700;
      color: #1e293b;
    }
    .stats-title {
      font-size: 11px;
      color: #64748b;
      text-transform: uppercase;
    }
  </style>
</head>

<body onload="startTime()">
  <!-- loader starts-->
  <div class="loader-wrapper">
    <div class="loader-index"> <span></span></div>
    <svg>
      <defs></defs>
      <filter id="goo">
        <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
        <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
      </filter>
    </svg>
  </div>
  <!-- loader ends-->
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include 'navbar/header.php'; ?>

    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <?php include 'navbar/sidebar.php'; ?>

      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-sm-6"><h3><i class="fas fa-prescription-bottle me-2"></i>Prescription Management</h3></div>
              <div class="col-sm-6"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="index.html">Home</a></li><li class="breadcrumb-item active">Prescriptions</li></ol></div>
            </div>
          </div>
        </div>
        
        <div class="container-fluid">
          <!-- Stats Cards -->
          <div class="row mb-4">
            <div class="col-md-3"><div class="stats-card"><div class="d-flex justify-content-between"><div><div class="stats-title">Total Prescriptions</div><div class="stats-value" id="totalPrescriptions">0</div></div><div class="stats-icon" style="background:#e0f2fe;color:#0284c7;"><i class="fas fa-prescription"></i></div></div></div></div>
            <div class="col-md-3"><div class="stats-card"><div class="d-flex justify-content-between"><div><div class="stats-title">Active</div><div class="stats-value" id="activePrescriptions">0</div></div><div class="stats-icon" style="background:#dcfce7;color:#16a34a;"><i class="fas fa-check-circle"></i></div></div></div></div>
            <div class="col-md-3"><div class="stats-card"><div class="d-flex justify-content-between"><div><div class="stats-title">Completed</div><div class="stats-value" id="completedPrescriptions">0</div></div><div class="stats-icon" style="background:#dbeafe;color:#2563eb;"><i class="fas fa-clipboard-list"></i></div></div></div></div>
            <div class="col-md-3"><div class="stats-card"><div class="d-flex justify-content-between"><div><div class="stats-title">Today's Prescriptions</div><div class="stats-value" id="todayPrescriptions">0</div></div><div class="stats-icon" style="background:#fef3c7;color:#f59e0b;"><i class="fas fa-calendar-day"></i></div></div></div></div>
          </div>
          
          <!-- Add Prescription Button -->
            <div class="row">
            <div class="col-12">
              <button class="btn btn-primary add-doctor-btn" data-bs-toggle="modal" data-bs-target="#addPrescriptionModal">
                <i class="fa-solid fa-plus me-2"></i> Write New Prescription
            </div>

          <!-- Prescriptions Table -->
          <div class="prescription-container">
            <div class="table-responsive">
             <table id="prescriptionsTable" class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Patient</th>
      <th>Doctor</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody></tbody> <!-- MUST BE EMPTY -->
</table>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer"><div class="container-fluid"><div class="row"><div class="col-md-12 footer-copyright text-center"><p class="mb-0">Copyright © 2024 Made By Junaid Ali | Clinic Management System</p></div></div></div></footer>
    </div>
  </div>

<div class="modal fade" id="addPrescriptionModal" tabindex="-1" aria-labelledby="addPrescriptionModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg rounded-4">

      <!-- HEADER -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="addPrescriptionModalLabel">
          <i class="fas fa-prescription-bottle me-2"></i>
          Write Prescription
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- BODY -->
      <div class="modal-body p-4">

        <form id="prescriptionForm">
          <input type="hidden" id="editId">

          <div class="row g-3">

            <!-- Patient -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Select Patient *</label>
              <select class="form-select" id="patientId" required>
                <option value="">Choose Patient...</option>
              </select>
            </div>

            <!-- Doctor -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Select Doctor *</label>
              <select class="form-select" id="doctorId" required>
                <option value="">Choose Doctor...</option>
              </select>
            </div>

            <!-- Prescription Date -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Prescription Date *</label>
              <input type="date" class="form-control" id="prescriptionDate" required>
            </div>

            <!-- Follow Up -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Follow Up Date</label>
              <input type="date" class="form-control" id="followUpDate">
            </div>

            <!-- Symptoms -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Symptoms</label>
              <textarea class="form-control" id="symptoms" rows="2" placeholder="Patient symptoms..."></textarea>
            </div>

            <!-- Diagnosis -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Diagnosis *</label>
              <textarea class="form-control" id="diagnosis" rows="2" required placeholder="Enter diagnosis..."></textarea>
            </div>

            <!-- Medicines (full width for readability) -->
            <div class="col-md-12">
              <label class="form-label fw-semibold">Medicines *</label>
              <textarea class="form-control" id="medicines" rows="3" required placeholder="1. Medicine - Dose - Timing"></textarea>
            </div>

            <!-- Dosage -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Dosage Instructions</label>
              <input type="text" class="form-control" id="dosage" placeholder="e.g. After meals">
            </div>

            <!-- Duration -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Duration</label>
              <input type="text" class="form-control" id="duration" placeholder="e.g. 7 days">
            </div>

            <!-- Instructions -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Additional Instructions</label>
              <input type="text" class="form-control" id="instructions" placeholder="Any special instruction">
            </div>

            <!-- Status -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Status</label>
              <select class="form-select" id="status">
                <option value="Active">Active</option>
                <option value="Completed">Completed</option>
                <option value="Expired">Expired</option>
              </select>
            </div>

          </div>
        </form>

      </div>

      <!-- FOOTER -->
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Cancel
        </button>
        <button type="button" class="btn btn-primary px-4" id="savePrescriptionBtn">
          Save Prescription
        </button>
      </div>

    </div>
  </div>
</div>

  <!-- View Prescription Modal -->
  <div class="modal fade" id="viewPrescriptionModal" tabindex="-1" aria-labelledby="viewPrescriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
          <h5 class="modal-title"><i class="fas fa-prescription-bottle me-2"></i>Prescription Details</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body" id="prescriptionViewContent"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" onclick="printPrescription()"><i class="fas fa-print me-1"></i> Print</button>
        </div>
      </div>
    </div>
  </div>

  <div class="toast-container"></div>

  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
  
  <script>
    const API_URL = 'api/prescriptions.php';
    let prescriptionsTable = null;
    let doctorsList = [];
    let patientsList = [];
    let currentViewPrescription = null;

    function showToast(message, type = 'success') {
      const bgColor = type === 'success' ? '#10b981' : '#ef4444';
      const icon = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle';
      const toastHtml = `<div class="toast align-items-center text-white border-0 fade show" role="alert" style="background-color: ${bgColor}; border-radius: 10px; position: fixed; top: 20px; right: 20px; z-index: 9999;" data-bs-autohide="true" data-bs-delay="3000"><div class="d-flex"><div class="toast-body"><i class="fas ${icon} me-2"></i> ${message}</div><button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button></div></div>`;
      $('body').append(toastHtml);
      const toastEl = $('.toast').last();
      const toast = new bootstrap.Toast(toastEl[0], { autohide: true, delay: 3000 });
      toast.show();
      setTimeout(() => toastEl.remove(), 3500);
    }

    async function fetchDoctors() {
      try {
        const response = await fetch('api/doctors.php');
        const data = await response.json();
        doctorsList = Array.isArray(data) ? data : (data.data || []);
        const select = $('#doctorId');
        select.empty().append('<option value="">Choose Doctor...</option>');
        doctorsList.forEach(doc => { select.append(`<option value="${doc.id}">${doc.doctor_name} (${doc.specialization})</option>`); });
      } catch(e) { console.error(e); }
    }

    async function fetchPatients() {
      try {
        const response = await fetch('api/patients.php');
        const data = await response.json();
        patientsList = Array.isArray(data) ? data : (data.data || []);
        const select = $('#patientId');
        select.empty().append('<option value="">Choose Patient...</option>');
        patientsList.forEach(pat => { select.append(`<option value="${pat.id}">${pat.patient_name} (${pat.phone})</option>`); });
      } catch(e) { console.error(e); }
    }

    async function fetchPrescriptions() {
      try {
const response = await fetch(API_URL + '?t=' + new Date().getTime());
        if (!response.ok) throw new Error(`HTTP ${response.status}`);
        const data = await response.json();
        return Array.isArray(data) ? data : (data.data || []);
      } catch (error) {
        console.error(error);
        showToast('Cannot connect to server.', 'danger');
        return [];
      }
    }

    async function addPrescription(data) {
      const response = await fetch(API_URL, { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(data) });
      return await response.json();
    }

    async function updatePrescription(id, data) {
      const response = await fetch(`${API_URL}?id=${id}`, { method: 'PUT', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(data) });
      return await response.json();
    }

    async function deletePrescription(id) {
      const response = await fetch(`${API_URL}?id=${id}`, { method: 'DELETE' });
      return await response.json();
    }

    function escapeHtml(str) { if(!str) return ''; return String(str).replace(/[&<>]/g, function(m){ if(m==='&') return '&amp;'; if(m==='<') return '&lt;'; if(m==='>') return '&gt;'; return m;}); }

    function getDoctorName(doctorId) { const doc = doctorsList.find(d => d.id == doctorId); return doc ? doc.doctor_name : 'Unknown'; }
    function getPatientName(patientId) { const pat = patientsList.find(p => p.id == patientId); return pat ? pat.patient_name : 'Unknown'; }

    function getStatusBadge(status) {
      if(status === 'Active') return '<span class="badge-status badge-active"><i class="fas fa-check-circle me-1"></i>Active</span>';
      if(status === 'Completed') return '<span class="badge-status badge-completed"><i class="fas fa-clipboard-list me-1"></i>Completed</span>';
      return '<span class="badge-status badge-expired"><i class="fas fa-hourglass-end me-1"></i>Expired</span>';
    }

    function updateStats(prescriptions) {
      $('#totalPrescriptions').text(prescriptions.length);
      const active = prescriptions.filter(p => p.status === 'Active').length;
      const completed = prescriptions.filter(p => p.status === 'Completed').length;
      $('#activePrescriptions').text(active);
      $('#completedPrescriptions').text(completed);
      const today = new Date().toISOString().split('T')[0];
      const todayCount = prescriptions.filter(p => p.prescription_date === today).length;
      $('#todayPrescriptions').text(todayCount);
    }

async function renderPrescriptionsTable() {

  if (!prescriptionsTable) {
    console.error("DataTable not initialized");
    return;
  }

  const prescriptions = await fetchPrescriptions();
  updateStats(prescriptions);

  // ✅ Clear table
  prescriptionsTable.clear();

  if (prescriptions.length === 0) {
    prescriptionsTable.row.add([
      '', '', '', '', 'No data found', '', '', '', ''
    ]);
    prescriptionsTable.draw();
    return;
  }

  prescriptions.forEach((pres, idx) => {
   prescriptionsTable.row.add([
  idx + 1,
  `<strong>${escapeHtml(getPatientName(pres.patient_id))}</strong>`,
  escapeHtml(getDoctorName(pres.doctor_id)),
  getStatusBadge(pres.status),
  `
  <div class="d-flex gap-1 justify-content-center align-items-center">
    <button class="btn btn-sm btn-success view-prescription" data-id="${pres.id}">
      <i class="fas fa-eye"></i>
    </button>

    <button class="btn btn-sm edit-btn edit-prescription text-dark" data-id="${pres.id}">
      <i class="fas fa-edit"></i>
    </button>

    <button class="btn btn-sm delete-btn delete-prescription text-dark" data-id="${pres.id}">
      <i class="fas fa-trash"></i>
    </button>
  </div>
  `
]);
  });

  // ✅ Draw table once at end
  prescriptionsTable.draw();
}


    $('#savePrescriptionBtn').on('click', async function() {
      const editId = $('#editId').val();
      const prescriptionData = {
        patient_id: parseInt($('#patientId').val()),
        doctor_id: parseInt($('#doctorId').val()),
        prescription_date: $('#prescriptionDate').val(),
        follow_up_date: $('#followUpDate').val() || null,
        symptoms: $('#symptoms').val().trim(),
        diagnosis: $('#diagnosis').val().trim(),
        medicines: $('#medicines').val().trim(),
        dosage: $('#dosage').val().trim(),
        duration: $('#duration').val().trim(),
        instructions: $('#instructions').val().trim(),
        status: $('#status').val()
      };
      
      if(!prescriptionData.patient_id) return showToast('Please select a patient!', 'danger');
      if(!prescriptionData.doctor_id) return showToast('Please select a doctor!', 'danger');
      if(!prescriptionData.prescription_date) return showToast('Please select prescription date!', 'danger');
      if(!prescriptionData.diagnosis) return showToast('Please enter diagnosis!', 'danger');
      if(!prescriptionData.medicines) return showToast('Please enter medicines!', 'danger');

      const saveBtn = $('#savePrescriptionBtn');
      saveBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-1"></i> Saving...');
      let result;
      if(editId) result = await updatePrescription(editId, prescriptionData);
      else result = await addPrescription(prescriptionData);
      
      if(result.success) {
        showToast(result.message || (editId ? 'Prescription updated!' : 'Prescription saved!'), 'success');
        $('#prescriptionForm')[0].reset();
        $('#editId').val('');
        $('#addPrescriptionModal').modal('hide');
        await renderPrescriptionsTable();
      } else showToast(result.message || 'Operation failed', 'danger');
      saveBtn.prop('disabled', false).html('<i class="fas fa-save me-1"></i> Save Prescription');
    });

    $(document).on('click', '.delete-prescription', async function() {
      const id = $(this).data('id');
      if(confirm('⚠️ Delete this prescription permanently?')) {
        const result = await deletePrescription(id);
        if(result.success) { await renderPrescriptionsTable(); showToast('Prescription deleted!', 'success'); }
        else showToast(result.message || 'Delete failed', 'danger');
      }
    });

    $(document).on('click', '.edit-prescription', async function() {
      const id = $(this).data('id');
      try {
        const response = await fetch(`${API_URL}?id=${id}`);
        const prescription = await response.json();
        const p = prescription.data || prescription;
        $('#editId').val(p.id);
        $('#patientId').val(p.patient_id);
        $('#doctorId').val(p.doctor_id);
        $('#prescriptionDate').val(p.prescription_date);
        $('#followUpDate').val(p.follow_up_date);
        $('#symptoms').val(p.symptoms || '');
        $('#diagnosis').val(p.diagnosis);
        $('#medicines').val(p.medicines);
        $('#dosage').val(p.dosage || '');
        $('#duration').val(p.duration || '');
        $('#instructions').val(p.instructions || '');
        $('#status').val(p.status || 'Active');
        $('#addPrescriptionModalLabel').html('<i class="fas fa-prescription-bottle me-2"></i>Edit Prescription');
        $('#addPrescriptionModal').modal('show');
      } catch(e) { showToast('Error loading prescription', 'danger'); }
    });

    $(document).on('click', '.view-prescription', async function() {
      const id = $(this).data('id');
      try {
        const response = await fetch(`${API_URL}?id=${id}`);
        const prescription = await response.json();
        const p = prescription.data || prescription;
        currentViewPrescription = p;
        const patient = patientsList.find(pat => pat.id == p.patient_id);
        const doctor = doctorsList.find(doc => doc.id == p.doctor_id);
        
        const html = `
          <div class="prescription-print-area">
            <div class="text-center mb-4">
              <h3>Clinic Management System</h3>
              <p>123 Health Street, Medical District, City</p>
              <p>Phone: +92 123 4567890 | Email: clinic@example.com</p>
              <hr>
              <h4>Medical Prescription</h4>
            </div>
            <div class="row mb-3">
              <div class="col-6"><strong>Patient Name:</strong> ${patient?.patient_name || 'N/A'}</div>
              <div class="col-6"><strong>Patient Age:</strong> ${patient?.age || 'N/A'} years</div>
              <div class="col-6"><strong>Date:</strong> ${p.prescription_date}</div>
              <div class="col-6"><strong>Doctor:</strong> ${doctor?.doctor_name || 'N/A'} (${doctor?.specialization || 'N/A'})</div>
            </div>
            <div class="mb-3"><strong>Symptoms:</strong><br>${p.symptoms || 'Not specified'}</div>
            <div class="mb-3"><strong>Diagnosis:</strong><br>${p.diagnosis}</div>
            <div class="mb-3"><strong>Medicines Prescribed:</strong><br><pre style="white-space: pre-wrap;">${p.medicines}</pre></div>
            <div class="row mb-3"><div class="col-6"><strong>Dosage:</strong> ${p.dosage || 'As directed'}</div><div class="col-6"><strong>Duration:</strong> ${p.duration || 'As needed'}</div></div>
            <div class="mb-3"><strong>Additional Instructions:</strong><br>${p.instructions || 'None'}</div>
            <div class="mb-3"><strong>Follow Up Date:</strong> ${p.follow_up_date || 'Not scheduled'}</div>
            <hr>
            <div class="text-center mt-4">
              <p>_________________________</p>
              <p>Doctor's Signature & Stamp</p>
            </div>
          </div>
        `;
        $('#prescriptionViewContent').html(html);
        $('#viewPrescriptionModal').modal('show');
      } catch(e) { showToast('Error loading prescription', 'danger'); }
    });

    function printPrescription() {
      const printContent = $('#prescriptionViewContent').html();
      const printWindow = window.open('', '_blank');
      printWindow.document.write(`
        <html><head><title>Prescription</title>
        <style>body{font-family:Arial;padding:20px;} .prescription-print-area{max-width:800px;margin:auto;} pre{font-family:Arial;}</style>
        </head><body>${printContent}</body></html>
      `);
      printWindow.document.close();
      printWindow.print();
    }

    $('#addPrescriptionModal').on('hidden.bs.modal', function() {
      $('#prescriptionForm')[0].reset();
      $('#editId').val('');
      $('#addPrescriptionModalLabel').html('<i class="fas fa-prescription-bottle me-2"></i>Write Prescription');
    });

  $(document).ready(async () => {

  // ✅ DataTable INIT (THIS WAS MISSING)
  prescriptionsTable = $('#prescriptionsTable').DataTable({
    pageLength: 10,
    responsive: true,
    order: [[0, 'asc']],
    columnDefs: [{ orderable: false, targets: [4] }]
  });

  await fetchDoctors();
  await fetchPatients();
  await renderPrescriptionsTable();
});
  </script>
  
  <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
  <script src="../assets/js/scrollbar/simplebar.min.js"></script>
  <script src="../assets/js/scrollbar/custom.js"></script>
  <script src="../assets/js/config.js"></script>
  <script src="../assets/js/sidebar-menu.js"></script>
  <script src="../assets/js/sidebar-pin.js"></script>
  <script src="../assets/js/clock.js"></script>
  <script src="../assets/js/slick/slick.min.js"></script>
  <script src="../assets/js/slick/slick.js"></script>
  <script src="../assets/js/header-slick.js"></script>
  <script src="../assets/js/typeahead/handlebars.js"></script>
  <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
  <script src="../assets/js/typeahead/typeahead.custom.js"></script>
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/script1.js"></script>
  <script src="../assets/js/theme-customizer/customizer.js"></script>
  <script>
// ============ AUTH CHECK - ONLY ADMIN ============
// (function() {
//     const token = localStorage.getItem('token') || sessionStorage.getItem('token');
//     const user = JSON.parse(localStorage.getItem('user') || sessionStorage.getItem('user') || '{}');
    
//     if (!token || user.role !== 'admin') {
//         window.location.href = 'login.php';
//         return;
//     }
// })();

// ============ LOGOUT FUNCTION ============
function logoutUser() {
    const token = localStorage.getItem('token') || sessionStorage.getItem('token');
    fetch('api/auth.php?action=logout', { method: 'POST', headers: { 'Authorization': 'Bearer ' + token } }).catch(() => {});
    localStorage.clear();
    sessionStorage.clear();
    window.location.href = 'login.php';
}
</script>
</body>

</html>