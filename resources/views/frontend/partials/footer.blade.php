        <!-- Main Footer -->
        <footer class="sticky-stop main-footer normal-padding">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="widget-content">
                                    <div class="logo">
                                        <a href="/"><img id="fLogo" src="{{asset('assets/images/ihrhs.png')}}" alt="" /></a>
                                    </div>
                                    <div class="text"> We have been infinitum carrying out the work in the area of manpower recruitment. 
                    Our Organization works with the dream that commitment within the work and services. </div>
                    <!-- 
                                    <ul class="social-links clearfix">
                                        <li><a href="https://www.facebook.com/ihrhs/" target="_blank"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-xl-2 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <div class="widget-content">
                                    <h6>Explore</h6>
                                    <div class="row clearfix">
                                        <div class="col-md-12 col-sm-12">
                                            <ul>
                                            <li>
                                                <a href="{{url('/about-us')}}">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/client')}}">Clients</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/contact-us')}}">Contact Us</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/service-agreement')}}">Agreement</a>
                                                </li>

                                                
                                            </ul>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget info-widget">
                                <div class="widget-content">
                                    <h6>Contact</h6>
                                    <ul class="contact-info">
                                        <li class="address"><span class="icon flaticon-pin-1"></span> Sukedhara, Katmnandu Nepal</li>
                                        <li><span class="icon flaticon-call"></span><a href="tel:+977 014374982">+977 01-4374982 </a></br>
                                        
                                                                                <li><span class="icon flaticon-email-2"></span>
                                        <a href="mailto:info@aurum.com.np">info@aurum.com.np</a></br>
                                        
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <div class="widget-content">
                                    <h6>Business Partner Qatar</h6>
                                    <div class="row clearfix">
                                        <div class="col-md-12 col-sm-12">
                                            <ul>
                                            <li>
                                                    <a >Qatar Center for Career Development</a>
                                                </li>
                                                
                                                <li>
                                                    <a >Gulf Asia Recruitment</a>
                                                </li>
                        
                                            </ul>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                                 </div> Column-->

                    </div>

                </div>
            </div>


            <div class="footer-bottom">
                <div class="auto-container associated">
                    <h6>Associated Partners</h6>
                    <div class="row">
                        <p>
                        Croatia | Romania | India | Philippines | Pakistan | Bangladesh | Sri Lanka | Bhutan | Indonesia | Vietnam | Myanmar | Thailand | Kenya | Ghana | Uganda | Nigeria | Morocco | Tunisia | Syria | Jordan | Ukraine | Kuwait | UAE | Bahrain | KSA | Oman | UK | USA | Germany
                        </p>
                    </div>
                </div>

            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container inner">
                    <div class="clearfix">
                        <div class="copyright">&copy; copyright 2021  | All Rights Reserved by <a href="{{url('/')}}">AURUM COUNSULTING</a></div>
                    </div>
                </div>
            </div>

        </footer>

    </div>
    <!--End pagewrapper-->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>



    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/TweenMax.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('assets/js/owl.js')}}"></script>
    <script src="{{asset('assets/js/mixitup.js')}}"></script>
    <script src="{{asset('assets/js/validate.js')}}"></script>
    <script src="{{asset('assets/js/appear.js')}}"></script>
    <script src="{{asset('assets/js/wow.js')}}"></script>
    <script src="{{asset('assets/js/jQuery.style.switcher.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/jarallax.min.js')}}"></script>
    <script src="{{asset('assets/js/custom-script.js')}}"></script>

    @yield('js')

</body>


</html>