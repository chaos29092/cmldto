<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:500|Droid+Sans' rel='stylesheet' type='text/css'>
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/main.css') }}
    {{ HTML::script('assets/js/vendor/modernizr-2.6.2.min.js') }}
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

{{--Mega menu begin--}}
<div class="container">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Camellia</a>
        </div>

        <div class="collapse navbar-collapse js-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Products<span
                            class="glyphicon glyphicon-chevron-down pull-right"></span></a>

                    <ul class="dropdown-menu mega-dropdown-menu row">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">New in Stores</li>
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <a href="#"><img
                                                    src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection"
                                                    class="img-responsive" alt="product 1"></a>
                                            <h4>
                                                <small>Summer dress floral prints</small>
                                            </h4>
                                            <button class="btn btn-primary" type="button">49,99 €</button>
                                            <button href="#" class="btn btn-default" type="button"><span
                                                    class="glyphicon glyphicon-heart"></span> Add to Wishlist
                                            </button>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item">
                                            <a href="#"><img
                                                    src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection"
                                                    class="img-responsive" alt="product 2"></a>
                                            <h4>
                                                <small>Gold sandals with shiny touch</small>
                                            </h4>
                                            <button class="btn btn-primary" type="button">9,99 €</button>
                                            <button href="#" class="btn btn-default" type="button"><span
                                                    class="glyphicon glyphicon-heart"></span> Add to Wishlist
                                            </button>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item">
                                            <a href="#"><img
                                                    src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection"
                                                    class="img-responsive" alt="product 3"></a>
                                            <h4>
                                                <small>Denin jacket stamped</small>
                                            </h4>
                                            <button class="btn btn-primary" type="button">49,99 €</button>
                                            <button href="#" class="btn btn-default" type="button"><span
                                                    class="glyphicon glyphicon-heart"></span> Add to Wishlist
                                            </button>
                                        </div>
                                        <!-- End Item -->
                                    </div>
                                    <!-- End Carousel Inner -->
                                </div>
                                <!-- /.carousel -->
                                <li class="divider"></li>
                                <li><a href="#">View all Collection <span
                                            class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Dresses</li>
                                <li><a href="#">Unique Features</a></li>
                                <li><a href="#">Image Responsive</a></li>
                                <li><a href="#">Auto Carousel</a></li>
                                <li><a href="#">Newsletter Form</a></li>
                                <li><a href="#">Four columns</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Tops</li>
                                <li><a href="#">Good Typography</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Jackets</li>
                                <li><a href="#">Easy to customize</a></li>
                                <li><a href="#">Glyphicons</a></li>
                                <li><a href="#">Pull Right Elements</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Pants</li>
                                <li><a href="#">Coloured Headers</a></li>
                                <li><a href="#">Primary Buttons & Default</a></li>
                                <li><a href="#">Calls to action</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Accessories</li>
                                <li><a href="#">Default Navbar</a></li>
                                <li><a href="#">Lovely Fonts</a></li>
                                <li><a href="#">Responsive Dropdown </a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Newsletter</li>
                                <form class="form" role="form">
                                    <div class="form-group">
                                        <label class="sr-only" for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                </form>
                            </ul>
                        </li>
                    </ul>

                </li>
            </ul>
        </div>
    </nav>
</div>
{{--Mega menu end--}}


{{--Product list begin--}}
<div class="container-fluid" style="background-color:#e8e8e8">
<div class="container container-pad" id="property-listings">

<div class="row">
    <div class="col-md-12">
        <h1>Million Dollar Home Listings</h1>

        <p>A snippet I recently used to display homes for a local brokerage. Focused more on images when accessed
            through mobile</p>
    </div>
</div>

