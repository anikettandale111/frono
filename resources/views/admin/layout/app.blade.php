<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{url($logo->favicon)}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    {{$logo->name}}-Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{url('assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



  <style>
  .card-header.card-header-primary {
    padding: 10px !important;
  }
  .alert {
    padding: 6px !important;
  }

  </style>
</head>

<body class="">
  <div class="wrapper ">
    <!--sidebar-->
    @include('admin.layout.sidebar')
    <div class="main-panel">
      <!-- Navbar -->
      @include('admin.layout.nav')
      <!-- End Navbar -->
      <div class="content">
        @yield('content')
      </div>
      <!--footer-->
      @include('admin.layout.footer')

    </div>

  </div>

  <!--   Core JS Files   -->
  <script src="{{url('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{url('assets/js/core/popper.min.js')}}"></script>
  <script src="{{url('assets/js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/moment.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/sweetalert2.js')}}"></script>
  <script src="{{url('assets/js/plugins/jquery.validate.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
  <script src="{{url('assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
  <script src="{{url('assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
  <script src="{{url('assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/fullcalendar.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/jquery-jvectormap.js')}}"></script>
  <script src="{{url('assets/js/plugins/nouislider.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script src="{{url('assets/js/plugins/arrive.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/chartist.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/bootstrap-notify.js')}}"></script>
  <script src="{{url('assets/js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
  <script src="{{url('assets/demo/demo.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>

</body>
<script>
$(document).ready(function() {
  $('.datatable-example').DataTable( {
    dom: 'Bfrtip',
    buttons: [
      // 'copyHtml5',
      'excelHtml5',
      'csvHtml5',
      // 'pdfHtml5'
    ]
  } );
} );
</script>
</html>
