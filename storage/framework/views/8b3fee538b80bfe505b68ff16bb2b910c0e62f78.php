<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>AKO BISAYA - Information System</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    
    <link href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.min.css')); ?>">

    <!-- Waves Effect Css -->
    <link href="<?php echo e(asset('plugins/node-waves/waves.css')); ?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo e(asset('plugins/animate-css/animate.css')); ?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo e(asset('plugins/morrisjs/morris.css')); ?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo e(asset('css/themes/all-themes.css')); ?>" rel="stylesheet" />

    <!-- Jquery Core Js -->
    <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.js')); ?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo e(asset('plugins/bootstrap-select/js/bootstrap-select.js')); ?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo e(asset('plugins/jquery-slimscroll/jquery.slimscroll.js')); ?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo e(asset('plugins/node-waves/waves.js')); ?>"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo e(asset('plugins/jquery-countto/jquery.countTo.js')); ?>"></script>

    <!-- ChartJs -->
    <script src="<?php echo e(asset('plugins/chartjs/Chart.bundle.js')); ?>"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo e(asset('plugins/jquery-sparkline/jquery.sparkline.js')); ?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo e(asset('js/admin.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/index.js')); ?>"></script>

    <!-- Demo Js -->
    <script src="<?php echo e(asset('js/demo.js')); ?>"></script>

    <!-- Datatable Js -->
    <script type="text/javascript" charset="utf8" src="<?php echo e(asset('plugins/jquery-datatable/jquery.dataTables.js')); ?>"></script>
    <script type="text/javascript" charset="utf8" src="<?php echo e(asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.min.js')); ?>"></script>
</head>

<body class="theme-indigo">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <span class="navbar-brand"><b>AKO BISAYA PARTYLIST</b> - Information System</span>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div style="padding: 20px;">
                <small>Currently logged in as:</small>
                <h3 style="margin-top:10px">Clark Dale Morpos</h3>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU</li>
                    
                    <li class="<?php echo e(( request()->routeIs('home') ) ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('home')); ?>">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="header">ASSISTANCE</li>
                    <li class="<?php echo e(( request()->routeIs('medical') ) ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('medical')); ?>">
                            <i class="material-icons">local_hospital</i>
                            <span>Medical</span>
                        </a>
                    </li>
                    <li class="<?php echo e(( request()->routeIs('home') ) ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('home')); ?>">
                            <i class="material-icons">school</i>
                            <span>Education</span>
                        </a>
                    </li>
                    <li class="<?php echo e(( request()->routeIs('home') ) ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('home')); ?>">
                            <i class="material-icons">airline_seat_individual_suite</i>
                            <span>Burial</span>
                        </a>
                    </li>
                    <li class="header">OTHERS</li>
                    <li>
                        <a href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            <i class="material-icons">input</i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="<?php echo e(route('home')); ?>">AKO BISAYA - Information System</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </section>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\akbis_master\resources\views/layouts/app.blade.php ENDPATH**/ ?>