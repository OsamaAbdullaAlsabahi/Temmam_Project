@extends('layout.master')
@section('service')

<head>
    <link rel="stylesheet" href="{{asset('front_template/css/service2.css')}}">
    <link rel="stylesheet" href="{{asset('front_template/css/service.css')}}">

</head>
{{-- service --}}
<section >
    <p class="service-p">Features</p>
    <h1 class="service-h1">Features and Services</h1>
    <svg height="100" width="10" class="cir-service">
        <circle cx="-10" cy="50" r="25"  stroke-width="3" fill="" class="cir-service" />
    </svg>
    <div class="center  center-1 center-5">
        <img src="{{asset('front_template/img/Frame 148.png')}}">
        <div class="center-content"> 
            <h1>Call center Services</h1>
            <p>We Provides Integrated Call Center <br>Services In An Equipment And<br> Software</p>
        </div>
    </div>
    <div class="center-2 center-4 center-3">
        <img src="{{asset('front_template/img/help-desk 1 (2).png')}}">
        <div class="center-content">
            <h1>Software System Development</h1>
            <p>We provide Help Desk. Ticketing And Shift Planning Systems Development As Main Services In Our Company</p>
        </div>
    </div>
    <svg height="100" width="90" class="cir-service-2">
        <circle cx="50" cy="-10" r="25"  stroke-width="3" fill="" class="cir-service-2" />
    </svg>
    <div class="center center-3">
        <img src="{{asset('front_template/img/call.png')}}">
        <div class="center-content">
            <h1>Third Party Call center (Outsourcing)</h1>
            <p>We Provide Call Center Service As<br> Third Party Local</p>
        </div>
    </div>
    <svg height="40" width="90" class="cir-service-4">
        <circle cx="50" cy="" r="25"  stroke-width="3" fill="" class="cir-service-4" />
    </svg>
    <svg height="100" width="100" class="cir-service-3">
        <circle cx="50" cy="50" r="25"  stroke-width="3" fill="" class="cir-service-3" />
    </svg>
    <div class="center-2 center-5 center-con"> 
        <img src="{{asset('front_template/img/app-design 2.png')}}">
        <div class="center-content">
            <h1>Web Development</h1>
            <p>Temmam Light Provide Websites<br> Development Services</p>
        </div>
    </div>
</section>

@endsection