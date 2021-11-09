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
                    <h1>Office Management</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Office Management</li>
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
                    <div class="service-details">
                        <div class="text-content">
                            <h3>Office Management</h3>
                            <div class="main-image image">
                                <img src="{{asset('assets/images/category/officemgm.jpg')}}" alt="Office Management">
                            </div>
                            <div class="featured">
                                <div class="row clearfix">
                                    <div class="text-col col-md-6 col-sm-12">
                                    <div class="inner">
                                            <h4> Related categories</h4>
                                            <ul>
                                                <li>
                                                    Office Manager, Receptionist, Admin
                                                </li>
                                                <li>
                                                    Accountant, Marketing Officers
                                                </li>
                                                <li>
                                                    Cashier, Storekeeper
                                                </li>
                                                <li>
                                                    Purchaser, Clerks
                                                </li>
                                                <li>
                                                    Data Entry, Typists
                                                </li>
                                                <li>
                                                    Document Controller
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

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
                                    <h4>All Services</h4>
                                </div>
                                <ul>
                                    <li class="active"><a href="{{url('/office')}}">Office Management </a></li>
                                    <li><a href="{{url('/hospitality')}}">Hospitality Management</a></li>
                                    <li><a href="{{url('/construction')}}">Construction </a></li>
                                    <li><a href="{{url('/healthcare')}}">Healthcare</a></li>
                                    <li><a href="{{url('/security')}}">Security & Guarding</a></li>
                                    <li><a href="{{url('/agriculture')}}">Agriculture & Farming </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-widget call-up">
                            <div class="widget-inner">
                                <div class="sidebar-title">
                                    <h4>Want to Know Call Us for Info</h4>
                                </div>
                                 <div class="phone"><a href="tel:+977 01-4374982 "><span
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
    </script>

@endsection
