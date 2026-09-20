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
  <title>Clinic Management System - Pharmacy | Cuba Premium Admin</title>

  <!-- Slick Slider -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <!-- Select Bootstrap 5 -->
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplebar/6.2.5/simplebar.min.css">
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
    rel="stylesheet">
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
    .pharmacy-container {
      background: white;
      border-radius: 15px;
      padding: 20px;
      margin-top: 25px;
      box-shadow: 0 0 20px rgba(0, 82, 165, 0.08);
    }

    .add-medicine-btn {
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

    .pharmacy-table th {
      background-color: #f8fafc;
      font-weight: 700;
      color: #1e293b;
      border-bottom: 2px solid #e2e8f0;
    }

    .badge-status {
      padding: 5px 12px;
      border-radius: 20px;
      font-size: 11px;
      font-weight: 600;
    }

    .badge-instock {
      background: #dcfce7;
      color: #16a34a;
    }

    .badge-lowstock {
      background: #fef3c7;
      color: #d97706;
    }

    .badge-outstock {
      background: #fee2e2;
      color: #dc2626;
    }

    .stats-card {
      background: white;
      border-radius: 12px;
      padding: 15px;
      margin-bottom: 20px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
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

    .edit-btn {
      background-color: #fbbf24;
      border-color: #fbbf24;
      color: #000;
    }

    .delete-btn {
      background-color: #ef4444;
      border-color: #ef4444;
      color: white;
    }

    .btn-sm {
      padding: 5px 10px;
      margin: 0 3px;
      border-radius: 6px;
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
      <!-- Page Sidebar Start -->
        <?php include 'navbar/sidebar.php'; ?>

      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-sm-6">
                <h3><i class="fas fa-capsules me-2"></i>Pharmacy Management</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Pharmacy</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <!-- Stats Cards -->
          <div class="row mb-4">
            <div class="col-md-3">
              <div class="stats-card">
                <div class="d-flex justify-content-between">
                  <div>
                    <div class="stats-title">Total Medicines</div>
                    <div class="stats-value" id="totalMedicines">0</div>
                  </div>
                  <div class="stats-icon" style="background:#e0f2fe;color:#0284c7;"><i class="fas fa-capsules"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="stats-card">
                <div class="d-flex justify-content-between">
                  <div>
                    <div class="stats-title">In Stock</div>
                    <div class="stats-value" id="inStockMedicines">0</div>
                  </div>
                  <div class="stats-icon" style="background:#dcfce7;color:#16a34a;"><i class="fas fa-check-circle"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="stats-card">
                <div class="d-flex justify-content-between">
                  <div>
                    <div class="stats-title">Low Stock</div>
                    <div class="stats-value" id="lowStockMedicines">0</div>
                  </div>
                  <div class="stats-icon" style="background:#fef3c7;color:#f59e0b;"><i
                      class="fas fa-exclamation-triangle"></i></div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="stats-card">
                <div class="d-flex justify-content-between">
                  <div>
                    <div class="stats-title">Total Value</div>
                    <div class="stats-value" id="totalValue">Rs. 0</div>
                  </div>
                  <div class="stats-icon" style="background:#dbeafe;color:#3b82f6;"><i class="fas fa-rupee-sign"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Add Medicine Button -->
          <div class="row">
            <div class="col-12">
              <button class="btn btn-primary add-doctor-btn" data-bs-toggle="modal" data-bs-target="#addMedicineModal">
                <i class="fa-solid fa-plus me-2"></i> Add New Medicine
            </div>

            <!-- Medicines Table -->
            <div class="pharmacy-container">
              <div class="table-responsive">
                <table id="medicinesTable" class="table pharmacy-table table-hover">
                  <thead>
                      <tr>
                        <th>#</th>
                        <th>Medicine</th>
                        <th>Category</th>
                        <th>Stock</th>
                        <th>Expiry</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                      </thead>
                  <tbody id="medicinesTableBody">
                    <tr>
                      <td colspan="11" class="text-center">Loading medicines...</td>
                    </tr>
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

    <!-- Add/Edit Medicine Modal -->
    <div class="modal fade" id="addMedicineModal" tabindex="-1" aria-labelledby="addMedicineModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addMedicineModalLabel"><i class="fas fa-capsules me-2"></i>Add New Medicine</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form id="medicineForm">
              <input type="hidden" id="editId" value="">
              <div class="row g-3">
                <div class="col-md-6"><label class="form-label"><i class="fas fa-pills me-1"></i> Medicine Name
                    *</label><input type="text" class="form-control" id="medicineName" required
                    placeholder="Enter medicine name"></div>
                <div class="col-md-6"><label class="form-label"><i class="fas fa-tags me-1"></i> Category
                    *</label><select class="form-select" id="category" required>
                    <option value="">Select Category</option>
                    <option>Antibiotic</option>
                    <option>Painkiller</option>
                    <option>Antihypertensive</option>
                    <option>Antidiabetic</option>
                    <option>Antihistamine</option>
                    <option>Vitamin</option>
                    <option>Antacid</option>
                    <option>Antiviral</option>
                    <option>Other</option>
                  </select></div>
                <div class="col-md-3"><label class="form-label"><i class="fas fa-building me-1"></i> Brand</label><input
                    type="text" class="form-control" id="brand" placeholder="Brand name"></div>
                <div class="col-md-3"><label class="form-label"><i class="fas fa-weight me-1"></i>
                    Strength</label><input type="text" class="form-control" id="strength"
                    placeholder="e.g., 500mg, 10ml"></div>
                <div class="col-md-3"><label class="form-label"><i class="fas fa-cube me-1"></i> Dosage
                    Form</label><select class="form-select" id="dosageForm">
                    <option value="">Select</option>
                    <option>Tablet</option>
                    <option>Capsule</option>
                    <option>Syrup</option>
                    <option>Injection</option>
                    <option>Cream</option>
                    <option>Drops</option>
                    <option>Inhaler</option>
                  </select></div>
                <div class="col-md-3"><label class="form-label"><i class="fas fa-boxes me-1"></i> Quantity
                    *</label><input type="number" class="form-control" id="quantity" required min="0" value="0"></div>
                <div class="col-md-3"><label class="form-label"><i class="fas fa-tag me-1"></i> Unit Price (Rs.)
                    *</label><input type="number" class="form-control" id="unitPrice" required min="0" step="0.01"
                    value="0"></div>
                <div class="col-md-3"><label class="form-label"><i class="fas fa-rupee-sign me-1"></i> Selling Price
                    (Rs.) *</label><input type="number" class="form-control" id="sellingPrice" required min="0"
                    step="0.01" value="0"></div>
                <div class="col-md-3"><label class="form-label"><i class="fas fa-calendar-alt me-1"></i> Expiry
                    Date</label><input type="date" class="form-control" id="expiryDate"></div>
                <div class="col-md-3"><label class="form-label"><i class="fas fa-barcode me-1"></i> Batch
                    Number</label><input type="text" class="form-control" id="batchNumber"
                    placeholder="Batch/Lot number"></div>
                <div class="col-md-4"><label class="form-label"><i class="fas fa-truck me-1"></i> Supplier</label><input
                    type="text" class="form-control" id="supplier" placeholder="Supplier name"></div>
                <div class="col-md-4"><label class="form-label"><i class="fas fa-chart-line me-1"></i> Reorder
                    Level</label><input type="number" class="form-control" id="reorderLevel" min="0" value="10"></div>
                <div class="col-md-4"><label class="form-label"><i class="fas fa-location-dot me-1"></i> Storage
                    Location</label><input type="text" class="form-control" id="location"
                    placeholder="e.g., Shelf A-1, Rack 2"></div>
                <div class="col-md-12"><label class="form-label"><i class="fas fa-align-left me-1"></i>
                    Description</label><textarea class="form-control" id="description" rows="2"
                    placeholder="Additional information..."></textarea></div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times me-1"></i>
              Cancel</button>
            <button type="button" class="btn btn-primary" id="saveMedicineBtn"><i class="fas fa-save me-1"></i> Save
              Medicine</button>
          </div>
        </div>
      </div>
    </div>

    <div class="toast-container"></div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>

    <script>
      const API_URL = 'api/medicines.php';
      let medicinesTable = null;

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

      async function fetchMedicines() {
        try {
          const response = await fetch(API_URL);
          if (!response.ok) throw new Error(`HTTP ${response.status}`);
          const data = await response.json();
          return Array.isArray(data) ? data : (data.data || []);
        } catch (error) {
          console.error(error);
          showToast('Cannot connect to server.', 'danger');
          return [];
        }
      }

      async function addMedicine(data) {
        const response = await fetch(API_URL, { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(data) });
        return await response.json();
      }

      async function updateMedicine(id, data) {
        const response = await fetch(`${API_URL}?id=${id}`, { method: 'PUT', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(data) });
        return await response.json();
      }

      async function deleteMedicine(id) {
        const response = await fetch(`${API_URL}?id=${id}`, { method: 'DELETE' });
        return await response.json();
      }

      function escapeHtml(str) { if (!str) return ''; return String(str).replace(/[&<>]/g, function (m) { if (m === '&') return '&amp;'; if (m === '<') return '&lt;'; if (m === '>') return '&gt;'; return m; }); }

      function getStatusBadge(quantity, reorderLevel) {
        if (quantity <= 0) return '<span class="badge-status badge-outstock"><i class="fas fa-times-circle me-1"></i>Out of Stock</span>';
        if (quantity <= reorderLevel) return '<span class="badge-status badge-lowstock"><i class="fas fa-exclamation-triangle me-1"></i>Low Stock</span>';
        return '<span class="badge-status badge-instock"><i class="fas fa-check-circle me-1"></i>In Stock</span>';
      }

      function updateStats(medicines) {
        $('#totalMedicines').text(medicines.length);
        const inStock = medicines.filter(m => m.quantity > (m.reorder_level || 10)).length;
        const lowStock = medicines.filter(m => m.quantity > 0 && m.quantity <= (m.reorder_level || 10)).length;
        $('#inStockMedicines').text(inStock);
        $('#lowStockMedicines').text(lowStock);
        const totalValue = medicines.reduce((sum, m) => sum + ((m.selling_price || 0) * (m.quantity || 0)), 0);
        $('#totalValue').text(`Rs. ${totalValue.toLocaleString()}`);
      }

      async function renderMedicinesTable() {
        const medicines = await fetchMedicines();
        updateStats(medicines);
        const tbody = $('#medicinesTableBody');
        tbody.empty();
        if (medicines.length === 0) {
          tbody.html('<tr><td colspan="11" class="text-center">No medicines found. Click "Add New Medicine" to add.</td></tr>');
        } else {
         medicines.forEach((med, idx) => {

  const stockValue = med.quantity || 0;
  const reorderLevel = med.reorder_level || 10;

  tbody.append(`
    <tr>

      <td>${idx + 1}</td>

      <td>
        <strong>
          <i class="fas fa-pills me-1" style="color:#0052a5;"></i>
          ${escapeHtml(med.medicine_name)}
        </strong>
        <br>
        <small class="text-muted">${escapeHtml(med.brand || '-')}</small>
      </td>

      <td>
        <span class="badge-status" style="background:#e0f2fe;color:#0284c7;">
          ${escapeHtml(med.category)}
        </span>
      </td>

      <td>
        <span class="badge-status" style="
          background:${stockValue <= reorderLevel ? '#fef3c7' : '#dcfce7'};
          color:${stockValue <= reorderLevel ? '#d97706' : '#16a34a'};
        ">
          ${stockValue} units
        </span>
      </td>

      <td>
        ${med.expiry_date ? new Date(med.expiry_date).toLocaleDateString() : '-'}
      </td>

      <td>
        ${getStatusBadge(stockValue, reorderLevel)}
      </td>

      <td>
        <button class="btn btn-sm edit-medicine text-dark" data-id="${med.id}">
          <i class="fas fa-edit"></i>
        </button>

        <button class="btn btn-sm delete-medicine text-dark" data-id="${med.id}">
          <i class="fas fa-trash-alt"></i>
        </button>
      </td>

    </tr>
  `);
          });
        }
        if ($.fn.DataTable.isDataTable('#medicinesTable')) {
          $('#medicinesTable').DataTable().clear().rows.add([]).draw();
        }
      }

      $('#saveMedicineBtn').on('click', async function () {
        const editId = $('#editId').val();
        const medicineData = {
          medicine_name: $('#medicineName').val().trim(),
          category: $('#category').val(),
          brand: $('#brand').val().trim(),
          strength: $('#strength').val().trim(),
          dosage_form: $('#dosageForm').val(),
          quantity: parseInt($('#quantity').val()) || 0,
          unit_price: parseFloat($('#unitPrice').val()) || 0,
          selling_price: parseFloat($('#sellingPrice').val()) || 0,
          expiry_date: $('#expiryDate').val() || null,
          batch_number: $('#batchNumber').val().trim(),
          supplier: $('#supplier').val().trim(),
          reorder_level: parseInt($('#reorderLevel').val()) || 10,
          location: $('#location').val().trim(),
          description: $('#description').val().trim()
        };

        if (!medicineData.medicine_name) return showToast('Please enter medicine name!', 'danger');
        if (!medicineData.category) return showToast('Please select category!', 'danger');
        if (medicineData.quantity < 0) return showToast('Please enter valid quantity!', 'danger');
        if (medicineData.unit_price < 0) return showToast('Please enter valid unit price!', 'danger');
        if (medicineData.selling_price < 0) return showToast('Please enter valid selling price!', 'danger');

        const saveBtn = $('#saveMedicineBtn');
        saveBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-1"></i> Saving...');
        let result;
        if (editId) result = await updateMedicine(editId, medicineData);
        else result = await addMedicine(medicineData);

        if (result.success) {
          showToast(result.message || (editId ? 'Medicine updated!' : 'Medicine added!'), 'success');
          $('#medicineForm')[0].reset();
          $('#editId').val('');
          const modalEl = document.getElementById('addMedicineModal');
          const modal = bootstrap.Modal.getInstance(modalEl);
          modal.hide(); await renderMedicinesTable();
        } else showToast(result.message || 'Operation failed', 'danger');
        saveBtn.prop('disabled', false).html('<i class="fas fa-save me-1"></i> Save Medicine');
      });

      $(document).on('click', '.delete-medicine', async function () {
        const id = $(this).data('id');
        if (confirm('⚠️ Delete this medicine permanently?')) {
          const result = await deleteMedicine(id);
          if (result.success) { await renderMedicinesTable(); showToast('Medicine deleted!', 'success'); }
          else showToast(result.message || 'Delete failed', 'danger');
        }
      });

      $(document).on('click', '.edit-medicine', async function () {
        const id = $(this).data('id');
        try {
          const response = await fetch(`${API_URL}?id=${id}`);
          const medicine = await response.json();
          const m = medicine.data || medicine;
          $('#editId').val(m.id);
          $('#medicineName').val(m.medicine_name);
          $('#category').val(m.category);
          $('#brand').val(m.brand || '');
          $('#strength').val(m.strength || '');
          $('#dosageForm').val(m.dosage_form || '');
          $('#quantity').val(m.quantity);
          $('#unitPrice').val(m.unit_price);
          $('#sellingPrice').val(m.selling_price);
          $('#expiryDate').val(m.expiry_date);
          $('#batchNumber').val(m.batch_number || '');
          $('#supplier').val(m.supplier || '');
          $('#reorderLevel').val(m.reorder_level || 10);
          $('#location').val(m.location || '');
          $('#description').val(m.description || '');
          $('#addMedicineModalLabel').html('<i class="fas fa-capsules me-2"></i>Edit Medicine');
          $('#addMedicineModal').modal('show');
        } catch (e) { const bgColor = type === 'success' ? '#10b981' : '#ef4444'; }
      });

      $('#addMedicineModal').on('hidden.bs.modal', function () {
        $('#medicineForm')[0].reset();
        $('#editId').val('');
        $('#addMedicineModalLabel').html('<i class="fas fa-capsules me-2"></i>Add New Medicine');
      });

      $(document).ready(async () => {
        await renderMedicinesTable();
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