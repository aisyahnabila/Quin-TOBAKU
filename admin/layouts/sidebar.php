<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="img/user.jpg" width="40px" />
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Admin</span>
                        <span class="text-muted text-xs block">Administrator <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="action/logout.php">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li >
                <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li >
                <a><i class="fa fa-plus"></i> <span class="nav-label">Tambah Data</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="tambah_data_item.php">Data Item</a></li>
                    <li ><a href="tambah_data_kategori.php">Data Kategori</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
<script src="js/jquery-3.1.1.min.js"></script>
<script>
$(document).ready(function() {
    var url = window.location.href; // Get current URL
    // Loop through each nav item
    $('.nav a').each(function() {
        // Check if this nav item's href matches the URL
        if (this.href === url) {
            $(this).closest('li').addClass('active'); // Add 'active' class to the parent <li>
            $(this).parents('ul.nav-second-level').addClass('in'); // Expand second level menu if any
            $(this).parents('li').addClass('active'); // Add 'active' class to all parent <li> elements
        }
    });
});
</script>
