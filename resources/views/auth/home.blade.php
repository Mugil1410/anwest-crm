<!DOCTYPE html>
<html lang="en">
@include('auth.layouts.header')

<body>
    @include('auth.layouts.sidebar')
    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <div class="page-title-box">
                <h4 class="page-title">Website Activity</h4>
            </div><!--end page-title-box-->
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    
                <div class="col-lg-12 col-xl-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card crm-data-card">
                                <div class="card-body"> 
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="data-icon">
                                                <i class="far fa-smile rounded-circle bg-soft-warning"></i>
                                            </div>
                                        </div><!-- end col-->
                                        <div class="col-8">
                                            <h3>{{$Subscriber}}</h3>
                                            <p class="text-muted font-14 mb-0">Happy Subscribers</p>
                                        </div><!-- end col-->
                                    </div><!-- end row-->                                                                                  
                                </div><!--end card-body--> 
                            </div><!--end card-->   
                        </div><!-- end col-->
                        <div class="col-md-6">
                            <div class="card crm-data-card">
                                <div class="card-body"> 
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="data-icon ">
                                                <i class="far fa-user rounded-circle bg-soft-success"></i>
                                            </div>
                                        </div><!-- end col-->
                                        <div class="col-8">
                                            <h3>{{$jobs}}</h3>
                                            <p class="text-muted font-14 mb-0">Job Posted</p>
                                        </div><!-- end col-->
                                    </div><!-- end row-->
                                </div><!--end card-body--> 
                            </div><!--end card-->   
                        </div><!-- end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card crm-data-card">
                                <div class="card-body"> 
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="data-icon">
                                                <i class="far fa-handshake rounded-circle bg-soft-secondary"></i>
                                            </div>
                                        </div><!-- end col-->
                                        <div class="col-8">
                                            <h3>{{$query}}</h3>
                                            <p class="text-muted font-14 mb-0">Enquiries</p>
                                        </div><!-- end col-->
                                    </div><!-- end row-->                                                                                     
                                </div><!--end card-body--> 
                            </div><!--end card-->                                      
                        </div><!-- end col-->
                        <div class="col-md-6">
                            <div class="card crm-data-card">
                                <div class="card-body"> 
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="data-icon">
                                                <i class="far fa-registered rounded-circle bg-soft-pink"></i>
                                            </div>
                                        </div><!-- end col-->
                                        <div class="col-8">
                                            <h3>{{$applicants}}</h3>
                                            <p class="text-muted font-14 mb-0">Apllicants</p>
                                        </div><!-- end col-->
                                    </div><!-- end row-->
                                </div><!--end card-body--> 
                            </div><!--end card-->   
                        </div><!-- end col-->
                    </div><!--end row-->
                    
                </div><!--end col-->
                    
            </div><!--end row-->
            @include('auth.layouts.footer')
        </div>
        <!-- end page content -->
        @include('auth.layouts.script')
    </div>
    <!-- end page-wrapper -->

</body>

</html>
