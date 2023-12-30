@extends('admin.layout.default')
@section('title', 'Admin | Unions Manage')
@section('page-title', 'Unions Manage')
@section('present-path', 'Unions Manage')
@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- table primary start -->
        <div class="col-lg-7 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Unions</h4>
                    <div class="single-table">
                        <div class="data-tables datatable-primary">
                            <table id="dataTable3" class="text-center">
                                <thead class="text-uppercase">
                                    <tr class="text-white">
                                        <th scope="col">ID</th>
                                        <th scope="col">Unions Name</th>
                                        <th scope="col">Sub Districts Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i=0;
                                    @endphp
                                    @foreach ($data as $d)
                                    @php
                                    $i++;
                                    @endphp
                                    <tr>
                                        <th scope="row">{{ $i }}</th>
                                        <td>{{ $d->union_name }}</td>
                                        <td>{{ $d->sub_districts_name }}</td>
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
        <div class="col-lg-5 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">New 'Unions' Entry</h4>
                    <div class="text-center mt-3">
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
                    <form action="{{ route('store.storeNewUnion') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label for=""><strong>Select Sub District</strong></label>
                                <select id="sub_districts" name="sub_districts" class="form-select form-control"
                                    aria-label="Default select example">
                                    <option selected value="">Select Sub District</option>
                                    @foreach ($sub_districts as $d)
                                    <option value="{{ $d->id }}"> {{ $d->name }} </option>
                                    @endforeach

                                </select>
                                <span class="text-danger">
                                    @error('sub_districts')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for=""><strong>Unions Name</strong></label>
                                <input id="union_name" type="text" name="union_name" class="form-control"
                                    placeholder="Example: 'Patiya'" aria-label="First name" autocomplete="off"
                                    value="{{ old('union_name') }}">
                                <span class="text-danger">
                                    @error('union_name')
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
