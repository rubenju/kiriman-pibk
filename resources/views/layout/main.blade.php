<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aplikasi Kiriman PIBK</title>
  <!-- Favicons -->
  <link href="/assets/img/posindonesia-logo.png" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  {{-- <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet"> --}}
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  {{-- <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet"> --}}
  <link href="/assets/vendor/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <script src="/assets/vendor/jquery/jquery-3.6.3.min.js"></script>
  <script src="/assets/vendor/jquery-ui/jquery-ui.min.js"></script>
  <script src="/assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <link href="/assets/css/pibk.css" rel="stylesheet">
  {{-- <link href="{{ asset('assets/css/pibk.css') }}" rel="stylesheet"> --}}

  @stack('page-style')
</head>
<body>
  <div class="position-fixed top-50 start-50" style="z-index: 999; display: none;" id="preloader">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>
  <div>
    @include('partial.topbar')
  @include('partial.sidebar')
  
  <main id="main" class="main container-blur">
    <div class="pagetitle">
      <h1>Kiriman PIBK</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">PIBK</a></li>
          <li class="breadcrumb-item active">{{ $title }}</li>
        </ol>
      </nav>
    </div>
    @yield('contents')
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
      <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header" id="toast-header">
          {{-- <img src="..." class="rounded me-2" alt="..."> --}}
          <strong class="me-auto" id="toast-title"></strong>
          {{-- <small>11 mins ago</small> --}}
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
        </div>
      </div>
    </div>
  </main>
  @include('partial.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  </div>
  
  <!-- Vendor JS Files -->
  {{-- <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script> --}}
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  {{-- <script src="/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="/assets/vendor/echarts/echarts.min.js"></script>
  <script src="/assets/vendor/quill/quill.min.js"></script>
  <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script> --}}

  <!-- Template Main JS File -->
  <script src="/assets/js/main-new.js"></script>
  @stack('page-script')
</body>
</html>