@extends('layouts.salesrep')

@section('content')

      <div class="section">
        <div class = "card">  
        <div class="container">
                <form method="POST" action="{{ route('stockupdate') }}" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    

                    <div class="row-sales">

                      <div class="form-group bmd-form-group-long">
                        <label class="bmd-label-floating">Shop Name</label>
                        <input type="text" class="form-control {{ $errors->has('shop_name') ? ' is-invalid' : '' }}" id="shop_name" name="shop_name" placeholder="Eg: Sandasi Bookshop" required>
                      </div>


                      <div class="form-group bmd-form-group-long">
                        <label class="bmd-label-floating">Shop address</label>
                        <input type="text" class="form-control {{ $errors->has('shop_address') ? ' is-invalid' : '' }}" id="shop_address" name="shop_address" placeholder="Eg: No. 155 Galle Road, Moratuwa" required>
                      </div>

                    </div>
                    <div class="row-sales">
                      <div class="col-sales">
                        <div class="form-group bmd-form-group-short">
                          <label class="bmd-label-floating">Stock Type</label>
                          <input type="text" class="form-control {{ $errors->has('stock_type') ? ' is-invalid' : '' }}" id="stock_type" name="stock_type" placeholder="Eg: Stationary : Books" required>
                        </div>


                        <div class="form-group bmd-form-group-short">
                          <label class="bmd-label-floating">Quantity</label>
                          <input type="text" class="form-control {{ $errors->has('quantity') ? ' is-invalid' : '' }}" id="quantity" name="quantity" placeholder="Eg: 20pcs" required>
                        </div>
                      </div>
                    </div>
                    <div class="row-sales">
                      <div class="col-sales">
                        <div class="form-group bmd-form-group-short">
                          <label class="bmd-label-floating">Unit Price</label>
                          <input type="text" class="form-control {{ $errors->has('unit_price') ? ' is-invalid' : '' }}" id="unit_price" name="unit_price" placeholder="Eg: Rs 80" required>
                        </div>




                        <div class="form-group bmd-form-group-short">
                          <label class="bmd-label-floating">Discount</label>
                          <input type="text" class="form-control {{ $errors->has('discount') ? ' is-invalid' : '' }}" id="discount" name="discount" placeholder="Eg: Rs 2500" required>
                        </div>
                      </div>
                    </div>

                    <div class="col-sales">
                      <div class="form-group bmd-form-group-long">
                        <label class="bmd-label-floating">Total Price</label>
                        <input type="text" class="form-control {{ $errors->has('total_price') ? ' is-invalid' : '' }}" id="total_price" name="total_price" placeholder="Eg: Rs 25000" required>
                      </div>
                    </div>
                    <div class="col-sales">
                      <div class="form-group bmd-form-group-long">
                        <label class="bmd-label-floating">Receipt Number</label>
                        <input type="text" class="form-control {{ $errors->has('receiptNo') ? ' is-invalid' : '' }}" id="receiptNo" name="receiptNo" placeholder="Eg: 1502" required>
                      </div>
                    </div>
                </div>
                <div class="row-sales">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Remarks</label>
                      <div class="form-group bmd-form-group-long">
                        <label class="bmd-label-floating"> Put other details about the sale, if any...</label>
                        <textarea class="form-control" id="remarks" name="remarks" rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
                
                </form>
                <div>
  
        </div>
      </div>
      @endsection