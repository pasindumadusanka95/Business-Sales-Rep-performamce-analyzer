@extends('layouts.stock_header')

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
                    <td>{{$stocks->stock_name}}</td>
                    <td>{{$stocks->stock_qty}}</td>
                    <td>{{$stocks->buying_price}}</td>
                    <td>{{$stocks->selling_price}}</td>
                    <td>{{$stocks->stored_date}}</td>
                    <td><a href="{{ route('stocks.edit',$stocks->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('stocks.destroy', $stocks->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection