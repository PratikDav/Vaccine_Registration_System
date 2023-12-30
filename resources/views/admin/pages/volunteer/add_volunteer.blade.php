@extends('admin.layout.default')
@section('title', 'Admin | ADD Volunteer')
@section('page-title', 'ADD Volunteer')
@section('present-path', 'ADD Volunteer')
@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <!-- Dark table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="container card-body">
                    <h4 class="header-title">
                        Add New Volunteer
                        <a href="{{ route('show.allVolunteer') }}" class="badge badge-dark mx-2">Volunteer Details</a>
                    </h4>
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
                        <form action="{{ route('storeVolunteer') }}" method="post" enctype="multipart/form-data"
                            id="form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for=""><strong>Volunteer Name</strong></label>
                                    <input id="volunteer_name" type="text" name="volunteer_name" class="form-control"
                                        placeholder="Example: 'Mohammod Irfan Khan'" aria-label="First name"
                                        autocomplete="off" value="{{ old('volunteer_name') }}">
                                    <span class="text-danger">
                                        @error('volunteer_name')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><strong>Volunteer Mobile Number</strong></label>
                                    <input id="volunteer_mobile_no" type="number" name="volunteer_mobile_no" class="form-control"
                                        placeholder="Example: '01852088728'" aria-label="First name"
                                        autocomplete="off" value="{{ old('volunteer_mobile_no') }}">
                                    <span class="text-danger">
                                        @error('volunteer_mobile_no')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <label for=""><strong>Volunteer Address</strong></label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select id="divisions" name="divisions" class="form-select form-control"
                                                aria-label="Default select example">
                                                <option selected value="">Select Division</option>
                                                @foreach ($divisions as $d)
                                                <option value="{{ $d->id }}"> {{ $d->name }} </option>
                                                @endforeach

                                            </select>
                                            <span class="text-danger">
                                                @error('divisions')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-3">
                                            <select id="districts" name="districts" class="form-select form-control"
                                                aria-label="Default select example">
                                                <option selected value="">Select District</option>


                                            </select>
                                            <span class="text-danger">
                                                @error('districts')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-3">
                                            <select id="sub_districts" name="sub_district"
                                                class="form-select form-control" aria-label="Default select example">
                                                <option selected value="">Select Sub-District</option>

                                            </select>
                                            <span class="text-danger">
                                                @error('sub_district')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-3">
                                            <select id="union" name="union" class="form-select form-control"
                                                aria-label="Default select example">
                                                <option selected value="">Select Union</option>
                                            </select>
                                            <span class="text-danger">
                                                @error('union')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for=""><strong>Assign  Center</strong></label>
                                        <div class="">
                                            <select id="center" name="center" class="form-select form-control" aria-label="Default select example">
                                                <option selected value="">Select Center</option>
                                            </select>
                                            <span class="text-danger">
                                                @error('center')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                </div>
                                <div class="col-md-12 mt-3 text-center">

                                    <button type="submit" class="w-50  btn btn-success btn-rounded mb-3">
                                        <span>Add</span> </button>
                                    <button type="reset" class="w-50  btn btn-success btn-rounded mb-3">
                                        <span>Reset</span> </button>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    $("#divisions").change(function() {
        const divisionId = $(this).val();
        // console.log(divisionId);
        $("#districts").empty()
        let str ='<option value="">Select District</option>'
        $.ajax({
            url : 'http://127.0.0.1:8000/api/districts/'+divisionId,
            dataType : 'json',
            type : 'GET',
            success : function(res){
                const districts = res.districts
                const len = districts.length
                for (let i = 0; i < len; i++) {
                    str +='<option value="'+districts[i].id+'">'+districts[i].name+'</option>'
                }
                $("#districts").html(str)
            }
        })
    })
    $("#districts").change(function() {
        const districtsId = $(this).val();
        // console.log(divisionId);
        $("#sub_districts").empty()
        let str ='<option value="">Select Sub District</option>'
        $.ajax({
            url : 'http://127.0.0.1:8000/api/sub_districts/'+districtsId,
            dataType : 'json',
            type : 'GET',
            success : function(res){
                // console.log(res);
                const sub_districts = res.subDistricts
                const len = sub_districts.length
                for (let i = 0; i < len; i++) {
                    str +='<option value="'+sub_districts[i].id+'">'+sub_districts[i].name+'</option>'
                }
                $("#sub_districts").html(str)
            }
        })
    })
    $("#sub_districts").change(function() {
        const sub_districtsId = $(this).val();
        // console.log(divisionId);
        $("#union").empty()
        let str ='<option value="">Select Union</option>'
        $.ajax({
            url : 'http://127.0.0.1:8000/api/union/'+sub_districtsId,
            dataType : 'json',
            type : 'GET',
            success : function(res){
                console.log(res);
                const union = res.union
                const len = union.length
                for (let i = 0; i < len; i++) { str +='<option value="' +union[i].id+'">'+union[i].name+'</option>'
                    }
                    $("#union").html(str)
            }
        })
    })
    $("#sub_districts").change(function() {
        const sub_districtsId = $(this).val();
        // console.log(divisionId);
        $("#center").empty()
        let str ='<option value="">Select Center</option>'
        $.ajax({
            url : 'http://127.0.0.1:8000/api/center/'+sub_districtsId,
            dataType : 'json',
            type : 'GET',
            success : function(res){
                console.log(res);
                const center = res.center
                const len = center.length
                for (let i = 0; i < len; i++) { str +='<option value="' +center[i].vaccination_center_id+'">'+center[i].vaccination_center_name+'</option>'
                    }
                    $("#center").html(str)
            }
        })
    })
})
</script>
@endsection
