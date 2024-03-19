<!DOCTYPE html>
<html lang="en">

@include ('home.layouts.head')

<body class="services-details-page" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- ======= Header ======= -->
    @include ('home.layouts.header')
    <!-- End Header -->

    <main id="main">

        <!-- Page Title -->
        <div data-aos="fade" class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li class="current">Services Details</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details">

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                        <div class="service-box">
                            <h4>Services List</h4>
                            <div class="services-list">
                                <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Software
                                        Development</span></a>
                                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Web
                                        Development</span></a>
                                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Analytic
                                        Solutions</span></a>
                                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Cloud &
                                        devops</span></a>
                                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Product &
                                        Design</span></a>
                                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Data Center</span></a>
                            </div>
                        </div><!-- End Services List -->



                        <div class="help-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-headset help-icon"></i>
                            <h4>Have a Question?</h4>
                            <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1
                                    669-888-1889</span></p>
                            <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                    href="sales@anwestsolution.com">sales@anwestsolution.com</a></span></p>
                        </div>

                    </div>

                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('home/ssets/img/services.jpg') }}" alt=""
                            class="img-fluid services-img">
                        <h3>"Empowering Growth: Comprehensive Technology Solutions for the Digital Age"</h3>
                        <p>
                            At Anwest Solutions, we offer a comprehensive suite of cutting-edge services tailored to
                            meet the evolving needs of businesses in today's digital landscape. Our expert team
                            specializes in software development, crafting custom solutions to address specific business
                            requirements, leveraging the latest technologies and best practices to ensure optimal
                            performance and scalability.
                        </p>
                        <p>
                            With expertise in cloud services and DevOps practices, we facilitate seamless migration to
                            cloud environments and streamline development workflows for enhanced efficiency and agility.
                            Our comprehensive approach to cloud and DevOps ensures optimal performance, security, and
                            cost-effectiveness throughout the deployment lifecycle.
                        </p>
                        <p>
                            In the realm of product design, we collaborate closely with clients to transform ideas into
                            innovative, user-friendly products that resonate with target audiences. From concept
                            ideation to prototyping and iterative refinement, our product design services are geared
                            towards delivering exceptional user experiences and driving market success.
                        </p>
                        <p>Finally, our data center solutions provide robust infrastructure and support services to
                            ensure the reliability, security, and scalability of mission-critical systems. Whether it's
                            data storage, network management, or disaster recovery planning, we offer tailored solutions
                            to meet the unique requirements of each client.</p>
                        <p>
                            At Anwest Solutions, we are committed to delivering excellence in every aspect of our
                            services, leveraging our expertise, creativity, and technology prowess to drive tangible
                            business outcomes and exceed client expectations."




                        </p>
                    </div>

                </div>

            </div>

        </section><!-- End Service-details Section -->

    </main>

    <!-- ======= Footer ======= -->
    @include ('home.layouts.footer')
    @include('home.layouts.script');
</body>

</html>
