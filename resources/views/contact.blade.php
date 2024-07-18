@extends('layout.master')
@section('contact')

{{-- contact --}}
<section class="contact">
    <div class="contact-container">
        <img src="{{asset('front_template/img/22-0٢ 3@2x.png')}}" class="img-dots">
        <div class="contact-1">
            <h1>contact us</h1>
            <p class="contact-1-p">You can contact us to request a service or express<br> your feelings through this form using 
                social media <br>links.</p>
            <div>
                <img src="{{asset('front_template/img/Frame.png')}}">
                <p class="contact-1-p2 ">You can contact us to service </p>
            </div>
            <div>
                <img src="{{asset('front_template/img/Vector (12).png')}}">
                <p class="contact-1-p2 ">+967 77125590</p>
            </div>
            <div>
                <img src="{{asset('front_template/img/Vector (13).png')}}">
                <a href=" temmam123@gmail.com" >temmam123@gmail.com</a>
            </div>
        </div>
        <div class="form">
            <form method="post" action="{{url('contact')}}"> 
                @csrf
                <fieldset>
                 <label for="" class="lable"></label><br>
                 <input type="text"  placeholder="full name" class="input" name="user_name">
                 <label for="" class="lable"></label>
                 <input type="email" placeholder="your email"  class="input" name="user_email">
                 <label for="" class="lable"></label>
                 <input type="text" placeholder="message" class="input-1" name="message">
                 <input type="submit" value="send" class="submit">
                  <br>
             </fieldset>
             </form>
         </div>
         
         <svg height="100" width="100" class="cir-cont">
            <circle cx="50" cy="50" r="25"  stroke-width="3" fill="" class="cir-cont" />
    </svg>
    </div>

</section>

@endsection