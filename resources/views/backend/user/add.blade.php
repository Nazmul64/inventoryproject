
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
                      <div class="card-header">
                          <h2>Add User
                             <a href="{{route('user.view')}}" class="btn btn-success float-right btn-sm"><i class="fa fa-list">List User</i></a>
                          </h2>
                      </div>
                      <div class="card-body">
                         <form method="post"id="myForm"action="{{route('user.store')}}">
                            @csrf
                             <div class="row">
                                 <div class="col-md-4">
                                 <label>User Role</label>
                                 <select class="form-control  @error ('usertype') is-invalid   @enderror" id="exampleFormControlSelect1"name="usertype"id="usertype">
                                    <option >Select Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                </select>
                                 @error ('usertype')
                                    <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>
                               <div class="col-md-4">
                                 <label>Name</label>
                                 <input type="text"name="name"class="form-control">
                                @error ('name')
                                    <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>
                               <div class="col-md-4">
                                 <label>Email</label>
                                 <input type="email"name="email"class="form-control">
                                  @error ('email')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                             </div>
                              <div class="col-md-4">
                                 <label>Password</label>
                                 <input type="password"name="password"class="form-control">
                                @error ('password')
                                    <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>
                              <div class="col-md-4">
                                 <label>Confirm Password</label>
                                 <input type="password"name="confirma_password"class="form-control">
                                @error('confirma_password')
                                    <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>
                             </div>
                             <button type="submit" class="btn btn-primary  mt-2">Submit</button>
                         </form>
                      </div>
                   </div>
               </div>
            </div>
          </div>
        </section>

      </div>
       @endsection
