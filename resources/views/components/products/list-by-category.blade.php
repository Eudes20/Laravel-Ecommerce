<div class="row">
    @foreach ($products as $product)
        <div class="col-md-3">
            @include('website.ecommerce.product.home_product_body')
        </div>
    @endforeach
</div>
