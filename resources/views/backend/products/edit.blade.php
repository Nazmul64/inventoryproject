@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
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
                                <form method="POST"action="{{route('update.product',$edit_data->id)}}"enctype="multipart/form-data">
                                    @csrf
                                     <div class="mt-2">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="product_name"value="{{$edit_data->product_name}}">
                                        @error('product_name')
                                           <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>Product Code</label>
                                        <input type="text" class="form-control" name="product_code"value="{{$edit_data->product_code}}">
                                        @error('product_code')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>Product Garage</label>
                                        <input type="text" class="form-control" name="product_garage"value="{{$edit_data->product_garage}}">
                                        @error('product_garage')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>Category</label>
                                        <select class="form-control" name="category_id">
                                            @foreach ($categories as $row)
                                            <option value="{{ $row->id }}"{{$edit_data->category_id == $row->id ? 'selected' : ''}}>
                                                    {{ $row->cat_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mt-2">
                                        <label>Supplier</label>
                                        <select class="form-control" name="supplier_id">
                                            @foreach ($supplier as $row)
                                                <option value="{{ $row->id }}"{{$edit_data->supplier_id == $row->id ? 'selected' : ''}}>
                                                    {{ $row->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('supplier_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                     <div class="mt-2">
                                        <label>product_route</label>
                                        <input type="text"name="product_route"class="form-control"value="{{$edit_data->product_route}}">
                                        @error('product_route')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>buy_date</label>
                                        <input type="text"name="buy_date"class="form-control"value="{{$edit_data->buy_date}}">
                                       @error('buy_date')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>expire_date</label>
                                        <input type="text"name="expire_date"class="form-control"value="{{$edit_data->expire_date}}">
                                        @error('expire_date')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>buying_price</label>
                                        <input type="text"name="buying_price"class="form-control"value="{{$edit_data->buying_price}}">
                                        @error('buying_price')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>selling_price</label>
                                        <input type="text"name="selling_price"class="form-control"value="{{$edit_data->selling_price}}">
                                        @error('selling_price')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="form-group">
                                        <label> Old Awesome_photo</label><br>
                                        <img height="100"  id="showImage"  src="{{ asset('uploads/product') }}/{{ $edit_data->product_image}}"id="image">
                                    </div>
                                     <div class="form-group">
                                        <label> New Awesome_photo</label>
                                        <input type="file"id="showImage" class="form-control   @error('new_photo')  is-invalid   @enderror"  placeholder="Enter Your photo"name="new_photo">
                                         @error('new_photo')
                                             <span class="text-danger">{{$message}}</span>
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
