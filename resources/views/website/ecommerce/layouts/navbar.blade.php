<nav>
    <ul>
        <li class="@if(request()->is('/')) active2 @endif"><a href="/">Acceuil</a></li>
        <li class="@if(request()->routeIs('website_products')) active2 @endif"><a href="{{ route('website_products') }}">Nos Produits</a></li>
        {{-- <li><a href="{{ route('website_product_details',rand(1,20)) }}">détails Produit</a></li> --}}
        <li><a href="{{ route('website_cart') }}">Vidéothèque</a></li>
        {{-- <li><a href="{{ route('website_wishlist') }}">wishlist</a></li>
        <li><a href="{{ route('website_checkout') }}">Paiement</a></li> --}}
        <li><a class="menu-contact" href="{{ route('website_contact') }}">Résidence</a></li>
        <li class="@if(request()->routeIs('website_contact')) active2 @endif"><a class="menu-contact" href="{{ route('website_contact') }}">Contactez-nous</a></li>
    </ul>
</nav>
