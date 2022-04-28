@extends('website.ecommerce.layouts.ecommerce')
@section('content')
    <div class="cart-main-container shop-bg" id="productCartDetails">
        <div class="cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="woocommerce-breadcrumb mtb-15">
                            <div class="menu">
                                <ul>
                                    <li><a href="/">Acceuil</a></li>
                                    <li class="active"><a href="{{ route('website_location') }}">Résidence</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="account-title mtb-20 text-center">
                            <h1>Résidence</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1757352498084!2d2.3429013146549993!3d6.3712989953896795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a58d5da1556999b!2zNsKwMjInMTYuNyJOIDLCsDIwJzQyLjMiRQ!5e0!3m2!1sen!2sbj!4v1649207914620!5m2!1sen!2sbj"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
