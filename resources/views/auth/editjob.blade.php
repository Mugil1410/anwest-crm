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
                        <h4 class="page-title">Edit Job</h4>
                    </div><!--end page-title-box-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class=""method="POST"
                                        action="{{ route('jobupdate', ['id' => $job->id]) }}">
                                        @csrf

                                        <input type="hidden" name="id" value={{ $job->id }} />
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="username">Title</label>
                                                    <input type="text" class="form-control" 
                                                        value={{ $job->title }} name="title">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="useremail">Company Posted</label>
                                                    <input type="text" class="form-control" 
                                                        value={{ $job->company_posted }} name="company">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="subject">Skills</label>
                                                    <input type="text" class="form-control" 
                                                        value={{ $job->Skills }} name="skills">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Exp Needed (yr)</label>
                                                    <select class="form-control"value={{ $job->exp_needed }}
                                                        name="exp">
                                                        <option>0-1</option>
                                                        <option>1-2</option>
                                                        <option>2-3</option>
                                                        <option>4-10</option>
                                                        <option>Above 10</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="username">Qualification</label>
                                                    <input type="text" class="form-control" 
                                                        value={{ $job->qualification }} name="qualification">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="username">Location</label>
                                                    <input type="text" class="form-control" 
                                                        value={{ $job->location }} name="location">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="message">Job Description</label>

                                                    <textarea class="form-control" rows="5" name="description">{{ $job->description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group row">
                                                    <label for="example-date-input"
                                                        class="col-sm-2 col-form-label text-right">Closed On</label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="date"
                                                            value={{ $job->job_close }} name="closedate">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Job Status</label>
                                                    <div class="col-sm-6">
                                                        <select class="custom-select" name="status">
                                                            <option selected="{{ $job->job_post }}">Active</option>
                                                            <option value="1">Un Active</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 text-right">
                                                <button class="btn btn-primary px-5 py-2" type="submit">Update Job
                                                    Post</button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--end card-body-->
                            </div><!--end card-->

                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <!-- end page title end breadcrumb -->

            @include('auth.layouts.footer')
        </div>
        <!-- end page content -->
        @include('auth.layouts.script')
    </div>
    <!-- end page-wrapper -->


</body>

</html>
