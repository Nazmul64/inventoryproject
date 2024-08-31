@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Suplliers</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Suplliers</li>
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
                                <form method="POST"action="{{route('update.suppliers',$edit_data->id)}}"enctype="multipart/form-data">
                                    @csrf
                                     <div class="mt-2">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name"value="{{$edit_data->name}}">
                                        @error('name')
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
                                        <label>type</label>
                                        <input type="text"name="address"class="form-control"value="{{$edit_data->address}}">
                                       @error('type')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>shop</label>
                                        <input type="text"name="shop"class="form-control"value="{{$edit_data->shop}}">
                                        @error('shop')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>accoundholder</label>
                                        <input type="text"name="accoundholder"class="form-control"value="{{$edit_data->accoundholder}}">
                                        @error('accoundholder')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>accountnumber</label>
                                        <input type="text"name="accountnumber"class="form-control"value="{{$edit_data->accountnumber}}">
                                        @error('accountnumber')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>bankname</label>
                                        <input type="text"name="bankname"class="form-control"value="{{$edit_data->bankname}}">
                                        @error('bankname')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>branchname</label>
                                        <input type="text"name="branchname"class="form-control"value="{{$edit_data->branchname}}">
                                        @error('branchname')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                    <div class="mt-2">
                                        <select class="form-control" id="exampleFormControlSelect1" name="type">
                                            @php
                                                // Fetch all supplier data
                                                $selected = \App\Models\Suppliers::get(); // Make sure to import the Suppliers model if needed
                                            @endphp
                                            @foreach ($selected as $data)
                                                <option value="{{ $data->type }}" {{ $data->type == $edit_data ? 'selected' : '' }}>
                                                    {{ $data->type }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                     <div class="form-group">
                                        <label> Old Awesome_photo</label><br>
                                        <img height="100" src="{{ asset('uploads/supplicers') }}/{{ $edit_data->photo}}">
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
