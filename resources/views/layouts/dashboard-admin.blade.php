<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">  
    <title>Savoureuse | Dashboard</title>


    
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('ashboard/plugins/images/favicon.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('dashboard/plugins/bower_components/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="dashboard/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="{{ asset('dashboard/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >
    <link href="{{ asset('dashboard/css/style-added.css') }}" rel="stylesheet">

         <!-- Step 1 - Include the fusioncharts core library -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <!-- Step 2 - Include the fusion theme -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

      <script type="text/javascript">
       
          
       
        //STEP 2 - Chart Data
        const chartData = [{
            "label": "Janvier",
            "value":  {{$values[1]}}
        }, {
            "label": "Février",
            "value": {{$values[2]}}
        }, {
            "label": "Mars",
            "value": {{$values[3]}}
        }, {
            "label": "Avril",
            "value": {{$values[4]}}
        }, {
            "label": "Mai",
            "value": {{$values[5]}}
        }, {
            "label": "Juin",
            "value": {{$values[6]}}
        }, {
            "label": "Juillet",
            "value": {{$values[7]}}
        }, {
            "label": "Aout",
            "value": {{$values[8]}}
        },{
            "label": "Septembre",
            "value": {{$values[9]}}
        },{
            "label": "Octobre",
            "value": {{$values[10]}}
        },{
            "label": "Novembre",
            "value": {{$values[10]}}
        },{
            "label": "Décembre",
            "value": {{$values[12]}}
        }];
    
        //STEP 3 - Chart Configurations
        const chartConfig = {
        type: 'column2d',
        renderAt: 'chart-container',
        width: '100%',
        height: '400',
        dataFormat: 'json',
        dataSource: {
            // Chart Configuration
            "chart": {
                "caption": "Le nombre de recette cette année ",
                "subCaption": "2021",
                "xAxisName": "Mois",
                "yAxisName": "Nbr Recette",
                "numberSuffix": "",
                "theme": "fusion",
                },
            // Chart Data
            "data": chartData
            }
        };
        FusionCharts.ready(function(){
        var fusioncharts = new FusionCharts(chartConfig);
        fusioncharts.render();
        });
    
    </script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('dashboard/plugins/images/logo-icon.png') }}" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{ asset('dashboard/plugins/images/logo-text.png') }}" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="{{ asset('dashboard/plugins/images/users/image_profile.jpg') }}" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">{{ (Auth::user()->name) }}</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('home-dashboard-admin') }}"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>

                                
                                   
                                
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/profil-admin')}}"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                      
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/cuisiniers') }}"
                                aria-expanded="false">
                                <i class="fas fa-users" aria-hidden="true"></i>
                                <span class="hide-menu">Gérer Comptes Cuisiniers</span>
                            </a>
                        </li>
                        
            
                
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/produit') }}"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Gérer Produits</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/categorie') }}"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Gérer Catégories</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/recettes_admin') }}"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Gérer Recettes</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/comments') }}"
                                aria-expanded="false">
                                <i class="fas fa-comments" aria-hidden="true"></i>
                                <span class="hide-menu">Gérer Commentaires</span>
                            </a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                        <a class="btn d-grid btn-danger text-white" target="_blank" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <div class="text center">
                                                       
                                      Déconnecter
                                       </div>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                        
                       
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

        @yield('content')

         <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                href="https://www.wrappixel.com/">wrappixel.com</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('dashboard/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('dashboard/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dashboard/js/app-style-switcher.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('dashboard/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('dashboard/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('dashboard/js/custom.js') }}"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="{{ asset('dashboard/plugins/bower_components/chartist/dist/chartist.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('dashboard/js/pages/dashboards/dashboard1.js') }}"></script>
<script src="{{ asset('dashboard/js/js-added.js') }}"></script>


</body>

</html>