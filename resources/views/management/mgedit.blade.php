@extends('layouts.lyt_adm')

@section('name')
    Sales Rep Management
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>{{ __('Edit Salary Information') }}<h2></div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('mgstore') }}">
                            @csrf
    
                            <div class="form-group row justify-content-center">

                                    <label for="grade" class="col-md-4 col-form-label text-md-right">{{ __('Sales rep Grade') }}</label>
                                        <br/>
                                    <div class="col-md-3">
                                      <input id="grade" type="text" class="form-control" name="grade" value="{{$mgt->grade}}" >
                                    </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                    <label for="grade" class="col-md-4 col-form-label text-md-right">{{ __('Basic Salary') }}</label>
                                        <br/>
                                    <div class="col-md-3">
                                      <input id="grade" type="text" class="form-control" name="sal" value="{{$mgt->basic_sal}}" >
                                    </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                    <label for="grade" class="col-md-4 col-form-label text-md-right">{{ __('Additional payment per sale') }}</label>
                                        <br/>
                                    <div class="col-md-3">
                                      <input id="grade" type="text" class="form-control" name="rate" value="{{$mgt->add_rate}}" >
                                    </div>
                            </div>
                            <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Save changes') }}
                                        </button>
                                    </div>
                            </div>
                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    
@endsection