@extends('layouts.salesrep')

@section('heading')
        <div class="col-md-6">
        <center>
          <a class="btn btn-primary btn-simple btn-round btn-lg" href = "{{route('srprofile')}}"  >My Profile</a>
          &nbsp;&nbsp;
          <a class="btn btn-primary btn-round btn-lg" href = "{{route('srsale')}}" >Add Sale</a>
        </center>
        </div>
@endsection

@section('content')
<style>
  .card-icon-sales{
    border-radius: 3px;
    padding: 15px;
    margin-top: -20px;
    margin-right: 15px;
    float: left;
    margin-left: 20px;
    background-color: #f9690e;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4);
  }
  .card-category-sales{
    float: right;
    padding: 20px;
    display: block;
  }
  .card-title-sales{
    float: left;
    font-size: 20pt;
    margin: 10px;
  }
  .card-header-sales{
    padding: 10px;
    height: auto;
    width: 100%;
  }
  </style>
<div class="card">
<h1>
    Sales Rep Profile
</h1>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
  <div class="card card-stats">
      <div class="card-header-sales">
          <div class="card-icon-sales">
              <i class="now-ui-icons business_chart-bar-32" style="    font: normal normal normal 32px/1 'Nucleo Outline';
              font-style: normal;
              font-variant-ligatures: normal;
              font-variant-caps: normal;
              font-variant-numeric: normal;
              font-variant-east-asian: normal;
              font-weight: normal;
              font-stretch: normal;
              font-size: 32px;
              line-height: 1;
              font-family: 'Nucleo Outline';"></i>
          </div>
          <p class="card-category-sales">Total Sales</p>
          <label class="card-title-sales"> {{$totalsales}} </label>
      </div>
  </div>
</div>
<div id="mychart"></div>
{!! \Lava::render('LineChart', 'MyStocks', 'mychart') !!}

@endsection