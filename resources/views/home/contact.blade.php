<!DOCTYPE html>
<html lang="en">

@include('home.layouts.head')

<body class="contact" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- ======= Header ======= -->
    @include ('home.layouts.header')
    <!-- End Header -->

    <main id="main">
        <!-- Contact Section - Home Page -->
        <section id="contact" class="contact">
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
                            <li class="current">Contact Us</li>
                        </ol>
                    </div>
                </nav>
            </div><!-- End Page Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100" style="margin-top: 50px;">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-12">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Anwest Software Solution LLC,</h3>
                                    <p>30 N, Gould St,STE R,</p>
                                    <p> Sheridan,Wyoming,</p>
                                    <p> United States 82801</p>

                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+1 669-888-1889</p>
                                    <p>+1 6678 254445 41</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>sales@anwestsolution.com</p>
                                    <p>hr@anwestsolution.com</p>
                                </div>
                            </div><!-- End Info Item -->


                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="{{route('query')}}" method="post" >
                            @csrf
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        >
                                        @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="col-md-6 ">
                                    <input type="text" class="form-control" name="email" placeholder="Your Email"
                                        >
                                        @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        >
                                        @error('subject')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="query" rows="6" placeholder="Message"></textarea>
                                    @error('query')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="col-md-12 text-center">
                                    <input type="submit" class="btn btn-primary" value="Send Message">
                                </div>

                            </div>
                        </form>

                    </div><!-- End Contact Form -->

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d15551.677781828848!2d80.23765654904037!3d12.977003947419673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d12.978612!2d80.2432832!4m5!1s0x3a525d1fc3584163%3A0x656d9d542aa3a9aa!2s4%2F608%2C%20V.O.C.%20Street%2C%20Kottivakkam%2C%20Old%20Mahabalipuram%20Road%2C%20Perungudi%2C%20Chennai%2C%20Tamil%20Nadu%20600041!3m2!1d12.97259!2d80.2518862!5e0!3m2!1sen!2sin!4v1709528763811!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </main>

    <!-- ======= Footer ======= -->
    @include ('home.layouts.footer')
    @include('home.layouts.script')
</body>

</html>
