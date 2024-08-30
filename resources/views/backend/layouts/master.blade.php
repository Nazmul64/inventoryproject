<!DOCTYPE html>
<html lang="en">

  <!-- Mirrored from adminlte.io/themes/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2024 07:01:29 GMT -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student management System</title>

    <link rel="stylesheet" href="{{ asset('backend') }}/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet"
      href="{{ asset('backend') }}/code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet"
      href="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet"
      href="{{ asset('backend') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="{{ asset('backend') }}/dist/css/adminlte.min2167.css?v=3.2.0">

    <link rel="stylesheet"
      href="{{ asset('backend') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify.js/2.0.0/notify.min.js" integrity="sha512-iy8/ErLJUuqWbu30yUSCxXtE3FCDZi3y5op0Duqdp7vtpeh1E6ZyAPnRS+OrJHddh4uP30oYpwNt7TXPbmP5lQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style type="text/css">
        .notifyjs-corner {
            z-index: 30000 !important;
        }
    </style>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      <div
        class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('backend') }}/dist/img/AdminLTELogo.png"
          alt="AdminLTELogo" height="60" width="60">
      </div>

      <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#"
              role="button">
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search"
                    placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button"
                      data-widget="navbar-search">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <span>{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar"
              data-controlsidebar-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>

      <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="index3.html" class="brand-link">
          <img src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Dashboard</span>
        </a>

        @include('backend.layouts.sidebar')

      </aside>
      @yield('main_content')

@if (session()->has('success'))
    <script type="text/javascript">
        $(function(){
            $.notify("{{ session()->get('success') }}", {
                globalPosition: 'top right',
                className: 'success'
            });
        });
    </script>
@endif


      <footer class="main-footer">
        <strong>Copyright &copy; {{Carbon\Carbon::now()->year}}<a
            href="">Student_management</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.2.0
        </div>
      </footer>

      <aside class="control-sidebar control-sidebar-dark">

      </aside>

    </div>

    <script src="{{ asset('backend') }}/plugins/jquery/jquery.min.js"></script>

    <script src="{{ asset('backend') }}/plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

    <script src="{{ asset('backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('backend') }}/plugins/chart.js/Chart.min.js"></script>

    <script src="{{ asset('backend') }}/plugins/sparklines/sparkline.js"></script>

    <script src="{{ asset('backend') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="{{ asset('backend') }}/plugins/jquery-knob/jquery.knob.min.js"></script>

    <script src="{{ asset('backend') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/daterangepicker/daterangepicker.js"></script>

    <script src="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.js"></script>

    <script src="{{ asset('backend') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="{{ asset('backend') }}/dist/js/adminlte2167.js?v=3.2.0"></script>

    <script src="{{ asset('backend') }}/dist/js/demo.js"></script>

    <script src="{{ asset('backend') }}/dist/js/pages/dashboard.js"></script>
    <script src="{{ asset('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify.js/2.0.0/notify.min.js" integrity="sha512-iy8/ErLJUuqWbu30yUSCxXtE3FCDZi3y5op0Duqdp7vtpeh1E6ZyAPnRS+OrJHddh4uP30oYpwNt7TXPbmP5lQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notifyjs@3.0.0/dist/notify.js"></script>
    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
    $(document).ready(function(){
      $('#image').change(function(event){
          var reader = new FileReader();
          reader.onload = function(event){
              $('#showImage').attr('src', event.target.result);
          }
          reader.readAsDataURL(event.target.files[0]);
      });
    });
    document.addEventListener('DOMContentLoaded', function () {
    // Get the form element
    const form = document.querySelector('form');

    // Add submit event listener
    form.addEventListener('submit', function (e) {
        let valid = true;

        // Clear previous error messages
        document.querySelectorAll('.text-danger').forEach(el => el.innerText = '');

        // Validate Name
        const name1 = document.querySelector('input[name="name1"]');
        if (name1.value.trim() === '') {
            setError(name1, 'Name is required');
            valid = false;
        }

        // Validate Email
        const email = document.querySelector('input[name="email"]');
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (email.value.trim() === '') {
            setError(email, 'Email is required');
            valid = false;
        } else if (!emailPattern.test(email.value)) {
            setError(email, 'Enter a valid email');
            valid = false;
        }

        // Validate Phone
        const phone = document.querySelector('input[name="phone"]');
        if (phone.value.trim() === '') {
            setError(phone, 'Phone number is required');
            valid = false;
        }

        // Validate Address
        const address = document.querySelector('input[name="address"]');
        if (address.value.trim() === '') {
            setError(address, 'Address is required');
            valid = false;
        }

        // Validate Experience
        const experience = document.querySelector('input[name="experience"]');
        if (experience.value.trim() === '') {
            setError(experience, 'Experience is required');
            valid = false;
        }

        // Validate Salary
        const salary = document.querySelector('input[name="salary"]');
        if (salary.value.trim() === '') {
            setError(salary, 'Salary is required');
            valid = false;
        }

        // Validate Vacation
        const vacation = document.querySelector('input[name="vacation"]');
        if (vacation.value.trim() === '') {
            setError(vacation, 'Vacation days are required');
            valid = false;
        }

        // Validate City
        const city = document.querySelector('input[name="city"]');
        if (city.value.trim() === '') {
            setError(city, 'City is required');
            valid = false;
        }

        // Validate NID No
        const nid_no = document.querySelector('input[name="nid_no"]');
        if (nid_no.value.trim() === '') {
            setError(nid_no, 'NID No. is required');
            valid = false;
        }

        // Prevent form submission if validation fails
        if (!valid) {
            e.preventDefault();
        }
    });

    // Function to set error message
    function setError(element, message) {
        const errorElement = element.parentElement.querySelector('.text-danger');
        if (errorElement) {
            errorElement.innerText = message;
        }
    }
});

</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@if (Session::has('success'))
    <script>
        toastr.success("{!! Session::get('success') !!}");
    </script>
@endif


  </body>


  <!-- Mirrored from adminlte.io/themes/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2024 07:02:02 GMT -->
</html>
