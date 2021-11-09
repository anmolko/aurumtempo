@extends('frontend.partials.master')
@section('content')

    <!-- Banner Section -->
    <section class="banner-section banner-one">
        <div class="left-based-text">
            <div class="base-inner">
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="https://www.facebook.com/Aurum-Consulting-101160085605887"><span>Facebook</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="banner-carousel owl-theme owl-carousel">
            <div class="slide-item">
                <div class="image-layer" style="background-image: url('/assets/images/main-slider/1.jpg');"></div>
                <div class="left-top-line"></div>
                <div class="right-top-curve"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="sub-title">Welcome to AURUM COUNSULTING</div>
                                <h1>It could <br>be you</h1>
                                <div class="link-box">
                                    <a class="theme-btn btn-style-one" href="/about-us">
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Discover More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image: url('assets/images/main-slider/2.jpg');"></div>
                <div class="left-top-line"></div>
                <div class="right-top-curve"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="sub-title">Leading HR at Nepal</div>
                                <h1>Consistent <br>Reliable Services</h1>
                                <div class="link-box">
                                    <a class="theme-btn btn-style-one" href="/contact-us">
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Reach Out</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Banner Section -->

    <!--Services Section-->
    <section class="services-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title Block-->
                <div class="title-block col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="section-title">
                            <h2>Services we provide<span class="dot">.</span></h2>
                            <div class="lower-text">
                                We have the dedication & consistency to provide reliable
                                manpower supply & services to any establishment or clients
                                </div>
                        </div>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                     data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="fa fa-utensils"></span></div>
                        <h6><a href="/hospitality">Hospitality <br>Management</a></h6>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                     data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="fa fa-tools"></span></div>
                        <h6><a href="/construction">Construction</a></h6>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                     data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="fa fa-heartbeat"></span></div>
                        <h6><a href="/healthcare">Healthcare</a></h6>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                     data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="fa fa-user-shield"></span></div>
                        <h6><a href="/security">Security & <br>Guarding</a></h6>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                     data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="fa fa-mail-bulk"></span></div>
                        <h6><a href="/office">Office <br>Management</a></h6>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                     data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="fa fa-tractor"></span></div>
                        <h6><a href="/agriculture">Agriculture & <br>Farming</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--About Section-->
    <section class="about-section about-section__dark">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                                src="{{asset('assets/images/resource/featured-image-1.jpg')}}" alt=""></div>
                        <div class="image-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms"><img
                                src="{{asset('assets/images/resource/featured-image-2.jpg')}}" alt=""></div>
                    </div>
                </div>
                <!--Text Column-->
                <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>Know more about <br>AURUM <span class="dot">.</span></h2>
                            <div class="lower-text">
                                We establish right objective to link our valuable clients and candidates
                                with reliable services and equal opportunity.</div>
                        </div>
                        <div class="text-1">
                            <p>
                                We have the dedication & consistency to provide reliable manpower supply & services to any establishment,
                                hence a proven track record in establishing ourselves as a prime organization in Qatar.
                                It is our great pride & responsibility to assure a credible performance with in the services we offer.
                            </p>
                        </div>
                        <div class="text-1 clearfix">
                            <p>
                                We are proud to claim that we have a company managed by well- qualified and a dynamic team of
                                personnel, with long standing experience and expertise in recruitment.
                            </p>
                        </div>
                        <div class="link-box">
                            <a class="theme-btn btn-style-one" href="/about-us">
                                <i class="btn-curve"></i>
                                <span class="btn-title">More About Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     <section class="about-me-one" >
        <div class="auto-container">
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="section-title">
                            <h2>Message from Chairman<span class="dot">.</span></h2>
                        </div>
                        <div class="featured-block clearfix" >
                            <div class="text text-blue">

                                We are pleased to introduced our company as a <b> AURUM COUNSULTING PVT. LTD.</b>Kathmandu, Nepal .
                                We are an authorized company under the Government of Qatar to operate our Human Resource  Services. 
                                We extend our humble services in providing credible supplies of manpower in interested parties and we would be
                                readily available in assisting you further. We strive in creating a sustainable environment for a long term commitment.
                                We hope that our prestige recognition from many establishment would render to your confidence and satisfaction.


                            </div>
                        </div>
                    </div>
                </div>

                <!--Right Column-->
                <div class="right-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="featured-block clearfix" style="background: #ffffff url('assets/images/background/pattern-2.png') left top repeat; box-shadow: 0px 10px 30px 0px rgb(0 0 0 / 5%);    color: var(--thm-text);padding: 20px 40px;">
                            <div class="text text-blue">

                                  <br>
                               Our focus places priority on healthy,competent, skillful, honest and professional manpower via our
                               potent screening and selection criteria. Our service encompasses Hospitality Management, Construction &
                               Engineering, Facilities Management, Heavy Industries & Manufacturing, Oil & Gas, Information & Technology 
                               and HealthCare Industries.The company has been successful in pursuing and developing valuable business relationship
                               with highly reputed overseas organizations. Through both our national and international network, we look forward to 
                               render our services in your future endeavours.
                                <br/><br/>
                                Sincerely yours,<br/>
                                <h4> Dr. sc Joso Vukson
                                <br> Chairman </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Message Chairman  -->
    <br>


    <!-- /.Message from director -->
    <section class="about-me-one" style=" background: var(--thm-blue-secondary) url('/assets/images/background/pattern-1.png') center top repeat;">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>Message from Managing Director<span class="dot">.</span></h2>
                        </div>
                        <div class="featured-block clearfix" >
                            <div class="text-white">
                                We are pleased to introduced our company as a <b> AURUM COUNSULTING PVT. LTD.</b>in Kathmandu Nepal. 
                                We are an authorized company under the Government of Nepal to operate our Human Resource  Services.
                                We extend our humble services in providing credible supplies of manpower in interested parties and we would be readily
                                available in assisting you further. We strive in creating a sustainable environment for a long term commitment. 
                                We hope that our prestige recognition from many establishment would render to your confidence and satisfaction.

                            </div>
                        </div>
                    </div>
                </div>

                <!--Right Column-->
                <div class="right-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="featured-block clearfix" style="background-color: #062248;box-shadow: 0px 10px 30px 0px rgb(0 0 0 / 5%);color: #ffffff;padding: 20px 40px;">
                            <div class="text">
                                Other best qualities of the Nepali workforce, for which they are preferred by the
                                employers are their politeness in their dealing with employers and host Nations and non-indulgence
                                in political activities of the region and any other activities that are detrimental to the interest of the host Nation.
                                <br/><br/>
                                Sincerely yours,<br/>
                              DB Thanet (Dilip) <br>
                                Managing Director
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Message from director -->

    <!--We Choose us Section-->
    <section class="we-do-section we-do-section__dark">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="faq-box">
                            <ul class="accordion-box accordion-box__dark clearfix">
                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active"><span class="count">1.</span>
                                        Specific expertise services
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">
                                                Our management team includes hand picked specialists from various specific sectors
                                                to work in close partnership with you.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count">2.</span>
                                        Knowledge
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                We have deep industry expertise in the sectors where we operate.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count">3.</span>
                                        Consiltative</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                We take a consultative approach to devising the right
                                                strategy for you.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count">4.</span>
                                        Thorough
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                We go to the extra mile while crafting plans and strategies
                                                with you to get the right people on board.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count">5.</span>
                                        Honest
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                We deliver a good, honest service to our clients,
                                                backed up by experince and expertise.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="section-title">
                            <h2>Why choose AURUM COUNSULTING ? <span class="dot">.</span>  </h2>
                        </div>
                        <div class="faq-box clearfix">
                            <ul class="accordion-box accordion-box__dark clearfix">
                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active"><span class="count">6.</span>
                                        Minimize Risk</div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">We reduce the risk of making bad choices
                                                when it comes to candidate selection.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count">7.</span>
                                        Save your time
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                We save your time and get your new hires delivering
                                                results for you sooer rather than later.</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.about-me-one -->

    <!--Mission Vision Objective Section-->
    <section class="agency-section agency-section__dark">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>Leading Human Resource  <br> Service Provider<span class="dot">.</span></h2>
                        </div>

                        <!--Default Tabs-->
                        <div class="default-tabs tabs-box">

                            <!--Tab Btns-->
                            <ul class="tab-btns tab-buttons clearfix">
                                <li data-tab="#tab-1" class="tab-btn active-btn"><span>Mission & Vision </span></li>
                                <li data-tab="#tab-2" class="tab-btn"><span>Objective</span></li>
                                <li data-tab="#tab-3" class="tab-btn"><span>Talent Pool</span></li>
                            </ul>

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab-->
                                <div class="tab active-tab" id="tab-1">
                                    <div class="content">
                                        <div class="text">
                                            AURUM is devoted to all clients in supporting recruitment for manpower.
                                            We provide planning, counseling and ideas to our clients in every aspect of the industry.
                                            We look forward in reaching its aim to take a recognized stand in the area of manpower and
                                            recruitment services abroad. In addition,it focuses a noble act to aid and improve financial
                                            standards of applicants and the nation via Corporate & Diplomatic ties.
                                        </div>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="tab-2">
                                    <div class="content">
                                        <div class="text">
                                            The main objective of AURUM is to offer employment and prospect us with in the vast labor force
                                            requirement and professional skills globally. We also try our best to keep in contact with employees
                                            sent overseas for jobs until their arrival home or in most cases, to other countries as well.
                                            The company makes sure the employees will be effectively inoculated and in the case of serious injuries or death,
                                            the employees or their families will be compensated by the insurance companies.
                                            </div>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="tab-3">
                                    <div class="content">
                                        <div class="text">
                                            We have an agile and vast digital talent pool that is carefully analysed
                                            and screened by our experts. Through IT and our Business Intelligence our
                                            task expedites your search for the right selection criteria.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="text">We aim to reinforce a better relationships between our nations
                        while enhancing the national development system with your cooperation in the delivery
                        of needed manpower strength to your country.</div>
                        <div class="featured-block-two clearfix">
                            <div class="image"><img src="{{asset('assets/images/resource/featured-image-6.jpg')}}" alt=""></div>
                            <div class="text">
                                <ul>
                                    <li>High level planning and conseling </li>
                                    <li>Vast & agile digital talent pool.</li>
                                    <li>Aid and improve applicants financial standard.</li>
                                    <li>Constant contact with overseas employee.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Mission Vision Goal Section-->

    <!-- Clients Section -->
    <section class="team-section team-section__dark">
        <div class="auto-container">
            <div class="section-title centered">
                <h2>Our Valued Clients<span class="dot">.</span></h2>
            </div>
        </div>
        <div class="carousel-box">
            <div class="team-carousel owl-theme owl-carousel">
                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="{{url('/client/qatar')}}"><img src="{{asset('assets/images/country/qatar.png')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="{{url('/client/qatar')}}" class="inner-title">22</a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="{{url('/client/qatar')}}">Qatar</a></h5>
                        </div>
                    </div>
                </div>
                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="{{url('/client/uae')}}"><img src="{{asset('assets/images/country/uae.png')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="{{url('/client/uae')}}" class="inner-title">15</a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="{{url('/client/uae')}}">UAE</a></h5>
                        </div>
                    </div>
                </div>
                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="{{url('/client/saudi')}}"><img src="{{asset('assets/images/country/saudi.png')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="{{url('/client/saudi')}}" class="inner-title">15</a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="{{url('/client/saudi')}}">Saudi Arabia</a></h5>
                        </div>
                    </div>
                </div>
                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="{{url('/client/kuwait')}}"><img src="{{asset('assets/images/country/kuwait.png')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="{{url('/client/kuwait')}}" class="inner-title">6</a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="{{url('/client/kuwait')}}">Kuwait</a></h5>
                        </div>
                    </div>
                </div>
                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="{{url('/client/baharain')}}"><img src="{{asset('assets/images/country/bahrain.png')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="{{url('/client/baharain')}}" class="inner-title">6</a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="{{url('/client/baharain')}}">Bahrain</a></h5>
                        </div>
                    </div>
                </div>

                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="{{url('/client/oman')}}"><img src="{{asset('assets/images/country/oman.png')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="{{url('/client/oman')}}" class="inner-title">7</a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="{{url('/client/oman')}}">Oman</a></h5>
                        </div>
                    </div>
                </div>

                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="{{url('/client/malaysia')}}"><img src="{{asset('assets/images/country/malaysia.png')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="{{url('/client/malaysia')}}" class="inner-title">15</a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="{{url('/client/malaysia')}}">Malaysia</a></h5>
                        </div>
                    </div>
                </div>
                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="{{url('/client/malta')}}"><img src="{{asset('assets/images/country/malta.png')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="{{url('/client/malta')}}" class="inner-title">8</a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="{{url('/client/malta')}}">Malta</a></h5>
                        </div>
                    </div>
                </div>

                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="{{url('/client/czech')}}"><img src="{{asset('assets/images/country/czech.png')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="{{url('/client/czech')}}" class="inner-title">4</a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="{{url('/client/czech')}}">Czech Republic</a></h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Parallax Section -->
    <section class="parallax-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
        <!-- <div class="image-layer" style="background-image: url(images/background/image-2.jpg);"></div> -->
        <img src="{{asset('assets/images/background/image-2.jpg')}}" alt="" class="jarallax-img">
        <div class="auto-container">
            <div class="content-box">
                <div class="icon-box"><span class="fa fa-file-alt"></span>
                </div>
                <h2>Want to get started with us? <span> View what we require from you.</span></h2>
            </div>
        </div>
        <br/>
        <a class="theme-btn btn-style-one" href="/service-agreement#require">
            <i class="btn-curve"></i>
            <span class="btn-title">View Details</span>
        </a>
    </section>
    <!-- End Funfacts Section -->

@endsection
