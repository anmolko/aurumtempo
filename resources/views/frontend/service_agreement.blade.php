@extends('frontend.partials.master')
@section('css')
<style>

@media only screen and (min-width: 1000px) {

    .sticky-sidebar{
    padding: 0.5ex;
    width: 400px;
    height:720px;
    background-color: transparent;
    color: #fff;
    font-size: 2em;
    border-radius: 0.5ex;

}
.sticky-sidebar.stick {
    position:fixed;
     /* position: -webkit-sticky; */
    /*top: 80px!important;*/
    z-index: 10;
    border-radius: 0 0 0.5em 0.5em;
    right: 75px;
}
}
</style>
@endsection
@section('content')

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url({{asset('assets/images/background/image-7.jpg')}});"></div>
        <div class="shape-2"></div>
        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Service Agreement</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Service Agreement</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="service-details" id="service">
                        <div class="text-content">
                            <h3>Service Agreement</h3>
                            <p>To avoid any authority claims/dispute, this manpower agency would request both company and
                                the applicants to sign a Foreign Service Agreement. This Agreement is in accordance with
                                laws in the country of source and employment. Additionally, this document may include a
                                particular statement that will be mutually agreed in accordance to the legal structure of
                                the country of source or employment. In the area of human resource recruitment, this we
                                generally provide the following professional service to companies and manpower recruitment
                                agencies abroad : </p>
                            <div class="featured">
                                <div class="row clearfix">
                                    <div class="text-col col-md-6 col-sm-12">
                                        <div class="inner">
                                            <ul>
                                                <li>
                                                Provision of resumes from our screening process.
                                                </li>
                                                <li>
                                                Resumes from the candidate and send to the companies upon request.
                                                </li>
                                                <li>
                                                Design and positioning of advertisements in leading newspapers.
                                                </li>
                                                <li>
                                                Acceptance and short-listing of applicants.
                                                </li>
                                                <li>
                                                Calling applicants for interviews.
                                                </li>
                                                <li>
                                                Facilitate the interview procedure.
                                                </li>


                                            </ul>
                                        </div>
                                    </div>

                                    <div class="text-col col-md-6 col-sm-12">
                                        <div class="inner">
                                            <ul>
                                                <li>
                                                Testing and security authorization.
                                                </li>
                                                <li>
                                                Verification and confirmation of certificates.
                                                </li>
                                                <li>
                                                Medical examination by official Medical Officers.
                                                </li>
                                                <li>
                                                Visa support by particular embassies.
                                                </li>
                                                <li>
                                                Ticketing and reservation of passage.
                                                </li>
                                                <li>
                                                Pre-departure orientation and briefing.
                                                </li>
                                                <li>
                                                Training
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <p>AURUM COUNSULTING has built its own comprehensive
                                and full fledged training orientation organized by our senior skilled personnel. Classroom
                                lectures, role-play, work list and task & procedures compliments our guidance for an elite
                                candidate. As an added skill we provide the candidate experience on the fundamentals of
                                First Aid, Fire Fighting and Self-Defensed. Industrialized and business security training is
                                also carried out to deal with client’s precise requisition.
                            </p>

                        </div>
                    </div>

                    <div class="service-details" id="clearance" >
                        <div class="text-content">
                            <h3>CLEARANCE</h3>
                            <div class="featured">
                                <div class="row clearfix">
                                    <div class="image-col col-md-4 col-sm-12">
                                            <div class="image">
                                                <i class="fad fa-clipboard-list-check"></i>
                                                <img src="{{asset('assets/images/icons/clipboard.png')}}" alt="clearance">
                                            </div>
                                    </div>
                                    <div class="text-col col-md-8 col-sm-12">
                                        <p class="text-justify">Our company takes serious steps in sorting the appropriate manpower
                                            and confirmation on their records before deploying them to country
                                            of employment. Also, our manpower agency has competent employees to
                                            complete the documentation and applicable paper works for authorization
                                            from Ministry of Labour based on the hiring country's Labour Law. This
                                            procedure provides assurance in manpower hiring.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-details" id="require" >
                        <div class="text-content">
                            <h3>What we require from you</h3>
                            <div class="featured">
                                <div class="row clearfix">
                                    <div class="text-col col-md-12 col-sm-12">
                                        <p class="text-justify">We require following documents from you to grant recruitment authority from Hiring Country:
                                        </p>
                                        <div class="row clearfix">
                                            <div class="text-col col-md-6 col-sm-12">
                                                <div class="inner">
                                                    <ul>
                                                        <li>
                                                        DEMAND LETTER
                                                        </li>
                                                        <li>
                                                        POWER OF ATTORNEY
                                                        </li>
                                                        <li>
                                                        AGENCY AGREEMENT
                                                        </li>


                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="text-col col-md-6 col-sm-12">
                                                <div class="inner">
                                                    <ul>

                                                        <li>
                                                        GUARANTEE LETTER
                                                        </li>
                                                        <li>
                                                        EMPLOYMENT AGREEMENT
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-details" id="medical">
                        <div class="text-content">
                            <h3>Medical Examination</h3>
                            <p>Examination AURUM COUNSULTING 
                                assures that every applicant undertake a medical health examination that
                                complies the health necessity and physical health standards regulated by
                                each company or respective country of employment. Experienced and highly
                                qualified doctors would carry out this check. Their printed reports would
                                be sent to the company in transparency. The selected manpower will be
                                handle efficiently  with high confidentiality.  </p>
                        </div>
                    </div>


                </div>

                <div id="sticky-anchor"></div>
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 sticky-sidebar">
                    <aside class="sidebar blog-sidebar">

                        <div class="sidebar-widget services">
                            <div class="widget-inner">
                                <div class="sidebar-title">
                                    <h4>Related Information</h4>
                                </div>
                                <ul>
                                    <li id="service_two"><a href="#service">Service Aggrement </a></li>
                                    <li id="clearance_two"><a href="#clearance">Clearance </a></li>
                                    <li id="require_two"><a href="#require">What we require from you</a></li>
                                    <li id="medical_two"><a href="#medical">Medical Examination</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-widget call-up">
                            <div class="widget-inner">
                                <div class="sidebar-title">
                                    <h4>Want to Know Call Us for Info</h4>
                                </div>
                                <div class="phone"><a href="tel:+977 01-4374982"><span
                                            class="icon flaticon-call"></span>+977 01-4374982</a></div>
                            </div>
                        </div>


                    </aside>
                </div>

            </div>
        </div>
    </div>



