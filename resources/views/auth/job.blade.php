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
                        <h4 class="page-title">Job Mangement</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('Addjob') }}"
                                class="btn btn-primary px-4 btn-rounded float-right mt-0 mb-3">+ Add New Job Post</a>
                            <h4 class="header-title mt-0">Job Post Details</h4>
                            <div class="table-responsive dash-social">
                                <table id="datatable" class="table">
                                    <thead>
                                        <tr>
                                            <th>JOB ID</th>
                                            <th>TITLE</th>
                                            <th>POSTED BY</th>
                                            <th>EXP</th>
                                            <th>QUALIFICATION</th>
                                            <th>LOCATION</th>
                                            <th>CLOSED ON</th>
                                            <th>Status</th>
                                            <th>ACTION</th>
                                        </tr><!--end tr-->
                                    </thead>
                                    <tbody>
                                        @foreach ($jobs as $job)
                                            <tr>
                                                <td>{{ $job->id }}</td>
                                                <td>{{ $job->title }}</td>
                                                <td>{{ $job->company_posted }}</td>
                                                <td>{{ $job->exp_needed }}</td>
                                                <td>{{ $job->qualification }}</td>
                                                <td>{{ $job->location }}</td>
                                                <td>{{ $job->job_close }}<br />
                                                </td>
                                                <td id="jobstatus{{$job->id}}" value={{$job->id}}>{{ $job->Job_post }}</td>
                                                <td>
                                                    
                                                    @if($job->Job_post == 'Active')
                                                        
                                                        <a value={{$job->id}} class="jobstatustoggler btn btn-light btn-sm" id="jobstatustoggler_{{ $job->id }}" ><i class="fas fa fa-eye font-16"></i></a>
                                                    @else
                                                        <a value={{$job->id}} class="jobstatustoggler btn btn-light btn-sm" id="jobstatustoggler_{{ $job->id }}" ><i class="fas fa fa-eye-slash font-16"></i></a>
                                                    @endif
                                                    <a href="{{ route('jobedit', ['id' => $job->id]) }}"
                                                        class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="{{ route('jobdelete', ['id' => $job->id]) }}"><i
                                                            class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div><!-- container -->
        @include('auth.layouts.footer')
    </div>
    <!-- end page content -->
    @include('auth.layouts.script')
    <script>
        $(document).ready(function () {
            // Use event delegation to handle clicks on any .jobstatustoggler button
            $(document).on('click', '.jobstatustoggler', function (e) {
                const jobId = $(this).attr('value');
                const $statusIcon = $(`#jobstatustoggler_${jobId}`).children("i");
                // Toggle the class for the corresponding status cell
                $statusIcon.toggleClass('fa-eye fa-eye-slash font-16');
                // Update the status text based on the class
                const isActive = $statusIcon.hasClass('fa-eye');
                $(`#jobstatus${jobId}`).text(isActive ? 'Active' : 'Inactive');
                // Update the status in the database
                $.ajax({
                    type: 'POST',
                    url: "{{ route('jobstatus') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        jobId: jobId,
                        isActive: isActive
                    },
                    success: function (response) {
                        console.log(response);
                    }
                });
            });




        });
    </script>
    </div>
    <!-- end page-wrapper -->
</body>

</html>
