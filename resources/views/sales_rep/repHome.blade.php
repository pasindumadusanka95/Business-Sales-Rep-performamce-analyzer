@extends('layouts.salesrep')

@section('heading')
        <div class="col-md-6">
        <center>
          <a class="btn btn-primary btn-round btn-lg" href = "{{route('srprofile')}}"  >My Profile</a>
          &nbsp;&nbsp;
          <a class="btn btn-primary btn-round btn-lg" href = "{{route('srsale')}}" >Add Sale</a>
        </center>
        </div>
@endsection

@section('content')
    Sales Rep Home Page
@endsection
