<div class="single-slide">
    <div class="product-card">
        <div class="product-header">
            <a href="" class="author">
                jpple
            </a>
            <h3><a href="product-details.html">{{$title}}</a></h3>
        </div>
        <div class="product-card--body">
            <div class="card-image">
                <img src="{{asset('client/assets/image/products/product-1.jpg')}}" alt="">
                <div class="hover-contents">
                    <a href="product-details.html" class="hover-image">
                        <img src="{{asset('client/assets/image/products/product-1.jpg')}}" alt="">
                    </a>
                    <div class="hover-btns">
                        <a href="cart.html" class="single-btn">
                            <i class="fas fa-shopping-basket"></i>
                        </a>
                        <a href="wishlist.html" class="single-btn">
                            <i class="fas fa-heart"></i>
                        </a>
                        <a href="compare.html" class="single-btn">
                            <i class="fas fa-random"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="price-block">
                <span class="price">£{{$price}}</span>
                <del class="price-old">£{{$price}}</del>
                <span class="price-discount">20%</span>
            </div>
        </div>
    </div>
</div>