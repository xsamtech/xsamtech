@extends('layouts.guest')

@section('guest-content')

        <section class="py-0 overflow-hidden">
          <div class="swiper theme-slider" data-swiper='{"autoplay":true,"loop":true,"loopedSlides":5,"slideToClickedSlide":true}'>
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img class="header-slider" src="{{ asset('assets/img/transit/background-14.jpg') }}" alt="image" />
                <div class="header-overlay text-center" data-zanim-timeline='{"delay":0.1}'>
                  <div class="d-flex flex-center vh-100">
                    <div class="header-overlay"></div>
                    <div class="header-text">
                      <div class="overflow-hidden">
                        <h1 class="display-3 text-white fs-5 fs-md-7" data-zanim-xs='{"duration":2,"delay":0}'>La tech à votre service</h1>
                      </div>
                      <div class="overflow-hidden">
                        <p class="text-uppercase text-400 ls-3 mt-2" data-zanim-xs='{"duration":2,"delay":0.1}'> santé, éducation, nourriture <br class="d-block d-md-none">et être utile à la société.</p>
                      </div>
                      <div data-zanim-xs='{"from":{"opacity":0,"y":30},"to":{"opacity":1,"y":0},"duration":1.5,"delay":0.5}'>
                        <a class="btn btn-sm btn-outline-light hvr-sweep-top mt-5 px-4" href="{{ route('products.home') }}">nos produits</a>
                      </div>
                    </div>
                  </div>
                  <div class="header-indicator-down"><a class="indicator indicator-down opacity-75" href="#about-us"><span class="indicator-arrow indicator-arrow-one" data-zanim-xs='{"from":{"opacity":0,"y":30},"to":{"opacity":1,"y":0},"ease":"Back.easeOut","duration":1,"delay":1.5}'></span></a></div>
                </div>
              </div>

              <div class="swiper-slide"><img class="header-slider" src="{{ asset('assets/img/transit/headers/landing7-new.jpg') }}" alt="image" />
                <div class="header-overlay text-center" data-zanim-timeline='{"delay":0.1}'>
                  <div class="d-flex flex-center vh-100">
                    <div class="header-overlay"></div>
                    <div class="header-text">
                      <div class="overflow-hidden">
                        <h1 class="display-3 text-white fs-5 fs-md-7" data-zanim-xs='{"duration":2,"delay":0}'>Des outils très simples</h1>
                      </div>
                      <div class="overflow-hidden">
                        <p class="text-uppercase text-400 ls-3 mt-2" data-zanim-xs='{"duration":2,"delay":0.1}'> nous travaillons à vous faciliter la vie <br class="d-block d-md-none"> complètement.</p>
                      </div>
                      <div data-zanim-xs='{"from":{"opacity":0,"y":30},"to":{"opacity":1,"y":0},"duration":1.5,"delay":0.5}'>
                        <a class="btn btn-sm btn-outline-light hvr-sweep-top mt-5 px-4" href="{{ route('about.home') }}">A propos de nous</a>
                      </div>
                    </div>
                  </div>
                  <div class="header-indicator-down"><a class="indicator indicator-down opacity-75" href="#about-us"><span class="indicator-arrow indicator-arrow-one" data-zanim-xs='{"from":{"opacity":0,"y":30},"to":{"opacity":1,"y":0},"ease":"Back.easeOut","duration":1,"delay":1.5}'></span></a></div>
                </div>
              </div>

              <div class="swiper-slide"> <img class="header-slider" src="{{ asset('assets/img/transit/headers/header-5.jpg') }}" alt="image" />
                <div class="header-overlay text-center" data-zanim-timeline='{"delay":0.1}'>
                  <div class="d-flex flex-center vh-100">
                    <div class="header-overlay"></div>
                    <div class="header-text">
                      <div class="overflow-hidden">
                        <h1 class="display-3 text-white fs-5 fs-md-7" data-zanim-xs='{"duration":2,"delay":0}'>Future is here</h1>
                      </div>
                      <div class="overflow-hidden">
                        <p class="text-uppercase text-400 ls-3 mt-2" data-zanim-xs='{"duration":2,"delay":0.1}'>Take action and be a <br class="d-block d-md-none"> part of it</p>
                      </div>
                      <div data-zanim-xs='{"from":{"opacity":0,"y":30},"to":{"opacity":1,"y":0},"duration":1.5,"delay":0.5}'><a class="btn btn-sm btn-outline-light hvr-sweep-top mt-5 px-4" href="../pages/service.html">our services</a></div>
                    </div>
                  </div>
                  <div class="header-indicator-down"><a class="indicator indicator-down opacity-75" href="#about-us"><span class="indicator-arrow indicator-arrow-one" data-zanim-xs='{"from":{"opacity":0,"y":30},"to":{"opacity":1,"y":0},"ease":"Back.easeOut","duration":1,"delay":1.5}'></span></a></div>
                </div>
              </div>
            </div>
            <div class="swiper-nav">
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-3 pt-lg-5 pb-6 pb-lg-8 text-center" style="scroll-margin-top:-25px" id="about-us">
          <div class="container">
            <div class="row mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="col">
                <div class="overflow-hidden">
                  <h2 class="fs-sm-5 mb-2" data-zanim-xs='{"duration":1.5,"delay":0}'>about us</h2>
                </div>
                <div class="overflow-hidden">
                  <p class="text-uppercase fs--1 text-black ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>Our company, in the simplest terms</p>
                </div>
                <div class="overflow-hidden">
                  <hr class="hr-short border-black" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                </div>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-md-4 text-md-end">
                <h5 class="ls-2 mb-3">we're creative</h5>
                <p class="mb-0">We are full-service digital marketing agency<br class="d-none d-xl-block" /> in Atlanta, and we’re also one of the top<br class="d-none d-xl-block" />graphic design firms because we<br class="d-none d-xl-block" /> draw to projects that challenge<br class="d-none d-sm-block" /> our creative work.</p>
              </div>
              <div class="col-md-4 px-lg-4 my-4 my-md-0"><img class="rounded w-100 w-sm-75 w-md-100" src="{{ asset('assets/img/transit/about-us-5.jpg') }}" alt="" /></div>
              <div class="col-md-4 text-md-start">
                <h5 class="ls-2 mb-3">We're friendly</h5>
                <p class="mb-0">We’re proud of our work to accomplish and<br class="d-none d-xl-block" /> much of the credit goes to our amazing<br class="d-none d-xl-block" /> and unique culture which helps us to<br class="d-none d-xl-block" /> come together to overcome all of<br class="d-none d-xl-block" /> our challanging times.</p>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-8 py-md-10 text-center">
          <div class="bg-holder" style="background-image:url({{ asset('assets/img/transit/backgrounds/our-video-bg.jpg') }});background-position: 63% 50%;"></div>
          <!--/.bg-holder-->

          <div class="container">
            <div class="row justify-content-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="col-lg-8">
                <div class="row align-items-center">
                  <div class="col-md-5 text-md-end">
                    <h2 class="font-base text-white mb-0 fs-3 lh-1"><span class="d-block" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"duration":1.5,"delay":0}'>Watch our</span><span class="d-block" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"duration":1.5,"delay":0.1}'>video</span></h2>
                  </div>
                  <div class="col-md-2 my-3 my-md-0"><a class="video-modal btn btn-outline-white hvr-sweep-top rounded-circle p-0 btn-play mx-auto" href="#!" data-bigpicture="{&quot;ytSrc&quot;:&quot;jlWMTNZNOc0&quot;}"><span class="fas fa-play" data-fa-transform="grow-1 right-2"></span></a></div>
                  <div class="col-md-5 text-md-start">
                    <div class="overflow-hidden">
                      <p class="text-white mb-0" data-zanim-xs='{"from":{"opacity":0,"x":30},"to":{"opacity":1,"x":0},"duration":1.5,"delay":0.1}'>Promote your company<br />Creating your own <br />slogan here</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>
          <div class="container">
            <div class="row text-center mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="col">
                <div class="overflow-hidden">
                  <h2 class="fs-sm-5 mb-2" data-zanim-xs='{"duration":1.5,"delay":0}'>Why choose us</h2>
                </div>
                <div class="overflow-hidden">
                  <p class="fs--1 text-uppercase text-black ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>Choosing an agency is tough. <br class="d-block d-sm-none" />let us convince you</p>
                </div>
                <div class="overflow-hidden">
                  <hr class="hr-short bg-black" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                </div>
              </div>
            </div>

            <div class="row text-center text-md-start">
              <div class="col-sm-6 col-md-4 px-lg-4 pt-md-3 pt-lg-0 pb-lg-4 h-100 feature-item position-relative">
                <h5 class="ps-lg-3">Dedicated</h5>
                <hr class="hr-feature d-block d-sm-none bg-black mt-0 mb-2" />
                <div class="border-lg-top border-lg-end py-lg-3 ps-lg-0 line-indicator line-indicator-top line-indicator-top-1">
                  <div class="checked-indicator checked-indicator-top"><span class="fas fa-check" data-fa-transform="shrink-2"></span></div>
                  <p class="px-lg-3 mb-0">Reign is a team of dedicated members <br class="d-block d-sm-none" /> towards their projects and clients.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 px-lg-4 pt-3 pt-sm-0 pt-md-3 pt-lg-0 pb-lg-4 h-100 feature-item position-relative">
                <h5 class="ps-lg-3">Professional</h5>
                <hr class="hr-feature d-block d-sm-none border-black mt-0 mb-2" />
                <div class="border-lg-top border-lg-end py-lg-3 ps-lg-0 line-indicator line-indicator-top line-indicator-top-2">
                  <div class="checked-indicator checked-indicator-top"><span class="fas fa-check" data-fa-transform="shrink-2"></span></div>
                  <p class="px-lg-3 mb-md-0">We are all professionals and ready to <br class="d-block d-sm-none" />provide projects quickly and efficiently.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 px-lg-4 pt-3 pt-lg-0 pb-lg-4 h-100 feature-item position-relative">
                <h5 class="ps-lg-3">Experienced</h5>
                <hr class="hr-feature d-block d-sm-none border-black mt-0 mb-2" />
                <div class="border-lg-top border-lg-end py-lg-3 ps-lg-0 line-indicator line-indicator-top line-indicator-top-3">
                  <div class="checked-indicator checked-indicator-top"><span class="fas fa-check" data-fa-transform="shrink-2"></span></div>
                  <p class="px-lg-3 mb-md-0">Our team is well trained, experienced <br class="d-block d-sm-none" />and know what we are doing.</p>
                </div>
              </div>
              <div class="col-12 my-3 d-none d-md-block">
                <div class="row justify-content-center">
                  <div class="col-10 p-0"><img class="w-100" src="{{ asset('assets/img/transit/illustration/process-image-6.png') }}" alt="" /></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 px-lg-4 pt-3 pt-lg-4 feature-item position-relative">
                <div class="border-lg-bottom border-lg-end pt-0 py-lg-3 line-indicator line-indicator-bottom line-indicator-bottom-1">
                  <div class="checked-indicator checked-indicator-bottom"><span class="fas fa-check" data-fa-transform="shrink-2"></span></div>
                  <h5 class="mb-lg-0 ps-lg-3">Creative</h5>
                  <hr class="hr-feature d-block d-sm-none border-black mt-0 mb-2" />
                </div>
                <p class="px-lg-3 pt-lg-3 mb-md-0">We have a number of brilliant minds ready<br class="d-block d-sm-none" /> for building your <br class="d-none d-md-block d-xl-none" />new projects.</p>
              </div>
              <div class="col-sm-6 col-md-4 pt-3 pt-lg-4 px-lg-4 feature-item position-relative">
                <div class="border-lg-bottom border-lg-end pt-0 py-lg-3 line-indicator line-indicator-bottom line-indicator-bottom-2">
                  <div class="checked-indicator checked-indicator-bottom"><span class="fas fa-check" data-fa-transform="shrink-2"></span></div>
                  <h5 class="mb-lg-0 ps-lg-3">24/7 support</h5>
                  <hr class="hr-feature d-block d-sm-none border-black mt-0 mb-2" />
                </div>
                <p class="px-lg-3 pt-lg-3 mb-0">We are always at your service 24/7 for <br class="d-block d-sm-none" /> solving any difficulties you would face.</p>
              </div>
              <div class="col-sm-6 col-md-4 pt-3 pt-lg-4 px-lg-4 feature-item position-relative">
                <div class="border-lg-bottom border-lg-end pt-0 py-lg-3 line-indicator line-indicator-bottom line-indicator-bottom-3">
                  <div class="checked-indicator checked-indicator-bottom"><span class="fas fa-check" data-fa-transform="shrink-2"></span></div>
                  <h5 class="mb-lg-0 ps-lg-3">enthusiastic</h5>
                  <hr class="hr-feature d-block d-sm-none border-black mt-0 mb-2" />
                </div>
                <p class="px-lg-3 pt-lg-3 mb-0">Reign-v5.0.0 has a bunch of energetic people<br class="d-block d-sm-none" /> who love what they are doing with us.</p>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-7 text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <div class="bg-holder overlay" style="background-image:url({{ asset('assets/img/transit/backgrounds/fun-fact.jpg') }});"></div>
          <!--/.bg-holder-->

          <div class="container">
            <div class="row mb-4">
              <div class="col">
                <div class="overflow-hidden">
                  <h2 class="fs-sm-5 text-white mb-1 mb-lg-2" data-zanim-xs='{"duration":1.5,"delay":0}'>do you know</h2>
                </div>
                <div class="overflow-hidden">
                  <p class="fs--1 text-uppercase text-white ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>some cool facts about our company</p>
                </div>
                <div class="overflow-hidden">
                  <hr class="hr-short bg-white" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="row">
                  <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="overflow-hidden"><img class="fun-fact-icon mb-2" src="{{ asset('assets/img/transit/line-icons/icons/download.svg') }}" alt="" /></div>
                    <div class="overflow-hidden">
                      <h3 class="text-white font-base fw-normal mb-1" data-countup='{"endValue":7781914}'>0</h3>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-uppercase text-white fw-semi-bold ls-2 mb-0">total downloads</p>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="overflow-hidden"><img class="fun-fact-icon mb-2" src="{{ asset('assets/img/transit/line-icons/icons/clock.svg') }}" alt="" /></div>
                    <div class="overflow-hidden">
                      <h3 class="text-white font-base fw-normal mb-1" data-countup='{"endValue":370704}'>0</h3>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-uppercase text-white fw-semi-bold ls-2 mb-0">minutes well spent</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="overflow-hidden"><img class="fun-fact-icon mb-2" src="{{ asset('assets/img/transit/line-icons/icons/battery.svg') }}" alt="" /></div>
                    <div class="overflow-hidden">
                      <h3 class="text-white font-base fw-normal mb-1" data-countup='{"endValue":12599}'>0</h3>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-uppercase text-white fw-semi-bold ls-2 mb-0">coffees consumed</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="text-center" id="services">
          <div class="container">
            <div class="row mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="col">
                <div class="overflow-hidden">
                  <h2 class="fs-md-5" data-zanim-xs='{"duration":1.5,"delay":0}'>our services</h2>
                </div>
                <div class="overflow-hidden">
                  <p class="fs--1 text-uppercase text-black ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>we plan, design, build and market high quality products</p>
                </div>
                <div class="overflow-hidden">
                  <hr class="hr-short bg-black opacity-100" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-lg-4 mb-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <div class="service-item p-3 p-md-4 h-100">
                    <div class="overflow-hidden">
                      <div class="px-4" data-zanim-xs='{"duration":1.5,"delay":"0"}'><img class="service-icon" src="{{ asset('assets/img/transit/line-icons/icons/fountain-pen.svg') }}" alt="" /></div>
                    </div>
                    <div class="overflow-hidden">
                      <h5 class="fw-normal ls-3 mb-2" data-zanim-xs='{"duration":1.5,"delay":"0.1"}'>Graphic design</h5>
                    </div>
                    <div class="overflow-hidden">
                      <p class="fw-normal" data-zanim-xs='{"duration":1.5,"delay":"0.2"}'>We have a graphic design team with <br class="d-block d-sm-none"> a good name in the industry for our <br class="d-block d-sm-none"> unique and modern graphic designs.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <div class="service-item p-3 p-md-4 h-100">
                    <div class="overflow-hidden">
                      <div class="px-4" data-zanim-xs='{"duration":1.5,"delay":"0.2"}'><img class="service-icon" src="{{ asset('assets/img/transit/line-icons/icons/pear.svg') }}" alt="" /></div>
                    </div>
                    <div class="overflow-hidden">
                      <h5 class="fw-normal ls-3 mb-2" data-zanim-xs='{"duration":1.5,"delay":"0.30000000000000004"}'>brand identity</h5>
                    </div>
                    <div class="overflow-hidden">
                      <p class="fw-normal" data-zanim-xs='{"duration":1.5,"delay":"0.4"}'>We will create your brand identity with <br class='d-block d-sm-none'> our dedication and hard work. Our team <br class='d-block d-sm-none'> is always ready to take the challenge.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <div class="service-item p-3 p-md-4 h-100">
                    <div class="overflow-hidden">
                      <div class="px-4" data-zanim-xs='{"duration":1.5,"delay":"0.3"}'><img class="service-icon" src="{{ asset('assets/img/transit/line-icons/icons/export.svg') }}" alt="" /></div>
                    </div>
                    <div class="overflow-hidden">
                      <h5 class="fw-normal ls-3 mb-2" data-zanim-xs='{"duration":1.5,"delay":"0.4"}'>Cloud Storage</h5>
                    </div>
                    <div class="overflow-hidden">
                      <p class="fw-normal" data-zanim-xs='{"duration":1.5,"delay":"0.5"}'>We have developed a cutting edge <br class='d-block d-sm-none'> system that automates our tasks that <br class='d-block d-sm-none'> often get put on the back-burner.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <div class="service-item p-3 p-md-4 h-100">
                    <div class="overflow-hidden">
                      <div class="px-4" data-zanim-xs='{"duration":1.5,"delay":"0.3"}'><img class="service-icon" src="{{ asset('assets/img/transit/line-icons/icons/light-bulb.svg') }}" alt="" /></div>
                    </div>
                    <div class="overflow-hidden">
                      <h5 class="fw-normal ls-3 mb-2" data-zanim-xs='{"duration":1.5,"delay":"0.4"}'>creative theme</h5>
                    </div>
                    <div class="overflow-hidden">
                      <p class="fw-normal" data-zanim-xs='{"duration":1.5,"delay":"0.5"}'>We build outstanding and user-friendly <br class='d-block d-sm-none'> bootstrap themes with best UX which <br class='d-block d-sm-none'> works in all platforms and browsers.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <div class="service-item p-3 p-md-4 h-100">
                    <div class="overflow-hidden">
                      <div class="px-4" data-zanim-xs='{"duration":1.5,"delay":"0.4"}'><img class="service-icon" src="{{ asset('assets/img/transit/line-icons/icons/pie-chart.svg') }}" alt="" /></div>
                    </div>
                    <div class="overflow-hidden">
                      <h5 class="fw-normal ls-3 mb-2" data-zanim-xs='{"duration":1.5,"delay":"0.5"}'>making strategy</h5>
                    </div>
                    <div class="overflow-hidden">
                      <p class="fw-normal" data-zanim-xs='{"duration":1.5,"delay":"0.6000000000000001"}'>Our strategy making process is <br class='d-block d-sm-none'> efficient by which we can create <br class='d-block d-sm-none'> businesses that will sustain in the future.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <div class="service-item p-3 p-md-4 h-100">
                    <div class="overflow-hidden">
                      <div class="px-4" data-zanim-xs='{"duration":1.5,"delay":"0.5"}'><img class="service-icon" src="{{ asset('assets/img/transit/line-icons/icons/wifi.svg') }}" alt="" /></div>
                    </div>
                    <div class="overflow-hidden">
                      <h5 class="fw-normal ls-3 mb-2" data-zanim-xs='{"duration":1.5,"delay":"0.6"}'>Network Setup</h5>
                    </div>
                    <div class="overflow-hidden">
                      <p class="fw-normal" data-zanim-xs='{"duration":1.5,"delay":"0.7"}'>We provide the latest secured network <br class='d-block d-sm-none'> solutions to our all customers using <br class='d-block d-sm-none'> service from proven technology.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-6">
          <div class="bg-holder overlay overlay-1" style="background-image:url({{ asset('assets/img/transit/backgrounds/performance-bg.jpg') }});background-position: top;"></div>
          <!--/.bg-holder-->

          <div class="container">
            <div class="row">
              <div class="col-12 mb-4 text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h2 class="fs-md-5 text-white" data-zanim-xs='{"duration":1.5,"delay":0}'>Our Performance</h2>
                </div>
                <div class="overflow-hidden">
                  <p class="fs--1 text-uppercase text-white ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>Be surprised seeing the final outcome with us.</p>
                </div>
                <div class="overflow-hidden">
                  <hr class="hr-short bg-white" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                </div>
              </div>
              <div class="col-lg-6 px-4 px-sm-3 px-lg-5 mb-4 mb-md-5 mb-lg-0" style="padding-top: 5px;">
                <div class="progress-line text-white" data-progress-line="data-progress-line" data-options='{"progress":90}'>
                  <p class="mb-0 text-start">Google Page Speed</p>
                </div>
                <div class="progress-line text-white" data-progress-line="data-progress-line" data-options='{"progress":73}'>
                  <p class="mb-0 text-start">Pingdom Page Speed</p>
                </div>
                <div class="progress-line text-white" data-progress-line="data-progress-line" data-options='{"progress":87}'>
                  <p class="mb-0 text-start">Reign Performance Matrix</p>
                </div>
                <div class="progress-line text-white" data-progress-line="data-progress-line" data-options='{"progress":95}'>
                  <p class="mb-0 text-start">Customer Satisfaction </p>
                </div>
              </div>
              <div class="col-lg-6 px-lg-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item"><a class="nav-link fs-0 text-white ls-1 active" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">UX/UI</a></li>
                  <li class="nav-item"><a class="nav-link fs-0 text-white ls-1" id="profile-tab" data-bs-toggle="tab" href="#tab-profile" role="tab" aria-controls="tab-profile" aria-selected="false">Support</a></li>
                  <li class="nav-item"><a class="nav-link fs-0 text-white ls-1l" id="contact-tab" data-bs-toggle="tab" href="#tab-contact" role="tab" aria-controls="tab-contact" aria-selected="false">Seo</a></li>
                </ul>
                <div class="tab-content pt-4" id="myTabContent">
                  <div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="d-flex align-items-center"><img src="{{ asset('assets/img/transit/line-icons/diamond.svg') }}" width="56" alt="" />
                      <div class="flex-1 ms-3 text-light">Reign is a team of multidisciplinary digital product experts. We extend the design and development departments of the most innovative companies. Our studio is small, working with a few client projects at a time.</div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="d-flex align-items-center"><img src="asset('assets/img/transit/line-icons/customer-service.svg')" width="56" alt="" />
                      <div class="flex-1 ms-3 text-light">Our friendly Support Team is available to help you 24 hours a day, seven days a week. We look forward to hearing from you! Our 24/7 support team is available to assist you with your any online presence needs.</div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab-contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="d-flex align-items-center"><img src="{{ asset('assets/img/transit/line-icons/monitor-3.svg') }}" width="56" alt="" />
                      <div class="flex-1 ms-3 text-light">SEO is essential for every website for a long time business and marketing. We generally work on three keywords for SEO and charge a small amount. Usually, it will take 3-6 month for upgrading website search rank.</div>
                    </div>
                  </div>
                </div>
                <div class="text-center text-lg-start"><a class="btn btn-outline-light hvr-sweep-top btn-sm mt-5 mt-lg-4 mb-2" href="../pages/work.html">Our Latest Works</a></div>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>
          <div class="container">
            <div class="row">
              <div class="col mb-4 text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h2 class="fs-md-5" data-zanim-xs='{"duration":1.5,"delay":0}'>how we did it</h2>
                </div>
                <div class="overflow-hidden">
                  <p class="fs--1 text-uppercase text-black ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>working together to achieve great results</p>
                </div>
                <div class="overflow-hidden">
                  <hr class="hr-short bg-black" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-9 px-5">
                <div class="d-flex process-item border-dashed-start border-600 pb-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="process-icon-circle"><img class="process-icon" src="{{ asset('assets/img/transit/line-icons/medical-result.svg') }}" alt="" /></div>
                  <div class="flex-1 ms-4 ms-sm-5">
                    <h5 class="ls-2"><span class="bg-white pe-3">analysis &amp; planning</span></h5>
                    <p class="mb-0 pe-lg-5" data-zanim-xs='{"from":{"opacity":0},"to":{"opacity":1},"duration":1,"delay":0.2}'>At first, we will analyze the product and planning then convert to a full specification document that explains exactly what we will deliver to you. This process will include the technical &amp; functional requirements captured along with your branding and styling guidelines.</p>
                  </div>
                </div>
                <div class="d-flex process-item border-dashed-start border-600 border-md-start-0 border-md-dashed-end pb-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="flex-1 position-relative ms-4 ms-sm-5 ms-md-0 me-md-5">
                    <h5 class="text-md-end"><span class="bg-white ps-md-3">Design &amp; Development</span><span class="process-devider border-end-0 start-0"></span></h5>
                    <p class="mb-0 text-md-end ps-lg-6" data-zanim-xs='{"from":{"opacity":0},"to":{"opacity":1},"duration":1,"delay":0.3}'> This is the main production phase where we build the functionalities of your product. Once created, your product must pass through our quality assurance phase before you are finally presented with the finished deliverable.</p>
                  </div>
                  <div class="process-icon-circle"><img class="process-icon" src="{{ asset('assets/img/transit/line-icons/web-programming.svg') }}" alt="" /></div>
                </div>
                <div class="d-flex process-item border-dashed-start border-600 pb-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="process-icon-circle"><img class="process-icon" src="{{ asset('assets/img/transit/line-icons/technical-support.svg') }}" alt="" /></div>
                  <div class="flex-1 position-relative ms-4 ms-sm-5"><span class="process-devider border-start-0 end-0"></span>
                    <h5 class="ls-2"><span class="bg-white pe-3">Testing &amp; Fixing</span></h5>
                    <p class="mb-0 pe-lg-5" data-zanim-xs='{"from":{"opacity":0},"to":{"opacity":1},"duration":1,"delay":0.2}'>After building your product, we will review your product with our talented testing team. In these steps, we will test your product with different data set and conditions. Also, this phase is essential for fixing design and development issues. </p>
                  </div>
                </div>
                <div class="d-flex process-item" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="flex-1 position-relative ms-4 ms-sm-5 ms-md-0 me-md-5">
                    <h5 class="text-md-end"><span class="bg-white ps-md-3">LAUNCH &amp; GROW</span><span class="process-devider border-end-0 start-0"></span></h5>
                    <p class="mb-0 text-md-end ps-lg-5" data-zanim-xs='{"from":{"opacity":0},"to":{"opacity":1},"duration":1,"delay":0.3}'> The final step is where we launch your product to the production server. Here we consider components such as cloud architecture, performance, and cybersecurity if that is within that scope of your project. At this point, you are officially live!</p>
                  </div>
                  <div class="process-icon-circle"><img class="process-icon" src="{{ asset('assets/img/transit/line-icons/server.svg') }}" alt="" /></div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-6 text-center bg-1100" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <div class="bg-holder overlay overlay-0" style="background-image:url({{ asset('assets/img/transit/backgrounds/fun-fact.jpg') }});background-position: bottom;"></div>
          <!--/.bg-holder-->

          <div class="container">
            <div class="overflow-hidden">
              <h3 class="font-base text-white" data-zanim-xs='{"duration":1.5,"delay":0}'>Excited To Start <br class="d-block d-sm-none" />Your Next Project?</h3>
            </div>
            <div data-zanim-xs='{"from":{"opacity":0,"y":30},"to":{"opacity":1,"y":0},"duration":1.5,"delay":0.1}'><a class="btn btn-sm btn-outline-light hvr-sweep-top mt-3" href="#">Let's get started </a></div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="text-center pb-3" id="portfolio">
          <div class="container-fluid">
            <div class="row justify-content-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="col-12 mb-4">
                <div class="overflow-hidden">
                  <h2 class="fs-md-5 mb-2" data-zanim-xs='{"duration":1.5,"delay":0}'>recent projects</h2>
                </div>
                <div class="overflow-hidden">
                  <p class="fs--1 text-uppercase text-black ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>successful projects, happy clients, great results</p>
                </div>
                <div class="overflow-hidden">
                  <hr class="hr-short bg-black opacity-100" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                </div>
              </div>
            </div>
            <ul class="nav font-sans-serif mb-3 justify-content-center" data-filter-nav="data-filter-nav">
              <li class="nav-item"><a class="isotope-nav text-uppercase font-base active" href="#!" data-filter="*">all</a></li>
              <li class="nav-item"> <a class="isotope-nav text-uppercase font-base" href="#!" data-filter=".photography">Photography</a></li>
              <li class="nav-item"> <a class="isotope-nav text-uppercase font-base" href="#!" data-filter=".design">Design</a></li>
              <li class="nav-item"> <a class="isotope-nav text-uppercase font-base" href="#!" data-filter=".mobile">Mobile</a></li>
              <li class="nav-item"> <a class="isotope-nav text-uppercase font-base" href="#!" data-filter=".marketing">Marketing </a></li>
            </ul>
            <div class="row g-3 mt-3" data-rp-isotope='{"layoutMode":"packery"}'>
              <div class="col-sm-6 col-lg-4 px-2 isotope-item design" data-zanim-xs='{"delay":0}'>
                <div class="hoverdir-item my-0" data-zanim-xs='{"duration":1.5,"animation":"zoom-in","delay":0}'>
                  <div class="hoverdir-item-content"><a class="d-block" href="../pages/work-single.html"><img class="img-fluid rounded" src="{{ asset('assets/img/transit/projects/1.jpg') }}" alt="" />
                      <div class="hoverdir-text">
                        <h3 class="text-white lh-1 fs-2">Website Design</h3>
                        <p class="ls-1 mb-0 text-700">Multipurpose HTML template <br> with bootstrap 5</p>
                      </div>
                    </a></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 px-2 isotope-item design" data-zanim-xs='{"delay":0.1}'>
                <div class="hoverdir-item my-0" data-zanim-xs='{"duration":1.5,"animation":"zoom-in","delay":0}'>
                  <div class="hoverdir-item-content"><a class="d-block" href="../pages/work-single.html"><img class="img-fluid rounded" src="{{ asset('assets/img/transit/projects/2.jpg') }}" alt="" />
                      <div class="hoverdir-text">
                        <h3 class="text-white lh-1 fs-2">UI/UX Design</h3>
                        <p class="ls-1 mb-0 text-700">Most user friendly user <br> interface design</p>
                      </div>
                    </a></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 px-2 isotope-item mobile" data-zanim-xs='{"delay":0.2}'>
                <div class="hoverdir-item my-0" data-zanim-xs='{"duration":1.5,"animation":"zoom-in","delay":0}'>
                  <div class="hoverdir-item-content"><a class="d-block" href="../pages/work-single.html"><img class="img-fluid rounded" src="{{ asset('assets/img/transit/projects/3.jpg') }}" alt="" />
                      <div class="hoverdir-text">
                        <h3 class="text-white lh-1 fs-2">Mobile Accessories</h3>
                        <p class="ls-1 mb-0 text-700">Popular mobile accessories <br> in 2021</p>
                      </div>
                    </a></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 px-2 isotope-item photography" data-zanim-xs='{"delay":0.3}'>
                <div class="hoverdir-item my-0" data-zanim-xs='{"duration":1.5,"animation":"zoom-in","delay":0}'>
                  <div class="hoverdir-item-content"><a class="d-block" href="../pages/work-single.html"><img class="img-fluid rounded" src="{{ asset('assets/img/transit/projects/4.jpg') }}" alt="" />
                      <div class="hoverdir-text">
                        <h3 class="text-white lh-1 fs-2">Interior Photography</h3>
                        <p class="ls-1 mb-0 text-700">More than 50K happy <br> real state clients</p>
                      </div>
                    </a></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 px-2 isotope-item mobile" data-zanim-xs='{"delay":0.4}'>
                <div class="hoverdir-item my-0" data-zanim-xs='{"duration":1.5,"animation":"zoom-in","delay":0}'>
                  <div class="hoverdir-item-content"><a class="d-block" href="../pages/work-single.html"><img class="img-fluid rounded" src="{{ asset('assets/img/transit/projects/5.jpg') }}" alt="" />
                      <div class="hoverdir-text">
                        <h3 class="text-white lh-1 fs-2">App Development</h3>
                        <p class="ls-1 mb-0 text-700">Most secured and optimized <br> mobile app development</p>
                      </div>
                    </a></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 px-2 isotope-item marketing" data-zanim-xs='{"delay":0.5}'>
                <div class="hoverdir-item my-0" data-zanim-xs='{"duration":1.5,"animation":"zoom-in","delay":0}'>
                  <div class="hoverdir-item-content"><a class="d-block" href="../pages/work-single.html"><img class="img-fluid rounded" src="{{ asset('assets/img/transit/projects/6.jpg') }}" alt="" />
                      <div class="hoverdir-text">
                        <h3 class="text-white lh-1 fs-2">Content Writing</h3>
                        <p class="ls-1 mb-0 text-700"> More than 50K blog posts <br> on different subjects</p>
                      </div>
                    </a></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 px-2 isotope-item design" data-zanim-xs='{"delay":0.6}'>
                <div class="hoverdir-item my-0" data-zanim-xs='{"duration":1.5,"animation":"zoom-in","delay":0}'>
                  <div class="hoverdir-item-content"><a class="d-block" href="../pages/work-single.html"><img class="img-fluid rounded" src="{{ asset('assets/img/transit/projects/7.jpg') }}" alt="" />
                      <div class="hoverdir-text">
                        <h3 class="text-white lh-1 fs-2">Packaging Designing</h3>
                        <p class="ls-1 mb-0 text-700">Beautiful packaging design done <br> by our designers</p>
                      </div>
                    </a></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 px-2 isotope-item photography" data-zanim-xs='{"delay":0.35}'>
                <div class="hoverdir-item my-0" data-zanim-xs='{"duration":1.5,"animation":"zoom-in","delay":0}'>
                  <div class="hoverdir-item-content"><a class="d-block" href="../pages/work-single.html"><img class="img-fluid rounded" src="{{ asset('assets/img/transit/projects/8.jpg') }}" alt="" />
                      <div class="hoverdir-text">
                        <h3 class="text-white lh-1 fs-2">Model Photography</h3>
                        <p class="ls-1 mb-0 text-700">Exclusive model photography by <br> award winning photographers</p>
                      </div>
                    </a></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 px-2 isotope-item design" data-zanim-xs='{"delay":0.4}'>
                <div class="hoverdir-item my-0" data-zanim-xs='{"duration":1.5,"animation":"zoom-in","delay":0}'>
                  <div class="hoverdir-item-content"><a class="d-block" href="../pages/work-single.html"><img class="img-fluid rounded" src="{{ asset('assets/img/transit/projects/9.jpg') }}" alt="" />
                      <div class="hoverdir-text">
                        <h3 class="text-white lh-1 fs-2">Digital Marketing</h3>
                        <p class="ls-1 mb-0 text-700">We spread your digital products <br> all over the world</p>
                      </div>
                    </a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-5 text-center bg-black text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <div class="container">
            <div class="overflow-hidden">
              <h4 class="fw-normal text-white mb-1" data-zanim-xs='{"duration":1.5,"delay":0}'>Want To See More<br class="d-block d-sm-none" /> From Our Works?</h4>
            </div>
            <div class="overflow-hidden">
              <p data-zanim-xs='{"duration":1.5,"delay":0.1}'>Our Team is always ready to help you</p>
            </div>
            <div data-zanim-xs='{"from":{"opacity":0,"y":30},"to":{"opacity":1,"y":0},"duration":1.5,"delay":0.5}'><a class="btn btn-outline-light btn-sm hvr-sweep-top mt-2" href="../pages/work-alt.html">View All</a></div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="text-center" id="team">
          <div class="container">
            <div class="row">
              <div class="col mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h2 class="fs-md-5" data-zanim-xs='{"delay":0}'>meet the team</h2>
                </div>
                <div class="overflow-hidden">
                  <p class="fs--1 text-uppercase text-black ls-1 mb-0" data-zanim-xs='{"delay":0.1}'>meet the reign team</p>
                </div>
                <div class="overflow-hidden">
                  <hr class="hr-short bg-black" data-zanim-xs='{"delay":0.2}' />
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="row">
                  <div class="col-6 col-md-3 col-lg-3 px-2 team-item mb-4">
                    <div class="hoverbox w-75 rounded-circle overflow-hidden mx-auto"><img class="img-fluid" src="{{ asset('assets/img/transit/team/1.jpg') }}" alt="" />
                      <div class="hoverbox-content">
                        <div class="d-flex align-items-end justify-content-center h-100">
                          <ul class="list-inline team-item-social-icons">
                            <li class="list-inline-item"><a class="text-white" href="#!"><span class="fab fa-facebook-f" data-fa-transform="grow-3"></span></a></li>
                            <li class="list-inline-item"><a class="text-white" href="#!"><span class="fab fa-twitter" data-fa-transform="grow-3"></span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <h6 class="fw-bold mt-2 mb-1"><a class="text-black" href="#!">Kit Harington</a></h6>
                    <h6 class="ls-1">CEO &amp; Founder</h6>
                  </div>
                  <div class="col-6 col-md-3 col-lg-3 px-2 team-item mb-4">
                    <div class="hoverbox w-75 rounded-circle overflow-hidden mx-auto"><img class="img-fluid" src="asset('assets/img/transit/team/2.jpg')" alt="" />
                      <div class="hoverbox-content">
                        <div class="d-flex align-items-end justify-content-center h-100">
                          <ul class="list-inline team-item-social-icons">
                            <li class="list-inline-item"><a class="text-white" href="#!"><span class="fab fa-google-plus-g" data-fa-transform="grow-3"></span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <h6 class="fw-bold mt-2 mb-1"><a class="text-black" href="#!">Emilla Clarke</a></h6>
                    <h6 class="ls-1">CTO</h6>
                  </div>
                  <div class="col-6 col-md-3 col-lg-3 px-2 team-item mb-4">
                    <div class="hoverbox w-75 rounded-circle overflow-hidden mx-auto"><img class="img-fluid" src="{{ asset('assets/img/transit/team/4.jpg') }}" alt="" />
                      <div class="hoverbox-content">
                        <div class="d-flex align-items-end justify-content-center h-100">
                          <ul class="list-inline team-item-social-icons">
                            <li class="list-inline-item"><a class="text-white" href="#!"><span class="fab fa-linkedin-in" data-fa-transform="grow-3"></span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <h6 class="fw-bold mt-2 mb-1"><a class="text-black" href="#!">Perter Dinklage</a></h6>
                    <h6 class="ls-1">Designer</h6>
                  </div>
                  <div class="col-6 col-md-3 col-lg-3 px-2 team-item mb-4">
                    <div class="hoverbox w-75 rounded-circle overflow-hidden mx-auto"><img class="img-fluid" src="{{ asset('assets/img/transit/team/3.jpg') }}" alt="" />
                      <div class="hoverbox-content">
                        <div class="d-flex align-items-end justify-content-center h-100">
                          <ul class="list-inline team-item-social-icons">
                            <li class="list-inline-item"><a class="text-white" href="#!"><span class="fab fa-facebook-f" data-fa-transform="grow-3"></span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <h6 class="fw-bold mt-2 mb-1"><a class="text-black" href="#!">Tim Burton</a></h6>
                    <h6 class="ls-1">Executive</h6>
                  </div>
                  <div class="col-6 col-md-3 col-lg-3 px-2 team-item mb-4 mb-lg-0">
                    <div class="hoverbox w-75 rounded-circle overflow-hidden mx-auto"><img class="img-fluid" src="{{ asset('assets/img/transit/team/12.jpg') }}" alt="" />
                      <div class="hoverbox-content">
                        <div class="d-flex align-items-end justify-content-center h-100">
                          <ul class="list-inline team-item-social-icons">
                            <li class="list-inline-item"><a class="text-white" href="#!"><span class="fab fa-twitter" data-fa-transform="grow-3"></span></a></li>
                            <li class="list-inline-item"><a class="text-white" href="#!"><span class="fab fa-instagram" data-fa-transform="grow-3"></span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <h6 class="fw-bold mt-2 mb-1"><a class="text-black" href="#!">John Bradley</a></h6>
                    <h6 class="ls-1">Developer</h6>
                  </div>
                  <div class="col-6 col-md-3 col-lg-3 px-2 team-item mb-4 mb-lg-0">
                    <div class="hoverbox w-75 rounded-circle overflow-hidden mx-auto"><img class="img-fluid" src="{{ asset('assets/img/transit/team/5.jpg') }}" alt="" />
                      <div class="hoverbox-content">
                        <div class="d-flex align-items-end justify-content-center h-100">
                          <ul class="list-inline team-item-social-icons">
                            <li class="list-inline-item"><a class="text-white" href="#!"><span class="fab fa-instagram" data-fa-transform="grow-3"></span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <h6 class="fw-bold mt-2 mb-1"><a class="text-black" href="#!">Peter Jackson</a></h6>
                    <h6 class="ls-1">Software Engineer</h6>
                  </div>
                  <div class="col-6 col-md-3 col-lg-3 px-2 team-item mb-4 mb-lg-0">
                    <div class="hoverbox w-75 rounded-circle overflow-hidden mx-auto"><img class="img-fluid" src="{{ asset('assets/img/transit/team/7.jpg') }}" alt="" />
                      <div class="hoverbox-content">
                        <div class="d-flex align-items-end justify-content-center h-100">
                          <ul class="list-inline team-item-social-icons">
                            <li class="list-inline-item"><a class="text-white" href="#!"><span class="fab fa-twitter" data-fa-transform="grow-3"></span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <h6 class="fw-bold mt-2 mb-1"><a class="text-black" href="#!">Alfie Allen</a></h6>
                    <h6 class="ls-1">Web Designer</h6>
                  </div>
                  <div class="col-6 col-md-3 col-lg-3 px-2 team-item mb-4 mb-lg-0">
                    <div class="hoverbox w-75 rounded-circle overflow-hidden mx-auto"><img class="img-fluid" src="{{ asset('assets/img/transit/team/10.jpg') }}" alt="" />
                      <div class="hoverbox-content">
                        <div class="d-flex align-items-end justify-content-center h-100">
                          <ul class="list-inline team-item-social-icons">
                            <li class="list-inline-item"><a class="text-white" href="#!"><span class="fab fa-linkedin-in" data-fa-transform="grow-3"></span></a></li>
                            <li class="list-inline-item"><a class="text-white" href="#!"><span class="fab fa-youtube" data-fa-transform="grow-3"></span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <h6 class="fw-bold mt-2 mb-1"><a class="text-black" href="#!">Gemma Whelan</a></h6>
                    <h6 class="ls-1">Software Engineer</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="testimonial">
          <div class="bg-holder overlay overlay-0" style="background-image:url({{ asset('assets/img/transit/backgrounds/testimonial.jpg') }});"></div>
          <!--/.bg-holder-->

          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 mb-4 text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h2 class="fs-md-5 text-white mb-2" data-zanim-xs='{"duration":1.5,"delay":0}'>Client's testimonial</h2>
                </div>
                <div class="overflow-hidden">
                  <p class="fs--1 text-uppercase text-white ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>see what our top valuable clients say about us</p>
                </div>
                <div class="overflow-hidden">
                  <hr class="hr-short bg-white" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                </div>
              </div>
              <div class="col-sm-10 col-lg-8 text-center text-md-start px-sm-0">
                <div class="border rounded px-3 px-sm-4 px-md-6 py-5 mt-5">
                  <div class="testimonial-quote"></div>
                  <div class="rounded-circle testimonial-avatar"></div>
                  <div class="swiper-testimonial-container">
                    <div class="swiper-nav d-none d-lg-block">
                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>
                    </div>
                    <div class="swiper testimonial-slider" data-swiper='{"navigation":{"nextEl":".swiper-testimonial-container .swiper-button-next","prevEl":".swiper-testimonial-container .swiper-button-prev"},"spaceBetween":5,"loop":true,"loopedSlides":5,"slideToClickedSlide":true}'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="item px-2" data-avatar="{{ asset('assets/img/transit/team/9.jpg') }}">
                            <p class="text-white font-base mt-4 mt-md-0"> Reign superbly blends all the best elements. It offers the power of bootstrap with useful blocks and extensions. It also includes the most elegant typographic features and unique sections which makes our developers incredibly happy.</p>
                            <div class="row g-0 justify-content-between align-items-end">
                              <div class="col-12 col-md mb-3 mb-md-0">
                                <h4 class="text-white fw-normal mb-0 fs-1 ls-1">Peter Gregory</h4>
                                <p class="fs--1 text-uppercase text-500 mb-0 ls-2">CEO &amp; Founder</p>
                              </div>
                              <div class="col-12 col-md-4 text-center text-md-end"><img class="testimonial-company-logo" src="{{ asset('assets/img/transit/logo/b&w/1.png') }}" alt="" /></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="item px-2" data-avatar="{{ asset('assets/img/transit/team/10.jpg') }}">
                            <p class="text-white font-base mt-4 mt-md-0">Reign template is an indispensable collection of powerful tools to do just that. I’m a long-time customer of Reign template and highly recommend it to anyone who is serious about to grow his/her company through web all over the world.</p>
                            <div class="row g-0 justify-content-between align-items-end">
                              <div class="col-12 col-md mb-3 mb-md-0">
                                <h4 class="text-white fw-normal mb-0 fs-1 ls-1">Lily Rose</h4>
                                <p class="fs--1 text-uppercase text-500 mb-0 ls-2">Customer Support</p>
                              </div>
                              <div class="col-12 col-md-4 text-center text-md-end"><img class="testimonial-company-logo" src="{{ asset('assets/img/transit/logo/b&w/7.png') }}" alt="" /></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="item px-2" data-avatar="{{ asset('assets/img/transit/team/13.jpg') }}">
                            <p class="text-white font-base mt-4 mt-md-0">The team behind Reign sure know what they are doing and their responsibility! If you’re looking for managed hosting, you’ll find a stable, secure and so well optimized option in Reign sites and all other products price range.</p>
                            <div class="row g-0 justify-content-between align-items-end">
                              <div class="col-12 col-md mb-3 mb-md-0">
                                <h4 class="text-white fw-normal mb-0 fs-1 ls-1">Richard Mark</h4>
                                <p class="fs--1 text-uppercase text-500 mb-0 ls-2">Marketing Manager</p>
                              </div>
                              <div class="col-12 col-md-4 text-center text-md-end"><img class="testimonial-company-logo" src="{{ asset('assets/img/transit/logo/b&w/4.png') }}" alt="" /></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-pagination d-block d-lg-none"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="text-center" id="pricing">
          <div class="container">
            <div class="row" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="col mb-4">
                <div class="overflow-hidden">
                  <h2 class="fs-md-5" data-zanim-xs='{"duration":1.5,"delay":0}'>Our Pricing</h2>
                </div>
                <div class="overflow-hidden">
                  <p class="fs--1 text-uppercase text-black ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>Amazing services at affordable price</p>
                </div>
                <div class="overflow-hidden">
                  <hr class="hr-short bg-black" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                </div>
              </div>
            </div>
            <div class="row" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 h-100">
                <div class="border border-200 rounded p-4 mx-auto" style="max-width: 300px;"><img src="{{ asset('assets/img/transit/line-icons/helicopter.svg') }}" width="56" alt="" />
                  <h5 class="mt-3">standard</h5>
                  <h2 class="fw-bold fs-5"><sup class="fs-1">$</sup><span class="font-base">199</span><small class="fs-0 text-lowercase">/ m</small></h2>
                  <hr />
                  <ul class="list-unstyled">
                    <li class="py-2">Up to 5 Pages</li>
                    <li class="py-2">1 Year Hosting</li>
                    <li class="py-2">3 Months Support</li>
                    <li class="py-2 text-400">SEO</li>
                    <li class="py-2 text-400">Security &amp; Backups</li>
                    <li class="py-2 text-400">24/7 Support</li>
                  </ul>
                  <div class="d-grid"><a class="btn btn-sm btn-outline-secondary mt-5 hvr-sweep-top" href="#!">get started</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="border border-200 rounded p-4 mx-auto" style="max-width: 300px;">
                  <div class="text-center"><img src="{{ asset('assets/img/transit/line-icons/helicopter.svg') }}" width="56" alt="" /></div>
                  <h5 class="mt-3">standard</h5>
                  <h2 class="fw-bold fs-5"><sup class="fs-1">$</sup><span class="font-base">499</span><small class="fs-0 text-lowercase">/ m</small></h2>
                  <hr />
                  <ul class="list-unstyled">
                    <li class="py-2">Up to 5 Pages</li>
                    <li class="py-2">1 Year Hosting</li>
                    <li class="py-2">3 Months Support</li>
                    <li class="py-2">SEO</li>
                    <li class="py-2 text-400">Security &amp; Backups</li>
                    <li class="py-2 text-400">24/7 Support</li>
                  </ul>
                  <div class="d-grid"><a class="btn btn-sm btn-outline-secondary mt-5 hvr-sweep-top" href="#!">get started</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                <div class="border border-black rounded p-4 mx-auto" style="max-width: 300px;" data-zanim-xs='{"from":{"opacity":0,"y":20},"to":{"opacity":1,"y":0},"duration":1.5,"delay":0}'>
                  <div class="text-center"><img src="{{ asset('assets/img/transit/line-icons/airplane.svg') }}" width="56" alt="" /></div>
                  <h5 class="mt-3 ls-3">premium</h5>
                  <h2 class="fw-bold fs-5"><sup class="fs-1">$</sup><span class="font-base">799</span><small class="fs-0 text-lowercase">/ m</small></h2>
                  <hr class="bg-black opacity-100" />
                  <ul class="list-unstyled">
                    <li class="py-2">Up to 5 Pages</li>
                    <li class="py-2">1 Year Hosting</li>
                    <li class="py-2">3 Months Support</li>
                    <li class="py-2">SEO</li>
                    <li class="py-2">Security &amp; Backups</li>
                    <li class="py-2 text-400">24/7 Support</li>
                  </ul>
                  <div class="d-grid"><a class="btn btn-sm btn-dark mt-5 hvr-sweep-top" href="#!">get started</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                <div class="border border-200 rounded p-4 mx-auto" style="max-width: 300px;"><img src="{{ asset('assets/img/transit/line-icons/pricing-rocket.svg') }}" width="56" alt="" />
                  <h5 class="mt-3">ultimate</h5>
                  <h2 class="fw-bold fs-5"><sup class="fs-1">$</sup><span class="font-base">999</span><small class="fs-0 text-lowercase">/ m</small></h2>
                  <hr />
                  <ul class="list-unstyled">
                    <li class="py-2">Up to 5 Pages</li>
                    <li class="py-2">1 Year Hosting</li>
                    <li class="py-2">3 Months Support</li>
                    <li class="py-2">SEO</li>
                    <li class="py-2">Security &amp; Backups</li>
                    <li class="py-2">24/7 Support</li>
                  </ul>
                  <div class="d-grid"><a class="btn btn-sm btn-outline-secondary mt-5 hvr-sweep-top" href="#!">get started</a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-black py-6 clients">
          <div class="container">
            <div class="swiper-container swiper-clients">
              <div class="swiper-nav d-none d-lg-block">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
              <div class="swiper" data-swiper='{"navigation":{"nextEl":".swiper-container .swiper-button-next","prevEl":".swiper-container .swiper-button-prev"},"autoplay":true,"loop":true,"slidesPerView":2,"grabCursor":true,"breakpoints":{"576":{"slidesPerView":3},"768":{"slidesPerView":3},"992":{"slidesPerView":4},"1200":{"slidesPerView":6}}}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide d-flex justify-content-center" style="width:140px"><img class="opacity-50" src="{{ asset('assets/img/transit/logo/b&w/1.png') }}" alt="" width="130" /></div>
                  <div class="swiper-slide d-flex justify-content-center" style="width:140px"><img class="opacity-50" src="{{ asset('assets/img/transit/logo/b&w/4.png') }}" alt="" width="130" /></div>
                  <div class="swiper-slide d-flex justify-content-center" style="width:140px"><img class="opacity-50" src="{{ asset('assets/img/transit/logo/b&w/6.png') }}" alt="" width="130" /></div>
                  <div class="swiper-slide d-flex justify-content-center" style="width:140px"><img class="opacity-50" src="{{ asset('assets/img/transit/logo/b&w/7.png') }}" alt="" width="130" /></div>
                  <div class="swiper-slide d-flex justify-content-center" style="width:140px"><img class="opacity-50" src="{{ asset('assets/img/transit/logo/b&w/8.png') }}" alt="" width="130" /></div>
                  <div class="swiper-slide d-flex justify-content-center" style="width:140px"><img class="opacity-50" src="{{ asset('assets/img/transit/logo/b&w/9.png') }}" alt="" width="130" /></div>
                  <div class="swiper-slide d-flex justify-content-center" style="width:140px"><img class="opacity-50" src="{{ asset('assets/img/transit/logo/b&w/4.png') }}" alt="" width="130" /></div>
                </div>
                <div class="swiper-pagination d-block d-lg-none"></div>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="blog">
          <div class="container">
            <div class="row">
              <div class="col text-center mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h2 class="fs-md-5" data-zanim-xs='{"duration":1.5,"delay":0}'>From the blog</h2>
                </div>
                <div class="overflow-hidden">
                  <p class="fs--1 text-uppercase text-black ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>Awesome articles from the blog</p>
                </div>
                <div class="overflow-hidden">
                  <hr class="hr-short bg-black" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4 h-100 mb-4"><a href="../pages/single-post.html"> <img class="img-fluid rounded-top" src="{{ asset('assets/img/transit/blogs/1.jpg') }}" alt="" /></a>
                <div class="p-3 border rounded-bottom border-top-0">
                  <h5 class="font-base text-transform-none fw-medium lh-1"><a class="text-black" href="../pages/single-post.html">23 Top HTML Landing Page Templates 2019.</a></h5>
                  <p>Landing pages are the essential part of an online marketing campaign. A landing page is a page where a visitor comes to a ...</p><a class="text-dark fw-semi-bold" href="../pages/single-post.html">Read more<span class="fas fa-angle-right ms-1 text-900" data-fa-transform="down-2"></span></a>
                  <hr />
                  <div class="row justify-content-between align-items-center">
                    <div class="col pe-0">
                      <div class="d-flex"><a href="#!"><img class="rounded-circle" src="{{ asset('assets/img/transit/team/1.jpg') }}" width="40" height="40" alt="" /></a>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold ls-1"><a class="text-dark" href="#!">Kit Harington</a></h6>
                          <p class="mb-0">6 Feb, 2019</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto"><a class="mb-0 d-flex align-items-center d-block text-800" href="#!"><span class="me-2">86</span><img src="{{ asset('assets/img/transit/line-icons/comment-inactive.svg') }}" width="15" alt="" /></a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 h-100 mb-4"><a href="../pages/single-post.html"> <img class="img-fluid rounded-top" src="{{ asset('assets/img/transit/blogs/2.jpg') }}" alt="" /></a>
                <div class="p-3 border rounded-bottom border-top-0">
                  <h5 class="font-base text-transform-none fw-medium lh-1"><a class="text-black" href="../pages/single-post.html">Testing Working Robots at the Canadian Agency.</a></h5>
                  <p>Burgas was the first city in Bulgaria funded by the European Union on the program called “Regional development 2019 ...</p><a class="text-dark fw-semi-bold" href="../pages/single-post.html">Read more<span class="fas fa-angle-right ms-1 text-900" data-fa-transform="down-2"></span></a>
                  <hr />
                  <div class="row justify-content-between align-items-center">
                    <div class="col pe-0">
                      <div class="d-flex"><a href="#!"><img class="rounded-circle" src="{{ asset('assets/img/transit/team/2.jpg') }}" width="40" height="40" alt="" /></a>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold ls-1"><a class="text-dark" href="#!">Emilla Clarke</a></h6>
                          <p class="mb-0">4 Feb, 2019</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto"><a class="mb-0 d-flex align-items-center d-block text-800" href="#!"><span class="me-2">45</span><img src="{{ asset('assets/img/transit/line-icons/comment-inactive.svg') }}" width="15" alt="" /></a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 h-100 mb-4"><a href="../pages/single-post.html"> <img class="img-fluid rounded-top" src="{{ asset('assets/img/transit/blogs/3.jpg') }}" alt="" /></a>
                <div class="p-3 border rounded-bottom border-top-0">
                  <h5 class="font-base text-transform-none fw-medium lh-1"><a class="text-black" href="../pages/single-post.html">Why does every website need to be accessible?</a></h5>
                  <p>Maybe I should introduce myself first to give my words that bit of credibility a self-published article on the internet can have ...</p><a class="text-dark fw-semi-bold" href="../pages/single-post.html">Read more<span class="fas fa-angle-right ms-1 text-900" data-fa-transform="down-2"></span></a>
                  <hr />
                  <div class="row justify-content-between align-items-center">
                    <div class="col pe-0">
                      <div class="d-flex"><a href="#!"><img class="rounded-circle" src="{{ asset('assets/img/transit/team/7.jpg') }}" width="40" height="40" alt="" /></a>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold ls-1"><a class="text-dark" href="#!">Alfie Allen</a></h6>
                          <p class="mb-0">1 Feb, 2019</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto"><a class="mb-0 d-flex align-items-center d-block text-800" href="#!"><span class="me-2">73</span><img src="{{ asset('assets/img/transit/line-icons/comment-inactive.svg') }}" width="15" alt="" /></a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 h-100 mb-4 mb-md-0"><a href="../pages/single-post.html"> <img class="img-fluid rounded-top" src="{{ asset('assets/img/transit/blogs/4.jpg') }}" alt="" /></a>
                <div class="p-3 border rounded-bottom border-top-0">
                  <h5 class="font-base text-transform-none fw-medium lh-1"><a class="text-black" href="../pages/single-post.html">We Are Figuring Out How to Make Google Sweat?</a></h5>
                  <p>The Wild West era may be drawing to a close for tech corporations like Facebook and Google. New scrutiny from New York ...</p><a class="text-dark fw-semi-bold" href="../pages/single-post.html">Read more<span class="fas fa-angle-right ms-1 text-900" data-fa-transform="down-2"></span></a>
                  <hr />
                  <div class="row justify-content-between align-items-center">
                    <div class="col pe-0">
                      <div class="d-flex"><a href="#!"><img class="rounded-circle" src="{{ asset('assets/img/transit/team/4.jpg') }}" width="40" height="40" alt="" /></a>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold ls-1"><a class="text-dark" href="#!">Peter Parker</a></h6>
                          <p class="mb-0">25 Jan, 2019</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto"><a class="mb-0 d-flex align-items-center d-block text-800" href="#!"><span class="me-2">43</span><img src="{{ asset('assets/img/transit/line-icons/comment-inactive.svg') }}" width="15" alt="" /></a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 h-100 mb-4 mb-md-0"><a href="../pages/single-post.html"> <img class="img-fluid rounded-top" src="{{ asset('assets/img/transit/blogs/5.jpg') }}" alt="" /></a>
                <div class="p-3 border rounded-bottom border-top-0">
                  <h5 class="font-base text-transform-none fw-medium lh-1"><a class="text-black" href="../pages/single-post.html">I Don’t Care What Marie Kondo Thinks of My Space.</a></h5>
                  <p>Staring out from behind my laptop perched atop a small table in the middle of my studio apartment, I can show you where ...</p><a class="text-dark fw-semi-bold" href="../pages/single-post.html">Read more<span class="fas fa-angle-right ms-1 text-900" data-fa-transform="down-2"></span></a>
                  <hr />
                  <div class="row justify-content-between align-items-center">
                    <div class="col pe-0">
                      <div class="d-flex"><a href="#!"><img class="rounded-circle" src="{{ asset('assets/img/transit/team/5.jpg') }}" width="40" height="40" alt="" /></a>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold ls-1"><a class="text-dark" href="#!">John Bradley</a></h6>
                          <p class="mb-0">17 Jan, 2019</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto"><a class="mb-0 d-flex align-items-center d-block text-800" href="#!"><span class="me-2">13</span><img src="{{ asset('assets/img/transit/line-icons/comment-inactive.svg') }}" width="15" alt="" /></a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 h-100"><a href="../pages/single-post.html"> <img class="img-fluid rounded-top" src="{{ asset('assets/img/transit/blogs/6.jpg') }}" alt="" /></a>
                <div class="p-3 border rounded-bottom border-top-0">
                  <h5 class="font-base text-transform-none fw-medium lh-1"><a class="text-black" href="../pages/single-post.html">What Your Microbiome Really Needs Is Fiber!</a></h5>
                  <p>In recent years, we’ve begun to learn that most everything we eat — from probiotic yogurt to a serving of asparagus to a pork ...</p><a class="text-dark fw-semi-bold" href="../pages/single-post.html">Read more<span class="fas fa-angle-right ms-1 text-900" data-fa-transform="down-2"></span></a>
                  <hr />
                  <div class="row justify-content-between align-items-center">
                    <div class="col pe-0">
                      <div class="d-flex"><a href="#!"><img class="rounded-circle" src="{{ asset('assets/img/transit/team/6.jpg') }}" width="40" height="40" alt="" /></a>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold ls-1"><a class="text-dark" href="#!">Peter Jackson</a></h6>
                          <p class="mb-0">1 Jan, 2019</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto"><a class="mb-0 d-flex align-items-center d-block text-800" href="#!"><span class="me-2">13</span><img src="{{ asset('assets/img/transit/line-icons/comment-inactive.svg') }}" width="15" alt="" /></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center"><a class="btn btn-sm btn-outline-dark hvr-sweep-top mt-5" href="#!">Load More</a></div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

@endsection
