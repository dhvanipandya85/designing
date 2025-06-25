<!doctype html>

    
    <body class="shop-detail-page">
        
@extends('layouts.main')
        @section('main.container')

        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">Moso <span class="tooplate-red">Inter</span><span class="tooplate-green">ior</span></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.html#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.html#section_2">About</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle click-scroll" href="index.html#section_3" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="shop-listing.html">Shop Listing</a></li>

                                <li><a class="dropdown-item active" href="shop-detail.html">Shop Detail</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.html#section_4">Reviews</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.html#section_5">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>

            <header class="site-header d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h1 class="text-white">Product Detail</h1>
                        </div>

                    </div>
                </div>
            </header>

            <section class="shop-detail-bar section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-md-8 col-12 d-flex">
                            <p class="shop-detail-bar-wrap d-flex flex-wrap mb-0">
                                <span class="me-2">Price:</span>

                                <strong class="shop-pricing-text">$4,500</strong>
                            </p>

                            <p class="shop-detail-bar-wrap d-flex flex-wrap ms-lg-5 ms-4 mb-0">
                                <span class="me-2">Condition:</span>

                                <strong class="shop-condition-text">Good</strong>
                            </p>

                            <p class="shop-detail-bar-wrap d-flex flex-wrap ms-lg-5 ms-4 mb-0">
                                <span class="me-2">Type:</span>

                                <strong>Family</strong>
                            </p>
                        </div>

                        <div class="col-lg-5 col-md-4 col-12 social-share d-flex align-items-center ms-lg-auto mt-3 mt-lg-0 mt-md-0">
                            <p class="mb-0 me-3 ms-lg-auto ms-md-auto">Share:</p>

                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link social-icon-twitter bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link social-icon-facebook bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link social-icon-pinterest bi-pinterest"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="shop-detail-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="custom-block shop-detail-custom-block">
                                <h3 class="mb-3">Introduction to a Dining Room</h3>

                                <p>Moso Interior is a free Bootstrap 5 HTML CSS template for your website. You are free to use this template for your commercial websites.</p>

                                <p>Tooplate is one of the best websites to download 100% free HTML Templates for web designers and developers around the world. Thank you for visiting.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="shop-image-wrap">
                                <img src="{{asset('assets/images/shop/mock-up-poster-modern-dining-room-interior-design-with-white-empty-wall.jpg')}}" class="shop-image img-fluid" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="shop-detail-section section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="shop-image-wrap">
                                <img src="{{asset('assets/images/shop/minimal-bathroom-interior-design-with-wooden-furniture.jpg')}}" class="shop-image img-fluid" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="custom-block shop-detail-custom-block">
                                <h3 class="mb-3">Online Interior Design</h3>

                                <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito adipcingi elit, sed do eismuod larehai med.</p>

                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="shop-detail-section section-padding pb-0">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-12">
                            <div class="shop-thumb">
                                <div class="shop-image-wrap">
                                    <img src="{{asset('assets/images/shop/green-sofa-white-living-room-with-blank-table-mockup.jpg')}}" class="shop-image img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="shop-thumb">
                                <div class="shop-image-wrap">
                                    <img src="{{asset('assets/images/shop/concept-home-cooking-with-female-chef.jpg')}}" class="shop-image img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="shop-thumb">
                                <div class="shop-image-wrap">
                                    <img src="{{asset('assets/images/shop/childrens-bed-nursery-cot-velvet-childrens-room.jpg')}}" class="shop-image img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#36363e" fill-opacity="1" d="M0,96L40,117.3C80,139,160,181,240,186.7C320,192,400,160,480,149.3C560,139,640,149,720,176C800,203,880,245,960,250.7C1040,256,1120,224,1200,229.3C1280,235,1360,277,1400,298.7L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>

        </main>

        

       @endsection
        

    </body>
</html>
