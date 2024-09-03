@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                <table class="table table-responsive table-bordered">
                                     <thead>
                                          <tr>
                                              <th>SL NO</th>
                                              <th>product_name</th>
                                              <th>category_id</th>
                                              <th>supplier_id</th>
                                              <th>product_code</th>
                                              <th>product_garage</th>
                                              <th>product_route</th>
                                              <th>buy_date</th>
                                              <th>expire_date</th>
                                              <th>buying_price</th>
                                              <th>selling_price</th>
                                              <th>product_image</th>
                                              <th>action</th>
                                          </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($product_show as $index=>$product_show )
                                         <tr>
                                                <td>{{$index}}</td>
                                                <td>{{$product_show->product_name}}</td>
                                                <td>{{$product_show->category_id}}</td>
                                                <td>{{$product_show->supplier_id}}</td>
                                                <td>{{$product_show->product_code}}</td>
                                                <td>{{$product_show->product_garage}}</td>
                                                <td>{{$product_show->product_route}}</td>
                                                <td>{{$product_show->buy_date}}</td>
                                                <td>{{$product_show->expire_date}}</td>
                                                <td>{{$product_show->buying_price}}</td>
                                                <td>{{$product_show->selling_price}}</td>
                                                <td>
                                                    <img src="{{asset('uploads/product')}}/{{$product_show->product_image}}" class="img-fluid" style="max-width: 50%; height: auto;">
                                                </td>
                                         </tr>
                                         @endforeach
                                     </tbody>
                                </table>

                            </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
