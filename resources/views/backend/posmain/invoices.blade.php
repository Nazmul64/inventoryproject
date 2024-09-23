@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create Invoices</h1>
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
                    <div class="col-12">
                        <div class="invoice p-3 mb-3">

                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <i class="fas fa-globe"></i>Invoices.
                                        <small class="float-right">{{date('d/m/y')}}</small>
                                    </h4>
                                </div>

                            </div>

                            <div class="row invoice-info">
                                <div class="col-md-6 invoice-col">
                                    <address>
                                        <strong>Name:{{$customer->username}}</strong><br>
                                          Shop Name:{{$customer->shopname}}<br>
                                          Address:{{$customer->address}}<br>
                                          Phone:{{$customer->phone}}<br>
                                          City:{{$customer->city}}<br>
                                          Email: City:{{$customer->email}}<br>
                                    </address>
                                </div>
                                <div class="col-md-6 invoice-col">
                                    <b>Order Date:{{date('d/m/y')}}</b><br>
                                    <b>Order ID:{{$customer->id}}</b><br>
                                    <b>Order Date:{{date('d/m/y')}}</b><br>
                                    <b>Account:</b> {{$customer->account_number}}
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL No</th>
                                                <th>Item</th>
                                                <th>Quantity</th>
                                                <th>Unit Cost</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $sl=1;
                                            @endphp
                                            @foreach ($contents as $index => $conts)
                                            <tr>
                                                <td>{{ $sl++ }}</td>
                                                <td>{{$conts->name}}</td>
                                                <td>{{$conts->qty}}</td>
                                                <td>{{$conts->price}}</td>
                                                <td>{{$conts->price*$conts->qty}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>

                            </div>

                            <div class="row">

                                {{-- <div class="col-6">
                                    <p class="lead">Payment Methods:</p>
                                    <img src="../../dist/img/credit/visa.png" alt="Visa">
                                    <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                                    <img src="../../dist/img/credit/american-express.png" alt="American Express">
                                    <img src="../../dist/img/credit/paypal2.png" alt="Paypal">
                                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning
                                        heekya handango imeem
                                        plugg
                                        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                    </p>
                                </div> --}}

                                <div class="col-6">
                                    <p class="lead">Amount Due:{{date('d/m/y')}}</p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th style="width:50%">Subtotal:</th>
                                                <td>{{Cart::subtotal()}}</td>
                                            </tr>
                                            <tr>
                                                <th>Tax </th>
                                                <td>{{Cart::tax()}}</td>
                                            </tr>

                                            <tr>
                                                <th>Total:</th>
                                                <td>{{Cart::total()}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>


                            <div class="row no-print">
                                <div class="col-12">
                                    <a href="#" onclick="window.print();" rel="noopener" target="_blank"
                                        class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                    <button type="button" data-toggle="modal"  id="#exampleModalCenter" data-target="#exampleModalCenter" class="btn btn-success float-right"><i
                                            class="far fa-credit-card"></i> Submit
                                        Payment
                                    </button>
                                    <button type="button" class="btn btn-primary float-right"
                                        style="margin-right: 5px;">
                                        <i class="fas fa-download"></i> Generate PDF
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


    </div>

<!-- Customer Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalCenterTitle">Invoice of:-{{$customer->username}}<span class="float-right">Total: {{ Cart::total() }}</span></h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('final.invoices') }}">
                    @csrf
                    <!-- Customer Name -->
                    <div class="form-group">
                        <label for="payment_status">Payment</label>
                        <select class="form-control"name="payment_status">
                            <option value="Select">Select Payment </option>
                             <option value="Handcash">HandCash</option>
                             <option value="Cheque">Cheque</option>
                             <option value="Due">Due</option>
                        </select>
                        @error('payment_status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Pay</label>
                        <input type="text" class="form-control" name="pay" placeholder="Enter customer pay">
                        @error('pay')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div class="form-group">
                        <label for="phone">Due</label>
                        <input type="text" class="form-control" name="due" placeholder="Enter customer due">
                        @error('due')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Address -->
                    <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                    <input type="hidden" name="order_date" value="{{ date('Y-m-d') }}">
                    <input type="hidden" name="order_status" value="pending">
                    <input type="hidden" name="total_product" value="{{ Cart::count() }}">
                    <input type="hidden" name="sub_total" value="{{ Cart::subtotal() }}">
                    <input type="hidden" name="vat" value="{{ Cart::tax() }}">
                    <input type="hidden" name="total" value="{{ Cart::total() }}">

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
