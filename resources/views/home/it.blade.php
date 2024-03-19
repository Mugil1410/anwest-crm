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

            <img src="{{ asset('home/assets/img/industry/ites.jpg') }}" alt="" data-aos="fade-in">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">IT/ITES</h2>
                        <p>Anwest helps enterprises, reimagine business, modernize technology, deliver superior
                            experience to stay ahead of competition.
                        <p>Our professionals have the necessary vision, experience, industry insights and innovative
                            approaches to provide clear and practical advice to companies in this sector to help them
                            navigate in markets that are rapidly consolidating </p>
                        <p>AnWest helps global companies run their mission-critical systems and operations while
                            modernizing IT, optimizing data architectures, and ensuring security and scalability across
                            public, private and hybrid clouds. The largest companies and public sector organizations
                            trust us to deploy services to drive new levels of performance, competitiveness, and
                            customer experience across their IT estates.</p>
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
                <h2>Our IT/ITES Software Solutions </h2>
                <p>"We are committed to delivering cutting-edge software solutions tailored specifically for IT/ITES
                    organizations."</p>
            </div><!-- End Section Title -->
            <div class="container">

                <!-- First Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>ITES(Information Technology Enabled Service)</h3>
                        <p>ITES, Information Technology Enabled Service, is defined as outsourcing of processes that can
                            be enabled with information technology and covers diverse areas like finance, HR,
                            administration, health care, telecommunication, manufacturing etc. Armed with technology and
                            manpower, these services are provided from e-enabled locations. This radically reduces costs
                            and improve service standards.</p>

                    </div>
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-right" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/06.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div><!-- End First Feature Item -->

                <!-- Second Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-left" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/07.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Customer support services:</h3>
                        <p>24/7 inbound / outbound call center services that address customer queries and concerns
                            through phone, email and live chat.</p>

                    </div>
                </div><!-- End Second Feature Item -->


                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Technical support services:</h3>
                        <p>Installation, product support, running support, troubleshooting, usage support, and problem
                            resolution for computer software, hardware, peripherals, and internet infrastructure.</p>

                        <!-- List of Technical Support Items -->
                    </div>
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-right" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/08.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div><!-- End First Feature Item -->



                <!-- Second Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-left" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/09.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Insurance processing:</h3>
                        <p>New business acquisition and promotion, claims processing, policy maintenance and policy
                            management.

                        </p>

                    </div>
                </div><!-- End Second Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Data conversion services:</h3>
                        <p>Data conversion for databases, word processors, spreadsheets and software applications. Data
                            conversion of raw data into PDF, HTML, Word or Acrobat formats.</p>

                    </div>
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-right" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/10.jpg') }}" class="img-fluid" alt="">
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
