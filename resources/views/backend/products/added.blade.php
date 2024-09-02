@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Employees</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Employees</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 offset-2">
                            {{-- @if (session('success'))
                                <span class="alert alert-info">{{ session('success') }}</span>
                            @endif --}}
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <form method="POST"action="{{route ('productstore.product')}}"enctype="multipart/form-data">
                                    @csrf
                                     <div class="mt-2">
                                        <label>product_name</label>
                                        <input type="text" class="form-control" name="product_name"placeholder="Enter Your product_name">
                                        @error('product_name')
                                           <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>category_id</label>
                                         <select class="form-control"name="category_id">
                                             <option>Selected Category</option>
                                             @foreach ($categroy as $cat)
                                             <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                             @endforeach
                                         </select>
                                        @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>supplier_id</label>
                                         <select class="form-control"name="supplier_id">
                                             <option>Selected supplier</option>
                                             @foreach ($suplier as $suplier)
                                             <option value="{{$suplier->id}}">{{$suplier->name}}</option>
                                             @endforeach
                                         </select>
                                        @error('supplier_id')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>product_code</label>
                                        <input type="text"name="product_code"placeholder="Enter Your product_code"class="form-control">
                                        @error('product_code')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>product_garage</label>
                                        <input type="text"name="product_garage"placeholder="Enter Your product_garage"class="form-control">
                                       @error('product_garage')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>product_route</label>
                                        <input type="text"name="product_route"placeholder="Enter Your product_route"class="form-control">
                                        @error('product_route')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>buy_date</label>
                                        <input type="date"name="buy_date"placeholder="Enter Your buy_date"class="form-control">
                                        @error('buy_date')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>expire_date</label>
                                        <input type="date"name="expire_date"placeholder="Enter Your expire_date"class="form-control">
                                        @error('expire_date')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>buying_price</label>
                                        <input type="text"name="buying_price"placeholder="Enter Your buying_price"class="form-control">
                                        @error('buying_price')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>selling_price</label>
                                        <input type="text"name="selling_price"placeholder="Enter Your selling_price"class="form-control">
                                        @error('selling_price')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="col-md-4 py-2">
                                        <img id="showImage" src="{{asset('upload/user_images/'.Auth::user()->photo)}}"style="width:150px;height:160px;border:1px solid #000;">
                                    </div>
                                     <div class="mt-2">
                                        <label>product_image</label><br/>
                                        <input type="file" name="product_image"id="image"><br/>
                                        @error('product_image')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <input class="btn btn-success" type="submit" value="submit">
                                     </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
