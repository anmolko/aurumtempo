@extends('frontend.partials.master')

@section('content')
    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url('/assets/images/background/image-7.jpg');"></div>
        <div class="shape-2"></div>
        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>About Us</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->


    <section class="featured-section featured-section__about-two">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image-box"><img src="{{asset('assets/images/resource/featured-image-7.jpg')}}" alt=""></div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="section-title">
                            <h2>About AURUM<span class="dot">.</span></h2>
                            <div class="lower-text">
                                Aurum Consulting Pvt. Ltd. Specializing in employment agency based in Kathmandu, capital of Nepal. 
                                Aurum Consulting Pvt. Ltd. duly licensed under the Labor Ministry, Government of Nepal (Lic no. 92/053/054)
                                was established with an objective of providing competent manpower to overseas clients and working towards the 
                                upliftment of the national economy. <br>
                                
                                Aurum Consulting Pvt. Ltd. has earned its enviable reputation by being proactive and committed to developing strong 
                                client/candidate relationships and providing a relevant, objective, and professional service. We are proud of our 
                                achievement in the past and we would like to live up to the prestige we have attained. Our commitment to working with 
                                you to be part of your recruitment solutions.
                                <br>
                                We are proud to claim that we have a company managed by well- qualified and a dynamic team of personnel, with 
                                long standing experience and expertise in recruitment. <br>
                                 Our Managing Director- Mr. DB Thanet has valuable hands-on experience of recruitment of manpower who firmly believes 
                                 in relationships built on trust, we are not only a agency but a complete HR solution. we pride ourselves on finding 
                                 our applicants full time positions and our clients, that all important team member in a cost effective and efficient way.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Mission Vision Objective Section-->
    <section class="agency-section agency-section__dark" style=" background: var(--thm-blue-secondary) url('/assets/images/background/pattern-1.png') center top repeat;">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2> WHY AURUM COUNSULTING  ? <span class="dot">.</span></h2> <hr>
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
                                        <div class="text-white">
                                            AURUM COUNSULTING is devoted to all clients in supporting recruitment for manpower.
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
                                        <div class="text-white">
                                            The main objective of AURUM COUNSULTING  is to offer employment and prospect us with in the vast labor force
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
                                        <div class="text-white">
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
                        <div class="text-white">We aim to reinforce a better relationships between our nations
                            while enhancing the national development system with your cooperation in the delivery
                            of needed manpower strength to your country.</div>
                        <div class="featured-block-two clearfix">
                            <div class="image"><img src="{{asset('assets/images/resource/featured-image-6.jpg')}}" alt=""></div>
                            <div class="text-white">
                                <ul>
                                    <li> High level planning and conseling </li>
                                    <li> Vast & agile digital talent pool.</li>
                                    <li> Aid and improve applicants financial standard.</li>
                                    <li> Constant contact with overseas employee.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Mission Vision Goal Section-->
    
    <hr>

    
    <!-- /.Message from Chairman -->
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
                            <div class="text-1">
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
                        <div class="featured-block clearfix" style="background: #ffffff url('assets/images/background/pattern-2.png') left top repeat; box-shadow: 0px 10px 30px 0px rgb(0 0 0 / 5%);padding: 20px 40px;">
                            <div class="text-1">

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


    <section class="about-me-one" style=" background: var(--thm-blue-secondary) url('/assets/images/background/pattern-1.png') center top repeat;">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>Message from Managing Director<span class="dot">.</span></h2>
                        </div>
                        <div class="featured-block clearfix">
                            <div class="text-white">
                                In recent times the Middle East and Gulf countries recognized Nepali as the most hardworking, honest,
                                and sincere workers amongst the workers of many countries of the world. The tremendous demand of workers
                                from the employers of the world, the ever-increasing demand of Nepal labor force from other countries of the
                                world indicates the proficiency, ability, and hardworking qualities of Nepali Workers.
                                <br>
                                The other best qualities of the Nepali workforce, for which they are preferred by the employers
                                are their politeness in their dealing with employers and host Nations and non-indulgence in political
                                activities of the region and any other activities that are detrimental to the interest of the host Nation.

                            </div>
                        </div>
                    </div>
                </div>

                <!--Right Column-->
                <div class="right-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="featured-block clearfix" style="background-color: #062248;box-shadow: 0px 10px 30px 0px rgb(0 0 0 / 5%);color: #ffffff;padding: 20px 40px;">
                            <div class="text">
                                We at AURUM COUNSULTING Hope to ensure that a happy and mutually
                                benefiting relationship does take off and remains smooth throughout. We always endeavor
                                to ensure that only the best people from Nepal are recruited to those countries that need their services.
                                <br/><br/>
                                Sincerely yours,<br/>
                                <h4> DB Thanet (Dilip)
                                    <br> Managing Director. </h4>
                            </div>
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
                <div class="icon-box">
                    <span class="flaticon-digital-marketing"></span>
                </div>
                <h2>Get started with us. <span> Drop a message and we will get back to you.</span></h2>
            </div>
        </div>
        <br/>
        <a class="theme-btn btn-style-one" href="/contact-us">
            <i class="btn-curve"></i>
            <span class="btn-title">Contact Us</span>
        </a>
    </section>
    <!-- End Funfacts Section -->

@endsection
