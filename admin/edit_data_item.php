<?php
include_once 'layouts/header.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM item WHERE item_id='$id'");
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
                            <?php
                            while ($row = mysqli_fetch_array($data)) {
                                $selectedCategoryId = $row['category_id'];
                            ?>
                                <div class="ibox-title">
                                    <h5>Edit item - <?php echo $row['item_name'] ?></h5>
                                </div>
                                <div class="ibox-content">
                                    <form role="form" action="action/editBarang.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-6 ">
                                                <div class="form-group">
                                                    <label>Nama Barang</label>
                                                    <input type="text" name="nama_barang" placeholder="Masukkan barang" value="<?php echo $row['item_name'] ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Deskripsi</label>
                                                    <textarea name="deskripsi" class="form-control" required><?php echo $row['item_description'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <div class="form-group">
                                                    <label>Kategori</label>
                                                    <select class="form-control m-b" name="kategori" required>
                                                        <?php
                                                        $sql = "SELECT * FROM category";
                                                        $result = mysqli_query($conn, $sql);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($category = mysqli_fetch_assoc($result)) {
                                                                $selected = ($category['category_id'] == $selectedCategoryId) ? 'selected' : '';
                                                                echo "<option value='" . $category['category_id'] . "' $selected>" . $category['category_name'] . "</option>";
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
                                                        <input id="foto" name="foto" type="file" class="custom-file-input">
                                                        <label for="foto" class="custom-file-label">Choose file...</label>
                                                    </div>
                                                    <?php if (!empty($row['image'])) : ?>
                                                        <p>Current Image: <a href="path/to/uploads/<?php echo $row['image']; ?>" target="_blank">View Image</a></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>">
                                        <button class="btn btn-lg btn-primary w-full m-t-n-xs" name="save" type="submit"><strong>Edit Barang</strong></button>
                                    </form>
                                <?php
                            }
                                ?>
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