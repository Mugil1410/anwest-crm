<!DOCTYPE html>
<html lang="en">

@include ('home.layouts.head')

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- ======= Header ======= -->
    @include('home.layouts.header')
    <!-- End Header -->

    <main id="main">

        <!-- Hero Section - Home Page -->
        <section id="service_hero" class="service_hero">

            <img src="{{ asset('home/assets/img/industry/25.png') }}" alt="" data-aos="fade-in">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Entertainment & Media </h2>
                        <p>In a sector that’s ever changing, you’re always up for the challenge. You’re built for this
                            moment. We help you lead with confidence by delivering the experience, insight, and
                            knowledge you need to drive the industry forward—and move the world.</p>
                        <br>

                        <a href="{{ route('contact') }}" class="btn btn-primary" target="new"
                            style="background-color: #020270; border-color: #020270;">Contact Us</a>
                    </div>
                </div>
            </div>

        </section><!-- End Hero Section -->



        <!-- Features Section - Home Page -->
        <section id="features" class="features">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Entertainment & Media Software Solutions </h2>
                <p>
                    "SHAPE THE MOMENTS THAT ENTERTAIN AND INSPIRE"
            </div><!-- End Section Title -->
            <div class="container">

                <!-- First Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3> "Empowering Innovation: Leading the Media & Entertainment Industry Forward"</h3>
                        <p>Our Media & Entertainment practice brings deep sector and sub-sector knowledge and unrivalled
                            experience to bear on every challenge, leveraging alliances with more global companies.
                            Whether online, on the screen, or on the stage, we help you identify and leverage trends
                            wherever they appear—so you can shape the moments that entertain, inspire, and connect the
                            world.</p>
                        <p>We anticipate so you can innovate. As you set out to shape the future of the media and
                            entertainment industry, we’ll be with you every step of the way so you can move forward with
                            confidence.</p>
                        <h4>OTT Platform App Development</h4>
                        <p>World-class OTT streaming platform reinforcing the entertainment industry with a rich and
                            engaging viewing experience.</p>
                        <ul>
                            <li>DRM integration</li>
                            <li>Video monetization</li>
                            <li>Analytics & marketing</li>
                            <li>Multi Devices Support</li>
                        </ul>


                    </div>
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-right" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/26.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div><!-- End First Feature Item -->



                <!-- Second Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-left" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/27.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3> Services Offered under OTT TV App Development Solutions</h3>
                        <p>The spectrum of features gathers and gives rise to a competitive market-ready Software. OTT
                            video platform providers at AnWest introduce custom OTT app development services for a wide
                            range of devices and platforms.</p>

                        <ul>
                            <li>
                                <h5>Smart TV App Development</h5>
                                <p>OTT streaming TV development solutions compact to versatile platforms, resolutions,
                                    and viewing environments. A flexible user interface fits all screen sizes.
                                    Innovative practices over various app segments, supporting content such as
                                    entertainment, media, gaming, and TV interaction on big screens.</p>
                            </li>
                            <li>
                                <h5>Fire TV App Development</h5>
                                <p>Amazon Fire TV app development services include constructing feature-rich
                                    applications customized to perform well with Amazon Fire TV. In addition, Amazon
                                    plugins and third-party OTT India streaming services are integrated into the
                                    application to improve the viewing experience.

                                </p>
                            </li>
                            <li>
                                <h5>Apple TV App Development</h5>
                                <p>Apple TV is famous for the development of user-centric viewing environments. We
                                    develop high-performance OTT and streaming apps using XCode and tvOS development
                                    tools. Apple OTT Platforms in the USA include a highly engaging user interface that
                                    directly targets iOS device users.

                                </p>
                            </li>
                            <li>
                                <h5>Google Chromecast App Development</h5>
                                <p>Custom OTT app development solutions for Google Chromecast introduce a fantastic
                                    viewing experience with features like automatic resolution adaptation, video
                                    thumbnail generation, automatic video trans-coding, etc. All developed by leveraging
                                    technologies in the bitrate system.</p>
                            </li>
                            <li>
                                <h5>Video Chat & Conferencing System</h5>
                                <p>Web conferencing and online meetings are conducted on OTT platforms in India,
                                    browser-based applications, session recording tools, webinar management
                                    applications, and more. Advanced feature integration gives rise to the next level of
                                    live interaction on the web or Software</p>
                            </li>

                        </ul>

                        <p>Our technicians have a wealth of experience in the latest avionics technologies. Their deep
                            knowledge ensures your avionics installations run smoothly, on budget and on schedule.

                        </p>
                    </div>
                </div><!-- End Second Feature Item -->





            </div><!-- End Container -->




            </div>

        </section><!-- End Features Section -->


    </main>

    @include('home.layouts.footer')

    @include('home.layouts.script')

</body>

</html>
