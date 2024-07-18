@extends('layout.master')
@section('home')

<section class="section-1" id="home">
        
    <div class="choose-1">
        <img src="{{asset('front_template/img/22-0٢ 3@2x.png')}}" class="img-dots">
        <div><p class="choose-1-p">Why Choose Us</p>
            <h1>developing<br> solutions for the <br>future </h1>
            <p class="choose-1-p2">specialized in software development and call center consulation<br> development and call center consulation</p>
            <button><a href="{{url('/contact')}}">contact us </a> </button>
        </div>

    </div>
    <div class="choose-2">
        <div class="choose-2-h">
            <div class="div-1">
                <span class="div-1-h2">
                    <img src="{{asset('front_template/img/Vector (3).png')}}">
                    <h1>7Years +</h1>
               </span> 
                <p>experiences the excellence</p>
            </div>
                <svg height="100" width="100" class="cir">
                    <circle cx="50" cy="50" r="28"  stroke-width="3" fill="" class="cir" />
                  </svg>
            <div class="div-2"> 
                <img src="{{asset('front_template/img/1 2.png')}}" alt="" width="75%" class="div-2">
                
            </div>
            
            <div class="div-4">
                <h1>
                    12K
                    <span> +</span>
                </h1>
                <p>clients who trust us</p>
            </div>
            <div class="div-5">
                <img src="{{asset('front_template/img/22-0٢ 3@2x.png')}}" class="img-dots1">
            </div>
            <div class="div-3">
                <h1>service was fast and i got what i requested</h1>
                <div class="div-3-con">
                    <img src="{{asset('front_template/img/Ellipse 1.png')}}" alt="" width="30px">
                    <h1><span class="div-3h"> lamis saleem</span><span class="div-3h2"> customer service</span></h1>
                </div>
            </div>
           
        </div>
    </div>
</section>
<section class="section-2" id="call-center">
    <p class="section-2-p">call center</p>
    <h1 class="section-2-h1">our special service</h1>
    <div class="slider">
       <div class="slide">
        <a href="{{url('contact')}}">
        <div class="first ">
            <p class="first-1">call center system</p></a>
            <p class="first-2">we hanles inbound<br> and outbound calls<br> from current and<br> potential customers</p>
        </div>
        <div class="second">
            <img src="{{asset('front_template/img/Group 20.png')}}" class="second-img">
            <h1>automatic outgoing calls</h1> 
            <p class="second-p">for web and mobile application within interantional standards </p> 
            
        </div>
        <div class="third second">
            <img src="{{asset('front_template/img/Group 2.png')}}" class="third-img">
            <h1>quality management</h1> 
            <p class="second-p">for web and mobile application within interantional standards </p> 
        </div>
        <div class="forth second">
            <img src="{{asset('front_template/img/Group 43.png')}}">
            <h1>incoming calls</h1> 
            <p class="second-p">for web and mobile application within interantional standards </p> 
       </div>
    </div>
    <!--
       <div class="input">
        <input type="radio" name="slide" id="#">
        <input type="radio" name="slide" id="#">
        <input type="radio" name="slide" id="#">
       </div>
       <div class="dots">
        <label for="#"></label>
        <label for="second"></label>
        <label for="third"></label>
       </div> -->
    </div>
    <button >
        <a href="{{url('/call_center')}}">browse all</a>
        <i class='fa fa-arrow-right'  padding-top: 20px; ></i>
    </button>
</section>       
       
<section class="section-3" id="section-3">
    <div class="about">
        <div class="about-1">
           <svg height="100" width="100" class="cir1">
                    <circle cx="50" cy="50" r="20"  stroke-width="3" fill="" class="cir1" />
            </svg>
            <svg height="100" width="100" class="cir2">
                <circle cx="50" cy="50" r="25"  stroke-width="3"  class="cir2" />
            </svg>
            <img src="{{asset('front_template/img/Vector.png')}}" class="star">
            <svg height="100" width="100" class="cir3" fili=" rgba(243, 175, 28, 0.38)">
                <circle cx="50" cy="50" r="25"  stroke-width="3"  class="cir2" />
            </svg>
            <img src="{{asset('front_template/img/2 1.png')}}" alt="" class="about-1-img" width="400px">
            <img src="{{asset('front_template/img/22-0٢ 3@2x.png')}}" class="img-dots2">
            
         </div>
        <div class="about-2">
          <p class="about-2-p">about us</p>
          <h1>our company is here to help you</h1>
          <p class="about-2-p2">A company specializes in the fields of information technology and call center consultation. We provide design 
            and programming services for web and mobile applications within international standards with professional designs </p>
        </div>
    </div>    
