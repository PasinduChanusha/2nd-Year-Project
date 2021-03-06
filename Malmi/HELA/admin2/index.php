<!DOCTYPE html>
<html>
<?php session_start(); ?>

<head>
    <title>
        Admin Dashboard
    </title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="admin\profileB.css">

    <link rel="stylesheet" type="text/css" href="css\header.css">
    <link rel="stylesheet" type="text/css" href="css\footer.css">
    <link rel="stylesheet" type="text/css" href="dash.css">


</head>

<style>
#wrapper {
    z-index: 200;
}

a:hover {
    color: white;
    text-decoration: none;
}


#sidebar-wrapper {
    z-index: 1000;
    height: 100%;
    width: 0px;
    left: -50px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #222e3c;
    transition: all 0.5s ease;
}

#sidebar-wrapper::-webkit-scrollbar {
    width: 8px;
    background: #222e3c;
}

#sidebar-wrapper::-webkit-scrollbar-thumb {
    background-color: #989898;
    border-radius: 10px;
}


.sidebar-brand {
    font-weight: 600;
    font-size: 1.15rem;
    padding: 1.15rem 1.5rem;
    display: block;
    color: #f8f9fa;
}

.sidebar-header {
    text-transform: capitalize;
    padding: 1.5rem 1.5rem .375rem !important;
    font-size: 14px;
    color: #ced4da;
}

.navbar-nav>li>a,
.submenu-box ul li a {
    color: gray !important;
    text-transform: capitalize;
    font-size: 14px;
    padding: 10px 10px 10px 20px !important;
    display: block;
    font-weight: 400;
    position: relative;
    z-index: 2;
    font-family: 'Roboto', sans-serif;
    letter-spacing: .2px;
}

.submenu-box ul li a {
    padding: 4px 10px 4px 20px !important;
    color: #c1c1c1 !important;
}



.navbar-nav>li>a.active {
    color: #e9ecef !important;
    background: linear-gradient(90deg, rgba(59, 125, 221, .1), rgba(59, 125, 221, .0875) 50%, transparent);
    border-left: 4px solid #3b7ddd;
}

.navbar-nav .has-sub>a.collapsed::after {
    transition: 0.4s ease;
}

.navbar-nav .has-sub>a.collapsed::after {
    color: gray;
    font-size: 10px;
    content: "\f078";
}

.navbar-nav .has-sub>a.collapsed::after {
    color: gray;
}

.navbar-nav .has-sub>a::after {
    position: absolute;
    right: 0px;
    top: 50%;
    height: 30px;
    width: 30px;
    text-align: center;
    color: gray;
    display: block;
    content: "\f077";
    font-family: 'Font Awesome\ 5 Free';
    font-weight: 900;
    font-size: 13px;
    line-height: 30px;
    margin-top: -15px;
}



#wrapper.toggled {
    padding-left: 270px;
}



.toggled#sidebar-wrapper {
    width: 270px !important;
    height: 100%;
    left: 0px;
    overflow-y: auto;
    overflow-x: hidden;
    transition: all 0.5s ease;
}

.navbar-nav li {
    display: block !important;
    margin: 2px 0px;
}


.nav-item .nav-link {
    display: block;
    color: white !important;
    text-transform: capitalize;
    text-decoration: none;
    padding: 6px 10px;
    transition: 0.4s ease;
}

.navbar-nav>li>a i:before {
    margin: 0px 5px 0px 0px;
    font-size: 14px;
}

#page-content-wrapper {
    width: 100%;
    transition: all 0.5s ease;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -270px;

    transition: all 0.5s ease;
}

.toggled#page-content-wrapper {
    margin-left: 270px;
    transition: all 0.5s ease;
}

@media only screen and (min-width:992px) {
    .toggled#page-content-wrapper {
        width: calc(100% - 270px);
    }
}

.nav-icon1 {
    z-index: 999;
    position: relative;
    display: block;
    width: 23px;
    margin: 0px 30px 0px 25px;
    cursor: pointer;
    height: 25px;
}


