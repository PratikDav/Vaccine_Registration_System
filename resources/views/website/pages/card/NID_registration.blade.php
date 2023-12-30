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
    <form action="{{ route('getCard') }}" method="get">
        @csrf
        <div class="row">
            <div class="col-md-6">
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
                    <input class="w-100 btn btn-success mt-3" type="submit" value="Verify">
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
</div>

