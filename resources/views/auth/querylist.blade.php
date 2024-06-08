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
                            @if(count($queries)!=0)
                            <button class="btn btn-danger" id="deleteallselectedrecord">Delete selected row</button>
                            <div class="table-responsive dash-social">
                                <table id="datatable" class="table">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" name="checkall" id="checkall"></th>
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
                                                <tr id="subscriber_id{{ $sub->id }}">
                                                    <td><input type="checkbox" name="ids" value="{{ $sub->id }}" class="checkbox_ids" id="{{ $sub->id }}"></td>
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
                            @else 
                            <div class="card-body">
                                <center><p>No queries(s) found.</p></center>
                            </div>
                            @endif
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
    <script>
        $(document).ready(function(){
                $('#checkall').click(function(){
                    if(this.checked){
                        $('.checkbox_ids').each(function(){
                            this.checked = true;
                        });
                    }else{
                        $('.checkbox_ids').each(function(){
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
                console.log(ids);
                if (ids.length > 0) {
                    $.ajax({
                        url: "{{ route('querydelete') }}",
                        type: "POST",
                        data: {
                            ids: ids,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            console.log(response);
                            $.each(ids, function(key, value) {
                                $('#subscriber_id' + value).remove();
                            })
                        }
                    });
                 } else {
                    alert('Please select atleast one record to delete');
                }
            })

        })

    </script>

</body>

</html>