</section>
<section class="section-4">
    <div class="service">
        <div class="service-1">
            <p class="service-1-p">our sevices</p>
            <h1>lastest from the services</h1>
            <p class="service-1-p2">the most serivces we provide in temmam light</p>
            <button><a href="{{url('/service')}}">view all</a> </button>
        </div>
        <div class="service-2">
            <div class="middle-1 container">
                <img src="{{asset('front_template/img/customer-service (1) 1.png')}}">
                <h1>call center system</h1>
                <p>We Provides Integrated Call Center Services In An Equipment And Software.</p>
            </div>
            <div class="middle-2 container" >
                <img src="{{asset('front_template/img/Group.png')}}">
                <h1>web development</h1>
                <p>We Provides Integrated Call Center Services In An Equipment And Software.</p>
            </div>
         </div>
                <!--
                <svg height="40" width="400" class="cir3">
                    <ellipse  cx="100"   cy="80"  rx="100"  ry="80" stroke-width="3"  class="cir" />
                </svg>
                 <img src="{{asset('front_template/img/photo_2023-08-29_11-38-13.jpg')}}" alt="" width="92%"  class="middle-img">
                <div class="middle-p overlay middle-p-1">
                    <p class="title-1">tmmam help desk system</p>
                    <p class="text">our most prominent projects we proud of </p>
                    <p class="text">our most prominent projects we proud of </p>
                    <i class='fa fa-arrow-right'  padding-top: 20px; ></i>
                </div>-->
                <!--
                 <img src="{{asset('front_template/img/photo_2023-08-29_11-38-13.jpg')}}" alt="" width="92%" class="middle-img"> 
                 <div class="middle-p overlay middle-p-2">
                    <p class="title-1">tmmam help desk system</p>
                    <p class="text">our most prominent projects we proud of </p>
                    <p class="text">our most prominent projects we proud of </p>
                    <i class='fa fa-arrow-right'  padding-top: 20px; ></i>
                 </div>-->
            <!--
            <svg height="280" width="400" class="cir4">
                <ellipse  cx="100"   cy="100"  rx="70"  ry="90" width="50" height="350" stroke-width="3"  class="cir" />
             </svg>-->
    
        <div class="service-3">
            <div class="  middle-1 container">
                <img src="{{asset('front_template/img/help-desk 1.png')}}">
                <h1>help desk system</h1>
                <p>We Provides Integrated Call Center Services In An Equipment And Software.</p>
                <!--
                <img src="{{asset('front_template/img/photo_2023-08-29_11-38-13.jpg')}}" alt="" width="92%"  class="middle-img"> 
                <div class="middle-p overlay middle-p-3">
                    <p class="title-1">tmmam help desk system</p>
                    <p class="text">our most prominent projects we proud of </p>
                    <p class="text">our most prominent projects we proud of </p>
                    <i class='fa fa-arrow-right'  padding-top: 20px; ></i>
                </div>-->
            </div>
            <div class="middle-2 container">
                <img src="{{asset('front_template/img/app-design 1.png')}}">
                <h1>app development</h1>
                <p>We Provides Integrated Call Center Services In An Equipment And Software.</p>
                <!--
                <img src="{{asset('front_template/img/photo_2023-08-29_11-38-13.jpg')}}" alt="" width="92%" class="middle-img"> 
                 <div class="middle-p overlay middle-p-4">
                    <p class="title-1">tmmam help desk system</p>
                    <p class="text">our most prominent projects we proud of </p>
                    <p class="text">our most prominent projects we proud of </p>
                    <i class='fa fa-arrow-right'  padding-top: 20px; ></i>
                 </div>-->
            </div>
        </div>
        <img src="{{asset('front_template/img/22-0٢ 3@2x.png')}}" class="img-dots3">
    </div>
