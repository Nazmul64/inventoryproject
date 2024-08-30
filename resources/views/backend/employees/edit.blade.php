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
                                <form method="POST"action="{{route('update.employees',$edit_data->id)}}"enctype="multipart/form-data">
                                    @csrf
                                     <div class="mt-2">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name1"value="{{$edit_data->name1}}">
                                        @error('name1')
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
                                        <label>Experience</label>
                                        <input type="text"name="experience"class="form-control"value="{{$edit_data->experience}}">
                                        @error('experience')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>Salary</label>
                                        <input type="text"name="salary"class="form-control"value="{{$edit_data->salary}}">
                                        @error('salary')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>Vacation</label>
                                        <input type="text"name="vacation"class="form-control"value="{{$edit_data->vacation}}">
                                        @error('vacation')
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
                                     <div class="mt-2">
                                        <label>NID NO.</label>
                                        <input type="text"name="nid_no"class="form-control"value="{{$edit_data->nid_no}}">
                                        @error('nid_no')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>

                                     <div class="form-group">
                                        <label> Old Awesome_photo</label><br>
                                        <img height="100" src="{{ asset('uploads/employees') }}/{{ $edit_data->photo}}">
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
