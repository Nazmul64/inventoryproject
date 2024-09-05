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
                                <form method="POST" action="{{ route('storeexpenses.expenses') }}">
                                    <span ><a class="btn btn-primary mb-2  mx-2 float-right"href="{{route('yearlay.expenses')}}">Year Expenses</a><span>
                                    <span ><a class="btn btn-info mb-2  mx-2 float-right"href="{{route('todayexpenses.expenses')}}">Todapy Expenses</a><span>
                                    <span ><a class="btn btn-success mb-2 float-right"href="{{route('lastmonthexpenses.expenses')}}">This Month</a><span>
                                    @csrf
                                    <!-- Expenses Details -->
                                    <div class="mt-2">
                                        <label>Expenses Details</label>
                                        <textarea type="text" class="form-control" name="details" placeholder="Enter Your details"></textarea>
                                        @error('details')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Amount -->
                                    <div class="mt-2">
                                        <label>Amount</label>
                                        <input type="text" class="form-control" name="amount" placeholder="Enter Your amount">
                                        @error('amount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Month (Hidden) -->
                                    <div class="mt-2">
                                        <input type="hidden" name="month" class="form-control" value="{{ date('F') }}">
                                    </div>

                                    <!-- Year -->
                                    <div class="mt-2">
                                        <input type="hidden" name="ofyear" class="form-control" placeholder="Enter year"value="{{date('Y')}}">
                                        @error('ofyear')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="mt-2">
                                        <input class="btn btn-success" type="submit" value="Submit">
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
