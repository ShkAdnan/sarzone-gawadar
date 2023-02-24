

@extends('admin.layout.app')

@section('content')



<div class="container">
    <h1 class="my-4">Gwadar Institute of Technology Dashboard</h1>
    <div class="row mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card py-3 bg-primary text-white mb-4">
                <div class="card-body">
                    <h5 class="float-left">Career Jobs Appliers</h5>
                    <h5 class="float-right">( {{$careerAppliers}} )</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card py-3 bg-primary text-white mb-4">
                <div class="card-body">
                    <h5 class="float-left">Placement Jobs Appliers</h5>
                    <h5 class="float-right">( {{$placementAppliers}} )</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card py-3 bg-primary text-white mb-4">
                <div class="card-body">
                    <h5 class="float-left">Admission Requests</h5>
                    <h5 class="float-right">( {{$onlineApplications}} )</h5>
                </div>
            </div>
        </div>
        
        <h2 class="col-12 my-5">Visitors Information</h2>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card py-3 bg-dark text-white mb-4">
                <div class="card-body">
                    <h5 class="float-left">Total Visitors</h5>
                    <h5 class="float-right">( {{$totalVisitors}} )</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card py-3 bg-dark text-white mb-4">
                <div class="card-body">
                    <h5 class="float-left">Unique Visitors</h5>
                    <h5 class="float-right">( {{$uniqueVisitors}} )</h5>
                </div>
            </div>
        </div>
        
    </div>
</div>



@endsection

