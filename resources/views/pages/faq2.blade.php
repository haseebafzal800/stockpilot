@extends('layouts.default')
@section('content')
<div class="FAQ-page" id="FAQ-page wrapper">
@include('includes.header')
<div class="faq-banner mb-5 py-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <h1 class="text-center text-md-start">Frequently Asked Questions</h1>
                        <p class="text-center text-md-start position-relative">Learn more about how we've helped clients hit or exceed their goals</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="faq-section mb-5 py-lg-5">
            <div class="container">   
                <div class="row">
                    <div class="col-12 col-lg-3 left-bar d-flex flex-column">
                        <button class="tablinks text-start border-0 bg-transparent px-0 accordion" onclick="openTab(event, 'Pilots') , openAccordian(event , 'Pilots')">Pilots</button>
                            <div id="PilotsAccordian" class="Accordiancontent py-4">
                                <ul>
                                    <li>Trials</li>
                                    <li>Demos</li>
                                    <li>Customer Products</li>
                                    <li>Account management</li>
                                </ul>  
                            </div>
                        <button class="tablinks text-start border-0 bg-transparent pt-4 px-0" onclick="openTab(event, 'Subscriber') , openAccordian(event, 'Subscriber')">Subscriber</button>
                            <div id="SubscriberAccordian" class="Accordiancontent py-4" style="display: none;">
                            <ul>
                                <li>Trials</li>
                                <li>Pricing and discounts</li>
                                <li>Ordering</li>
                                <li>Payments and refunds</li>
                                <li>Registeration</li>
                                <li>Subscription</li>
                                <li>Pricing</li>
                                <li>how to buy?</li>
                            </ul>
                            </div>
                        <button class="tablinks text-start border-0 bg-transparent pt-4 px-0" onclick="openTab(event, 'Strategies') , openAccordian(event, 'Strategies')">Strategies</button>
                            <div id="StrategiesAccordian" class="Accordiancontent py-4" style="display: none;">
                                <p class="text-light text-start">loren iosn adc us usdbic </p>
                            </div>
                        <button class="tablinks text-start border-0 bg-transparent pt-4 px-0" onclick="openTab(event, 'Help') , openAccordian(event, 'Help')">Help</button>
                            <div id="HelpAccordian" class="Accordiancontent py-4" style="display: none;">
                                <p class="text-light text-start">loren iosn adc us usdbic </p>
                            </div>
                        <button class="tablinks text-start border-0 bg-transparent pt-4 px-0" onclick="openTab(event, 'Support') , openAccordian(event, 'Support')">Support</button>
                            <div id="SupportAccordian" class="Accordiancontent py-4" style="display: none;">
                                <p class="text-light text-start">loren iosn adc us usdbic </p>
                            </div>
                        <button class="tablinks text-start border-0 bg-transparent pt-4 px-0" onclick="openTab(event, 'Pricing') , openAccordian(event, 'Pricing')">Pricing</button>
                            <div id="PricingAccordian" class="Accordiancontent py-4" style="display: none;">
                                <p class="text-light text-start">loren iosn adc us usdbic </p>
                            </div>
                        
                    </div>
                    <div class="col-12 col-lg-9 right-bar">
                        
                        <div id="Pilots" class="tabcontent">
                             <h2 class="d-none d-md-block pb-4">Pilots</h2>
                            <div class="trials-accordian mb-4 py-lg-2">
                                <h3>Trials</h3>
                                <div class="accordion" id="accordionExample2">
                                    <div class="accordion-item bg-transparent mb-4">
                                        <div class="accordion-header bg-transparent" id="RheadingOne">
                                            <button class="accordion-button p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#RcollapseOne" aria-expanded="true" aria-controls="RcollapseOne">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-12">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">How to Register?</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="RcollapseOne" class="accordion-collapse collapse show border-top" aria-labelledby="RheadingOne" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <p>
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bg-transparent mb-4">
                                        <div class="accordion-header bg-transparent" id="RheadingTwo">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#RcollapseTwo" aria-expanded="false" aria-controls="RcollapseTwo">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">What is Pilot?</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="RcollapseTwo" class="accordion-collapse collapse border-top" aria-labelledby="RheadingTwo" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bg-transparent mb-4">
                                        <div class="accordion-header bg-transparent" id="RheadingThree">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#RcollapseThree" aria-expanded="false" aria-controls="RcollapseThree">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">How to manage></h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="RcollapseThree" class="accordion-collapse collapse border-top" aria-labelledby="RheadingThree" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <p class="text-light text-start">
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bg-transparent mb-4">
                                        <div class="accordion-header bg-transparent" id="Rheadingfour">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#Rcollapsefour" aria-expanded="false" aria-controls="Rcollapsefour">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">How to Register?</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="Rcollapsefour" class="accordion-collapse collapse border-top" aria-labelledby="Rheadingfour" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <p class="text-light text-start">
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bg-transparent mb-4">
                                        <div class="accordion-header bg-transparent" id="Rheadingfive">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#Rcollapsefive" aria-expanded="false" aria-controls="Rcollapsefive">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">What is Pilot?</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="Rcollapsefive" class="accordion-collapse collapse border-top" aria-labelledby="Rheadingfive" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <p class="text-light text-start">
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bg-transparent mb-4">
                                        <div class="accordion-header bg-transparent" id="Rheadingsix">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#Rcollapsesix" aria-expanded="false" aria-controls="Rcollapsesix">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">How to manage></h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="Rcollapsesix" class="accordion-collapse collapse border-top" aria-labelledby="Rheadingsix" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <p class="text-light text-start">
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Demo mb-4 py-lg-2">
                                <h3>Demo</h3>
                                <div class="accordion" id="accordionExample4">
                                    <div class="accordion-item bg-transparent mb-4">
                                        <div class="accordion-header bg-transparent" id="DemoheadingOne">
                                            <button class="accordion-button p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#DemocollapseOne" aria-expanded="true" aria-controls="DemocollapseOne">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-12">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="DemocollapseOne" class="accordion-collapse collapse show border-top" aria-labelledby="DemoheadingOne" data-bs-parent="#accordionExample4">
                                            <div class="accordion-body">
                                                <p>
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bg-transparent mb-4">
                                        <div class="accordion-header bg-transparent" id="DemoheadingTwo">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#DemocollapseTwo" aria-expanded="false" aria-controls="DemocollapseTwo">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="DemocollapseTwo" class="accordion-collapse collapse border-top" aria-labelledby="DemoheadingTwo" data-bs-parent="#accordionExample4">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bg-transparent mb-4">
                                        <div class="accordion-header bg-transparent" id="DemoheadingThree">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#DemocollapseThree" aria-expanded="false" aria-controls="DemocollapseThree">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="DemocollapseThree" class="accordion-collapse collapse border-top" aria-labelledby="DemoheadingThree" data-bs-parent="#accordionExample4">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Customer-Management mb-4 py-lg-2">
                                <h3>Customer Management</h3>
                                <div class="accordion" id="accordionExample4">
                                    <div class="accordion-item bg-transparent mb-4">
                                        <div class="accordion-header bg-transparent" id="OheadingOne">
                                            <button class="accordion-button p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#OcollapseOne" aria-expanded="true" aria-controls="OcollapseOne">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-12">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="OcollapseOne" class="accordion-collapse collapse show border-top" aria-labelledby="OheadingOne" data-bs-parent="#accordionExample4">
                                            <div class="accordion-body">
                                                <p>
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bg-transparent mb-4">
                                        <div class="accordion-header bg-transparent" id="OheadingTwo">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#OcollapseTwo" aria-expanded="false" aria-controls="OcollapseTwo">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="OcollapseTwo" class="accordion-collapse collapse border-top" aria-labelledby="OheadingTwo" data-bs-parent="#accordionExample4">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Account-Managemen mb-4 py-lg-2">
                                <h3>Account Management</h3>
                                <div class="accordion" id="accordionExample5">
                                    <div class="accordion-item bg-transparent mb-4">
                                        <div class="accordion-header bg-transparent" id="REFheadingOne">
                                            <button class="accordion-button p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#REFcollapseOne" aria-expanded="true" aria-controls="REFcollapseOne">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-12">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="REFcollapseOne" class="accordion-collapse collapse show border-top" aria-labelledby="REFheadingOne" data-bs-parent="#accordionExample5">
                                            <div class="accordion-body">
                                                <p>
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bg-transparent mb-4">
                                        <div class="accordion-header bg-transparent" id="REFheadingTwo">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#REFcollapseTwo" aria-expanded="false" aria-controls="REFcollapseTwo">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="REFcollapseTwo" class="accordion-collapse collapse border-top" aria-labelledby="REFheadingTwo" data-bs-parent="#accordionExample5">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="Subscriber" class="tabcontent" style="display: none;">
                            <h2 class="d-none d-md-block pb-4">Subscriber</h2>
                            <div class="trials-accordian mb-4 py-lg-2">
                                <h3>Trials</h3>
                                <div class="accordion" id="accordionExample2">
                                    <div class="accordion-item mb-4">
                                        <div class="accordion-header bg-transparent" id="RheadingOne">
                                            <button class="accordion-button p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#RcollapseOne" aria-expanded="true" aria-controls="RcollapseOne">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-12">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">How to Register?</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="RcollapseOne" class="accordion-collapse collapse show border-top" aria-labelledby="RheadingOne" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <p>
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-4">
                                        <div class="accordion-header bg-transparent" id="RheadingTwo">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#RcollapseTwo" aria-expanded="false" aria-controls="RcollapseTwo">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">What is Pilot?</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="RcollapseTwo" class="accordion-collapse collapse border-top" aria-labelledby="RheadingTwo" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-4">
                                        <div class="accordion-header bg-transparent" id="RheadingThree">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#RcollapseThree" aria-expanded="false" aria-controls="RcollapseThree">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">How to manage></h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="RcollapseThree" class="accordion-collapse collapse border-top" aria-labelledby="RheadingThree" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <p class="text-light text-start">
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-4">
                                        <div class="accordion-header bg-transparent" id="Rheadingfour">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#Rcollapsefour" aria-expanded="false" aria-controls="Rcollapsefour">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">How to Register?</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="Rcollapsefour" class="accordion-collapse collapse border-top" aria-labelledby="Rheadingfour" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <p class="text-light text-start">
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-4">
                                        <div class="accordion-header bg-transparent" id="Rheadingfive">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#Rcollapsefive" aria-expanded="false" aria-controls="Rcollapsefive">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">What is Pilot?</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="Rcollapsefive" class="accordion-collapse collapse border-top" aria-labelledby="Rheadingfive" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <p class="text-light text-start">
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-4">
                                        <div class="accordion-header bg-transparent" id="Rheadingsix">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#Rcollapsesix" aria-expanded="false" aria-controls="Rcollapsesix">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">How to manage></h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="Rcollapsesix" class="accordion-collapse collapse border-top" aria-labelledby="Rheadingsix" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <p class="text-light text-start">
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-accordian mb-4 py-lg-2">
                            <h3>Pricing & Discounts</h3>
                            <div class="accordion" id="accordionExample3">
                                <div class="accordion-item mb-4">
                                    <div class="accordion-header bg-transparent" id="PDheadingOne">
                                        <button class="accordion-button p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#PDcollapseOne" aria-expanded="true" aria-controls="PDcollapseOne">
                                            <div class="row w-100 d-flex align-items-center">
                                                <div class="col-12">
                                                    <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                    <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                    <div id="PDcollapseOne" class="accordion-collapse collapse show border-top" aria-labelledby="PDheadingOne" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <p>
                                                Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-4">
                                    <div class="accordion-header bg-transparent" id="PDheadingTwo">
                                        <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#PDcollapseTwo" aria-expanded="false" aria-controls="PDcollapseTwo">
                                            <div class="row w-100 d-flex align-items-center">
                                                <div class="col-8">
                                                    <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                    <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                    <div id="PDcollapseTwo" class="accordion-collapse collapse border-top" aria-labelledby="PDheadingTwo" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-4">
                                    <div class="accordion-header bg-transparent" id="PDheadingThree">
                                        <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#PDcollapseThree" aria-expanded="false" aria-controls="PDcollapseThree">
                                            <div class="row w-100 d-flex align-items-center">
                                                <div class="col-8">
                                                    <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                    <h4 class="mb-0">How to manage></h4>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                    <div id="PDcollapseThree" class="accordion-collapse collapse border-top" aria-labelledby="RheadingThree" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <p class="text-light text-start">
                                                Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="Ordering-accordian mb-4 py-lg-2">
                                <h3>Ordering</h3>
                                <div class="accordion" id="accordionExample6">
                                    <div class="accordion-item mb-4">
                                        <div class="accordion-header bg-transparent" id="OrderingheadingOne">
                                            <button class="accordion-button p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#OrderingcollapseOne" aria-expanded="true" aria-controls="OrderingcollapseOne">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-12">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="OrderingcollapseOne" class="accordion-collapse collapse show border-top" aria-labelledby="OrderingheadingOne" data-bs-parent="#accordionExample6">
                                            <div class="accordion-body">
                                                <p>
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-4">
                                        <div class="accordion-header bg-transparent" id="OrderingheadingTwo">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#OrderingcollapseTwo" aria-expanded="false" aria-controls="OrderingcollapseTwo">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="OrderingcollapseTwo" class="accordion-collapse collapse border-top" aria-labelledby="OrderingheadingTwo" data-bs-parent="#accordionExample6">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Payment-Refund mb-4 py-lg-2">
                                <h3>Payment & Refund</h3>
                                <div class="accordion" id="accordionExample6">
                                    <div class="accordion-item mb-4">
                                        <div class="accordion-header bg-transparent" id="Payment-RefundheadingOne">
                                            <button class="accordion-button p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#Payment-RefundcollapseOne" aria-expanded="true" aria-controls="Payment-RefundcollapseOne">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-12">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="Payment-RefundcollapseOne" class="accordion-collapse collapse show border-top" aria-labelledby="Payment-RefundheadingOne" data-bs-parent="#accordionExample6">
                                            <div class="accordion-body">
                                                <p>
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-4">
                                        <div class="accordion-header bg-transparent" id="Payment-RefundheadingTwo">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#Payment-RefundcollapseTwo" aria-expanded="false" aria-controls="Payment-RefundcollapseTwo">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="Payment-RefundcollapseTwo" class="accordion-collapse collapse border-top" aria-labelledby="Payment-RefundheadingTwo" data-bs-parent="#accordionExample6">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="regestering-accordian mb-4 py-lg-2">
                                <h3>Regestering</h3>
                                <div class="accordion" id="accordionExample6">
                                    <div class="accordion-item mb-4">
                                        <div class="accordion-header bg-transparent" id="REGheadingOne">
                                            <button class="accordion-button p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#REGcollapseOne" aria-expanded="true" aria-controls="REGcollapseOne">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-12">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="REGcollapseOne" class="accordion-collapse collapse show border-top" aria-labelledby="REGheadingOne" data-bs-parent="#accordionExample6">
                                            <div class="accordion-body">
                                                <p>
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-4">
                                        <div class="accordion-header bg-transparent" id="REGheadingTwo">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#REGcollapseTwo" aria-expanded="false" aria-controls="REGcollapseTwo">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="REGcollapseTwo" class="accordion-collapse collapse border-top" aria-labelledby="REGheadingTwo" data-bs-parent="#accordionExample6">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subscription-accordian mb-4 py-lg-2">
                                <h3>Subscription</h3>
                                <div class="accordion" id="accordionExample7">
                                    <div class="accordion-item mb-4">
                                        <div class="accordion-header bg-transparent" id="SUBheadingOne">
                                            <button class="accordion-button p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#SUBcollapseOne" aria-expanded="true" aria-controls="SUBcollapseOne">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-12">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="SUBcollapseOne" class="accordion-collapse collapse show border-top" aria-labelledby="SUBheadingOne" data-bs-parent="#accordionExample7">
                                            <div class="accordion-body">
                                                <p>
                                                    Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-4">
                                        <div class="accordion-header bg-transparent" id="SUBheadingTwo">
                                            <button class="accordion-button collapsed p-3 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#SUBcollapseTwo" aria-expanded="false" aria-controls="SUBcollapseTwo">
                                                <div class="row w-100 d-flex align-items-center">
                                                    <div class="col-8">
                                                        <span>22 JUNE 2021 .  5 AMIN READ</span>
                                                        <h4 class="mb-0">Lorem Ipsum Dolar amet</h4>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div id="SUBcollapseTwo" class="accordion-collapse collapse border-top" aria-labelledby="SUBheadingTwo" data-bs-parent="#accordionExample7">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.Lorem ipsum dummy text for an article description.  These should be short, yet informative.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="Strategies" class="tabcontent" style="display: none;">
                          <h2 class="d-none d-md-block pb-4">Strategies</h2>
                        </div>
                        
                        <div id="Help" class="tabcontent" style="display: none;">
                          <h2 class="d-none d-md-block pb-4">Help</h2>
                        </div>
                        
                        <div id="Support" class="tabcontent" style="display: none;">
                          <h2 class="d-none d-md-block pb-4">Support</h2>
                        </div>
                        
                        <div id="Pricing" class="tabcontent" style="display: none;">
                          <h2 class="d-none d-md-block pb-4">Pricing</h2>
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