.nav-icon1 span {
    position: absolute;
    top: 0;
    width: 100%;
    height: 3px;
    cursor: pointer;
    background-color: #5d5d5d;
    left: 0;
    transform: rotate(0deg);
    transition: .30s ease-in-out;
}

.nav-icon1:hover span:nth-of-type(1) {
    top: -3px
}

.nav-icon1:hover span:nth-of-type(3) {
    top: 19px;
}

.nav-icon1 span:nth-of-type(1) {
    top: 0;
}

.nav-icon1 span:nth-of-type(2) {
    top: 8px;
}

.nav-icon1 span:nth-of-type(3) {
    top: 16px;
}

.nav-icon1.open span:nth-of-type(1) {
    top: 8px;
    transform: rotate(135deg);
}

.nav-icon1.open span:nth-of-type(2) {
    top: 8px;
    opacity: 0;
    left: -30px;
}

.nav-icon1.open span:nth-of-type(3) {
    top: 8px;
    transform: rotate(-135deg);
}


/*---------------------------------
  cross-bar animation
  ----------------------*/



/*---------------------------------
  header navbar design
  ----------------------*/
.my-navbar {
    padding: 0px;
    background-color: white;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .16);
}

.text-gray-600 {
    color: #858796 !important;
}

.nav-link .img-profile {
    height: 40px;
    width: 40px;
}

.navbar-nav>li>a>i {
    font-size: 18px;
    color: #b3b3b3;
    margin: 8px 0px 0px 0px;
    padding: 0px;
}

.badge-counter {
    position: absolute;
    transform: scale(.7);
    transform-origin: top right;
    right: 6px;
    margin-top: 4px;
}


.dropdown,
.dropleft,
.dropright,
.dropup {
    position: relative;
}

.nav-flag,
.nav-icon {
    padding: .1rem .8rem;
    display: block;
    font-size: 1.5rem;
    color: #6c757d;
    transition: background .1s ease-in-out, color .1s ease-in-out;
    line-height: 1.4;
}


.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute;
}

.navbar-nav .dropdown-menu {
    box-shadow: 0 0.1rem 0.2rem rgba(0, 0, 0, .05);
}

.navbar-nav .dropdown-menu {
    position: static;
    float: none;
}

.dropdown-menu-lg {
    min-width: 20rem;
}


.position-relative {
    position: relative !important;
}

.nav-item .indicator {
    background: #3b7ddd;
    box-shadow: 0 0.1rem 0.2rem rgba(0, 0, 0, .05);
    border-radius: 50%;
    display: block;
    height: 18px;
    width: 18px;
    padding: 1px;
    position: absolute;
    top: 0;
    right: -8px;
    text-align: center;
    transition: top .1s ease-out;
    font-size: .675rem;
    color: #fff;
}

/*---------------------------------
   header navbar design
  ----------------------*/



/*---------------------------------
  main-top card
  ----------------------*/

.card {
    margin-bottom: 24px;
    border: none;
    box-shadow: 0 0 0.875rem 0 rgba(33, 37, 41, .05);
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}

.card-title {
    font-size: .875rem;
    color: #495057;
}

.card-body h1 {
    font-size: 1.75rem;
    font-weight: 400;
    line-height: 1.2;
    color: #000;
}


.text-gray-800 {
    color: #5a5c69 !important;
    font-size: 1.75rem;
    font-weight: 400;
    line-height: 1.2;
}

.shadow-sm {
    box-shadow: 0 .125rem .25rem 0 rgba(58, 59, 69, .2) !important;
}


.btn-sm {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem;
}


.font-16 {
    font-size: 16px;
}


.m-r-10 {
    margin-right: 10px;
}

.btn-circle {
    border-radius: 100%;
    width: 40px;
    height: 40px;
    padding: 10px;
}

.btn-info {
    color: #fff;
    background-color: #2962FF;
    border-color: #2962FF;
}

.btn-orange {
    color: #212529;
    background-color: #fb8c00;
    border-color: #fb8c00;
}

