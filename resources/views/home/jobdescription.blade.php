<!DOCTYPE html>
<html lang="en">

@include('home.layouts.head')

<body class="services-details-page" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- ======= Header ======= -->
    @include('home.layouts.header')
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
                        <li><a href="">Home</a></li>
                        <li class="current">Careers</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Services Section - Home Page -->
        <section id="careers" class="careers">

            <!--  Section Title -->
            <div class="container">

                <div class="row gy-4">
                    
                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"></div>
                                <div>
                                    <h4 class="title" style="color:#020270; font-weight: bold;">{{ $jobs->title }}
                                    </h4>
                                    <p class="description"><strong>Experience Needed:</strong> {{ $jobs->exp_needed }}
                                    </p>
                                    <p class="description"><strong>Skills Required:</strong> {{ $jobs->Skills }}</p>
                                    <p class="description"><strong>Qualifications:</strong> {{ $jobs->qualification }}
                                    </p>
                                    <p class="description"><strong>Job Description:</strong> {{ $jobs->description }}</p>
                                    <!-- Updated href attribute to redirect to the index page -->
                                    <a href="{{ url('/jobform' . '/' . $jobs->id) }}" class="btn btn-primary"
                                        target="new" style="background-color: #020270; border-color: #020270;">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    

                </div>

            </div>

        </section>

    </main>

    <!-- ======= Footer ======= -->
    @include('home.layouts.footer')
    @include('home.layouts.script')
</body>

</html>
