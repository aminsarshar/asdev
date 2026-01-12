<section class="about-us" >
    <div class="container">
        <div class="section-head">
            <h3 class="section-head__title" id="about-me">درباره من</h3>
            <p class="section-head__caption">من کی هستم؟</p>
            <span class="section-head__line"> </span>
        </div>
        <div class="about" data-aos="zoom-in" data-aos-duration="800">
            <div class="about__image">
                <img class="about__img" src="{{ url(env('ABOUT_IMAGES_UPLOAD_PATH') . $about->image) }}" alt="aboutus" />
            </div>
            <div class="about__content">
                <h4 class="about__title">{{$about->title}}</h4>
                <p class="about__description">
                    {{$about->description}}
                </p>
                {{-- <p class="about__description">
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
                </p> --}}
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
                    <a href="{{$about->contact_button_link}}" class="app-btn about__link">{{$about->contact_button_text}}</a>
                    <a href="{{$about->resume_button_link}}" class="app-btn app-btn--orange about__link">{{$about->resume_button_text}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
