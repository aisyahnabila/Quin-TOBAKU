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

                                <form role="form" action="action/createBarang.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <input type="text" name="nama_barang" placeholder="Masukkan barang" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Komposisi</label>
                                                <input type="text" name="komposisi" class="form-control" required placeholder="Contoh : Mentega,Buah,Sayur">
                                            </div>
                                            <div class="form-group">
                                                <label>Deskripsi</label>
                                                <textarea name="deskripsi" class="form-control" required></textarea>
                                            </div>

                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="form-control m-b" name="kategori" required>
                                                    <?php
                                                    $sql = "SELECT * FROM category";
                                                    $result = mysqli_query($conn, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            echo "<option value='" . $row['category_id'] . "'>" . $row['category_name'] . "</option>";
                                                        }
                                                    } else {
                                                        echo "<option value=''>Tidak ada data kategori</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Foto</label>
                                                <div class="custom-file">
                                                    <input id="foto" name="foto" type="file" class="custom-file-input" required>
                                                    <label for="foto" class="custom-file-label">Choose file...</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Stok</label>
                                                <input type="number" name="stok" placeholder="Masukkan stok" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga</label>
                                                <input type="number" name="harga" placeholder="Masukkan harga" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-lg btn-primary w-full m-t-n-xs" name="save" type="submit"><strong>+ Tambah Barang</strong></button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            include 'layouts/footer.php'
            ?>
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