</section>
<section class="section-5" id="section-5">
    <p class="recent">recent work</p>
    <h1 class="recent-2">our recent projects</h1>
    <svg height="100" width="100" class="cirrecent">
        <circle cx="50" cy="50" r="25"  stroke-width="3" fill="" class="cirrecent" />
    </svg>
    <div class="main">
        <div class="recent-content">
            <div class="first-side">
                <img src="{{asset('front_template/img/Rectangle 101.png')}}">
                <div>
                    <h1>help desk system</h1>
                    <p>We Provides Integrated Call Center Services In An Equipment And Software.</p>
                </div>

            </div>
            <div class="second-side">
                <img src="{{asset('front_template/img/Rectangle 101.png')}}">
                <div>
                    <h1>help desk system</h1>
                    <p>We Provides Integrated Call Center Services In An Equipment And Software.</p>
                </div>

            </div>
        </div>
        <div class="recent-content2">
            <div class="first-side">
                <img src="{{asset('front_template/img/Rectangle 101.png')}}">
                <div>
                    <h1>help desk system</h1>
                    <p>We Provides Integrated Call Center Services In An Equipment And Software.</p>
                </div>

            </div>
            <div class="second-side">
                <img src="{{asset('front_template/img/Rectangle 101.png')}}">
                <div>
                    <h1>help desk system</h1>
                    <p>We Provides Integrated Call Center Services In An Equipment And Software.</p>
                </div>

            </div>
        </div>
    </div>
    <svg height="100" width="100" class="cir-recent">
        <circle cx="50" cy="10" r="25"  stroke-width="3" fill="" class="cir-recent" />
    </svg>

  <!--
    <div class="slider-2">
        <input type="radio" class="slider-span" id="slider-span1" checked>
        <input type="radio" class="slider-span" id="slider-span2" >
        <input type="radio" class="slider-span" id="slider-span3" >
        <div class="slide-2">
            <label for="slider-span1" id="slide1">
                <div class="slide-2-con mySlide">
                    <img src="{{asset('front_template/img/photo_2023-08-29_11-38-13.jpg')}}" width="300px"  class="slide-2-con-img" id="img1">
                    <p id="img-1">temmam  help desk system</p>
                 </div>
                 <a href="#slider-span1" class="button" id="button-1"></a>
            </label>
            <label for="slider-span2" id="slide2" ></label>
                 <div class="slide-2-con  ">
                    <img src="{{asset('front_template/img/photo_2023-08-29_11-38-13.jpg')}}" width="300px"  class="slide-2-con-img" id="img2">
                     <div class="  " id="img-2">
                        <p class="title-1">tmmam help desk system</p>
                        
                     </div>
                        

                     <a href="#slider-span2" class="button" id="button-2"></a> 
                </div>
               
            </label>
            
            

            <label for="slider-span3" id="slide3">
                <div class="slide-2-con container-1">
                    <img src="{{asset('front_template/img/photo_2023-08-29_11-38-13.jpg')}}" width="300px"  class="slide-2-con-img" id="img3">
                    <p id="img-2 " class="overlay-1">temmam  help desk system</p>
                 </div>
                 <a href="#slider-span3" class="button" id="button-3"></a>
            </label>
       </div>
    </div>
    <button class="w3-button w3-black w3-display-left " onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-black w3-display-right " onclick="plusDivs(1)">&#10095;</button>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }
        
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlide");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "";  
          }
          x[slide1].style.display = "block";  
        }
        </script>


     <div class="input">
        <input type="radio" name="slide" id="#">
        <input type="radio" name="slide" id="#">
        <input type="radio" name="slide" id="#">
       </div>
       <div class="dots">
        <label for="#"></label>
        <label for="second"></label>
        <label for="third"></label>
       </div> -->
</section>
<section class="section-6">
    <div class="comment ">
        <div class="comment-1 swiper">
            <div class="swiper-wrapper comments">
                <div class="swiper-slide comments-con">
                    <p class="comment-1-p">testimonial</p>
                    <h1 class="comment-1-h1">what our customers say</h1>
                    <img src="{{asset('front_template/img/Vector (9).png')}} " class="comment-img">
                    <p class="comment-1-p2">We Provides Integrated Call Center Services In An Equipment<br> And Software. 
                      We Provides Integrated Call Center Services In <br>An Equipment And Software.</p>
                    <div class="comment-1-img">
                        <div>
                            <h1 class="comment-1-h2">Mohammed saleem</h1>
                            <p class="comment-1-p3">customer services</p>
                        </div>
                        <div class="images">
                            <img src="">
                        </div>
                       

                    </div>
                </div>
                <div class="swiper-slide comments-con">
                    <p class="comment-1-p">testimonial</p>
                    <h1 class="comment-1-h1">what our customers say</h1>
                    <img src="{{asset('front_template/img/Vector (9).png')}}" class="comment-img">
                    <p class="comment-1-p2">We Provides Integrated Call Center Services In An Equipment <br>And Software. 
                      We Provides Integrated Call Center Services In<br> An Equipment And Software.</p>
                    <div>
                        <h1 class="comment-1-h2">Mohammed saleem</h1>
                        <p class="comment-1-p3">customer services</p>
            
                    </div>
                </div>
            </div>

            <div class="swiper-button-prev  prev">

                <i class="fa-solid fa-angle-left prev-2" ></i>
                </div>
            <div class="swiper-button-next next">
                <i class="fa-solid fa-angle-right next-2"></i>
            </div>
            
        </div>
        <div class="comment-2">
            <img src="{{asset('front_template/img/Group 88.png')}}">
        </div>
    </div>
