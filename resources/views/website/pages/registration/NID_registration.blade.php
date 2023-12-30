<div id='regFormForNID'>
    <div class="text-center">
        @if(Session::has('success'))
        <div class="alert alert-success">
            <img style="width: 50px;" class="rounded-circle" src="{{ asset('assets/images/dose.gif') }}" alt="img">
            <h6 class="d-inline mx-2">
                {{ Session::get('success') }}
            </h6>
        </div>
        @endif

        @if(Session::has('deleted'))
        <div class="alert alert-success">
            <img style="width: 50px;" class="rounded-circle" src="{{ asset('assets/images/done.gif') }}" alt="img">
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
    <form action="{{ route('registerApplicants') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mt-3">
                    <span>Select type:</span>
                    <select class="form-select" name="type" aria-label="Default select example">
                        <option selected value="">Open this select menu</option>
                       @foreach ( $types  as $t)

                       <option value="{{$t->id}}">{{ $t->types }}</option>
                       @endforeach

                    </select>
                    <span class="text-danger">
                        @error('type')
                        {{ $message }}
                        @enderror
                    </span>
                </div>


                <div class="mt-3">
                    <span>National Identity Card Number:</span>
                    <input type="number" id="nid" name="nid" class="form-control" placeholder="Example: 19825624603112948">
                    {{-- <div id="show" class='text-info'>Enter yourNID</div> --}}
                    <span class="text-danger">
                        @error('nid')
                        {{ $message }}
                        @enderror
                    </span>
                </div>
                {{-- <div class="border border-2 rounded mt-3">
                    <div class="container">
                        <div class="d-flex">
                            <div class="me-5 ms-4 mt-3">
                                <h3>N E K 4 8 0</h3>
                            </div>
                            <div class="mt-3">
                                <button class="border border-0">
                                    <img id="reload" src="{{ asset('website/images/reload.png') }}" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="container mb-2">
                        <span>Write the letters from above here:</span>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div> --}}

                <div>
                    <input id="sbmb" class="w-100 btn btn-success mt-3" type="submit" value="Register">
                </div>

            </div>
            <div class="col-md-6">
                <div class="mt-3">
                    <span>Date of birth (according to national identity card):</span>
                    <input type="date" name='dob' class="form-control" placeholder="Selet Your Birth Date">
                    <span class="text-danger">
                        @error('dob')
                        {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
        </div>
    </form>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
    <script>
        // function myFunction(){
                        //         console.log("Working");
                        //     }
                        // $(document).ready(function() {
                        //     $("#nid").keyup(function(){
                        //         let single = '';
                        //         let str = '';
                        //         const nid = $(this).val();
                        //         let button= "<input class='w-100 btn btn-success mt-3' type='submit' value='Register'>";
                        //         $.ajax({
                        //             url: 'http://127.0.0.1:8001/api/getNID',
                        //             dataType: 'json',
                        //             type: 'GET',
                        //             success: function(res) {
                        //                 const getNIDs = res.getNID
                        //                 // console.log(getNID)
                        //                 // const len = getNID.length
                        //                 // getNID.forEach();
                        //                 const single = getNIDs.map(getNID => getNID.nid_no)
                        //                 // console.log(single)
                        //                 const len = single.length
                        //                 for (let i = 0; i < len; i++) {
                        //                      value = single[i]
                        //                     // console.log(value);
                        //                     if (nid == value) {
                        //                         $("#sbmb").html(button)
                        //                     }else{

                        //                     }
                        //                 }


                                        // else{
                                        //     console.log(not matched);
                                        // }
                                        // console.log(single)
                                        // if (single == nid) {
                                        //      str = "<div class='text-success'>NID Matched</div>"

                                        // }
                                        // else{
                                        //      str = "<div class='text-denger'>NID not Matched</div>"
                                        // }
                                        // $("#show").html(str)

                                    }
                                })
                            });
                        })
    </script>
</div>
