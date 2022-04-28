@extends('website.ecommerce.layouts.ecommerce')
@section('content')
<div class="main-container">

    <div class="contuct-area">
        <div class="container">
            <div class="row" style="margin-top: 30px;">
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="contuct mb-50 bg-fff box-shadow p-20">
                        <div class="contuct-title">
                            <h2>Contactez Nous</h2>
                        </div>
                        <div class="contuct-form form-style">
                            <form action="#">
                                <span>Votre Nom (requis)</span>
                                <input type="text" required>
                                <span>Votre Email (requis)</span>
                                <input type="email" required>
                                <span>Objet</span>
                                <input type="text" required>
                                <span>Votre Message</span>
                                <textarea name="#" id="#" cols="30" rows="10"></textarea>
                                <button>Envoyez</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="contuct-detail mb-50 p-20 bg-fff box-shadow">
                        <div class="contuct-title">
                            <h2>Contact détail</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris convallis sed neque vitae bibendum. Nunc auctor dictum risus, a finibus eros iaculis nec. Sed et euismod felis, non euismod est. Maecenas quis nulla ullamcorper, imperdiet lacus et, porta sem.</p>
                        <div class="same">
                            <h5>REPRÉSENTANT</h5>
                            <p>Maecenas quis nulla ullamcorper</p>
                        </div>
                        <div class="same">
                            <h5>EMAIL</h5>
                            <p>lion-themes@gmail.com</p>
                        </div>
                        <div class="same">
                            <h5>NUMÉRO DE TÉLÉPHONE</h5>
                            <p>025 1234 5678 - 025 1234 5779</p>
                        </div>
                        <div class="same">
                            <h5>HEURES D'OUVERTURE</h5>
                            <p>Lundi au Vendredi: 09h to 18h</p>
                            <p>Samedi: 10h to 4h</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
