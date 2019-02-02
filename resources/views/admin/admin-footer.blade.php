<!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Made with Laravel
            </div>
            <!-- Default to the left -->
           <p>DISCLAIMER: This site is for educational purposes only. I do not own nor claim to own any content within this site.</p> <strong>Copyright © {{ date('Y') }} Polarrise.</strong> All rights reserved.
        </footer>

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset ('/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ('/bower_components/admin-lte/dist/js/adminlte.min.js') }}" type="text/javascript"></script>
    <!-- select2 -->
    <script src="{{ asset('/bower_components/select2/dist/js/select2.min.js') }}"></script>
    <!-- DataTable -->
    <script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
    <!-- Extra JS -->
    @yield('js')
    </body>
</html>