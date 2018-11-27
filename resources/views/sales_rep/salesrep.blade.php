@extends('layouts.salesrep')

@section('heading')
<div class="col-md-6">
    <center>
      <a class="btn btn-primary btn-round btn-lg" href = "{{route('srprofile')}}"  >My Profile</a>
      &nbsp;&nbsp;
      <a class="btn btn-primary btn-simple btn-round btn-lg" href = "{{route('srsale')}}" >Add Sale</a>
    </center>
    </div>
@endsection

@section('content')

      <div class="section">
        <div class = "card">  
          <div class="card header card-header-primary">
            <h4 class="card-title">New Sale</h4>
            <p id="sale" class="card-category">Add Sale Details</p>
          </div>
        <div class="container">

                <form method="POST" action="{{ route('stockupdate') }}" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">

                      <!--  <div class="form-group row justify-content-center">
                                <div class="form-group bmd-form-group-date">
                                    <label class="bmd-label-floating">Date of Sale</label>
                              <input class="date form-control {{ $errors->has('dateOfSale') ? ' is-invalid' : '' }}" type="text" id="dateOfSale" name="dateOfSale" placeholder="Eg: MM-DD-YYYY" required>
                                </div>
                    
                        </div>!-->
                             
                             <br>
     
                             
                    
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
                          <div class="col-md-6">
                              <label class="bmd-label-floating">Stock Type</label>
                              <select name="prod_id" class="productname" id="prod_name">
                                  <option value="0" disabled="true" selected="true">--Select--</option>
                                      @foreach ($prod as $item)
                                          <option value="{{$item->stockName}}">{{$item->stockName}}</option>
                                      @endforeach
                              </select>
                            <button type="button" class="bt_check_available" onclick="checkAvailability()">Check Availability</button>

                          </div>
                          
                      </div>

                      <div class="form-group row justify-content-center">
                          <div class="col-md-3">
                              <label class="bmd-label-floating">Available Quantity</label>
                          <input type="text" class="form-control" disabled id="disp_quantity" name="disp_quantity"  required>
                          </div>
                      

                      
                            <div class="col-md-3">
                              <label class="bmd-label-floating">Price</label>
                              <input type="text" class="form-control" disabled id="disp_price" name="disp_price" required>
                          </div>
                      </div>

                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
                      </script>
                      <script type="text/javascript">

                        $(document).ready(function(){
                            var element_to_scroll_to = document.getElementById('sale');
                            var navbar_height = 0;
                            animate_scroll(element_to_scroll_to, navbar_height, 25);
                            
                            
                            function animate_scroll (element, variable, offset) {
                            $('html, body').stop().animate({
                            scrollTop: $(element).offset().top - variable - offset
                        }, 600);
                        }
                        });
/*
                        $(document).ready(function(){
                            $(document).on('change','#prod_name',function(){
                                var prod_id = $(this).val();
                                var a = $(this).parent();
                                console.log(prod_id);
                                var op = "";
                                $.ajax({
                                type:'get',
                                url:'{{URL::to('findQty')}}',
                                data:{'id':prod_id},
                                dataType:'json',
                                success:function(data){
                                    console.log("price");
                                    console.log(data.stockQuantity);
                                    a.find('#disp_quantity').val(data.stockQuantity);
                                },
                                error:function(){
                                    console.log("Error - 2");
                                }
                });
            });
                        });
                        */
                    </script>
                    <script>
                            function checkAvailability(){
                            var e = document.getElementById('prod_name');
                            var selected_stock_type = e.options[e.selectedIndex].value;
                            $.ajax({
                                type:'get',
                                url:'{{URL::to('checkAvailability')}}',
                                data:{'prod_name':selected_stock_type},
                                dataType:'json',
                                success:function(data){
                                    console.log(data);
                                    document.getElementById('disp_quantity').setAttribute('value',data.stockQuantity);
                                    document.getElementById('disp_price').setAttribute('value',data.sellingPrice);
                                },
                                error:function(){
                                    console.log("Error - 2");
                                }
                });
                            
                            
                            }
                        </script>

                      <div class="form-group row justify-content-center">
                          <div class="col-md-3">
                              <label class="bmd-label-floating">Quantity</label>
                              <input type="text" class="form-control {{ $errors->has('quantity') ? ' is-invalid' : '' }}" id="quantity" name="quantity" placeholder="Eg: 20pcs" required onchange="getTotal()">
                          </div>
                      

                      
                            <div class="col-md-3">
                              <label class="bmd-label-floating">Unit Price</label>
                              <input type="text" class="form-control {{ $errors->has('unit_price') ? ' is-invalid' : '' }}" id="unit_price" name="unit_price" placeholder="Eg: Rs 80" required onchange="getTotal()">
                          </div>
                      </div>
                      <div class="form-group row justify-content-center">
                          <div class="col-md-6">
                              <label class="bmd-label-floating">Discount</label>
                              <input type="text" class="form-control {{ $errors->has('discount') ? ' is-invalid' : '' }}" id="discount" name="discount" placeholder="Eg: Rs 2500" required onchange="getTotal()">
                          </div>
                      </div>
                      
                   
                      <div class="form-group row justify-content-center">
                          <div class="col-md-6">
                              <label class="bmd-label-floating">Total Price</label>
                              
                          <input type="text" class="form-control {{ $errors->has('total_price') ? ' is-invalid' : '' }}" id="total_price" name="total_price" placeholder="Eg: Rs 25000"  required>
                          </div>
                      </div>
                      <script>
                          function getTotal(){
                            var total = document.getElementById('quantity').value * document.getElementById('unit_price').value - document.getElementById('discount').value;
                            document.getElementById('total_price').setAttribute('value',total);
                          }
                          </script>

                      <div class="form-group row justify-content-center">
                          <div class="col-md-6">
                              <label class="bmd-label-floating">Receipt No.</label>
                        <input type="text" class="form-control {{ $errors->has('receiptNo') ? ' is-invalid' : '' }}" id="receiptNo" name="receiptNo" placeholder="Eg: 1001" required>
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
                
  
        </div>
      </div>
    </div>
      @endsection