@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
     <div class="col-sm-12">
         <h4 class="pull-left page-tile">Welcome !</h4>
         <ol>@extends('backend.layouts.master')
            @section('main_content')
                <div class="content-wrapper">

                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2 bg-secondary py-2 text-white">
                                <div class="col-sm-6">
                                    <h1 class="m-0">POS Point of Sale</h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item text-white"><a href="#"class="text-white">Home</a></li>
                                        <li class="breadcrumb-item active text-white">{{date('d/m/y')}}</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group w-100 mb-2">
                        @foreach ($category as $category)
                        <a class="btn btn-info active" href="javascript:void(0)" data-filter="all">{{$category->cat_name}} </a>
                        @endforeach
                    </div>
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4 ">
                                   <div class="panel">
                                       <h4 class="tetx-white bg-white">Customer
                                           <a href="#" class="btn btn-sm  btn-success  float-right text-white"data-bs-toggle="modal" id="#exampleModal" data-bs-target="#exampleModal"id="#customer">Add New </a>
                                       </h4>
                                       <select class="form-control">
                                            <option >Select Customer</option>
                                            @foreach ($customer as $customer )
                                                <option>{{$customer->username}}</option>
                                            @endforeach
                                       </select>
                                      </div>
                                      <div class="card mb-5 mb-lg-0">
                                        <div class="card-body">
                                          <h5 class="card-title text-muted text-uppercase text-center">Basic</h5>
                                          <h6 class="card-price text-center">$10<span class="period">/month</span></h6>
                                          <hr>
                                          <ul class="fa-ul">
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Single User</li>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                            <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited Private Projects</li>
                                            <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated Support</li>
                                          </ul>
                                          <div class="d-grid">
                                            <a href="#" class="btn btn-primary text-uppercase">Choose Plan</a>
                                          </div>
                                        </div>
                                      </div>
                                </div>


                                </div>
                                <div class="col-md-8">
                                    <table id="datatable" class="table table-responsive table-bordered">
                                        <thead>
                                             <tr>
                                                 <th>Image</th>
                                                 <th>Name</th>
                                                 <th>Category</th>
                                                 <th>Product Code</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($product as $index=>$user )
                                            <tr>
                                                <td>
                                                    <i class="fa fa-plus-square" style="font-size:40px"></i>
                                                    <img src="{{asset('uploads/product')}}/{{$user->product_image}}" class="img-fluid" style="max-width: 50%; height: auto;">
                                                </td>
                                                <td>{{$user->product_name}}</td>
                                                <td>{{$user->product_code}}</td>
                                                <td>{{$user->cat_name}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                   </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            @endsection
     </div>
  </div>
</div>
@endsection

<!----customer modal-->
<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Customer Added</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post"action=""enctype="multipart/form-data">
            @csrf
            <div class="mt-2">
                <label>Name</label>
                <input type="text"name="username"class="form-control"placeholder="Enter Your Name">
            </div>
            <div class="mt-2">
                <label>Email</label>
                <input type="email"name="email"class="form-control"placeholder="Enter Your Email">
            </div>
            <div class="mt-2">
                <label>Phone</label>
                <input type="email"name="phone"class="form-control"placeholder="Enter Your Phone">
            </div>
            <div class="mt-2">
                <label>Address</label>
                <input type="text"name="address"class="form-control"placeholder="Enter Your Address">
            </div>
            <div class="mt-2">
                <label>Shopname</label>
                <input type="text"name="shopname"class="form-control"placeholder="Enter Your Shopname">
            </div>
            <div class="mt-2">
                <label>Accound holder</label>
                <input type="text"name="accound_holder"class="form-control"placeholder="Enter Your Accound holder">
            </div>
            <div class="mt-2">
                <label>Account Number </label>
                <input type="text"name="account_number"class="form-control"placeholder="Enter Your Accound number">
            </div>
            <div class="mt-2">
                <label>Bank name </label>
                <input type="text"name="bank_name"class="form-control"placeholder="Enter Your Accound bank_name">
            </div>
            <div class="mt-2">
                <label>Bankbranch </label>
                <input type="text"name="bank_branch"class="form-control"placeholder="Enter Your Accound bank_branch">
            </div>
            <div class="mt-2">
                <label>City </label>
                <input type="text"name="city"class="form-control"placeholder="Enter Your  city">
            </div>
            <div class="col-md-4 py-2">
                <img id="showImage" src="{{asset('upload/user_images/'.Auth::user()->photo)}}"style="width:150px;height:160px;border:1px solid #000;">
            </div>
            <div class="mt-2">
                <label>Photo </label>
                <input type="file"name="photo" id="image" class="form-control"placeholder="Enter Your photo">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
