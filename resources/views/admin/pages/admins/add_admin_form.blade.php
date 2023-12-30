@extends('admin.layout.default')
@section('title', 'Admin | ADD Admin')
@section('page-title', 'ADD Admin')
@section('present-path', 'ADD Admin')
@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <!-- Dark table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="container card-body">
                    <h4 class="header-title">Add New Admin</h4>
                    <hr>
                    <div class="mt-3">
                        <div class="text-center">
                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                <img style="width: 50px;" class="rounded-circle"
                                    src="{{ asset('assets/images/success.gif') }}" alt="img">
                                    <h6 class="d-inline mx-2">
                                        {{ Session::get('success') }}
                                    </h6>
                            </div>
                            @endif

                           @if(Session::has('failed'))
                            <div class="alert alert-danger">
                                <img style="width: 60px;" class="" src="{{ asset('assets/images/error.gif') }}" alt="img">
                                {{ Session::get('failed') }}
                            </div>
                            @endif
                        </div>
                        {{-- Data Upload Manully Start --}}
                        <form action="{{ route('store.register') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="inputFirstName" type="text" name="firstName" class="form-control"
                                        placeholder="First name" aria-label="First name" autocomplete="off"
                                        value="{{ old('firstName') }}">
                                    <span class="text-danger">
                                        @error('firstName')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                    <div id="firstName" class="alert alert-info mt-2" role="alert">
                                        <strong>Example:</strong> Anik
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <input id="inputLastName" type="text" name="lastName" class="form-control"
                                        placeholder="Last name" aria-label="Last name" value="{{ old('lastName') }}">
                                    <span class="text-danger">
                                        @error('lastName')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                    <div id="lastName" class="alert alert-info mt-2" role="alert">
                                        <strong>Example:</strong> Sen
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <input id="inputEmail" type="email" name="email" class="form-control"
                                        placeholder="Email Address" aria-label="Last name" value="{{ old('email') }}">
                                    <span class="text-danger">
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                    <div id="email" class="alert alert-info mt-2" role="alert">
                                        <strong>Example:</strong> aniksen@gmail.com
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <input id="inputNumber" type="number" name="number" class="form-control"
                                        placeholder="Mobile Number" aria-label="Last name" value="{{ old('number') }}">
                                    <span class="text-danger">
                                        @error('number')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                    <div id="number" class="alert alert-info mt-2" role="alert">
                                        <strong>Example:</strong> 01852088728
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <input id="pass" type="password" name="password" class="form-control"
                                        placeholder="Password" aria-label="Last name">
                                    <span class="text-danger">
                                        @error('password')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <input id="cPass" type="password" name="confirm_password" class="form-control"
                                        placeholder="Confirm Password" aria-label="Last name">
                                    {{-- <span class="text-danger">
                                        @error('c_pass')
                                        {{ $message }}
                                        @enderror
                                    </span> --}}
                                </div>
                                <div class="col-md-12 mt-3">
                                    <input id="inputAddress" type="text" name="address" class="form-control"
                                        placeholder="Address" aria-label="Last name" value="{{ old('address') }}">
                                    <span class="text-danger">
                                        @error('address')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                    <div id="address" class="alert alert-info mt-2" role="alert">
                                        <strong>Example:</strong> Premier University, Chattogram
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div id="role" class="alert alert-info mt-2 mb-2" role="alert">
                                        <strong>Select</strong> the role for this user
                                    </div>
                                    <select id="setectRole" name="role" class="form-select form-control"
                                        aria-label="Default select example">
                                        <option selected value="">Select Role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Super Admin">Super Admin</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('role')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-12 mt-3 text-center">
                                    {{-- <button class="form-control btn btn-success" type="submit">Add</button> --}}
                                    <button type="submit" class="w-50 btn btn-success btn-rounded mb-3">
                                        <span>Add</span> </button>
                                </div>
                        </form>
                        {{-- Data Upload Manully End --}}
                        <div class="container mt-5">
                            <h5 class="text-center">-or-</h5>
                        </div>
                        {{-- Data Upload By Excel Sheet Start --}}
                        <div class="container">
                            <form action="{{ route('store.register') }}" method="post" enctype="multipart/form-data">
                                <!-- Vertically centered modal start -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="modal fade" id="exampleModalCenter">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Select an Excel File</h5>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal"><span>&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input class="form-control" type="file" name="file" id="">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary"><i
                                                                class="fa fa-upload"></i><span
                                                                class="mx-2">Upload</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Vertically centered modal start -->
                                <!-- Button trigger modal -->
                                <div class="col-md-12 text-center">
                                    <button style="border: none;" class="border border-2 rounded" type="button"
                                        data-toggle="modal" data-target="#exampleModalCenter">
                                        <div class="p-3">
                                            <img style="width:140px" src="{{ asset('assets/images/icon/folder.png') }}"
                                                alt="">
                                            <h5 class="mt-2">Upload an Excel File</h5>
                                        </div>
                                    </button>
                                </div>
                            </form>
                        </div>

                        {{-- Data Upload By Excel Sheet End --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark table end -->
    </div>
</div>

<script>
    document.getElementById('firstName').style.display = 'none';
document.getElementById('lastName').style.display = 'none';
document.getElementById('email').style.display = 'none';
document.getElementById('number').style.display = 'none';
document.getElementById('address').style.display = 'none';
document.getElementById('role').style.display = 'none';

// For first name field
document.getElementById('inputFirstName').addEventListener('click', function() {
    document.getElementById('firstName').style.display = 'block';
    document.getElementById('lastName').style.display = 'none';
    document.getElementById('email').style.display = 'none';
    document.getElementById('number').style.display = 'none';
    document.getElementById('role').style.display = 'none';
})

// For last name field
document.getElementById('inputLastName').addEventListener('click', function() {
    document.getElementById('firstName').style.display = 'none';
    document.getElementById('lastName').style.display = 'block';
    document.getElementById('email').style.display = 'none';
    document.getElementById('number').style.display = 'none';
    document.getElementById('role').style.display = 'none';
})

// For email field
document.getElementById('inputEmail').addEventListener('click', function() {
    document.getElementById('firstName').style.display = 'none';
    document.getElementById('lastName').style.display = 'none';
    document.getElementById('email').style.display = 'block';
    document.getElementById('number').style.display = 'none';
    document.getElementById('role').style.display = 'none';
})


// For number field
document.getElementById('inputNumber').addEventListener('click', function() {
    document.getElementById('firstName').style.display = 'none';
    document.getElementById('lastName').style.display = 'none';
    document.getElementById('email').style.display = 'none';
    document.getElementById('number').style.display = 'block';
    document.getElementById('role').style.display = 'none';
})


// For Address field
document.getElementById('inputAddress').addEventListener('click', function() {
    document.getElementById('firstName').style.display = 'none';
    document.getElementById('lastName').style.display = 'none';
    document.getElementById('email').style.display = 'none';
    document.getElementById('number').style.display = 'none';
    document.getElementById('address').style.display = 'block';
    document.getElementById('role').style.display = 'none';
})

// For Role field
document.getElementById('setectRole').addEventListener('click', function() {
    document.getElementById('firstName').style.display = 'none';
    document.getElementById('lastName').style.display = 'none';
    document.getElementById('email').style.display = 'none';
    document.getElementById('number').style.display = 'none';
    document.getElementById('address').style.display = 'none';
    document.getElementById('role').style.display = 'block';
})

</script>
@endsection
