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
                    <form method="POST" action="{{ route('mgstore') }}">
                            @csrf
                    <input type="text" id="rep_id" name="rep_id" class="form-group">
                    <button type="submit" class="btn btn-primary">
                            {{ __('Search') }}
                        </button>
                    </form>
                    <input type="text" id="basic_sal" name="basic_sal" class="form-group">
            </div>
        </div>
        
    </div>

@endsection