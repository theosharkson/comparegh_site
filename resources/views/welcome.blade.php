@extends('layouts.site')

@section('content')


    <div class="intro" style="background-image: url(images/bg3.jpg);">
        <div class="dtable hw100">
            <div class="dtable-cell hw100">
                <div class="container text-center">
                    <h1 class="intro-title animated fadeInDown"> Compare Prices In Ghana </h1>

                    <p class="sub animateme fittext3 animated fadeIn">
                        Find local products, Compare prices, Proceed to purchase
                    </p>

                    <div class="row search-row animated fadeInUp">
                      
                        <div class="col-xl-8 col-sm-8 search-col relative">
                            <div class="search-col-inner">
                                <i class="icon-docs icon-append"></i>
                                <div class="search-col-input">
                                    <input type="text" name="ads"
                                           class="form-control has-icon"
                                           placeholder="I'm looking for a ..." value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-4 search-col">
                            <button class="btn btn-primary btn-search btn-block btn-gradient"><i
                                    class="icon-search"></i><strong>Find</strong></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.intro -->

    <div class="main-container">
        <div class="container">

            <div class="col-xl-12 content-box ">
                <div class="row row-featured row-featured-category">
                    
                    

                    <div class="col-xl-12  box-title no-border">
                        <div class="inner">
                            <h2>
                                <span>Browse by</span>Category 
                                <a href="category.html" class="sell-your-item"> 
                                    View more 
                                    <i class="  icon-th-list"></i> 
                                </a>
                            </h2>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="images/category/mobile.jpg" class="img-responsive"
                                                     alt="img">
                            <h6> Mobiles </h6></a>
                    </div>


                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="images/category/laptop-2.jpg" class="img-responsive"
                                                     alt="img"> <h6> Laptops </h6></a>
                    </div>


                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="images/category/car-2.jpg" class="img-responsive"
                                                     alt="img">
                            <h6> Automobiles </h6></a>
                    </div>
                    

                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="images/category/tv.jpg" class="img-responsive" alt="img">
                            <h6>
                                Electronics </h6></a>
                    </div>

                     <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="images/category/Home-Electronics-Appliances-2.jpg"
                                                     class="img-responsive" alt="img"> <h6> Home Appliances </h6>
                        </a>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="category.html"><img src="images/category/hdd.jpg" class="img-responsive" alt="img">
                            <h6> Others </h6></a>
                    </div>

                    

                </div>


            </div>

            <div style="clear: both"></div>


            <div class="col-xl-12 content-box ">
                
            </div>



            <div class="row">

                <div class="col-md-9 page-content col-thin-right">
                    <div class="inner-box category-content">
                        <div class="row row-featured">
                            <div class="col-xl-12  box-title ">
                                <div class="inner">
                                    <h2>
                                        <span>Sponsored </span>Products 
                                        <a href="category.html" class="sell-your-item"> 
                                            View more 
                                            <i class="  icon-th-list"></i> 
                                        </a>
                                    </h2>

                                </div>
                            </div>

                            <div style="clear: both"></div>

                            <div class=" relative  content featured-list-row  w100">

                                <nav class="slider-nav has-white-bg nav-narrow-svg">
                                    <a class="prev">
                                        <span class="nav-icon-wrap"></span>
                                    </a>
                                    <a class="next">
                                        <span class="nav-icon-wrap"></span>
                                    </a>
                                </nav>

                                <div class="no-margin featured-list-slider">
                                    <div class="item">
                                        <a href="ads-details-automobile.html">
                                            <span class="item-carousel-thumb">
                                                <img class="img-responsive" src="images/auto/2012-mercedes-benz-sls-amg.jpg" alt="img">
                                            </span>
                                            <span class="item-name"> 2011 Mercedes-Benz SLS AMG  </span>
                                            <span class="price">  $204,990 </span>
                                        </a>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="inner-box has-aff relative">
                        <a class="dummy-aff-img" href="category.html">
                            <img src="images/aff2.jpg" class="img-responsive" alt=" aff"> 
                        </a>
                    </div>
                </div>
                <div class="col-md-3 page-sidebar col-thin-left">
                    <aside>
                        <div class="inner-box no-padding">
                            <div class="inner-box-content"><a href="#"><img class="img-responsive"
                                                                            src="images/site/app.jpg" alt="tv"></a>
                            </div>
                        </div>
                        <div class="inner-box">
                            <h2 class="title-2">Popular Categories </h2>

                            <div class="inner-box-content">
                                <ul class="cat-list arrow">
                                    <li>
                                        <a href="sub-category-sub-location.html"> Apparel (1,386) </a>
                                    </li>
                                    <li>
                                        <a href="sub-category-sub-location.html"> Art (1,163) </a>
                                    </li>
                                    <li>
                                        <a href="sub-category-sub-location.html"> Business Opportunities
                                        (4,974) </a>
                                    </li>
                                    <li>
                                        <a href="sub-category-sub-location.html"> Community and Events (1,258) </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- /.main-container -->

    <div class="page-info hasOverly" style="background: url(images/bg.jpg); background-size:cover">
        <div class="bg-overly">
            <div class="container text-center section-promo">
                <div class="row">
                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-group"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>2200</span></h5>

                                    <div class="iconbox-wrap-text">Trusted Seller</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-th-large-1"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>100</span></h5>

                                    <div class="iconbox-wrap-text">Categories</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6  col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-map"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>700</span></h5>

                                    <div class="iconbox-wrap-text">Online Shops</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon icon-facebook"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>50,000</span></h5>

                                    <div class="iconbox-wrap-text"> Facebook Fans</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- /.page-info -->

@endsection