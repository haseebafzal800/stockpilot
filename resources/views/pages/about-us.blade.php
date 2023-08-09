@extends('layouts.default')
@section('content')
<div id="wrapper about-us-page" class="about-us-page">
        <!-- <header id="header" class="mb-3">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <a class="menu-btn d-lg-none" href="#"><img src="images/menu.png"></a>
                    <div class="logo">
                        <a href="#"><img src="images/logo.png" alt="logo" class="img-fluid"></a>
                    </div>
                    <nav id="nav">
                        <a class="menu-btn d-lg-none" href="#"><img src="images/menu.png"></a>
                        <ul class="list-unstyled d-lg-flex m-0 p-0">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About</a></li>
                            <li><a href="partners-page.html">Services</a></li>
                            <li><a href="product.html">Portfolio</a></li>
                            <li><a href="blog-page.html">Blog</a></li>
                            <li><a href="contact-us.html">Support</a></li>
                        </ul>
                    </nav>
                    <div class="mobile-icon d-lg-none">
                        <a href="#"><img src="images/header-icon.png"></a>
                    </div>
                    <div class="header-right d-none d-lg-block">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                              <button class="btn btn-secondary dropdown-toggle bg-transparent border-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i> EN <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                            </div>
                            <a class="btn custom-btn" href="#">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </header> -->
        @include('includes.header')

        <div class="about-us-section-banner">

            <div class="container py-lg-5 mb-5">
                <div class="about-us-wraper mb-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="about-us-text text-center text-md-start">
                                <h2>We’re on a mission to make work happier by enabling better relationships at scale</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-us-pilot-growing mb-5 py-lg-5">
                <div class="container">
                    <div class="row flex-column-reverse flex-md-row align-items-center">
                        <div class="col-12 col-md-6 col-lg-6 ">
                            <div class="about-us-content text-center text-md-start">
                                <h2>How Pilot is growing</h2>
                                <p>Home is where our story begins. Drawing inspiration from neighborhoods around the world, we have arranged a unique collection of the finest clothing on the block. Take pride in your birthplace, commemorate a trip or show much-deserved appreciation for your home away from home in communicative clothing that always hits the mark. Indulge your cititude in creative selections inspired by the urban communities you cherish.</p>
                                 <h2>Our vision: Make work happie</h2>
                                <p>Home is where our story begins. Drawing inspiration from neighborhoods around the world, we have arranged a unique collection of the finest clothing on the block. Take pride in your birthplace, commemorate a trip or show much-deserved appreciation for your home away from home in communicative clothing that always hits the mark. Indulge your cititude in creative selections inspired by the urban communities you cherish.</p>
                            </div>
                        </div> 
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="about-us-image mb-5">
                                <div class="about-us-image-section">
                                    <img src="images/man-using-digital-tablet-psd-mockup-smart-technology 1.png" alt="image" class="img-fluid mb-3 mb-md-4">
                                </div>
                                <strong><span class="quetion">“</span>I founded Front to break a law of nature.<span class="quetion">“</span></strong>
                                <p>Mathilde Collin, CEO of Front</p>
                                <a class="custom-text-about" href="#">Read thoughts on twitter</a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>

            <div class="stock-piolt-glance-section mb-5 px-lg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center overflow-hidden mb-5">
                                <h2>Stock Pilot at Glance</h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="slider feature-slider text-center stock-piolt-glance">
                                <div class="box mb-3">
                                    <div class="box-heading">
                                        <h3>4</h3>
                                    </div>
                                    <p>offices in San Francisco, Chicago, Paris, and Dublin</p>
                                </div>
                                <div class="box mb-3">
                                    <div class="box-heading-2">
                                        <h3>450</h3>
                                    </div>
                                    <p>offices in San Francisco, Chicago, Paris, and Dublin</p>
                                </div>
                                <div class="box mb-3">
                                    <div class="box-heading-3">
                                        <h3>100%</h3>
                                    </div>
                                    <p>offices in San Francisco, Chicago, Paris, and Dublin</p>
                                </div>
                                <div class="box mb-3">
                                    <div class="box-heading-2">
                                        <h3>$204M</h3>
                                    </div>
                                    <p>offices in San Francisco, Chicago, Paris, and Dublin</p>
                                </div>
                                <div class="box mb-3">
                                    <div class="box-heading-4">
                                        <h3>8000</h3>
                                    </div>
                                    <p>offices in San Francisco, Chicago, Paris, and Dublin</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="feature-section leaders-founder-main mb-5 py-lg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center overflow-hidden mb-5">
                                <h2>Leaders And Founders</h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="slider feature-slider text-center leaders-founder">
                                <div class="box mb-3 text-center">
                                    <div class="icon mb-3">
                                        <img src="images/Avatar.png" class="mx-auto d-block img-fluid">
                                    </div>
                                    <strong>Spencer Padway</strong>
                                    <p>Co Founder, CEO</p>
                                </div>
                                <div class="box mb-3 text-center">
                                    <div class="icon mb-3">
                                        <img src="images/Avatar(4).png" class="mx-auto d-block img-fluid">
                                    </div>
                                    <strong>Spencer Padway</strong>
                                    <p>Co Founder, CEO</p>
                                </div>
                                <div class="box mb-3 text-center">
                                    <div class="icon mb-3">
                                        <img src="images/Avatar(3).png" class="mx-auto d-block img-fluid">
                                    </div>
                                    <strong>Spencer Padway</strong>
                                    <p>Co Founder, CEO</p>
                                </div>
                                <div class="box mb-3 text-center">
                                    <div class="icon mb-3">
                                        <img src="images/Avatar(2).png" class="mx-auto d-block img-fluid">
                                    </div>
                                    <strong>Spencer Padway</strong>
                                    <p>Co Founder, CEO</p>
                                </div>
                                <div class="box mb-3 text-center">
                                    <div class="icon mb-3">
                                        <img src="images/Avatar(1).png" class="mx-auto d-block img-fluid">
                                    </div>
                                    <strong>Spencer Padway</strong>
                                    <p>Co Founder, CEO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature-section feature-section-press mb-3 press-section-main">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center overflow-hidden mb-3">
                                <h2>In the Press</h2>
                            </div>    
                        </div>
                        <div class="col-12">
                            <div class="slider feature-slider text-center press-section">
                                <div class="box mb-3 text-center text-md-start">
                                    <div class="icon mb-3">
                                        <img src="images/Rectangle 514.png" class="mx-auto d-block img-fluid">
                                    </div>
                                    <p>Nik Halik, The Thrillionaire® Entrepreneurial Alchemist, Civilian Astronaut, Extreme Adventurer!</p>
                                </div>
                                <div class="box mb-3 text-center text-md-start">
                                    <div class="icon mb-3">
                                        <img src="images/Rectangle 515.png" class="mx-auto d-block img-fluid">
                                    </div>
                                    <p>David Sinigaglia, Executive Mentor, shares his experience with Scott Letourneau and NCP</p>
                                </div>
                                <div class="box mb-3 text-center text-md-start">
                                    <div class="icon mb-3">
                                        <img src="images/Rectangle 517.png" class="mx-auto d-block img-fluid">
                                    </div>
                                    <p>Chris Freville from the U.K. shares his experience with forming a U.S. company with Scott Letourneau!</p>
                                </div>
                                <div class="box mb-3 text-center text-md-start">
                                    <div class="icon mb-3">
                                        <img src="images/Rectangle 516.png" class="mx-auto d-block img-fluid">
                                    </div>
                                    <p>Rachel Quilty, from Australia, shares her experience with forming her U.S. company with Scott Letourneau and NCP</p>
                                </div>
                                <div class="box mb-3 text-center text-md-start">
                                    <div class="icon mb-3">
                                        <img src="images/Rectangle 518.png" class="mx-auto d-block img-fluid">
                                    </div>
                                    <p>Chris Freville from the U.K. shares his experience with forming a U.S. company with Scott Letourneau!</p>
                                </div>
                                <div class="box mb-3 text-center text-md-start">
                                    <div class="icon mb-3">
                                        <img src="images/Rectangle 519.png" class="mx-auto d-block img-fluid">
                                    </div>
                                    <p>Chris Freville from the U.K. shares his experience with forming a U.S. company with Scott Letourneau!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			@include('includes.testimonials')
        </div>

        @include('includes.newsletter')
        @include('includes.footer')

    </div>
    @stop