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
                        @foreach ($trendings as $trending)
                            <div class="swiper-slide poster">
                                <div class="poster__item">
                                    <img class="poster__background"
                                        src="{{ 'https://image.tmdb.org/t/p/original' . $trending['poster_path'] }}"
                                        alt="" />
                                    <div class="poster__content">
                                        <img class="poster__image"
                                            src="{{ 'https://image.tmdb.org/t/p/original' . $trending['poster_path'] }}"
                                            alt="" />
                                        <div class="poster__details">
                                            @if (isset($trending['title']))
                                                <p class="poster__title">{{ Str::limit($trending['title'], 15, '...') }}</p>
                                            @elseif(isset($trending['original_name']))
                                                <p class="poster__title">{{ Str::limit($trending['name'], 15, '...') }}</p>
                                            @else
                                                <p class="poster__title">No Name</p>
                                            @endif
                                            <ul class="list-unstyled poster__tiny-info">
                                                <li>{{ \Carbon\Carbon::parse($trending['adult'])->format('M d, Y') }}
                                                </li>
                                                <li>PG-13</li>
                                                <li>1h 58min</li>
                                            </ul>
                                            <p class="poster__genre">
                                                Genre:
                                                @foreach ($trending['genre_ids'] as $genre)
                                                    <b>{{ $genres->get($genre) }}@if (!$loop->last)
                                                            ,
                                                        @endif
                                                    </b>
                                                @endforeach
                                            </p>
                                            <p class="poster__info">{{ Str::limit($trending['overview'], '80', '...') }}
                                            </p>
                                            <div class="poster__cta">
                                                <a class="poster__cta--trailer" href="">Trailer</a>
                                                <a class="poster__cta--movie" href="">Watched?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                        @foreach ($topRateds as $topRated)
                            <div class="swiper-slide poster__tr">
                                <a href="">
                                    <img class="poster__tr--image" src="{{ 'https://image.tmdb.org/t/p/original' . $topRated['poster_path'] }}"
                                        alt="" />
                                </a>
                            </div>
                        @endforeach
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
                            <img src="{{ asset('img/posters/posters-k.jpg') }}" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="{{ asset('img/posters/posters-l.jpg') }}" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="{{ asset('img/posters/posters-m.jpg') }}" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="{{ asset('img/posters/posters-n.jpg') }}" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="{{ asset('img/posters/posters-o.jpg') }}" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="{{ asset('img/posters/posters-p.jpg') }}" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="{{ asset('img/posters/posters-q.jpg') }}" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="{{ asset('img/posters/posters-r.jpg') }}" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="{{ asset('img/posters/posters-s.jpg') }}" alt="" />
                        </a>
                    </div>
                    <div class="all__item">
                        <a href="">
                            <img src="{{ asset('img/posters/posters-t.jpg') }}" alt="" />
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
