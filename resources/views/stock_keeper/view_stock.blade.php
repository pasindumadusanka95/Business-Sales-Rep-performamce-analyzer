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
    .flash-message{
        z-index: 50000;
        position: relative;
        width: auto;
        height: auto;
    }

    </style>
<div class="upper">
        <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                  @if(Session::has('alert-' . $msg))
            
                  <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                  @endif
                @endforeach
              </div> 
    <table class="table table-striped" id="stocktable">
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
                <td><a href="" class="btn btn-primary" onclick="event.preventDefault();
                        document.getElementById('edit-form-{{$stocks->id}}').submit();">Edit

                    </a>

                <form id="edit-form-{{$stocks->id}}" action="{{ route('editstock') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="id" value="{{$stocks->id}}">
                    </form>
                </td>
                <td><a href="" class="btn btn-danger" onclick="event.preventDefault();
                    document.getElementById('destroy-form-{{$stocks->id}}').submit();">Delete

                </a>

                <form id="destroy-form-{{$stocks->id}}" action="{{ route('destroystock') }}" method="POST" style="display: none;">
                    @csrf
                    <input type="hidden" name="id" value="{{$stocks->id}}">
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
            <script type="text/javascript">

                $(document).ready(function(){
                    var element_to_scroll_to = document.getElementById('stocktable');
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