@extends('frontend.partials.master')
@section('css')
    <style>

        .clients-list ul li{
            position: relative;
            line-height: 2.1em;
            margin-bottom: 12px;
            padding-left: 30px;
        }

    .clients-list ul li:before{
        content: "\f107";
        font-family: "Flaticon";
        position: absolute;
        left: 0;
        top: -1px;
        color: var(--thm-base);
        font-weight: 400;
        font-size: 18px;    }
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
                    <h1>Clients</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Clients</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->


    <!--Testimonials Section-->
    <section class="faqs-section" id="client_list">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="faq-block col-lg-6 col-md-12 col-sm-12">
                    <ul class="accordion-box clearfix">
                        <!--Block-->
                         
                        <li class="accordion block {{(isset($client_name) && $client_name=='oman') ? 'active-block' : ''}}">
                            <div class="acc-btn {{(isset($client_name) && $client_name=='oman') ? 'active-block' : ''}}"><span class="count">1.</span>
                                Croatia
                            </div>
                            <div class="acc-content" style="display:{{(isset($client_name) && $client_name=='oman') ? 'block' : ''}}">
                                <div class="content">
                                    <div class="clients-list clearfix">
                                        <div class="text">
                                            <ul>
                                                
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <!--Block-->
                         
                        <li class="accordion block {{(isset($client_name) && $client_name=='oman') ? 'active-block' : ''}}">
                            <div class="acc-btn {{(isset($client_name) && $client_name=='oman') ? 'active-block' : ''}}"><span class="count">2.</span>
                                Romania

                            </div>
                            <div class="acc-content" style="display:{{(isset($client_name) && $client_name=='oman') ? 'block' : ''}}">
                                <div class="content">
                                    <div class="clients-list clearfix">
                                        <div class="text">
                                            <ul>
                                                
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        
                        <!--Block-->
                        <li class="accordion block {{(isset($client_name) && $client_name=='qatar') ? 'active-block' : ''}}">
                            <div class="acc-btn {{(isset($client_name) && $client_name=='qatar') ? 'active' : ''}}"><span class="count">3.</span>
                                Qatar</div>
                            <div class="acc-content" style="display:{{(isset($client_name) && $client_name=='qatar') ? 'block' : ''}}">
                                <div class="content">
                                    <div class="clients-list clearfix">
                                        <div class="text">
                                            <ul>
                                              <li> Porto Holding </li>

<li>Al Siddiqi Holding  </li>

<li> Shail Holding Group </li>

<li> Qatar National Import & Export Co.WLL </li>

<li> Qatar Logistical Services S.P.C </li>

<li> SPAR Retails </li>

<li> Al Hattab Group </li>

<li>Al Attiya Motors </li>

<li> Abdullah Abdulghani & Bros. CO</li>

<li> Al Mana Group </li>

<li> Challenger Trading & Contracting</li>

<li>International Welding Rods Factory </li>

<li>Derwind Trading & Contracting Co.WLL</li>

<li> Horses Group Co.WLL </li>

<li> FastWay Delivery Services </li>

<li> Afya Poultry Factory </li>
<li> Metro Palace Restaurant </li>

<li> Al-Refa Al Gharbi Trading & Contracting </li>

<li> Royal Food Trading WLL </li>

<li> Zaman Al Khair Café & Restaurant </li>

<li> Qaryeh Zaman Alkhair Restaurant & Cafe </li>

<li> Al Ikhtyaar German For Windows & Doors WLL </li>

<li> Doha Sandwich Panels Factory </li>

<li> Professional Aluminum Company</li>

<li> Al Ghanim Fencing Factory </li>

<li> 2022 Hypermarket </li>

<li> Pure Mart Hypermarket</li>

<li> Brick Stone Trading & Contracting </li>

<li> Professional Pools</li>

<li> Al Noor Plastics Factory
 </li>
<li> Bleue Qatar </li>

<li> Ayamara Culinary </li>

<li> Elegant Closets </li>

<li> Ideal Ladies Tailor </li>

<li> Rose Bakery & Sweet </li>

<li> Safire </li>

<li> Trans Ocean Trading & Contracting </li>

