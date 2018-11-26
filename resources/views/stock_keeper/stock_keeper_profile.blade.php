@extends('layouts.stock_header')

@section('heading')
    <div class="col-md-6">
        <center>
            <a class="btn btn-primary btn-round btn-lg" href = "{{route('skprofile')}}"  >My Profile</a>
            &nbsp;&nbsp;
            <a class="btn btn-primary btn-simple btn-round btn-lg" href = "{{route('stockadd')}}" >Add Stock</a>
            <a class="btn btn-primary btn-simple btn-round btn-lg" href = "{{route('stockview')}}" >View Stock</a>
        </center>
    </div>
@endsection

@section('content')
    <div class="card">
        <h1>
            Stock Keeper Profile
        </h1>
    </div>
@endsection