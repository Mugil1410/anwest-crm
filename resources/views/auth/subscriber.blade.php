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
                            <a href="" class="btn btn-primary px-4 btn-rounded float-right mt-0 mb-3">Send News
                                letter</a>
                            <h4 class="header-title mt-0">Subscribers List</h4>
                            <div class="table-responsive dash-social">
                                <table id="datatable" class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>SUBSCRIBER MAIL</th>
                                        </tr><!--end tr-->
                                    </thead>

                                    <tbody>
                                        @foreach ($subscriber as $sub)
                                            <tr>
                                                <td>{{ $sub->id }}</td>
                                                <td>{{ $sub->email }}</td>
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
