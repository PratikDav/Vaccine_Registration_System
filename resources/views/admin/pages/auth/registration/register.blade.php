@include('admin.pages.auth.includes.header')
@section('content', 'Register')
<main class="container mt-5">
    <div>
        <h4 class="text-light fw-bold">
            <img style="width: 50px;" class="rounded-circle" src="{{ asset('assets/images/plus.gif') }}" alt="">
            Create a New User
        </h4>
    </div>
    <div class="container mt-3">
        <div class="text-center">
            @if(Session::has('success'))
            <div class="alert alert-success">
                <img style="width: 50px;" class="rounded-circle" src="{{ asset('assets/images/success.gif') }}" alt="img">
                {{ Session::get('success') }}
            </div>
            @endif

            @if(Session::has('failed'))
            <div class="alert alert-danger">
                <img style="width: 60px;" class="" src="{{ asset('assets/images/error.gif') }}" alt="img">
                {{ Session::get('failed') }}
            </div>
            @endif
        </div>
    </div>
    <div class='mt-5'>
        <form action="{{ route('store.register') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="firstName" placeholder="First name"
                        aria-label="First name" value="{{ old('firstName') }}">
                    <div class="mt-2">
                        <span class="text-danger rounded error">
                            @error('firstName')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="lastName" placeholder="Last name"
                        aria-label="Last name" value="{{ old('lastName') }}">
                    <div class="mt-2">
                        <span class="text-danger rounded error">
                            @error('lastName')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>
                <div class="col-md-6 mt-3">
                    <input type="email" class="form-control" name="email" placeholder="Email Address" aria-label="Email"
                        value="{{ old('email') }}">
                    <div class="mt-2">
                        <span class="text-danger rounded error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>
                <div class="col-md-6 mt-3">
                    <input type="number" class="form-control" name="number" placeholder="Mobile" aria-label="number"
                        value="{{ old('number') }}">
                    <div class="mt-2">
                        <span class="text-danger rounded error">
                            @error('number')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>
                <div class="col-md-6 mt-3">
                    <input type="password" class="form-control" name="password" placeholder="Password"
                        aria-label="password">
                    <div class="mt-2">
                        <span class="text-danger rounded error">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>
                <div class="col-md-6 mt-3">
                    <input type="password" class="form-control" name="confirm_password"
                        placeholder="Confirm Password" aria-label="Confirm Password">
                    {{-- <div class="mt-2">
                        <span class="text-danger rounded error">
                            @error('c_pass')
                            {{ $message }}
                            @enderror
                        </span>
                    </div> --}}

                </div>
                <div class="col-md-6 mt-3">
                    <input type="text" class="form-control" name="address" placeholder="Address" aria-label="Address"
                        value="{{ old('address') }}">
                    <div class="mt-2">
                        <span class="text-danger rounded error">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>
                <div class="col-md-6 mt-3">
                    <select id="setectRole" name="role" class="form-select form-control"
                        aria-label="Default select example">
                        <option value="">Select Role</option>
                        <option value="Admin">Admin</option>
                        <option value="Super Admin">Super Admin</option>
                    </select>
                    <div class="mt-2">
                        <span class="text-danger rounded error">
                            @error('role')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>
                <div class="mt-3">
                    <button id="regButton" class="px-4 btn" type="submit">
                        Add
                    </button>
                </div>
                <div class='mt-4'>
                    <a class="fs-6 text-white fw-semibold" href="{{ route('show.Login') }}">Go to Login?</a>
                </div>
            </div>
        </form>

    </div>
</main>
@include('admin.pages.auth.includes.footer')
