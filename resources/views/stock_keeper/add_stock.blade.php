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

    <div class="section">
        <div class = "card">
            <div class="card header card-header-primary">
                <h4 class="card-title">New Stock</h4>
                <p class="card-category">Add Stock Details</p>
            </div>
            <div class="container">

                <form method="POST" action="{{ route('stock_keeper.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <label class="bmd-label-floating">Stock Name:</label>
                                <input type="text" class="form-control {{ $errors->has('stock_name') ? ' is-invalid' : '' }}" id="stock_name" name="stock_name" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <label class="bmd-label-floating">Stock Quantity</label>
                                <input type="number" class="form-control {{ $errors->has('stock_qty') ? ' is-invalid' : '' }}" id="stock_qty" name="stock_qty" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-3">
                                <label class="bmd-label-floating">Buying Price</label>
                                <input type="decimal" class="form-control {{ $errors->has('buying_price') ? ' is-invalid' : '' }}" id="buying_price" name="buying_price" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-3">
                                <label class="bmd-label-floating">Selling Price</label>
                                <input type="decimal" class="form-control {{ $errors->has('selling_price') ? ' is-invalid' : '' }}" id="selling_price" name="selling_price" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-3">
                                <label class="bmd-label-floating">Unit Price</label>
                                <input type="date" class="form-control {{ $errors->has('stored_date') ? ' is-invalid' : '' }}" id="stored_date" name="stored_date" placeholder="" required>
                            </div>
                        </div>


                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <label>Remarks</label><br/>

                                <label class="bmd-label-floating"> Put other details about the stock, if any...</label>
                                <textarea class="form-control" id="remarks" name="remarks" rows="3"></textarea>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection