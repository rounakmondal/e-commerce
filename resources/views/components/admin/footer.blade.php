        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="assets/js/vendor/apexcharts.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <script>
            $(document).ready(function() {
              toastr.options = {
                          'closeButton': true,
                          'debug': false,
                          'newestOnTop': false,
                          'progressBar': true,
                          'positionClass': 'toast-top-right',
                          'preventDuplicates': false,
                          'showDuration': '1000',
                          'hideDuration': '1000',
                          'timeOut': '5000',
                          'extendedTimeOut': '1000',
                          'showEasing': 'swing',
                          'hideEasing': 'linear',
                          'showMethod': 'fadeIn',
                          'hideMethod': 'fadeOut',
                      }
                toastr.options.timeOut =8000;
                @if (Session::has('error'))
                    toastr.error('{{ Session::get('error') }}');
                @elseif(Session::has('success'))
                    toastr.success('{{ Session::get('success') }}');
                @elseif(Session::has('info'))
                    toastr.info('{{ Session::get('info') }}');
                @endif
               
            });
          
          </script>
    </body>

<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 18:06:07 GMT -->
</html>