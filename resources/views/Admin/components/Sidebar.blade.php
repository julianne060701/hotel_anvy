<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="resources/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Anvy Resort</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="resources/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Name Here</a>
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
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link" id="Blank_B">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item " id="masterData">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('UserManagementView')}}" class="nav-link " id="user">
                  <i class="nav-icon fa-solid fa-user"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bed"></i>
              <p>
                Room Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="rooms.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rooms</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="beds.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Beds</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="amenities.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Amenities </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="menu.php" class="nav-link">
            <i class="nav-icon fas fa-utensils"></i>
              <p>Menu Management</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="booking.php" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Booking</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="payment.php" class="nav-link">
            <i class="nav-icon fas fa-money-bill"></i>
              <p>Payment Method</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="review.php" class="nav-link">
            <i class="nav-icon fas fa-star"></i>
              <p>Reviews & Rating</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="loyalty.php" class="nav-link">
            <i class="nav-icon fas fa-credit-card"></i>
              <p>Loyalty Cards </p>
            </a>
          </li>
          <li class="nav-header">Reports</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="room_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Room Availability  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Income Reports</p>
                </a>
              </li>

            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->


