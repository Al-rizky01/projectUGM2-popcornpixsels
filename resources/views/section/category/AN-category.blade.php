@extends('layout.layout-categories')
<!-- Header End -->
@section('container')


    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>{{ $category }}</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="product__page__filter">
                                        <p>Order by:</p>
                                        <select onchange="sortItems(this.value)">
                                            <option value="az">A-Z</option>
                                            <option value="za">Z-A</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="sortableContainer">
                            <div class="col-lg-4 col-md-6 col-sm-6 sortable-item">
                                <div class="product__item">
                                    <a href="./suzume-details.html">
                                        <div class="product__item__pic set-bg"
                                            data-setbg="{{ asset('img/category/anim-1.jpg') }}">
                                            <div class="ep">Complete</div>
                                            <div class="comment"><i class="fa fa-star"></i> 11</div>
                                            <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                        </div>
                                    </a>

                                    <div class="product__item__text">
                                        <ul>
                                            <li>Animation</li>
                                            <li>Action</li>
                                            <li>Science Fiction</li>
                                        </ul>
                                        <h5><a href="./suzume-details.html">Suzume no Tojimari</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 sortable-item">
                                <div class="product__item">

                                    <a href="#">
                                        <div class="product__item__pic set-bg"
                                            data-setbg="{{ asset('img/category/anim-2.jpg') }}">
                                            <div class="ep">Complete</div>
                                            <div class="comment"><i class="fa fa-star"></i> 11</div>
                                            <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                        </div>
                                    </a>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Animation</li>
                                            <li>Action</li>
                                            <li>Science Fiction</li>
                                        </ul>
                                        <h5><a href="#">Kimi no Nawa</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 sort sortable-item">
                                <div class="product__item">
                                    <a href="#">
                                        <div class="product__item__pic set-bg"
                                            data-setbg="{{ asset('img/category/anim-4.jpg') }}">
                                            <div class="ep">Complete</div>
                                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        </div>
                                    </a>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Animation</li>
                                            <li>Science Fiction</li>
                                        </ul>
                                        <h5><a href="#">Ninja Turtles : Mutant Mayhem</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 sortable-item">
                                <div class="product__item">
                                    <a href="#">
                                        <div class="product__item__pic set-bg"
                                            data-setbg="{{ asset('img/category/anim-3.jpg') }}">
                                            <div class="ep">Complete</div>
                                            <div class="comment"><i class="fa fa-star"></i> 11</div>
                                            <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                        </div>
                                    </a>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Animation</li>
                                        </ul>
                                        <h5><a href="TnK">Tenki no Ko</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 sortable-item">
                                <div class="product__item">
                                    <a href="#">
                                        <div class="product__item__pic set-bg"
                                            data-setbg="{{ asset('img/category/anim-5.jpg') }}">
                                            <div class="ep">18 / 18</div>
                                            <div class="comment"><i class="fa fa-star"></i> 11</div>
                                            <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                        </div>
                                    </a>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Animation</li>
                                            <li>Action</li>
                                        </ul>
                                        <h5><a href="#">Spider-man : Across the Spiderverse</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 sortable-item">
                                <div class="product__item">
                                    <a href="">
                                        <div class="product__item__pic set-bg"
                                            data-setbg="{{ asset('img/category/anim-6.jpg') }}">
                                            <div class="ep">18 / 18</div>
                                            <div class="comment"><i class="fa fa-star"></i> 11</div>
                                            <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                        </div>
                                    </a>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Animation</li>
                                            <li>Action</li>
                                        </ul>
                                        <h5><a href="DNSU.hmtl">Doraemon : Nobita's Sky Utopia</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__pagination">
                        <a href="#" class="current-page">1</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top Views</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Day</li>
                                <li data-filter=".week">Week</li>
                                <li data-filter=".month">Month</li>
                                <li data-filter=".years">Years</li>
                            </ul>
                            <a href="#">
                                <div class="filter__gallery">
                                    <div class="product__sidebar__view__item set-bg mix day years"
                                        data-setbg="{{ asset('img/category/ScF-2.jpg') }}">
                                        <div class="ep">Complete</div>
                                        <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                        <h5>The Avengers : Endgame</h5>
                                    </div>
                            </a>
                            <a href="#">
                                <div class="product__sidebar__view__item set-bg mix month week"
                                    data-setbg="{{ asset('img/category/ScF-1.jpg') }}">
                                    <div class="ep">Complete</div>
                                    <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                    <h5>Transformers : The Rise of The Beast</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="product__sidebar__view__item set-bg mix week years"
                                    data-setbg="{{ asset('img/category/Hor-1.jpg') }}">
                                    <div class="ep">Complete</div>
                                    <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                    <h5>Qodrat</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="product__sidebar__view__item set-bg mix years month"
                                    data-setbg="{{ asset('img/category/His-1.jpg') }}">
                                    <div class="ep">Complete</div>
                                    <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                    <h5>Rustin</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="product__sidebar__view__item set-bg mix day"
                                    data-setbg="{{ asset('img/category/anim-1.jp') }}g">
                                    <div class="ep">Complete</div>
                                    <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                    <h5>Suzume No Tojimari</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection
