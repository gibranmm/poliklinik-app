<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Poliklinik - Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/mainlogo.png') }}" />

    <!-- Custom fonts for this template-->
    <link
      href="/build/sb-admin-2/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="/build/sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet" />

  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
    @if(session('user_role') === 'admin')
      @include('components.sidebar')
      @elseif(session('dokter_id'))
        @include('components.sidebar-dokter')
        @elseif(session('pasien_id'))
          @include('components.sidebar-pasien')
      @endif
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Content -->
        <div id="content">
          <!-- Topbar -->
          @include('components.topbar')
          <!-- End of Topbar -->
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            {{-- @include('components.page-heading') --}}
            <!-- End of Page Heading -->
             <!-- Main Content -->
             @yield('content')
             <!-- End of Main Content -->


        <!-- Footer -->
        <!-- @include('components.footer') -->
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    @include('partials.logout-modal')
    <!-- End of Logout Modal -->
    <!-- End of Logout Modal -->

    <!-- Bootstrap core JavaScript-->
    <script src="/build/sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="/build/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/build/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/build/sb-admin-2/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/build/sb-admin-2/vendor/chart.js/Chart.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Page level custom scripts -->
    <script src="/build/sb-admin-2/js/demo/chart-area-demo.js"></script>
    <script src="/build/sb-admin-2/js/demo/chart-pie-demo.js"></script>
        @yield('scripts')
        @stack('scripts')
  </body>
</html>
