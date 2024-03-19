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

            <img src="{{ asset('home/assets/img/industry/23.jpg')}}" alt="" data-aos="fade-in">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Aviation / Avionics </h2>
                        <p>"Aviation and avionics technologies continue to advance, driving innovation in aircraft
                            design, navigation systems, and safety protocols to ensure optimal performance and passenger
                            safety in air travel."</p>
                        <br>

                        <a href="{{ route('contact')}}" class="btn btn-primary" target="new"
                            style="background-color: #020270; border-color: #020270;">Contact Us</a>
                    </div>
                </div>
            </div>

        </section><!-- End Hero Section -->



        <!-- Features Section - Home Page -->
        <section id="features" class="features">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Aviation Software Solutions </h2>
                <p>
                    "Unraveling the Sky: Exploring Avionics Innovations for Safer and Smarter Flights"</p>
            </div><!-- End Section Title -->
            <div class="container">

                <!-- First Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3> Aviation Edge - Database and API</h3>
                        <p>Developers hub for all aviation data from live tracking flights to actual airport schedules,
                            airline routes and much more

                        </p>

                        <ul>
                            <li>The Advance Passenger information System</li>
                            <li>Departure Control System</li>
                            <li>Backup Departure Control System</li>
                            <li>Flight Information Display</li>
                            <li>Weight & Balance System</li>
                            <li>Baggage Reconciliation System</li>
                            <li>Internet Booking Engine</li>
                            <li>Online travel Agency</li>
                        </ul>

                        <p>Field Aviation provides a wide range of services including commercial avionics repair and
                            overhaul. We are proud to catering services in the world's premier avionics manufacturers –
                            putting decades of sales experience to work for them.

                        </p>
                        <p>We provide service capabilities for electronic flight bags, TAWS, SatCom, flat-panel displays
                            and Flight Management Systems.</p>
                        <p>With technical service capabilities extending to most avionics units in the marketplace, our
                            factory-trained technicians use state-of-the-art test equipment to repair a wide range of
                            avionics systems and components.</p>

                    </div>
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-right" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/22.jpeg')}}" class="img-fluid" alt="">
                    </div>
                </div><!-- End First Feature Item -->



                <!-- Second Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-left" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/24.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3> Keeping Your Avionics Up-to-Date and Operational:</h3>
                        <p>Our Aviation Services will inspect, troubleshoot, repair and test all aircraft avionic and
                            electrical systems as part of any heavy maintenance or modifications. We can install new
                            systems, upgrade or modify existing systems, and test the avionics systems to ensure
                            reliable operation. Our Aviation Services has extensive capabilities in aircraft
                            communication, navigation, and entertainment systems</p>

                        <h3>AVIONICS SERVICES</h3>
                        <ul>
                            <li>Air-to-ground communications upgrades</li>
                            <li>Cockpit avionics upgrades</li>
                            <li>In-Flight Entertainment systems (IFE)</li>
                            <li>Digital and analog system installations, repair, modifications and upgrades (EFIS,
                                ACARS, GPS and many more)</li>
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
