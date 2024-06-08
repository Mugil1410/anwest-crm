<!DOCTYPE html>
<html lang="en">
@include('auth.layouts.header')

<body>
    @include('auth.layouts.sidebar')
    <!-- Page Content-->
    <div class="page-content">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Applicants Profile</h4>
                    </div><!--end page-title-box-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="met-basic-detail">
                                    {{-- @foreach ($applicant as $app) --}}
                                       <p class="text-uppercase font-14"><strong>Applicant Id:</strong> {{ $applicant->id }}</p>
                                       <p class="text-uppercase font-14"><strong>Applying For:</strong> {{ $applicant->applying_for }}</p>
                                       <p class="text-uppercase font-14"><strong>Applicant Name:</strong> {{ $applicant->applicant_name }}</p>
                                       <p class="text-uppercase font-14"><strong>Mobile:</strong> {{ $applicant->applicant_mobile }}</p>
                                       <p class="text-uppercase font-14"><strong>Email:</strong> {{ $applicant->applicant_email }}</p>
                                       <p class="text-uppercase font-14"><strong>Qualification:</strong> {{ $applicant->qualification }}</p>
                                       <p class="text-uppercase font-14"><strong>Skills:</strong> {{ $applicant->skills }}</p>
                                       <p class="text-uppercase font-14"><strong>Experience:</strong> {{ $applicant->exp_yr }} years</p>
                                       <p class="text-uppercase font-14"><strong>Designation:</strong> {{ $applicant->designation }}</p>
                                       <p class="text-uppercase font-14"><strong>Last Employer:</strong> {{ $applicant->lastemployer }}</p>
                                       <p class="text-uppercase font-14"><strong>Joining Date:</strong> {{ $applicant->joining_date }}</p>
                                       <p class="text-uppercase font-14"><strong>Status:</strong> {{ $applicant->Status }}</p>
                                       <p class="text-uppercase font-14"><strong>Application Status:</strong> {{ $applicant->application_Status }}</p>
                                       <p class="text-uppercase font-14"><strong>Applied on</strong> {{ $applicant->created_at }}</p>
                                       <div class="my-3">
                                           <a class="btn btn-primary px-3" href="{{ $applicant->profile_link }}" target="_blank"><i class="ti-link"></i>   Profile</a>
                                           <a class="btn btn-primary px-3" href="{{ route('resume.show', ['id' => $applicant->id]) }}" target="_blank"><i class="ti-save"></i></a>
                                       </div>
                                    {{-- @endforeach --}}
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->
        @include('auth.layouts.footer')
    </div>
    <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
    @include('auth.layouts.script')

</body>

</html>
