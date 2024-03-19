<!DOCTYPE html>
<html lang="en">

@include('home.layouts.head')

<body class="services-details-page" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- ======= Header ======= -->
    @include('home.layouts.header')
    <!-- End Header -->

    <main id="main">

        <section id="service_hero" class="service_hero">

            <img src="{{ asset('home/assets/img/carrer.png') }}" alt="" data-aos="fade-in">
    
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Empowering Excellence</h2>
                        <p>"Join Our Team, Where Innovation Meets Opportunity"
                        </p>
    
    
                        <br>
                        <a href="{{ route('career') }}#careers" class="btn btn-primary" target="new"
                            style="background-color: #020270; border-color: #020270;">View openings</a>
                    </div>
                </div>
            </div>
    
        </section><!-- End Hero Section -->
       
       

        <!-- Services Section - Home Page -->
        <section id="careers" class="careers">

            <!--  Section Title -->
           

            <section class="search">
             
                <div class="container">
                    <h2>Find Your Dream Job</h2>
                <form action="#" method="get">
                    <input type="text" name="keywords" placeholder="Keywords">
                    <input type="text" name="location" placeholder="Location">
                    <button type="submit">
                        Search
                    </button>
                </form>
                </div>
                
            </section>

            <div class="container">
                @foreach ($jobs as $job)
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="career-item d-flex">
                      <div class="icon flex-shrink-0"></div>
                      <div>
                        <h4 class="title"  style="color:#020270 ">{{ $job->title }}</h4>
                        <p class="description">No of opening : {{ $job->no_of_opening }}</p>
                        <p class="description">Exp : {{ $job->exp_needed }}</p>
                        <p class="description">Location : {{ $job->location }}</p>
                        <!-- Updated href attribute to redirect to the index page -->
                        <a href="{{ url('/jobdescription' . '/' . $job->id) }}" class="btn btn-primary"   target="new" style="background-color: #020270; border-color: #020270;">Know more</a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

            </div>

        </section>

    </main>

    <!-- ======= Footer ======= -->
    @include('home.layouts.footer')
    @include('home.layouts.script')
</body>

</html>
