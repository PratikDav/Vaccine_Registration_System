<div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img id="logo" class="rounded" src="{{ asset('website/images/Screenshot_6.png') }}" alt="" />
        <p class="fw-semibold fs-6">
            <span style="color: #0ca0f2">Get a Drop,</span>
            <span style="color: #36b990">Stop the Strop.</span>
        </p>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item navTextHome">
                <a class="nav-link active" aria-current="page" href="{{ route('homePage') }}">@lang('lang.home')</a>
            </li>
            <li class="nav-item navText">
                <a class="nav-link" href="{{ route('RegistrationPage') }}">@lang('lang.registration')</a>
            </li>
            <li class="nav-item navText">
                <a class="nav-link" href="{{ route('cardPage') }}">@lang('lang.card')</a>
            </li>
            <li class="nav-item navText">
                <a class="nav-link" href="{{ route('certificatePage') }}">@lang('lang.certificate')</a>
            </li>
            <li class="nav-item navText">
                <a class="nav-link" href="{{ route('verifyCertificatePage') }}">@lang('lang.verifyCertificate')</a>
            </li>
{{--
            <li class="nav-item">
                @if ( $switch == 'Bangla' )
                    <a id="langBtn" href="/" class="btn fw-semibold text-light">English</a>
                    @else
                    <a id="langBtn" href="/ban" class="btn fw-semibold text-light">বাংলা</a>
                    @endif
            </li> --}}

        </ul>
    </div>
</div>
