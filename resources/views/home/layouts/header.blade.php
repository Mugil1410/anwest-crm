<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="{{ route('main') }}" class="navbar order-last order-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('home/assets/img/1.png') }}" alt="" width="200" height="100">
            <!-- <h1>Anwest  Solutions</h1> -->
            <!-- <span>.</span>  -->
        </a>

        <!-- Nav Menu -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="index.php#hero" class="active">Home</a></li>
                <li class="dropdown has-dropdown"><a href="#"><span>Services</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul class="dd-box-shadow">
                        <li><a href="{{ route('software_development') }}" target="new">Software Development</a></li>
                        <li><a href="{{ route('staff') }}" target="new">Staffing Augmentation Services</a></li>
                        <li><a href="{{ route('android') }}" target="new">Mobile Application Development</a></li>
                        <li><a href="{{ route('ai') }}" target="new">Data and Artificial Intelligence Service</a>
                        </li>
                        <li><a href="{{ route('digital_marketing') }}" target="new">Digital Marketing Service</a></li>
                        <li><a href="{{ route('cloud') }}" target="new">Cloud & DevOps Engineering Services</a></li>
                    </ul>
                </li>
                <li class="dropdown has-dropdown"><a href="#"><span>Industries</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul class="dd-box-shadow">
                        <li><a href="{{ route('life_science') }}" target="new">Life Science</a></li>
                        <li><a href="{{ route('it') }}" target="new">IT/ITES</a></li>
                        <li><a href="{{ route('transport') }}" target="new">Transportation & Logistics</a></li>
                        <li><a href="{{ route('gas') }}" target="new">Gas & Energy</a></li>
                        <li><a href="{{ route('aviation') }}" target="new">Aviation/Avionics</a></li>
                        <li><a href="{{ route('entertainment') }}" target="new">Entertainment & Media</a></li>
                    </ul>
                </li>
                <li class="job"><a href="{{ route('career')}}">Careers</a></li>
                <li><a href="{{ route('contact')}}">Contact Us</a></li>
            </ul>

            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav><!-- End Nav Menu -->

        <a class="btn-getstarted" href="{{ route('contact')}}">Get Started</a>

    </div>
</header><!-- End Header -->
