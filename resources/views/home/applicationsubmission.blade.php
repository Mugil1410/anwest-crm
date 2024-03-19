<!DOCTYPE html>
<html lang="en">

@include('home.layouts.head')

<body class="services-details-page" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- ======= Header ======= -->
    @include('home.layouts.header')<!-- End Header -->
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
                        <li class="current">Application Form</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <section class="application">
            <div class="container">
                <h3>Your appllication submitted sucessfully,Please wait for our response.</h3>
        </section>

        @include('home.layouts.footer');
        @include('home.layouts.script');

    </main>

    <!-- ======= Footer ======= -->


</body>

</html>
