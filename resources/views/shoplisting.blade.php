<!doctype html>
<html lang="en">
    
    
    <body class="shop-listing-page">
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
                                <li><a class="dropdown-item active" href="shop-listing.html">Shop Listing</a></li>

                                <li><a class="dropdown-item" href="shop-detail.html">Shop Detail</a></li>
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
                            <h1 class="text-white">Shop Listing</h1>
                        </div>

                    </div>
                </div>
            </header>

            <section class="shop-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-5 col-12 me-auto mb-5">
                            <form class="custom-form filter-form" action="#" method="get" role="form">
                                <div class="">
                                    <h6 class="filter-form-small-title">Product</h6>

                                    <select name="looking-for" class="form-select form-control" id="looking-for" aria-label="Default select example">
                                        <option value="0" selected>What you looking for?</option>
                                        <option value="1">Bathroom</option>
                                        <option value="2">Dining</option>
                                        <option value="3">Living Room</option>
                                        <option value="4">Children Bedroom</option>
                                        <option value="5">Kitchen</option>
                                    </select>
                                </div>

                                <div class="mt-4">
                                    <h6 class="filter-form-small-title">Price range</h6>

                                    <div class="form-check">
                                        <input name="price-range[]" type="checkbox" class="form-check-input" id="PriceCheckOne" value="500" checked>
                                        
                                        <label class="form-check-label" for="PriceCheckOne">below $1,000</label>
                                    </div>

                                    <div class="form-check">
                                        <input name="price-range[]" type="checkbox" class="form-check-input" id="PriceCheckTwo" value="1000">
                                        
                                        <label class="form-check-label" for="PriceCheckTwo">$1,000 - $4,900</label>
                                    </div>
                                    
                                    <div class="form-check">
                                        <input name="price-range[]" type="checkbox" class="form-check-input" id="PriceCheckTwo" value="5000">
                                        
                                        <label class="form-check-label" for="PriceCheckTwo">$5,000 - $9,900</label>
                                    </div>

                                    <div class="form-check">
                                        <input name="price-range[]" type="checkbox" class="form-check-input" id="PriceCheckThree" value="10000">
                                        
                                        <label class="form-check-label" for="PriceCheckThree">$10,000 - $30,000</label>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h6 class="filter-form-small-title">Condition</h6>

                                    <div class="form-check">
                                        <input name="condition[]" type="checkbox" class="form-check-input" id="ConditionCheckOne" value="all" checked>
                                        
                                        <label class="form-check-label" for="ConditionCheckOne">All</label>
                                    </div>

                                    <div class="form-check">
                                        <input name="condition[]" type="checkbox" class="form-check-input" id="ConditionCheckTwo" value="excellent">
                                        
                                        <label class="form-check-label" for="ConditionCheckTwo">Excellent</label>
                                    </div>

                                    <div class="form-check">
                                        <input name="condition[]" type="checkbox" class="form-check-input" id="ConditionCheckThree" value="better">
                                        
                                        <label class="form-check-label" for="ConditionCheckThree">Better</label>
                                    </div>

                                    <div class="form-check">
                                        <input name="condition[]" type="checkbox" class="form-check-input" id="ConditionCheckFour" value="good">
                                        
                                        <label class="form-check-label" for="ConditionCheckFour">Good</label>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h6 class="filter-form-small-title">Type</h6>

                                    <div class="form-check">
                                        <input name="condition[]" type="checkbox" class="form-check-input" id="TypeCheckOne" value="" checked>
                                        
                                        <label class="form-check-label" for="TypeCheckOne">Single</label>
                                    </div>

                                    <div class="form-check">
                                        <input name="condition[]" type="checkbox" class="form-check-input" id="TypeCheckTwo" value="">
                                        
                                        <label class="form-check-label" for="TypeCheckTwo">Family</label>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="form-control">Apple Filters</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-7 col-md-6 col-12">
                            <h2>Products</h2>

                            <p class="mb-5"><strong>3,648 items</strong> are currently available</p>

                            <div class="row">

                                <div class="col-lg-6 col-12">
                                    <div class="shop-thumb">
                                        <div class="shop-image-wrap">
                                            <a href="shop-detail.html">
                                                <img src="{{asset('assets/images/shop/minimal-bathroom-interior-design-with-wooden-furniture.jpg')}}" class="shop-image img-fluid" alt="">
                                            </a>

                                            <div class="shop-icons-wrap">
                                                <div class="shop-icons d-flex flex-column align-items-center">
                                                    <a href="#" class="shop-icon bi-heart"></a>

                                                    <a href="#" class="shop-icon bi-bookmark"></a>
                                                </div>

                                                <p class="shop-pricing mb-0 mt-3">
                                                    <span class="badge custom-badge">$8,200</span>
                                                </p>
                                            </div>

                                            <div class="shop-btn-wrap">
                                                <a href="shop-detail.html" class="shop-btn custom-btn btn d-flex align-items-center align-items-center">Learn more</a>
                                            </div>
                                        </div>

                                        <div class="shop-body">
                                            <h4>Bathroom</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="shop-thumb">
                                        <div class="shop-image-wrap">
                                            <a href="shop-detail.html">
                                                <img src="{{asset('assets/images/shop/mock-up-poster-modern-dining-room-interior-design-with-white-empty-wall.jpg')}}" class="shop-image img-fluid" alt="">
                                            </a>

                                            <div class="shop-icons-wrap">
                                                <div class="shop-icons d-flex flex-column align-items-center">
                                                    <a href="#" class="shop-icon bi-heart"></a>

                                                    <a href="#" class="shop-icon bi-bookmark"></a>
                                                </div>

                                                <p class="shop-pricing mb-0 mt-3">
                                                    <span class="badge custom-badge">$4,800</span>
                                                </p>
                                            </div>

                                            <div class="shop-btn-wrap">
                                                <a href="shop-detail.html" class="shop-btn custom-btn btn d-flex align-items-center align-items-center">Learn more</a>
                                            </div>
                                        </div>

                                        <div class="shop-body">
                                            <h4>Dining</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="shop-thumb">
                                        <div class="shop-image-wrap">
                                            <a href="shop-detail.html">
                                                <img src="{{asset('assets/images/shop/green-sofa-white-living-room-with-blank-table-mockup.jpg')}}" class="shop-image img-fluid" alt="">
                                            </a>

                                            <div class="shop-icons-wrap">
                                                <div class="shop-icons d-flex flex-column align-items-center">
                                                    <a href="#" class="shop-icon bi-heart"></a>

                                                    <a href="#" class="shop-icon bi-bookmark"></a>
                                                </div>

                                                <p class="shop-pricing mb-0 mt-3">
                                                    <span class="badge custom-badge">$2,400</span>
                                                </p>
                                            </div>

                                            <div class="shop-btn-wrap">
                                                <a href="shop-detail.html" class="shop-btn custom-btn btn d-flex align-items-center align-items-center">Learn more</a>
                                            </div>
                                        </div>

                                        <div class="shop-body">
                                            <h4>Living Room</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="shop-thumb">
                                        <div class="shop-image-wrap">
                                            <a href="shop-detail.html">
                                                <img src="{{asset('assets/images/shop/concept-home-cooking-with-female-chef.jpg')}}" class="shop-image img-fluid" alt="">
                                            </a>

                                            <div class="shop-icons-wrap">
                                                <div class="shop-icons d-flex flex-column align-items-center">
                                                    <a href="#" class="shop-icon bi-heart"></a>

                                                    <a href="#" class="shop-icon bi-bookmark"></a>
                                                </div>

                                                <p class="shop-pricing mb-0 mt-3">
                                                    <span class="badge custom-badge">$6,500</span>
                                                </p>
                                            </div>

                                            <div class="shop-btn-wrap">
                                                <a href="shop-detail.html" class="shop-btn custom-btn btn d-flex align-items-center align-items-center">Learn more</a>
                                            </div>
                                        </div>

                                        <div class="shop-body">
                                            <h4>Chef Kitchen</h4>
                                        </div>
                                    </div>
                                </div>

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>

                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>

                                        <li class="page-item">
                                            <a class="page-link" href="#">4</a>
                                        </li>

                                        <li class="page-item">
                                            <a class="page-link" href="#">5</a>
                                        </li>
                                        
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
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
