@extends('layouts.stock_header')

@section('heading')
<div class="col-md-6">
    <center>
        <a class="btn btn-primary btn-round btn-lg" href="{{route('skprofile')}}">My Profile</a>
        &nbsp;&nbsp;
        <a class="btn btn-primary btn-simple btn-round btn-lg" href="{{route('stockadd')}}">Add Stock</a>
        <a class="btn btn-primary btn-simple btn-round btn-lg" href="{{route('stockview')}}">View Stock</a>
    </center>
</div>
@endsection
@section('content')
<style>
    .upper {
            margin-top: 40px;
        }
    </style>
<div class="upper">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Stock Name</td>

                <td>Stock Quantity </td>
                <td>Buying Price</td>
                <td>Selling Price</td>
                <td>Stored Date</td>
                <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($stock as $stocks)
            <tr>
                <td>{{$stocks->id}}</td>
                <td>{{$stocks->stockName}}</td>

                <td>{{$stocks->stockQuantity}}</td>
                <td>{{$stocks->buyingPrice}}</td>
                <td>{{$stocks->sellingPrice}}</td>
                <td>{{$stocks->storedDate}}</td>
                <td><a href="{{ route('editstock')}}" class="btn btn-primary" onclick="event.preventDefault();
                        document.getElementById('edit-form').submit();">Edit

                    </a>

                    <form id="edit-form" action="{{ route('editstock') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="id" value="{{$stocks->id}}">
                    </form>
                </td>
                <td><a href="{{ route('destroystock')}}" class="btn btn-danger" onclick="event.preventDefault();
                    document.getElementById('destroy-form').submit();">Delete

                </a>

                <form id="destroy-form" action="{{ route('destroystock') }}" method="POST" style="display: none;">
                    @csrf
                    <input type="hidden" name="id" value="{{$stocks->id}}">
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        @endsection