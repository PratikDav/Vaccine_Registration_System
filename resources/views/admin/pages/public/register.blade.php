@extends('admin.layout.default')
@section('title', 'Admin | Public Entry')
@section('page-title', 'Public Entry')
@section('present-path', 'Public Entry')
@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <!-- Dark table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="container card-body">
                    <h4 class="header-title">Public Entry Form</h4>
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
                                <img style="width: 60px;" class="" src="{{ asset('assets/images/error.gif') }}"
                                    alt="img">
                                {{ Session::get('failed') }}
                            </div>
                            @endif
                        </div>
                        {{-- Data Upload Manully Start --}}
                        <form action="{{ route('store.registerPublicFormDataStore') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for=""><strong>Name</strong></label>
                                    <input id="inputNamee" type="text" name="name" class="form-control"
                                        placeholder="Example: 'John Smith'" aria-label="First name" autocomplete="off"
                                        value="{{ old('name') }}">
                                    <span class="text-danger">
                                        @error('name')
                                        {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                                <div class="col-md-6">
                                    <label for=""><strong>Father's Name</strong></label>
                                    <input id="Father_Name" type="text" name="Father_Name" class="form-control"
                                        placeholder="Example: 'Michel Smith'" aria-label="Last name"
                                        value="{{ old('Father_Name') }}">
                                    <span class="text-danger">
                                        @error('Father_Name')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""><strong>Mother's Name</strong></label>
                                    <input id="Mother_Name" type="text" name="Mother_Name" class="form-control"
                                        placeholder="Example: 'Michel Smith'" aria-label="Last name"
                                        value="{{ old('Mother_Name') }}">
                                    <span class="text-danger">
                                        @error('Mother_Name')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""><strong>Nationality</strong></label>
                                    <select id="Nationality" name="Nationality" class="form-select form-control" aria-label="Default select example">
                                        <option selected value="">Select Nationality</option>
                                        <option value="Bangladeshi">Bangladeshi</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('Nationality')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""><strong>Date of Birth</strong></label>
                                    <input id="Date_of_Birth" type="date" name="Date_of_Birth" class="form-control" aria-label="Last name"
                                        value="{{ old('Date_of_Birth') }}">
                                    <span class="text-danger">
                                        @error('Date_of_Birth')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""><strong>Gender</strong></label>
                                    <select id="Gender" name="Gender" class="form-select form-control"
                                        aria-label="Default select example">
                                        <option selected value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('Gender')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for=""><strong>Place of Birth</strong></label>
                                    <input id="Place_of_Birth" type="text" name="Place_of_Birth" class="form-control" aria-label="Last name"
                                        value="{{ old('Place_of_Birth') }}" placeholder="Example: 'Post Office,  Patiya, Chattogram'">
                                    <span class="text-danger">
                                        @error('Place_of_Birth')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for=""><strong>Permanent Address</strong></label>
                                    <input id="Permanent_Address" type="text" name="Permanent_Address" class="form-control" aria-label="Last name"
                                        value="{{ old('Permanent_Address') }}" placeholder="Example: 'Post Office,  Patiya, Chattogram'">
                                    <span class="text-danger">
                                        @error('Permanent_Address')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-12 mt-3 text-center">
                                    <button type="submit" class="w-50 btn btn-success btn-rounded mb-3">
                                        <span>Register</span> </button>
                                </div>
                        </form>
                        {{-- Data Upload Manully End --}}
                        <div class="container mt-5">
                            <h5 class="text-center">-or-</h5>
                        </div>
                        {{-- Data Upload By Excel Sheet Start --}}
                        <div class="container">
                            <form action="" method="post"
                                enctype="multipart/form-data">
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

@endsection
