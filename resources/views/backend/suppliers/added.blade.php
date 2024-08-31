@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Suplicers</h1>
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
                                <form method="POST"action="{{route ('store.suppliers')}}"enctype="multipart/form-data">
                                    @csrf
                                     <div class="mt-2">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name"placeholder="Enter Your name">
                                        @error('name')
                                           <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email"placeholder="Enter Your email">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>Phone</label>
                                        <input type="number"name="phone"placeholder="Enter Your phone"class="form-control">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>address</label>
                                        <input type="text"name="address"placeholder="Enter Your address"class="form-control">
                                       @error('address')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>shop</label>
                                        <input type="text"name="shop"placeholder="Enter Your shop"class="form-control">
                                        @error('shop')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>accoundholder</label>
                                        <input type="text"name="accoundholder"placeholder="Enter Your accoundholder"class="form-control">
                                        @error('accoundholder')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>accountnumber</label>
                                        <input type="text"name="accountnumber"placeholder="Enter Your accountnumber"class="form-control">
                                        @error('accountnumber')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>bankname</label>
                                        <input type="text"name="bankname"placeholder="Enter Your bankname"class="form-control">
                                        @error('bankname')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>branchname</label>
                                        <input type="text"name="branchname"placeholder="Enter Your branchname"class="form-control">
                                        @error('branchname')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>City</label>
                                        <input type="text"name="city"placeholder="Enter Your city"class="form-control">
                                        @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>type</label>
                                        <select class="form-control" id="exampleFormControlSelect1"name="type">
                                            <option value="">Select List</option>
                                            <option value="1">Brochure</option>
                                            <option value="2">Distributor</option>
                                            <option value="3">wholes Seller</option>
                                          </select>
                                        @error('type')
                                          <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="col-md-4 py-2">
                                        <img id="showImage" src="{{asset('upload/user_images/'.Auth::user()->photo)}}"style="width:150px;height:160px;border:1px solid #000;">
                                    </div>
                                     <div class="mt-2">
                                        <label>Photo</label><br/>
                                        <input type="file" name="photo"id="image"><br/>
                                        @error('photo')
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
