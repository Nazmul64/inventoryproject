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
                                <form method="POST"action="{{route ('store.customers')}}"enctype="multipart/form-data">
                                    @csrf
                                     <div class="mt-2">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="username"placeholder="Enter Your name">
                                        @error('username')
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
                                        <label>shopname</label>
                                        <input type="text"name="shopname"placeholder="Enter Your shopname"class="form-control">
                                        @error('shopname')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>accound_holder</label>
                                        <input type="text"name="accound_holder"placeholder="Enter Your accound_holder"class="form-control">
                                        @error('accound_holder')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>account_number</label>
                                        <input type="text"name="account_number"placeholder="Enter Your account_number"class="form-control">
                                        @error('account_number')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>bank_name</label>
                                        <input type="text"name="bank_name"placeholder="Enter Your bank_name"class="form-control">
                                        @error('bank_name')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>bank_branch</label>
                                        <input type="text"name="bank_branch"placeholder="Enter Your bank_branch"class="form-control">
                                        @error('bank_branch')
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
