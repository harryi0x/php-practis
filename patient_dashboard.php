<?php
// patient_dashboard.php
session_start();
if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'patient') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient Dashboard - Clinic Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background: #f0f2f5; font-family: 'Segoe UI', sans-serif; }
        .navbar { background: linear-gradient(135deg, #0052a5 0%, #003d7a 100%); padding: 15px; color: white; }
        .dashboard-card { background: white; border-radius: 15px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        .appointment-card { background: white; border-radius: 12px; padding: 15px; margin-bottom: 15px; border-left: 4px solid #0052a5; }
        .badge-scheduled { background: #dcfce7; color: #16a34a; padding: 5px 12px; border-radius: 20px; }
        .badge-completed { background: #dbeafe; color: #2563eb; padding: 5px 12px; border-radius: 20px; }
        .badge-cancelled { background: #fee2e2; color: #dc2626; padding: 5px 12px; border-radius: 20px; }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-user-injured me-2"></i>Patient Dashboard</a>
            <div class="ms-auto">
                <span class="me-3"><i class="fas fa-user me-1"></i><?php echo $_SESSION['name']; ?></span>
                <button class="btn btn-sm btn-outline-light" onclick="logoutUser()"><i class="fas fa-sign-out-alt"></i> Logout</button>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4"><div class="dashboard-card text-center"><h3 id="appointmentCount">0</h3><span>Total Appointments</span></div></div>
            <div class="col-md-4"><div class="dashboard-card text-center"><h3 id="upcomingCount">0</h3><span>Upcoming</span></div></div>
            <div class="col-md-4"><div class="dashboard-card text-center"><h3 id="completedCount">0</h3><span>Completed</span></div></div>
        </div>
        
        <div class="dashboard-card"><h5><i class="fas fa-calendar-plus me-2"></i>Book New Appointment</h5>
            <form id="appointmentForm">
                <div class="row"><div class="col-md-4"><label>Select Doctor *</label><select class="form-select" id="doctorId" required><option value="">Choose Doctor</option></select></div>
                <div class="col-md-3"><label>Date *</label><input type="date" class="form-control" id="appointmentDate" required></div>
                <div class="col-md-3"><label>Time *</label><input type="time" class="form-control" id="appointmentTime" required></div>
                <div class="col-md-2"><label>&nbsp;</label><button type="submit" class="btn btn-primary w-100"><i class="fas fa-bookmark me-2"></i>Book</button></div>
                <div class="col-md-12 mt-2"><label>Symptoms / Reason</label><textarea class="form-control" id="symptoms" rows="2"></textarea></div></div>
            </form>
        </div>
        
        <div class="dashboard-card"><h5><i class="fas fa-calendar-alt me-2"></i>My Appointments</h5><div id="appointmentsList">Loading...</div></div>
        
        <div class="dashboard-card"><h5><i class="fas fa-prescription-bottle me-2"></i>My Prescriptions</h5><div id="prescriptionsList">Loading...</div></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const API_URL = 'api/';
        let currentPatientId = null;
        
        async function fetchPatientId() {
            const token = localStorage.getItem('token') || sessionStorage.getItem('token');
            const response = await fetch(API_URL + 'patients.php?email=' + encodeURIComponent('<?php echo $_SESSION['email']; ?>'), {
                headers: { 'Authorization': 'Bearer ' + token }
            });
            const data = await response.json();
            currentPatientId = (Array.isArray(data) ? data[0] : data.data?.[0])?.id;
            if(currentPatientId) { loadDoctors(); loadDashboard(); }
        }
        
        async function loadDoctors() {
            const token = localStorage.getItem('token') || sessionStorage.getItem('token');
            const response = await fetch(API_URL + 'doctors.php', { headers: { 'Authorization': 'Bearer ' + token } });
            const doctors = await response.json();
            const docList = Array.isArray(doctors) ? doctors : (doctors.data || []);
            const select = $('#doctorId');
            select.empty().append('<option value="">Choose Doctor</option>');
            docList.forEach(d => select.append(`<option value="${d.id}">${d.doctor_name} (${d.specialization}) - Rs.${d.consultation_fee}</option>`));
        }
        
        async function loadDashboard() {
            const token = localStorage.getItem('token') || sessionStorage.getItem('token');
            const response = await fetch(API_URL + `appointments.php?patient_id=${currentPatientId}&t=${Date.now()}`, {
                headers: { 'Authorization': 'Bearer ' + token }
            });
            const appointments = await response.json();
            const aptList = Array.isArray(appointments) ? appointments : (appointments.data || []);
            
            $('#appointmentCount').text(aptList.length);
            $('#upcomingCount').text(aptList.filter(a => a.status === 'Scheduled').length);
            $('#completedCount').text(aptList.filter(a => a.status === 'Completed').length);
            
            let aptHtml = '<div class="table-responsive"><table class="table"><thead><tr><th>#</th><th>Doctor</th><th>Date</th><th>Time</th><th>Symptoms</th><th>Status</th></tr></thead><tbody>';
            aptList.forEach((apt, idx) => {
                aptHtml += `<tr><td>${idx+1}</td><td>Doctor #${apt.doctor_id}</td><td>${apt.appointment_date}</td><td>${apt.appointment_time}</td><td>${(apt.symptoms || '-').substring(0,30)}</td><td><span class="badge-${apt.status === 'Scheduled' ? 'scheduled' : (apt.status === 'Completed' ? 'completed' : 'cancelled')}">${apt.status || 'Scheduled'}</span></td></tr>`;
            });
            aptHtml += '</tbody></table></div>';
            $('#appointmentsList').html(aptHtml || '<p>No appointments found</p>');
            
            const presResponse = await fetch(API_URL + `prescriptions.php?patient_id=${currentPatientId}`, { headers: { 'Authorization': 'Bearer ' + token } });
            const prescriptions = await presResponse.json();
            const presList = Array.isArray(prescriptions) ? prescriptions : (prescriptions.data || []);
            let presHtml = '<div class="table-responsive"><table class="table"><thead><tr><th>#</th><th>Doctor</th><th>Date</th><th>Diagnosis</th><th>Medicines</th></tr></thead><tbody>';
            presList.forEach((p, idx) => {
                presHtml += `<tr><td>${idx+1}</td><td>Doctor #${p.doctor_id}</td><td>${p.prescription_date}</td><td>${(p.diagnosis || '').substring(0,40)}</td><td>${(p.medicines || '').substring(0,40)}...</td></tr>`;
            });
            presHtml += '</tbody></table></div>';
            $('#prescriptionsList').html(presHtml || '<p>No prescriptions found</p>');
        }
        
        $('#appointmentForm').on('submit', async function(e) {
            e.preventDefault();
            const appointmentData = {
                patient_id: currentPatientId,
                doctor_id: $('#doctorId').val(),
                appointment_date: $('#appointmentDate').val(),
                appointment_time: $('#appointmentTime').val(),
                symptoms: $('#symptoms').val(),
                status: 'Scheduled'
            };
            
            if(!appointmentData.doctor_id || !appointmentData.appointment_date || !appointmentData.appointment_time) {
                showToast('Please fill all required fields', 'danger');
                return;
            }
            
            const token = localStorage.getItem('token') || sessionStorage.getItem('token');
            const response = await fetch(API_URL + 'appointments.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'Authorization': 'Bearer ' + token },
                body: JSON.stringify(appointmentData)
            });
            const result = await response.json();
            if(result.success) {
                showToast('Appointment booked successfully!', 'success');
                $('#appointmentForm')[0].reset();
                loadDashboard();
            } else showToast(result.message || 'Failed to book', 'danger');
        });
        
        function showToast(message, type) {
            const bg = type === 'success' ? '#10b981' : '#ef4444';
            const toast = $(`<div class="toast align-items-center text-white border-0 fade show position-fixed top-0 end-0 m-3" style="background:${bg};z-index:9999"><div class="d-flex"><div class="toast-body"><i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle'} me-2"></i>${message}</div><button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button></div></div>`);
            $('body').append(toast);
            setTimeout(() => toast.remove(), 3000);
        }
        
        function logoutUser() { localStorage.clear(); sessionStorage.clear(); window.location.href = 'login.php'; }
        $(document).ready(function() { fetchPatientId(); });
    </script>
</body>
</html>