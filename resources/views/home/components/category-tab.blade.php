<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="category-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    @foreach($categorys as $indexCategory => $categoryItem)
                    <li class="#{{$indexCategory == 0 ? 'active' : ''}}">
                        <a href="#category_tab_{{$categoryItem->id}}" data-toggle="tab">
                            {{$categoryItem->name}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="tab-content">
                @foreach($categorys as $indexCategoryProduct => $categoryItemProduct)
                <div class="tab-pane fade {{$indexCategoryProduct == 0 ? 'active in' : '' }} " id="category_tab_{{$categoryItemProduct->id}}" >
                    @foreach($categoryItemProduct->products as $productItemTabs)
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{$baseUrl.$productItemTabs->feature_image_path}}" alt="" />
                                    <h2>{{$productItemTabs->price}}$</h2>
                                    <p>{{$productItemTabs->name}}</p>
                                    <button class="btn-add">ADD TO CART</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach


            </div>
        </div><!--/category-tab-->
    </div>
</div>
