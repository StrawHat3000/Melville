<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Melville Schools</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/backendassets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/backendassets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="/backendassets/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/backendassets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/backendassets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Melville</span><strong>Schools</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>MS</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>


                <!-- Messages                        -->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                  </ul>
                </li>

                <!-- Logout    -->
                <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            @foreach ($users as $user)
              @if (Auth::id() == $user->id)
                    <div class="avatar"><img src="{{ asset($user->profile->avatar) }}" alt="..." class="img-fluid rounded-circle"></div>
              @endif

            @endforeach

            <div class="title">
              <h1 class="h4">{{ Auth::user()->name }} </h1>
              <p>Admin</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li class="active"><a href="{{ route('home') }}"> <i class="icon-home"></i>Home </a></li>

                    <li><a href="#userDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-user"></i>Users</a>
                      <ul id="userDropdown" class="collapse list-unstyled ">
                        <li><a href="{{ route('users') }}">View Users</a></li>
                        <li><a href="{{ route('user.create') }}">Create New User</a></li>
                      </ul>
                    </li>


                    <li><a href="#postDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Posts</a>
                      <ul id="postDropdown" class="collapse list-unstyled ">
                        <li><a href="#">View Posts</a></li>
                        <li><a href="#">Create New Post</a></li>
                      </ul>
                    </li>

                    <li><a href="#tagsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-bill"></i>Tags</a>
                      <ul id="tagsDropdown" class="collapse list-unstyled ">
                        <li><a href="#">View Tags</a></li>
                        <li><a href="#">Create New Tag</a></li>
                      </ul>
                    </li>

                    <li><a href="#categoriesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-list"></i>Categories</a>
                      <ul id="categoriesDropdown" class="collapse list-unstyled ">
                        <li><a href="#">View Categories</a></li>
                        <li><a href="#">Create New Categories</a></li>
                      </ul>
                    </li>

          </ul>

        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->

          <!-- Projects Section-->


            @yield('content')


          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>StrawHat Group &copy; 2018</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="#" class="external">StrawHat</a></p>

                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="/backendassets/vendor/jquery/jquery.min.js"></script>
    <script src="/backendassets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="/backendassets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/backendassets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="/backendassets/vendor/chart.js/Chart.min.js"></script>
    <script src="/backendassets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/backendassets/js/charts-home.js"></script>
    <!-- Main File-->
    <script src="/backendassets/js/front.js"></script>
  </body>
</html>
