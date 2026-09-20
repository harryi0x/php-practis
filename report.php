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
  <title>Clinic Management System - Reports | Cuba Premium Admin</title>
  
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
    /* Reports Custom Styles */
    .report-card {
      background: white;
      border-radius: 15px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
      cursor: pointer;
      border: 1px solid #f0f2f5;
    }
    .report-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }
    .report-icon {
      width: 60px;
      height: 60px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 28px;
      margin-bottom: 15px;
    }
    .report-title {
      font-size: 18px;
      font-weight: 700;
      color: #1e293b;
      margin-bottom: 5px;
    }
    .report-desc {
      font-size: 13px;
      color: #64748b;
    }
    .report-stats {
      margin-top: 15px;
      padding-top: 15px;
      border-top: 1px solid #e2e8f0;
    }
    .report-value {
      font-size: 24px;
      font-weight: 700;
      color: #0052a5;
    }
    .report-label {
      font-size: 12px;
      color: #64748b;
    }
    .filter-section {
      background: white;
      border-radius: 15px;
      padding: 20px;
      margin-bottom: 25px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .export-btn {
      background: linear-gradient(135deg, #10b981 0%, #059669 100%);
      border: none;
      padding: 8px 20px;
    }
    .table-container {
      background: white;
      border-radius: 15px;
      padding: 20px;
      margin-top: 20px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .badge-report {
      padding: 5px 12px;
      border-radius: 20px;
      font-size: 11px;
      font-weight: 600;
    }
    .badge-patients { background: #dbeafe; color: #2563eb; }
    .badge-appointments { background: #dcfce7; color: #16a34a; }
    .badge-revenue { background: #fef3c7; color: #d97706; }
    .badge-doctors { background: #fce7f3; color: #ec4899; }
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
      <!-- Page Sidebar Start -->
        <?php include 'navbar/sidebar.php'; ?>

      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-sm-6">
                <h3><i class="fas fa-chart-bar me-2"></i>Reports Center</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Reports</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        

          
          <!-- Filter Section -->
          <div class="filter-section" id="filterSection">
            <div class="row">
              <div class="col-md-3">
                <label class="form-label">Start Date</label>
                <input type="date" class="form-control" id="startDate">
              </div>
              <div class="col-md-3">
                <label class="form-label">End Date</label>
                <input type="date" class="form-control" id="endDate">
              </div>
              <div class="col-md-3">
                <label class="form-label">Status</label>
                <select class="form-select" id="statusFilter">
                  <option value="all">All</option>
                  <option value="Scheduled">Scheduled</option>
                  <option value="Completed">Completed</option>
                  <option value="Cancelled">Cancelled</option>
                </select>
              </div>
              <div class="col-md-3 d-flex align-items-end">
                <button class="btn btn-primary w-100" onclick="applyFilter()">
                  <i class="fas fa-search me-2"></i>Apply Filter
                </button>
              </div>
            </div>
          </div>
          
          <!-- Export Buttons -->
          <div class="row mb-3">
            <div class="col-12 text-end">
              <button class="btn btn-success export-btn me-2" onclick="exportToPDF()">
                <i class="fas fa-file-pdf me-2"></i>Export PDF
              </button>
              <button class="btn btn-info export-btn" onclick="exportToExcel()" style="background: #0891b2;">
                <i class="fas fa-file-excel me-2"></i>Export Excel
              </button>
            </div>
          </div>
          
          <!-- Report Table -->
          <div class="table-container" id="reportTableContainer">
            <h5 id="reportTitle" class="mb-3"><i class="fas fa-table me-2"></i>Patient Reports</h5>
            <div class="table-responsive">
              <table id="reportTable" class="table table-hover">
                <thead id="reportTableHead">
                  <!-- Dynamic headers will be inserted here -->
                </thead>
                <tbody id="reportTableBody">
                  <tr><td colspan="10" class="text-center">Loading reports...</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 footer-copyright text-center">
              <p class="mb-0">Copyright © 2024 Made By Junaid Ali | Clinic Management System</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <div class="toast-container"></div>

  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
  
  <script>
    let reportTable = null;
    let currentReportType = 'patients';
    let patientsData = [];
    let appointmentsData = [];
    let doctorsData = [];
    let billsData = [];

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

    async function fetchData() {
      try {
        const [patients, appointments, doctors, bills] = await Promise.all([
          fetch('api/patients.php').then(res => res.json()).catch(() => []),
          fetch('api/appointments.php').then(res => res.json()).catch(() => []),
          fetch('api/doctors.php').then(res => res.json()).catch(() => []),
          fetch('api/billing.php').then(res => res.json()).catch(() => [])
        ]);
        
        patientsData = Array.isArray(patients) ? patients : (patients.data || []);
        appointmentsData = Array.isArray(appointments) ? appointments : (appointments.data || []);
        doctorsData = Array.isArray(doctors) ? doctors : (doctors.data || []);
        billsData = Array.isArray(bills) ? bills : (bills.data || []);
        
        $('#totalPatientsReport').text(patientsData.length);
        $('#totalAppointmentsReport').text(appointmentsData.length);
        $('#totalDoctorsReport').text(doctorsData.length);
        
        const totalRevenue = billsData.reduce((sum, b) => sum + (b.paid_amount || 0), 0);
        $('#totalRevenueReport').text(`Rs. ${totalRevenue.toLocaleString()}`);
        
        return true;
      } catch(e) {
        console.error('Error fetching data:', e);
        return false;
      }
    }

    function showReport(type) {
      currentReportType = type;
      const titles = {
        patients: 'Patient Reports',
        appointments: 'Appointment Reports',
        revenue: 'Revenue Reports',
        doctors: 'Doctor Performance Reports'
      };
      $('#reportTitle').html(`<i class="fas fa-table me-2"></i>${titles[type]}`);
      applyFilter();
    }

    function applyFilter() {
      const startDate = $('#startDate').val();
      const endDate = $('#endDate').val();
      const status = $('#statusFilter').val();
      
      if(currentReportType === 'patients') {
        renderPatientReport();
      } else if(currentReportType === 'appointments') {
        renderAppointmentReport(startDate, endDate, status);
      } else if(currentReportType === 'revenue') {
        renderRevenueReport(startDate, endDate);
      } else if(currentReportType === 'doctors') {
        renderDoctorReport();
      }
    }

    function renderPatientReport() {
      const headers = `<tr><th>#</th><th>Patient Name</th><th>CNIC</th><th>Phone</th><th>Age</th><th>Gender</th><th>Blood Group</th><th>Medical History</th><th>Registered Date</th></tr>`;
      $('#reportTableHead').html(headers);
      
      let body = '';
      patientsData.forEach((p, idx) => {
        body += `<tr>
          <td>${idx + 1}</td>
          <td><strong>${p.patient_name}</strong></td>
          <td>${p.cnic_number}</td>
          <td>${p.phone}</td>
          <td>${p.age}</td>
          <td><span class="badge-report badge-patients">${p.gender}</span></td>
          <td>${p.blood_group || '-'}</td>
          <td>${(p.medical_history || '-').substring(0, 50)}${(p.medical_history || '').length > 50 ? '...' : ''}</td>
          <td>${p.created_at ? p.created_at.split(' ')[0] : '-'}</td>
        </tr>`;
      });
      $('#reportTableBody').html(body || '<tr><td colspan="9" class="text-center">No data found</td></tr>');
      
      if(reportTable) reportTable.destroy();
      reportTable = $('#reportTable').DataTable({ pageLength: 10, responsive: true });
    }

    function renderAppointmentReport(startDate, endDate, status) {
      let filtered = [...appointmentsData];
      
      if(startDate) filtered = filtered.filter(a => a.appointment_date >= startDate);
      if(endDate) filtered = filtered.filter(a => a.appointment_date <= endDate);
      if(status !== 'all') filtered = filtered.filter(a => a.status === status);
      
      const headers = `<tr><th>#</th><th>Patient</th><th>Doctor</th><th>Date</th><th>Time</th><th>Symptoms</th><th>Status</th><th>Created At</th></tr>`;
      $('#reportTableHead').html(headers);
      
      let body = '';
      filtered.forEach((apt, idx) => {
        body += `<tr>
          <td>${idx + 1}</td>
          <td><strong>Patient #${apt.patient_id}</strong></td>
          <td>Doctor #${apt.doctor_id}</td>
          <td>${apt.appointment_date}</td>
          <td>${apt.appointment_time}</td>
          <td>${(apt.symptoms || '-').substring(0, 50)}</td>
          <td><span class="badge-report ${apt.status === 'Scheduled' ? 'badge-appointments' : (apt.status === 'Completed' ? 'badge-patients' : 'badge-revenue')}">${apt.status || 'Scheduled'}</span></td>
          <td>${apt.created_at ? apt.created_at.split(' ')[0] : '-'}</td>
        </tr>`;
      });
      $('#reportTableBody').html(body || '<tr><td colspan="8" class="text-center">No data found</td></tr>');
      
      if(reportTable) reportTable.destroy();
      reportTable = $('#reportTable').DataTable({ pageLength: 10, responsive: true });
    }

    function renderRevenueReport(startDate, endDate) {
      let filtered = [...billsData];
      
      if(startDate) filtered = filtered.filter(b => b.bill_date >= startDate);
      if(endDate) filtered = filtered.filter(b => b.bill_date <= endDate);
      
      const total = filtered.reduce((sum, b) => sum + (b.total_amount || 0), 0);
      const paid = filtered.reduce((sum, b) => sum + (b.paid_amount || 0), 0);
      const due = total - paid;
      
      const headers = `<tr><th>#</th><th>Patient</th><th>Doctor</th><th>Bill Date</th><th>Total Amount</th><th>Paid Amount</th><th>Due Amount</th><th>Payment Method</th><th>Status</th></tr>`;
      $('#reportTableHead').html(headers);
      
      let body = `<tr class="table-primary"><td colspan="9"><strong>Summary: Total: Rs.${total.toLocaleString()} | Paid: Rs.${paid.toLocaleString()} | Due: Rs.${due.toLocaleString()}</strong></td></tr>`;
      filtered.forEach((bill, idx) => {
        const dueAmt = (bill.total_amount || 0) - (bill.paid_amount || 0);
        body += `<tr>
          <td>${idx + 1}</td>
          <td><strong>Patient #${bill.patient_id}</strong></td>
          <td>Doctor #${bill.doctor_id}</td>
          <td>${bill.bill_date}</td>
          <td class="amount-text">Rs. ${(bill.total_amount || 0).toLocaleString()}</td>
          <td class="amount-text">Rs. ${(bill.paid_amount || 0).toLocaleString()}</td>
          <td class="amount-text">Rs. ${dueAmt.toLocaleString()}</td>
          <td>${bill.payment_method || '-'}</td>
          <td>${dueAmt <= 0 ? '<span class="badge-report badge-patients">Paid</span>' : (bill.paid_amount > 0 ? '<span class="badge-report badge-revenue">Partial</span>' : '<span class="badge-report badge-appointments">Unpaid</span>')}</td>
        </tr>`;
      });
      $('#reportTableBody').html(body || '<tr><td colspan="9" class="text-center">No data found</td></tr>');
      
      if(reportTable) reportTable.destroy();
      reportTable = $('#reportTable').DataTable({ pageLength: 10, responsive: true });
    }

    function renderDoctorReport() {
      const doctorStats = doctorsData.map(doc => {
        const docApps = appointmentsData.filter(a => a.doctor_id == doc.id);
        const completed = docApps.filter(a => a.status === 'Completed').length;
        return {
          ...doc,
          total_appointments: docApps.length,
          completed_appointments: completed,
          completion_rate: docApps.length ? Math.round((completed / docApps.length) * 100) : 0
        };
      });
      
      const headers = `<tr><th>#</th><th>Doctor Name</th><th>Specialization</th><th>Experience</th><th>Total Appointments</th><th>Completed</th><th>Completion Rate</th><th>Fee (Rs.)</th></tr>`;
      $('#reportTableHead').html(headers);
      
      let body = '';
      doctorStats.forEach((doc, idx) => {
        body += `<tr>
          <td>${idx + 1}</td>
          <td><strong>${doc.doctor_name}</strong></td>
          <td><span class="badge-report badge-patients">${doc.specialization}</span></td>
          <td>${doc.experience} yrs</td>
          <td>${doc.total_appointments}</td>
          <td>${doc.completed_appointments}</td>
          <td><div class="progress"><div class="progress-bar bg-success" style="width: ${doc.completion_rate}%">${doc.completion_rate}%</div></div></td>
          <td>Rs. ${(doc.consultation_fee || 0).toLocaleString()}</td>
        </tr>`;
      });
      $('#reportTableBody').html(body || '<tr><td colspan="8" class="text-center">No data found</td></tr>');
      
      if(reportTable) reportTable.destroy();
      reportTable = $('#reportTable').DataTable({ pageLength: 10, responsive: true });
    }

    function exportToPDF() {
      showToast('PDF export feature - Print window opening...', 'info');
      window.print();
    }

    function exportToExcel() {
      let csv = [];
      let rows = $('#reportTable tbody tr');
      let headers = $('#reportTable thead tr th');
      
      let headerRow = [];
      headers.each(function() { headerRow.push($(this).text()); });
      csv.push(headerRow.join(','));
      
      rows.each(function() {
        let row = [];
        $(this).find('td').each(function() { row.push('"' + $(this).text().replace(/"/g, '""') + '"'); });
        csv.push(row.join(','));
      });
      
      let blob = new Blob([csv.join('\n')], { type: 'text/csv' });
      let link = document.createElement('a');
      link.href = URL.createObjectURL(blob);
      link.download = `${currentReportType}_report.csv`;
      link.click();
      showToast('Report exported successfully!', 'success');
    }

    $(document).ready(async () => {
      await fetchData();
      showReport('patients');
      setInterval(fetchData, 30000);
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