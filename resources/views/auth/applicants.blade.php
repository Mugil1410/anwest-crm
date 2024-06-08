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
                            <a href="" class="btn btn-danger" id="deleteallselectedrecord">Delete selected row</a>
                            <button id="filter" class="btn btn-primary px-4 btn-rounded float-right mt-0 mb-3">Filter</button>
                            <select id="applyforfilter" class="btn btn-outline-primary px-4 btn-rounded float-right mt-0 mb-3">
                                <option value="all">All Applicants</option>
                                @foreach ($jobs as $app)
                                    <option value="{{ $app->title }}">{{ $app->title }}</option>
                                @endforeach
                            </select>
                            <select id="statusfilter" class="btn btn-outline-primary px-4 btn-rounded float-right mt-0 mb-3">
                                <option value="all">All</option>
                                <option value="Applied">Applied</option>
                                <option value="Accepted">Accepted</option>
                                <option value="Shortlisted">Shortlisted</option>
                                <option value="Rejected">Rejected</option>  
                            </select>
                            <div class="table-responsive dash-social">
                                <table id="datatable" class="table">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" name="checkall" id="checkall"></th>
                                            <th>ID</th>
                                            <th>APPLIED FOR</th>
                                            <th>NAME</th>
                                            <th>MOBILE</th>
                                            <th>EMAIL</th>
                                            <th>QUALIFICATION</th>
                                            <th>EXP YR</th>
                                            <th>Status</th>
                                            <th>Profile</th>
                                        </tr><!--end tr-->
                                    </thead>
                                    <tbody id="applicants_table">
                                
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

    <script>
        $(document).ready(function() {

            fetchapplicants();

            function fetchapplicants() {
                $.ajax({
                    url: "{{ route('applicants') }}",
                    type: "GET",
                    success: function(response) {
                        $.each(response.applicants, function(key, applicant) {
                            $("#applicants_table").append(
                                '<tr id="applicants_id' + applicant.id + '">\
                                           <td><input type="checkbox" name="ids" class="checkbox_ids" id="" value="' +applicant.id + '"></td>\
                                           <td>' + applicant.id + '</td>\
                                           <td>' + applicant.applying_for + '</td>\
                                           <td>' + applicant.applicant_name + '</td>\
                                           <td>' + applicant.applicant_mobile + '</td>\
                                           <td>' + applicant.applicant_email + '</td>\
                                           <td>' + applicant.qualification + '</td>\
                                           <td>' + applicant.exp_yr + '</td>\
                                          <td><select id="applicant_status" class="' + applicant.id + '" >\
                                            <option value="Applied"' + (applicant.Status === "Applied"? " selected" : "") + '>Applied</option>\
                                             <option value="Accepted"' + (applicant.Status === "Accepted"? " selected" : "") + '>Accepted</option>\
                                            <option value="Shortlisted"' + (applicant.Status === "Shortlisted"? " selected" : "") + '>Shortlisted</option>\
                                            <option value="Rejected"' + (applicant.Status === "Rejected"? " selected" : "") + '>Rejected</option>\
                                           </select></td>\
                                           <td><a href="/applicants_profile/' + applicant.id + '"><i class="ti-user"></i></a></td>\
                                </tr>'
                            );
                        });
                    }
                });
            }


            $('#checkall').click(function() {
                if (this.checked) {
                    $('.checkbox_ids').each(function() {
                        this.checked = true;
                    });
                } else {
                    $('.checkbox_ids').each(function() {
                        this.checked = false;
                    });
                }
            });

            $('#deleteallselectedrecord').click(function(e) {
                e.preventDefault();
                var ids = [];
                $('.checkbox_ids').each(function() {
                    if (this.checked) {
                        ids.push(this.value);
                    }
                });
                if (ids.length > 0) {
                    $.ajax({
                        url: "{{ route('applicantdelete') }}",
                        type: "POST",
                        data: {
                            ids: ids,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            $.each(ids, function(key, value) {
                                $('#applicants_id' + value).remove();
                                toastr.success('Applicant Deleted Successfully');
                            })
                        }
                    });
                 } else {
                    alert('Please select atleast one record to delete');
                }
            })

            $('#filter').click(function() {
                var applyforfilter = $('#applyforfilter').val();
                var statusfilter=$('#statusfilter').val()
                console.log(applyforfilter,statusfilter);
                $.ajax({
                    url: "{{ route('apllicants.filter') }}", // Your Laravel route
                    type: 'POST',
                    data: {
                        applyforfilter: applyforfilter,
                        statusfilter:statusfilter,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                    console.log(response);
                        // Clear existing table rows
                        $('#applicants_table').empty();
                        // Add new rows based on response.applicants
                        $.each(response.applicants, function(key, applicant) {
                            $("#applicants_table").append(
                                '<tr id="applicants_id' + applicant.id + '">\
                                           <td><input type="checkbox" name="ids" class="checkbox_ids" id="" value="' +applicant.id + '"></td>\
                                            <td>' + applicant.id + '</td>\
                                            <td>' + applicant.applying_for + '</td>\
                                            <td>' + applicant.applicant_name + '</td>\
                                            <td>' + applicant.applicant_mobile + '</td>\
                                            <td>' + applicant.applicant_email + '</td>\
                                            <td>' + applicant.qualification + '</td>\
                                            <td>' + applicant.exp_yr + '</td>\
                                         <td><select id="applicant_status" class="' + applicant.id + '" >\
                                            <option value="Applied"' + (applicant.Status === "Applied"? " selected" : "") + '>Applied</option>\
                                             <option value="Accepted"' + (applicant.Status === "Accepted"? " selected" : "") + '>Accepted</option>\
                                            <option value="Shortlisted"' + (applicant.Status === "Shortlisted"? " selected" : "") + '>Shortlisted</option>\
                                            <option value="Rejected"' + (applicant.Status === "Rejected"? " selected" : "") + '>Rejected</option>\
                                           </select></td>\
                                         <td><a href="/applicants_profile/' + applicant.id + '"><i class="ti-user"></i></a></td>\
                                 </tr>'
                            );
                        });
                    },
                });

                
            });

            $(document).on('change', '#applicant_status', function() {
                  var id = $(this).attr('class');
                  var status = $(this).val();
                  $.ajax({
                    url: "{{ route('applicants.updatestatus') }}",
                    type: "POST",
                    data: {
                        id: id,
                        status: status,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                       
                    }
                  })
             }); 
        });
    </script>
</body>

</html>
