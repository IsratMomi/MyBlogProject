
<script src="{{asset('/')}}adminDashboard/vendors/js/vendor.bundle.base.js"></script>
<!-- Plugin js for this page -->
<script src="{{asset('/')}}adminDashboard/vendors/chart.js/Chart.min.js"></script>
<script src="{{asset('/')}}adminDashboard/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="{{asset('/')}}adminDashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="{{asset('/')}}adminDashboard/js/dataTables.select.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('/')}}adminDashboard/js/off-canvas.js"></script>
<script src="{{asset('/')}}adminDashboard/js/hoverable-collapse.js"></script>
<script src="{{asset('/')}}adminDashboard/js/template.js"></script>
<script src="{{asset('/')}}adminDashboard/js/settings.js"></script>
<script src="{{asset('/')}}adminDashboard/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('/')}}adminDashboard/js/dashboard.js"></script>
<script src="{{asset('/')}}adminDashboard/js/Chart.roundedBarCharts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- End custom js for this page-->
<script>
    $(function() {
        $.ajaxSetup({
            headers : {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content'),
            }
        });
    });
</script>
@yield('message-js')