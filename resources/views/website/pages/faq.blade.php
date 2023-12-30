@extends('website.layouts.default')
@section('content')
<header class="faq-header ">
    <div class=" container ">
        <div class="row p-4 ">
            <p class="col-md-8 mt-5 fw-bold">Frequently Asked Questions</p>
            <img style="width: 140px;" class="col-md-4 mt-3" src="{{ asset('website/images/FAQ-two.png') }}" alt="">
        </div>

    </div>
</header>

<main class="container mt-4">
    <article class="fw-bold">
        Frequently Asked Questions about Covid-19 Corona Vaccine

    </article>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item mt-3">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    What to do if OTP is not received at the last step of the registration process?
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse " aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">You can resend OTP. If you unfortunately close the OTP providing screen, can
                    re-register.</div>
            </div>
        </div>
        <div class="accordion-item mt-3 ">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    If I want to register for Covid-19 coronavirus vaccine, how do I register online?
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse " aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">You can register by logging on to www.surokkha.gov.bd web portal or by
                    downloading the “Surokkha” app from Google Play Store. See "Manual" on the web portal for details.
                </div>
            </div>
        </div>
        <div class="accordion-item mt-3">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    I have registered for the vaccine online, what should I do next?
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Download Vaccine Card from www.surokkha.gov.bd web portal. Later, the date
                    and center of the vaccine will be informed via SMS on the mobile phone.</div>
            </div>
        </div>
    </div>
</main>
@endsection
