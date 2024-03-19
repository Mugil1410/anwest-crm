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
                        <h4 class="page-title">Website Activity</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div><!--end row-->
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0">Subscribers List</h4>
                            <div class="table-responsive dash-social">
                                <table id="datatable" class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email Address</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Response</th>
                                        </tr><!--end tr-->
                                    </thead>

                                    <tbody>
                                       @foreach ($queries as $sub)
                                            <tr>
                                                <td>{{ $sub->id }}</td>
                                                <td>{{ $sub->name }}</td>
                                                <td>{{ $sub->email }}</td>
                                                <td>{{ $sub->subject }}</td>
                                                <td>{{ $sub->query}}</td>
                                                <td><a href="mailto:{{$sub->email}}" class="btn btn-primary">Send Response</a></td>
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
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
    @include('auth.layouts.script')

</body>

</html>