</section>
<section class="section-7">
    <div class="our-clients">
        <p>our clinents</p>
        <h1>clients who trust us</h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide comments-5">
                <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1"></div>
              <div class="swiper-slide ">
                <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1"></div>
              <div class="swiper-slide">
                <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1"></div>
              <div class="swiper-slide ">
                <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1"></div>
              <div class="swiper-slide">
                <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1"></div>
              <div class="swiper-slide">
                <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1"></div>
              <div class="swiper-slide">
                <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1">
              </div>
              <div class="swiper-slide">
                <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1"></div>
              <div class="swiper-slide">
                <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1"></div>
            </div>
            <div class="swiper-button-next "></div>
            <div class="swiper-button-prev " ></div>
          </div>
        <!--
    </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1 d-block w-100">
                    <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1 d-block w-100">
                    <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1 d-block w-100">
                    <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1 d-block w-100">
                    <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1 d-block w-100">
                    <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1 d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1 d-block w-100">
                    <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1 d-block w-100">
                    <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1 d-block w-100">
                    <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1 d-block w-100">
                    <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1 d-block w-100">
                    <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1 d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
             </div>
            
            </div>
            <!--
            <div class="swiper-slide clients1">
                <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1">
            </div>
            <div class="swiper-slide clients1">
                <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1">
                <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1">
            </div>
           
        </div>
        <div class="swiper-button-prev prev-1 "></div>
        <div class="swiper-button-next next-1"></div>-->
        <!--
        <div class="swiper-wrapper clients-1">
          <div class="swiper-slide clients1">
            <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1">
            <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1">
            <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1">
            <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1">
            <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1">
            <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1">
        </div>
          <div class="swiper-slide  clients1">
            <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1">
            <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1">
            <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1">
            <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1">
            <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1">
            <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1">
        </div>
        
          <div class="swiper-slide  clients1">
            <img src="{{asset('front_template/img/Telegram Desktop/UNFPA_logo-0١.png')}}" alt="" width="70px" class="side-1">
            <img src="{{asset('front_template/img/Telegram Desktop/yeastar_logo.png')}}" alt="" width="100px" class="side-1">
            <img src="{{asset('front_template/img/Telegram Desktop/logoc.png')}}" alt="" width="100px" class="side-1">
            <img src="{{asset('front_template/img/Telegram Desktop/خدمانتا.png')}}" alt="" width="100px" class="side-1">
            <img src="{{asset('front_template/img/Telegram Desktop/aden-bank-1638963322-641.png')}}" alt="" width="60px" class="side-1">
            <img src="{{asset('front_template/img/Telegram Desktop/ICRC_logo_Red_Cross.png')}}" alt="" width="40px" class="side-1">
        </div>
     </div>
      
        <div class="swiper-button-prev prev-1 "></div>
        <div class="swiper-button-next next-1"></div>
      
      </div>  
    <div class="slider-3">
       <div class="slide-3">
        <input type="radio " name="slide" id="img1">
        <input type="radio " name="slide" id="img2">
        <input type="radio " name="slide" id="img3">

        <div class="side">
            <img src="{{asset('front_template/img/1.jpg')}}" alt="" width="100px" class="side-1">
            <img src="{{asset('front_template/img/2.png')}}" alt="" width="100px" class="side-1">
            <img src="{{asset('front_template/img/3.jpg')}}" alt="" width="100px" class="side-1">
            <img src="{{asset('front_template/img/4.jpg')}}" alt="" width="100px" class="side-1">
            <img src="{{asset('front_template/img/5.jpg')}}" alt="" width="100px" class="side-1">
            <img src="{{asset('front_template/img/6.png')}}" alt="" width="100px" class="side-1">
        </div>
        <div class="side-2">
            <img src="{{asset('front_template/img/7.jpg')}}" alt=""  width="100px" class="side-2">
            <img src="{{asset('front_template/img/8.jpg')}}" alt=""  width="100px" class="side-2">
            <img src="{{asset('front_template/img/9.jpg')}}" alt=""  width="100px" class="side-2">
            <img src="{{asset('front_template/img/10.jpg')}}" alt="" width="100px" class="side-2">
            <img src="{{asset('front_template/img/11.jpg')}}" alt="" width="100px" class="side-2">
            <img src="{{asset('front_template/img/12.jpg')}}" alt="" width="100px" class="side-2">
        </div>
        <div class="side-3">
            <img src="{{asset('front_template/img/13.jpg')}}" alt="" width="100px" class="side-3">
            <img src="{{asset('front_template/img/14.jpg')}}" alt="" width="100px" class="side-3">
            <img src="{{asset('front_template/img/15.jpg')}}" alt="" width="100px" class="side-3">
            <img src="{{asset('front_template/img/16.jpg')}}" alt="" width="100px" class="side-3">
            <img src="{{asset('front_template/img/17.jpg')}}" alt="" width="100px" class="side-3">
            <img src="{{asset('front_template/img/18.jpg')}}" alt="" width="100px" class="side-3">
        </div>
       </div>
       <div class="dot-1">
        <label for="img1"></label>
        <label for="img2"></label>
        <label for="img3"></label>
       </div>
    </div>-->

</section>

@endsection