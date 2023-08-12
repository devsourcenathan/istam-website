{{-- <footer class="main-footer">
    <div class="footer-left">
        <a href="/">Systeme d'evaluation du personnel</a>
    </div>
    <div class="footer-right">
    </div>
</footer> --}}
</div>
</div>

<script src="{{ asset('admin/assets/js/app.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('admin/assets/bundles/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}">
</script>
<script src="{{ asset('admin/assets/bundles/datatables/export-tables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/datatables/export-tables/buttons.flash.min.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/datatables/export-tables/jszip.min.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/datatables/export-tables/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/datatables/export-tables/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/datatables/export-tables/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/page/datatables.js') }}"></script>
<!-- General JS Scripts -->


<!-- Page Specific JS File -->
<script src="{{ asset('admin/assets/js/page/index.js') }}"></script>
<!-- Template JS File -->
<script src="{{ asset('admin/assets/js/scripts.js') }}"></script>
<!-- Custom JS File -->
<script src="{{ asset('admin/assets/js/custom.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/izitoast/js/iziToast.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/page/toastr.js') }}"></script>
<script>
    @if (session('success'))
        iziToast.success({
            title: '',
            message: "{{ session('success') }}",
            position: 'topRight'
        });
    @endif
</script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
