@extends('layouts.lyt_adm')

@section('name')
    Sales Rep Management
@endsection

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Sales Rep Payment Details</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                    <th>Sales Rep Grade</th>
                    <th>Basic Salary</th>
                    <th>Additional payment per sale</th>
                    </thead>
                    <tbody>

                        @foreach ($mgt as $item)
                             <tr>
                                 <td>{{$item->grade}}</td>
                                 <td>{{$item->basic_sal}}</td>
                                 <td>{{$item->add_rate}}</td>
                                @if ($item->grade == 1)
                                <td><a type="button" class="btn btn-sm btn-default float-right" href="{{ route('mgedit1') }}">Edit Record</a></td>
                                @endif 
                                @if ($item->grade == 2)
                                <td><a type="button" class="btn btn-sm btn-default float-right" href="{{ route('mgedit2') }}">Edit Record</a></td>
                                @endif
                                @if ($item->grade == 3)
                                <td><a type="button" class="btn btn-sm btn-default float-right" href="{{ route('mgedit3') }}">Edit Record</a></td>
                                @endif
                            </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br/>
<div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary justify-content-center">
                <h4 class="card-title "><center>Salary Sheet</center></h4>
            </div>
            <div class="card-body">
                    <form method="POST" action="{{ route('mgsearch') }}">
                            @csrf
                            <div class="input-group no-border">
                                    <input type="text" value="" name="id" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                      <i class="material-icons">search</i>
                                      <div class="ripple-container"></div>
                                    </button>
                                  </div>
                
                    </form>
                    @if($active == 1)
                    
                    <div class="form-group row justify-content-center">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Sales rep name') }}</label>
                            <br/>
                        <div class="col-md-3">
                          <input id="name" type="text" class="form-control" name="name" placeholder="{{$rep->name}}" >
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                            <label for="sale" class="col-md-4 col-form-label text-md-right">{{ __('Sales per month') }}</label>
                                <br/>
                            <div class="col-md-3">
                              <input id="sale" type="text" class="form-control" name="sale" placeholder="{{$rep->sales_per_month}}" >
                            </div>
                    </div>
                    <div class="form-group row justify-content-center">
                            <label for="grade" class="col-md-4 col-form-label text-md-right">{{ __('Sales Grade') }}</label>
                                <br/>
                            <div class="col-md-3">
                              <input id="grade" type="text" class="form-control" name="grade" placeholder="{{$rep->grade}}" >
                            </div>
                    </div>
                    <div class="form-group row justify-content-center">
                            <label for="grade" class="col-md-4 col-form-label text-md-right">{{ __('Extra Sales') }}</label>
                                <br/>
                            <div class="col-md-3">
                              <input id="grade" type="text" class="form-control" name="grade" placeholder="{{$dif}}" >
                            </div>
                    </div>
                    <div class="form-group row justify-content-center">
                            <label for="grade" class="col-md-4 col-form-label text-md-right">{{ __('Basic Salary') }}</label>
                                <br/>
                            <div class="col-md-3">
                              <input id="grade" type="text" class="form-control" name="grade" placeholder="{{$gsal}}" >
                            </div>
                    </div>
                    <div class="form-group row justify-content-center">
                            <label for="grade" class="col-md-4 col-form-label text-md-right">{{ __('Extra Payment') }}</label>
                                <br/>
                            <div class="col-md-3">
                              <input id="grade" type="text" class="form-control" name="grade" placeholder="{{$extra}}" >
                            </div>
                    </div>
                    <div class="form-group row justify-content-center">
                            <label for="grade" class="col-md-4 col-form-label text-md-right">{{ __('Gross Salary') }}</label>
                                <br/>
                            <div class="col-md-3">
                              <input id="grade" type="text" class="form-control" name="grade" placeholder="{{$total}}" >
                            </div>
                    </div>

                    @endif
                    
            </div>
        </div>
        
    </div>

@endsection