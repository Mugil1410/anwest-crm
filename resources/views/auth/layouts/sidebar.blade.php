 <!-- Top Bar Start -->
 <div class="topbar">

     <!-- LOGO -->
     <div class="topbar-left">
         <a href="" class="logo">
             <span>
                 <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
             </span>
             <span>
                 <img src="{{ asset('backend/assets/images/logo.jpg') }}" alt="logo-large" class="logo-lg">
                 <img src="{{ asset('backend/assets/images/logo.jpg') }}" alt="logo-large" class="logo-lg logo-dark">
             </span>
         </a>
     </div>
     <!--end logo-->
     <!-- Navbar -->
     <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-right mb-0"> 
            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="{{'logout'}}" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    
                    <span class="btn btn-danger btn-lg">Logout</span>
                </a>
                
            </li>
        </ul>
            
         <!--end topbar-nav-->

         <ul class="list-unstyled topbar-nav mb-0">
             <li>
                 <button class="button-menu-mobile nav-link waves-effect waves-light">
                     <i class="dripicons-menu nav-icon"></i>
                 </button>
             </li>
             

         </ul>
     </nav>
     <!-- end navbar-->
 </div>
 <!-- Top Bar End -->

 <div class="page-wrapper">
     <!-- Left Sidenav -->
     <div class="left-sidenav">
         <ul class="metismenu left-sidenav-menu">

             <li>
                 <a href="{{ route('home') }}"><i class="ti-bar-chart"></i><span>Dashboard</span><span
                         class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>

             </li>

             <li>
                 <a href="{{ route('job') }}"><i class="ti-server"></i><span>Job Post</span><span class="menu-arrow"><i
                             class="mdi mdi-chevron-right"></i></span></a>

             </li>

             <li>
                 <a href="{{route('applicants')}}"><i class="ti-briefcase"></i>
                     <span>Applicants</span>
                     <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                     <span class="badge badge-pink float-right mr-2">New</span>
                 </a>

             </li>

             <li>
                 <a href="{{route('subscriberlist')}}"><i class="ti-shopping-cart-full"></i><span>Subscribers</span><span
                         class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>

             </li>

             
             <li>
                <a href="{{route('querylist')}}"><i class="ti-user"></i><span>Queries</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>

            </li>
         </ul>
     </div>
     <!-- end left-sidenav-->
