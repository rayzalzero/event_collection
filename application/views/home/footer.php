    <!-- Footer Area -->
    <div class="footer-container">
        <!-- Begin Footer -->
        <div class="container">
            <div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>About Us</h5>
                    <img src="<?= site_url('assets/users/img/logo-footer.png');?>" alt="" style="width: 70px;" /><br /><br />
                    <address> Jl. Raya Janti Karang Jambe No. 143 Yogyakarta 55198, Indonesia <br/>
                    <a href="https://www.akakom.ac.id/" target="_blank">Website</a>
                    <a href="https://www.google.co.id/maps/place/STMIK+Akakom+Yogyakarta/@-7.7935181,110.4054529,17z" target="blank">Lihat Peta</a>
                    </address>
                </div>
        </div>
    </div>
    <!-- End Footer -->
    <!-- Scroll to Top -->
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    <script>
    $(document).ready(function() {
        $('.dataTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend:    'excelHtml5',
                    text:      '<i class="icon-file-excel"></i> Excel',
                    filename:  'Laporan ' + moment().format('YYYY-MM-DD HHmmss'),
                    exportOptions: {
                        columns: ':visible:not(.action)',
                        row:':visible',
                        format: {
                            body: function(data, row, col,node) {
                                var elementType = node.firstChild;
                                if (elementType != null) {
                                    if (elementType.nodeName == "SELECT") {
                                        return  $(elementType).find(':selected').text();
                                    } else return data;
                                }
                                else return data;
                            }
                        }
                    },
                    // className: 'btn bg-slate-700',
                    titleAttr: 'Excel'
                }
            ]
        });
    });
    </script>
</html>