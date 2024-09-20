@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pose</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">{{date('d/m/y')}}</li>
                        </ol>
                    </div>
                </div>
                <div class="btn-group mb-3" role="group" aria-label="Category Buttons">
                    @foreach ($category as $cat)
                        <button type="button" class="btn btn-secondary">{{ $cat->cat_name }}</button>
                    @endforeach
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 bg-dark py-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <h2 class="text-white">Customer</h2>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Add Customer</a>
                            </div>
                            <select class="form-control mt-3">
                                @foreach ($customer as $cust)
                                    <option>{{ $cust->username }}</option>
                                @endforeach
                            </select>
                            <div class="card mt-3 bg-dark ">
                                <div class="card-body">
                                    <ul class="fa-ul text-center text-white">
                                       <table class="table">
                                           <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Qantity</th>
                                                    <th>Uniqu Price</th>
                                                    <th>Sub Total</th>
                                                    <th>Action</th>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                  <td>Name<td>
                                                    <form>
                                                        <input type="number"name=""value="2"style="width:40px;">
                                                        <button class="btn btn-sm btn-success" type="submit"><i class="fas fa-check"></i></button>
                                                    </form>
                                                    <td>4000</td>
                                                    <td>4000</td>
                                                    <td><i class="fas fa-trash-alt"style="color:red;"></i></td>
                                               </tr>
                                           </tbody>
                                       </table>
                                    </ul>

                                </div>
                                <div class="footer-body align-item-center">
                                     <p>Qantity:2</p>
                                     <p>Vat:0000</p>
                                     <hr>
                                     <p>Total:00</p>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm mt-3">Create Invoice</button>
                            </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Product Code</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product as $product)
                                            <tr>
                                                <td>
                                                    <i class="fa fa-plus"style="font-size:30px;color:green;"></i> <img src="{{asset('uploads/product')}}/{{$product->product_image}}"style="height:100px;weith:100px;">
                                                </td>
                                                <td>{{$product->product_name}}</td>
                                                <td>{{$product->cat_name}}</td>
                                                <td>{{$product->product_code}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<!-- Customer modal -->

  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Customer Added</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <form method="POST"action="{{route ('store.customers')}}"enctype="multipart/form-data">
                @csrf
                 <div class="mt-2">
                    <label>Name</label>
                    <input type="text" class="form-control" name="username"placeholder="Enter Your name">
                    @error('username')
                       <span class="text-danger">{{ $message }}</span>
                    @enderror
                 </div>
                 <div class="mt-2">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email"placeholder="Enter Your email">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                   @enderror
                 </div>
                 <div class="mt-2">
                    <label>Phone</label>
                    <input type="number"name="phone"placeholder="Enter Your phone"class="form-control">
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                   @enderror
                 </div>
                 <div class="mt-2">
                    <label>address</label>
                    <input type="text"name="address"placeholder="Enter Your address"class="form-control">
                   @error('address')
                     <span class="text-danger">{{ $message }}</span>
                   @enderror
                 </div>
                 <div class="mt-2">
                    <label>shopname</label>
                    <input type="text"name="shopname"placeholder="Enter Your shopname"class="form-control">
                    @error('shopname')
                     <span class="text-danger">{{ $message }}</span>
                   @enderror
                 </div>
                 <div class="mt-2">
                    <label>accound_holder</label>
                    <input type="text"name="accound_holder"placeholder="Enter Your accound_holder"class="form-control">
                    @error('accound_holder')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                 </div>
                 <div class="mt-2">
                    <label>account_number</label>
                    <input type="text"name="account_number"placeholder="Enter Your account_number"class="form-control">
                    @error('account_number')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                 </div>
                 <div class="mt-2">
                    <label>bank_name</label>
                    <input type="text"name="bank_name"placeholder="Enter Your bank_name"class="form-control">
                    @error('bank_name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                 </div>
                 <div class="mt-2">
                    <label>bank_branch</label>
                    <input type="text"name="bank_branch"placeholder="Enter Your bank_branch"class="form-control">
                    @error('bank_branch')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                 </div>
                 <div class="mt-2">
                    <label>City</label>
                    <input type="text"name="city"placeholder="Enter Your city"class="form-control">
                    @error('city')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                 </div>
                 <div class="col-md-4 py-2">
                    <img id="showImage" src="{{asset('upload/user_images/'.Auth::user()->photo)}}"style="width:150px;height:160px;border:1px solid #000;">
                </div>
                 <div class="mt-2">
                    <label>Photo</label><br/>
                    <input type="file" name="photo"id="image"><br/>
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
@endsection

