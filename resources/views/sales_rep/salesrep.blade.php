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

      <div class="section">
        <div class = "card">  
          <div class="card header card-header-primary">
            <h4 class="card-title">New Sale</h4>
            <p class="card-category">Add Sale Details</p>
          </div>
        <div class="container">

                <form method="POST" action="{{ route('stockupdate') }}" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    
                      <div class="form-group row justify-content-center">
                          <div class="col-md-6">
                              <label class="bmd-label-floating">Shop Name</label>
                              <input type="text" class="form-control {{ $errors->has('shop_name') ? ' is-invalid' : '' }}" id="shop_name" name="shop_name" placeholder="Eg: Sandasi Bookshop" required>
                          </div>
                      </div>

                      <div class="form-group row justify-content-center">
                          <div class="col-md-6">
                              <label class="bmd-label-floating">Shop address</label>
                              <input type="text" class="form-control {{ $errors->has('shop_address') ? ' is-invalid' : '' }}" id="shop_address" name="shop_address" placeholder="Eg: No. 155 Galle Road, Moratuwa" required>
                          </div>
                      </div>

                      <div class="form-group row justify-content-center">
                          <div class="col-md-3">
                              <label class="bmd-label-floating">Stock Type</label>
                              <input type="text" class="form-control {{ $errors->has('stock_type') ? ' is-invalid' : '' }}" id="stock_type" name="stock_type" placeholder="Eg: Stationary : Books" required>
                          </div>
                          <div class="col-md-3">
                              <label class="bmd-label-floating">Quantity</label>
                              <input type="text" class="form-control {{ $errors->has('quantity') ? ' is-invalid' : '' }}" id="quantity" name="quantity" placeholder="Eg: 20pcs" required>
                          </div>
                      </div>

                      <div class="form-group row justify-content-center">
                          <div class="col-md-3">
                              <label class="bmd-label-floating">Unit Price</label>
                              <input type="text" class="form-control {{ $errors->has('unit_price') ? ' is-invalid' : '' }}" id="unit_price" name="unit_price" placeholder="Eg: Rs 80" required>
                          </div>
                          <div class="col-md-3">
                              <label class="bmd-label-floating">Discount</label>
                              <input type="text" class="form-control {{ $errors->has('discount') ? ' is-invalid' : '' }}" id="discount" name="discount" placeholder="Eg: Rs 2500" required>
                          </div>
                      </div>
                   
                      <div class="form-group row justify-content-center">
                          <div class="col-md-6">
                              <label class="bmd-label-floating">Total Price</label>
                        <input type="text" class="form-control {{ $errors->has('total_price') ? ' is-invalid' : '' }}" id="total_price" name="total_price" placeholder="Eg: Rs 25000" required>
                          </div>
                      </div>

                      <div class="form-group row justify-content-center">
                          <div class="col-md-6">
                              <label class="bmd-label-floating">Receipt No.</label>
                        <input type="text" class="form-control {{ $errors->has('receiptNo') ? ' is-invalid' : '' }}" id="receiptNo" name="receiptNo" placeholder="Eg: R5000" required>
                          </div>
                      </div>

                      <div class="form-group row justify-content-center">
                          <div class="col-md-6">
                              <label>Remarks</label><br/>
                            
                        <label class="bmd-label-floating"> Put other details about the sale, if any...</label>
                        <textarea class="form-control" id="remarks" name="remarks" rows="3"></textarea>
                          </div>
                      </div>
                    
                   
                
                <button type="submit" class="btn btn-primary">Submit</button>
                
                </form>
                <div>
  
        </div>
      </div>
    </div>
      @endsection