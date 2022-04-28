
<div class="product-wrapper">
    <div class="product-img">
        <a href="#">
            <img src="{{asset($product->thumb_image)}}" alt="" class="primary">
            <img src="{{asset($product->image[0]->name)}}" alt="" class="secondary">
        </a>
        <div class="product-icon c-fff home3-hover-bg">
            @include('website.ecommerce.home_include.tooltip')
        </div>
    </div>
    <div class="product-content home3-hover">
        <h3><a href="{{route('website_product_details', $product->id)}}">{{$product->name}}</a></h3>
        <ul>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
        </ul>
        <span>&amp; {{$product->price}}</span>
    </div>
</div>
