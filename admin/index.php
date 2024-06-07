<?php
include_once 'layouts/header.php';
$queryBarang = "SELECT COUNT(item_id) AS total_barang FROM item";
$resultBarang = mysqli_query($conn, $queryBarang);
$rowBarang = mysqli_fetch_assoc($resultBarang);
$totalBarang = $rowBarang['total_barang'];

// Query untuk menghitung total kategori
$queryKategori = "SELECT COUNT(category_id) AS total_kategori FROM category";
$resultKategori = mysqli_query($conn, $queryKategori);
$rowKategori = mysqli_fetch_assoc($resultKategori);
$totalKategori = $rowKategori['total_kategori'];

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
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Barang</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $totalBarang; ?></h1>
                                <small>Total Barang</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Kategori</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $totalKategori; ?></h1>
                                <small>Total Kategori</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>List Item</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table  table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Deskripsi</th>
                                                <th>Kategori</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT item.*, category.category_name FROM item INNER JOIN category ON item.category_id = category.category_id";
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                                $no = 1;
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<tr class='gradeX'>";
                                                    echo "<td>" . $no . "</td>";
                                                    echo "<td>" . $row['item_name'] . "</td>";
                                                    echo "<td>" . $row['item_description'] . "</td>";
                                                    echo "<td>" . $row['category_name'] . "</td>";
                                                    echo "<td class='center'>
                                                            <a href='edit_data_item.php?id=" .  $row['item_id'] . " ' class='btn btn-primary dim btn-sm-dim' type='button'><i class='fa fa-pencil'></i></a>
                                                            <a href='action/deleteBarang.php?id=". $row['item_id'] . " ' class='btn btn-danger dim btn-sm-dim text-white  ' type='button'><i class='fa fa-trash-o'></i></a>
                                                          </td>";
                                                    echo "</tr>";
                                                    $no++;
                                                }
                                            }

                                            mysqli_close($conn);
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
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
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'ExampleFile'
                    },
                    {
                        extend: 'pdf',
                        title: 'ExampleFile'
                    },

                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });
    </script>
</body>

</html>