<div class="row">
<div class="col-sm-6">

    <!-- Begin Listing: 609 W GRAVERS LN-->
    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
        <div class="media">
            <a class="pull-left" href="#" target="_parent">
                <img alt="image" class="img-responsive"
                     src="http://images.prd.mris.com/image/V2/1/Yu59d899Ocpyr_RnF0-8qNJX1oYibjwp9TiLy-bZvU9vRJ2iC1zSQgFwW-fTCs6tVkKrj99s7FFm5Ygwl88xIA.jpg"></a>

            <div class="clearfix visible-sm"></div>

            <div class="media-body fnt-smaller">
                <a href="#" target="_parent"></a>

                <h4 class="media-heading">
                    <a href="#" target="_parent">$1,975,000
                        <small class="pull-right">609 W Gravers Ln</small>
                    </a></h4>


                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                    <li>4,820 SqFt</li>

                    <li style="list-style: none">|</li>

                    <li>5 Beds</li>

                    <li style="list-style: none">|</li>

                    <li>5 Baths</li>
                </ul>

                <p class="hidden-xs">Situated between fairmount
                    park and the prestigious philadelphia cricket
                    club, this beautiful 2+ acre property is truly
                    ...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of HS Fox & Roach-Chestnut Hill
                                Evergreen</span>
            </div>
        </div>
    </div>
    <!-- End Listing-->

    <!-- Begin Listing: 218 LYNNEBROOK LN-->
    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
        <div class="media">
            <a class="pull-left" href="#" target="_parent">
                <img alt="image" class="img-responsive"
                     src="http://images.prd.mris.com/image/V2/1/zMjCkcFeFDXDAP8xDhbD9ZmrVL7oGkBvSnh2bDBZ6UB5UHXa3_g8c6XYhRY_OxgGaMBMehiTWXDSLzBMaIzRhA.jpg"></a>

            <div class="clearfix visible-sm"></div>

            <div class="media-body fnt-smaller">
                <a href="#" target="_parent"></a>

                <h4 class="media-heading">
                    <a href="#" target="_parent">$1,975,000
                        <small class="pull-right">218 Lynnebrook Ln</small>
                    </a></h4>


                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                    <li>6,959 SqFt</li>

                    <li style="list-style: none">|</li>

                    <li>6 Beds</li>

                    <li style="list-style: none">|</li>

                    <li>5 Baths</li>
                </ul>

                <p class="hidden-xs">Impressively positioned
                    overlooking 3.5 captivating acres, designated
                    as "significant" by the chestnut hill
                    historical s...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of HS Fox & Roach-Blue Bell</span>
            </div>
        </div>
    </div>
    <!-- End Listing-->

    <!-- Begin Listing: 209 CHESTNUT HILL AVE-->
    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
        <div class="media">
            <a class="pull-left" href="#" target="_parent">
                <img alt="image" class="img-responsive"
                     src="http://images.prd.mris.com/image/V2/1/iwn7qH9r9OPnqTaTTxxb8PBzQHk2EiHU2PBBntt041AZsVsGY-SeUexTMLgRcYSJukrKOwHaYnTVXAsk6RdSmA.jpg"></a>

            <div class="clearfix visible-sm"></div>

            <div class="media-body fnt-smaller">
                <a href="#" target="_parent"></a>

                <h4 class="media-heading">
                    <a href="#" target="_parent">$1,599,999
                        <small class="pull-right">209 Chestnut Hill ve</small>
                    </a></h4>


                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                    <li>16,581 SqFt</li>

                    <li style="list-style: none">|</li>

                    <li>8 Beds</li>

                    <li style="list-style: none">|</li>

                    <li>4 Baths</li>
                </ul>

                <p class="hidden-xs">Built in 1909 by
                    pittsburgh steel magnate henry a. laughlin,
                    greylock is a classic chestnut hill stone
                    mansion once cons...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of ng and Foster-Devon</span>
            </div>
        </div>
    </div>
    <!-- End Listing-->

    <!-- Begin Listing: 704 SAINT GEORGES ST-->
    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
        <div class="media">
            <a class="pull-left" href="#" target="_parent">
                <img alt="image" class="img-responsive"
                     src="http://images.prd.mris.com/image/V2/1/7IZk2HTN0AcHnIb7VCvisTUc3kTbn0UyHQlVAlwkNLM3_8UNN8pcgy9u6KVNoRGGH_kdUlpYehdbqzctRNUebg.jpg"></a>

            <div class="clearfix visible-sm"></div>

            <div class="media-body fnt-smaller">
                <a href="#" target="_parent"></a>

                <h4 class="media-heading">
                    <a href="#" target="_parent">$1,595,000
                        <small class="pull-right">704 Saint Georges St</small>
                    </a></h4>


                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                    <li>0 SqFt</li>

                    <li style="list-style: none">|</li>

                    <li>4 Beds</li>

                    <li style="list-style: none">|</li>

                    <li>5 Baths</li>
                </ul>

                <p class="hidden-xs">Blake development is proud
                    to offer the second of two distinctly unique
                    homes located on one of the most desirable
                    stree...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of HS Fox & Roach-Chestnut Hill
                                Evergreen</span>
            </div>
        </div>
    </div>
    <!-- End Listing-->


