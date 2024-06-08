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
                        <h4 class="page-title">ADD NEW JOB</h4>
                    </div><!--end page-title-box-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class=""method="POST" action="{{ route('jobpost') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="username">Title</label>
                                                    <input type="text" class="form-control" name="title">
                                                    @error('title')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="useremail">Company Posted</label>
                                                    <input type="text" class="form-control" name="company">
                                                    @error('company')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="useremail">No of openings</label>
                                                    <input type="text" class="form-control" name="openings">
                                                    @error('openings')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="subject">Skills</label>
                                                    <input type="text" class="form-control" name="skills">
                                                    @error('skills')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Exp Needed (yr)</label>
                                                    <select class="form-control" name="exp">
                                                        <option value =""> Select Experience</option>
                                                        <option value="0-1"
                                                            {{ old('exp') == '0-1' ? 'selected' : '' }}>0-1</option>
                                                        <option value="1-2"
                                                            {{ old('exp') == '1-2' ? 'selected' : '' }}>1-2</option>
                                                        <option value="2-3"
                                                            {{ old('exp') == '2-3' ? 'selected' : '' }}>2-3</option>
                                                        <option value="4-10"
                                                            {{ old('exp') == '4-10' ? 'selected' : '' }}>4-10</option>
                                                        <option value="Above 10"
                                                            {{ old('exp') == 'Above 10' ? 'selected' : '' }}>Above 10
                                                        </option>
                                                    </select>
                                                    @error('exp')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="username">Qualification</label>
                                                    <input type="text" class="form-control" name="qualification">
                                                    @error('qualification')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="username">Location</label>
                                                    <input type="text" class="form-control" name="location">
                                                    @error('location')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="message">Job Description</label>
                                                    <textarea class="form-control" rows="5" name="description"></textarea>
                                                    @error('description')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group row">
                                                    <label for="example-date-input"
                                                        class="col-sm-2 col-form-label text-right">Closed On</label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="date" value=""
                                                            name="closedate">
                                                        @error('closedate')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-right">Job Status</label>
                                                    <div class="col-sm-6">
                                                        <select class="custom-select" name="status">
                                                            <option selected="">Active</option>
                                                            <option value="1">Un Active</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 text-right">
                                                <button class="btn btn-primary px-5 py-2" type="submit">Post
                                                    Job</button>
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
