<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tanzanite travels</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Travello template project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
        <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">
    </head>
    <body>

        <div class="super_container">
            
            @include('partials.header')
            <!-- Menu -->

            @include('partials.menu')
            
            <!-- Home -->
            @include('partials.home')

            
            <!-- Search -->

            <div class="home_search">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_search_container">
                                <div class="home_search_title mb-3">Trip Request</div>
                                
                                    <form action="{{ route('trip.request') }}" method="post" class="home_search_form" id="home_search_form">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <select class="form-control {{ ($errors->has('departure')) ? 'is-invalid' : '' }}" name="departure"> 
                                                <option value="">select your departure</option>
                                                <option value="los">lagos</option>


                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <input type="text" class="form-control {{ ($errors->has('arrival')) ? 'is-invalid' : '' }}" name="arrival" placeholder="Arrival">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <input type="date" class="form-control {{ ($errors->has('date')) ? 'is-invalid' : '' }}" name="date" placeholder="Date">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <input type="text" class="form-control {{ ($errors->has('class')) ? 'is-invalid' : '' }}" name="class" placeholder="Class">
                                            </div>

                                             <div class="col-md-3 mb-3">
                                                <input type="email" class="form-control {{ ($errors->has('email')) ? 'is-invalid' : '' }}" name="email" placeholder="Email">
                                            </div>

                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="home_search_button">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Intro -->

            <div class="intro">
                <div class="intro_background" style="background-image:url(images/intro.png)"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="intro_container">
                                <div class="row">

                                    <!-- Intro Item -->
                                    <div class="col-lg-4 intro_col">
                                        <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                            <div class="intro_icon"><img src="images/beach.svg" alt=""></div>
                                            <div class="intro_content">
                                                <div class="intro_title">Top Destinations</div>
                                                <div class="intro_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Intro Item -->
                                    <div class="col-lg-4 intro_col">
                                        <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                            <div class="intro_icon"><img src="images/wallet.svg" alt=""></div>
                                            <div class="intro_content">
                                                <div class="intro_title">The Best Prices</div>
                                                <div class="intro_subtitle"><p>Sollicitudin mauris lobortis in.</p></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Intro Item -->
                                    <div class="col-lg-4 intro_col">
                                        <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                            <div class="intro_icon"><img src="images/suitcase.svg" alt=""></div>
                                            <div class="intro_content">
                                                <div class="intro_title">Amazing Services</div>
                                                <div class="intro_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>      
                    </div>
                </div>
            </div>

            <!-- Destinations -->

            <div class="destinations" id="destinations">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="section_subtitle">simply amazing places</div>
                            <div class="section_title"><h2>Popular Destinations</h2></div>
                        </div>
                    </div>
                    <div class="row destinations_row">
                        <div class="col">
                            <div class="destinations_container item_grid">

                                <!-- Destination -->
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="images/destination_1.jpg" alt="">
                                        <div class="spec_offer text-center"><a href="#">Special Offer</a></div>
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="destinations.html">Bali</a></div>
                                        <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                        <div class="destination_price">From $679</div>
                                    </div>
                                </div>

                                <!-- Destination -->
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="images/destination_2.jpg" alt="">
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="destinations.html">Indonesia</a></div>
                                        <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                        <div class="destination_price">From $679</div>
                                    </div>
                                </div>

                                <!-- Destination -->
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="images/destination_3.jpg" alt="">
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="destinations.html">San Francisco</a></div>
                                        <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                        <div class="destination_price">From $679</div>
                                    </div>
                                </div>

                                <!-- Destination -->
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="images/destination_4.jpg" alt="">
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="destinations.html">Paris</a></div>
                                        <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                        <div class="destination_price">From $679</div>
                                    </div>
                                </div>

                                <!-- Destination -->
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="images/destination_5.jpg" alt="">
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="destinations.html">Phi Phi Island</a></div>
                                        <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                        <div class="destination_price">From $679</div>
                                    </div>
                                </div>

                                <!-- Destination -->
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="images/destination_6.jpg" alt="">
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="destinations.html">Mykonos</a></div>
                                        <div class="destination_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
                                        <div class="destination_price">From $679</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonials -->

            <div class="testimonials" id="testimonials">
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="section_subtitle">simply amazing places</div>
                            <div class="section_title"><h2>Testimonials</h2></div>
                        </div>
                    </div>
                    <div class="row testimonials_row">
                        <div class="col">

                            <!-- Testimonials Slider -->
                            <div class="testimonials_slider_container">
                                <div class="owl-carousel owl-theme testimonials_slider">
                                    
                                    <!-- Slide -->
                                    <div class="owl-item text-center">
                                        <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula odio.</div>
                                        <div class="testimonial_author">
                                            <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                                <div>john turner,</div>
                                                <div>client</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Slide -->
                                    <div class="owl-item text-center">
                                        <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula odio.</div>
                                        <div class="testimonial_author">
                                            <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                                <div>john turner,</div>
                                                <div>client</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Slide -->
                                    <div class="owl-item text-center">
                                        <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula odio.</div>
                                        <div class="testimonial_author">
                                            <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                                <div>john turner,</div>
                                                <div>client</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test_nav">
                    <ul class="d-flex flex-column align-items-end justify-content-end">
                        <li><a href="#">City Breaks Clients<span>01</span></a></li>
                        <li><a href="#">Cruises Clients<span>02</span></a></li>
                        <li><a href="#">All Inclusive Clients<span>03</span></a></li>
                    </ul>
                </div>
            </div>

            <!-- News -->

            <div class="news" id="news">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="news_container">
                                
                                <!-- News Post -->
                                <div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                                    <div class="news_post_image"><img src="images/news_1.jpg" alt=""></div>
                                    <div class="news_post_content">
                                        <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                            <div>02</div>
                                            <div>june</div>
                                        </div>
                                        <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                                        <div class="news_post_category">
                                            <ul>
                                                <li><a href="#">lifestyle & travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="news_post_text">
                                            <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- News Post -->
                                <div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                                    <div class="news_post_image"><img src="images/news_2.jpg" alt=""></div>
                                    <div class="news_post_content">
                                        <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                            <div>01</div>
                                            <div>june</div>
                                        </div>
                                        <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                                        <div class="news_post_category">
                                            <ul>
                                                <li><a href="#">lifestyle & travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="news_post_text">
                                            <p>Tempor massa et laoreet malesuada. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- News Post -->
                                <div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                                    <div class="news_post_image"><img src="images/news_3.jpg" alt=""></div>
                                    <div class="news_post_content">
                                        <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                            <div>29</div>
                                            <div>may</div>
                                        </div>
                                        <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                                        <div class="news_post_category">
                                            <ul>
                                                <li><a href="#">lifestyle & travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="news_post_text">
                                            <p>Vivamus massa.Tempor massa et laoreet malesuada. Aliquam nulla nisl, accumsan sit amet mattis.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- News Sidebar -->
                        <div class="col-xl-4">
                            <div class="travello">
                                <div class="background_image" style="background-image:url(images/travello.jpg)"></div>
                                <div class="travello_content">
                                    <div class="travello_content_inner">
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="travello_container">
                                    <a href="#">
                                        <div class="d-flex flex-column align-items-center justify-content-end">
                                            <span class="travello_title">Get a 20% Discount</span>
                                            <span class="travello_subtitle">Buy Your Vacation Online Now</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->

            <footer class="footer">
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer_1.jpg" data-speed="0.8"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="newsletter">
                                <div class="newsletter_title_container text-center">
                                    <div class="newsletter_title">Subscribe to our newsletter to get the latest trends & news</div>
                                    <div class="newsletter_subtitle">Join our database NOW!</div>
                                </div>
                                <div class="newsletter_form_container">
                                    <form action="#" class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between" id="newsletter_form">
                                        <div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                                            <div><input type="text" class="newsletter_input newsletter_input_name" id="newsletter_input_name" placeholder="Name" required="required"><div class="input_border"></div></div>
                                            <div><input type="email" class="newsletter_input newsletter_input_email" id="newsletter_input_email" placeholder="Your e-mail" required="required"><div class="input_border"></div></div>
                                        </div>
                                        <div><button class="newsletter_button">subscribe</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row footer_contact_row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="row">

                                <!-- Footer Contact Item -->
                                <div class="col-xl-4 footer_contact_col">
                                    <div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                        <div class="footer_contact_icon"><img src="images/sign.svg" alt=""></div>
                                        <div class="footer_contact_title">give us a call</div>
                                        <div class="footer_contact_list">
                                            <ul>
                                                <li>Office Landline: +44 5567 32 664 567</li>
                                                <li>Mobile: +44 5567 89 3322 332</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Contact Item -->
                                <div class="col-xl-4 footer_contact_col">
                                    <div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                        <div class="footer_contact_icon"><img src="images/trekking.svg" alt=""></div>
                                        <div class="footer_contact_title">come & drop by</div>
                                        <div class="footer_contact_list">
                                            <ul style="max-width:190px">
                                                <li>4124 Barnes Street, Sanford, FL 32771</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Contact Item -->
                                <div class="col-xl-4 footer_contact_col">
                                    <div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                        <div class="footer_contact_icon"><img src="images/around.svg" alt=""></div>
                                        <div class="footer_contact_title">send us a message</div>
                                        <div class="footer_contact_list">
                                            <ul>
                                                <li>youremail@gmail.com</li>
                                                <li>Office@yourbusinessname.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
            </footer>
        </div>

        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
        <script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
        <script src="{{ asset('plugins/Isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('plugins/easing/easing.js') }}"></script>
        <script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
