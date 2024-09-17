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
                                <form method="POST"action="{{route('update.setting',$edit_data->id)}}"enctype="multipart/form-data">
                                    @csrf
                                     <div class="mt-2">
                                        <label>company_name</label>
                                        <input type="text" class="form-control" name="company_name"value="{{$edit_data->company_name}}">
                                        @error('company_name')
                                           <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>company_phone</label>
                                        <input type="number" class="form-control" name="company_phone"value="{{$edit_data->company_phone}}">
                                        @error('company_phone')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>company_address</label>
                                        <input type="text"name="company_address"class="form-control"value="{{$edit_data->company_address}}">
                                        @error('company_address')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>company_email</label>
                                        <input type="email"name="company_email"class="form-control"value="{{$edit_data->company_email}}">
                                       @error('company_email')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>

                                     <div class="mt-2">
                                        <label>company_mobile</label>
                                        <input type="number"name="company_mobile"class="form-control"value="{{$edit_data->company_mobile}}">
                                        @error('company_mobile')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>company_city</label>
                                        <input type="text"name="company_city"class="form-control"value="{{$edit_data->company_city}}">
                                        @error('company_city')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>company_country</label>
                                        <input type="text"name="company_country"class="form-control"value="{{$edit_data->company_country}}">
                                        @error('company_country')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>company_sipcode.</label>
                                        <input type="number"name="company_sipcode"class="form-control"value="{{$edit_data->company_sipcode}}">
                                        @error('company_sipcode')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                     </div>

                                     <div class="form-group">
                                        <label> Old Awesome_photo</label><br>
                                        <img height="100" src="{{ asset('uploads/settings') }}/{{ $edit_data->photo}}">
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
