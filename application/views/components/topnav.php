<!-- Topnav -->
<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Search form -->
      <form class="navbar-search navbar-search-light form-inline mr-sm-3" action="<?php echo base_url("/sparepart/search") ?>" method="get">
        <div class="form-group mb-0">
          <div class="input-group input-group-alternative input-group-merge">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input class="form-control" name="keyword" placeholder="Search" type="text" value="<?php if ($this->session->flashdata('keyword')){echo $this->session->flashdata('keyword');} ?>">
            <div class="dropdown">
              <button class="btn btn-link dropdown-toggle" type="button" id="searchForm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Search by
              </button>
              <input id="category" type="hidden" value="name" name="category" />
              <div class="dropdown-menu" aria-labelledby="searchForm">
                <span class="dropdown-item" onclick="setCategory('name','Name')">Name</span>
                <span class="dropdown-item" onclick="setCategory('type','Type')">Type</span>
                <span class="dropdown-item" onclick="setCategory('code_tool','Code Tool')">Code Tool</span>
                <span class="dropdown-item" onclick="setCategory('machine','Machine')">Machine</span>
                <span class="dropdown-item" onclick="setCategory('maker','Maker')">Maker</span>
                <span class="dropdown-item" onclick="setCategory('model','Model')">Model</span>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </form>
      <!-- Navbar links -->
      <ul class="navbar-nav align-items-center  ml-md-auto ">
        <li class="nav-item d-xl-none">
          <!-- Sidenav toggler -->
          <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </li>
        <li class="nav-item d-sm-none">
          <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
            <i class="ni ni-zoom-split-in"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
        <li class="nav-item dropdown">
          <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <div class="media-body  ml-2  d-none d-lg-block">
                <i class="fa far fa-user mr-2"></i>
                <span class="mb-0 text-sm  font-weight-bold">Administrator</span>
              </div>
            </div>
          </a>
            <div class="dropdown-menu  dropdown-menu-right ">
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="#!" class="dropdown-item">
                <span>Admin Engineering Dept.</span>
              </a>
            </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script>
  function setCategory(category, text) {
    document.getElementById("category").setAttribute("value", category);
    document.getElementById("searchForm").innerHTML = text

  }
</script>