<li> Eden Fresh Poultry </li>  
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block {{(isset($client_name) && $client_name=='oman') ? 'active-block' : ''}}">
                            <div class="acc-btn {{(isset($client_name) && $client_name=='oman') ? 'active-block' : ''}}"><span class="count">4.</span>
                                Oman
                            </div>
                            <div class="acc-content" style="display:{{(isset($client_name) && $client_name=='oman') ? 'block' : ''}}">
                                <div class="content">
                                    <div class="clients-list clearfix">
                                        <div class="text">
                                            <ul>
                                                <li>Oman Flour Mills Co Saog</li>
                                                <li>Sam Building Contracting</li>
                                                <li>Vision Engineering Consultants</li>
                                                <li>Starcare First Medical Center</li>
                                                <li>YAS Medical Centre</li>
                                                <li>Al Baraka Oilfield Services</li>
                                                <li>Arabian Industries</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block {{(isset($client_name) && $client_name=='saudi') ? 'active-block' : ''}}">
                            <div class="acc-btn {{(isset($client_name) && $client_name=='saudi') ? 'active-block' : ''}}"><span class="count">5.</span>
                                Saudi Arabia</div>
                            <div class="acc-content" style="display:{{(isset($client_name) && $client_name=='saudi') ? 'block' : ''}}">
                                <div class="content">
                                    <div class="clients-list clearfix">
                                        <div class="text">
                                            <ul>
                                                <li>Tania Bottled Water Company</li>
                                                <li>Al Alwani Memoni Dates factory</li>
                                                <li>Mahmood Saeed Collective Company</li>
                                                <li>Yazeed Al Rajhi Brothers Holding Co</li>
                                                <li>Alrabiah Consultants and Engineering</li>
                                                <li>Saudi Manpower Solutions Co</li>
                                                <li>Jaddarah Workforce Company</li>
                                                <li>National Aquaculture Group</li>
                                                <li>Alesayi Development Company</li>
                                                <li>Abdullah Hashim Co. Ltd</li>
                                                <li>Jacko Gases Company</li>
                                                <li>Balsharaf Group</li>
                                                <li>Forsan Foods</li>
                                                <li>Herfy Foods</li>
                                                <li>Basamh Group</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block {{(isset($client_name) && $client_name=='kuwait') ? 'active-block' : ''}}">
                            <div class="acc-btn {{(isset($client_name) && $client_name=='kuwait') ? 'active-block' : ''}}"><span class="count">6.</span>
                                Kuwait</div>
                            <div class="acc-content" style="display:{{(isset($client_name) && $client_name=='kuwait') ? 'block' : ''}}">
                                <div class="content">
                                    <div class="clients-list clearfix">
                                        <div class="text">
                                            <ul>
                                                <li>The Ahmadiah Group</li>
                                                <li>MNA International Group</li>
                                                <li>Al Hani Group</li>
                                                <li>M.A.G CONSTRUCTION</li>
                                                <li>Amana Contracting & Steel Buildings</li>
                                                <li>Alamiah Building Company</li>
                                                <li> Al Ruwad United Group </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block {{(isset($client_name) && $client_name=='baharain') ? 'active-block' : ''}}">
                            <div class="acc-btn {{(isset($client_name) && $client_name=='baharain') ? 'active-block' : ''}}"><span class="count">7.</span>
                                Bahrain</div>
                            <div class="acc-content" style="display:{{(isset($client_name) && $client_name=='baharain') ? 'block' : ''}}">
                                <div class="content">
                                    <div class="clients-list clearfix">
                                        <div class="text">
                                            <ul>
                                                <li>Bahrain Motors Company</li>
                                                <li>Bahrain Foundation Construction</li>
                                                <li>Kooheji Contractor</li>
                                                <li>Aviation Labour Group</li>
                                                <li>Alkooheji Petroglobe</li>
                                                <li>Clarendon Parker</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="faq-block col-lg-6 col-md-12 col-sm-12">
                    <ul class="accordion-box clearfix">
                        <!--Block-->
                        <li class="accordion block {{(isset($client_name) && $client_name=='uae') ? 'active-block' : ''}}">
                            <div class="acc-btn {{(isset($client_name) && $client_name=='uae') ? 'active-block' : ''}}"><span class="count">8.</span>
                                UAE</div>
                            <div class="acc-content" style="display:{{(isset($client_name) && $client_name=='uae') ? 'block' : ''}}">
                                <div class="content">
                                    <div class="clients-list clearfix">
                                        <div class="text">
                                            <ul>
                                                <li>Al Raseef Contracting</li>
                                                <li>Al Hussain General Contracting</li>
                                                <li>Alam Group of Companies</li>
                                                <li>Rak Security Company</li>
                                                <li>A.j Security and Safety Consultant</li>
                                                <li>Trust Security Services</li>
                                                <li>ILF Consulting Engineers</li>
                                                <li>Royal International Construction</li>
                                                <li>Transpo Group</li>
                                                <li>Bright Star Construction Materials</li>
                                                <li>Power Group</li>
                                                <li>Mab Facilities Management</li>
                                                <li>EFS Facilities Services</li>
                                                <li>Etisalat Facilities Management</li>
                                                <li>EDM Commercial Services</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block {{(isset($client_name) && $client_name=='malaysia') ? 'active-block' : ''}}">
                            <div class="acc-btn {{(isset($client_name) && $client_name=='malaysia') ? 'active-block' : ''}}"><span class="count">9.</span>
                                Malaysia</div>
                            <div class="acc-content" style="display:{{(isset($client_name) && $client_name=='malaysia') ? 'block' : ''}}">
                                <div class="content">
                                    <div class="clients-list clearfix">
                                        <div class="text">
                                            <ul>
                                                <li>Kian Joo Can factory</li>
                                                <li>A one Food & Beverages</li>
                                                <li>Waqash Resources</li>
                                                <li>Agung Ahad Manufacturing</li>
                                                <li>Taito Oild Manufacturing</li>
                                                <li>Medime Resources</li>
                                                <li>Global Resources</li>
                                                <li>HRS Constructions & Trading</li>
                                                <li>Ademco Security Group</li>
                                                <li>Kossan Rubber Industries</li>
                                                <li>Goodway Integrated Industries</li>
                                                <li>Potensi Dutamas</li>
                                                <li>Agasi Engineering</li>
                                                <li>Vicon Industries</li>
                                                <li>Ajax Systems</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block {{(isset($client_name) && $client_name=='malta') ? 'active-block' : ''}}">
                            <div class="acc-btn {{(isset($client_name) && $client_name=='malta') ? 'active-block' : ''}}"><span class="count">10.</span>
                                Malta</div>
                            <div class="acc-content"  style="display:{{(isset($client_name) && $client_name=='malta') ? 'block' : ''}}">
                                <div class="content">
                                    <div class="clients-list clearfix">
                                        <div class="text">
                                            <ul>
                                                <li>Farstone Construction & Restoration Ltd</li>
                                                <li>AGF Turnkey Contractors</li>
                                                <li>MT Refurbishing</li>
                                                <li>Philip Bongailas</li>
                                                <li>T P Bugeja Bros Construction Works LTD</li>
                                                <li>B Grima & Sons Ltd</li>
                                                <li>MTF Bonanno Ltd</li>
                                                <li>Bonnici Bros Ltd</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block {{(isset($client_name) && $client_name=='czech') ? 'active-block' : ''}}">
                            <div class="acc-btn {{(isset($client_name) && $client_name=='czech') ? 'active-block' : ''}}"><span class="count">11.</span>
                                Czech Republic
                            </div>
                            <div class="acc-content" style="display:{{(isset($client_name) && $client_name=='czech') ? 'block' : ''}}">
                                <div class="content">
                                    <div class="clients-list clearfix">
                                        <div class="text">
                                            <ul>
                                                <li>Aba Czech, s.r.o.</li>
                                                <li>Acara praha,s.r.o.</li>
                                                <li>Ad Immo Stavebni Servis, Spol. S r.o.</li>
                                                <li>Acco Deutschland Gmbh & co.kg, Organizacni Slozka</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script>
        $(document).ready(function () {
            // Handler for .ready() called.
            $('html, body').animate({
                scrollTop: $('#client_list').offset().top - 50
            }, 'slow');
        });
    </script>
@endsection