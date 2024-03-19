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

            <img src="{{ asset('home/assets/img/service/ai.jpg') }}" alt="" data-aos="fade-in">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Data and Artificial Intelligence Service</h2>
                        <p>Unlocking value from data and AI faster to help you scale and transform your digital
                            business.</p>
                        <p>AnWest’s analytics services and solutions can help any organization grow and differentiate
                            themselves against competition. We identify use cases that can deliver against your business
                            priorities and create analytics solutions with the right talent and technologies to suit
                            your needs. Your data’s destiny is one that can be leveraged to lift performance,
                            resilience, and growth for years to come.</p>


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
                <h2>Our Data and Artificial Intelligence Services </h2>
                <p>
                    "Unlocking innovation and gaining deeper insights with Data & AI Solutions, driving transformative
                    impact."</p>
            </div><!-- End Section Title -->
            <div class="container">

                <!-- First Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">


                        <ul>
                            <li>
                                <h6>Data and Analytics: Road to your AI journey</h6>
                                <p>
                                    A data and analytics strategy is foundational for any business transformation. We
                                    help you establish strong, responsible practices that set the stage for growth.</p>
                            </li>
                            <li>
                                <h6>Data and analytics strategy</h6>
                                <p>
                                    We'll map your analytics initiatives to quantifiable business outcomes with a
                                    data-driven approach.
                                </p>
                            </li>
                            <li>
                                <h6>Data discovery and Augmentation</h6>
                                <p> We bring you 360-degree customer views by augmenting your assets with third-party
                                    data and predictive analytics.</p>
                            </li>
                            <li>
                                <h6>Data management and beyond</h6>
                                <p> In addition to data synthesis and analytics, we assist with governance, monetization
                                    and compliance.</p>
                            </li>
                            <li>
                                <h6>Industrialized solutions</h6>
                                <p> We offer turnkey analytics and AI solutions for common challenges as well as custom
                                    solutions for more particular needs.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-right" data-aos="fade-right"
                        style="margin-right: 70px;">
                        <img src="{{ asset('home/assets/img/service/14.webp') }}" class="img-fluid" alt="">
                    </div>
                </div><!-- End First Feature Item -->




            </div>

        </section><!-- End Features Section -->


    </main>
    @include('home.layouts.footer')


    @include('home.layouts.script')

</body>

</html>
