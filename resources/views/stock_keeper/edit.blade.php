@extends('layouts.stock_header')

@section('heading')
    <div class="col-md-6">
        <center>
            <a class="btn btn-primary btn-simple btn-round btn-lg" href = "{{route('skprofile')}}"  >My Profile</a>
            &nbsp;&nbsp;
            <a class="btn btn-primary btn-round btn-lg" href = "{{route('stockadd')}}" >Add Stock</a>

            <a class="btn btn-primary btn-round btn-lg" href = "{{route('stockview')}}" >View Stock</a>
        </center>
    </div>
@endsection

@section('content')
    <style>
        .upper {
            margin-top: 40px;
        }
    </style>
    <div class="card upper">
        <div class="card-header">
            Edit Share
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
            <form method="post" action="{{ route('updatestock', $stock->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Stock Name:</label>
                    <input type="text" class="form-control" name="stock_name" value={{ $stock->stock_name }} />
                </div>
                <div class="form-group">
                    <label for="quantity">Stock Quantity:</label>
                    <input type="text" class="form-control" name="stock_qty" value={{ $stock->stock_qty }} />
                </div>
                <div class="form-group">
                    <label for="price">Buying Price :</label>
                    <input type="text" class="form-control" name="buying_price" value={{ $stock->buying_price }} />
                </div>
                <div class="form-group">
                    <label for="price">Selling Price :</label>
                    <input type="text" class="form-control" name="selling_price" value={{ $stock->selling_price }} />
                </div>
                <div class="form-group">
                    <label for="price">Stored Date :</label>
                    <input type="text" class="form-control" name="stored_date" value={{ $stock->stored_date }} />
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection