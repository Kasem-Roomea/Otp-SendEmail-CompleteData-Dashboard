@extends('layouts.master')
@section('css')
    @livewireStyles
@section('title')
    Complete Information
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> Complete Information</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Dashboard</a></li>
                <li class="breadcrumb-item active">Complete Information</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
            @if(!Auth::User()->IsCompleted)
                <!-- LiveWire Page Complete Information-->
                <livewire:show-complete-info />
            @else
                    <div class="alert alert-success justify-content-center d-flex" role="alert">
                        <h4 class="alert-heading">Well done complete information content !</h4><br>
                    </div>

                @endif

            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
    @livewireScripts
@endsection
