<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master</title>
    <link rel="stylesheet" href="{{asset('front_template/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('front_template/css/style-2.css')}}">
    <link rel="stylesheet" href="{{asset('front_template/css/style-3.css')}}">
    <link rel="stylesheet" href="{{asset('front_template/css/style-4.css')}}">
    <link rel="stylesheet" href="{{asset('front_template/css/style-5.css')}}">
    <link rel="stylesheet" href="{{asset('front_template/css/style-6.css')}}">
    <link rel="stylesheet" href="{{asset('front_template/css/call.css')}}">
    <link rel="stylesheet" href="{{asset('front_template/css/contact.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('front_template/css/service.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('front_template/css/call2.css')}}">
    <link rel="stylesheet" href="{{asset('front_template/css/contact2.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('front_template/css/service2.css')}}"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link type="text/css" rel="stylesheet" href="{{asset('front_template/css/materialize.min.css')}}"  media="screen,projection"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap" rel="stylesheet"> 

</head>
<body>
    @include('includes.header')
    @yield('home')
    @yield('call-center')
    @yield('contact')
    @yield('service')
    

    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="{{asset('front_template/jsjquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('front_template/jsjquery.hislide.js')}}"></script>
    <script type="text/javascript" src="{{asset('front_template/jsjquery-3.1.1.min.js')}}" ></script>
		<script type="text/javascript" src="{{asset('front_template/jsjquery.hislide.js')}}" ></script>
		<script>
			$('.image-rotator').hiSlide();
			$('#mySlide').hiSlide({
				interval: 3000,
				speed: 500
			});
		</script>
    <script type="text/javascript">
        $(document).ready(function(){
           $('.carousel').carousel();
         });
      
    </script>

    <script>
        const mySwiper = new Swiper('.swiper', {
  loop: true,

  pagination: {
    el: '.swiper-pagination',
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
    </script>
  <!--<script type="text/javascript">
        $(document).ready(function(){
           $('.carousel').carousel();
         });
      
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 300,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      </script>
      <script type="text/javascript">
        $("a").click(function(){
            $("a").css("color",);
            $(this).css("color","red");
        })
      </script>

</body>
</html> 