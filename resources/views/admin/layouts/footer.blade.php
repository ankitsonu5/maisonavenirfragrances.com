<!--start overlay-->
<div class="overlay nav-toggle-icon"></div>
<!--end overlay-->

<!--start footer-->
<footer class="footer">
    <div class="footer-text">
        Copyright © {{ date('Y') }} All right reserved.
    </div>
</footer>
<!--end footer-->


</div>
<!--end wrapper-->


<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->


<!-- Bootstrap bundle JS -->
<script src="{{ asset('Adminasset/assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('Adminasset/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('Adminasset/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('Adminasset/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('Adminasset/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('Adminasset/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('Adminasset/assets/js/pace.min.js') }}"></script>
<script src="{{ asset('Adminasset/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
<script src="{{ asset('Adminasset/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
<script src="{{ asset('Adminasset/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>

{{-- <script src="{{ asset('Adminasset/assets/plugins/datetimepicker/js/legacy.js') }}"></script>
 <script src="{{ asset('Adminasset/assets/plugins/datetimepicker/js/picker.js') }}"></script>
 <script src="{{ asset('Adminasset/assets/plugins/datetimepicker/js/picker.time.js') }}"></script>
 <script src="{{ asset('Adminasset/assets/plugins/datetimepicker/js/picker.date.js') }}"></script>
 <script src="{{ asset('Adminasset/assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js') }}"></script> --}}

<script src="{{ asset('Adminasset/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('Adminasset/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('Adminasset/assets/js/table-datatable.js') }}"></script>


<script
    src="{{ asset('Adminasset/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js') }}">
</script>
<script src="{{ asset('Adminasset/assets/js/form-date-time-pickes.js') }}"></script>


<script src="{{ asset('Adminasset/assets/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('Adminasset/assets/js/form-select2.js') }}"></script>

<script src="{{ asset('Adminasset/assets/plugins/input-tags/js/tagsinput.js') }}"></script>

<!--app-->
<script src="{{ asset('Adminasset/assets/js/app.js') }}"></script>
<script src="{{ asset('Adminasset/assets/js/index.js') }}"></script>
<script src="{{ asset('Adminasset/main.js') }}"></script>
<script>
    new PerfectScrollbar(".best-product")

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Include Select2 JS Initialization -->
<script>
    $(document).ready(function() {
        $('#products').select2({
            placeholder: "Select Products",
            allowClear: true
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(function() {
            $('.editor').each(function(e) {
                CKEDITOR.replace(this.id, {
                    filebrowserUploadUrl: "{{ route('admin.ckeditor.upload', ['_token' => csrf_token(), 'type' => 'file']) }}",
                    filebrowserImageUploadUrl: "{{ route('admin.ckeditor.upload', ['_token' => csrf_token(), 'type' => 'image']) }}",
                    filebrowserUploadMethod: 'form',
                    allowedContent: true
                });
            });
        })
    });
</script>
</body>

</html>



@stack('scripts')

<script>
    // Function to create a toast
    function createToast(icon, title) {
        Swal.fire({
            toast: true,
            icon: icon,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            dangerMode: true,
            title: title
        });
    }
    // Check for success message
    @if (Session::has('success'))
        createToast('success', `{!! session('success') !!}`);
    @endif

    // Check for error message
    @if (Session::has('error'))
        createToast('error', `{!! session('error') !!}`);
    @endif
</script>

{{--
 <script>
     const csrfToken = $('meta[name="csrf-token"]').attr('content');

     $(".ThemeChange").click(function() {
         var selectedTheme = $(this).val();

         $.ajax({
             url: "{{ route('admin.theme.change') }}", // Change to your route for handling theme change
             type: 'post',
             headers: {
                 'X-CSRF-TOKEN': csrfToken
             },
             data: {
                 "theme": selectedTheme
             },
             success: function(data) {
                 // Update the page dynamically based on the selected theme if needed
                 var Toast = Swal.mixin({
                     toast: true,
                     type: "success",
                     position: 'top-end',
                     showConfirmButton: false,
                     timer: 5000
                 });
                 Toast.fire({
                     icon: 'success',
                     title: 'Theme changed successfully'
                 })

             },
         });
     });
 </script> --}}
