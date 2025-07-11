<!doctype html>
<html class="fixed has-top-menu">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">


    <meta name="keywords" content="HTML5 Admin Template"/>
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light"
          rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css"/>
    <link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css"/>
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css"/>
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css"/>
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css"/>
    <link rel="stylesheet" href="vendor/bootstrap-multiselect/css/bootstrap-multiselect.css"/>
    <link rel="stylesheet" href="vendor/morris/morris.css"/>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css"/>

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css"/>

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.js"></script>

    @vite('resources/js/app.js')
    @inertiaHead
</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header header-nav-menu">
        <div class="logo-container">
            <a href="../" class="logo">
                <img src="img/logo.png" width="75" height="35" alt="Porto Admin"/>
            </a>
            <button class="btn header-btn-collapse-nav d-lg-none" data-bs-toggle="collapse"
                    data-bs-target=".header-nav">
                <i class="fas fa-bars"></i>
            </button>

            <!-- start: header nav menu -->
            <x-h_header/>
            <!-- end: header nav menu -->
        </div>

        <!-- start: search & user box -->
        <div class="header-right">

            <a class="btn search-toggle d-none d-md-inline-block d-xl-none" data-toggle-class="active"
               data-target=".search"><i class="bx bx-search"></i></a>
            <form action="pages-search-results.html" class="search nav-form d-none d-xl-inline-block">
                <div class="input-group">
                    <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                    <button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
                </div>
            </form>

            <span class="separator"></span>

            <ul class="notifications">
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
                        <i class="bx bx-list-ol"></i>
                        <span class="badge">3</span>
                    </a>

                    <div class="dropdown-menu notification-menu large">
                        <div class="notification-title">
                            <span class="float-end badge badge-default">3</span>
                            Tasks
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <p class="clearfix mb-1">
                                        <span class="message float-start">Generating Sales Report</span>
                                        <span class="message float-end text-dark">60%</span>
                                    </p>
                                    <div class="progress progress-xs light">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                </li>

                                <li>
                                    <p class="clearfix mb-1">
                                        <span class="message float-start">Importing Contacts</span>
                                        <span class="message float-end text-dark">98%</span>
                                    </p>
                                    <div class="progress progress-xs light">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="98"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                    </div>
                                </li>

                                <li>
                                    <p class="clearfix mb-1">
                                        <span class="message float-start">Uploading something big</span>
                                        <span class="message float-end text-dark">33%</span>
                                    </p>
                                    <div class="progress progress-xs light mb-1">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="33"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
                        <i class="bx bx-envelope"></i>
                        <span class="badge">4</span>
                    </a>

                    <div class="dropdown-menu notification-menu">
                        <div class="notification-title">
                            <span class="float-end badge badge-default">230</span>
                            Messages
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="img/!sample-user.jpg" alt="Joseph Doe Junior"
                                                 class="rounded-circle"/>
                                        </figure>
                                        <span class="title">Joseph Doe</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle"/>
                                        </figure>
                                        <span class="title">Joseph Junior</span>
                                        <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle"/>
                                        </figure>
                                        <span class="title">Joe Junior</span>
                                        <span class="message">Lorem ipsum dolor sit.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <figure class="image">
                                            <img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle"/>
                                        </figure>
                                        <span class="title">Joseph Junior</span>
                                        <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                    </a>
                                </li>
                            </ul>

                            <hr/>

                            <div class="text-end">
                                <a href="#" class="view-more">View All</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
                        <i class="bx bx-bell"></i>
                        <span class="badge">3</span>
                    </a>

                    <div class="dropdown-menu notification-menu">
                        <div class="notification-title">
                            <span class="float-end badge badge-default">3</span>
                            Alerts
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fas fa-thumbs-down bg-danger"></i>
                                        </div>
                                        <span class="title">Server is Down!</span>
                                        <span class="message">Just now</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="bx bx-lock bg-warning"></i>
                                        </div>
                                        <span class="title">User Locked</span>
                                        <span class="message">15 minutes ago</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fas fa-signal bg-success"></i>
                                        </div>
                                        <span class="title">Connection Restaured</span>
                                        <span class="message">10/10/2023</span>
                                    </a>
                                </li>
                            </ul>

                            <hr/>

                            <div class="text-end">
                                <a href="#" class="view-more">View All</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-bs-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle"
                             data-lock-picture="img/!logged-user.jpg"/>
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                        <span class="name">John Doe Junior</span>
                        <span class="role">administrator</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i
                                    class="bx bx-user-circle"></i> My Profile</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="bx bx-lock"></i>
                                Lock Screen</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="bx bx-power-off"></i>
                                Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Default Layout</h2>

                <div class="right-wrapper text-end">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="index.html">
                                <i class="bx bx-home-alt"></i>
                            </a>
                        </li>

                        <li><span>Layouts</span></li>

                        <li><span>Default</span></li>

                    </ol>

                    <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
                </div>
            </header>

            <!-- start: page -->
            @inertia
            <!-- end: page -->
        </section>
    </div>

    <x-h_aside/>

</section>

<!-- Vendor -->
<script src="vendor/jquery/jquery.js"></script>
<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="vendor/popper/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="vendor/common/common.js"></script>
<script src="vendor/nanoscroller/nanoscroller.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Specific Page Vendor -->
<script src="vendor/jquery-ui/jquery-ui.js"></script>
<script src="vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
<script src="vendor/jquery-appear/jquery.appear.js"></script>
<script src="vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.js"></script>
<script src="vendor/flot/jquery.flot.js"></script>
<script src="vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
<script src="vendor/flot/jquery.flot.pie.js"></script>
<script src="vendor/flot/jquery.flot.categories.js"></script>
<script src="vendor/flot/jquery.flot.resize.js"></script>
<script src="vendor/jquery-sparkline/jquery.sparkline.js"></script>
<script src="vendor/raphael/raphael.js"></script>
<script src="vendor/morris/morris.js"></script>
<script src="vendor/gauge/gauge.js"></script>
<script src="vendor/snap.svg/snap.svg.js"></script>
<script src="vendor/liquid-meter/liquid.meter.js"></script>
<script src="vendor/jqvmap/jquery.vmap.js"></script>
<script src="vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
<script src="vendor/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
<script src="vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
<script src="vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
<script src="vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
<script src="vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
<script src="vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>

<!-- Examples -->
<script src="js/examples/examples.header.menu.js"></script>
<script src="js/examples/examples.dashboard.js"></script>

</body>
</html>
