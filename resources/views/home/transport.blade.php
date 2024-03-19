<!DOCTYPE html>
<html lang="en">

@include ('home.layouts.head')

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- ======= Header ======= -->
    @include ('home.layouts.header')
    <!-- End Header -->

    <main id="main">

        <!-- Hero Section - Home Page -->
        <section id="hero" class="hero">

            <img src="{{ asset('home/assets/img/industry/11.webp') }}" alt="" data-aos="fade-in">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Transport & Logistics </h2>
                        <p>IT services for transportation and logistics (T&L) focus on consulting, implementation,
                            support and evolution of T&L solutions and aim to help T&L companies streamline and reduce
                            costs of logistics operations, enhance asset efficiency, and improve customer experience.
                        </p>
                        <p>The dedicated IT services also cover consulting on the use of advanced techs (cloud, IoT, AI
                            and ML, blockchain, AR, etc.) for T&L operations, IT infrastructure support, quality
                            assurance, help desk, and cyber security services for T&L companies, and more.</p>
                        <br>
                        <a href="{{ route('main') }}#footer" class="btn btn-primary" target="new"
                            style="background-color: #020270; border-color: #020270;">Contact Us</a>
                    </div>
                </div>
            </div>

        </section><!-- End Hero Section -->



        <!-- Features Section - Home Page -->
        <section id="features" class="features">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Transport & Logistics Software Solutions </h2>
                <p>"We are committed to delivering cutting-edge software solutions tailored specifically for the
                    transport and logistics industry." </p>
            </div><!-- End Section Title -->
            <div class="container">

                <!-- First Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Logistics service providers (LSPs)</h3>
                        <p>Freight forwarders, hird-party and fourth-party logistics service providers.</p>
                        <h3>Transportation service providers (TSPs)</h3>
                        <p>Rucking, Air, Rail, Water, and Multi-modal Carriers, Including last-mile delivery providers.
                        </p>
                        <h3>Courier express parcel (CEP) companies</h3>
                        <p>CEP services providers operating in B2B and B2C segments.</p>

                    </div>
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-right" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/12.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div><!-- End First Feature Item -->



                <!-- Second Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-left" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/15.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>T&L operations and asset management</h3>
                        <ul>
                            <li>Advanced operational analytics</li>
                            <li>Automated aggregation, processing, and AI-powered analysis of operational big data
                                (transactional data, transportation process data, fleet data, labor performance data,
                                etc.).</li>
                            <li>Scheduled and ad hoc analytical reports.</li>
                            <li> Trend-based forecasting of customer demand, fleet utilization, labor utilization, etc.
                            </li>
                            <li>What-if scenario modeling and operational risk management.</li>

                        </ul>


                    </div>
                </div><!-- End Second Feature Item -->


                <!-- First Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Warehouse management</h3>
                        <ul>
                            <li>AI-powered recommendations on optimal storage conditions for different goods, item
                                putaway and picking routes, type and amount of order packing.</li>
                            <li>AR-enabled order picking (pick-by-vision).</li>
                            <li>Barcode/RFID-enabled monitoring of warehouse inventory levels.</li>
                            <li> AI-powered planning of warehouse labor resources and equipment, operations in yard,
                                loading docks, etc.
                            </li>

                        </ul>



                    </div>
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-right" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/16.webp') }}" class="img-fluid" alt="">
                    </div>
                </div><!-- End First Feature Item -->



                <!-- Second Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-left" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/17.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Transportation management</h3>
                        <ul>
                            <li>Advanced operational analytics</li>
                            <li>Automated aggregation, processing, and AI-powered analysis of operational big data
                                (transactional data, transportation process data, fleet data, labor performance data,
                                etc.).</li>
                            <li>Scheduled and ad hoc analytical reports.</li>
                            <li> Trend-based forecasting of customer demand, fleet utilization, labor utilization, etc.
                            </li>
                            <li>What-if scenario modeling and operational risk management.</li>

                        </ul>


                    </div>

                </div><!-- End Second Feature Item -->

                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Fleet Management</h3>
                        <ul>
                            <li>Real-time tracking of vehicle location, fuel consumption, driver's behavior, tachograph
                                data compliance with applicable regulations (e.g., DOT requirements for the US), and
                                more.</li>
                            <li>A mobile application for last mile carriers to enable easy updates on order shipment
                                status.</li>
                            <li>Predictive fleet maintenance suggestions powered by IoT and AI technologies.</li>
                            <li> Fleet maintenance monitoring in real time and reporting upon completion.
                            </li>

                        </ul>



                    </div>
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-right" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/18.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div><!-- End First Feature Item -->




            </div><!-- End Container -->




            </div>

        </section><!-- End Features Section -->


    </main>

    @include ('home.layouts.footer')


    @include('home.layouts.script');

</body>

</html>
