@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Expenses </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Expenses</li>
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
                                <form method="POST"action="{{route('storeexpenses.expenses')}}">
                                    @csrf
                                     <div class="mt-2">
                                        <label> Expenses Details</label>
                                        <textarea type="text" rows="5" class="form-control" name="details"placeholder="Enter Your details"></textarea>
                                        @error('details')
                                           <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>amount</label>
                                        <input type="text" class="form-control" name="amount"placeholder="Enter Your amount">
                                        @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <input type="hidden"name="month"placeholder="Enter Your phone"class="form-control"value="{{date('F')}}">
                                     </div>
                                     <div class="mt-2">
                                        <input type="hidden"name="date"placeholder="Enter Your address"class="form-control"value="{{date('d/m/y')}}">
                                     </div>
                                     <div class="mt-2">
                                        <label>Year</label>
                                        <input type="text" name="year" class="form-control" placeholder="Enter Year">
                                        @error('year')
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
