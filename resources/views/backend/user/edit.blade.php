
 @extends('backend.layouts.master')
 @section('main_content')
 <div class="content-wrapper">

        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard v1</li>
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
                          <h2>Add User
                             <a href="" class="btn btn-success float-right btn-sm"><i class="fa fa-list">List User</i></a>
                          </h2>
                      </div>
                      <div class="card-body">
                         <form method="post"id="myForm"action="{{route('user.update',$edit->id)}}">
                            @csrf
                             <div class="row">
                                 <div class="col-md-4">
                                 <label>User Role</label>
                                 <select class="form-control  @error ('usertype') is-invalid   @enderror" id="exampleFormControlSelect1"name="usertype"id="usertype"value="{{ $edit->usertype }}">
                                    <option >Select Role</option>
                                    <option value="Admin"{{ $edit->usertype=='Admin'?"selected":""}}>Admin</option>
                                    <option value="User"{{ $edit->usertype=='User'?"selected":""}}>User</option>
                                </select>
                                 @error ('usertype')
                                    <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>
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
                             <div>
                                  <button type="submit" class="btn btn-primary  mt-2">Update</button>
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
