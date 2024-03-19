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

            <img src="{{ asset('home/assets/img/service/1.webp') }}" alt="" data-aos="fade-in">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Software Development Services </h2>
                        <p>

                            We help our partners accelerate disruption both within their organizations and industries.
                            They strategize new ideas and obtain real business value by getting the most out of our
                            production-ready custom software development services.</p>
                        <br>

                        <a href="{{ route('software_development') }}#footer" class="btn btn-primary" target="new"
                            style="background-color: #020270; border-color: #020270;">Contact Us</a>
                    </div>
                </div>
            </div>

        </section><!-- End Hero Section -->



        <!-- Features Section - Home Page -->
        <section id="features" class="features">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Custom Software Development Services</h2>
                <p>We provide custom software development services from start-ups to enterprises that help in solving
                    complex challenges with reliable and agile digital solutions. We offer end-to-end software product
                    engineering & development services. Our teams align your requirements and forge in building high
                    quality & scalable products. We offer on-demand software developers ranging across a variety of
                    technologies for ease of scalability, reduced time-to-market and enhanced ROI. Setup your team from
                    scratch or extend an existing team with ease.</p>
            </div><!-- End Section Title -->

            <div class="container">
                <!-- First Feature Item -->
                <div class="col-lg-12 d-flex align-items-center justify-content-center features-img-bg"
                    data-aos="fade-right" style="min-height: 300px;">
                    <img src="{{ asset('home/assets/img/service/2.png') }}" class="img-fluid" alt="">
                </div>
            </div><!-- End First Feature Item -->
            </div>









            </div><!-- End Container -->




            </div>

        </section><!-- End Features Section -->


    </main>

    @include ('home.layouts.footer')


    @include('home.layouts.script')

</body>

</html>
