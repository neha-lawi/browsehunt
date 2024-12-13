  <?php $url = $this->uri->segment(1);?>

  <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
          <!-- Sidebar -->
          <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
              <!-- Sidebar - Brand -->
              <a class="sidebar-brand d-flex align-items-center justify-content-center mb-5"
                  href="<?php echo URL;?>/dashboard">
                  <div class="sidebar-brand-icon">
                      <i class="fas fa-laugh-wink"></i>
                  </div>
              </a>

              <!-- Nav Item - Rate Collapse Menu -->
              <li class="nav-item <?php if($url == 'dashboard'){echo "active";}?>">
                  <a class="nav-link" href="<?php echo URL;?>/dashboard">
                      <i class="fa-solid fa-home"></i>
                      <span>Dashboard</span>
                  </a>
              </li>


              <!-- Nav Item - Reports Menu -->

              <li class="nav-item <?php if($url == 'articles'){echo "active";}?>">
                  <a class="nav-link" href="<?php echo URL;?>/articles">
                      <i class="fa-solid fa-file"></i>
                      <span>Articles</span>
                  </a>
              </li>
              <li class="nav-item <?php if($url == 'categories'){echo "active";}?>">
                  <a class="nav-link" href="<?php echo URL;?>/categories">
                      <i class="fa-solid fa-th-large"></i>
                      <span>Categories</span>
                  </a>
              </li>
          </ul>