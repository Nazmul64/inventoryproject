@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">

                                <a  href=""class="btn btn-success float-right mb-1">Back Pages</a>
                                <form method="POST"action="{{route('setting.settingstore')}}"enctype="multipart/form-data">
                                    @csrf
                                     <div class="mt-2">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control" name="company_name"placeholder="Enter Your Category">
                                        @error('company_name')
                                           <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>company_address</label>
                                        <input type="text" class="form-control" name="company_address"placeholder="Enter Your Category">
                                        @error('company_address')
                                           <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>company_email</label>
                                        <input type="text" class="form-control" name="company_email"placeholder="Enter Your Category">
                                        @error('company_email')
                                           <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>company_phone</label>
                                        <input type="text" class="form-control" name="company_phone"placeholder="Enter Your Category">
                                        @error('company_phone')
                                           <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>company_mobile</label>
                                        <input type="text" class="form-control" name="company_mobile"placeholder="Enter Your Category">
                                        @error('company_mobile')
                                           <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>company_city</label>
                                        <input type="text" class="form-control" name="company_city"placeholder="Enter Your Category">
                                        @error('company_city')
                                           <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>company_country</label>
                                        <input type="text" class="form-control" name="company_country"placeholder="Enter Your Category">
                                        @error('company_country')
                                           <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>company_sipcode</label>
                                        <input type="text" class="form-control" name="company_sipcode"placeholder="Enter Your Category">
                                        @error('company_sipcode')
                                           <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="col-md-4 py-2">
                                        <img id="showImage" src="{{asset('upload/settings/'.Auth::user()->photo)}}"style="width:150px;height:160px;border:1px solid #000;">
                                    </div>
                                    <div class="mt-2">
                                        <label>Photo</label><br/>
                                        <input type="file" name="photo" id="image"><br/>
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
