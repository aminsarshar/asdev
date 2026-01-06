<!DOCTYPE html>
<html lang="fa">
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
      <section class="home">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-lg-6">
              <div
                class="home__content"
                data-aos="fade-left"
                data-aos-duration="750"
              >
                <h3 class="home__name">سلام <span>امین سرشار</span> هستم</h3>
                <h2 class="home__title">طراح و برنامه نویس وب</h2>
                <p class="home__caption">
                  فریلنسر حوزه طراحی وب /طراح وب/ دیزاینر وب
                </p>
                <div class="home__links-wrapper">
                  <a href="#" class="app-btn home__link">ارتباط با من</a>
                  <a href="#" class="app-btn app-btn--orange home__link"
                    >دیدن رزومه</a
                  >
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div
                class="home__photo"
                data-aos="fade-right"
                data-aos-duration="750"
              >
                <img src="/home/assets/images/head-photo.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="about-us">
        <div class="container">
          <div class="section-head">
            <h3 class="section-head__title">درباره من</h3>
            <p class="section-head__caption">من کی هستم؟</p>
            <span class="section-head__line"> </span>
          </div>
          <div class="about" data-aos="zoom-in" data-aos-duration="800">
            <div class="about__image">
              <img
                class="about__img"
                src="/home/assets/images/about-men.png"
                alt="aboutus"
              />
            </div>
            <div class="about__content">
              <h4 class="about__title">من کی هستم</h4>
              <p class="about__description">
                من امین سرشار هستم، طراح و توسعه‌دهنده وب با تمرکز روی ساخت
                وب‌سایت‌های سریع، تمیز و کاربردی.
              <p class="about__description">
                 تخصص من طراحی و توسعه وب‌سایت
                با استفاده از WordPress، Laravel، PHP و JavaScript هست و سعی
                می‌کنم در هر پروژه، علاوه بر ظاهر زیبا، روی عملکرد، تجربه کاربری
                و هدف کسب‌وکار هم تمرکز داشته باشم.
              </p>
              <p class="about__description">
                در حال حاضر دانشجوی کارشناسی
                مهندسی صنایع هستم و این موضوع به من کمک کرده تا طراحی سایت رو
                فقط از دید فنی نبینم، بلکه با نگاه سیستمی و حل مسئله به نیاز
                واقعی کاربران و کسب‌وکارها توجه کنم.
              </p>
              <!-- <h5 class="about__list-title">شرایط فعلی تکنولوژی مورد :</h5>
              <ul class="about-list">
                <li class="about-list__item">شرایط فعلی تکنولوژی</li>
                <li class="about-list__item">شرایط فعلی تکنولوژی</li>
                <li class="about-list__item">شرایط فعلی تکنولوژی</li>
                <li class="about-list__item">شرایط فعلی تکنولوژی</li>
                <li class="about-list__item">شرایط فعلی تکنولوژی</li>
              </ul><h5 class="about__list-title">شرایط فعلی تکنولوژی مورد :</h5>
              <ul class="about-list">
                <li class="about-list__item">شرایط فعلی تکنولوژی</li>
                <li class="about-list__item">شرایط فعلی تکنولوژی</li>
                <li class="about-list__item">شرایط فعلی تکنولوژی</li>
                <li class="about-list__item">شرایط فعلی تکنولوژی</li>
                <li class="about-list__item">شرایط فعلی تکنولوژی</li>
              </ul> -->
              <div class="about__links-wrapper">
                <a href="#" class="app-btn about__link">ارتباط با من</a>
                <a href="#" class="app-btn app-btn--orange about__link"
                  >دیدن رزومه</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="services">
        <div class="container">
          <div class="section-head">
            <h3 class="section-head__title">خدمات</h3>
            <p class="section-head__caption">چه خدماتی میتونیم ارائه بدیم؟</p>
            <span class="section-head__line"> </span>
          </div>
          <div class="row">
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="service service--purple">
                <svg
                  class="service__icon"
                  width="69.016"
                  height="64.973"
                  viewBox="0 0 69.016 64.973"
                >
                  <path
                    id="icon"
                    d="M614.281,2598.986a2.03,2.03,0,0,1,0-4.061h6.631l1.348-4.061h24.48l1.348,4.061h6.631a2.03,2.03,0,0,1,0,4.061Zm-8.222-12.182a6.086,6.086,0,0,1-6.066-6.091v-2.03h69.016v2.03a6.2,6.2,0,0,1-6.2,6.091Zm62.949-12.181H656.741v-6.091a2.028,2.028,0,0,0-2.021-2.03H651.6a18.2,18.2,0,0,0-.719-1.74l2.21-2.22a2.04,2.04,0,0,0,0-2.871l-5.719-5.742a2.015,2.015,0,0,0-2.859,0l-2.211,2.22a18.518,18.518,0,0,0-1.732-.724v-3.136a2.029,2.029,0,0,0-2.022-2.03h-8.087a2.028,2.028,0,0,0-2.022,2.03v3.136a18.5,18.5,0,0,0-1.732.724l-2.211-2.22a2.013,2.013,0,0,0-2.859,0l-5.719,5.742a2.04,2.04,0,0,0,0,2.871l2.21,2.22a18.325,18.325,0,0,0-.719,1.74h-3.124a2.029,2.029,0,0,0-2.022,2.03v6.091H599.992V2540.1a6.085,6.085,0,0,1,6.066-6.09h56.749a6.219,6.219,0,0,1,4.355,1.785,5.982,5.982,0,0,1,1.846,4.3v34.518h0ZM648.65,2548.23a6.07,6.07,0,1,0,6.07-6.09A6.087,6.087,0,0,0,648.65,2548.23Zm-4.307,26.391a10.113,10.113,0,1,0-19.687,0H616.3v-4.061H618.9a2.024,2.024,0,0,0,1.958-1.523,14.019,14.019,0,0,1,1.5-3.619,2.039,2.039,0,0,0-.311-2.467l-1.84-1.848,2.859-2.871,1.84,1.848a2.008,2.008,0,0,0,2.459.312,13.861,13.861,0,0,1,3.6-1.5,2.031,2.031,0,0,0,1.516-1.968v-2.6h4.044v2.6a2.032,2.032,0,0,0,1.516,1.968,13.854,13.854,0,0,1,3.6,1.5,2.007,2.007,0,0,0,2.459-.312l1.84-1.848,2.859,2.871-1.839,1.848a2.039,2.039,0,0,0-.311,2.467,13.984,13.984,0,0,1,1.5,3.619,2.026,2.026,0,0,0,1.959,1.523H652.7v4.061Zm-15.517,0a6.067,6.067,0,1,1,11.347,0Z"
                    transform="translate(-599.992 -2534.013)"
                    fill="#fff"
                  />
                </svg>
                <h4 class="service__title">طراحی سایت با وردپرس</h4>
                <p class="service__caption">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                  استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و
                  مجله در ستون و سطرآنچنان که لازم است
                </p>
                <svg
                  class="service__wave"
                  width="369.92"
                  viewBox="0 0 369.92 223.59"
                >
                  <path
                    id="shape"
                    d="M1249.08,2700.557s15.007-66.794,51.8-54.34,43.02,57.737,121.7,13.585,95.662-58.3,124.531-23.774S1619,2601.5,1619,2601.5v223.59H1249.08Z"
                    transform="translate(-1249.08 -2601.498)"
                    fill="#803afb"
                  />
                </svg>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
              <div class="service service--yellow">
                <svg
                  class="service__icon"
                  width="72.977"
                  height="64.991"
                  viewBox="0 0 72.977 64.991"
                >
                  <path
                    id="icon"
                    d="M660.989,2999H588.011v-46.615h42.336l15.233-18.375h15.408V2999Zm-26.882-18.669h0l3.489,6.324h4.891l-5.935-10.758,5.935-10.758H637.6l-3.49,6.325-3.49-6.325h-4.891l5.936,10.758-5.936,10.758h4.891l3.489-6.324Zm-28.479-15.118v13.411a7.911,7.911,0,1,0,15.821,0v-13.411h-4.276v13.411a3.635,3.635,0,1,1-7.269,0v-13.411Zm22.718-17.132H588.011v-14.072h52l-11.666,14.072h0Zm-13.066-9.271v4.331h4.28v-4.331Zm-9.19,0v4.331h4.28v-4.331Zm-9.19,0v4.331h4.28v-4.331Z"
                    transform="translate(-588.011 -2934.009)"
                    fill="#fff"
                  />
                </svg>

                <h4 class="service__title">طراحی سایت با کد نویسی</h4>
                <p class="service__caption">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                  استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و
                  مجله در ستون و سطرآنچنان که لازم است
                </p>
                <svg
                  class="service__wave"
                  width="369.92"
                  viewBox="0 0 369.92 223.59"
                >
                  <path
                    id="shape"
                    d="M1249.08,2700.557s15.007-66.794,51.8-54.34,43.02,57.737,121.7,13.585,95.662-58.3,124.531-23.774S1619,2601.5,1619,2601.5v223.59H1249.08Z"
                    transform="translate(-1249.08 -2601.498)"
                    fill="#FFBB01"
                  />
                </svg>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
              <div class="service service--pink">
                <svg
                  class="service__icon"
                  width="64.999"
                  height="65"
                  viewBox="0 0 64.999 65"
                >
                  <path
                    id="icon"
                    d="M1403.9,2999a1.9,1.9,0,1,1,0-3.809h2.031v-21.2a1.9,1.9,0,0,1,1.9-1.9h7.618a1.9,1.9,0,0,1,1.9,1.9v21.2h3.809v-13.584a1.9,1.9,0,0,1,1.9-1.9h7.617a1.9,1.9,0,0,1,1.9,1.9v13.584h3.808v-28.817a1.9,1.9,0,0,1,1.9-1.9h7.618a1.9,1.9,0,0,1,1.9,1.9v28.817h3.809v-40.243a1.9,1.9,0,0,1,1.9-1.9h7.618a1.9,1.9,0,0,1,1.9,1.9v40.243h2.031a1.9,1.9,0,0,1,0,3.809Zm17.266-32.626a5.677,5.677,0,0,1,.069-.693l-5.637-2.818a5.7,5.7,0,1,1,1.759-4.107,5.493,5.493,0,0,1-.07.692l5.637,2.818a5.612,5.612,0,0,1,6.4-1.033l7.647-7.646a5.65,5.65,0,0,1-.573-2.448,5.706,5.706,0,0,1,8.876-4.752l6.644-4.982a5.63,5.63,0,0,1-.285-1.692,5.724,5.724,0,1,1,2.551,4.752l-6.644,4.981a5.642,5.642,0,0,1,.285,1.692,5.719,5.719,0,0,1-5.713,5.713,5.636,5.636,0,0,1-2.447-.573l-7.647,7.647a5.651,5.651,0,0,1,.573,2.448,5.713,5.713,0,0,1-11.425,0Z"
                    transform="translate(-1402 -2933.999)"
                    fill="#fff"
                  />
                </svg>

                <h4 class="service__title">طراحی ui ux سایت</h4>
                <p class="service__caption">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                  استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و
                  مجله در ستون و سطرآنچنان که لازم است
                </p>
                <svg
                  class="service__wave"
                  width="369.92"
                  viewBox="0 0 369.92 223.59"
                >
                  <path
                    id="shape"
                    d="M1249.08,2700.557s15.007-66.794,51.8-54.34,43.02,57.737,121.7,13.585,95.662-58.3,124.531-23.774S1619,2601.5,1619,2601.5v223.59H1249.08Z"
                    transform="translate(-1249.08 -2601.498)"
                    fill="#F5276C"
                  />
                </svg>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
              <div class="service service--orange">
                <svg
                  class="service__icon"
                  width="64.99"
                  height="64.99"
                  viewBox="0 0 64.99 64.99"
                >
                  <path
                    id="icon"
                    d="M1039.946,2998.994h-33.616v-1.12a3.365,3.365,0,0,1,3.362-3.362h26.892a3.366,3.366,0,0,1,3.362,3.362v1.119Zm-8.277-6.724h-17.061l1.494-4.482h14.073l1.494,4.481Zm18.362-6.722H996.246a2.244,2.244,0,0,1-2.241-2.242v-40.338a2.244,2.244,0,0,1,2.241-2.241H1020.9v4.482h-20.169a2.244,2.244,0,0,0-2.241,2.241v29.133a2.244,2.244,0,0,0,2.241,2.241h44.82a2.244,2.244,0,0,0,2.242-2.241v-8.963h4.482v15.686A2.244,2.244,0,0,1,1050.031,2985.549Zm-11.2-4.479v2.24h2.24v-2.24Zm-4.489,0v2.24h2.239v-2.24Zm-4.48,0v2.24h2.24v-2.24Zm15.688-4.486h-44.82v-29.133H1020.9v16.807a3.366,3.366,0,0,0,3.362,3.362h21.289v8.962Zm-4.478-4.484v2.24h2.24v-2.24Zm-38.1,0v2.24h35.86v-2.24Zm2.24-11.2v6.724h13.446v-11.206h-4.482v-6.722h-11.205v11.2Zm52.664,4.482h-33.616a1.122,1.122,0,0,1-1.121-1.121v-5.6h35.857v5.6A1.122,1.122,0,0,1,1057.874,2965.379Zm-30.254-4.479v2.24h26.89v-2.24Zm-11.2,4.479h-8.964V2960.9h6.723v-2.241h2.241v6.722Zm-4.485-6.729h-6.72v-6.72h6.72v6.719Zm47.065-2.236h-35.857v-21.29a1.122,1.122,0,0,1,1.121-1.12h33.616a1.122,1.122,0,0,1,1.12,1.12v21.289Zm-24.652-19.74h0v17.072l17.073-8.537-17.073-8.535Z"
                    transform="translate(-994.005 -2934.005)"
                    fill="#fff"
                  />
                </svg>

                <h4 class="service__title">انجام خدمات سئو</h4>
                <p class="service__caption">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                  استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و
                  مجله در ستون و سطرآنچنان که لازم است
                </p>
                <svg
                  class="service__wave"
                  width="369.92"
                  viewBox="0 0 369.92 223.59"
                >
                  <path
                    id="shape"
                    d="M1249.08,2700.557s15.007-66.794,51.8-54.34,43.02,57.737,121.7,13.585,95.662-58.3,124.531-23.774S1619,2601.5,1619,2601.5v223.59H1249.08Z"
                    transform="translate(-1249.08 -2601.498)"
                    fill="#FF5823"
                  />
                </svg>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
              <div class="service service--blue">
                <svg
                  class="service__icon"
                  width="72.005"
                  height="65"
                  viewBox="0 0 72.005 65"
                >
                  <path
                    id="icon"
                    d="M1027.482,2597.817l-26-11.228c-2.222-.96-3.5-2.452-3.5-4.089s1.274-3.128,3.5-4.089l4.126-1.782,19.9,8.6a23.472,23.472,0,0,0,16.961,0l19.9-8.595,4.127,1.782c2.222.96,3.5,2.451,3.5,4.089s-1.274,3.128-3.5,4.089l-26,11.228a18.5,18.5,0,0,1-13.016,0Zm0-16-26-11.228c-2.222-.96-3.5-2.45-3.5-4.089s1.274-3.128,3.5-4.089l4.127-1.782,19.9,8.6a23.44,23.44,0,0,0,16.96,0l19.9-8.6,4.127,1.782c2.221.96,3.5,2.45,3.5,4.089s-1.274,3.128-3.5,4.089l-26,11.228a18.5,18.5,0,0,1-13.016,0Zm0-16-26-11.228c-2.222-.96-3.5-2.45-3.5-4.088s1.274-3.129,3.5-4.09l26-11.228a18.461,18.461,0,0,1,13.017,0l26,11.228c2.222.96,3.5,2.451,3.5,4.09s-1.275,3.127-3.5,4.088l-26,11.228a18.459,18.459,0,0,1-13.016,0Z"
                    transform="translate(-997.988 -2533.999)"
                    fill="#fff"
                  />
                </svg>

                <h4 class="service__title">بهبود سرعت سایت</h4>
                <p class="service__caption">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                  استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و
                  مجله در ستون و سطرآنچنان که لازم است
                </p>
                <svg
                  class="service__wave"
                  width="369.92"
                  viewBox="0 0 369.92 223.59"
                >
                  <path
                    id="shape"
                    d="M1249.08,2700.557s15.007-66.794,51.8-54.34,43.02,57.737,121.7,13.585,95.662-58.3,124.531-23.774S1619,2601.5,1619,2601.5v223.59H1249.08Z"
                    transform="translate(-1249.08 -2601.498)"
                    fill="#03ACF8"
                  />
                </svg>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
              <div class="service service--green">
                <svg
                  class="service__icon"
                  width="64.99"
                  height="64.99"
                  viewBox="0 0 64.99 64.99"
                >
                  <path
                    id="icon"
                    d="M1039.946,2998.994h-33.616v-1.12a3.365,3.365,0,0,1,3.362-3.362h26.892a3.366,3.366,0,0,1,3.362,3.362v1.119Zm-8.277-6.724h-17.061l1.494-4.482h14.073l1.494,4.481Zm18.362-6.722H996.246a2.244,2.244,0,0,1-2.241-2.242v-40.338a2.244,2.244,0,0,1,2.241-2.241H1020.9v4.482h-20.169a2.244,2.244,0,0,0-2.241,2.241v29.133a2.244,2.244,0,0,0,2.241,2.241h44.82a2.244,2.244,0,0,0,2.242-2.241v-8.963h4.482v15.686A2.244,2.244,0,0,1,1050.031,2985.549Zm-11.2-4.479v2.24h2.24v-2.24Zm-4.489,0v2.24h2.239v-2.24Zm-4.48,0v2.24h2.24v-2.24Zm15.688-4.486h-44.82v-29.133H1020.9v16.807a3.366,3.366,0,0,0,3.362,3.362h21.289v8.962Zm-4.478-4.484v2.24h2.24v-2.24Zm-38.1,0v2.24h35.86v-2.24Zm2.24-11.2v6.724h13.446v-11.206h-4.482v-6.722h-11.205v11.2Zm52.664,4.482h-33.616a1.122,1.122,0,0,1-1.121-1.121v-5.6h35.857v5.6A1.122,1.122,0,0,1,1057.874,2965.379Zm-30.254-4.479v2.24h26.89v-2.24Zm-11.2,4.479h-8.964V2960.9h6.723v-2.241h2.241v6.722Zm-4.485-6.729h-6.72v-6.72h6.72v6.719Zm47.065-2.236h-35.857v-21.29a1.122,1.122,0,0,1,1.121-1.12h33.616a1.122,1.122,0,0,1,1.12,1.12v21.289Zm-24.652-19.74h0v17.072l17.073-8.537-17.073-8.535Z"
                    transform="translate(-994.005 -2934.005)"
                    fill="#fff"
                  />
                </svg>

                <h4 class="service__title">طراحی بنر سایت</h4>
                <p class="service__caption">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                  استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و
                  مجله در ستون و سطرآنچنان که لازم است
                </p>
                <svg
                  class="service__wave"
                  width="369.92"
                  viewBox="0 0 369.92 223.59"
                >
                  <path
                    id="shape"
                    d="M1249.08,2700.557s15.007-66.794,51.8-54.34,43.02,57.737,121.7,13.585,95.662-58.3,124.531-23.774S1619,2601.5,1619,2601.5v223.59H1249.08Z"
                    transform="translate(-1249.08 -2601.498)"
                    fill="#49B846"
                  />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="resume">
        <div class="container skew-reset">
          <div class="section-head">
            <h3 class="section-head__title">رزومه من</h3>
            <p class="section-head__caption">چه خدماتی میتونیم ارائه بدیم؟</p>
            <span class="section-head__line"> </span>
          </div>
          <div class="row">
            <div class="col-12 col-lg-4">
              <ul class="resume-list h-100">
                <li
                  class="resume-list__item resume-list__item--active"
                  data-content-id="#education"
                >
                  <svg
                    class="resume-list__icon"
                    width="22"
                    height="21.999"
                    viewBox="0 0 22 21.999"
                  >
                    <path
                      id="Icon_awesome-user-graduate"
                      data-name="Icon awesome-user-graduate"
                      d="M463.357,3794a2.225,2.225,0,0,1-2.357-2.062v-.412c0-3.1,2.8-5.615,6.315-5.748l4.685,4.1,4.686-4.1c3.511.133,6.315,2.646,6.315,5.748v.412a2.225,2.225,0,0,1-2.358,2.062Zm2.358-15.124a4.918,4.918,0,0,1,.687-2.449l-3.241-.683V3778a.935.935,0,0,1,.045,1.718l.766,2.677a.45.45,0,0,1-.373.6h-2.053a.451.451,0,0,1-.373-.6l.766-2.677a.934.934,0,0,1,.044-1.718v-2.51l-.314-.064c-.888-.189-.888-1.169,0-1.358l9.36-1.973a4.839,4.839,0,0,1,1.95,0l9.349,1.977c.894.189.894,1.165,0,1.354l-4.728,1a4.87,4.87,0,0,1,.687,2.449c0,3.038-2.814,5.5-6.286,5.5S465.714,3781.912,465.714,3778.875Z"
                      transform="translate(-461 -3772)"
                      fill="#fff"
                    />
                  </svg>
                  <span class="resume-list__text">تحصیلات</span>
                </li>
                <li class="resume-list__item" data-content-id="#work-history">
                  <svg
                    class="resume-list__icon"
                    width="22"
                    height="21.999"
                    viewBox="0 0 22 21.999"
                  >
                    <path
                      id="history_icon"
                      d="M472.008,3859H472a11.03,11.03,0,0,1-6.9-2.435,1.064,1.064,0,0,1-.081-1.58l.5-.5a1.067,1.067,0,0,1,.76-.316,1.042,1.042,0,0,1,.655.228A8.079,8.079,0,0,0,472,3856.16a8.161,8.161,0,1,0-5.592-14.108l2.251,2.252a.71.71,0,0,1-.5,1.211h-6.448a.71.71,0,0,1-.709-.71v-6.448a.708.708,0,0,1,1.211-.5l2.191,2.19A10.995,10.995,0,1,1,472.008,3859Zm2.126-7.115a1.06,1.06,0,0,1-.653-.224l-2.9-2.257v-6.017a1.065,1.065,0,0,1,1.064-1.064h.71a1.065,1.065,0,0,1,1.064,1.064v4.628l1.805,1.4a1.067,1.067,0,0,1,.187,1.495l-.436.56A1.06,1.06,0,0,1,474.134,3851.884Z"
                      transform="translate(-461 -3837)"
                      fill="#fff"
                    />
                  </svg>
                  <span class="resume-list__text">سابقه کار</span>
                </li>
                <li
                  class="resume-list__item"
                  data-content-id="#programming-skill"
                >
                  <svg
                    class="resume-list__icon"
                    width="24.126"
                    height="19.301"
                    viewBox="0 0 24.126 19.301"
                  >
                    <path
                      id="Icon_awesome-laptop-code"
                      data-name="Icon awesome-laptop-code"
                      d="M480.713,3922.65h-19.3a2.416,2.416,0,0,1-2.413-2.413v-.6a.6.6,0,0,1,.6-.6h9.018a1.2,1.2,0,0,0,.366.824,1.22,1.22,0,0,0,.869.382h2.292a1.185,1.185,0,0,0,1.234-1.206h9.14a.6.6,0,0,1,.6.6v.6A2.416,2.416,0,0,1,480.713,3922.65Zm0-4.826h-19.3v-12.666a1.812,1.812,0,0,1,1.809-1.81H478.9a1.812,1.812,0,0,1,1.81,1.81v12.665Zm-16.893-12.065v9.65H478.3v-9.65Zm9.265,7.63a.6.6,0,0,1-.427-.177l-.426-.426a.606.606,0,0,1,0-.854l1.346-1.346-1.346-1.347a.6.6,0,0,1,0-.853l.426-.427a.6.6,0,0,1,.854,0l2.2,2.2a.606.606,0,0,1,0,.854l-2.2,2.2A.6.6,0,0,1,473.086,3913.389Zm-4.046,0a.6.6,0,0,1-.426-.177l-2.2-2.2a.6.6,0,0,1,0-.854l2.2-2.2a.6.6,0,0,1,.854,0l.426.426a.605.605,0,0,1,0,.854l-1.346,1.347,1.346,1.346a.6.6,0,0,1,0,.854l-.426.426A.6.6,0,0,1,469.04,3913.389Z"
                      transform="translate(-458.999 -3903.348)"
                      fill="#fff"
                    />
                  </svg>
                  <span class="resume-list__text">مهارت های برنامه نویسی</span>
                </li>
                <li
                  class="resume-list__item"
                  data-content-id="#designer-skills"
                >
                  <svg
                    class="resume-list__icon"
                    width="23.303"
                    height="18.448"
                    viewBox="0 0 23.303 18.448"
                  >
                    <path
                      id="Icon_map-art-gallery"
                      data-name="Icon map-art-gallery"
                      d="M471.651,3986.223a4.2,4.2,0,0,1-4.293-4.3c0-1.747-1.066-2.459-3.68-2.459a3.386,3.386,0,0,1-2.76-1.23,4.874,4.874,0,0,1-.92-3.074,7.158,7.158,0,0,1,2.606-4.613,10.661,10.661,0,0,1,7.206-2.767c4.028,0,7.225.724,9.5,2.153a8.471,8.471,0,0,1,3.986,7.687,7.666,7.666,0,0,1-2.836,5.918C478.377,3985.292,475.329,3986.223,471.651,3986.223Zm0-6.148a1.844,1.844,0,1,0,1.839,1.845A1.829,1.829,0,0,0,471.651,3980.074Zm-7.665-6.149a1.535,1.535,0,1,0,1.084.451A1.525,1.525,0,0,0,463.986,3973.925Zm14.1-1.231a1.536,1.536,0,1,0,1.085.451A1.537,1.537,0,0,0,478.09,3972.694Zm-4.906-2.459a1.538,1.538,0,0,0-1.533,1.538,1.532,1.532,0,1,0,1.533-1.538Zm-4.905,0a1.537,1.537,0,1,0,1.533,1.538A1.525,1.525,0,0,0,468.279,3970.235Z"
                      transform="translate(-460 -3967.775)"
                      fill="#fff"
                    />
                  </svg>
                  <span class="resume-list__text">مهارت های طراحی</span>
                </li>
                <li class="resume-list__item" data-content-id="#seo-skills">
                  <svg
                    class="resume-list__icon"
                    width="18.888"
                    height="14.167"
                    viewBox="0 0 18.888 14.167"
                  >
                    <path
                      id="Icon_awesome-chart-bar"
                      data-name="Icon awesome-chart-bar"
                      d="M480.3,4048.128H463.18a1.182,1.182,0,0,1-1.181-1.181v-12.4a.591.591,0,0,1,.59-.59h1.181a.591.591,0,0,1,.59.59v11.215H480.3a.591.591,0,0,1,.59.59v1.18A.591.591,0,0,1,480.3,4048.128Zm-1.063-4.722h-1.416a.512.512,0,0,1-.472-.472v-8.5a.512.512,0,0,1,.472-.472h1.416a.512.512,0,0,1,.472.472v8.5A.512.512,0,0,1,479.235,4043.406Zm-3.542,0h-1.416a.512.512,0,0,1-.472-.472v-4.958a.5.5,0,0,1,.472-.471h1.416a.5.5,0,0,1,.472.471v4.958A.512.512,0,0,1,475.694,4043.406Zm-3.542,0h-1.416a.512.512,0,0,1-.472-.472v-7.319a.5.5,0,0,1,.472-.472h1.416a.5.5,0,0,1,.472.472v7.319A.512.512,0,0,1,472.152,4043.406Zm-3.542,0h-1.416a.512.512,0,0,1-.472-.472v-2.6a.512.512,0,0,1,.472-.472h1.416a.5.5,0,0,1,.472.472v2.6A.512.512,0,0,1,468.61,4043.406Z"
                      transform="translate(-462 -4033.962)"
                      fill="#fff"
                    />
                  </svg>
                  <span class="resume-list__text">مهارت های سئو</span>
                </li>
              </ul>
            </div>
            <div class="col-12 col-lg-8">
              <div class="resume-content resume-content--show" id="education">
                <div class="resume-content__item">
                  <div class="resume-content__head">
                    <h5 class="resume-content__title">تحصیلات</h5>
                    <span class="resume-content__date">2020-2022</span>
                  </div>
                  <h6 class="resume-content__subtitle">
                    دانش آموز رشته ریاضی پایه یازدهم
                  </h6>
                  <p class="resume-content__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
                <div class="resume-content__item">
                  <div class="resume-content__head">
                    <h5 class="resume-content__title">تحصیلات</h5>
                    <span class="resume-content__date">2020-2022</span>
                  </div>
                  <h6 class="resume-content__subtitle">
                    دانش آموز رشته ریاضی پایه یازدهم
                  </h6>
                  <p class="resume-content__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
                <div class="resume-content__item">
                  <div class="resume-content__head">
                    <h5 class="resume-content__title">تحصیلات</h5>
                    <span class="resume-content__date">2020-2022</span>
                  </div>
                  <h6 class="resume-content__subtitle">
                    دانش آموز رشته ریاضی پایه یازدهم
                  </h6>
                  <p class="resume-content__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
              </div>
              <div class="resume-content" id="work-history">
                <div class="resume-content__item">
                  <div class="resume-content__head">
                    <h5 class="resume-content__title">سابقه کار</h5>
                    <span class="resume-content__date">2019-2024</span>
                  </div>
                  <h6 class="resume-content__subtitle">
                    دانش آموز رشته ریاضی پایه یازدهم
                  </h6>
                  <p class="resume-content__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    و مجله در ستون و سطرآنچنان که لازم است و مجله در ستون و
                    سطرآنچنان که لازم است
                  </p>
                </div>
                <div class="resume-content__item">
                  <div class="resume-content__head">
                    <h5 class="resume-content__title">سابقه کار</h5>
                    <span class="resume-content__date">2020-2022</span>
                  </div>
                  <h6 class="resume-content__subtitle">
                    دانش آموز رشته ریاضی پایه یازدهم
                  </h6>
                  <p class="resume-content__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    و مجله در ستون و سطرآنچنان که لازم است و مجله در ستون و
                    سطرآنچنان که لازم است
                  </p>
                </div>
                <div class="resume-content__item">
                  <div class="resume-content__head">
                    <h5 class="resume-content__title">سابقه کار</h5>
                    <span class="resume-content__date">2020-2022</span>
                  </div>
                  <h6 class="resume-content__subtitle">
                    دانش آموز رشته ریاضی پایه یازدهم
                  </h6>
                  <p class="resume-content__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    و مجله در ستون و سطرآنچنان که لازم است و مجله در ستون و
                    سطرآنچنان که لازم است
                  </p>
                </div>
              </div>
              <div class="resume-content" id="programming-skill">
                <div class="resume-content__item">
                  <div class="resume-content__head">
                    <h5 class="resume-content__title">تحصیلات</h5>
                    <span class="resume-content__date">2020-2022</span>
                  </div>
                  <h6 class="resume-content__subtitle">
                    دانش آموز رشته ریاضی پایه یازدهم
                  </h6>
                  <p class="resume-content__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
                <div class="resume-content__item">
                  <div class="resume-content__head">
                    <h5 class="resume-content__title">تحصیلات</h5>
                    <span class="resume-content__date">2020-2022</span>
                  </div>
                  <h6 class="resume-content__subtitle">
                    دانش آموز رشته ریاضی پایه یازدهم
                  </h6>
                  <p class="resume-content__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
                <div class="resume-content__item">
                  <div class="resume-content__head">
                    <h5 class="resume-content__title">تحصیلات</h5>
                    <span class="resume-content__date">2020-2022</span>
                  </div>
                  <h6 class="resume-content__subtitle">
                    دانش آموز رشته ریاضی پایه یازدهم
                  </h6>
                  <p class="resume-content__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
              </div>
              <div class="resume-content" id="designer-skills">
                <div class="resume-content__item">
                  <div class="resume-content__head">
                    <h5 class="resume-content__title">تحصیلات</h5>
                    <span class="resume-content__date">2020-2022</span>
                  </div>
                  <h6 class="resume-content__subtitle">
                    دانش آموز رشته ریاضی پایه یازدهم
                  </h6>
                  <p class="resume-content__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
                <div class="resume-content__item">
                  <div class="resume-content__head">
                    <h5 class="resume-content__title">تحصیلات</h5>
                    <span class="resume-content__date">2020-2022</span>
                  </div>
                  <h6 class="resume-content__subtitle">
                    دانش آموز رشته ریاضی پایه یازدهم
                  </h6>
                  <p class="resume-content__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
                <div class="resume-content__item">
                  <div class="resume-content__head">
                    <h5 class="resume-content__title">تحصیلات</h5>
                    <span class="resume-content__date">2020-2022</span>
                  </div>
                  <h6 class="resume-content__subtitle">
                    دانش آموز رشته ریاضی پایه یازدهم
                  </h6>
                  <p class="resume-content__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
              </div>
              <div class="resume-content" id="seo-skills">
                <div class="resume-content__item">
                  <div class="resume-content__head">
                    <h5 class="resume-content__title">تحصیلات</h5>
                    <span class="resume-content__date">2020-2022</span>
                  </div>
                  <h6 class="resume-content__subtitle">
                    دانش آموز رشته ریاضی پایه یازدهم
                  </h6>
                  <p class="resume-content__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
                <div class="resume-content__item">
                  <div class="resume-content__head">
                    <h5 class="resume-content__title">تحصیلات</h5>
                    <span class="resume-content__date">2020-2022</span>
                  </div>
                  <h6 class="resume-content__subtitle">
                    دانش آموز رشته ریاضی پایه یازدهم
                  </h6>
                  <p class="resume-content__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
                <div class="resume-content__item">
                  <div class="resume-content__head">
                    <h5 class="resume-content__title">تحصیلات</h5>
                    <span class="resume-content__date">2020-2022</span>
                  </div>
                  <h6 class="resume-content__subtitle">
                    دانش آموز رشته ریاضی پایه یازدهم
                  </h6>
                  <p class="resume-content__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="portfolio">
        <div class="container">
          <div class="section-head">
            <h3 class="section-head__title">نمونه کارهای من</h3>
            <p class="section-head__caption">چه خدماتی ارائه دادیم؟</p>
            <span class="section-head__line"></span>
          </div>
          <ul class="portfolio-list">
            <li
              class="portfolio-list__item portfolio-list__item--active"
              data-content-id="#all-work"
            >
              همه نمونه کارها
            </li>
            <li class="portfolio-list__item" data-content-id="#wp-work">
              سایت وردپرسی
            </li>
            <li class="portfolio-list__item" data-content-id="#code-work">
              سایت با کد نویسی اختصاصی
            </li>
            <li class="portfolio-list__item">سئو</li>
            <li class="portfolio-list__item">طراحی ul ux</li>
            <li class="portfolio-list__item">طراحی بنر سایت</li>
            <!-- <li class="portfolio-list__item"></li> -->
          </ul>

          <div class="portfolio-content portfolio-content--show" id="all-work">
            <div class="swiper1">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#">
                    <img
                      src="/home/assets/images/portfolio-1.jpg"
                      class="portfolio-content__img"
                      alt="Portfolio Image"
                    />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#">
                    <img
                      src="/home/assets/images/portfolio-2.jpg"
                      class="portfolio-content__img"
                      alt="Portfolio Image"
                    />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#">
                    <img
                      src="/home/assets/images/portfolio-3.jpg"
                      class="portfolio-content__img"
                      alt="Portfolio Image"
                    />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#">
                    <img
                      src="/home/assets/images/portfolio-1.jpg"
                      class="portfolio-content__img"
                      alt="Portfolio Image"
                    />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#">
                    <img
                      src="/home/assets/images/portfolio-2.jpg"
                      class="portfolio-content__img"
                      alt="Portfolio Image"
                    />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#">
                    <img
                      src="/home/assets/images/portfolio-3.jpg"
                      class="portfolio-content__img"
                      alt="Portfolio Image"
                    />
                  </a>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="portfolio-content" id="wp-work">
            <div class="swiper2">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#">
                    <img
                      src="/home/assets/images/portfolio-2.jpg"
                      class="portfolio-content__img"
                      alt="Portfolio Image"
                    />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#">
                    <img
                      src="/home/assets/images/portfolio-3.jpg"
                      class="portfolio-content__img"
                      alt="Portfolio Image"
                    />
                  </a>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="portfolio-content" id="code-work">
            <div class="swiper3">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#">
                    <img
                      src="/home/assets/images/portfolio-3.jpg"
                      class="portfolio-content__img"
                      alt="Portfolio Image"
                    />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#">
                    <img
                      src="/home/assets/images/portfolio-3.jpg"
                      class="portfolio-content__img"
                      alt="Portfolio Image"
                    />
                  </a>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </section>

      <section class="pricing">
        <div class="container skew-reset">
          <div class="section-head">
            <h3 class="section-head__title">تعرفه ها</h3>
            <p class="section-head__caption">تعرفه هامون چجوریه؟</p>
            <span class="section-head__line"></span>
          </div>
          <div class="row">
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="package">
                <div class="package__head package__head--orange">
                  <h4 class="package__type">پایه</h4>
                  <span class="package__price"
                    >13,000,000
                    <svg
                      class="mr-1"
                      width="14"
                      height="16"
                      viewBox="0 0 14 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        class="text-gray-880 dark:text-white"
                        d="M1.14878 6.91843C1.44428 6.91843 1.70285 6.87142 1.92447 6.77739C2.15282 6.68337 2.34422 6.55577 2.49869 6.39458C2.65316 6.2334 2.77069 6.04535 2.85128 5.83044C2.93187 5.62224 2.97888 5.40062 2.99231 5.16556H1.98492C1.6424 5.16556 1.36033 5.12862 1.1387 5.05474C0.917077 4.98087 0.742461 4.87341 0.614858 4.73238C0.487254 4.59134 0.396588 4.42344 0.34286 4.22868C0.295849 4.0272 0.272343 3.80221 0.272343 3.55372C0.272343 3.29852 0.309281 3.05674 0.383156 2.8284C0.457032 2.60005 0.564488 2.39857 0.705523 2.22396C0.846559 2.04934 1.02117 1.91167 1.22937 1.81093C1.44428 1.70347 1.68941 1.64974 1.96477 1.64974C2.1864 1.64974 2.39795 1.68668 2.59943 1.76056C2.80091 1.83443 2.97888 1.95196 3.13335 2.11315C3.28782 2.26761 3.40871 2.47245 3.49601 2.72766C3.59004 2.97615 3.63705 3.27837 3.63705 3.63431V4.47045H4.60415C4.68474 4.47045 4.73847 4.50068 4.76533 4.56112C4.79891 4.61485 4.8157 4.6988 4.8157 4.81297C4.8157 4.93386 4.79891 5.02452 4.76533 5.08497C4.73847 5.13869 4.68474 5.16556 4.60415 5.16556H3.6169C3.60347 5.49464 3.53631 5.80693 3.41542 6.10244C3.30125 6.39794 3.14007 6.65651 2.93187 6.87813C2.72368 7.09976 2.47518 7.27438 2.1864 7.40198C1.89761 7.5363 1.57188 7.60346 1.20922 7.60346H0.141381L0.0809373 6.91843H1.14878ZM0.896929 3.51343C0.896929 3.68133 0.913719 3.82572 0.947299 3.94661C0.987594 4.0675 1.0514 4.16823 1.1387 4.24883C1.23273 4.3227 1.35697 4.37979 1.51144 4.42008C1.66591 4.45366 1.86067 4.47045 2.09573 4.47045H3.00239V3.71491C3.00239 3.21792 2.90501 2.86198 2.71024 2.64707C2.51548 2.43215 2.24684 2.3247 1.90433 2.3247C1.58196 2.3247 1.33347 2.43215 1.15885 2.64707C0.984237 2.86198 0.896929 3.15076 0.896929 3.51343ZM6.26895 4.47045C6.35626 4.47045 6.41335 4.50068 6.44021 4.56112C6.47379 4.61485 6.49058 4.6988 6.49058 4.81297C6.49058 4.93386 6.47379 5.02452 6.44021 5.08497C6.41335 5.13869 6.35626 5.16556 6.26895 5.16556H4.60675C4.51944 5.16556 4.46235 5.13869 4.43549 5.08497C4.40191 5.03124 4.38512 4.94729 4.38512 4.83312C4.38512 4.71223 4.40191 4.62156 4.43549 4.56112C4.46235 4.50068 4.51944 4.47045 4.60675 4.47045H6.26895ZM7.93155 4.47045C8.01886 4.47045 8.07594 4.50068 8.10281 4.56112C8.13639 4.61485 8.15318 4.6988 8.15318 4.81297C8.15318 4.93386 8.13639 5.02452 8.10281 5.08497C8.07594 5.13869 8.01886 5.16556 7.93155 5.16556H6.26935C6.18204 5.16556 6.12495 5.13869 6.09809 5.08497C6.06451 5.03124 6.04772 4.94729 6.04772 4.83312C6.04772 4.71223 6.06451 4.62156 6.09809 4.56112C6.12495 4.50068 6.18204 4.47045 6.26935 4.47045H7.93155ZM9.59415 4.47045C9.68146 4.47045 9.73854 4.50068 9.76541 4.56112C9.79899 4.61485 9.81578 4.6988 9.81578 4.81297C9.81578 4.93386 9.79899 5.02452 9.76541 5.08497C9.73854 5.13869 9.68146 5.16556 9.59415 5.16556H7.93194C7.84464 5.16556 7.78755 5.13869 7.76069 5.08497C7.72711 5.03124 7.71032 4.94729 7.71032 4.83312C7.71032 4.71223 7.72711 4.62156 7.76069 4.56112C7.78755 4.50068 7.84464 4.47045 7.93194 4.47045H9.59415ZM11.2567 4.47045C11.3441 4.47045 11.4011 4.50068 11.428 4.56112C11.4616 4.61485 11.4784 4.6988 11.4784 4.81297C11.4784 4.93386 11.4616 5.02452 11.428 5.08497C11.4011 5.13869 11.3441 5.16556 11.2567 5.16556H9.59454C9.50723 5.16556 9.45015 5.13869 9.42328 5.08497C9.3897 5.03124 9.37291 4.94729 9.37291 4.83312C9.37291 4.71223 9.3897 4.62156 9.42328 4.56112C9.45015 4.50068 9.50723 4.47045 9.59454 4.47045H11.2567ZM12.1638 4.47045C12.4257 4.47045 12.6339 4.39994 12.7884 4.2589C12.9496 4.11787 13.0302 3.9231 13.0302 3.67461V2.2844H13.685V3.67461C13.685 4.15144 13.5506 4.52082 13.282 4.78275C13.0201 5.03795 12.6608 5.16556 12.2041 5.16556H11.2571C11.1698 5.16556 11.1127 5.13869 11.0859 5.08497C11.0523 5.03124 11.0355 4.94729 11.0355 4.83312C11.0355 4.71223 11.0523 4.62156 11.0859 4.56112C11.1127 4.50068 11.1698 4.47045 11.2571 4.47045H12.1638ZM13.7857 0.994934H12.9798V0.279683H13.7857V0.994934ZM12.5063 0.994934H11.7004V0.279683H12.5063V0.994934ZM5.64177 12.9641C5.64177 13.3267 5.58468 13.6659 5.47051 13.9815C5.35634 14.3039 5.1918 14.5826 4.97689 14.8177C4.76198 15.0595 4.50005 15.2509 4.19112 15.3919C3.8889 15.5329 3.54638 15.6035 3.16357 15.6035H2.56921C1.81702 15.6035 1.23273 15.3718 0.816337 14.9084C0.399946 14.445 0.191751 13.8103 0.191751 13.0044V11.2414H0.836485V12.9842C0.836485 13.273 0.870065 13.5349 0.937225 13.77C1.0111 14.0051 1.12191 14.2065 1.26967 14.3744C1.42413 14.549 1.61554 14.6834 1.84388 14.7774C2.07223 14.8714 2.34758 14.9184 2.66995 14.9184H3.1132C3.42885 14.9184 3.70421 14.8647 3.93927 14.7572C4.17433 14.6565 4.36909 14.5188 4.52356 14.3442C4.68474 14.1696 4.80227 13.9648 4.87615 13.7297C4.95674 13.4946 4.99703 13.2495 4.99703 12.9943V10.2844H5.64177V12.9641ZM3.21394 10.0628H2.36773V9.32738H3.21394V10.0628ZM8.24526 13.1656C8.07064 13.1656 7.90274 13.1421 7.74156 13.095C7.58038 13.0413 7.43598 12.954 7.30838 12.8331C7.18749 12.7122 7.09011 12.5544 7.01624 12.3596C6.94236 12.1582 6.90542 11.9097 6.90542 11.6142V6.9197H7.56023V11.4933C7.56023 11.7754 7.62067 12.0104 7.74156 12.1985C7.86916 12.3798 8.074 12.4705 8.35607 12.4705H8.52733C8.67508 12.4705 8.74896 12.5846 8.74896 12.813C8.74896 13.048 8.67508 13.1656 8.52733 13.1656H8.24526ZM8.69324 12.4705C8.95516 12.4705 9.15328 12.4067 9.2876 12.279C9.42192 12.1514 9.48908 11.9802 9.48908 11.7653V11.3825C9.48908 10.7982 9.63683 10.3415 9.93233 10.0124C10.2346 9.68332 10.6509 9.51878 11.1815 9.51878C11.4569 9.51878 11.6986 9.56243 11.9068 9.64974C12.115 9.73705 12.2863 9.8613 12.4206 10.0225C12.5616 10.1837 12.6657 10.3751 12.7329 10.5967C12.8001 10.8183 12.8336 11.0635 12.8336 11.3321C12.8336 11.9097 12.6825 12.3596 12.3803 12.682C12.0781 13.0044 11.6651 13.1656 11.1412 13.1656C10.8726 13.1656 10.614 13.1152 10.3655 13.0144C10.117 12.907 9.92226 12.7189 9.78123 12.4503C9.72078 12.6048 9.64691 12.729 9.5596 12.823C9.47229 12.9171 9.38162 12.9909 9.2876 13.0447C9.19358 13.0917 9.09284 13.1253 8.98538 13.1454C8.88464 13.1588 8.78726 13.1656 8.69324 13.1656H8.53205C8.44475 13.1656 8.38766 13.1387 8.3608 13.085C8.32722 13.0312 8.31043 12.9473 8.31043 12.8331C8.31043 12.7122 8.32722 12.6216 8.3608 12.5611C8.38766 12.5007 8.44475 12.4705 8.53205 12.4705H8.69324ZM12.1889 11.3925C12.1889 11.0433 12.1117 10.7612 11.9572 10.5463C11.8027 10.3247 11.5375 10.2139 11.1614 10.2139C10.4629 10.2139 10.1137 10.6202 10.1137 11.4328C10.1137 11.7754 10.2077 12.0339 10.3957 12.2085C10.5905 12.3831 10.839 12.4705 11.1412 12.4705C11.4837 12.4705 11.7423 12.3764 11.9169 12.1884C12.0982 12.0003 12.1889 11.7351 12.1889 11.3925Z"
                        fill="currentColor"
                      ></path></svg
                  ></span>
                  <span class="package__filter">مناسب برای آنلاین شاپ</span>
                </div>
                <div class="package__body">
                  <ul class="package-options">
                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      طراحی با وردپرس
                    </li>

                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      طراحی استاندارد و سئواولیه
                    </li>

                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      طراحی ui ux اختصاصی
                    </li>

                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      سیستم چت آنلاین برای فروشگاه ها
                    </li>

                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      پشتیبانی و ضمانت 6 ماهه
                    </li>

                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      تضمین سرعت بالای سایت
                    </li>
                  </ul>
                  <a href="#" class="package__link app-btn app-btn--orange"
                    >مشاهده</a
                  >
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
              <div class="package">
                <div class="package__head package__head--purple">
                  <h4 class="package__type">اقتصادی</h4>
                  <span class="package__price"
                    >13,000,000
                    <svg
                      class="mr-1"
                      width="14"
                      height="16"
                      viewBox="0 0 14 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        class="text-gray-880 dark:text-white"
                        d="M1.14878 6.91843C1.44428 6.91843 1.70285 6.87142 1.92447 6.77739C2.15282 6.68337 2.34422 6.55577 2.49869 6.39458C2.65316 6.2334 2.77069 6.04535 2.85128 5.83044C2.93187 5.62224 2.97888 5.40062 2.99231 5.16556H1.98492C1.6424 5.16556 1.36033 5.12862 1.1387 5.05474C0.917077 4.98087 0.742461 4.87341 0.614858 4.73238C0.487254 4.59134 0.396588 4.42344 0.34286 4.22868C0.295849 4.0272 0.272343 3.80221 0.272343 3.55372C0.272343 3.29852 0.309281 3.05674 0.383156 2.8284C0.457032 2.60005 0.564488 2.39857 0.705523 2.22396C0.846559 2.04934 1.02117 1.91167 1.22937 1.81093C1.44428 1.70347 1.68941 1.64974 1.96477 1.64974C2.1864 1.64974 2.39795 1.68668 2.59943 1.76056C2.80091 1.83443 2.97888 1.95196 3.13335 2.11315C3.28782 2.26761 3.40871 2.47245 3.49601 2.72766C3.59004 2.97615 3.63705 3.27837 3.63705 3.63431V4.47045H4.60415C4.68474 4.47045 4.73847 4.50068 4.76533 4.56112C4.79891 4.61485 4.8157 4.6988 4.8157 4.81297C4.8157 4.93386 4.79891 5.02452 4.76533 5.08497C4.73847 5.13869 4.68474 5.16556 4.60415 5.16556H3.6169C3.60347 5.49464 3.53631 5.80693 3.41542 6.10244C3.30125 6.39794 3.14007 6.65651 2.93187 6.87813C2.72368 7.09976 2.47518 7.27438 2.1864 7.40198C1.89761 7.5363 1.57188 7.60346 1.20922 7.60346H0.141381L0.0809373 6.91843H1.14878ZM0.896929 3.51343C0.896929 3.68133 0.913719 3.82572 0.947299 3.94661C0.987594 4.0675 1.0514 4.16823 1.1387 4.24883C1.23273 4.3227 1.35697 4.37979 1.51144 4.42008C1.66591 4.45366 1.86067 4.47045 2.09573 4.47045H3.00239V3.71491C3.00239 3.21792 2.90501 2.86198 2.71024 2.64707C2.51548 2.43215 2.24684 2.3247 1.90433 2.3247C1.58196 2.3247 1.33347 2.43215 1.15885 2.64707C0.984237 2.86198 0.896929 3.15076 0.896929 3.51343ZM6.26895 4.47045C6.35626 4.47045 6.41335 4.50068 6.44021 4.56112C6.47379 4.61485 6.49058 4.6988 6.49058 4.81297C6.49058 4.93386 6.47379 5.02452 6.44021 5.08497C6.41335 5.13869 6.35626 5.16556 6.26895 5.16556H4.60675C4.51944 5.16556 4.46235 5.13869 4.43549 5.08497C4.40191 5.03124 4.38512 4.94729 4.38512 4.83312C4.38512 4.71223 4.40191 4.62156 4.43549 4.56112C4.46235 4.50068 4.51944 4.47045 4.60675 4.47045H6.26895ZM7.93155 4.47045C8.01886 4.47045 8.07594 4.50068 8.10281 4.56112C8.13639 4.61485 8.15318 4.6988 8.15318 4.81297C8.15318 4.93386 8.13639 5.02452 8.10281 5.08497C8.07594 5.13869 8.01886 5.16556 7.93155 5.16556H6.26935C6.18204 5.16556 6.12495 5.13869 6.09809 5.08497C6.06451 5.03124 6.04772 4.94729 6.04772 4.83312C6.04772 4.71223 6.06451 4.62156 6.09809 4.56112C6.12495 4.50068 6.18204 4.47045 6.26935 4.47045H7.93155ZM9.59415 4.47045C9.68146 4.47045 9.73854 4.50068 9.76541 4.56112C9.79899 4.61485 9.81578 4.6988 9.81578 4.81297C9.81578 4.93386 9.79899 5.02452 9.76541 5.08497C9.73854 5.13869 9.68146 5.16556 9.59415 5.16556H7.93194C7.84464 5.16556 7.78755 5.13869 7.76069 5.08497C7.72711 5.03124 7.71032 4.94729 7.71032 4.83312C7.71032 4.71223 7.72711 4.62156 7.76069 4.56112C7.78755 4.50068 7.84464 4.47045 7.93194 4.47045H9.59415ZM11.2567 4.47045C11.3441 4.47045 11.4011 4.50068 11.428 4.56112C11.4616 4.61485 11.4784 4.6988 11.4784 4.81297C11.4784 4.93386 11.4616 5.02452 11.428 5.08497C11.4011 5.13869 11.3441 5.16556 11.2567 5.16556H9.59454C9.50723 5.16556 9.45015 5.13869 9.42328 5.08497C9.3897 5.03124 9.37291 4.94729 9.37291 4.83312C9.37291 4.71223 9.3897 4.62156 9.42328 4.56112C9.45015 4.50068 9.50723 4.47045 9.59454 4.47045H11.2567ZM12.1638 4.47045C12.4257 4.47045 12.6339 4.39994 12.7884 4.2589C12.9496 4.11787 13.0302 3.9231 13.0302 3.67461V2.2844H13.685V3.67461C13.685 4.15144 13.5506 4.52082 13.282 4.78275C13.0201 5.03795 12.6608 5.16556 12.2041 5.16556H11.2571C11.1698 5.16556 11.1127 5.13869 11.0859 5.08497C11.0523 5.03124 11.0355 4.94729 11.0355 4.83312C11.0355 4.71223 11.0523 4.62156 11.0859 4.56112C11.1127 4.50068 11.1698 4.47045 11.2571 4.47045H12.1638ZM13.7857 0.994934H12.9798V0.279683H13.7857V0.994934ZM12.5063 0.994934H11.7004V0.279683H12.5063V0.994934ZM5.64177 12.9641C5.64177 13.3267 5.58468 13.6659 5.47051 13.9815C5.35634 14.3039 5.1918 14.5826 4.97689 14.8177C4.76198 15.0595 4.50005 15.2509 4.19112 15.3919C3.8889 15.5329 3.54638 15.6035 3.16357 15.6035H2.56921C1.81702 15.6035 1.23273 15.3718 0.816337 14.9084C0.399946 14.445 0.191751 13.8103 0.191751 13.0044V11.2414H0.836485V12.9842C0.836485 13.273 0.870065 13.5349 0.937225 13.77C1.0111 14.0051 1.12191 14.2065 1.26967 14.3744C1.42413 14.549 1.61554 14.6834 1.84388 14.7774C2.07223 14.8714 2.34758 14.9184 2.66995 14.9184H3.1132C3.42885 14.9184 3.70421 14.8647 3.93927 14.7572C4.17433 14.6565 4.36909 14.5188 4.52356 14.3442C4.68474 14.1696 4.80227 13.9648 4.87615 13.7297C4.95674 13.4946 4.99703 13.2495 4.99703 12.9943V10.2844H5.64177V12.9641ZM3.21394 10.0628H2.36773V9.32738H3.21394V10.0628ZM8.24526 13.1656C8.07064 13.1656 7.90274 13.1421 7.74156 13.095C7.58038 13.0413 7.43598 12.954 7.30838 12.8331C7.18749 12.7122 7.09011 12.5544 7.01624 12.3596C6.94236 12.1582 6.90542 11.9097 6.90542 11.6142V6.9197H7.56023V11.4933C7.56023 11.7754 7.62067 12.0104 7.74156 12.1985C7.86916 12.3798 8.074 12.4705 8.35607 12.4705H8.52733C8.67508 12.4705 8.74896 12.5846 8.74896 12.813C8.74896 13.048 8.67508 13.1656 8.52733 13.1656H8.24526ZM8.69324 12.4705C8.95516 12.4705 9.15328 12.4067 9.2876 12.279C9.42192 12.1514 9.48908 11.9802 9.48908 11.7653V11.3825C9.48908 10.7982 9.63683 10.3415 9.93233 10.0124C10.2346 9.68332 10.6509 9.51878 11.1815 9.51878C11.4569 9.51878 11.6986 9.56243 11.9068 9.64974C12.115 9.73705 12.2863 9.8613 12.4206 10.0225C12.5616 10.1837 12.6657 10.3751 12.7329 10.5967C12.8001 10.8183 12.8336 11.0635 12.8336 11.3321C12.8336 11.9097 12.6825 12.3596 12.3803 12.682C12.0781 13.0044 11.6651 13.1656 11.1412 13.1656C10.8726 13.1656 10.614 13.1152 10.3655 13.0144C10.117 12.907 9.92226 12.7189 9.78123 12.4503C9.72078 12.6048 9.64691 12.729 9.5596 12.823C9.47229 12.9171 9.38162 12.9909 9.2876 13.0447C9.19358 13.0917 9.09284 13.1253 8.98538 13.1454C8.88464 13.1588 8.78726 13.1656 8.69324 13.1656H8.53205C8.44475 13.1656 8.38766 13.1387 8.3608 13.085C8.32722 13.0312 8.31043 12.9473 8.31043 12.8331C8.31043 12.7122 8.32722 12.6216 8.3608 12.5611C8.38766 12.5007 8.44475 12.4705 8.53205 12.4705H8.69324ZM12.1889 11.3925C12.1889 11.0433 12.1117 10.7612 11.9572 10.5463C11.8027 10.3247 11.5375 10.2139 11.1614 10.2139C10.4629 10.2139 10.1137 10.6202 10.1137 11.4328C10.1137 11.7754 10.2077 12.0339 10.3957 12.2085C10.5905 12.3831 10.839 12.4705 11.1412 12.4705C11.4837 12.4705 11.7423 12.3764 11.9169 12.1884C12.0982 12.0003 12.1889 11.7351 12.1889 11.3925Z"
                        fill="currentColor"
                      ></path></svg
                  ></span>
                  <span class="package__filter">مناسب برای آنلاین شاپ</span>
                </div>
                <div class="package__body">
                  <ul class="package-options">
                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      طراحی با وردپرس
                    </li>

                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      طراحی استاندارد و سئواولیه
                    </li>

                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      طراحی ui ux اختصاصی
                    </li>

                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      سیستم چت آنلاین برای فروشگاه ها
                    </li>

                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      پشتیبانی و ضمانت 6 ماهه
                    </li>

                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      تضمین سرعت بالای سایت
                    </li>
                  </ul>

                  <a href="#" class="package__link app-btn app-btn--purple"
                    >مشاهده</a
                  >
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
              <div class="package">
                <div class="package__head package__head--pink">
                  <h4 class="package__type">ویژه</h4>
                  <span class="package__price"
                    >13,000,000
                    <svg
                      class="mr-1"
                      width="14"
                      height="16"
                      viewBox="0 0 14 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        class="text-gray-880 dark:text-white"
                        d="M1.14878 6.91843C1.44428 6.91843 1.70285 6.87142 1.92447 6.77739C2.15282 6.68337 2.34422 6.55577 2.49869 6.39458C2.65316 6.2334 2.77069 6.04535 2.85128 5.83044C2.93187 5.62224 2.97888 5.40062 2.99231 5.16556H1.98492C1.6424 5.16556 1.36033 5.12862 1.1387 5.05474C0.917077 4.98087 0.742461 4.87341 0.614858 4.73238C0.487254 4.59134 0.396588 4.42344 0.34286 4.22868C0.295849 4.0272 0.272343 3.80221 0.272343 3.55372C0.272343 3.29852 0.309281 3.05674 0.383156 2.8284C0.457032 2.60005 0.564488 2.39857 0.705523 2.22396C0.846559 2.04934 1.02117 1.91167 1.22937 1.81093C1.44428 1.70347 1.68941 1.64974 1.96477 1.64974C2.1864 1.64974 2.39795 1.68668 2.59943 1.76056C2.80091 1.83443 2.97888 1.95196 3.13335 2.11315C3.28782 2.26761 3.40871 2.47245 3.49601 2.72766C3.59004 2.97615 3.63705 3.27837 3.63705 3.63431V4.47045H4.60415C4.68474 4.47045 4.73847 4.50068 4.76533 4.56112C4.79891 4.61485 4.8157 4.6988 4.8157 4.81297C4.8157 4.93386 4.79891 5.02452 4.76533 5.08497C4.73847 5.13869 4.68474 5.16556 4.60415 5.16556H3.6169C3.60347 5.49464 3.53631 5.80693 3.41542 6.10244C3.30125 6.39794 3.14007 6.65651 2.93187 6.87813C2.72368 7.09976 2.47518 7.27438 2.1864 7.40198C1.89761 7.5363 1.57188 7.60346 1.20922 7.60346H0.141381L0.0809373 6.91843H1.14878ZM0.896929 3.51343C0.896929 3.68133 0.913719 3.82572 0.947299 3.94661C0.987594 4.0675 1.0514 4.16823 1.1387 4.24883C1.23273 4.3227 1.35697 4.37979 1.51144 4.42008C1.66591 4.45366 1.86067 4.47045 2.09573 4.47045H3.00239V3.71491C3.00239 3.21792 2.90501 2.86198 2.71024 2.64707C2.51548 2.43215 2.24684 2.3247 1.90433 2.3247C1.58196 2.3247 1.33347 2.43215 1.15885 2.64707C0.984237 2.86198 0.896929 3.15076 0.896929 3.51343ZM6.26895 4.47045C6.35626 4.47045 6.41335 4.50068 6.44021 4.56112C6.47379 4.61485 6.49058 4.6988 6.49058 4.81297C6.49058 4.93386 6.47379 5.02452 6.44021 5.08497C6.41335 5.13869 6.35626 5.16556 6.26895 5.16556H4.60675C4.51944 5.16556 4.46235 5.13869 4.43549 5.08497C4.40191 5.03124 4.38512 4.94729 4.38512 4.83312C4.38512 4.71223 4.40191 4.62156 4.43549 4.56112C4.46235 4.50068 4.51944 4.47045 4.60675 4.47045H6.26895ZM7.93155 4.47045C8.01886 4.47045 8.07594 4.50068 8.10281 4.56112C8.13639 4.61485 8.15318 4.6988 8.15318 4.81297C8.15318 4.93386 8.13639 5.02452 8.10281 5.08497C8.07594 5.13869 8.01886 5.16556 7.93155 5.16556H6.26935C6.18204 5.16556 6.12495 5.13869 6.09809 5.08497C6.06451 5.03124 6.04772 4.94729 6.04772 4.83312C6.04772 4.71223 6.06451 4.62156 6.09809 4.56112C6.12495 4.50068 6.18204 4.47045 6.26935 4.47045H7.93155ZM9.59415 4.47045C9.68146 4.47045 9.73854 4.50068 9.76541 4.56112C9.79899 4.61485 9.81578 4.6988 9.81578 4.81297C9.81578 4.93386 9.79899 5.02452 9.76541 5.08497C9.73854 5.13869 9.68146 5.16556 9.59415 5.16556H7.93194C7.84464 5.16556 7.78755 5.13869 7.76069 5.08497C7.72711 5.03124 7.71032 4.94729 7.71032 4.83312C7.71032 4.71223 7.72711 4.62156 7.76069 4.56112C7.78755 4.50068 7.84464 4.47045 7.93194 4.47045H9.59415ZM11.2567 4.47045C11.3441 4.47045 11.4011 4.50068 11.428 4.56112C11.4616 4.61485 11.4784 4.6988 11.4784 4.81297C11.4784 4.93386 11.4616 5.02452 11.428 5.08497C11.4011 5.13869 11.3441 5.16556 11.2567 5.16556H9.59454C9.50723 5.16556 9.45015 5.13869 9.42328 5.08497C9.3897 5.03124 9.37291 4.94729 9.37291 4.83312C9.37291 4.71223 9.3897 4.62156 9.42328 4.56112C9.45015 4.50068 9.50723 4.47045 9.59454 4.47045H11.2567ZM12.1638 4.47045C12.4257 4.47045 12.6339 4.39994 12.7884 4.2589C12.9496 4.11787 13.0302 3.9231 13.0302 3.67461V2.2844H13.685V3.67461C13.685 4.15144 13.5506 4.52082 13.282 4.78275C13.0201 5.03795 12.6608 5.16556 12.2041 5.16556H11.2571C11.1698 5.16556 11.1127 5.13869 11.0859 5.08497C11.0523 5.03124 11.0355 4.94729 11.0355 4.83312C11.0355 4.71223 11.0523 4.62156 11.0859 4.56112C11.1127 4.50068 11.1698 4.47045 11.2571 4.47045H12.1638ZM13.7857 0.994934H12.9798V0.279683H13.7857V0.994934ZM12.5063 0.994934H11.7004V0.279683H12.5063V0.994934ZM5.64177 12.9641C5.64177 13.3267 5.58468 13.6659 5.47051 13.9815C5.35634 14.3039 5.1918 14.5826 4.97689 14.8177C4.76198 15.0595 4.50005 15.2509 4.19112 15.3919C3.8889 15.5329 3.54638 15.6035 3.16357 15.6035H2.56921C1.81702 15.6035 1.23273 15.3718 0.816337 14.9084C0.399946 14.445 0.191751 13.8103 0.191751 13.0044V11.2414H0.836485V12.9842C0.836485 13.273 0.870065 13.5349 0.937225 13.77C1.0111 14.0051 1.12191 14.2065 1.26967 14.3744C1.42413 14.549 1.61554 14.6834 1.84388 14.7774C2.07223 14.8714 2.34758 14.9184 2.66995 14.9184H3.1132C3.42885 14.9184 3.70421 14.8647 3.93927 14.7572C4.17433 14.6565 4.36909 14.5188 4.52356 14.3442C4.68474 14.1696 4.80227 13.9648 4.87615 13.7297C4.95674 13.4946 4.99703 13.2495 4.99703 12.9943V10.2844H5.64177V12.9641ZM3.21394 10.0628H2.36773V9.32738H3.21394V10.0628ZM8.24526 13.1656C8.07064 13.1656 7.90274 13.1421 7.74156 13.095C7.58038 13.0413 7.43598 12.954 7.30838 12.8331C7.18749 12.7122 7.09011 12.5544 7.01624 12.3596C6.94236 12.1582 6.90542 11.9097 6.90542 11.6142V6.9197H7.56023V11.4933C7.56023 11.7754 7.62067 12.0104 7.74156 12.1985C7.86916 12.3798 8.074 12.4705 8.35607 12.4705H8.52733C8.67508 12.4705 8.74896 12.5846 8.74896 12.813C8.74896 13.048 8.67508 13.1656 8.52733 13.1656H8.24526ZM8.69324 12.4705C8.95516 12.4705 9.15328 12.4067 9.2876 12.279C9.42192 12.1514 9.48908 11.9802 9.48908 11.7653V11.3825C9.48908 10.7982 9.63683 10.3415 9.93233 10.0124C10.2346 9.68332 10.6509 9.51878 11.1815 9.51878C11.4569 9.51878 11.6986 9.56243 11.9068 9.64974C12.115 9.73705 12.2863 9.8613 12.4206 10.0225C12.5616 10.1837 12.6657 10.3751 12.7329 10.5967C12.8001 10.8183 12.8336 11.0635 12.8336 11.3321C12.8336 11.9097 12.6825 12.3596 12.3803 12.682C12.0781 13.0044 11.6651 13.1656 11.1412 13.1656C10.8726 13.1656 10.614 13.1152 10.3655 13.0144C10.117 12.907 9.92226 12.7189 9.78123 12.4503C9.72078 12.6048 9.64691 12.729 9.5596 12.823C9.47229 12.9171 9.38162 12.9909 9.2876 13.0447C9.19358 13.0917 9.09284 13.1253 8.98538 13.1454C8.88464 13.1588 8.78726 13.1656 8.69324 13.1656H8.53205C8.44475 13.1656 8.38766 13.1387 8.3608 13.085C8.32722 13.0312 8.31043 12.9473 8.31043 12.8331C8.31043 12.7122 8.32722 12.6216 8.3608 12.5611C8.38766 12.5007 8.44475 12.4705 8.53205 12.4705H8.69324ZM12.1889 11.3925C12.1889 11.0433 12.1117 10.7612 11.9572 10.5463C11.8027 10.3247 11.5375 10.2139 11.1614 10.2139C10.4629 10.2139 10.1137 10.6202 10.1137 11.4328C10.1137 11.7754 10.2077 12.0339 10.3957 12.2085C10.5905 12.3831 10.839 12.4705 11.1412 12.4705C11.4837 12.4705 11.7423 12.3764 11.9169 12.1884C12.0982 12.0003 12.1889 11.7351 12.1889 11.3925Z"
                        fill="currentColor"
                      ></path></svg
                  ></span>
                  <span class="package__filter">مناسب برای آنلاین شاپ</span>
                </div>
                <div class="package__body">
                  <ul class="package-options">
                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      طراحی با وردپرس
                    </li>

                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      طراحی استاندارد و سئواولیه
                    </li>

                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      طراحی ui ux اختصاصی
                    </li>

                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      سیستم چت آنلاین برای فروشگاه ها
                    </li>

                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      پشتیبانی و ضمانت 6 ماهه
                    </li>

                    <li class="package-options__item">
                      <svg
                        class="package-options__icon"
                        width="14.058"
                        height="11.773"
                        viewBox="0 0 14.058 11.773"
                      >
                        <path
                          id="Icon_material-done"
                          data-name="Icon material-done"
                          d="M1355.037,6029.945l-3.028-3.231-1.009,1.077,4.037,4.309,8.651-9.233-1.009-1.077Z"
                          transform="translate(-1350.315 -6021.058)"
                          fill="#333"
                          stroke="#333"
                          stroke-width="1"
                        />
                      </svg>
                      تضمین سرعت بالای سایت
                    </li>
                  </ul>
                  <a href="#" class="package__link app-btn app-btn--pink"
                    >مشاهده</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="contactus">
        <div class="section-head">
          <h3 class="section-head__title">ارتباط با ما</h3>
          <p class="section-head__caption">راه ها ارتباط با ما</p>
          <span class="section-head__line"></span>
        </div>
        <div class="contactus__wrapper">
          <div class="container h-100">
            <div class="contactus__map">
              <svg
                class="contactus__icon"
                width="26"
                height="35.999"
                viewBox="0 0 26 35.999"
              >
                <path
                  id="map_pin"
                  data-name="map pin"
                  d="M634,7348a13.034,13.034,0,0,0-13,13.038c0,8.921,11.634,22.019,12.129,22.572a1.168,1.168,0,0,0,1.742,0c.5-.553,12.129-13.65,12.129-22.572A13.034,13.034,0,0,0,634,7348Zm0,19.6a6.559,6.559,0,1,1,6.541-6.559A6.557,6.557,0,0,1,634,7367.6Z"
                  transform="translate(-621 -7348)"
                  fill="#0abead"
                />
              </svg>
            </div>
            <div class="contact">
              <h4 class="contact__title">فرم ارتباط با ما</h4>
              <form action="#" class="contact__form">
                <input
                  name=""
                  type="text"
                  class="contact__input"
                  placeholder="نام و نام خانوادگی"
                />
                <input
                  name=""
                  type="text"
                  class="contact__input"
                  placeholder="ایمیل"
                />
                <input
                  name=""
                  type="text"
                  class="contact__input"
                  placeholder="موضوع پیام"
                />
                <input
                  name=""
                  type="text"
                  class="contact__input"
                  placeholder="بودجه برآورد شده"
                />
                <textarea
                  name=""
                  class="contact__input contact__input--textarea"
                  id=""
                  rows="5"
                  placeholder="متن پیام"
                ></textarea>
                <button class="contact__submit" type="submit">
                  ارسال پیام
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

    <div class="change-theme">
      <svg viewBox="0 0 24 24">
        <path
          fill="white"
          d="M12.3,4.9c0.4-0.2,0.6-0.7,0.5-1.1S12.2,3,11.7,3C6.8,3.1,3,7.1,3,12c0,5,4,9,9,9c3.8,0,7.1-2.4,8.4-5.9c0.2-0.4,0-0.9-0.4-1.2c-0.4-0.3-0.9-0.2-1.2,0.1c-1,0.9-2.3,1.4-3.7,1.4c-3.1,0-5.7-2.5-5.7-5.7C9.4,7.8,10.5,5.9,12.3,4.9zM15.1,17.4c0.5,0,1,0,1.4-0.1C15.3,18.4,13.7,19,12,19c-3.9,0-7-3.1-7-7c0-2.5,1.4-4.8,3.5-6c-0.7,1.1-1,2.4-1,3.8C7.4,14,10.9,17.4,15.1,17.4z"
        />
      </svg>
    </div>

    <footer class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <p class="footer__copy-right">
            کليه حقوق محصولات و محتوای اين سایت متعلق به امین سرشار می باشد
          </p>
          <div class="footer__socials">
            <a href="#" class="footer__social"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="40"
                height="40"
                viewBox="0 0 24 24"
              >
                <path
                  d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z"
                /></svg
            ></a>

            <a href="#" class="footer__social"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="40"
                height="40"
                viewBox="0 0 24 24"
              >
                <path
                  d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z"
                /></svg
            ></a>

            <a href="#" class="footer__social"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="40"
                height="40"
                viewBox="0 0 24 24"
              >
                <path
                  d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z"
                /></svg
            ></a>

            <a href="#" class="footer__social"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="40"
                height="40"
                viewBox="0 0 24 24"
              >
                <path
                  d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z"
                /></svg
            ></a>

            <a href="#" class="footer__social"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="40"
                height="40"
                viewBox="0 0 24 24"
              >
                <path
                  d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z"
                /></svg
            ></a>
          </div>
        </div>
      </div>
    </footer>

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
