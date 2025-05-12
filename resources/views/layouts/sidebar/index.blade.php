<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Admin</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-primary" href="#">
    <i class="fas fa-bars"></i>
  </a>
  
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">
          <span class="brand-text">MJS</span>
          <span class="brand-icon"><i class="fas fa-bolt"></i></span>
        </a>
        {{-- <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div> --}}
      </div>
      
      <div class="sidebar-header">
        <div class="user-pic">
          <div class="avatar-circle">
            <span class="initials">{{ substr(Auth::user()->name, 0, 1) }}</span>
          </div>
        </div>
        <div class="user-info">
          <span class="user-name text-white">{{ Auth::user()->name }}</span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span class="text-white">Online</span>
          </span>
        </div>
      </div>
      
      {{-- <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div> --}}
      
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-item">
            <a href="{{ route('dashboard') }}">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
              <span class="badge badge-pill badge-primary">New</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="{{ route('databarang') }}">
              <i class="fa fa-shopping-cart"></i>
              <span>Data Barang</span>
            </a>
          </li>
          
          <li class="header-menu">
            <span>Account</span>
          </li>
          <li class="sidebar-item">
            <a href="{{ route('profile.edit') }}">
              <i class="fa fa-user"></i>
              <span>Profile</span>
            </a>
          </li>
          <li class="sidebar-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                <i class="fa fa-power-off"></i>
                <span>Log Out</span>
              </a>
            </form>
          </li>
        </ul>
      </div>
    </div>
    
    {{-- <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="notification-count">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="notification-count">2</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div> --}}
  </nav>

  <div class="container page-content">
    @yield('content')
  </div>
</div>

<style>
@keyframes swing {
  0% { transform: rotate(0deg); }
  10% { transform: rotate(10deg); }
  30% { transform: rotate(0deg); }
  40% { transform: rotate(-10deg); }
  50% { transform: rotate(0deg); }
  60% { transform: rotate(5deg); }
  70% { transform: rotate(0deg); }
  80% { transform: rotate(-5deg); }
  100% { transform: rotate(0deg); }
}

@keyframes sonar {
  0% { transform: scale(0.9); opacity: 1; }
  100% { transform: scale(2); opacity: 0; }
}

@keyframes pulse {
  0% { box-shadow: 0 0 0 0 rgba(52, 152, 219, 0.7); }
  70% { box-shadow: 0 0 0 10px rgba(52, 152, 219, 0); }
  100% { box-shadow: 0 0 0 0 rgba(52, 152, 219, 0); }
}

body {
  font-size: 0.9rem;
  font-family: 'Poppins', sans-serif;
  background-color: #f8f9fa;
}

.page-wrapper .sidebar-wrapper,
.sidebar-wrapper .sidebar-brand > a,
.sidebar-wrapper .sidebar-dropdown > a:after,
.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before,
.sidebar-wrapper ul li a i,
.page-wrapper .page-content,
.sidebar-wrapper .sidebar-search input.search-menu,
.sidebar-wrapper .sidebar-search .input-group-text,
.sidebar-wrapper .sidebar-menu ul li a,
#show-sidebar,
#close-sidebar {
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.page-wrapper {
  height: 100vh;
}

/* Show Sidebar Button */
#show-sidebar {
  position: fixed;
  left: 0;
  top: 10px;
  border-radius: 0 4px 4px 0px;
  width: 40px;
  height: 40px;
  transition-delay: 0.3s;
  z-index: 999;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
}

.page-wrapper.toggled #show-sidebar {
  left: -40px;
}

/* Sidebar Wrapper */
.sidebar-wrapper {
  width: 280px;
  height: 100%;
  max-height: 100%;
  position: fixed;
  top: 0;
  left: -300px;
  z-index: 999;
  box-shadow: 3px 0 10px rgba(0, 0, 0, 0.1);
}

.sidebar-wrapper ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.sidebar-wrapper a {
  text-decoration: none;
}

/* Sidebar Content */
.sidebar-content {
  max-height: calc(100% - 60px);
  height: calc(100% - 60px);
  overflow-y: auto;
  position: relative;
}

