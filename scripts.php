<script>
      var isFluid = JSON.parse(localStorage.getItem('isFluid'));
      if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
      }
    </script>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/lib/@fortawesome/all.min.js"></script>
    <script src="assets/lib/stickyfilljs/stickyfill.min.js"></script>
    <script src="assets/lib/sticky-kit/sticky-kit.min.js"></script>
    <script src="assets/lib/is_js/is.min.js"></script>
    <script src="assets/lib/lodash/lodash.min.js"></script>
    <script src="assets/lib/perfect-scrollbar/perfect-scrollbar.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <script src="assets/lib/chart.js/Chart.min.js"></script>
    <script src="assets/lib/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/lib/datatables-bs4/dataTables.bootstrap4.min.js"></script>
    <script src="assets/lib/datatables.net-responsive/dataTables.responsive.js"></script>
    <script src="assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
    <script src="assets/lib/leaflet/leaflet.js"></script>
    <script src="assets/lib/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="assets/lib/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="assets/js/theme.min.js"></script>