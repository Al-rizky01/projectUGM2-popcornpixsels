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
                                    <select>
                                        <option value="az">A-Z</option>
                                        <option value="za">Z-A</option>
                                    </select>
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
                        <div class="filter__gallery">
                            <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="img/category/ScF-2.jpg">
                                <div class="ep">Complete</div>
                                <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                <h5><a href="#">The Avengers : Endgame</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week"
                                data-setbg="img/category/ScF-1.jpg">
                                <div class="ep">Complete</div>
                                <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                <h5><a href="#">Transformers : The Rise of The Beast</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix week years"
                                data-setbg="img/category/Hor-1.jpg">
                                <div class="ep">Complete</div>
                                <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                <h5><a href="#">Qodrat</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix years month"
                                data-setbg="img/category/His-1.jpg">
                                <div class="ep">Complete</div>
                                <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                <h5><a href="#">Rustin</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix day"
                                data-setbg="img/category/anim-1.jpg">
                                <div class="ep">Complete</div>
                                <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                <h5><a href="#">Suzume No Tojimari</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->
@endsection
