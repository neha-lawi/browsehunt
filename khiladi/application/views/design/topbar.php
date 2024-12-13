<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand bg-white topbar static-top mb-4 shadow">
            <div class="navbrand">
                <a href="<?php echo URL;?>"><img src="https://ik.imagekit.io/gku4adhog/thevadapav/TheVadaPav_logo%20(1).svg?updatedAt=1701259772354" alt="TheVadaPav" class="imgfluid"></a>
            </div>

            
            <!-- Topbar Navbar -->
            <ul class="navbar-nav">
                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <div class="username">
                            <h6 class="mb-1"><span class="mr-2 text-black-600">Hello, <?php echo $username;?></span></h6>
                        <small class="text-mute d-block">WHERE TO GO?</small>
                        </div>
                        <img class="img-profile" src="<?php echo $userimage?>" />
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item user-name" href="#">
                            <i class="fas fa-user fa-sm fa-fw me-2"></i>
                            <?php echo $username;?>
                        </a>
                        <?php if($usertype == 1 && $orgId == 1){?>
                            <a class="dropdown-item" href="<?php echo URL;?>/admin/users">
                                <i class="fa fa-users me-2" aria-hidden="true"></i>
                                Users Panel
                            </a>
                            <a class="dropdown-item" href="<?php echo URL;?>/admin/organisations">
                                <i class="fa fa-building me-2" aria-hidden="true"></i>
                                Organisations
                            </a>
                            <a class="dropdown-item" href="<?php echo URL;?>/admin/platforms">
                                <i class="fa fa-building me-2" aria-hidden="true"></i>
                                Platforms
                            </a>
                        <?php  }?>
                        <a class="dropdown-item" href="<?php echo URL;?>/users/changePassword/<?php echo $userId?>">
                            <i class="fas fa-key fa-sm fa-fw me-2"></i>
                            Change Password
                        </a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw me-2"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->
        <?php echo $content;?>