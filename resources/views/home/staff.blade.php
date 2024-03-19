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

            <img src="{{ asset('home/assets/img/service/3.png') }}" alt="" data-aos="fade-in">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Staffing Augmentation Services – US / UK / Europe
                        </h2>
                        <p>

                            "Expert staffing augmentation services tailored for businesses in the US, UK, and Europe,
                            ensuring access to top-tier talent to bolster project teams and meet evolving demands."</p>
                        <br>

                        <a href="{{ route('staff') }}#footer" class="btn btn-primary" target="new"
                            style="background-color: #020270; border-color: #020270;">Contact Us</a>
                    </div>
                </div>
            </div>

        </section><!-- End Hero Section -->



        <!-- Features Section - Home Page -->
        <section id="features" class="features">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Staffing Services Services</h2>
                <p>Experience the difference with our Dedicated IT Staff Augmentation Solutions. Hire skilled IT
                    professionals for a seamless development journey.</p>
            </div><!-- End Section Title -->

            <div class="flip-card" style="margin-left: 150px;">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h3>HR Services</h3>
                    </div>
                    <div class="flip-card-back">
                        <p>Highly Qualified Bench Resources, No Freelancers</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h3>Developers Team</h3>
                    </div>
                    <div class="flip-card-back">

                        <p>Tried and Tested Developers in all experience Ranges</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h3>Flexible Developer Rates </h3>
                    </div>
                    <div class="flip-card-back">
                        <p>Developers Available on fixed cost, Hourly or Monthly Basis
                        </p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h3>Team Workflow</h3>
                    </div>
                    <div class="flip-card-back">

                        <p>Easy, Quick and Transparent Process</p>
                    </div>
                </div>
            </div>

            <br><br><br>
            <!-- Second Feature Item -->
            <div class="row gy-4 align-items-stretch justify-content-between features-item" style="margin-left: 50px;">
                <div class="col-lg-6 d-flex align-items-center features-img-bg float-left" data-aos="fade-right">
                    <img src="{{ asset('home/assets/img/service/5.webp') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                    <h3>"Tailored IT Staffing Solutions:"</h3>
                    <ul>
                        <li>

                            Access a pool of seasoned IT professionals for your staffing needs. Tailored augmentation
                            solutions for diverse tech roles and project scopes. Full-stack IT experts adept at meeting
                            specific project requirements.</li>
                        <li>

                            Stay ahead with flexible IT staffing solutions for your projects. Seamlessly integrate
                            skilled professionals into your existing teams. Expertise in providing on-demand talent to
                            meet dynamic project demands.

                        </li>

                        <li>Scale your IT initiatives confidently with our dedicated developers. Providing the right
                            expertise to augment and complement your in-house teams. Delivering high-performance
                            professionals to drive project success and innovation.</li>
                    </ul>
                </div>
            </div><!-- End Second Feature Item -->






            </div><!-- End Container -->




            </div>

        </section><!-- End Features Section -->


    </main>

    @include ('home.layouts.footer')


    @include('home.layouts.script');

</body>

</html>