.btn-success {
    color: #fff;
    background-color: #36bea6;
    border-color: #36bea6;
}

.btn-purple {
    color: #fff;
    background-color: #7460ee;
    border-color: #7460ee;
}

.card .card-title {
    position: relative;
    font-weight: 600;
    margin-bottom: 10px;
}


.card .card-subtitle {
    font-weight: 300;
    margin-bottom: 10px;
    color: #a1aab2;
    margin-top: -0.375rem;
}


.table td,
.table th {
    padding: 1rem;
    font-size: 14px;
    color: #333;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

.table h5 {
    font-size: 16px;
    font-weight: 600;
    color: #585858;
}



footer.footer {
    padding: 1rem .875rem;
    direction: ltr;
    background: #fff;
}

footer.footer ul {
    margin: 0px;
    list-style: none;
}

.footer ul li {
    display: inline-block;
    margin: 0px 7px;
}

.text-muted {
    color: #6c757d !important;
    font-size: 14px;
}
</style>

<body>
    <?php// include("php/header2.php");?>
    <div class="admin-panel clearfix">
        <div class="slidebar">
            <div class="logo">
                <a href=""></a>
            </div>
            <ul>
                <li><a href="#dashboard" id="targeted">dashboard</a></li>
                <li><a href="admin/producttable.php">Awaiting Products</a></li>
                <li><a href="admin/ordertable.php">Orders</a></li>
                <li><a href="admin/posttable.php">Awaiting Posts</a></li>
                <li><a href="admin/sellers.php">Sellers</a></li>
                <li><a href="admin/buyers.php">Buyers</a></li>
                <li><a href="admin/delivery.php">Delivery Service</a></li>
                <li><a href="admin/productA.php">Accepted Products</a></li>
                <li><a href="admin/postA.php">Accepted Posts</a></li>
                <li><a href="admin/trendingP.php">Trending List</a></li>
            </ul>
        </div>
        <div class="main">

            <div class="first">
                <ul class="topbar clearfix">
                    <li><a href="#">EDIT PROFILE</a></li>
                    <li><a href="admin/changeA.php">CHANGE PASSWORD</a></li>
                    <li><a href="admin/logout.php">LOG OUT</a></li>
                </ul>
            </div>
            <div id="wrapper" class="first">
                <div class="overlay"></div>
                <div id="page-content-wrapper">


                    <div id="content">

                        <!-- Begin Page Content -->
                        <div class="container-fluid px-lg-4">
                            <div class="row">
                                <div class="col-md-12 mt-lg-4 mt-4">
                                    <!-- Page Heading -->
                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                class="fas fa-download fa-sm text-white-50"></i>
                                            Generate Report</a>
                                    </div>
                                </div>
                                <!-- <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-4">Sales</h5>
                                                    <h1 class="display-5 mt-1 mb-3">2.382</h1>
                                                    <div class="mb-1">
                                                        <span class="text-danger"> <i
                                                                class="mdi mdi-arrow-bottom-right"></i> -3.65%
                                                        </span>
                                                        <span class="text-muted">Since last week</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-4">Sales</h5>
                                                    <h1 class="display-5 mt-1 mb-3">2.382</h1>
                                                    <div class="mb-1">
                                                        <span class="text-danger"> <i
                                                                class="mdi mdi-arrow-bottom-right"></i> -3.65%
                                                        </span>
                                                        <span class="text-muted">Since last week</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-4">Sales</h5>
                                                    <h1 class="display-5 mt-1 mb-3">2.382</h1>
                                                    <div class="mb-1">
                                                        <span class="text-danger"> <i
                                                                class="mdi mdi-arrow-bottom-right"></i> -3.65%
                                                        </span>
                                                        <span class="text-muted">Since last week</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-4">Earnings</h5>
                                                    <h1 class="display-5 mt-1 mb-3">$21.300</h1>
                                                    <div class="mb-1">
                                                        <span class="text-success"> <i
                                                                class="mdi mdi-arrow-bottom-right"></i> 6.65%
                                                        </span>
                                                        <span class="text-muted">Since last week</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div> -->



                                <!-- column -->
                                <div class="col-md-12 mt-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- title -->
                                            <div class="d-md-flex align-items-center">
                                                <div>
                                                    <h4 class="card-title">Top Selling Products</h4>
                                                    <h5 class="card-subtitle">Overview of Top Selling Items</h5>
                                                </div>
                                                <div class="ml-auto">
                                                    <div class="dl">
                                                        <select class="custom-select">
                                                            <option value="0" selected="">Monthly</option>
                                                            <option value="1">Daily</option>
                                                            <option value="2">Weekly</option>
                                                            <option value="3">Yearly</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- title -->
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table v-middle">
                                                <thead>
                                                    <tr class="bg-light">
                                                        <th class="border-top-0">Products</th>
                                                        <th class="border-top-0">License</th>
                                                        <th class="border-top-0">Support Agent</th>
                                                        <th class="border-top-0">Technology</th>
                                                        <th class="border-top-0">Tickets</th>
                                                        <th class="border-top-0">Sales</th>
                                                        <th class="border-top-0">Earnings</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="m-r-10"><a
                                                                        class="btn btn-circle btn-info text-white">EA</a>
                                                                </div>
                                                                <div class="">
                                                                    <h4 class="m-b-0 font-16">Elite Admin</h4>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Single Use</td>
                                                        <td>John Doe</td>
                                                        <td>
                                                            <label class="label label-danger">Angular</label>
                                                        </td>
                                                        <td>46</td>
                                                        <td>356</td>
                                                        <td>
                                                            <h5 class="m-b-0">$2850.06</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="m-r-10"><a
                                                                        class="btn btn-circle btn-orange text-white">MA</a>
                                                                </div>
                                                                <div class="">
                                                                    <h4 class="m-b-0 font-16">Monster Admin</h4>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Single Use</td>
                                                        <td>Venessa Fern</td>
                                                        <td>
                                                            <label class="label label-info">Vue Js</label>
                                                        </td>
                                                        <td>46</td>
                                                        <td>356</td>
                                                        <td>
                                                            <h5 class="m-b-0">$2850.06</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="m-r-10"><a
                                                                        class="btn btn-circle btn-success text-white">MP</a>
                                                                </div>
                                                                <div class="">
                                                                    <h4 class="m-b-0 font-16">Material Pro Admin
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Single Use</td>
                                                        <td>John Doe</td>
                                                        <td>
                                                            <label class="label label-success">Bootstrap</label>
                                                        </td>
                                                        <td>46</td>
                                                        <td>356</td>
                                                        <td>
                                                            <h5 class="m-b-0">$2850.06</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="m-r-10"><a
                                                                        class="btn btn-circle btn-purple text-white">AA</a>
                                                                </div>
                                                                <div class="">
                                                                    <h4 class="m-b-0 font-16">Ample Admin</h4>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Single Use</td>
                                                        <td>John Doe</td>
                                                        <td>
                                                            <label class="label label-purple">React</label>
                                                        </td>
                                                        <td>46</td>
                                                        <td>356</td>
                                                        <td>
                                                            <h5 class="m-b-0">$2850.06</h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <!-- /.container-fluid -->

                    </div>








                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row text-muted">
                                <div class="col-6 text-left">
                                    <p class="mb-0">
                                        <a href="index.html" class="text-muted"><strong>Dashboard Vishweb Design
                                            </strong></a> &copy
                                    </p>
                                </div>
                                <div class="col-6 text-right">
                                    <ul class="list-inline">
                                        <li class="footer-item">
                                            <a class="text-muted" href="#">Support</a>
                                        </li>
                                        <li class="footer-item">
                                            <a class="text-muted" href="#">Help Center</a>
                                        </li>
                                        <li class="footer-item">
                                            <a class="text-muted" href="#">Privacy</a>
                                        </li>
                                        <li class="footer-item">
                                            <a class="text-muted" href="#">Terms</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>

                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
    </div>
    </div>
    <?php //include("php/footer.php");?>
</body>

</html>