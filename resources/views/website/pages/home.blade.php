@extends('website.layouts.default')
@section('content')
<section id="main-content">
    <section id="info-section" class="row">
        <div class="card col-md-8 h-75 contentSpacing">
            <div class="p-5">
                <div class="d-flex mb-5">
                    <img id="logoImg" src="{{ asset('website/images/doctor.png') }}" alt="" />
                    <h2 id="heading">
                        VACCINE <br />
                        REGISTRATION
                    </h2>
                </div>
                <div>
                    <h6 class="text-center fw-semibold">
                        During Registration You Need
                    </h6>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <img id="nidImg" src="{{ asset('website/images/nid.png') }}" alt="" />
                            <h6 class=" mt-2">NID</h6>
                        </div>
                        <div class="col-md-1 me-3">
                            <img id="arrow" src="{{ asset('website/images/arrowRight.png') }}" alt="" />
                        </div>
                        <div class="col-md-3">
                            <img id="nidImg" src="{{ asset('website/images/phone.png') }}" alt="" />
                            <p class=" mt-2">Phone</p>
                        </div>
                        <div class="col-md-1 me-2">
                            <img id="arrow" src="{{ asset('website/images/arrowRight.png') }}" alt="" />
                        </div>
                        <div class="col-md-3 ms-2">
                            <img id="nidImg" src="{{ asset('website/images/info.png') }}" alt="" />
                            <p class="mt-2 ">Info</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 contentSpacing">
            <a class="card cardDesign" href="{{ route('checkStatusPage') }}">
                <div class="d-flex">
                    <img class="imageWidth" src="{{ asset('website/images/check.png') }}" alt="" />
                    <div class="fw-bold p-2">CHECK STATUS</div>
                </div>
            </a>
            <a class="card cardDesign" href="{{ route('cardPage') }}">
                <div class="d-flex">
                    <img class="imageWidth" src="{{ asset('website/images/card.png') }}" alt="" />
                    <span class="fw-bold p-2">VACCINE CARD</span>
                </div>
            </a>
            <a class="card cardDesign" href="{{ route('certificatePage') }}">
                <div class="d-flex">
                    <img class="imageWidth" src="{{ asset('website/images/certificate.png') }}" alt="" />
                    <span class="fw-bold p-2">CERTIFICATE</span>
                </div>
            </a>
            <a class="card cardDesign" href="{{ route('faqPage') }}">
                <div class="d-flex">
                    <img class="imageWidth" src="{{ asset('website/images/faq.png') }}" alt="" />
                    <span class="fw-bold p-2">FAQ</span>
                </div>
            </a>
        </div>
    </section>
</section>
<section id="processInfoSection" class="card mt-5 mb-3">
    <h3 style="color: #077376">
        The Process of Receiving the Covid-19 Corona Vaccine
        <hr />
    </h3>

    <div class="row mt-3">
        <div class="col-md-4">
            <img class="processSectionImage" src="{{ asset('website/images/online.png') }}" alt="" />
            <p class="fw-bold fs-5 mb-3 mt-3">Online Registration</p>
            <p class="fontBold fs-6">
                First, you have to complete the online registration by verifying
                your national identity card and correct mobile number through this
                portal.
            </p>
        </div>
        <div class="col-md-4">
            <img class="processSectionImage" src="{{ asset('website/images/sms.png') }}" alt="" />
            <p class="fw-bold fs-5 mb-3 mt-3">SMS Notification</p>
            <p class="fontBold fs-6">
                After registering online, you will receive a text message on your
                mobile phone mentioning the date of vaccination and the name of
                the vaccination center.
            </p>
        </div>
        <div class="col-md-4">
            <img class="processSectionImage" src="{{ asset('website/images/vaccination.png') }}" alt="" />
            <p class="fw-bold fs-5 mb-3 mt-3">Vaccination</p>
            <p class="fs-6 fontBold">
                Subject to receiving a text message on the mobile phone, you have
                to appear in person at the vaccination center on the specified
                date with the vaccine card, national identity card and signed
                consent form to receive the Covid-19 vaccine.
            </p>
        </div>
    </div>
</section>
@endsection
