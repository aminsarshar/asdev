     <section class="portfolio" id="portfolio">
         <div class="container">
             <div class="section-head">
                 <h3 class="section-head__title">نمونه کارهای من</h3>
                 <p class="section-head__caption">چه خدماتی ارائه دادیم؟</p>
                 <span class="section-head__line"></span>
             </div>
             <ul class="portfolio-list">
                 <li class="portfolio-list__item portfolio-list__item--active" data-content-id="#all-work">
                     همه نمونه کارها
                 </li>

                 @foreach ($categories as $category)
                     <li class="portfolio-list__item" data-content-id="#wrok-{{ $category->id }}">
                         {{ $category->name }}
                     </li>
                 @endforeach

                 {{-- <li class="portfolio-list__item" data-content-id="#code-work">
                     سایت با کد نویسی اختصاصی
                 </li>
                 <li class="portfolio-list__item">سئو</li>
                 <li class="portfolio-list__item">طراحی ul ux</li>
                 <li class="portfolio-list__item">طراحی بنر سایت</li> --}}
                 <!-- <li class="portfolio-list__item"></li> -->
             </ul>

             <div class="portfolio-content portfolio-content--show" id="all-work">
                 <div class="swiper1">
                     <div class="swiper-wrapper">
                         @foreach ($projects as $project)
                             <div class="swiper-slide">
                                 <a href="#">
                                     <img src="{{ url(env('PROJECT_IMAGES_UPLOAD_PATH') . $project->image) }}"
                                         class="portfolio-content__img" alt="Portfolio Image" />
                                 </a>
                             </div>
                         @endforeach
                         {{-- <div class="swiper-slide">
                             <a href="#">
                                 <img src="/home/assets/images/portfolio-2.jpg" class="portfolio-content__img"
                                     alt="Portfolio Image" />
                             </a>
                         </div> --}}
                     </div>
                     <div class="swiper-pagination"></div>
                 </div>
             </div>
             @foreach ($categories as $category)
             <div class="portfolio-content" id="wrok-{{ $category->id }}">
                 <div class="swiper2">
                     <div class="swiper-wrapper">
                         @foreach ($projects as $project)
                             <div class="swiper-slide">
                                 <a href="#">
                                     <img src="{{ url(env('PROJECT_IMAGES_UPLOAD_PATH') . $project->image) }}"
                                         class="portfolio-content__img" alt="Portfolio Image" />
                                 </a>
                             </div>
                             @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    @endforeach

            </div>
        </section>

        {{-- <div class="portfolio-content" id="wrok-{{ $category->id }}">
            <div class="swiper2">
                <div class="swiper-wrapper">
                    @foreach ($projects as $project)
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="{{ url(env('PROJECT_IMAGES_UPLOAD_PATH') . $project->image) }}"
                                    class="portfolio-content__img" alt="Portfolio Image" />
                            </a>
                        </div>
                    @endforeach
                    {{-- <div class="swiper-slide">
                        <a href="#">
                            <img src="/home/assets/images/portfolio-2.jpg" class="portfolio-content__img"
                                alt="Portfolio Image" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="/home/assets/images/portfolio-3.jpg" class="portfolio-content__img"
                                alt="Portfolio Image" />
                        </a>
                    </div> --}}
                {{-- </div>
                <div class="swiper-pagination"></div>
            </div>
        </div> --}}
