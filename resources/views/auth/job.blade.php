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
                                                <td>{{ $job->title }}<small
                                                        class="badge badge-soft-pink ml-1">sample</small></td>
                                                <td>{{ $job->company_posted }}</td>
                                                <td>{{ $job->exp_needed }}</td>
                                                <td>{{ $job->qualification }}</td>
                                                <td>{{ $job->location }}</td>
                                                <td>
                                                    {{ $job->job_close }}<br />
                                                </td>
                                                <td>{{ $job->Job_post }}</td>
                                                <td>
                                                    <a href="#"><i class="fas fa fa-eye-slash font-16"></i></a>
                                                    <a href="{{ route('jobedit', ['id' => $job->id]) }}" class="mr-2"><i
                                                            class="fas fa-edit text-info font-16"></i></a>
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
    </div>
    <!-- end page-wrapper -->

</body>

</html>
