@extends('layout.master')
@section('call-center')
{{-- call-center --}}

<section class="call-center" >
    <div class="call">
        <img src="{{asset('front_template/img/22-0٢ 3@2x.png')}}" class="img-dots">
        <div class="call-1">
            <p class="call-p1">call center system</p>
            <h1>Automated outbound calls</h1>
            <p class="call-p">specializes in software development and call center consultation  development and call center consultation 
                specializes in software development and call center consultation  development and call center consultation 
                specializes in software development and call center consultation  development and call center consultation 
                specializes in software development and call center consultation  development and call center consultation 
                ll center consultation  development and call center consultation
            </p>
        </div>
        <div class="call-2">
            <img src="{{asset('front_template/img/Untitled design (8) 1.png')}}">
           
        </div>

    </div>
    <svg height="100" width="100" class="cir-call">
        <circle cx="50" cy="50" r="25"  stroke-width="3" fill="" class="cir-call" />
    </svg>
</section>
<section class="main-feature">
    <h1>main features</h1>
    <img src="{{asset('front_template/img/22-0٢ 3@2x.png')}}" class="img-dots-call">
    <div class="main-feature1">
        <div class="main-feature-1">
            <div class="main-feature-content">
                <div class="main-feature-content-img">
                    <img src="{{asset('front_template/img/Vector (14).png')}}">

                </div>
                
                <p>format partition</p>
            </div>
            <div class="main-feature-content">
                <div class="main-feature-content-img"><img src="{{asset('front_template/img/Frame (1).png')}}"></div>
                <p>Creating departments or services</p>
            </div>
            <div class="main-feature-content">
                <div class="main-feature-content-img"><img src="{{asset('front_template/img/Vector (16).png')}}"></div>
                <p>define questions and collect answer</p>
            </div>
        </div>
        <div class="main-feature-2">
            <div class="main-feature-content">
                <div class="main-feature-content-img"><img src="{{asset('front_template/img/Vector (15).png')}}"></div>
                
                <p>create tasks</p>
            </div>
            <div class="main-feature-content">
                <div class="main-feature-content-img"> <img src="{{asset('front_template/img/Mask group.png')}}"></div>
               
                <p>upload the numbers to be called as an excel file</p>
            </div>
        </div>
       
    </div>
   
</section>

@endsection