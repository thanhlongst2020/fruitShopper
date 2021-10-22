<div class="container-fluid">
    <div class="slider-text">
        <p>GRAB THE</p>
        <h3>RECOMMEND PRODUCTS</h3>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="carousel carousel-showmanymoveone slide" id="itemslider2">
                <div class="carousel-inner">

{{--                    <div class="item active">--}}
{{--                        <div class="item-container col-xs-12 col-sm-6 col-md-2">--}}
{{--                            <div class="img-container">--}}
{{--                                <a href="#"><img src="Fruits_store/img/apple-item.png" class="img-responsive center-block"></a>--}}
{{--                            </div>--}}
{{--                            <h4 class="text-center">Apple</h4>--}}
{{--                            <h5 class="text-center">12$</h5>--}}
{{--                            <button class="btn-add">ADD TO CART</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    @foreach($productsRecommend as $keyRecommend => $productRecommendItem)
                        @if($keyRecommend == 0)
                            <div class="item active">
                                <div class="item-container col-xs-12 col-sm-6 col-md-2">
                                    <div class="img-container">
                                        <a href="#"><img src="{{$baseUrl.$productRecommendItem->feature_image_path}}" class="img-responsive center-block"></a>
                                    </div>
                                    <h4 class="text-center">{{$productRecommendItem->name}}</h4>
                                    <h5 class="text-center">{{number_format($productRecommendItem->price)}}$</h5>
                                    <button class="btn-add">ADD TO CART</button>
                                </div>
                            </div>
                        @else
                            <div class="item ">
                                <div class="item-container col-xs-12 col-sm-6 col-md-2">
                                    <div class="img-container">
                                        <a href="#"><img src="{{$baseUrl.$productRecommendItem->feature_image_path}}" class="img-responsive center-block"></a>
                                    </div>
                                    <h4 class="text-center">{{$productRecommendItem->name}}</h4>
                                    <h5 class="text-center">{{number_format($productRecommendItem->price)}}$</h5>
                                    <button class="btn-add">ADD TO CART</button>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>

                <div id="slider-control">
                    <a class="left carousel-control" href="#itemslider2" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                    <a class="right carousel-control" href="#itemslider2" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
