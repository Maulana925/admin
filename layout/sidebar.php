<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('config/assets/') ?>index3.html" class="brand-link">
    <img src="<?= base_url('config/assets/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('config/assets/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2"
          alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <?php
    $current_path = $_SERVER['REQUEST_URI'];
      ?>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Menu Umum -->
        <!-- Menu Umum -->
        <li class="nav-item">
          <a href="<?= base_url('dashboard/' . $_SESSION['user']['role'] . '/') ?>"
            class="nav-link <?= (strpos($current_path, '/dashboard/admin/') 
            !== false && strpos($current_path, '/dashboard/admin/user/') === false)
             ? 'active' : '' ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <?php if ($_SESSION['user']['role'] === 'admin'): ?>

          <li class="nav-item">
              <a href="<?= base_url('dashboard /admin/user/index.php')?>"
              class="nav-link <?= (strpos($current_path,
              'dashsboard/admin/user') !== false) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>User Management</p>
            </a>
             </li>


          <li class="nav-item">
            <a href="<?= base_url('dashboard/admin/user/index.php') ?>"
              class="nav-link <?= strpos($current_path, '/dashboard/admin/user') !== false ? 'active' : '' ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>Data Karyawan</p>
            </a>
          </li>
        <?php endif; ?>

        <?php if ($_SESSION['user']['role'] === 'user'): ?>
          <!-- Menu Khusus Karyawan/User -->
          <li class="nav-item">
            <a href="<?= base_url('dashboard/user/absensi.php') ?>"
              class="nav-link <?= (strpos($current_path, 'dashboard/user/absensi.php') !== false) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-calender-check">
              </i>
              <p>Absens/i></p>
              >
            </a>
          </li>
        <?php endif; ?>

        <!-- Tombol Logout -->
         <li class="nav-item">
          <a href="#" class="nav-link" id="logoutButton">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
         </li>

      </ul>


      </php>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->

  <div class="sidebar-custom">
    <a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
    <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a>
  </div>
  <!-- /.sidebar-custom -->
</aside>