@extends('layouts.default')
@section('content')
<div class="product-page" id="product-page wrapper">
@include('includes.header')
<div class="product-banner mb-5 py-lg-5 position-relative">
            <div class="container">
                <div class="banner-container">
                    <div class="row">
                        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                            <h1 class="w-50 product-heading text-center mb-4 mb-md-5 pb-md-4 position-relative">Diversify with Alternative Investment Strategies</h1>
                            <p class="w-50 text-center mb-5"> Subscribe to actively managed trading strategies that are not typically offered by traditional financial institutions.</p>
                        </div>
                        <div class="col-12 col-md-6 mb-5 text-center text-md-end">
                            <a class="btn custom-btn">Find a Strategy</a>
                        </div>
                        <div class="col-12 col-md-6 text-center text-md-start">
                            <a class="btn custom-btn bg-transparent">Listing your strategy <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                              </svg> 
                            </a>
                        </div>
                        <div class="col-12 py-5">
                            <div class="slider-container slider slider-product-banner position-relative">
                                <div class="img-card">
                                    <img src="images/product-banner-vector1.png" alt="vector" class="img-fluid mx-auto d-block"/>
                                </div>
                                <div class="img-card">
                                    <img src="images/product-banner-vector-2.png" alt="vector" class="img-fluid mx-auto d-block"/>
                                </div>
                                <div class="img-card">
                                    <img src="images/product-banner-vector-3.png" alt="vector" class="img-fluid mx-auto d-block"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="why-pilot mb-5 py-lg-5">
            <div class="container">
                <div class="why-pilot-container">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-5 d-flex flex-column justify-content-center align-items-center text-center text-lg-start align-items-md-start">
                            <h2>Why Stock Pilot?</h2>
                            <p>We believe adding an alternative investment strategy to your portfolio can benefit you in many ways.</p>
                            <a class="btn custom-btn w-50"> Want to hear more?</a>
                        </div>
                        <div class="col-12 col-md-6 mb-5">
                            <div class="slider slider-why-pilot card-container d-flex flex-row flex-wrap gap-4 justify-content-center">
                                <div class="card card-1">
                                    <div class="img-card"><img src="images/pilot-card-vector.png" alt="card-vector" class="img-fluid mx-auto d-block"/></div>
                                    <h4>Diverse</h4>
                                    <p>Subscription access to active equity and options trading strategies that are not typically offered by traditional financial
                                        institutions.
                                    </p>
                                </div>
                                <div class="card card-2">
                                    <div class="img-card"><img src="images/pilot-card-vector.png" alt="card-vector" class="img-fluid mx-auto d-block"/></div>
                                    <h4>Simple</h4>
                                    <p>It is easier than ever to connect your personal accounts and begin auto-trading.
                                    </p>
                                </div>
                                <div class="card card-3">
                                    <div class="img-card"><img src="images/pilot-card-vector.png" alt="card-vector" class="img-fluid mx-auto d-block"/></div>
                                    <h4>Social</h4>
                                    <p>Collaborate with and learn from other investors via Discord and Telegram communities.
                                    </p>
                                </div>
                                <div class="card card-4">
                                    <div class="img-card"><img src="images/pilot-card-vector.png" alt="card-vector" class="img-fluid mx-auto d-block"/></div>
                                    <h4> Ranked</h4>
                                    <p>Strategy performance is tracked and considered ranked, ensuring only the highest quality of traders.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="subscriber-features-section platform-section  mb-5 py-lg-5">
            <div class="container">
                <div class="subscriber-features-container">
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                            <h2> Platform Features</h2>
                            <p>
                                We provide a variety of features for Pilots and Subscribers to help make your auto-trading experience easy and enjoyable
                            </p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12 col-md-6 ">
                            <div class="d-none d-md-block how-it-work-img">
                                <img src="images/pllatform-section-pilot.png" alt="image" class="img-fluid mx-auto d-block"/>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5">
                            <h3>Strategies</h3>
                            <div class="d-flex justify-content-start">
                                <p class="w-7">
                                    The performance of all strategies offered on the platform is tracked by our Pilot Analytics and Platform Ranking systems. These
                                    systems are loosely based on the Global Investment Performance Standards ( GIPS ), a voluntary set of rules used to compare investment
                                    performance around the world.
                                </p>    
                            </div>
                            <div class="d-block d-md-none how-it-work-img mb-4">
                                <img src="images/pllatform-section-pilot.png" alt="image" class="img-fluid mx-auto d-block"/>
                            </div>
                            <div>
                                <a href="#">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                  </svg> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pilot-experience mb-5 py-lg-5">
            <div class="container">
                <div class="pilot-experience-container">
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                            <h2 >Pilot Experience</h2>
                            <h3 >Tools and Features</h3>
                            <p> Pilots are provided dashboards to input trading strategies, notify subscribers of events, and manage member subscriptions.</p>
                        </div>
                        <div class="col-12 col-md-8 d-none d-md-block">
                            <div class="pilot-experience-img">
                                <img src="images/pilot-experience-vector.png" alt="pilot-vector" class="img-fluid mx-auto d-block"/>
                            </div>
                            <div class="pilot-experience-img">
                                <img src="images/iPad-pilot-experience-vector.png" alt="pilot-vector" class="img-fluid mx-auto d-block"/>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="text-container c-card c-card1 position-relative d-none d-md-block">
                                <span> All-in-one Dashboard</span>
                                <p>Trades, positions, orders, alerts, subscriptions, all across multiple strategies, all in one place.</p>
                            </div>
                            <div class="pilot-experience-img1">
                                <img src="images/side-vector-pilot-experience.png" alt="pilot-vector" class="img-fluid mx-auto d-block"/>
                            </div>
                            <div class="text-container d-flex c-card-before justify-content-end pt-5 mt-md-5">
                                <p class="c-card c-card2 position-relative">Orders placed on the platform will automatically notify subscribers of the action on their accounts, and Pilots are able to input
                                    custom messages to share anecdotal remarks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="strategy-ranked fund-style mb-5 py-lg-5">
            <div class="container">
                <div class="ranked-container">
                    <div class="row py-5 justify-content-center">
                        <div class="col-12 col-md-10 text-center d-flex gap-4 flex-column align-items-center">
                            <h2>Create your own hedge fund style community!</h2>
                            <p>Combine the powers of auto-trading with social collaboration to form an online community that benefits the common investor while
                                allowing you to monetize from your trading skills</p>
                            <a class="btn custom-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="subscriber-experience mb-5 py-lg-5">
            <div class="container">
                <div class="subscriber-experience-container">
                    <div class="row">
                        <div class="col-12 mb-5 text-center">
                            <h2>Subscriber Experience</h2>
                            <p>You are provided with all the tools needed for a safe, simple, and promising auto-trading experience.</p>
                        </div>
                        <div class="d-none d-xl-block col-12 mt-5 mb-5  position-relative">
                            <div class="subscriber-img">
                                <img src="images/subscriber-experience.png" alt="vector" class="img-fluid mx-auto d-block"/>
                            </div>
                            <div class="container1  d-flex flex-column align-items-center p">
                                <p>Reliably Ranked Strategies</p>
                                <div class="img-container1">
                                    <img src="images/subscriber-pilot-vector.png" alt="image" class="img-fluid mx-auto d-block"/>
                                </div>
                            </div>
                            <div class="container2  d-flex flex-column align-items-center p">
                                <p>View Positions and Orders</p>
                                <div class="img-container2">
                                    <img src="images/subscriber-pilot-vector.png" alt="image" class="img-fluid mx-auto d-block"/>
                                </div>
                            </div>
                            <div class="container3  d-flex flex-column align-items-center p">
                                <div class="img-container3">
                                    <img src="images/subscriber-pilot-vector.png" alt="image" class="img-fluid mx-auto d-block"/>
                                </div>
                                <p>Position Sizing</p>
                            </div>
                            <div class="container4  d-flex flex-column align-items-center p">
                                <div class="img-container4">
                                    <img src="images/subscriber-pilot-vector.png" alt="image" class="img-fluid mx-auto d-block"/>
                                </div>
                                <p> SMS Notifications & Confirmations</p>
                            </div>
                        </div>
                        <div class="d-block subscriber-experience-slider d-xl-none col-12 mb-5">
                            <div>
                                <img src="images/iMac.png" alt="iMac" class="img-fluid mx-auto d-block"/>
                            </div>
                            <div>
                                <img src="images/iPad.png" alt="iMac" class="img-fluid mx-auto d-block"/>
                            </div>
                            <div>
                                <img src="images/Macbook.png" alt="iMac" class="img-fluid mx-auto d-block"/>
                            </div>
                            <div>
                                <img src="images/iPhone.png" alt="iMac" class="img-fluid mx-auto d-block"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="strategy-ranked subscribers-learn mb-5 py-lg-5">
            <div class="container">
                <div class="ranked-container">
                    <div class="row py-5 justify-content-center">
                        <div class="col-12 col-md-10 text-center d-flex gap-4 flex-column align-items-center">
                            <h2>Subscribers <br> Want to learn more?</h2>
                            <p>Check out some more benefits and learn how to subscribe.</p>
                            <a class="btn custom-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="browse-our-section alternate-investment mb-5 py-lg-5">
            <div class="container">
                <div class="browse-our-container">
                    <div class="row">
                        <div class="col-12 col-md-6 text-center text-md-start d-flex flex-column justify-content-center">
                            <h3>Find an Alternative Investment Strategy Today!</h3>
                            <div class="d-flex justify-content-start center">
                                <p class="w-7">
                                    Learn more about how strategies are ranked and how to subscribe through our third party partners' websites.
                                </p>    
                            </div>
                            <div class="d-block d-md-none how-it-work-img mb-5">
                                <img src="images/product-page-alternate-investment.png" alt="image" class="img-fluid mx-auto d-block"/>
                            </div>
                            <div>
                                <a class="btn custom-btn" href="#">Learn More</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 ">
                            <div class="d-none d-md-block how-it-work-img">
                                <img src="images/product-page-alternate-investment.png" alt="image" class="img-fluid mx-auto d-block"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hear-more-section mb-5">
            <div class="hear-more-container">
                <div class="row">
                    <div class="col-12 col-md-6 ">
                        <div class="d-none d-md-block how-it-work-img">
                            <img src="images/hearmore.png" alt="image" class="img-fluid mx-auto d-block"/>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-center text-md-start d-flex flex-column justify-content-center">
                        <h3 class="py-4">Hear what our users are saying</h3>
                        <div class="d-flex justify-content-start center">
                            <p class="w-7">
                                Check out this video to hear case studies from our real users and their Stock Pilot experience
                            </p>    
                        </div>
                        <div class="d-block d-md-none how-it-work-img mb-5">
                            <img src="images/hearmore.png" alt="image" class="img-fluid mx-auto d-block"/>
                        </div>
                        <div>
                            <a class="btn custom-btn" href="#">Download Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('includes.testimonials')
        @include('includes.newsletter')
        @include('includes.footer')
    </div>
    @stop