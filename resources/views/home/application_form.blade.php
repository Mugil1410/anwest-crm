<!DOCTYPE html>
<html lang="en">

@include('home.layouts.head')

<body class="services-details-page" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- ======= Header ======= -->
    @include('home.layouts.header')<!-- End Header -->
    <!-- End Header -->

    <main id="main">

        <!-- Page Title -->
        <div data-aos="fade" class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="">Home</a></li>
                        <li class="current">Application Form</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <section class="application">
            <div class="container-xxl">

                <form action="{{ route('store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <p>Applying for<span class="required">*</span></p>
                    <input type="text" required="true" value="{{ $jobs->title }}" name="applying_for" readonly>
                    <input type="hidden" name= "Job_ID" value={{ $jobs->id }} /><br>
                    <div class="name-item">
                        <div class="item">
                            <p>Name<span class="required">*</span></p>
                            <input type="text" name="applicant_name" value = "{{ old('applicant_name') }}" />

                            @error('applicant_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div><br>

                        <div class="contact-item">
                            <div class="item">
                                <p>Email<span class="required">*</span></p>
                                <input type="email" name="applicant_email" value = "{{ old('applicant_email') }}" />
                                @error('applicant_email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div><br>
                            <div class="item">
                                <p>Phone<span class="required">*</span></p>
                                <input type="text" name="applicant_mobile" value = "{{ old('applicant_mobile') }}" />
                                @error('applicant_mobile')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><br>

                        <div class="education-item">
                            <div class="item">
                                <p>Qualification<span class="required">*</span></p>
                                <input type="text" name="qualification" value = "{{ old('qualification') }}" />
                                @error('qualification')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div><br>
                            <div class="item">
                                <p>Skills<span class="required">*</span></p>
                                <input type="text" placeholder="Field of study" name="skills"
                                    value = "{{ old('skills') }}" />
                                @error('skills')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><br>

                        <div class="experience-item">
                            <div class="item">
                                <p>Year Of Experience<span class="required">*</span></p>
                                <input type="text" name="exp_yr" value = "{{ old('exp_yr') }}" />
                                @error('exp_yr')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div><br>
                            <div class="item">
                                <p>Designation<span class="required">*</span></p>
                                <input type="text" placeholder="if no exp. just enter NA" name="designation"
                                    value = "{{ old('designation') }}" />
                                @error('designation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div><br>
                            <div class="item">
                                <p>Last Employer<span class="required">*</span></p>
                                <input type="text" placeholder="if not applicable just enter NA" name="last_employer"
                                    value = "{{ old('last_employer') }}" />
                                @error('last_employer')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><br>

                        <div class="position-item">
                            <div class="item">
                                <p>Joining Period<span class="required">*</span></p>
                                <select name="peroid" class="dropdown-item>
                                    <option value =""> Select Joining Period </option>
                                    <option  value=">Immediate Joining" {{ old('period') == '>Immediate Joining"' ? 'selected' : '' }}>Immediate
                                        Joining</option>
                                    <option value=">7 days" {{ old('period') == '>7 day' ? 'selected' : '' }}>7 days</option>
                                    <option value=">10 days" {{ old('period') == '>10 day' ? 'selected' : '' }}>10 day</option>
                                    <option value=">15 days" {{ old('period') == '>15 days' ? 'selected' : '' }}>15 days
                                    </option>
                                    <option value=">30 days" {{ old('period') == '>30 days' ? 'selected' : '' }}>30 days
                                    </option>
                                    <option value=">>more than 30" {{ old('period') == '>more than 30' ? 'selected' : '' }}>more than 30
                                        days</option>
                                </select>
                                @error('peroid')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><br>


                        <div class="item">
                            <p>Resume URL or Linked in url:</p>
                            <input type="text" name="profile_link" value={{ old('profile_link') }}"" />
                            @error('profile_link')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div><br>
                        <div class="item">
                            <label for="Resume_path">Add Resume</label>
                            <input type="file" class="custom-file-input" name="Resume_path"
                                accept="file/* value = "{{ old('Resume_path') }}">
                            @error('Resume_path')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="btn-block">
                            <input type="submit" value="Apply for job" class="btn btn-primary" name="submit" />

                        </div>
                </form>
            </div>
            </div>

        </section>

        @include('home.layouts.footer');
        @include('home.layouts.script');

    </main>

    <!-- ======= Footer ======= -->


</body>

</html>
