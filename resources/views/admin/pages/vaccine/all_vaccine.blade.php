@extends('admin.layout.default')
@section('title', 'Admin | Vaccine')
@section('page-title', 'Vaccine')
@section('present-path', 'Vaccine')
@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <!-- Dark table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="header-title col-md-10">Available Vaccine</h4>
                        <div class="col-md-2 mb-2">
                            <button type="button" class="btn btn-primary btn-flat btn-lg mt-3 rounded"
                                data-toggle="modal" data-target="#exampleModalCenter"><i
                                    class="fa fa-plus-square mx-1"></i>Add New Vaccine</button>
                        </div>
                    </div>
                    <div class="text-center">
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            <img style="width: 50px;" class="rounded-circle" src="{{ asset('assets/images/dose.gif') }}"
                                alt="img">
                            <h6 class="d-inline mx-2">
                                {{ Session::get('success') }}
                            </h6>
                        </div>
                        @endif

                        @if(Session::has('deleted'))
                        <div class="alert alert-success">
                            <img style="width: 50px;" class="rounded-circle" src="{{ asset('assets/images/done.gif') }}"
                                alt="img">
                            <h6 class="d-inline mx-2">
                                {{ Session::get('deleted') }}
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

                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="text-uppercase bg-primary">
                                    <tr class="text-white">
                                        <th scope="col">Vaccine ID</th>
                                        <th scope="col">Vaccine Name</th>
                                        <th scope="col">Batch No</th>
                                        <th scope="col">Manufacturing Company</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i=0;
                                    @endphp
                                    @foreach ($allVaccine as $vaccine)
                                    @php
                                    $i++;
                                    @endphp
                                    <tr>
                                        <td> {{ $i }} </td>
                                        <td>{{ $vaccine->vaccine_name }}</td>
                                        @if ($vaccine->batch_no)
                                        <td>{{ $vaccine->batch_no }}</td>
                                        @else
                                        <td title="Batch Number Unavailable">N/A</td>
                                        @endif

                                        <td>{{ $vaccine->manufacturing_company }}</td>
                                        <td>
                                            <a type="button"
                                                href="{{ route('editVaccine', ['vaccine_id' => $vaccine->vaccine_id]) }}"
                                                class="btn rounded" data-toggle="modal" data-target="#editDose"><i
                                                    class="fa fa-edit"></i></a>
                                            <a class="btn"
                                                href="{{ route('deleteVaccine', ['vaccine_id' => $vaccine->vaccine_id]) }}"
                                                onclick="return confirm('Are you sure?')"><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark table end -->

        <!-- Vertically centered modal start -->
        <div class="modal fade" id="exampleModalCenter">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add a Vaccine</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <form action="{{ route('storeVaccine') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <input class="form-control" name='vaccine_name' type="text" placeholder="Vaccine Name"
                                required>
                            <input class="form-control mt-2" name='batch_no' type="text" placeholder="Batch No.">
                            <input class="form-control mt-2" name='manufacturing_company' type="text"
                                placeholder="Manufacturing Company" required>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Vertically centered modal end -->

        <!-- Vertically centered modal start -->
        {{-- <div class="modal fade" id="editDose">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Dose</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    @if (Session::has('update'))
                    <form action="{{ $url }}" method="post">
                        @csrf
                        <p>{{ $doseByID->dose_no }}</p>
                        <div class="modal-body">
                            <input class="form-control" name='name' type="text"
                                placeholder="Write the Dose Name-like('1st Dose')" required>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div> --}}
        <!-- Vertically centered modal end -->

    </div>
</div>
@endsection
