@extends('layouts.app')
@section('main-content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus
                vel mauris
                facilisis faucibus at enim quis massa lobortis rutrum.</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"
                                class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">E-Commerce
                            Dashboard Template</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader  -->
<!-- ============================================================== -->
<div class="ecommerce-widget">
    <div class="row">
        <!-- ============================================================== -->
        <!-- sales  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card border-top-primary shadow-sm h-100">
                <div class="card-body">
                    <h5 class="text-muted mb-4">Sales</h5>
                    <div class="d-flex justify-content-between">
                        <div class="metric-value">
                            <h1 class="font-weight-bold">$12099</h1>
                        </div>
                        <div class="metric-label text-success font-weight-bold align-self-center">
                            <span
                                class="icon-shape icon-xs rounded-circle text-success bg-success-light"><i
                                    class="fa fa-fw fa-arrow-up"></i></span><span
                                class="ml-1">5.86%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end sales  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- new customer  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card border-top-primary shadow-sm h-100">
                <div class="card-body">
                    <h5 class="text-muted mb-4">New Customer</h5>
                    <div class="d-flex justify-content-between">
                        <div class="metric-value">
                            <h1 class="font-weight-bold">1245</h1>
                        </div>
                        <div class="metric-label align-self-center text-success font-weight-bold">
                            <span
                                class="icon-shape icon-xs rounded-circle text-success bg-success-light"><i
                                    class="fa fa-fw fa-arrow-up"></i></span><span
                                class="ml-1">10%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end new customer  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- visitor  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card border-top-primary shadow-sm h-100">
                <div class="card-body">
                    <h5 class="text-muted mb-4">Visitor</h5>
                    <div class="d-flex justify-content-between">
                        <div class="metric-value">
                            <h1 class="font-weight-bold">13000</h1>
                        </div>
                        <div class="metric-label align-self-center text-success font-weight-bold">
                            <span
                                class="icon-shape icon-xs rounded-circle text-success bg-success-light"><i
                                    class="fa fa-fw fa-arrow-up"></i></span><span
                                class="ml-1">5%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end visitor  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- total orders  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card border-top-primary shadow-sm h-100">
                <div class="card-body">
                    <h5 class="text-muted mb-4">Total Orders</h5>
                    <div class="d-flex justify-content-between">
                        <div class="metric-value">
                            <h1 class="font-weight-bold">1340</h1>
                        </div>
                        <div class="metric-label align-self-center text-danger font-weight-bold">
                            <span
                                class="icon-shape icon-xs rounded-circle text-danger bg-danger-light bg-danger-light "><i
                                    class="fa fa-fw fa-arrow-down"></i></span><span
                                class="ml-1">4%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end total orders  -->
        <!-- ============================================================== -->
    </div>
    <div class="row">
        <!-- ============================================================== -->
        <!-- product sales  -->
        <!-- ============================================================== -->
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">
                    <h5 class="mb-0"> Product Sales</h5>
                </div>
                <div class="card-body">
                    <div class="ct-chart-product ct-golden-section"></div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end product sales  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- product category  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card shadow-sm h-100">
                <h5 class="card-header"> Product Category</h5>
                <div class="card-body">
                    <div class="ct-chart-category ct-golden-section" style="height: 315px;"></div>
                    <div class="text-center mt-4">
                        <span class="legend-item mr-3">
                            <span class="fa-xs text-primary mr-1 legend-tile"><i
                                    class="fa fa-fw fa-square-full "></i></span><span
                                class="legend-text">Man</span>
                        </span>
                        <span class="legend-item mr-3">
                            <span class="fa-xs text-secondary mr-1 legend-tile"><i
                                    class="fa fa-fw fa-square-full"></i></span>
                            <span class="legend-text">Woman</span>
                        </span>
                        <span class="legend-item mr-3">
                            <span class="fa-xs text-info mr-1 legend-tile"><i
                                    class="fa fa-fw fa-square-full"></i></span>
                            <span class="legend-text">Accessories</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end product category  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- customer acquistion  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card shadow-sm h-100">
                <h5 class="card-header">Customer Acquisition</h5>
                <div class="card-body">
                    <div class="ct-chart ct-golden-section" style="height: 354px;"></div>
                    <div class="text-center">
                        <span class="legend-item mr-2">
                            <span class="fa-xs text-primary mr-1 legend-tile"><i
                                    class="fa fa-fw fa-square-full"></i></span>
                            <span class="legend-text">Returning</span>
                        </span>
                        <span class="legend-item mr-2">
                            <span class="fa-xs text-secondary mr-1 legend-tile"><i
                                    class="fa fa-fw fa-square-full"></i></span>
                            <span class="legend-text">First Time</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end customer acquistion  -->
        <!-- ============================================================== -->
    </div>
    <div class="row">
        <!-- ============================================================== -->
        <!-- recent orders  -->
        <!-- ============================================================== -->
        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card shadow-sm h-100">
                <h5 class="card-header">Recent Orders</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">#</th>
                                    <th class="border-0">Image</th>
                                    <th class="border-0">Product Name</th>
                                    <th class="border-0">Product Id</th>
                                    <th class="border-0">Quantity</th>
                                    <th class="border-0">Price</th>
                                    <th class="border-0">Order Time</th>
                                    <th class="border-0">Customer</th>
                                    <th class="border-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="m-r-10"><img
                                                src="{{ asset('assets/images/product-pic.jpg') }}"
                                                alt="user" class="rounded" width="45">
                                        </div>
                                    </td>
                                    <td>Product #1 </td>
                                    <td>id000001 </td>
                                    <td>20</td>
                                    <td>$80.00</td>
                                    <td>27-08-2018 01:22:12</td>
                                    <td>Patricia J. King </td>
                                    <td><span class="badge-dot badge-primary mr-1"></span>InTransit
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="m-r-10"><img
                                                src="{{ asset('assets/images/product-pic-2.jpg') }}"
                                                alt="user" class="rounded" width="45">
                                        </div>
                                    </td>
                                    <td>Product #2 </td>
                                    <td>id000002 </td>
                                    <td>12</td>
                                    <td>$180.00</td>
                                    <td>25-08-2018 21:12:56</td>
                                    <td>Rachel J. Wicker </td>
                                    <td><span class="badge-dot badge-success mr-1"></span>Delivered
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="m-r-10"><img
                                                src="{{ asset('assets/images/product-pic-3.jpg') }}"
                                                alt="user" class="rounded" width="45">
                                        </div>
                                    </td>
                                    <td>Product #3 </td>
                                    <td>id000003 </td>
                                    <td>23</td>
                                    <td>$820.00</td>
                                    <td>24-08-2018 14:12:77</td>
                                    <td>Michael K. Ledford </td>
                                    <td><span class="badge-dot badge-success mr-1"></span>Delivered
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="m-r-10"><img
                                                src="{{ asset('assets/images/product-pic-4.jpg') }}"
                                                alt="user" class="rounded" width="45">
                                        </div>
                                    </td>
                                    <td>Product #4 </td>
                                    <td>id000004 </td>
                                    <td>34</td>
                                    <td>$340.00</td>
                                    <td>23-08-2018 09:12:35</td>
                                    <td>Michael K. Ledford </td>
                                    <td><span class="badge-dot badge-success mr-1"></span>Delivered
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end recent orders  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
            <!-- ============================================================== -->
            <!-- top perfomimg  -->
            <!-- ============================================================== -->
            <div class="card shadow-sm h-100">
                <h5 class="card-header">Top Performing Campaigns</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table no-wrap p-table">
                            <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">Campaign</th>
                                    <th class="border-0">Visits</th>
                                    <th class="border-0">Revenue</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Campaign#1</td>
                                    <td>98,789 </td>
                                    <td>$4563</td>
                                </tr>
                                <tr>
                                    <td>Campaign#2</td>
                                    <td>2,789 </td>
                                    <td>$325</td>
                                </tr>
                                <tr>
                                    <td>Campaign#3</td>
                                    <td>1,459 </td>
                                    <td>$225</td>
                                </tr>
                                <tr>
                                    <td>Campaign#4</td>
                                    <td>5,035 </td>
                                    <td>$856</td>
                                </tr>
                                <tr>
                                    <td>Campaign#5</td>
                                    <td>10,000 </td>
                                    <td>$1000</td>
                                </tr>
                                <tr>
                                    <td>Campaign#5</td>
                                    <td>10,000 </td>
                                    <td>$1000</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end top perfomimg  -->
            <!-- ============================================================== -->
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="text-muted">Total Revenue</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">$12099</h1>
                        </div>
                    </div>
                    <div class="metric-label d-inline-block text-success font-weight-bold">
                        <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                    </div>
                </div>
                <div id="sparkline-revenue"></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="text-muted">Affiliate Revenue</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">$12099</h1>
                        </div>
                    </div>
                    <div class="metric-label d-inline-block text-success font-weight-bold">
                        <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                    </div>
                </div>
                <div id="sparkline-revenue2"></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="text-muted">Refunds</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">0.00</h1>
                        </div>
                    </div>
                    <div class="metric-label d-inline-block text-primary font-weight-bold">
                        <span>N/A</span>
                    </div>
                </div>
                <div id="sparkline-revenue3"></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="text-muted">Avg. Revenue Per User</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">$28000</h1>
                        </div>
                    </div>
                    <div class="metric-label d-inline-block text-secondary font-weight-bold">
                        <span>-2.00%</span>
                    </div>
                </div>
                <div id="sparkline-revenue4"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- ============================================================== -->
        <!-- total revenue  -->
        <!-- ============================================================== -->
        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card shadow-sm h-100">
                <h5 class="card-header"> Total Revenue</h5>
                <div class="card-body">
                    <div id="morris_totalrevenue"></div>
                </div>
                <div class="card-footer">
                    <p class="h1 font-weight-bold mb-0"><span
                            class="text-primary d-inline-block">$26,000</span><span
                            class="text-success float-right">+9.45%</span></p>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end total revenue  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- category revenue  -->
        <!-- ============================================================== -->
        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card shadow-sm h-100">
                <h5 class="card-header">Revenue by Category</h5>
                <div class="card-body">
                    <div id="c3chart_category" style="height: 420px;"></div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end category revenue  -->
        <!-- ============================================================== -->
    </div>
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
            <!-- ============================================================== -->
            <!-- social source  -->
            <!-- ============================================================== -->
            <div class="card shadow-sm h-100">
                <h5 class="card-header"> Sales By Social Source</h5>
                <div class="card-body p-0">
                    <ul class="social-sales list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <span
                                class="icon-shape icon-lg rounded-circle text-white bg-facebook mr-2"><i
                                    class="fab fa-facebook-f"></i></span><span
                                class="">Facebook</span>

                            <span class="ml-auto text-dark">120 Sales</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center"><span
                                class="icon-shape icon-lg rounded-circle text-white bg-twitter mr-2"><i
                                    class="fab fa-twitter"></i></span><span
                                class="">Twitter</span><span class="ml-auto text-dark">99
                                Sales</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center"><span
                                class="icon-shape icon-lg rounded-circle text-white bg-instagram mr-2"><i
                                    class="fab fa-instagram"></i></span><span
                                class="">Instagram</span><span class="ml-auto text-dark">76
                                Sales</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center"><span
                                class="icon-shape icon-lg rounded-circle text-white bg-pinterest mr-2"><i
                                    class="fab fa-pinterest-p"></i></span><span
                                class="">Pinterest</span><span class="ml-auto text-dark">56
                                Sales</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center"><span
                                class="icon-shape icon-lg rounded-circle text-white bg-googleplus mr-2"><i
                                    class="fab fa-google-plus-g') }}"></i></span><span
                                class="">Google Plus</span><span
                                class="ml-auto text-dark">36 Sales</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn-primary-link">View Details</a>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end social source  -->
            <!-- ============================================================== -->
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
            <!-- ============================================================== -->
            <!-- sales traffice source  -->
            <!-- ============================================================== -->
            <div class="card shadow-sm h-100">
                <h5 class="card-header"> Sales By Traffic Source</h5>
                <div class="card-body p-0">
                    <ul class="traffic-sales list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center pt-3 pb-3"><span
                                class="traffic-sales-name">Direct</span><span
                                class="ml-auto">$4000.00 <span
                                    class="icon-shape icon-xs rounded-circle text-success ml-4 bg-success-light"><i
                                        class="fa fa-fw fa-arrow-up"></i></span>
                                <span class="ml-1 text-success">5.86%</span>
                            </span>
                        </li>
                        <li class="list-group-item d-flex align-items-center pt-3 pb-3"><span
                                class="traffic-sales-name">Search</span><span
                                class="ml-auto">$3123.00 <span
                                    class="icon-shape icon-xs rounded-circle text-success ml-4 bg-success-light"><i
                                        class="fa fa-fw fa-arrow-up"></i></span>
                                <span class="ml-1 text-success">5.86%</span>
                            </span>

                        </li>
                        <li class="list-group-item d-flex align-items-center pt-3 pb-3"><span
                                class="traffic-sales-name">Social</span><span
                                class="ml-auto">$3099.00 <span
                                    class="icon-shape icon-xs rounded-circle text-success ml-4 bg-success-light"><i
                                        class="fa fa-fw fa-arrow-up"></i></span>
                                <span class="ml-1 text-success">5.86%</span>
                            </span>

                        </li>
                        <li class="list-group-item d-flex align-items-center pt-3 pb-3"><span
                                class="traffic-sales-name">Referrals</span><span
                                class="ml-auto">$2220.00 <span
                                    class="icon-shape icon-xs rounded-circle text-danger ml-4 bg-danger-light"><i
                                        class="fa fa-fw fa-arrow-down"></i></span>
                                <span class="ml-1 text-danger">4.02%</span>
                            </span>

                        </li>
                        <li class="list-group-item d-flex align-items-center pt-3 pb-3 "><span
                                class="traffic-sales-name">Email</span><span
                                class="ml-auto">$1567.00 <span
                                    class="icon-shape icon-xs rounded-circle text-danger ml-4 bg-danger-light"><i
                                        class="fa fa-fw fa-arrow-down"></i></span>
                                <span class="ml-1 text-danger">3.86%</span>
                            </span>

                        </li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn-primary-link">View Details</a>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end sales traffice source  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- sales traffic country source  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
            <div class="card shadow-sm h-100">
                <h5 class="card-header">Sales By Country Traffic Source</h5>
                <div class="card-body p-0">
                    <ul class="country-sales list-group list-group-flush">
                        <li class="country-sales-content list-group-item pt-3 pb-3"><span
                                class="mr-2"><i class="flag-icon flag-icon-us" title="us"
                                    id="us"></i> </span>
                            <span class="">United States</span><span
                                class="float-right text-dark">78%</span>
                        </li>
                        <li class="list-group-item country-sales-content pt-3 pb-3"><span
                                class="mr-2"><i class="flag-icon flag-icon-ca" title="ca"
                                    id="ca"></i></span><span
                                class="">Canada</span><span
                                class="float-right text-dark">7%</span>
                        </li>
                        <li class="list-group-item country-sales-content pt-3 pb-3"><span
                                class="mr-2"><i class="flag-icon flag-icon-ru" title="ru"
                                    id="ru"></i></span><span
                                class="">Russia</span><span
                                class="float-right text-dark">4%</span>
                        </li>
                        <li class="list-group-item country-sales-content pt-3 pb-3"><span
                                class=" mr-2"><i class="flag-icon flag-icon-in" title="in"
                                    id="in"></i></span><span
                                class="">India</span><span
                                class="float-right text-dark">12%</span>
                        </li>
                        <li class="list-group-item country-sales-content pt-3 pb-3"><span
                                class=" mr-2"><i class="flag-icon flag-icon-fr" title="fr"
                                    id="fr"></i></span><span
                                class="">France</span><span
                                class="float-right text-dark">16%</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn-primary-link">View Details</a>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end sales traffice country source  -->
        <!-- ============================================================== -->
    </div>
</div>
@endsection
