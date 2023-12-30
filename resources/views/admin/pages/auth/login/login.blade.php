@include('admin.pages.auth.includes.header')

<main class="container mt-5">
    <div class="mt-5 mb-5">
        <h1 id="welcome" style="color: #E7EDF5 ;" class="text-center mb-5 fw-bold">
            Welcome
        </h1>

        <div class="text-center mt-5">
            <img class="border border-5 border-info rounded-circle" src="{{ asset('assets/images/login.gif') }}" alt="">
            <div class="container mt-3">
                <div class="text-center">
                    @if(Session::has('success'))
                    <img style="width: 50px;" class="rounded-circle" src="{{ asset('assets/images/success.gif') }}" alt="img">
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif

                    @if(Session::has('failed'))
                    <div class="alert alert-danger">
                        <img style="width: 60px;" class="" src="{{ asset('assets/images/error.gif') }}" alt="img">
                        {{ Session::get('failed') }}
                    </div>
                    @endif
                    @if(Session::has('no_access'))
                    <div class="alert alert-warning">
                        <img class="border border-5 border-warning rounded-circle mx-2" style="width: 80px;" class="" src="{{ asset('assets/images/no-access.gif') }}" alt="img">
                        <span class="fs-5">{{ Session::get('no_access') }}</span>
                    </div>
                    @endif
                </div>
            </div>

            <div style="display:grid;justify-content:center;" class="mt-2">
                <div style="width:550px;">
                    <form action="{{ route('get.Login') }}" method="post" class="mt-4">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" name='email' class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mt-3">
                            <button id="loginButton" class="btn fw-bold" type="submit">Login</button>
                        </div>
                    </form>
                </div>
                <div class='mt-5'>
                    <a class="fs-6 text-white fw-semibold" href="{{ route('show.register') }}">Create a new account?</a>
                </div>
            </div>
        </div>
    </div>
</main>

@include('admin.pages.auth.includes.footer')
