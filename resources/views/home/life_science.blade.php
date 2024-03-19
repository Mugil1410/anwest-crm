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

            <img src="{{ asset('home/assets/img/ls.jpg') }}" alt="" data-aos="fade-in">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Life Science</h2>
                        <p>The life sciences industry comprises companies operating in the research, development and
                            manufacturing of pharmaceuticals, biotechnology-based food and medicines, medical devices,
                            biomedical technologies, nutraceuticals, cosmeceuticals, food processing, and other products
                            that improve the lives of organisms.



                        <p>At AnWest, we focus on developing software as a Solution to meet the quality and safety
                            compliances in the life science industries.</p>
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
                <h2>Our Life Science Software Solutions </h2>
                <p>We're dedicated to providing advanced software solutions specifically designed for life science
                    organizations. </p>
            </div><!-- End Section Title -->
            <div class="container">

                <!-- First Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Pharmaceuticals</h3>
                        <p>The life sciences industry comprises companies operating in the research, development and
                            manufacturing of pharmaceuticals, biotechnology-based food and medicines, medical devices,
                            biomedical technologies, nutraceuticals, cosmeceuticals, food processing, and other products
                            that improve the lives of organisms.</p>
                        <p>At AnWest, we focus on developing software as a Solution to meet the quality and safety
                            compliances in the life science industries.</p>

                    </div>
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-right" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/01.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div><!-- End First Feature Item -->

                <!-- Second Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-left" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/02.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Biotechnology</h3>
                        <p>Biotech firms use the natural processes of living organisms to manufacture products, food and
                            medicinal products or solve challenges.</p>
                        <p>The global biotechnology market size was estimated to value at $449bn in the year 2019 and is
                            expected to be worth $727.1bn by 2025. The largest biotech companies include Novo Nordisk,
                            CSL, Gilead Sciences, Celgene and Allergan.</p>
                    </div>
                </div><!-- End Second Feature Item -->


                <!-- First Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Medical devices</h3>
                        <p>Medical device companies develop and manufacture medical and surgical instruments that can be
                            used to diagnose, prevent, monitor, and treat medical conditions. A medical device can be an
                            instrument, machine, implant, apparatus, software or a combination of these all.</p>
                        <p>The complex unmet patient needs drive the growth of the medical device industry. In the year
                            2019, the global medical devices market was worth nearly $456.9bn, with top medical device
                            companies Medtronic, Thermo Fisher Scientific, Johnson & Johnson, Abbott and GE Healthcare
                            contributing mainly with the release of new technologies. The leading tech giants such as
                            Google and Apple have started making big strides in this area. The tech giants are
                            leveraging their core strengths to develop 'Software as a Medical Device'.</p>

                    </div>
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-right" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/03.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div><!-- End First Feature Item -->

                <!-- Second Feature Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item">
                    <div class="col-lg-6 d-flex align-items-center features-img-bg float-left" data-aos="fade-right">
                        <img src="{{ asset('home/assets/img/industry/04.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>CRO / CMO</h3>
                        <p>Contract research organisations (CROs) or contract manufacturing organisations (CMOs),
                            sometimes called Contract Development and Manufacturing Organizations (CDMOs), play a
                            critical role in supporting the pharmaceutical, biotech and medical devices industries.

                        </p>
                        <p>CROs and CMOs support clients’ efforts to research, test, refine, manufacture and market
                            drugs, drug products and medical devices.

                            The contract research organisations (CRO) business value was estimated at $35.1bn in 2018
                            and is expected to reach $50.7bn by 2025.

                            The top CRO companies such as Covance, Parexel, Icon and IQVIA are extending companies'
                            capabilities and global reach through mergers and acquisitions, making the CRO marketplace
                            increasingly competitive.</p>
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
