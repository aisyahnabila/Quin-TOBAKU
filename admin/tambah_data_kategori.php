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
                                <h5>Tambahkan Kategori</h5>
                            </div>
                            <div class="ibox-content">
                                <form role="form" method="POST" action="action/createKategori.php">
                                    <div class="row">

                                        <div class="col-sm-12 ">

                                            <div class="form-group"><label>Nama Kategori</label> <input type="text" name="nama" placeholder="Masukkan nama kategori" class="form-control"></div>

                                        </div>
                                    </div>
                                    <button class="btn btn-lg btn-primary w-full m-t-n-xs" name="save" type="submit"><strong>+ Tambahkkan Kategori</strong></button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>List Kategori</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table  table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kategori</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM category";
                                            $result = mysqli_query($conn, $sql);
                                            if (mysqli_num_rows($result) > 0) {
                                                $no = 1;
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<tr class='gradeX'>";
                                                    echo "<td>" . $no++ . "</td>";
                                                    echo "<td>" . $row['category_name'] . "</td>";
                                                    echo "<td class='center'>";
                                                    echo "<a href='edit_data_kategori.php?id=" .  $row['category_id'] . " ' class='btn btn-primary dim btn-sm-dim text-white ms-2' type='button'><i class='fa fa-pencil'></i></a>";
                                                    echo "<a href='action/deleteKategori.php?id=" . $row['category_id'] . "' class='btn btn-danger dim btn-sm-dim text-white' type='button'><i class='fa fa-trash-o'></i></a>";
                                                    echo "</td>";
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "<tr class='gradeX'>";
                                                echo "<td colspan='3' class='text-center'>Tidak ada data kategori</td>";
                                                echo "</tr>";
                                            }
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