@extends('layouts.admin')

@section('content')
 <!--app-content open-->
 <div class="app-content main-content">
    <div class="side-app">

        
        <!--Page header-->
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title mb-0 text-primary">Data Tables</h4>
            </div>
            <div class="page-rightheader">
                <div class="btn-list">
                    <button class="btn btn-outline-primary"><i class="fe fe-download"></i>
                        Import</button>
                    <a href="javascript:void(0);"  class="btn btn-primary btn-pill" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-calendar me-2 fs-14"></i> Search By Date</a>
                    <div class="dropdown-menu border-0">
                            <a class="dropdown-item" href="javascript:void(0);">Today</a>
                            <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                            <a class="dropdown-item active bg-primary text-white" href="javascript:void(0);">Last 7 days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last 30 days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last 6 months</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last year</a>
                    </div>
                </div>
            </div>
        </div>
        <!--End Page header-->

        <!-- Row -->
        <div class="row">
            <div class="col-12">
                <!--div-->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#planModel">Add New Plan</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered text-nowrap key-buttons">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">No</th>
                                            <th class="border-bottom-0">Name</th>
                                            <th class="border-bottom-0">Duration</th>
                                            <th class="border-bottom-0">Amount</th>
                                            <th class="border-bottom-0">Currency</th>
                                            <th class="border-bottom-0">Created At</th>
                                            <th class="border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($planes as $item)
                                            <tr>
                                                <td>@php echo $i++; @endphp</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->duration }}</td>
                                                <td>{{ $item->amount }}</td>
                                                <td>{{ $item->currency }}</td>  
                                                <td>{{ $item->created_at->translatedFormat('l j F Y') }}</td>
                                                <td>
                                                    <a href="{{ route('admin.plan.edit', ['id'=>$item->id]) }}"><i class="fa fa-edit" style="font-size: 22px; color: blue;"></i></a>
                                                    <a href="{{ route('admin.plan.delete', ['id'=>$item->id]) }}" class="delete-confirm"><i class="fa fa-trash" style="font-size: 22px; color: red; margin-left: 10px;"  ></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/div-->
            </div>
        </div>
        <!-- /Row -->
    </div>
</div>
<!-- CONTAINER END -->


<!-- Modal -->
<div class="modal fade" id="planModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="planForm" id="planForm" method="post" action="javascript:void(0)">
                    @csrf
                    <div class="col-md-12 mt-3">
                        <label for="name">Plan Name <span class="req">*</span></label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="duration">Plan Duration (days) <span class="req">*</span></label>
                        <input type="text" name="duration" id="duration" class="form-control" required>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="amount">Amount <span class="req">*</span></label>
                        <input type="text" name="amount" id="amount" class="form-control" required>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="currency">Currency <span class="req">*</span></label>
                        <input type="text" name="currency" id="currency" class="form-control" required>
                    </div>

                    <div class="col-md-12 mt-3 mt-4">
                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
    if ($("#planForm").length > 0) {
        $("#planForm").validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 50,
                },
                duration: {
                    required: true,
                },
                amount: {
                    required: true,
                },
                currency: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Please enter plan name",
                    maxlength: "Your plan name maxlength should be 50 characters long.",
                },
                duration: {
                    required: "Please enter plan duration",
                },
                amount: {
                    required: "Please enter plan amount",
                },
                currency: {
                    required: "Please enter plan currency",
                },
            },
            submitHandler: function (form) {
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                });
                $("#submit").html("Please Wait...");
                $("#submit").attr("disabled", true);
                $.ajax({
                    url: "{{route('admin.plan.store')}}",
                    type: "POST",
                    data: $("#planForm").serialize(),
                    success: function (response) {
                        $("#submit").html("Submit");
                        $("#submit").attr("disabled", false);
                        $('#planModel').modal('toggle');
                        swal({
                            title: "Good job!",
                            text: "Plan has been added successfully!",
                            icon: "success",
                            button: "OK!",
                        });
                        document.getElementById("planForm").reset();
                        setTimeout(function() {  
                            location.reload()
                        }, 1700);
                    },
                });
            },
        });
    }

    $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be permanantly deleted!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
</script>

@endpush