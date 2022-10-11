<!-- Jquery js-->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap5 js-->
<script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!--Othercharts js-->
<script src="{{ asset('assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

<!-- Jquery-rating js-->
<script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

<!--Sidemenu js-->
<script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- P-scroll js-->
<script src="{{ asset('assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
<script src="{{ asset('assets/plugins/p-scrollbar/p-scroll1.js') }}"></script>
<script src="{{ asset('assets/plugins/p-scrollbar/p-scroll.js') }}"></script>


<!--INTERNAL Flot Charts js-->
<script src="{{ asset('assets/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/js/dashboard.sampledata.js') }}"></script>
<script src="{{ asset('assets/js/chart.flot.sampledata.js') }}"></script>

<!-- INTERNAL Chart js -->
<script src="{{ asset('assets/plugins/chart/chart.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

<!-- INTERNAL Apexchart js -->
<script src="{{ asset('assets/js/apexcharts.js') }}"></script>

<!--INTERNAL Moment js-->
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>

<!--INTERNAL Index js-->
<script src="{{ asset('assets/js/index1.js') }}"></script>

<!-- INTERNAL Data tables -->
<script src="{{ asset('assets/plugins/datatables/DataTables/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/DataTables/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/Responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js') }}"></script>

<!-- INTERNAL Data tables -->
<script src="{{ asset('assets/plugins/datatables/DataTables/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/DataTables/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/Buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/Buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/JSZip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/Buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/Buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/Buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/Responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/datatables.js') }}"></script>

<!-- INTERNAL Datepicker js -->
<script src="{{ asset('assets/plugins/date-picker/date-picker.js') }}"></script>
<script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>

<!--INTERNAL Form Advanced Element -->
<script src="{{ asset('assets/js/formelementadvnced.js') }}"></script>
<script src="{{ asset('assets/js/form-elements.js') }}"></script>
<script src="{{ asset('assets/js/file-upload.js') }}"></script>

<!--Date Range Picker-->
<script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

<!-- INTERNAL Select2 js -->
<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.js') }}"></script>

<!-- Simplebar JS -->
<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>

<!-- Rounded bar chart js-->
<script src="{{ asset('assets/js/rounded-barchart.js') }}"></script>


<!-- Custom js-->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- Switcher js -->
<script src="{{ asset('assets/switcher/js/switcher.js') }}"></script>

<!-- INTERNAL WYSIWYG Editor js -->
<script src="{{ asset('assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>
<script src="{{ asset('assets/js/form-editor.js') }}"></script>

<!-- INTERNAL quill js -->
<script src="{{ asset('assets/plugins/quill/quill.min.js') }}"></script>
<script src="{{ asset('assets/js/form-editor2.js') }}"></script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>


@if (Session::has('success'))
    <script>
        swal({
            title: 'Success!',
            text: '{{ Session::get("success") }}',
            icon: 'success',
            button: 'Done'
            })
    </script>
@endif
@if (Session::has('error'))
    <script>
        Swal.fire({
            title: 'Error!',
            text: '{{ Session::get("error") }}',
            icon: 'error',
            confirmButtonText: 'Error'
            })
    </script>
@endif

@stack('scripts')