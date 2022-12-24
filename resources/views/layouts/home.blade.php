@extends('welcome')

@section('title')
    Home
@endsection

@section('content')
    <div class="col-lg-8 items__list">
        <!-- trending -->
        <div class="items__custom">
            <h4 class="items__title" class="">Trending 🔥</h4>
            <div class="items__title--content">
                <div class="swiper trendingSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide poster">
                            <div class="poster__item">
                                <img class="poster__background" src="/assets/img/posters/posters-a.jpg" alt="" />
                                <div class="poster__content">
                                    <img class="poster__image" src="/assets/img/posters/posters-a.jpg" alt="" />
                                    <div class="poster__details">
                                        <p class="poster__title">Aquaman</p>
                                        <ul class="list-unstyled poster__tiny-info">
                                            <li>2013</li>
                                            <li>PG-13</li>
                                            <li>1h 58min</li>
                                        </ul>
                                        <p class="poster__genre">
                                            Genre:
                                            <b>Action, Comedy</b>
                                        </p>
                                        <p class="poster__info">Born upon the shores of the
                                            surface world, Arthur Curry (Jason Momoa) discovers
                                            that he is only half human, with the other half...
                                        </p>
                                        <div class="poster__cta">
                                            <a class="poster__cta--trailer" href="">Trailer</a>
                                            <a class="poster__cta--movie" href="">Watched?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide poster">
                            <img class="poster__background" src="/assets/img/posters/posters-b.jpg" alt="" />
                            <div class="poster__content">
                                <img class="poster__image" src="/assets/img/posters/posters-b.jpg" alt="" />
                                <div class="poster__details">
                                    <p class="poster__title">Aquaman</p>
                                    <ul class="list-unstyled poster__tiny-info">
                                        <li>2013</li>
                                        <li>PG-13</li>
                                        <li>1h 58min</li>
                                    </ul>
                                    <p class="poster__genre">
                                        Genre:
                                        <b>Action, Comedy</b>
                                    </p>
                                    <p class="poster__info">Born upon the shores of the surface
                                        world, Arthur Curry (Jason Momoa) discovers that he is
                                        only half human, with the other half...</p>
                                    <div class="poster__cta">
                                        <a class="poster__cta--trailer" href="">Trailer</a>
                                        <a class="poster__cta--movie" href="">Watched?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide poster">
                            <img class="poster__background" src="/assets/img/posters/posters-c.jpg" alt="" />
                            <div class="poster__content">
                                <img class="poster__image" src="/assets/img/posters/posters-c.jpg" alt="" />
                                <div class="poster__details">
                                    <p class="poster__title">Aquaman</p>
                                    <ul class="list-unstyled poster__tiny-info">
                                        <li>2013</li>
                                        <li>PG-13</li>
                                        <li>1h 58min</li>
                                    </ul>
                                    <p class="poster__genre">
                                        Genre:
                                        <b>Action, Comedy</b>
                                    </p>
                                    <p class="poster__info">Born upon the shores of the surface
                                        world, Arthur Curry (Jason Momoa) discovers that he is
                                        only half human, with the other half...</p>
                                    <div class="poster__cta">
                                        <a class="poster__cta--trailer" href="">Trailer</a>
                                        <a class="poster__cta--movie" href="">Watched?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide poster">
                            <img class="poster__background" src="/assets/img/posters/posters-d.jpg" alt="" />
                            <div class="poster__content">
                                <img class="poster__image" src="/assets/img/posters/posters-d.jpg" alt="" />
                                <div class="poster__details">
                                    <p class="poster__title">Aquaman</p>
                                    <ul class="list-unstyled poster__tiny-info">
                                        <li>2013</li>
                                        <li>PG-13</li>
                                        <li>1h 58min</li>
                                    </ul>
                                    <p class="poster__genre">
                                        Genre:
                                        <b>Action, Comedy</b>
                                    </p>
                                    <p class="poster__info">Born upon the shores of the surface
                                        world, Arthur Curry (Jason Momoa) discovers that he is
                                        only half human, with the other half...</p>
                                    <div class="poster__cta">
                                        <a class="poster__cta--trailer" href="">Trailer</a>
                                        <a class="poster__cta--movie" href="">Watched?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination trending-pagination"></div>
                </div>
            </div>
        </div>
        <!-- top rated -->
        <div class="items__custom">
            <h4 class="items__title" class="">Top Rated ✨</h4>
            <div class="items__title--content">
                <div class="swiper topRated">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide poster__tr">
                            <a href="">
                                <img class="poster__tr--image" src="/assets/img/posters/posters-l.jpg" alt="" />
                            </a>
                        </div>
                        <div class="swiper-slide poster__tr">
                            <a href="">
                                <img class="poster__tr--image" src="/assets/img/posters/posters-m.jpg" alt="" />
                            </a>
                        </div>
                        <div class="swiper-slide poster__tr">
                            <a href="">
                                <img class="poster__tr--image" src="/assets/img/posters/posters-n.jpg" alt="" />
                            </a>
                        </div>
                        <div class="swiper-slide poster__tr">
                            <a href="">
                                <img class="poster__tr--image" src="/assets/img/posters/posters-o.jpg" alt="" />
                            </a>
                        </div>
                        <div class="swiper-slide poster__tr">
                            <a href="">
                                <img class="poster__tr--image" src="/assets/img/posters/posters-p.jpg" alt="" />
                            </a>
                        </div>
                        <div class="swiper-slide poster__tr">
                            <a href="">
                                <img class="poster__tr--image" src="/assets/img/posters/posters-q.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest updates -->
        <div class="items__custom">
            <h4 class="items__title" class="">Latest Updates</h4>
            <div class="items__title--content">
                <div class="all">
                    <div class="all__item">
                        <a href="">
                            <img src="/assets/img/posters/posters-k.jpg" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="/assets/img/posters/posters-l.jpg" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="/assets/img/posters/posters-m.jpg" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="/assets/img/posters/posters-n.jpg" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="/assets/img/posters/posters-o.jpg" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="/assets/img/posters/posters-p.jpg" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="/assets/img/posters/posters-q.jpg" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="/assets/img/posters/posters-r.jpg" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="/assets/img/posters/posters-s.jpg" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="/assets/img/posters/posters-t.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="all-pagination">
                    <ul class="list-unstyled all-pagination__list">
                        <li>1</li>
                        <li>2</li>
                        <li>....</li>
                        <li>49</li>
                        <li>50</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