/* Sidebar Brand */
.sidebar-wrapper .sidebar-brand {
  padding: 15px 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.sidebar-wrapper .sidebar-brand > a {
  text-transform: uppercase;
  font-weight: bold;
  display: flex;
  align-items: center;
}

.brand-text {
  font-size: 1.5rem;
  margin-right: 10px;
  letter-spacing: 1px;
}

.brand-icon {
  font-size: 1.3rem;
}

.sidebar-wrapper .sidebar-brand #close-sidebar {
  cursor: pointer;
  font-size: 20px;
  transition: all 0.3s ease;
}

.sidebar-wrapper .sidebar-brand #close-sidebar:hover {
  transform: rotate(90deg);
}

/* Sidebar Header - User Info */
.sidebar-wrapper .sidebar-header {
  padding: 20px;
  overflow: hidden;
  display: flex;
  flex-direction: row;
  align-items: center;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.sidebar-wrapper .sidebar-header .user-pic {
  width: 60px;
  padding: 2px;
  margin-right: 15px;
  overflow: hidden;
}

.avatar-circle {
  width: 50px;
  height: 50px;
  background-color: #3498db;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.initials {
  font-size: 24px;
  color: white;
  font-weight: bold;
}

.sidebar-wrapper .sidebar-header .user-info {
  flex-grow: 1;
}

.sidebar-wrapper .sidebar-header .user-info > span {
  display: block;
}

.sidebar-wrapper .sidebar-header .user-info .user-name {
  font-weight: 600;
  font-size: 16px;
}

.sidebar-wrapper .sidebar-header .user-info .user-role {
  font-size: 12px;
  color: rgba(255, 255, 255, 0.6);
}

.sidebar-wrapper .sidebar-header .user-info .user-status {
  font-size: 11px;
  display: flex;
  align-items: center;
  margin-top: 4px;
}

.sidebar-wrapper .sidebar-header .user-info .user-status i {
  font-size: 8px;
  margin-right: 4px;
  color: #5cb85c;
}

/* Sidebar Search */
.sidebar-wrapper .sidebar-search {
  padding: 15px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.sidebar-wrapper .sidebar-search .input-group {
  border-radius: 20px;
  overflow: hidden;
  background-color: rgba(255, 255, 255, 0.1);
}

.sidebar-wrapper .sidebar-search input.search-menu {
  border: none;
  background-color: transparent;
  color: #fff;
  padding: 8px 10px;
}

.sidebar-wrapper .sidebar-search input.search-menu::placeholder {
  color: rgba(255, 255, 255, 0.5);
}

.sidebar-wrapper .sidebar-search .input-group-append {
  display: flex;
}

.sidebar-wrapper .sidebar-search .input-group-text {
  background-color: transparent;
  border: none;
  color: rgba(255, 255, 255, 0.5);
  padding: 0 12px;
  display: flex;
  align-items: center;
}

/* Sidebar Menu */
.sidebar-wrapper .sidebar-menu {
  padding-bottom: 10px;
}

.sidebar-wrapper .sidebar-menu .header-menu span {
  font-weight: bold;
  font-size: 14px;
  padding: 20px 20px 10px 20px;
  display: inline-block;
  color: #3498db;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.sidebar-wrapper .sidebar-menu ul li {
  margin: 2px 0;
}

.sidebar-wrapper .sidebar-menu ul li a {
  display: flex;
  align-items: center;
  width: 100%;
  text-decoration: none;
  position: relative;
  padding: 12px 20px;
  color: #fff;
  border-left: 3px solid transparent;
  border-radius: 0 30px 30px 0;
}

.sidebar-wrapper .sidebar-menu ul li a:hover {
  background-color: rgba(255, 255, 255, 0.1);
  border-left: 3px solid #3498db;
}

.sidebar-wrapper .sidebar-menu ul li.active > a {
  background-color: rgba(52, 152, 219, 0.2);
  border-left: 3px solid #3498db;
  color: #fff;
}

.sidebar-wrapper .sidebar-menu ul li a i {
  font-size: 16px;
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  border-radius: 4px;
  margin-right: 10px;
  color: #3498db;
}

.sidebar-wrapper .sidebar-menu ul li:hover > a > i {
  animation: swing ease-in-out 0.5s 1 alternate;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown > a:after {
  content: "\f105";
  font-family: "Font Awesome 6 Free";
  font-weight: 900;
  display: inline-block;
  position: absolute;
  right: 15px;
  top: 14px;
  transition: transform 0.3s ease;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown.active > a:after {
  transform: rotate(90deg);
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu {
  display: none;
  overflow: hidden;
  background-color: rgba(0, 0, 0, 0.15);
  border-radius: 0 0 5px 5px;
  padding: 5px 0;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown.active .sidebar-submenu {
  display: block;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu ul {
  padding: 5px 0;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li {
  padding-left: 25px;
  font-size: 13px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a {
  padding: 8px 15px 8px 25px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before {
  content: "\f111";
  font-family: "Font Awesome 6 Free";
  font-weight: 400;
  display: inline-block;
  margin-right: 10px;
  font-size: 6px;
  color: rgba(255, 255, 255, 0.6);
}

.badge {
  font-size: 10px;
  font-weight: normal;
  padding: 3px 6px;
  border-radius: 10px;
  margin-left: auto;
}

.badge-primary {
  background-color: #3498db;
  color: #fff;
}

/* Sidebar Footer */
.sidebar-footer {
  position: absolute;
  width: 100%;
  bottom: 0;
  display: flex;
  background-color: rgba(0, 0, 0, 0.15);
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.sidebar-footer > a {
  flex-grow: 1;
  text-align: center;
  height: 40px;
  line-height: 40px;
  color: rgba(255, 255, 255, 0.7);
  position: relative;
  transition: all 0.3s ease;
}

.sidebar-footer > a:hover {
  background-color: rgba(255, 255, 255, 0.1);
  color: #fff;
}

.notification-count {
  position: absolute;
  top: 5px;
  right: 25%;
  background-color: #e74c3c;
  color: #fff;
  font-size: 9px;
  padding: 0px 5px;
  border-radius: 50%;
  line-height: 16px;
  height: 16px;
  min-width: 16px;
  text-align: center;
}

/* Page Content */
.page-wrapper .page-content {
  display: inline-block;
  width: 100%;
  padding-left: 0px;
  padding-top: 20px;
  transition: all 0.3s ease;
}

.page-wrapper.toggled .page-content {
  padding-left: 280px;
}

/* Toggled State */
.page-wrapper.toggled .sidebar-wrapper {
  left: 0;
}

/* Scrollbar */
::-webkit-scrollbar {
  width: 5px;
  height: 7px;
}

::-webkit-scrollbar-thumb {
  background: #3498db;
  border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
  background: #2980b9;
}

::-webkit-scrollbar-track {
  background: rgba(255, 255, 255, 0.1);
  border-radius: 10px;
}

/* Theme */
.chiller-theme .sidebar-wrapper {
  background: #2c3e50;
  background: linear-gradient(to bottom, #34495e, #2c3e50);
}

.chiller-theme .sidebar-wrapper .sidebar-menu ul li:hover > a,
.chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active > a,
.chiller-theme .sidebar-wrapper .sidebar-brand > a:hover {
  color: #ffffff;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
  .page-wrapper.toggled .page-content {
    padding-left: 0;
  }
  
  .sidebar-wrapper {
    width: 250px;
  }
}
</style>

<script>
jQuery(function ($) {
  // Sidebar dropdown
  $(".sidebar-dropdown > a").click(function() {
    $(".sidebar-submenu").slideUp(200);
    
    if ($(this).parent().hasClass("active")) {
      $(".sidebar-dropdown").removeClass("active");
      $(this).parent().removeClass("active");
    } else {
      $(".sidebar-dropdown").removeClass("active");
      $(this).next(".sidebar-submenu").slideDown(200);
      $(this).parent().addClass("active");
    }
  });

  // Close sidebar
  $("#close-sidebar").click(function() {
    $(".page-wrapper").removeClass("toggled");
  });
  
  // Show sidebar
  $("#show-sidebar").click(function() {
    $(".page-wrapper").addClass("toggled");
  });
  
  // Activate current page link
  const currentLocation = window.location.href;
  $(".sidebar-menu a").each(function() {
    if ($(this).attr("href") === currentLocation) {
      $(this).parent().addClass("active");
      if ($(this).closest(".sidebar-dropdown").length > 0) {
        $(this).closest(".sidebar-dropdown").addClass("active");
        $(this).closest(".sidebar-submenu").slideDown(200);
      }
    }
  });
});
</script>