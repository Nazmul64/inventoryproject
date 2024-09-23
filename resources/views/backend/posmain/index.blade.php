@extends('backend.layouts.master')

@section('main_content')
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-primary">Point of Sale (POS)</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{ date('d/m/Y') }}</li>
                    </ol>
                </div>
            </div>
            <!-- Category Buttons with Hover Effects -->
            <div class="btn-group mb-3" role="group" aria-label="Category Buttons">
                @foreach ($category as $cat)
                    <button type="button" class="btn btn-outline-info btn-category">{{ $cat->cat_name }}</button>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Customer Section -->
                <div class="col-md-4 bg-light py-3 rounded-left shadow-sm">
                    <div class="card shadow-sm bg-dark text-white">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h2>Customer</h2>
                            <button class="btn btn-info" data-toggle="modal" id="#exampleModalCenter" data-target="#exampleModalCenter">Add Customer</button>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-hover table-dark text-center">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Qty</th>
                                        <th>Unit Price</th>
                                        <th>Sub Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="cartBody">
                                    @php $product_cart = Cart::content(); @endphp
                                    @foreach ($product_cart as $prd)
                                        <tr>
                                            <td>{{ $prd->name }}</td>
                                            <form action="{{ route('cart.update', $prd->rowId) }}" method="post">
                                                @csrf
                                                <td>
                                                    <input type="number" name="qty" value="{{ $prd->qty }}" style="width:60px;" class="form-control form-control-sm text-center">
                                                    <button class="btn btn-sm btn-success mt-1" type="submit">
                                                        <i class="fas fa-check"></i>
                                                    </button>
                                                </td>
                                            </form>
                                            <td>{{ $prd->price }}</td>
                                            <td>{{ $prd->price * $prd->qty }}</td>
                                            <td>
                                                <a href="{{ route('cart.remove', $prd->rowId) }}" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Cart Summary -->
                        <div class="card-footer bg-light text-dark">
                            <p><strong>Quantity:</strong> {{ Cart::count() }}</p>
                            <p><strong>Sub Total:</strong> {{ Cart::subtotal() }}</p>
                            <p><strong>VAT:</strong> {{ Cart::tax() }}</p>
                            <hr>
                            <p><strong>Total:</strong> {{ Cart::total() }}</p>

                            <!-- Create Invoice Button -->
                            <form action="{{ route('create.invoices') }}" method="POST">
                                @csrf
                                <!-- Customer Select Dropdown -->
                                <select class="form-control mt-3 custom-select" name="customer_id" id="customerSelect">
                                    <option selected disabled>Select Customer</option>
                                    @foreach ($customer as $cust)
                                        <option value="{{ $cust->id }}" data-id="{{ $cust->id }}" data-name="{{ $cust->username }}">
                                            {{ $cust->username }}
                                        </option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary btn-block mt-3">Create Invoice</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Product Section -->
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h3>Available Products</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Product Code</th>
                                            <th>Add</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product as $product)
                                            <tr>
                                                <form action="{{ route('add.cart') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                    <input type="hidden" name="name" value="{{ $product->product_name }}">
                                                    <input type="hidden" name="price" value="{{ $product->selling_price }}">
                                                    <input type="hidden" name="qty" value="1">
                                                    <td><img src="{{ asset('uploads/product/' . $product->product_image) }}" alt="{{ $product->product_name }}" class="img-thumbnail" style="height:100px; width:100px;"></td>
                                                    <td>{{ $product->product_name }}</td>
                                                    <td>{{ $product->cat_name }}</td>
                                                    <td>{{ $product->product_code }}</td>
                                                    <td>
                                                        <button class="btn btn-success btn-sm" type="submit">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </td>
                                                </form>
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

<!-- Customer Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Customer</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('store.customers') }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Customer Name -->
                    <div class="form-group">
                        <label for="username">Name</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter customer name">
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter customer email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" name="phone" placeholder="Enter customer phone">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Address -->
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter customer address">
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Shop Name -->
                    <div class="form-group">
                        <label for="shopname">Shop Name</label>
                        <input type="text" class="form-control" name="shopname" placeholder="Enter shop name">
                        @error('shopname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Bank Details -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="accound_holder">Account Holder</label>
                                <input type="text" class="form-control" name="accound_holder" placeholder="Enter account holder name">
                                @error('accound_holder')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="account_number">Account Number</label>
                                <input type="text" class="form-control" name="account_number" placeholder="Enter account number">
                                @error('account_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Bank Name and Branch -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <input type="text" class="form-control" name="bank_name" placeholder="Enter bank name">
                                @error('bank_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bank_branch">Bank Branch</label>
                                <input type="text" class="form-control" name="bank_branch" placeholder="Enter bank branch">
                                @error('bank_branch')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- City -->
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" placeholder="Enter city">
                        @error('city')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Photo Upload -->
                    <div class="form-group">
                        <label for="photo">Customer Photo</label>
                        <input type="file" class="form-control-file" name="photo" id="image" onchange="previewImage(event)">
                        <div class="mt-2">
                            <img id="showImage" class="img-thumbnail" style="max-width: 150px; max-height: 150px;" src="{{ asset('upload/user_images/no_image.jpg') }}" alt="Customer Image">
                        </div>
                        @error('photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection

