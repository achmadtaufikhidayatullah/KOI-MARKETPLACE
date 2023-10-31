<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">

    {{-- <link rel="icon" href="images/favicon.png"> --}}
    <link rel="icon" href="{{asset('images/logo/tethumbasan-logo.png')}}">

    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700;800;900&amp;family=Montserrat:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <title>KOI - Marketplace</title>
    <link rel="stylesheet" href="{{asset('dmarket-asset/css/framework7.bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('dmarket-asset/css/style.css')}}">
    <style>
        .animate {
            animation: shimmer 2s infinite linear;
            background: linear-gradient(to right, #eff1f3 4%, #e2e2e2 25%, #eff1f3 36%);
            background-size: 1000px 100%;
        }

        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        .hilang {
            display: none;
        }

    </style>
</head>

<body>

    <div id="app" style="max-width: 420px;margin: auto">

        <div class="view view-main view-init ios-edges" data-url="/">
            <div class="page page-home page-with-subnavbar">

                @include('layouts.toolbar')

                <div class="tabs">
                    <div id="tab-home" class="tab tab-home tab-active">
                        <!-- ===== TAB HOME ===== -->

                        <!-- navbar -->
                        @include('layouts.navbar')
                        <!-- end navbar -->

                        <!-- sidebar / panel -->
                        @include('layouts.sidebar')
                        <!-- end sidebar / panel -->

                        <!-- hader page -->
                        <div class="header-title">
                            <div class="container">
                                <h3>Marketplace</h3>
                            </div>
                        </div>
                        <!-- end hader page -->

                        <!-- separator -->
                        <div class="separator-small"></div>
                        <!-- end separator -->

                        {{-- SEARCH BAR --}}
                        @include('layouts.search')
                        {{-- END SEARCH BAR --}}


                        <!-- categories -->
                        @include('layouts.categories')
                        <!-- end categories -->

                        <!-- featured ads -->
                        <div class="featured">
                            <div class="block-title">
                                <h3>Terlaris
                                    <a href="/product/" data-transition="f7-dive" class="right-link">Lihat Semua</a>
                                </h3>
                            </div>
                            <div class="container">
                                <div class="swiper-container swiper-init" data-slides-per-view="auto"
                                    data-space-between="15">
                                    <div class="swiper-wrapper" id="divterlaris">
                                        <div class="swiper-slide">
                                            <a href="#" data-transition="f7-dive">
                                                <div class="content-item radius-default bg-white">
                                                    <div class="featured-symbol">
                                                        <ion-icon name="flash-outline"></ion-icon>
                                                    </div>
                                                    <div style="width: 100%;height: 150px;border-radius: 10% 10% 0% 0%"
                                                        class="animate">
                                                    </div>
                                                    <div class="text-desc">
                                                        <div style="width: 100%;height: 10px;border-radius: 10% 10% 0% 0%"
                                                            class="animate">
                                                        </div>
                                                        <div style="width: 100%;height: 20px;border-radius: 10% 10% 0% 0%;margin-top:10px"
                                                            class="animate">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" data-transition="f7-dive">
                                                <div class="content-item radius-default bg-white">
                                                    <div class="featured-symbol">
                                                        <ion-icon name="flash-outline"></ion-icon>
                                                    </div>
                                                    <div style="width: 100%;height: 150px;border-radius: 10% 10% 0% 0%"
                                                        class="animate">
                                                    </div>
                                                    <div class="text-desc">
                                                        <div style="width: 100%;height: 10px;border-radius: 10% 10% 0% 0%"
                                                            class="animate">
                                                        </div>
                                                        <div style="width: 100%;height: 20px;border-radius: 10% 10% 0% 0%;margin-top:10px"
                                                            class="animate">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" data-transition="f7-dive">
                                                <div class="content-item radius-default bg-white">
                                                    <div class="featured-symbol">
                                                        <ion-icon name="flash-outline"></ion-icon>
                                                    </div>
                                                    <div style="width: 100%;height: 150px;border-radius: 10% 10% 0% 0%"
                                                        class="animate">
                                                    </div>
                                                    <div class="text-desc">
                                                        <div style="width: 100%;height: 10px;border-radius: 10% 10% 0% 0%"
                                                            class="animate">
                                                        </div>
                                                        <div style="width: 100%;height: 20px;border-radius: 10% 10% 0% 0%;margin-top:10px"
                                                            class="animate">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end featured ads -->

                        <!-- separator -->
                        <div class="separator-large"></div>
                        <!-- end separator -->

                        <!-- promo banner -->
                        <div class="promo-banner">
                            <div class="container">
                                <a href="https://www.instagram.com/komunitasorganikindonesia/?hl=en" onclick="openLink('www.instagram.com/komunitasorganikindonesia/?hl=en')">
                                    <div class="content-box">
                                        <div class="content color-white content-left">
                                            <h5 class="title-item color-white">Komunitas Organik Indonesia</h5>
                                            <p class="text-small">
                                                Melayani para pecinta organik Indonesia di seluruh Indonesia
                                            </p>
                                        </div>
                                        <div class="content content-right">
                                            <div class="button button-icon-large" style="background: #19663b">
                                                <ion-icon name="arrow-forward-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end promo banner -->

                        <!-- latest ads -->
                        <div class="latest-ads">
                            <div class="block-title">
                                <h3>Produk Terbaru
                                    {{-- <a href="ads/" data-transition="f7-dive" class="right-link">Show All</a> --}}
                                </h3>
                                <input type="hidden" value="0" id="pagenya">
                            </div>
                            <div class="container">
                                <div class="row" id="divterbaru">
                                    <div class="col-50" style="margin-bottom: 15px">
                                        <div class="content-item radius-default bg-white">
                                            <div class="favorite-symbol active-symbol">
                                                <ion-icon name="heart-outline"></ion-icon>
                                            </div>
                                            <div style="width: 100%;height: 150px;border-radius: 10% 10% 0% 0%"
                                                class="animate">
                                            </div>
                                            <div class="text-desc">
                                                <div style="width: 100%;height: 10px;border-radius: 10% 10% 0% 0%"
                                                    class="animate">
                                                </div>
                                                <div style="width: 100%;height: 20px;border-radius: 10% 10% 0% 0%;margin-top:10px"
                                                    class="animate">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-50" style="margin-bottom: 15px">
                                        <div class="content-item radius-default bg-white">
                                            <div class="favorite-symbol active-symbol">
                                                <ion-icon name="heart-outline"></ion-icon>
                                            </div>
                                            <div style="width: 100%;height: 150px;border-radius: 10% 10% 0% 0%"
                                                class="animate">
                                            </div>
                                            <div class="text-desc">
                                                <div style="width: 100%;height: 10px;border-radius: 10% 10% 0% 0%"
                                                    class="animate">
                                                </div>
                                                <div style="width: 100%;height: 20px;border-radius: 10% 10% 0% 0%;margin-top:10px"
                                                    class="animate">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <a href="/product/" data-transition="f7-dive" class="button">Lihat lainnya..</a>
                                <br>
                                <br>

                            </div>
                            <div class="container" style="text-align: center !important">
                                <small style="bottom: 10px !important;margin:auto !important">Powered by iPaymu
                                    Ecosystem
                                    (Viralmu & Resellr)</small>
                                <br>
                                <br>
                                <div class="row text-center" style="text-align: center !important;width: 100%">
                                    <div class="col-33" style="margin: auto !important">
                                        <img src="{{asset('images/logo/viralmu-mini.png')}}" style="width: 70%">
                                    </div>
                                    <div class="col-33" style="margin: auto !important">
                                        <img src="{{asset('images/logo/ipaymu.png')}}" style="width: 80%">
                                    </div>
                                    <div class="col-33" style="margin: auto !important">
                                        <img src="{{asset('images/logo/resellr-logo.png')}}" style="width: 80%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end latest ads -->

                        <!-- separator -->
                        <div class="separator-large"></div>
                        <!-- end separator -->

                        <!-- ===== END TAB HOME ===== -->
                    </div>

                    <div id="tab-favorite" class="tab tab-favorite">
                        <!-- ===== TAB PROMO ===== -->

                        @include('landing.promo')

                        <!-- ===== END TAB PROMO ===== -->
                    </div>

                    <div id="tab-add" class="tab tab-add">
                        <!-- ===== TAB ADD ADS ===== -->

                        <div class="choose-categories">
                            <div class="block-title">
                                <h3>Choose Categories</h3>
                            </div>
                            <div class="container">
                                <a href="add-ads-product-details/" data-transition="f7-dive">
                                    <div class="category-list">
                                        <div class="category-icon">
                                            <ion-icon name="car-sport-outline" class="color-blue"></ion-icon>
                                        </div>
                                        <div class="category-list-label">
                                            <div class="category-list-title">
                                                <h5>Cars</h5>
                                            </div>
                                            <div class="category-list-after">
                                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- separator -->
                                <div class="separator-medium"></div>
                                <!-- end separator -->

                                <a href="add-ads-product-details/" data-transition="f7-dive">
                                    <div class="category-list">
                                        <div class="category-icon">
                                            <ion-icon name="bicycle-outline" class="color-purple"></ion-icon>
                                        </div>
                                        <div class="category-list-label">
                                            <div class="category-list-title">
                                                <h5>Bikes</h5>
                                            </div>
                                            <div class="category-list-after">
                                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- separator -->
                                <div class="separator-medium"></div>
                                <!-- end separator -->

                                <a href="add-ads-product-details/" data-transition="f7-dive">
                                    <div class="category-list">
                                        <div class="category-icon">
                                            <ion-icon name="home-outline" class="color-orange"></ion-icon>
                                        </div>
                                        <div class="category-list-label">
                                            <div class="category-list-title">
                                                <h5>Properties</h5>
                                            </div>
                                            <div class="category-list-after">
                                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- separator -->
                                <div class="separator-medium"></div>
                                <!-- end separator -->

                                <a href="add-ads-product-details/" data-transition="f7-dive">
                                    <div class="category-list">
                                        <div class="category-icon">
                                            <ion-icon name="tv-outline" class="color-red"></ion-icon>
                                        </div>
                                        <div class="category-list-label">
                                            <div class="category-list-title">
                                                <h5>Electronics</h5>
                                            </div>
                                            <div class="category-list-after">
                                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- separator -->
                                <div class="separator-medium"></div>
                                <!-- end separator -->

                                <a href="add-ads-product-details/" data-transition="f7-dive">
                                    <div class="category-list">
                                        <div class="category-icon">
                                            <ion-icon name="phone-portrait-outline" class="color-green"></ion-icon>
                                        </div>
                                        <div class="category-list-label">
                                            <div class="category-list-title">
                                                <h5>Handphone</h5>
                                            </div>
                                            <div class="category-list-after">
                                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- separator -->
                                <div class="separator-medium"></div>
                                <!-- end separator -->

                                <a href="add-ads-product-details/" data-transition="f7-dive">
                                    <div class="category-list">
                                        <div class="category-icon">
                                            <ion-icon name="bed-outline" class="color-brown"></ion-icon>
                                        </div>
                                        <div class="category-list-label">
                                            <div class="category-list-title">
                                                <h5>Furniture</h5>
                                            </div>
                                            <div class="category-list-after">
                                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- separator -->
                                <div class="separator-medium"></div>
                                <!-- end separator -->

                                <a href="add-ads-product-details/" data-transition="f7-dive">
                                    <div class="category-list">
                                        <div class="category-icon">
                                            <ion-icon name="briefcase-outline" class="color-blue"></ion-icon>
                                        </div>
                                        <div class="category-list-label">
                                            <div class="category-list-title">
                                                <h5>Jobs</h5>
                                            </div>
                                            <div class="category-list-after">
                                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <!-- separator -->
                        <div class="separator-large"></div>
                        <!-- end separator -->

                        <!-- ===== END TAB ADD ADS ===== -->
                    </div>

                    <div id="tab-search" class="tab tab-search">
                        <!-- ===== TAB SEARCH ===== -->

                        <!-- navbar -->
                        <div class="navbar">
                            <div class="navbar-inner sliding">
                                <div class="left"></div>
                                <div class="title">Search</div>
                                <div class="right"></div>
                                <div class="subnavbar">
                                    <form class="searchbar searchbar-init" data-search-container=".search-list"
                                        data-search-in=".item-title">
                                        <div class="searchbar-inner">
                                            <div class="searchbar-input-wrap">
                                                <input type="search" placeholder="Find Laptop, Handphone, and other">
                                                <i class="searchbar-icon"></i>
                                                <span class="input-clear-button"></span>
                                            </div>
                                            <span class="searchbar-disable-button">Cancel</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end navbar -->

                        <!-- separator -->
                        <div class="separator-large separator-top-large"></div>
                        <!-- end separator -->

                        <div class="search-action">
                            <div class="container">
                                <div class="row">
                                    <div class="col-50">
                                        <a class="sheet-open" href="#" data-sheet=".my-sheet-swipe-to-close">
                                            <div class="content">
                                                <ion-icon name="funnel-outline"></ion-icon><span>Sort</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-50">
                                        <a href="#" class="panel-open" data-panel=".sidebar-right">
                                            <div class="content">
                                                <ion-icon name="filter-outline"></ion-icon><span>Filter</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- sheet modal for sort by -->
                        <div class="sheet-modal my-sheet-swipe-to-close">
                            <div class="sheet-modal-inner">
                                <div class="block-title">
                                    <h3>Sort by: <a href="#" class="right-link sheet-close">
                                            <ion-icon name="close-circle-outline"></ion-icon>
                                        </a></h3>
                                </div>
                                <div class="list">
                                    <ul>
                                        <li>
                                            <a href="#" class="item-link item-content">
                                                <div class="item-media">
                                                    <ion-icon name="shield-checkmark-outline"></ion-icon>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">Relevance</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="item-link item-content">
                                                <div class="item-media">
                                                    <ion-icon name="calendar-outline"></ion-icon>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">Date</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="item-link item-content">
                                                <div class="item-media">
                                                    <ion-icon name="arrow-up-outline"></ion-icon>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">Price: Low to high</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="item-link item-content">
                                                <div class="item-media">
                                                    <ion-icon name="arrow-down-outline"></ion-icon>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">Price: High to low</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end sheet modal for sort by -->

                        <!-- sidebar / panel for filter -->
                        <div class="panel-backdrop"></div>
                        <div class="panel panel-right sidebar-right panel-cover panel-init">
                            <div class="block-title title-small">
                                <h3>Sort by</h3>
                            </div>
                            <form class="list">
                                <ul>
                                    <li class="item-content item-input">
                                        <div class="item-inner">
                                            <div class="item-input-wrap input-dropdown-wrap">
                                                <select>
                                                    <option value="Relevance">Relevance</option>
                                                    <option value="Date">Date</option>
                                                    <option value="Price">Price: Low to high</option>
                                                    <option value="Price">Price: High to low</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>

                            <div class="block-title title-small">
                                <h3>Ratings</h3>
                            </div>
                            <div class="rating-filter">
                                <div class="container">
                                    <ul>
                                        <li class="rating-active"><a href="#">
                                                <ion-icon name="star-sharp"></ion-icon>5
                                            </a></li>
                                        <li><a href="#">
                                                <ion-icon name="star-sharp"></ion-icon>4
                                            </a></li>
                                        <li><a href="#">
                                                <ion-icon name="star-sharp"></ion-icon>3
                                            </a></li>
                                        <li><a href="#">
                                                <ion-icon name="star-sharp"></ion-icon>2
                                            </a></li>
                                        <li><a href="#">
                                                <ion-icon name="star-sharp"></ion-icon>1
                                            </a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="block-title title-small">
                                <h3>Location</h3>
                            </div>
                            <form class="list">
                                <ul>
                                    <li class="item-content item-input">
                                        <div class="item-inner">
                                            <div class="item-input-wrap">
                                                <input type="text" placeholder="Current location">
                                                <span class="input-clear-button"></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>

                            <div class="block-title title-small">
                                <h3>Price Range</h3>
                            </div>
                            <div class="container">
                                <form class="list">
                                    <ul>
                                        <li>
                                            <div class="row">
                                                <div class="col-50">
                                                    <div class="item-content item-input">
                                                        <div class="item-inner">
                                                            <div class="item-input-wrap">
                                                                <input type="text" placeholder="Minimum">
                                                                <span class="input-clear-button"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-50">
                                                    <div class="item-content item-input">
                                                        <div class="item-inner">
                                                            <div class="item-input-wrap">
                                                                <input type="text" placeholder="Maximum">
                                                                <span class="input-clear-button"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </div>

                            <!-- separator -->
                            <div class="separator-large"></div>
                            <!-- end separator -->

                            <div class="fitler-execution">
                                <div class="container">
                                    <button class="button secondary-button panel-close">Cancel</button>
                                    <!-- separator -->
                                    <div class="separator-medium"></div>
                                    <!-- end separator -->
                                    <button class="button">Apply Filters</button>
                                </div>
                            </div>

                            <!-- separator -->
                            <div class="separator-large"></div>
                            <!-- end separator -->

                        </div>
                        <!-- end sidebar / panel for filter -->

                        <div class="searchbar-backdrop"></div>
                        <div class="searchbar-found">
                            <div class="search-by-category">
                                <div class="block-title">
                                    <h3 class="title-extra-small">By Categories <a href="#" class="right-link">Show
                                            All</a></h3>
                                </div>
                                <div class="list">
                                    <ul>
                                        <li>
                                            <a href="#" class="item-link item-content">
                                                <div class="item-media">
                                                    <ion-icon name="car-sport-outline" class="color-blue"></ion-icon>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">Cars</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="item-link item-content">
                                                <div class="item-media">
                                                    <ion-icon name="bicycle-outline" class="color-purple"></ion-icon>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">Bikes</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="item-link item-content">
                                                <div class="item-media">
                                                    <ion-icon name="home-outline" class="color-orange"></ion-icon>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">Properties</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="item-link item-content">
                                                <div class="item-media">
                                                    <ion-icon name="tv-outline" class="color-red"></ion-icon>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">Electronics</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="item-link item-content">
                                                <div class="item-media">
                                                    <ion-icon name="phone-portrait-outline" class="color-green">
                                                    </ion-icon>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">Handphone</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="popular-search">
                                <div class="block-title">
                                    <h3 class="title-extra-small">Popular Search</h3>
                                </div>
                                <div class="container">
                                    <ul>
                                        <li><a href="#"><span>electric</span></a></li>
                                        <li><a href="#"><span>manual</span></a></li>
                                        <li><a href="#"><span>minimalist</span></a></li>
                                        <li><a href="#"><span>mobile</span></a></li>
                                        <li><a href="#"><span>motor</span></a></li>
                                        <li><a href="#"><span>shop</span></a></li>
                                        <li><a href="#"><span>automatic</span></a></li>
                                        <li><a href="#"><span>spare part</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- separator -->
                        <div class="separator-large"></div>
                        <!-- end separator -->

                        <!-- ===== END TAB SEARCH ===== -->
                    </div>

                    <div id="tab-profile" class="tab tab-profile">

                        <!-- separator -->
                        <div class="separator-extra-large"></div>
                        <!-- end separator -->

                        <!-- ===== TAB PROFILE ===== -->
                        <div class="container">
                            <div class="header-profile">
                                {{-- <img src="images/avatar6.jpg" alt=""> --}}
                                <div class="title-name">
                                    <h4 class="">Philips Ramsey</h4>
                                    <p class="text-small">Member Since 2020</p>
                                </div>

                                <!-- separator -->
                                <div class="separator-medium"></div>
                                <!-- end separator -->

                                <div class="profile-statistic">
                                    <div class="row">
                                        <div class="col-33">
                                            <div class="content">
                                                <h4>1.5K</h4>
                                                <span>Followers</span>
                                            </div>
                                        </div>
                                        <div class="col-33">
                                            <span class="line-divider"></span>
                                        </div>
                                        <div class="col-33">
                                            <div class="content">
                                                <h4>80</h4>
                                                <span>Following</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- separator -->
                                <div class="separator-medium"></div>
                                <!-- end separator -->

                                <div class="contact-button">
                                    <button class="button">Contact Seller</button>
                                </div>

                                <!-- separator -->
                                <div class="separator-medium"></div>
                                <!-- end separator -->

                                <div class="profile-media">
                                    <ul>
                                        <li><a href="#" class="bg-gray">
                                                <ion-icon name="person-add-outline"></ion-icon>
                                            </a></li>
                                        <li><a href="#" class="bg-red">
                                                <ion-icon name="mail-outline"></ion-icon>
                                            </a></li>
                                        <li><a href="#" class="bg-blue">
                                                <ion-icon name="chatbox-outline"></ion-icon>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="list">
                            <ul>
                                <li>
                                    <a href="my-ads/" data-transition="f7-dive" class="item-link item-content">
                                        <div class="item-media">
                                            <ion-icon name="duplicate-outline" class="color-blue"></ion-icon>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">My Ads</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="favorites/" data-transition="f7-dive" class="item-link item-content">
                                        <div class="item-media">
                                            <ion-icon name="heart-outline" class="color-purple"></ion-icon>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Favorites</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat/" data-transition="f7-dive" class="item-link item-content">
                                        <div class="item-media">
                                            <ion-icon name="chatbox-outline" class="color-orange"></ion-icon>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Chat</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="notifications/" data-transition="f7-dive" class="item-link item-content">
                                        <div class="item-media">
                                            <ion-icon name="notifications-outline" class="color-red"></ion-icon>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Notification</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="settings/" data-transition="f7-dive" class="item-link item-content">
                                        <div class="item-media">
                                            <ion-icon name="settings-outline" class="color-green"></ion-icon>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Settings</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="item-link item-content">
                                        <div class="item-media">
                                            <ion-icon name="log-out-outline" class="color-red"></ion-icon>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Logout</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- ===== END TAB PROFILE ===== -->
                    </div>
                </div>

            </div>
        </div>

    </div>

    @include('layouts.script')

</body>

</html>
