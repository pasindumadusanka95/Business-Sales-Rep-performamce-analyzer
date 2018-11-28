@extends('layouts.lyt_adm')
@section('content')


    <form class="navbar-form" action="">
        <div class="input-group no-border">
            <input type="text" value="" class="form-control" placeholder="Search...">
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
            </button>
        </div>
    </form>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">Sales Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                        <th>Shop Name</th>
                                        <th>Shop Address</th>
                                        <th>Stock Type</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Discount</th>
                                        <th>Total Price</th>
                                        <th>Receipt No</th>
                                        <th>Remarks</th>
                                        </thead>
                                        <tbody>
                                        @foreach($Sales as $Sale)
                                            <tr>
                                                <td>{{$Sale->shop_name}}</td>
                                                <td>{{$Sale->shop_address}}</td>
                                                <td>{{$Sale->stock_type}}</td>
                                                <td>{{$Sale->quantity}}</td>
                                                <td>{{$Sale->unit_price}}</td>
                                                <td>{{$Sale->discount}}</td>
                                                <td>{{$Sale->total_price}}</td>
                                                <td>{{$Sale->receiptNo}}</td>
                                                <td>{{$Sale->remarks}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title mt-0"> Sales Rep Details</h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="">
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Salary</th>
                                        <th>Grade</th>
                                        <th>Sales per Month</th>

                                        </thead>
                                        <tbody>
                                        @foreach($SalesRepD as $Salerep)
                                            <tr>
                                                <td>{{$Salerep->name}}</td>
                                                <td>{{$Salerep->email}}</td>
                                                <td>{{$Salerep->address}}</td>
                                                <td>{{$Salerep->phone}}</td>
                                                <td>{{$Salerep->salary}}</td>
                                                <td>{{$Salerep->grade}}</td>
                                                <td>{{$Salerep->sales_per_month}}</td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title mt-0"> Stocks Details</h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="">
                                        <th>Stock ID</th>
                                        <th>Stock Name</th>
                                        <th>Stock Quantity</th>
                                        <th>Buying Price</th>
                                        <th>Selling Price</th>
                                        <th>Stored Date</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>

                                        </thead>
                                        <tbody>
                                        @foreach($Stocks as $Stock)
                                            <tr>
                                                <td>{{$Stock->id}}</td>
                                                <td>{{$Stock->stockName}}</td>
                                                <td>{{$Stock->stockQuantity}}</td>
                                                <td>{{$Stock->buyingPrice}}</td>
                                                <td>{{$Stock->sellingPrice}}</td>
                                                <td>{{$Stock->storedDate}}</td>
                                                <td>{{$Stock->created_at}}</td>
                                                <td>{{$Stock->updated_at}}</td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

@endsection
