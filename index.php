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
  <title>Default Dashboard | Cuba - Premium Admin Template By Pixelstrap</title>
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
  <!-- Font Awesome 6 (Free)-->
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
    /* Additional icon styling for cards */
    .widget-round .bg-round i {
      font-size: 28px;
      color: #fff;
    }
    .widget-round .bg-round svg {
      width: 30px;
      height: 30px;
    }
    .widget-1 .widget-content {
      align-items: center;
      gap: 15px;
    }
    .buy-card .card-body h6 a {
      text-decoration: none;
    }
    .appointments-wrapper li .main-box button {
      margin-top: 5px;
    }
    .circle-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(255,255,255,0.2);
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

    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
        <?php include 'navbar/sidebar.php'; ?>

      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-sm-6">
                <h3>Default </h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-home"></use>
                      </svg></a></li>
                  <li class="breadcrumb-item">Dashboard</li>
                  <li class="breadcrumb-item active">Default </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dashboard">
          <div class="row widget-grid">
            <div class="col-xxl-4 col-sm-6 box-col-6">
              <div class="card profile-box">
                <div class="card-body">
                  <div class="d-flex media-wrapper justify-content-between">
                    <div class="flex-grow-1">
                      <div class="greeting-user">
                        <h2 class="f-w-600">Welcome Health Center!</h2>
                        <p>Here whats happing in your account today</p>
                        <div class="whatsnew-btn"><a class="btn btn-outline-white" href="user-profile.html"
                            target="_blank">View Profile</a></div>
                      </div>
                    </div>
                    <div>
                      <div class="clockbox">
                        <svg id="clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                          <g id="face">
                            <circle class="circle" cx="300" cy="300" r="253.9"></circle>
                            <path class="hour-marks"
                              d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6">
                            </path>
                            <circle class="mid-circle" cx="300" cy="300" r="16.2"></circle>
                          </g>
                          <g id="hour">
                            <path class="hour-hand" d="M300.5 298V142"></path>
                            <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                          </g>
                          <g id="minute">
                            <path class="minute-hand" d="M300.5 298V67"> </path>
                            <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                          </g>
                          <g id="second">
                            <path class="second-hand" d="M300.5 350V55"></path>
                            <circle class="sizing-box" cx="300" cy="300" r="253.9"> </circle>
                          </g>
                        </svg>
                      </div>
                      <div class="badge f-10 p-0" id="txt"></div>
                    </div>
                  </div>
                  <div class="cartoon"><img class="img-fluid"
                      src="https://admin.pixelstrap.com/cuba/assets/images/dashboard/cartoon.svg"
                      alt="vector women with leptop"></div>
                </div>
              </div>
            </div>
            <div class="col-xxl-auto col-xl-3 col-sm-6 box-col-3">
              <div class="row">
                <div class="col-xl-12">
                  <div class="card widget-1">
                    <div class="card-body">
                      <div class="widget-content">
                        <div class="widget-round secondary">
                          <div class="bg-round">
                            <i class="fas fa-chart-line"></i>
                            <svg class="half-circle svg-fill">
                              <use href="https://admin.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#halfcircle"></use>
                            </svg>
                          </div>
                        </div>
                        <div>
                          <h4>$<span class="counter" data-target="45195">0</span></h4><span
                            class="f-light">Revenue</span>
                        </div>
                      </div>
                      <div class="font-success f-w-500"><i class="bookmark-search me-1"
                          data-feather="trending-up"></i><span class="txt-success">+50%</span></div>
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <div class="card widget-1">
                      <div class="card-body">
                        <div class="widget-content">
                          <div class="widget-round success">
                            <div class="bg-round">
                              <i class="fas fa-users"></i>
                              <svg class="half-circle svg-fill">
                                <use href="https://admin.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#halfcircle">
                                </use>
                              </svg>
                            </div>
                          </div>
                          <div>
                            <h4> <span class="counter" data-target="845">0</span>+</h4><span
                              class="f-light">Customers</span>
                          </div>
                        </div>
                        <div class="font-danger f-w-500"><i class="bookmark-search me-1"
                            data-feather="trending-down"></i><span class="txt-danger">-40%</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-auto col-xl-3 col-sm-6 box-col-3">
              <div class="row">
                <div class="col-xl-12">
                  <div class="card widget-1">
                    <div class="card-body">
                      <div class="widget-content">
                        <div class="widget-round warning">
                          <div class="bg-round">
                            <i class="fas fa-chart-pie"></i>
                            <svg class="half-circle svg-fill">
                              <use href="https://admin.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#halfcircle"></use>
                            </svg>
                          </div>
                        </div>
                        <div>
                          <h4> <span class="counter" data-target="80">0</span>%</h4><span class="f-light">Profit</span>
                        </div>
                      </div>
                      <div class="font-danger f-w-500"><i class="bookmark-search me-1"
                          data-feather="trending-down"></i><span class="txt-danger">-20%</span></div>
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <div class="card widget-1">
                      <div class="card-body">
                        <div class="widget-content">
                          <div class="widget-round primary">
                            <div class="bg-round">
                              <i class="fas fa-file-invoice"></i>
                              <svg class="half-circle svg-fill">
                                <use href="https://admin.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#halfcircle">
                                </use>
                              </svg>
                            </div>
                          </div>
                          <div>
                            <h4 class="counter" data-target="10905">0</h4><span class="f-light">Invoices</span>
                          </div>
                        </div>
                        <div class="font-success f-w-500"><i class="bookmark-search me-1"
                            data-feather="trending-up"></i><span class="txt-success">+50%</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-auto col-xl-4 col-sm-6 box-col-4 ord-xl-5 box-ord-5">
              <div class="card">
                <div class="card-header card-no-border pb-2">
                  <div class="header-top">
                    <h5><i class="fas fa-chart-simple me-2"></i>Visitors</h5>
                    <div class="card-header-right-icon">
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="visitorButton" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="visitorButton"><a
                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item" href="#!">Tomorrow</a><a
                            class="dropdown-item" href="#!">Yesterday</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body visitor-chart pt-0">
                  <div class="common-flex">
                    <h6><span class="counter" data-target="98736">0</span>K</h6>
                    <div class="d-flex">
                      <p>( <span class="txt-success f-w-500 me-1">+0.4%</span>Than last week)</p>
                    </div>
                  </div>
                  <div id="visitor_chart"></div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-sm-6 ord-xl-1 ord-md-1 box-ord-1 box-col-6">
              <div class="card">
                <div class="card-header card-no-border">
                  <div class="header-top">
                    <h5><i class="fas fa-trophy me-2"></i>Top Customers</h5>
                    <div class="card-header-right-icon">
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="customerButton" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="customerButton"><a
                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item" href="#!">Tomorrow</a><a
                            class="dropdown-item" href="#!">Yesterday</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body main-customer-table px-0 pt-0">
                  <div class="recent-table table-responsive custom-scrollbar">
                    <table class="table" id="top-customer">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Customers</th>
                          <th>Total Purchase</th>
                          <th>Total Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> <i class="fas fa-star text-warning"></i> </td>
                          <td>
                            <div class="d-flex"><img class="img-fluid img-40 rounded-circle me-2"
                                src="../assets/images/dashboard/user/2.jpg" alt="user">
                              <div class="img-content-box"><a class="f-w-500" href="products-list.html">Jane Cooper</a>
                                <p class="mb-0 f-light">#452140</p>
                              </div>
                            </div>
                           </td>
                          <td>65 Purchases</td>
                          <td class="f-w-500 txt-success">$970.00</td>
                        </tr>
                        <tr>
                          <td> <i class="fas fa-star text-warning"></i> </td>
                          <td>
                            <div class="d-flex"><img class="img-fluid img-40 rounded-circle me-2"
                                src="../assets/images/dashboard/user/3.jpg" alt="user">
                              <div class="img-content-box"><a class="f-w-500" href="products-list.html">Wade Warren</a>
                                <p class="mb-0 f-light">#844967</p>
                              </div>
                            </div>
                           </td>
                          <td>42 Purchases</td>
                          <td class="f-w-500 txt-success">$300.00</td>
                        </tr>
                        <tr>
                          <td> <i class="fas fa-star text-warning"></i> </td>
                          <td>
                            <div class="d-flex"><img class="img-fluid img-40 rounded-circle me-2"
                                src="../assets/images/dashboard/user/4.jpg" alt="user">
                              <div class="img-content-box"><a class="f-w-500" href="products-list.html">Guy Hawkins</a>
                                <p class="mb-0 f-light">#321489</p>
                              </div>
                            </div>
                           </td>
                          <td>38 Purchases</td>
                          <td class="f-w-500 txt-success">$900.00</td>
                        </tr>
                        <tr>
                          <td> <i class="fas fa-star text-warning"></i> </td>
                          <td>
                            <div class="d-flex"><img class="img-fluid img-40 rounded-circle me-2"
                                src="../assets/images/dashboard/user/5.jpg" alt="user">
                              <div class="img-content-box"><a class="f-w-500" href="products-list.html">Jake Spy</a>
                                <p class="mb-0 f-light">#954687</p>
                              </div>
                            </div>
                           </td>
                          <td>23 Purchases</td>
                          <td class="f-w-500 txt-success">$300.00</td>
                        </tr>
                        <tr>
                          <td> <i class="fas fa-star text-warning"></i> </td>
                          <td>
                            <div class="d-flex"><img class="img-fluid img-40 rounded-circle me-2"
                                src="../assets/images/dashboard-9/user/1.png" alt="user">
                              <div class="img-content-box"><a class="f-w-500" href="products-list.html">Devin Jake</a>
                                <p class="mb-0 f-light">#562778</p>
                              </div>
                            </div>
                           </td>
                          <td>12 Purchases</td>
                          <td class="f-w-500 txt-success">$500.00</td>
                        </tr>
                        <tr>
                          <td> <i class="fas fa-star text-warning"></i> </td>
                          <td>
                            <div class="d-flex"><img class="img-fluid img-40 rounded-circle me-2"
                                src="../assets/images/dashboard-9/user/2.png" alt="user">
                              <div class="img-content-box"><a class="f-w-500" href="products-list.html">Jacob Jones</a>
                                <p class="mb-0 f-light">#589356</p>
                              </div>
                            </div>
                           </td>
                          <td>10 Purchases</td>
                          <td class="f-w-500 txt-success">$420.00</td>
                        </tr>
                        <tr>
                          <td> <i class="fas fa-star text-warning"></i> </td>
                          <td>
                            <div class="d-flex"><img class="img-fluid img-40 rounded-circle me-2"
                                src="../assets/images/dashboard-9/user/5.png" alt="user">
                              <div class="img-content-box"><a class="f-w-500" href="products-list.html">Jams Bone</a>
                                <p class="mb-0 f-light">#589657</p>
                              </div>
                            </div>
                           </td>
                          <td>10 Purchases</td>
                          <td class="f-w-500 txt-success">$440.00</td>
                        </tr>
                        <tr>
                          <td> <i class="fas fa-star text-warning"></i> </td>
                          <td>
                            <div class="d-flex"><img class="img-fluid img-40 rounded-circle me-2"
                                src="../assets/images/dashboard-9/user/3.png" alt="user">
                              <div class="img-content-box"><a class="f-w-500" href="products-list.html">Mili Pais</a>
                                <p class="mb-0 f-light">#589654</p>
                              </div>
                            </div>
                           </td>
                          <td>12 Purchases</td>
                          <td class="f-w-500 txt-success">$240.00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-5 col-lg-6 box-col-6 ord-xl-2 ord-md-3 box-ord-2">
              <div class="card">
                <div class="card-header card-no-border">
                  <div class="header-top">
                    <h5><i class="fas fa-chart-line me-2"></i>Sales Statistical Overview</h5>
                    <div class="card-header-right-icon">
                      <div class="dropdown custom-dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false">Year</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#!">Day</a></li>
                          <li><a class="dropdown-item" href="#!">Month</a></li>
                          <li><a class="dropdown-item" href="#!">Year</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <div class="row m-0 overall-card">
                    <div class="col-12 p-0">
                      <div class="chart-right">
                        <div class="row">
                          <div class="col-xl-12">
                            <div class="card-body p-0 statistical-card">
                              <ul class="d-flex m-b-15">
                                <li>
                                  <h5 class="counter" data-target="19897">0</h5><span class="f-light">Total Cost</span>
                                </li>
                                <li>
                                  <h5>
                                    $<span class="counter" data-target="849058">0</span></h5><span class="f-light">Total
                                    Revenue</span>
                                </li>
                              </ul>
                              <div class="current-sale-container">
                                <div id="chart-currently"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 ord-xl-3 ord-md-4 box-ord-3">
              <div class="card monthly-header">
                <div class="card-header card-no-border">
                  <div class="header-top">
                    <h5><i class="fas fa-bullseye me-2"></i>Monthly Target</h5>
                    <div class="card-header-right-icon">
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="monthlyButton" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="monthlyButton"><a
                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item" href="#!">Tomorrow</a><a
                            class="dropdown-item" href="#!">Yesterday</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="monthly-target">
                    <div class="position-relative" id="monthly_target"></div>
                  </div>
                  <div class="target-content">
                    <p>Revenue Surges! Today's earnings soar to $3653, marking an impressive uptick from last month.
                      Keep the momentum going!</p>
                    <div class="common-box">
                      <ul class="common-flex">
                        <li>
                          <h6>Revenue</h6><span class="common-space badge badge-light-success"> <i class="me-1"
                              data-feather="trending-up"></i>$20k</span>
                        </li>
                        <li>
                          <h6>Target</h6><span class="common-space badge badge-light-danger"><i class="me-1"
                              data-feather="trending-down"></i>$16k</span>
                        </li>
                        <li>
                          <h6>Today</h6><span class="common-space badge badge-light-success"><i class="me-1"
                              data-feather="trending-up"></i>$1.6k</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-md-6 ord-xl-4 ord-md-5 box-ord-4">
              <div class="card activity-log notification main-timeline">
                <div class="card-header card-no-border">
                  <div class="header-top">
                    <h5><i class="fas fa-history me-2"></i>Activity Log</h5>
                    <div class="card-header-right-icon">
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="activityButton" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="activityButton"><a
                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item" href="#!">Tomorrow</a><a
                            class="dropdown-item" href="#!">Yesterday</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0 dark-timeline basic-timeline">
                  <ul>
                    <li class="d-flex">
                      <div class="timeline-dot-primary"></div>
                      <div class="w-100 ms-3">
                        <div class="d-flex justify-content-between align-items-center">
                          <p class="mb-0 f-16 f-w-500">Brooklyn Simmons<span class="f-w-400">(Commented:<a
                                href="#!">&nbsp;NFT App</a>)</span></p><span class="c-light">7:00 AM </span>
                        </div>
                        <p class="mb-0 f-light pb-1">This smithe design looks great...</p>
                        <p class="date-content p-0">22 Feb 2024</p>
                      </div>
                    </li>
                    <li class="d-flex">
                      <div class="timeline-dot-secondary"></div>
                      <div class="w-100 ms-3">
                        <div class="d-flex justify-content-between align-items-center">
                          <p class="mb-0 f-16 f-w-500">Leslie Alexander<span class="f-w-400">(Shared images:<a
                                href="#!">&nbsp; Barkha</a>)</span></p><span class="c-light">5:12 AM </span>
                        </div>
                        <p class="mb-0 f-light pb-1">Food Delivery App figma &amp; Ai...</p>
                        <ul class="common-flex pb-1">
                          <li><img class="img-fluid" src="../assets/images/dashboard/bg-1.png" alt="background"></li>
                          <li><img class="img-fluid" src="../assets/images/dashboard/bg-2.png" alt="background"></li>
                          <li><img class="img-fluid" src="../assets/images/dashboard/bg-3.png" alt="background"></li>
                        </ul>
                        <p class="date-content p-0">15 Feb 2024</p>
                      </div>
                    </li>
                    <li class="d-flex">
                      <div class="timeline-dot-success"></div>
                      <div class="w-100 ms-3">
                        <div class="d-flex justify-content-between align-items-center">
                          <p class="mb-0 f-16 f-w-500">Kristin Watson <span class="f-w-400">(Add new screen: <a
                                href="#!">&nbsp;Cuba Admin</a>)</span></p><span class="c-light">7:00 AM </span>
                        </div>
                        <p class="mb-0 f-light pb-1">Make sure your AI file is cloud storage...</p>
                        <p class="date-content p-0">10 Jan 2024</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xxl-7 col-lg-8 ord-xl-6 ord-md-6 box-ord-6 box-col-8e">
              <div class="card">
                <div class="card-header card-no-border">
                  <div class="header-top">
                    <h5><i class="fas fa-shopping-cart me-2"></i>Recent Orders</h5>
                    <div class="card-header-right-icon">
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="recentButton" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="recentButton"><a
                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item" href="#!">Tomorrow</a><a
                            class="dropdown-item" href="#!">Yesterday</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 pt-0 common-option">
                  <div class="recent-table table-responsive currency-table recent-order-table custom-scrollbar">
                    <table class="table" id="main-recent-order">
                      <thead>
                        <tr>
                          <th><i class="fas fa-box"></i></th>
                          <th>Product Name</th>
                          <th>Customers</th>
                          <th>Qty</th>
                          <th>Total Price</th>
                          <th>Order Date</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><i class="fas fa-bag-shopping"></i></td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <div class="currency-icon warning"><img class="img-fluid"
                                  src="../assets/images/dashboard-2/order/sub-product/16.png" alt=""></div>
                              <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">Bag</a>
                                <p class="c-o-light">#452140 </p>
                              </div>
                            </div>
                           </td>
                          <td>Jenny Wilson</td>
                          <td>2 PCS</td>
                          <td>$2,854</td>
                          <td>16 Jan,2024</td>
                          <td>
                            <button class="btn button-light-success txt-success f-w-500">Delivered</button>
                           </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-couch"></i></td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <div class="currency-icon warning"><img class="img-fluid"
                                  src="../assets/images/dashboard-2/order/sub-product/25.png" alt=""></div>
                              <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">Sofa</a>
                                <p class="c-o-light">#844967</p>
                              </div>
                            </div>
                           </td>
                          <td>Esther Howard</td>
                          <td>1 PCS</td>
                          <td>$9,943</td>
                          <td>21 Feb,2024</td>
                          <td>
                            <button class="btn button-light-warning txt-warning f-w-500">In Progress</button>
                           </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-lightbulb"></i></td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <div class="currency-icon warning"><img class="img-fluid"
                                  src="../assets/images/dashboard-2/order/sub-product/26.png" alt=""></div>
                              <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">Lamp</a>
                                <p class="c-o-light">#321489</p>
                              </div>
                            </div>
                           </td>
                          <td>Darrell Steward</td>
                          <td>1 PCS</td>
                          <td>$8,195</td>
                          <td>09 Mar,2024</td>
                          <td>
                            <button class="btn button-light-info txt-info f-w-500">Pending</button>
                           </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-clock"></i></td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <div class="currency-icon warning"><img class="img-fluid"
                                  src="../assets/images/dashboard-2/order/sub-product/24.png" alt=""></div>
                              <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">Watch</a>
                                <p class="c-o-light">#954687</p>
                              </div>
                            </div>
                           </td>
                          <td>Dianne Russell</td>
                          <td>3 PCS</td>
                          <td>$1,706</td>
                          <td>14 Apr,2024</td>
                          <td>
                            <button class="btn button-light-danger txt-danger f-w-500">Canceled</button>
                           </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-futbol"></i></td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <div class="currency-icon warning"><img class="img-fluid"
                                  src="../assets/images/dashboard-2/order/sub-product/6.png" alt=""></div>
                              <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">Football</a>
                                <p class="c-o-light">#896748</p>
                              </div>
                            </div>
                           </td>
                          <td>Darrell Steward</td>
                          <td>2 PCS</td>
                          <td>$7,580</td>
                          <td>14 Apr,2024</td>
                          <td>
                            <button class="btn button-light-danger txt-danger f-w-500">Canceled</button>
                           </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-tshirt"></i></td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <div class="currency-icon warning"><img class="img-fluid"
                                  src="../assets/images/dashboard-2/order/sub-product/10.png" alt=""></div>
                              <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">T-shirt</a>
                                <p class="c-o-light">#321489</p>
                              </div>
                            </div>
                           </td>
                          <td>Darrell Steward</td>
                          <td>1 PCS</td>
                          <td>$8,195</td>
                          <td>09 Mar,2024</td>
                          <td>
                            <button class="btn button-light-info txt-info f-w-500">Pending</button>
                           </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-bed"></i></td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <div class="currency-icon warning"><img class="img-fluid"
                                  src="../assets/images/dashboard-2/order/sub-product/11.png" alt=""></div>
                              <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">Sleeper</a>
                                <p class="c-o-light">#452140 </p>
                              </div>
                            </div>
                           </td>
                          <td>Courtney Henry</td>
                          <td>2 PCS</td>
                          <td>$2,854</td>
                          <td>16 Jan,2024</td>
                          <td>
                            <button class="btn button-light-success txt-success f-w-500">Delivered</button>
                            </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-shoe-prints"></i></td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <div class="currency-icon warning"><img class="img-fluid"
                                  src="../assets/images/dashboard-2/order/sub-product/14.png" alt=""></div>
                              <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">Shoes</a>
                                <p class="c-o-light">#844967</p>
                              </div>
                            </div>
                            </td>
                          <td>Esther Howard</td>
                          <td>1 PCS</td>
                          <td>$9,943</td>
                          <td>21 Feb,2024</td>
                          <td>
                            <button class="btn button-light-warning txt-warning f-w-500">In Progress</button>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6 box-col-4 ord-xl-7 ord-md-2 box-ord-7">
              <div class="card buy-card"><img class="img-fluid" src="../assets/images/dashboard/purchase1.png"
                  alt="vector mens with laptop">
                <div class="card-body">
                  <h6 class="mb-3"><i class="fas fa-gem me-2"></i>Buy <a class="txt-info" href="#!">Pro Account </a>to Explore Premium Features</h6><a
                    class="purchase-btn btn btn-primary btn-hover-effect f-w-500" href="https://1.envato.market/3GVzd"
                    target="_blank">Buy Now</a>
                </div>
              </div>
            </div>
            <div class="col-xxl-5 col-lg-6 ord-xl-9 ord-md-7 box-ord-7 box-col-6">
              <div class="card sales-report">
                <div class="card-header card-no-border">
                  <div class="header-top">
                    <h5><i class="fas fa-chart-bar me-2"></i>Sales Report</h5>
                    <div class="card-header-right-icon">
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="salesButton" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesButton"><a
                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item" href="#!">Tomorrow</a><a
                            class="dropdown-item" href="#!">Yesterday</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <ul class="balance-data">
                    <li><span class="circle bg-primary"></span><span class="c-light ms-1">Orders</span></li>
                    <li><span class="circle bg-warning"> </span><span class="c-light ms-1">Earnings</span></li>
                    <li><span class="circle bg-secondary"> </span><span class="c-light ms-1">Refunds</span></li>
                  </ul>
                  <div id="sale_report"></div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-lg-6 ord-xl-10 ord-md-8 box-ord-7 box-col-6">
              <div class="card">
                <div class="card-header card-no-border">
                  <div class="header-top">
                    <h5><i class="fas fa-calendar-check me-2"></i>Manage Appointments</h5>
                    <div class="card-header-right-icon">
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="manageButton" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="manageButton"><a
                            class="dropdown-item" href="#!">Today</a><a class="dropdown-item" href="#!">Tomorrow</a><a
                            class="dropdown-item" href="#!">Yesterday</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <ul class="appointments-wrapper">
                    <li class="d-flex align-items-start"><span>12:30</span>
                      <div class="bg-lighter-primary"></div>
                      <div class="main-box">
                        <div class="mb-2"> <span>Participating Meeting</span><span class="c-o-light">There are many
                            variations of passages available</span><span class="txt-primary">2:00 PM - 4:30 PM</span>
                        </div>
                        <div>
                          <button class="btn btn-primary">General</button>
                        </div>
                      </div>
                    </li>
                    <li class="d-flex align-items-start"><span>11:30</span>
                      <div class="bg-lighter-warning"></div>
                      <div class="main-box">
                        <div> <span>Customer Support issues</span></div>
                      </div>
                    </li>
                    <li class="d-flex align-items-start"><span>10:25</span>
                      <div class="bg-lighter-dark"></div>
                      <div class="main-box">
                        <div> <span>Read the report</span></div>
                      </div>
                    </li>
                    <li class="d-flex align-items-start"><span>09:00</span>
                      <div class="bg-lighter-success"></div>
                      <div class="main-box">
                        <div> <span>Development issue #26</span></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid Ends-->
      </div>
      <!-- footer start-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 footer-copyright text-center">
              <p class="mb-0">Copyright <span class="year-update"> </span> © Cuba Theme By Pixelstrap </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- latest jquery-->
  <script src="../assets/js/jquery.min.js"></script>
  <!-- Bootstrap js-->
  <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- scrollbar js-->
  <script src="../assets/js/scrollbar/simplebar.min.js"></script>
  <script src="../assets/js/scrollbar/custom.js"></script>
  <!-- Sidebar jquery-->
  <script src="../assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <script src="../assets/js/sidebar-menu.js"></script>
  <script src="../assets/js/sidebar-pin.js"></script>
  <script src="../assets/js/clock.js"></script>
  <script src="../assets/js/slick/slick.min.js"></script>
  <script src="../assets/js/slick/slick.js"></script>
  <script src="../assets/js/header-slick.js"></script>
  <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
  <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
  <script src="../assets/js/counter/counter-custom.js"></script>
  <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
  <script src="../assets/js/dashboard/default.js"></script>
  <script src="../assets/js/notify/index.js"></script>
  <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/js/datatable/datatables/dataTables.js"></script>
  <script src="../assets/js/datatable/datatables/dataTables.select.js"></script>
  <script src="../assets/js/datatable/datatables/select.bootstrap5.js"></script>
  <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
  <script src="../assets/js/typeahead/handlebars.js"></script>
  <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
  <script src="../assets/js/typeahead/typeahead.custom.js"></script>
  <script src="../assets/js/typeahead-search/handlebars.js"></script>
  <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/script1.js"></script>
  <script src="../assets/js/theme-customizer/customizer.js"></script>
 

</body>

</html>