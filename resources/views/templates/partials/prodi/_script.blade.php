
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('prodi/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('prodi/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('prodi/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('prodi/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('prodi/assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('prodi/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script src="{{asset('prodi/plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('prodi/plugins/table/datatable/button-ext/jszip.min.js')}}"></script>
    <script src="{{asset('prodi/plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
    <script src="{{asset('prodi/plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>

    <script src="{{asset('admin/plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/dashboard/dash_1.js')}}"></script>

<script>
    $('#html5-extension').DataTable( {
        dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
        buttons: {
            buttons: [
                { extend: 'copy', className: 'btn' },
                { extend: 'csv', className: 'btn' },
                { extend: 'excel', className: 'btn' },
                { extend: 'print', className: 'btn' }
            ]
        },
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7
    } );
</script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="assets/js/pages/helpdesk.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('prodi/plugins/lightbox/photoswipe.min.js')}}"></script>
    <script src="{{asset('prodi/plugins/lightbox/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('prodi/plugins/lightbox/custom-photswipe.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

