 <section class="home">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-12 col-lg-6">
                 <div class="home__content" data-aos="fade-left" data-aos-duration="750">
                     <h3 class="home__name">{{$hero->title}}</h3>
                     <h2 class="home__title">{{$hero->description}}</h2>
                     <p class="home__caption">
                        {{$hero->field}}
                     </p>
                     <div class="home__links-wrapper">
                         <a href="{{$hero->button_link}}" class="app-btn home__link">{{$hero->button_text}}</a>
                         <a href="#resume" class="app-btn app-btn--orange home__link">دیدن رزومه</a>
                     </div>
                 </div>
             </div>
             <div class="col-12 col-lg-6">
                 <div class="home__photo" data-aos="fade-right" data-aos-duration="750">
                     <img src="{{ url(env('HERO_IMAGES_UPLOAD_PATH') . $hero->image) }}" alt="" />
                 </div>
             </div>
         </div>
     </div>
 </section>
