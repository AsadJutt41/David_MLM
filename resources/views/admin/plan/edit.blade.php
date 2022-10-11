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
        </div>
        <!--End Page header-->

        <!-- Row -->
        <div class="row">
            <div class="col-12">
                <!--div-->
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.plan.update', ['id' =>$plan->id]) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="label-control" for="">Name</label>
                                    <input type="text" name="name" value="{{ $plan->name }}" class="form-control" required>
                                    @if($errors->has('name'))
                                        <div class="error">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label class="label-control" for="">Amount</label>
                                    <input type="text" name="amount" value="{{ $plan->amount }}" class="form-control" required>
                                    @if($errors->has('amount'))
                                        <div class="error">{{ $errors->first('amount') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <label class="label-control" for="">Duration</label>
                                    <input type="text" name="duration" value="{{ $plan->duration }}" class="form-control" required>
                                    @if($errors->has('duration'))
                                        <div class="error">{{ $errors->first('duration') }}</div>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label class="label-control" for="">Currency</label>
                                    <input type="text" name="currency" value="{{ $plan->currency }}" class="form-control" required>
                                    @if($errors->has('currency'))
                                        <div class="error">{{ $errors->first('currency') }}</div>
                                    @endif
                                </div>
                            </div>

                            <button class="btn btn-primary mt-3">Update Plan</button>
                        </form>
                    </div>
                </div>
                <!--/div-->
            </div>
        </div>
        <!-- /Row -->
    </div>
</div>
<!-- CONTAINER END -->

@endsection