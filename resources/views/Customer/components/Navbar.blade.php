<nav>
  <div class="nav__bar">
    <div class="nav__header">
      <div class="logo nav__logo">
        <a class="navbar-brand logo_h" href="#">
          <img src="public/images/Logo.jpg" alt="" class="navbar-logo">
        </a>
      </div>
      <div class="nav__menu__btn" id="menu-btn">
        <i class="ri-menu-line"></i>
      </div>
    </div>

    <!-- Navigation Links -->
    <ul class="nav__links" id="nav-links">
      <li class="nav-item active"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('Room') }}">Rooms</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('AboutUs') }}">About Us</a></li>
      <!-- <li class="nav-item"><a class="nav-link" href="{{ route('ContactUs') }}">Contact</a></li> -->
    </ul>

    <!-- Cart and Profile Icons -->
    <div class="nav__icons">
      <a href="{{route('Cart')}}" class="nav__icon">
        <i class="fas fa-shopping-cart"></i>
      </a>
      <a href="{{route('Profile')}}" class="nav__icon">
        <i class="fas fa-user"></i>
      </a>
    </div>
  </div>
</nav>
<style>
 /* Navbar Styling */
.nav__bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
}

/* Navbar Logo */
.navbar-logo {
    max-height: 80px;
    object-fit: contain;
}

/* Center Navigation Links */
.nav__links {
    display: flex;
    gap: 30px; /* Adjust space between links */
    list-style-type: none;
    justify-content: center;
    flex-grow: 1;
}

.nav__links li {
    list-style: none;
}

.nav__links .nav-link {
    text-decoration: none;
    color: #333;
    font-size: 18px;
    font-weight: 500;
    transition: color 0.3s ease;
}

.nav__links .nav-link:hover {
    color: #f39200; /* Change color on hover */
}

/* Icons Section */
.nav__icons {
    display: flex;
    gap: 20px;
    align-items: center;
}

.nav__icon {
    color: #333;
    font-size: 24px;
    text-decoration: none;
    transition: color 0.3s ease;
}

.nav__icon:hover {
    color: #f39200; /* Change icon color on hover */
}

/* Responsive Menu Button */
.nav__menu__btn {
    font-size: 28px;
    display: none;
}

@media (max-width: 768px) {
    .nav__links {
        display: none;
    }

    .nav__menu__btn {
        display: block;
    }

    .nav__icons {
        margin-right: 15px;
    }
}

</style>