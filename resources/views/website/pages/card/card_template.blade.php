@extends('website.layouts.default')
@section('content')
<header class="reg-header ">
    <div class=" container ">
        <div class="row p-4 ">
            <p id="heading" class="col-md-8 mt-5 fw-bold">Vaccine Card</p>
            <img style="width: 220px;" class="col-md-4 mt-1 rounded-circle" src="{{ asset('website/images/vac.gif') }}"
                alt="">
        </div>
    </div>
</header>

<main class="container mt-5">
    <div class="row">

        {{-- Registraion Nav Buuton Start --}}
        <section class="first-part row col-md-4">
            <button id="handlNIDBtn" class="col-md-12 enroll fw-bold rounded-3 fs-5 p-3
            text-center">
                National Id Card
            </button>
            <button id="handleBirthBtn" class="text-center col-md-12  fw-bold enroll rounded fs-5">
                Birth Reg. Certificate
            </button>
            <button id="handlePassportBtn" class="text-center col-md-12  fw-bold enroll rounded fs-5 p-3">
                Passport
            </button>
        </section>
        {{-- Registraion Nav Buuton End --}}

        <section class="second-part col-md-8">
            {{-- Registraion Form For NID Start --}}
            @include('website.pages.card.NID_registration')
            {{-- Registraion Form For NID End --}}


            {{-- Registraion Form For Birth Certificate Start --}}
            @include('website.pages.card.birth_certificate_registration')
            {{-- Registraion Form For Birth Certificate End --}}


            {{-- Registraion Form For Passport Start --}}
            @include('website.pages.card.passport_registration')
            {{-- Registraion Form For Passport End --}}


            {{-- How to Registraion (info) Start --}}
            @include('website.pages.card.card_info')
            {{-- How to Registraion (info) Start --}}
        </section>
    </div>
</main>

<script>
    document.getElementById('regFormForNID').style.display = 'none';
    document.getElementById('regFormForBirth').style.display = 'none';
    document.getElementById('regFormForPassport').style.display = 'none';

    document.getElementById('handlNIDBtn').addEventListener('click',function() {
        // Action on Click
        document.getElementById('info').style.display = 'none';
        document.getElementById('regFormForBirth').style.display = 'none';
        document.getElementById('regFormForPassport').style.display = 'none';
        document.getElementById('regFormForNID').style.display = 'block';
        document.getElementById('heading').innerText = 'Vaccin Card with NID';

        // Styling On click
        //Own Button
        document.getElementById('handlNIDBtn').style.backgroundColor = '#78B93F';
        document.getElementById('handlNIDBtn').style.color = '#F5F5F5';

        // other button
        document.getElementById('handleBirthBtn').style.backgroundColor = '#F5F5F5';
        document.getElementById('handleBirthBtn').style.color = '#000000';
        document.getElementById('handlePassportBtn').style.backgroundColor = '#F5F5F5';
        document.getElementById('handlePassportBtn').style.color = '#000000';

    })
    document.getElementById('handleBirthBtn').addEventListener('click',function() {
        // Action on Click
        document.getElementById('info').style.display = 'none';
        document.getElementById('regFormForNID').style.display = 'none';
        document.getElementById('regFormForPassport').style.display = 'none';
        document.getElementById('regFormForBirth').style.display = 'block';
        document.getElementById('heading').innerText = 'Vaccin Card with Birth Certificate';

        // Styling On click
        //Own Button
        document.getElementById('handleBirthBtn').style.backgroundColor = '#78B93F';
        document.getElementById('handleBirthBtn').style.color = '#F5F5F5';

        // other button
        document.getElementById('handlNIDBtn').style.backgroundColor = '#F5F5F5';
        document.getElementById('handlNIDBtn').style.color = '#000000';
        document.getElementById('handlePassportBtn').style.backgroundColor = '#F5F5F5';
        document.getElementById('handlePassportBtn').style.color = '#000000';

    })
    document.getElementById('handlePassportBtn').addEventListener('click',function() {
        // Action on Click
        document.getElementById('info').style.display = 'none';
        document.getElementById('regFormForNID').style.display = 'none';
        document.getElementById('regFormForBirth').style.display = 'none';
        document.getElementById('regFormForPassport').style.display = 'block';
        document.getElementById('heading').innerText = 'Vaccin Card with Passport';

        // Styling On click
        //Own Button
        document.getElementById('handlePassportBtn').style.backgroundColor = '#78B93F';
        document.getElementById('handlePassportBtn').style.color = '#F5F5F5';

        // other button
        document.getElementById('handlNIDBtn').style.backgroundColor = '#F5F5F5';
        document.getElementById('handlNIDBtn').style.color = '#000000';
        document.getElementById('handleBirthBtn').style.backgroundColor = '#F5F5F5';
        document.getElementById('handleBirthBtn').style.color = '#000000';


    })
</script>
@endsection
