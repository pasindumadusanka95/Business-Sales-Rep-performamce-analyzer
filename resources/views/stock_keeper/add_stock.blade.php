@extends('layouts.stock_header')

@section('content')
    <style>
        .upper {
            margin-top: 40px;
        }
    </style>
    <div class="card upper">
        <div class="card-header">
            Add Share
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('stock_keeper.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">Stock Name:</label>
                    <input type="text" class="form-control" name="stock_name"/>
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" class="form-control" name="stock_qty"/>
                </div>

                <div class="form-group">
                    <label for="bPrice">Share Price :</label>
                    <input type="decimal" class="form-control" name="buying_price"/>
                </div>

                <div class="form-group">
                    <label for="sPrice">Share Price :</label>
                    <input type="decimal" class="form-control" name="selling_price"/>
                </div>

                <div class="form-group">
                    <label for="sdate">Stored Date :</label>
                    <input type="date" class="form-control" name="stored_date"/>
                </div>


                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection