<!DOCTYPE html>
<html lang="en">

@include('home.layouts.head')


body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

<!-- ======= Header ======= -->
@include('home.layouts.header')
<!-- End Header -->

<main id="main">

    <!-- Hero Section - Home Page -->
    <section id="service_hero" class="service_hero">

        <img src="{{ asset('home/assets/img/service/dm.jpeg') }}" alt="" data-aos="fade-in">

        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h2 data-aos="fade-up" data-aos-delay="100">Digital Martketing Service </h2>
                    <p>"Empowering businesses with strategic digital marketing solutions to drive growth, engagement,
                        and brand visibility across online channels."
                    </p>


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
            <h2>Our Digital Marketing Services </h2>
            <p>"Digital Marketing Mastery: Unlocking Growth and Engagement."</p>
        </div><!-- End Section Title -->
        <div class="container">

            <!-- First Feature Item -->
            <div class="row gy-4 align-items-stretch justify-content-between features-item">
                <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                    <h3>
                        "Strategic Technology Branding and Marketing Solutions for Growth"</h3>
                    <ul>
                        <li>
                            Positioning and scaling your technology services company to your ideal target audience
                            through a winning combination of branding, inbound marketing and lead generation techniques.
                            Attract, Impress, and Convert more leads online and get results with us.
                        </li>
                        <li>We have years of experience in building winning strategies to scale technology companies to
                            attract more clients. AnWest has an amalgamation of understanding of the IT, Cloud and Data
                            Ecosystem along with the expertise in marketing, branding and lead generation.</li>
                        <li>AnWest has valuable experience in working with Technology, Life Science and End User
                            companies who specialise in Cloud, Data Engineering, Data Infrastructure, AI & ML,
                            Cybersecurity, Blockchain, ERP and many more. Marketing a deep tech IT services company
                            requires special skill sets, which AnWest has over the years developed into its core
                            capability.</li>
                        <li>Some of the key factors that have driven our success with IT Companies: Our understanding of
                            Cloud and Data Ecosystem, ERP, and IT services in general We are one of the very select
                            marketing agencies that cater to technology content, creating artefacts such as datasheets,
                            technical blogs etc. Our experience and expertise in building and scaling multiple
                            technology companies.

                        </li>

                    </ul>

                </div>
                <div class="col-lg-6 d-flex align-items-center features-img-bg float-right" data-aos="fade-right"
                    style="margin-top: 100px; margin-right:100px">
                    <img src="{{ asset('home/assets/img/service/20.jpg')}}" class="img-fluid" alt="">
                </div>
            </div><!-- End First Feature Item -->


        </div>

    </section><!-- End Features Section -->


</main>
@include('home.layouts.footer')

@include('home.layouts.script')
</body>

</html>
