
 @extends('backend.layouts.master')
 @section('main_content')
 <div class="content-wrapper">

        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Profile Manage </h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active"> Edit Profile</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <section class="content">
          <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                   <div class="card">
                       @if (session('success') )
                       <span class="alert alert-info">{{ session('success') }}</span>
                       @endif
                       <div class="card-header">
                           <h2>Update Profile
                               <a href="{{ route('profile.view') }}" class="btn btn-success float-right btn-sm"><i class="fa fa-list">Your Profile</i></a>
                            </h2>
                      </div>
                      <div class="card-body">
                          <form method="post"id="myForm" enctype="multipart/form-data" action="{{route('profile.update',$edit->id)}}">
                              @csrf
                        <div class="row">
                             <div class="col-md-4">
                                  <label>Name</label>
                                  <input type="text"name="name"class="form-control"value="{{ $edit->name }}">
                                 @error ('name')
                                     <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                             <div class="col-md-4">
                                   <label>Email</label>
                                   <input type="email"name="email"class="form-control"value="{{ $edit->email }}">
                                   @error ('email')
                                   <span class="text-danger">{{ $message }}</span>
                                   @enderror
                            </div>
                            <div class="col-md-4">
                                   <label>Mobile</label>
                                   <input type="text"name="mobile"class="form-control"value="{{ $edit->mobile }}">
                                   @error ('mobile')
                                   <span class="text-danger">{{ $message }}</span>
                                   @enderror
                            </div>
                             <div class="col-md-4">
                                   <label>address</label>
                                   <input type="text"name="address"class="form-control"value="{{ $edit->address }}">
                                   @error ('address')
                                   <span class="text-danger">{{ $message }}</span>
                                   @enderror
                            </div>
                            <div class="col-md-4">
                                 <label>Select Gender</label>
                                 <select class="form-control  @error ('usertype') is-invalid   @enderror" id="exampleFormControlSelect1"name="usertype"id="usertype"value="{{ $edit->usertype }}">
                                    <option >Select Gender</option>
                                    <option value="Male"{{ $edit->usertype=='Male'?"selected":""}}>Male</option>
                                    <option value="Female"{{ $edit->usertype=='Female'?"selected":""}}>Female</option>
                                </select>
                                @error ('usertype')
                                    <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>
                              <div class="col-md-4">
                                   <label>Images</label>
                                   <input type="file"name="image"class="form-control"id="image" value="{{ $edit->image }}">
                                   @error ('image')
                                   <span class="text-danger">{{ $message }}</span>
                                   @enderror
                            </div>
                              <div class="col-md-4 py-2">
                                  <img id="showImage" src="{{asset('upload/user_images/'.Auth::user()->image)}}"style="width:150px;height:160px;border:1px solid #000;">
                            </div>
                           <div class="col-md-12 py-2">
                              <button type="submit" value="submit" class="btn btn-primary mt-2">Update</button>
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
