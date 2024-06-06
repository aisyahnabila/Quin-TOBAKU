<?php
include_once 'layouts/header.php';
?>
<!-- CSS LINK -->
<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

<body>
    <div id="wrapper">
        <?php
        include_once 'layouts/sidebar.php'
        ?>
        <div id="page-wrapper" class="gray-bg">
            <?php
            include_once 'layouts/navbar.php'
            ?>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Tambahkan Barang</h5>
                            </div>
                            <div class="ibox-content">
                                <form role="form">
                                    <div class="row">

                                        <div class="col-sm-6 ">

                                            <div class="form-group"><label>Nama Barang</label> <input type="text" placeholder="Enter email" class="form-control"></div>
                                            <div class="form-group"><label>Deskripsi</label> <textarea class="form-control"></textarea></div>
                                            <div>

                                            </div>

                                        </div>
                                        <div class="col-sm-6 ">

                                            <div class="form-group"><label>Kategori</label>
                                                <select class="form-control m-b" name="kategori">
                                                    <option>option 1</option>
                                                    <option>option 2</option>
                                                    <option>option 3</option>
                                                    <option>option 4</option>
                                                </select>
                                            </div>
                                            <div class="form-group"><label>Foto</label>
                                                <div class="custom-file">
                                                    <input id="logo" type="file" class="custom-file-input">
                                                    <label for="logo" class="custom-file-label">Choose file...</label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <button class="btn btn-lg btn-primary w-full m-t-n-xs" type="submit"><strong>+ Tambahkkan Barang</strong></button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="float-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2018
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/dataTables/datatables.min.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- EayPIE -->
    <script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
</body>

</html>