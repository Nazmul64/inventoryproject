@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Supplier</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Supplier</li>
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
                                <form method="POST"action=""enctype="multipart/form-data">
                                    @csrf
                                     <div class="mt-2">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name"value="{{$view->name}}">
                                        @error('name')
                                           <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email"value="{{$view->email}}">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>Phone</label>
                                        <input type="number"name="phone"class="form-control"value="{{$view->phone}}">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>address</label>
                                        <input type="text"name="address"class="form-control"value="{{$view->address}}">
                                       @error('address')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>type</label>
                                        <input type="text"name="type"class="form-control"value="{{$view->type}}">
                                       @error('type')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>shop</label>
                                        <input type="text"name="shop"class="form-control"value="{{$view->shop}}">
                                        @error('shop')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>accoundholder</label>
                                        <input type="text"name="accoundholder"class="form-control"value="{{$view->accoundholder}}">
                                        @error('accoundholder')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>accountnumber</label>
                                        <input type="text"name="accountnumber"class="form-control"value="{{$view->accountnumber}}">
                                        @error('accountnumber')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>bankname</label>
                                        <input type="text"name="bankname"class="form-control"value="{{$view->bankname}}">
                                        @error('bankname')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>branchname</label>
                                        <input type="text"name="branchname"class="form-control"value="{{$view->branchname}}">
                                        @error('branchname')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>City</label>
                                        <input type="text"name="city"class="form-control"value="{{$view->city}}">
                                        @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>


                                     <div class="form-group">
                                        <label>photo</label><br>
                                        <img height="100" src="{{ asset('uploads/supplicers') }}/{{ $view->photo}}">
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
