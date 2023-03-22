<!-- Footer Section Start -->
<div class="footer--section">
    <!-- Footer Widgets Start -->
    <div class="footer--widgets">
        <div class="container">
            <div class="row AdjustRow">
                <div class="col-md-4 col-xs-6 col-xxs-12">
                    <!-- Widget Start -->
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Contact Us</h2>
                        </div>

                        <!-- Contact Widget Start -->
                        <div class="contact--widget">
                            <ul class="nav">
                                <li>{{ env('COMPANY_ADDRESS1') }}</li>
                                <li>{{ env('COMPANY_ADDRESS2') }}</li>
                            </ul>

                            <ul class="nav">
                                <li><a href="tel:{{ env('COMPANY_PHONE') }}">Tel : {{ env('COMPANY_PHONE') }}</a></li>
                                <li><a href="tel:{{ env('COMPANY_PHONE_2') }}">Tel : {{ env('COMPANY_PHONE_2') }}</a></li>
                            </ul>

                            <ul class="nav">
                                <li><a href="mailto:info@baselineauctioneers.com">E-mail :
                                        info@baselineauctioneers.com</a></li>
                                <li><a href="mailto:info@baselineauctioneers.com">E-mail :
                                        baselineauc@yahoo.com</a></li>
                            </ul>
                        </div>
                        <!-- Contact Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>

                <div class="col-md-4 col-xs-6 col-xxs-12">
                    <!-- Widget Start -->
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Our Services</h2>
                        </div>

                        <!-- Links Widget Start -->
                        <div class="links--widget">
                            <ul class="nav">
                                {{-- <li><a href="#">Web Design</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">SEO</a></li>
                                <li><a href="#">Writing</a></li> --}}
                            </ul>
                        </div>
                        <!-- Links Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>

                <div class="col-md-4 col-xs-6 col-xxs-12">
                    <!-- Widget Start -->
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Our Links</h2>
                        </div>

                        <!-- Links Widget Start -->
                        <div class="links--widget">
                            <ul class="nav">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- Links Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Footer Widgets End -->

    <!-- Footer Copyright Start -->
    <div class="footer--copyright">
        <div class="container">
            <p>Copyright 2023 &copy; <a href="#">Baseline Auctioneers</a>. All Rights Reserved.</p>
        </div>
    </div>
    <!-- Footer Copyright End -->
</div>
<!-- Footer Section End -->
