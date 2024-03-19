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
                        <h4 class="page-title">Applicants</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
                
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0">Applicants Details</h4>
                            <form action="{{route('apllicants.filter')}}" method="post">
                                @csrf
                            <input type="submit" class="btn btn-light px-4 btn-rounded float-right mt-0 mb-3 ti-filter" value="Filter" style="padding-left: 10%"/>
                            <select name="filter"  class="btn btn-outline-primary px-4 btn-rounded float-right mt-0 mb-3" >
                                <option value="all">All Applicants</option>
                                @foreach ($jobs as $app)
                                <option value="{{ $app->title }}">{{ $app->title }}</option>
                                @endforeach
                            </select>
                        </form>
                           
                            <div class="table-responsive dash-social">
                                <table id="datatable" class="table">
                                   
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>APPLIED FOR</th>
                                            <th>NAME</th>
                                            <th>MOBILE</th>
                                            <th>EMAIL</th>
                                            <th>QUALIFICATION</th>
                                            <th>SKILLS</th>
                                            <th>EXP YR</th>
                                            <th>DESIIGNATION</th>
                                            <th>LAST EMPLOYER</th>
                                            <th>RESUME</th>
                                            <th>Notice Period(Days)</th>
                                            <th>STATUS</th>
                                            <th>Action</th>
                                        </tr><!--end tr-->
                                    </thead>

                                    <tbody>
                                        @foreach ($applicants as $app)
                                            <tr>
                                                <td>{{ $app->id }}</td>
                                                <td>{{ $app->applying_for }}</td>
                                                <td>{{ $app->applicant_name }}</td>
                                                <td>{{ $app->applicant_mobile }}</td>
                                                <td>{{ $app->applicant_email }}</td>
                                                <td>{{ $app->qualification }}</td>
                                                <td>{{ $app->skills }}</td>
                                                <td>{{ $app->exp_yr }}</td>
                                                <td>{{ $app->designation }}</td>
                                                <td>{{ $app->last_employer }}</>
                                                </td>
                                                <td>
                                                    <a href="{{ url('/resume', ['path' => $app->Resume_path]) }}"
                                                        class=""><i class="ti-layout-tab"></i></a>
                                                </td>
                                                <td>
                                                    {{ $app->joining_date }}
                                                </td>
                                                <td>
                                                    {{ $app->Status }}
                                                </td>
                                                <td>
                                                    {{ $app->application_Status }}
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
            @include('auth.layouts.footer')

        </div><!-- container -->

    </div>
    <!-- end page content -->
    @include('auth.layouts.script')
    </div>
    <!-- end page-wrapper -->
    


</body>

</html>
