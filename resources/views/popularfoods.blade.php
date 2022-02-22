@section('content')
@foreach ($foods as $food)
<div class="col-lg-4 col-md-6">
    <div class="single-item-wrap">
        <div class="thumb">
            <img src="/storage/foods/{{ $food->image }}" width="50px" alt="">
            <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
        </div>
        <div class="wrap-details">
            <h5><a href="single-product.html">freshfood</a></h5>
            <div class="wrap-footer">
                <div class="rating">
                    4.9
                    <span class="rating-inner">
                        <i class="ri-star-fill ps-0"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-line pe-0"></i>
                    </span>
                    (200)
                </div>
                <h6 class="price">$15.00</h6>
            </div>
        </div>
        <div class="btn-area">
            <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
        </div>
    </div>
</div>
@endforeach
<div class="col-lg-4 col-md-6">
    <div class="single-item-wrap">
        <div class="thumb">
            <img src="/assets/img/product/pizza/2.png" alt="img">
            <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
        </div>
        <div class="wrap-details">
            <h5><a href="single-product.html">Maxican Pizza Test Better</a></h5>
            <div class="wrap-footer">
                <div class="rating">
                    4.9
                    <span class="rating-inner">
                        <i class="ri-star-fill ps-0"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-line pe-0"></i>
                    </span>
                    (928)
                </div>
                <h6 class="price">$29.00</h6>
            </div>
            <div class="btn-area">
                <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6">
    <div class="single-item-wrap">
        <div class="thumb">
            <img src="/assets/img/product/burger/1.png" alt="img">
            <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
        </div>
        <div class="wrap-details">
            <h5><a href="single-product.html">Patty Buns Burgers</a></h5>
            <div class="wrap-footer">
                <div class="rating">
                    4.9
                    <span class="rating-inner">
                        <i class="ri-star-fill ps-0"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-line pe-0"></i>
                    </span>
                    (462)
                </div>
                <h6 class="price">$27.00</h6>
            </div>
        </div>
        <div class="btn-area">
            <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
        </div>
    </div>
</div>
