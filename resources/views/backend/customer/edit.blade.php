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
                                <form method="POST"action="{{route('update.customers',$edit_data->id)}}"enctype="multipart/form-data">
                                    @csrf
                                     <div class="mt-2">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="username"value="{{$edit_data->username}}">
                                        @error('username')
                                           <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email"value="{{$edit_data->email}}">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>Phone</label>
                                        <input type="number"name="phone"class="form-control"value="{{$edit_data->phone}}">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>address</label>
                                        <input type="text"name="address"class="form-control"value="{{$edit_data->address}}">
                                       @error('address')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>shopname</label>
                                        <input type="text"name="shopname"class="form-control"value="{{$edit_data->shopname}}">
                                        @error('shopname')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>accound_holder</label>
                                        <input type="text"name="accound_holder"class="form-control"value="{{$edit_data->accound_holder}}">
                                        @error('accound_holder')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>account_number</label>
                                        <input type="text"name="account_number"class="form-control"value="{{$edit_data->account_number}}">
                                        @error('account_number')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>bank_name</label>
                                        <input type="text"name="bank_name"class="form-control"value="{{$edit_data->bank_name}}">
                                        @error('bank_name')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>bank_branch</label>
                                        <input type="text"name="bank_branch"class="form-control"value="{{$edit_data->bank_branch}}">
                                        @error('bank_branch')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>City</label>
                                        <input type="text"name="city"class="form-control"value="{{$edit_data->city}}">
                                        @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="form-group">
                                        <label> Old Awesome_photo</label><br>
                                        <img height="100" src="{{ asset('uploads/customer') }}/{{ $edit_data->photo}}">
                                    </div>
                                     <div class="form-group">
                                        <label> New Awesome_photo</label>
                                        <input type="file" class="form-control   @error('new_photo')  is-invalid   @enderror"  placeholder="Enter Your photo"name="new_photo">
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
