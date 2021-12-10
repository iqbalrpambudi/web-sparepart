<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <a class="navbar-brand" href="javascript:void(0)">
        <img src="<?= base_url('assets/img/brand/demia.png') ?>" class="navbar-brand-img" alt="...">
      </a>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?= $active == '' ? "active" : "" ?>" href=<?php echo base_url() ?>>
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $active == 'sparepart' ? "active" : "" ?>" href=<?php echo base_url("/sparepart") ?>>
              <i class="ni ni-bullet-list-67 text-green"></i>
              <span class="nav-link-text">Sparepart</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $active == 'engineering' ? "active" : "" ?>" href=<?php echo base_url("/engineering") ?>>
              <i class="ni ni-sound-wave text-red"></i>
              <span class="nav-link-text">Engineering</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $active == 'maintenance' ? "active" : "" ?>" href=<?php echo base_url("/maintenance") ?>>
              <i class="ni ni-settings text-blue"></i>
              <span class="nav-link-text">Maintenance</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $active == 'demia' ? "active" : "" ?>" href=<?php echo base_url("/demia") ?>>
              <i class="ni ni-pin-3 text-red"></i>
              <span class="nav-link-text">Demia</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $active == 'team' ? "active" : "" ?>" href=<?php echo base_url("/team") ?>>
              <i class="ni ni-single-02 text-yellow"></i>
              <span class="nav-link-text">Our Team</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- Main content -->
<div class="main-content" id="panel">