@endsection
@section('js')
    <script>

        function sticky_relocate() {
            var window_top = $(window).scrollTop();
            var footer_top = $(".sticky-stop").offset().top;
            var div_top = $('#sticky-anchor').offset().top;
            var div_height = $(".sticky-sidebar").height();

            var padding = 80;  // tweak here or get from margins etc

            if (window_top + div_height > footer_top - padding)
                $('.sticky-sidebar').css({top: (window_top + div_height - footer_top + padding) * -1})
            else if (window_top > div_top) {
                $('.sticky-sidebar').addClass('stick');
                $('.sticky-sidebar').css({top: 120})
            } else {
                $('.sticky-sidebar').removeClass('stick');
                $('.sticky-sidebar').css({top: 0})
            }
        }
        $(function () {
            $(window).scroll(sticky_relocate);
            sticky_relocate();
        });


        function add_class_scroll() {
            var window_top = $(window).scrollTop();
            var footer_top = $(".sticky-stop").offset().top;
            var div_service = $('#service').offset().top - 180;
            var div_clearance = $('#clearance').offset().top - 180;
            var div_require = $('#require').offset().top - 180;
            var div_medical = $('#medical').offset().top - 180;

            if (window_top > div_service) {
                $('.sticky-sidebar ul li#service_two').addClass('active');
                $('.sticky-sidebar ul li#clearance_two').removeClass('active');
                $('.sticky-sidebar ul li#medical_two').removeClass('active');


            } else {
                $('.sticky-sidebar ul li#service_two').removeClass('active');
            }

            if (window_top > div_clearance) {
                $('.sticky-sidebar ul li#service_two').removeClass('active');
                $('.sticky-sidebar ul li#require_two').removeClass('active');
                $('.sticky-sidebar ul li#medical_two').removeClass('active');

                $('.sticky-sidebar ul li#clearance_two').addClass('active');
            } else {
                $('.sticky-sidebar ul li#clearance_two').removeClass('active');
            }

            if (window_top > div_require) {
                $('.sticky-sidebar ul li#clearance_two').removeClass('active');
                $('.sticky-sidebar ul li#require_two').addClass('active');
            } else {
                $('.sticky-sidebar ul li#require_two').removeClass('active');
            }


            if (window_top > div_medical) {
                $('.sticky-sidebar ul li#require_two').removeClass('active');
                $('.sticky-sidebar ul li#medical_two').addClass('active');
            } else {
                $('.sticky-sidebar ul li#medical_two').removeClass('active');
            }
        }
        $(function () {
            $(window).scroll(add_class_scroll);
            add_class_scroll();
        });
        $(document).ready(function(){
            $('.sticky-sidebar ul li').click(function(){
                $('li').removeClass("active");

                let a = $(this).find('a').attr("href");
                let ab = a.substring(1);

                $('html, body').animate({
                    scrollTop: $('#'+ab).offset().top - 130
                }, 'slow');

                $(this).addClass("active");
            });
        });
    </script>

@endsection
