<!DOCTYPE html>
<html lang="en">

@include('home.layouts.head')

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- ======= Header ======= -->
    @include('home.layouts.header')
    <!-- End Header -->
    <main id="main">
        <section id="hero" class="hero">
            <div class="swiper-container slider-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('home/assets/img/hero.jpeg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('home/assets/img/hero1  (1).jpeg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('home/assets/img/hero1  (2).jpeg') }}" alt="">
                    </div>

                    <!-- Add more slider items as needed -->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <div class="hero-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <b>
                                    <h2 data-aos="fade-down" data-aos-delay="100">Welcome to Anwest Solutions</h2>
                                </b>
                                <b>
                                    <p style="color:white;" data-aos="fade-up">We increase your business success using
                                        Modern technology and IT Services</p>
                                </b>
                            </div>
                        </div>
                        <br><br>
                        <form action="{{ route('subscriber') }}" method="post">
                            @csrf
                        <input type="text" name="email" id="">
                        @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        <input type="submit" value="Subscribe Now" class="btn btn-primary" target="new"
                        style="background-color: #020270; border-color: #020270;"></form>
                        
                    </div>
                </div>
            </div>
        </section>



        <!-- Clients Section - Home Page -->




        <!-- About Section - Home Page -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5">

                    <div class="col-xl-5 content">
                        <h3>About Us</h3>
                        <h2>We Increase Your Business Success Using Modern Technology and IT Services</h2>
                        <p>AnWest Solution founded in 2019 with objective of providing IT development services for both
                            product and projects with High level of Quality and at a affordable cost for IT and ITES
                            clients </p>
                        <p> The company has been founded by a Sales Veteran along with Technical team combination of 100
                            Man years of experience in the Information Technology services area by across the
                            industries.
                        </p>
                        <p>
                            AnWest Solution also experienced in placing resource across US and Canada. We are the
                            preferred vendors for all our clients because of our USP.
                        </p>

                    </div>

                    <div class="col-xl-7">
                        <div class="row gy-4 icon-boxes">

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box">
                                    <i class="bi bi-code-slash"></i>
                                    <h3>IT Management</h3>
                                    <p>IT management involves overseeing the planning, implementation, and maintenance
                                        of technology resources to efficiently support organizational goals and
                                        operations.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box" style="margin-top:3px;">
                                    <i class="bi bi-cloud-arrow-down-fill"></i>
                                    <h3>Cloud Services</h3>
                                    <p>
                                        Cloud services provide on-demand access to computing resources, including
                                        storage, processing power, and applications, over the internet.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-shield-lock-fill"></i>
                                    <h3>Data Security</h3>
                                    <p>Data security encompasses the strategies and measures implemented to protect
                                        sensitive information from unauthorized access, disclosure, alteration, or
                                        destruction, ensuring confidentiality, integrity, and availability.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <br>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-gear-fill"></i>
                                    <h3>Machine Learning</h3>
                                    <p>Machine learning is a branch of artificial intelligence focused on developing
                                        algorithms that enable computers to learn from data and make predictions or
                                        decisions without being explicitly programmed.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- End About Section -->

        <!-- Stats Section - Home Page -->

        <!-- Services Section - Home Page -->
        <section id="services" class="services">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <h4>We Are Offering All Kinds Of IT Solutions and Services</h4>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-code-slash"></i></div>
                            <div>
                                <h4 class="title"><a href="{{route('software_development')}}" class="stretched-link">Software
                                        Development</a></h4>
                                <p class="description">
                                    Software development is the iterative process of designing, coding, testing, and
                                    maintaining computer programs to meet specific requirements.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-phone-fill"></i></div>
                            <div>
                                <h4 class="title"><a href="{{route('android')}}" class="stretched-link">Mobile Application
                                        Development</a></h4>
                                <p class="description">"Crafting innovative and user-friendly mobile applications
                                    tailored to meet diverse needs, leveraging cutting-edge technologies and seamless
                                    user experiences for optimal engagement and performance."</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-people-fill"></i></div>
                            <div>
                                <h4 class="title"><a href="{{route('staff')}}" class="stretched-link">Staffing Agumentation</a>
                                </h4>
                                <p class="description">"Expert staffing augmentation services tailored for businesses in
                                    the US, UK, and Europe, ensuring access to top-tier talent to bolster project teams
                                    and meet evolving demands."

                                </p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-cloud-arrow-down-fill"></i></div>
                            <div>
                                <h4 class="title"><a href="{{route('cloud')}}" class="stretched-link">Cloud & Devops</a></h4>
                                <p class="description">
                                    Cloud DevOps combines cloud computing with development and operations practices to
                                    automate software delivery, infrastructure provisioning, and scalability, enhancing
                                    agility and efficiency in modern software development lifecycles.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-info-circle-fill"></i></div>
                            <div>
                                <h4 class="title"><a href="{{route('ai')}}" class="stretched-link">Data and Artificial
                                        Intelligence Service</a></h4>
                                <p class="description">Unlocking value from data and AI faster to help you scale and
                                    transform your digital business.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-display-fill"></i></div>
                            <div>
                                <h4 class="title"><a href="{{route('digital_marketing')}}" class="stretched-link">Digital
                                        Martketing Service</a></h4>
                                <p class="description">
                                    "Empowering businesses with strategic digital marketing solutions to drive growth,
                                    engagement, and brand visibility across online channels."</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section>

        <!-- End Services Section -->

        <!-- Industry Section - Home Page -->


        <section id="industry" class="industry">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Industries</h2>
                <h4>We provide tailored projects to various industries, catering to their specific needs and objectives.
                </h4>
            </div><!-- End Section Title -->


            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4  industry-item isotope-item filter-app">
                            <img src="{{ asset('home/assets/img/ls1.jpg')}}" class="img-fluid" alt="">
                            <div class="industry-info">
                                <h4>Life Science</h4>


                            </div>
                        </div><!-- End Industry Item -->

                        <div class="col-lg-4  industry-item isotope-item filter-app">
                            <img src="{{ asset('home/assets/img/industry/3.jpeg')}}" class="img-fluid" alt="" width="500">
                            <div class="industry-info">
                                <h4>Aviation/Avionics</h4>
                            </div>
                        </div><!-- End Industry Item -->

                        <div class="col-lg-4  industry-item isotope-item filter-ap">
                            <img src="{{ asset('home/assets/img/industry/Gas.jpg')}}" class="img-fluid" alt="" height="500">
                            <div class="industry-info">
                                <h4>Gas & Energy</h4>


                            </div>
                        </div><!-- End Industry Item -->

                        <div class="col-lg-4 industry-item isotope-item filter-app">
                            <img src="{{ asset('home/assets/img/industry/ts.jpg')}}" class="img-fluid" alt="">
                            <div class="industry-info">
                                <h4>Transport & Logistics </h4>

                            </div>
                        </div><!-- End Industry Item -->

                        <div class="col-lg-4  industry-item isotope-item filter-product">
                            <img src="{{ asset('home/assets/img/it.jpg')}}" class="img-fluid" alt="">
                            <div class="industry-info">
                                <h4>IT/ITES</h4>
                            </div>
                        </div><!-- End Industry Item -->
                        <div class="col-lg-4  industry-item isotope-item filter-product">
                            <img src="{{ asset('home/assets/img/industry/et.gif')}}" class="img-fluid" alt=""
                                style="height: 235px;">
                            <div class="industry-info">
                                <h4>Entertainment & Media </h4>
                            </div>
                        </div><!-- End Industry Item -->


                    </div>

                </div>



        </section>


        <!-- End Services Section -->
    </main>
    @include('home.layouts.footer')

    @include('home.layouts.script')

</body>

</html>