</div>

<div class="col-sm-6">

    <!-- Begin Listing: 1220-32 N HOWARD ST-->
    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
        <div class="media">
            <a class="pull-left" href="#" target="_parent">
                <img alt="image" class="img-responsive"
                     src="http://images.prd.mris.com/image/V2/1/vGoNjc2jHGb87GlnnDQlf6LxeOUgIOn0bL6Wvn1nEnig2Ntq6W7xN5cOQBZZeNxl9O42DOkHUw0LNnj1ZB2KHA.jpg"></a>

            <div class="clearfix visible-sm"></div>

            <div class="media-body fnt-smaller">
                <a href="#" target="_parent"></a>

                <h4 class="media-heading">
                    <a href="#" target="_parent">$1,500,000
                        <small class="pull-right">1220-32 N Howard St</small>
                    </a></h4>


                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                    <li>4,900 SqFt</li>

                    <li style="list-style: none">|</li>

                    <li>1 Beds</li>

                    <li style="list-style: none">|</li>

                    <li>1 Baths</li>
                </ul>

                <p class="hidden-xs">A once in a lifetime
                    opportunity to own a unique live / work space
                    in one of philadelphia's most popular
                    neighborhoods. ...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of ll Banker Preferred-Philadelphia</span>
            </div>
        </div>
    </div>
    <!-- End Listing-->

    <!-- Begin Listing: 9006 CREFELD ST-->
    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
        <div class="media">
            <a class="pull-left" href="#" target="_parent">
                <img alt="image" class="img-responsive"
                     src="http://images.prd.mris.com/image/V2/1/uLp58OH37CTPHxXcgJXYw8zT2u3xg_2XIbFndB6J0WTSAStGBaEV6YsdAseSZTKAdthm0OzG-Ca_EIkoXIEBxw.jpg"></a>

            <div class="clearfix visible-sm"></div>

            <div class="media-body fnt-smaller">
                <a href="#" target="_parent"></a>

                <h4 class="media-heading">
                    <a href="#" target="_parent">$1,295,000
                        <small class="pull-right">9006 Crefeld St</small>
                    </a></h4>


                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                    <li>7,672 SqFt</li>

                    <li style="list-style: none">|</li>

                    <li>7 Beds</li>

                    <li style="list-style: none">|</li>

                    <li>5 Baths</li>
                </ul>

                <p class="hidden-xs">Located in chestnut hill,
                    recently named by the american planning
                    association as one of america's top 10 great
                    neighborh...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of RE/MAX Services</span>
            </div>
        </div>
    </div>
    <!-- End Listing-->

    <!-- Begin Listing: 701 W ALLENS LN-->
    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
        <div class="media">
            <a class="pull-left" href="#" target="_parent">
                <img alt="image" class="img-responsive"
                     src="http://images.prd.mris.com/image/V2/1/K12MLs4i-e2rsQ-rA6DoCwlysXSrEXZyHtCFkrOLsvK1y2mvbUrlmw5pMXX1laXlnY9_0VU82YeS3EucwIchtg.jpg"></a>

            <div class="clearfix visible-sm"></div>

            <div class="media-body fnt-smaller">
                <a href="#" target="_parent"></a>

                <h4 class="media-heading">
                    <a href="#" target="_parent">$1,175,000
                        <small class="pull-right">701 W Allens Ln</small>
                    </a></h4>


                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                    <li>9,824 SqFt</li>

                    <li style="list-style: none">|</li>

                    <li>8 Beds</li>

                    <li style="list-style: none">|</li>

                    <li>5 Baths</li>
                </ul>

                <p class="hidden-xs">A once in a lifetime
                    opportunity! live in this grand home with its
                    stunning entry and staircase, bedroom suites,
                    firepla...</p><span class="fnt-smaller fnt-lighter fnt-arial">Courtesy of HS Fox & Roach-Chestnut Hill
                                Evergreen</span>
            </div>
        </div>
    </div>
    <!-- End Listing-->
</div>
<!-- End Col -->
</div>
<!-- End row -->
</div>
<!-- End container -->
</div>
{{--Product list end--}}

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
{{ HTML::script('assets/js/vendor/bootstrap.min.js') }}
{{ HTML::script('assets/js/plugins.js') }}
{{ HTML::script('assets/js/main.js') }}

{{--
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');
</script>
--}}

</body>
</html>