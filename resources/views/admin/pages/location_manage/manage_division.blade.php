@extends('admin.layout.default')
@section('title', 'Admin | Division Manage')
@section('page-title', 'Division Manage')
@section('present-path', 'Division Manage')
@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- table primary start -->
        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Divisions</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="text-uppercase bg-primary">
                                    <tr class="text-white">
                                        <th scope="col">ID</th>
                                        <th scope="col">Division Name</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($divisions as $division)
                                    <tr>
                                        <th scope="row">{{ $division->id }}</th>
                                        <td>{{ $division->name }}</td>
                                        <td><i class="ti-trash"></i></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- table primary end -->
        <!-- table primary start -->
        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">New 'Division' Entry</h4>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <label for=""><strong>Division Name</strong></label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Example: 'Dhaka'"
                                    aria-label="First name" autocomplete="off" value="{{ old('name') }}">
                                <span class="text-danger">
                                    @error('name')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-12 mt-3 text-center">
                                <button type="submit" class="w-50  btn btn-success btn-rounded mb-3">
                                    <span>Add</span> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- table primary end -->
    </div>

</div>
@endsection
