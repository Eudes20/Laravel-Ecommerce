<div class="container clearfix">
    <div class="row">
        <div class="col-lg-9 ml-auto">
            @if (count($latest_products) > 0)
                <div class="slider-area mt-35">
                    <div id="slider-active">
                        <img src="{{ asset('contents/website/img/slider/5.jpg') }}" alt="" title="#active1" />
                    </div>
                    <div id="active1" class="nivo-html-caption">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11 col-md-12 ml-auto">
                                    <div class="slide1-text home3-slide1-text text-left">
                                        <div class="middle-text">
                                            <div class="cap-dec animated text-uppercase">
                                                <h3>Jusqu'à 20% de réduction sur une TV</h3>
                                            </div>
                                            <div class="cap-title animated text-uppercase">
                                                <h1>
                                                    Smart TVs <br />
                                                    from to Tnm
                                                </h1>
                                            </div>
                                            <div class="cap-dec animated">
                                                <p>
                                                    Claritas est etiam processus dynamicus, qui sequitur mutationem<br />
                                                    consuetudium lectorum.
                                                </p>
                                            </div>
                                            <div class="cap-readmore animated">
                                                <a href="#">Voir Collection</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="active2" class="nivo-html-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11 col-md-12 ml-auto">
                                    <div class="slide1-text text-left">
                                        <div class="middle-text">
                                            <div class="cap-dec animated">
                                                <h3>up to 40% off on headphone</h3>
                                            </div>
                                            <div class="cap-title animated text-uppercase">
                                                <h1>Feel your music</h1>
                                            </div>
                                            <div class="cap-dec animated">
                                                <p>
                                                    Claritas est etiam processus dynamicus, qui sequitur mutationem<br />
                                                    consuetudium lectorum.
                                                </p>
                                            </div>
                                            <div class="cap-readmore animated">
                                                <a href="#">View Collection</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="slider-area mt-35">
                    <div id="slider-active">
                        <img src="{{ asset('contents/website/img/slider/8.jpg') }}" alt="" title="#active1" />
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
