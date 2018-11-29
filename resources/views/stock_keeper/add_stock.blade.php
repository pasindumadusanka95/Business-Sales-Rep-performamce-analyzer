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

    <div class="section" id="addStockTable">
        <div class = "card">
            <div class="card header card-header-primary">
                <h4 class="card-title">New Stock</h4>
                <p class="card-category">Add Stock Details</p>
            </div>
            <div class="container">

                <form method="POST" action="{{route('addStockPost')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <label class="bmd-label-floating">Stock Name:</label>
                                <input type="text" class="form-control {{ $errors->has('stockName') ? ' is-invalid' : '' }}" id="stockName" name="stockName" placeholder="" required>
                            </div>
                        </div>


                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <label class="bmd-label-floating">Stock Quantity</label>
                                <input type="number" class="form-control {{ $errors->has('stockQuantity') ? ' is-invalid' : '' }}" id="stockQuantity" name="stockQuantity" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-3">
                                <label class="bmd-label-floating">Buying Price</label>
                                <input type="decimal" class="form-control {{ $errors->has('buyingPrice') ? ' is-invalid' : '' }}" id="buyingPrice" name="buyingPrice" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-3">
                                <label class="bmd-label-floating">Selling Price</label>
                                <input type="decimal" class="form-control {{ $errors->has('sellingPrice') ? ' is-invalid' : '' }}" id="sellingPrice" name="sellingPrice" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-3">
                                <label class="bmd-label-floating">Stored Date</label>
                                <input type="date" class="form-control {{ $errors->has('storedDate') ? ' is-invalid' : '' }}" id="storedDate" name="storedDate" placeholder="" required>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        $(document).ready(function(){
            var element_to_scroll_to = document.getElementById('addStockTable');
            var navbar_height = 20;
            animate_scroll(element_to_scroll_to, navbar_height, 100);
            
            
            function animate_scroll (element, variable, offset) {
            $('html, body').stop().animate({
            scrollTop: $(element).offset().top - variable - offset
        }, 600);
        }
        });
    </script>
@endsection