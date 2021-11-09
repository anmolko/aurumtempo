@extends('frontend.partials.master')

@section('content')
    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url('assets/images/background/image-7.jpg');"></div>
        <div class="shape-2"></div>
        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Contact Us</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Contact Section-->
    <section class="contact-section">
        <div class="auto-container">

            <div class="form-box">
                <div class="section-title">
                    <h2>Write Us a Message<span class="dot">.</span></h2>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <div class="default-form">
                    <form method="post" action="{{url('sendemail/send')}}" id="contact-form">
                    {{ csrf_field() }}
                        <div class="row clearfix">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <input type="text" name="name" value="" placeholder="Your Name" required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <input type="email" name="email" value="" placeholder="Email Address"
                                           required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <input type="text" name="phone_number" value="" placeholder="Phone Number" required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <input type="text" name="msg_subject" value="" placeholder="Subject" required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="field-inner">
                                    <textarea name="message" placeholder="Write Message" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <button class="theme-btn btn-style-one">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Send message</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
