<!DOCTYPE html>
<html lang="fa" style="scroll-behavior: smooth;">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('home/assets/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('home/assets/css/grid.css')}}" />
    <link rel="stylesheet" href="{{asset('home/assets/css/normalize.css')}}" />
    <link rel="stylesheet" href="{{asset('home/assets/css/responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('home/assets/css/swiper-bundle.min.css')}}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <title>وب سایت امین سرشار</title>
  </head>
  <body>
    @include('home.sections.header')

    <main class="main">
     @yield('content')
    </main>

    <div class="change-theme">
      <svg viewBox="0 0 24 24">
        <path
          fill="white"
          d="M12.3,4.9c0.4-0.2,0.6-0.7,0.5-1.1S12.2,3,11.7,3C6.8,3.1,3,7.1,3,12c0,5,4,9,9,9c3.8,0,7.1-2.4,8.4-5.9c0.2-0.4,0-0.9-0.4-1.2c-0.4-0.3-0.9-0.2-1.2,0.1c-1,0.9-2.3,1.4-3.7,1.4c-3.1,0-5.7-2.5-5.7-5.7C9.4,7.8,10.5,5.9,12.3,4.9zM15.1,17.4c0.5,0,1,0,1.4-0.1C15.3,18.4,13.7,19,12,19c-3.9,0-7-3.1-7-7c0-2.5,1.4-4.8,3.5-6c-0.7,1.1-1,2.4-1,3.8C7.4,14,10.9,17.4,15.1,17.4z"
        />
      </svg>
    </div>

    @include('home.sections.footer')

    <div class="cover"></div>
    <script src="{{asset('home/assets/js/script.js')}}"></script>
    <script src="{{asset('home/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script type="text/javascript">
      const swiperOptions = {
        pagination: {
          el: ".swiper-pagination",
        },
        spaceBetween: 40,
        breakpoints: {
          768: {
            slidesPerView: 2,
          },
          1200: {
            slidesPerView: 3,
          },
        },
      };

      const swiper1 = new Swiper(".swiper1", swiperOptions);

      const swiper2 = new Swiper(".swiper2", swiperOptions);

      const swiper3 = new Swiper(".swiper3", swiperOptions);
    </script>
  </body>
</html>
