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
    <div class="card upper" id="editStock">
        <div class="card-header">
            Edit Stocks
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
            <form method="POST" action="{{ route('updatestock') }}">
                @csrf
                    <input type="hidden" class="form-control" name="id" value="{{ $stock->id }}" >
                <div class="form-group">
                    <label for="name">Stock Name:</label>
                    <input type="text" class="form-control" name="stockName" value="{{ $stock->stockName }}" >
                </div>
                <div class="form-group">
                    <label for="quantity">Stock Quantity:</label>
                    <input type="text" class="form-control" name="stockQuantity" value="{{ $stock->stockQuantity }}" >
                </div>
                <div class="form-group">
                    <label for="price">Buying Price :</label>
                    <input type="text" class="form-control" name="buyingPrice" value="{{ $stock->buyingPrice }}" >
                </div>
                <div class="form-group">
                    <label for="price">Selling Price :</label>
                    <input type="text" class="form-control" name="sellingPrice" value="{{ $stock->sellingPrice }}" >
                </div>
                <div class="form-group">
                    <label for="price">Stored Date :</label>
                    <input type="text" class="form-control" name="storedDate" value="{{ $stock->storedDate }}" />
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">

        $(document).ready(function(){
            var element_to_scroll_to = document.getElementById('editStock');
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