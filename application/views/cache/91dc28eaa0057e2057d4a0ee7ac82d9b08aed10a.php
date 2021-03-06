<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center"><img src="<?php echo e(site_url('assets/')); ?>img/avatar.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Admin</h2><span>Administrator</span>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="<?php echo e(site_url()); ?>" class="brand-small text-center"> <strong>F</strong><strong class="text-info">A</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">Menu</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">                  
                <li class="active"><a class="menu" href="<?php echo e(site_url()); ?>"> <i class="fa fa-home"></i>Home</a></li>
                <li class=""><a class="menu" href="<?php echo e(site_url('catatan/masuk')); ?>"> <i class="fa fa-sign-in"></i>Pemasukan</a></li>
                <li class=""><a class="menu" href="<?php echo e(site_url('catatan/keluar')); ?>"> <i class="fa fa-sign-out"></i>Pengeluaran</a></li>
                <li  class=""><a class="menu" href="<?php echo e(site_url('catatan/histori')); ?>" ><i class="fa fa-bank"></i>Histori</a></li>
                <li  class=""><a class="menu" href="<?php echo e(site_url('laporan')); ?>" ><i class="fa fa-file-pdf-o"></i>Laporan</a></li>
                </li>
                <li class=""><a href="<?php echo e(site_url('auth/logout')); ?>" class="text-danger btn-logout"> <i class="fa fa-sign-out"></i>Keluar</a></li>
            </ul>
        </div>
    </div>
</nav>

<?php /* C:\xampp\htdocs\ci_keuangan\application\views/template/sidebar.blade.php */ ?>