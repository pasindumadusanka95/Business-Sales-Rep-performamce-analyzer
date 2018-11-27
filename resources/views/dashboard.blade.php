@extends('layouts.lyt_adm')

@section('name')
    Dashboard
@endsection

@section('content')
<div class="container-fluid">
        <div class="row" >
            <div class="col-lg-3 col-md-6 col-sm-6" style="margin-left: 25px;margin-right: 25px;">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">content_copy</i>
                        </div>
                        <p class="card-category">Total Sales</p>
                        <h3 class="card-title"> {{$totalsales}} </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">local_offer</i> up to date
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" style="margin-left: 25px;margin-right: 25px;">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">store</i>
                        </div>
                        <p class="card-category">Total Revenue</p>
                        <h3 class="card-title"> {{$totalrevenue}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> Last 24 Hours
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" style="margin-left: 25px;margin-right: 25px;">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">people</i>
                        </div>
                        <p class="card-category">No of Sales Reps</p>
                        <h3 class="card-title">{{$repcounter}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">local_offer</i> up to date
                        </div>
                    </div>
                </div>
            </div>

        </div>


            <div id="mych"></div>
            {!! \Lava::render('BarChart', 'Mysales', 'mych') !!}


            <div class="col-lg-10 col-md-14 ">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h3 class="card-title">Current Supplier Status</h3>

                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                            <th>Shop ID</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Contact No</th>
                            </thead>
                            <tbody>
                            @foreach($suppliers as $supplier)
                                <tr>
                                    <td>{{$supplier->shop_id}}</td>
                                    <td>{{$supplier->name}}</td>
                                    <td>{{$supplier->address}}</td>
                                    <td>{{$supplier->contact_no}}</td>

                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

