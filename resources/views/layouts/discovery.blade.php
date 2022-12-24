@extends('welcome')

@section('title')
    Discovery
@endsection

@section('content')
    <div class="col-lg-8 items__list">
        <div class="items__custom">
            <div class="items__search">
                <form action="" class="items__form">
                    <input type="text" name="search">
                    <button type="submit" class="search__button">
                        <i class="bi bi-search"></i> Search
                    </button>
                </form>
                <div class="search__filter">
                    <div class="filter__quality">
                        <p class="filter__quality--title">Quality</p>
                        <select name="" class="form-select qualtiy">
                            <option value="all">All</option>
                            <option value="720p">720p</option>
                            <option value="1080p">1080p</option>
                            <option value="4K">4K</option>
                            <option value="8K">8K</option>
                        </select>
                    </div>
                    <div class="filter__quality">
                        <p class="filter__quality--title">Genre</p>
                        <select name="" classform-select="genre">
                            <option value="all">All</option>
                            <option value="action">Action</option>
                            <option value="adventure">Adventure</option>
                            <option value="romance">Romance</option>
                        </select>
                    </div>
                    <div class="filter__quality">
                        <p class="filter__quality--title">Rating</p>
                        <select name="" class=form-select "rating">
                            <option value="all">All</option>
                            <option value="9">9+</option>
                            <option value="8">8+</option>
                            <option value="7">7+</option>
                        </select>
                    </div>
                    <div class="filter__quality">
                        <p class="filter__quality--title">Year</p>
                        <select name="" clasform-select s="year">
                            <option value="all">All</option>
                            <option value="9">9+</option>
                            <option value="8">8+</option>
                            <option value="7">7+</option>
                        </select>
                    </div>
                    <div class="filter__quality">
                        <p class="filter__quality--title">Language</p>
                        <select name="" class="lform-select anguage">
                            <option value="all">All</option>
                            <option value="english">English</option>
                            <option value="korean">Korean</option>
                            <option value="japanese">Japanese</option>
                        </select>
                    </div>
                    <div class="filter__quality">
                        <p class="filter__quality--title">Order By</p>
                        <select name="" class="form-select oder-by">
                            <option value="latest">Latest</option>
                            <option value="english">Most Rated</option>
                            <option value="korean">Most Watch</option>
                            <option value="japanese">Most Downloaded</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="items__custom">
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
