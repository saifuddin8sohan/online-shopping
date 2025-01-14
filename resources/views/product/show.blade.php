<!doctype html>
<html class="no-js" lang="zxx">
    
    @include('inc.headcss')

    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
       
        @include('inc.header')


        <div class="product-details pt-100 pb-80">
            <div class="container">
                <div class="row">
                    

                    <div class="col-md-12 col-lg-7 col-12">
                        <div class="product-details-4 pr-70">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="assets/img/product-details/bl2.jpg">
                                    <img src="{{ asset('storage') }}/{{ $product ['product']->photo }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 col-12">
                        <div class="product-details-content">
                            <h3>{{$product ['product']->name}}</h3>
                            @php( $item = $product ['product'])

                            <div class="rating-number">

                                <!-- <div class="quick-view-rating">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div> -->

                            </div>

                            <div class="details-price">
                                <span>{{$product ['product']->price}} Tk</span>
                            </div>

                            <p>{{$product ['product']->details}}</p>


                            <!-- <div class="product-color-2">
                                <h4 class="details-title">Color*</h4>
                                <div class="product-color-style2">
                                    <ul>
                                        <li class="orange"></li>
                                        <li class="blue2"></li>
                                        <li class="pink"></li>
                                        <li class="yellow"></li>
                                    </ul>
                                </div>
                            </div> -->

                            <!-- <div class="product-size-2">
                                <h4 class="details-title">Size*</h4>
                                <div class="product-size-style2">
                                    <ul>
                                        <li><a href="#">xl</a></li>
                                        <li><a href="#">ml</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">sl</a></li>
                                        <li><a href="#">ls</a></li>
                                    </ul>
                                </div>
                            </div> -->

                            <!-- // -->

                            <div class="quickview-plus-minus">

                                <!-- <div class="cart-plus-minus">
                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                </div> -->

                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="order/{{$item->id}}/create">Add to Order</a>
                                </div>

                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                </div>
                            </div>


                            <!-- <div class="product-details-cati-tag mt-35">
                                <ul>
                                    <li class="categories-title">Categories :</li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">electronics</a></li>
                                    <li><a href="#">toys</a></li>
                                    <li><a href="#">food</a></li>
                                    <li><a href="#">jewellery</a></li>
                                </ul>
                            </div> -->


                            <div class="product-details-cati-tag mtb-10">
                                <ul>
                                    <li class="categories-title">Tags :</li>
                                    <li><a href="{{ url('/') }}">{{$product ['product']->tag}}</a></li>
                                    <li><a href="{{ url('/') }}">{{$product ['product']->tag1}}</a></li>
                                </ul>
                            </div>


                            <div class="bundle-area">
                                <h3>Buy and get off to 35%</h3>

                                <p>{{$product ['product']->description}}.</p>
                                <!-- <div class="bundle-all-price">
                                    
                                    <div class="bundle-result">
                                        <h4>Price  : <span> $1300 </span></h4>
                                    </div>
                                </div>

                                <div class="bundle-cart">
                                    <a class="btn-hover-black bundle-btn" href="#">add bundle to cart</a>
                                </div> -->

                                <div class="product-details5-social">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="icofont icofont-social-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icofont icofont-social-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icofont icofont-social-pinterest"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icofont icofont-social-flikr"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>

        <!-- // -->

        <div class="product-description-review-area pb-90">
            <div class="container">
                <div class="product-description-review text-center">
                    <div class="description-review-title nav" role=tablist>
                        <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                            Description
                        </a>
                        <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                            
                        </a>
                    </div>
                    <div class="description-review-text tab-content">
                        <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                        </div>
                        <div class="tab-pane fade" id="pro-review" role="tabpanel">
                            <a href="#">Be the first to write your review!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


       
        @include('inc.newproduct')
        


        @include('inc.footer')


        @include('inc.sidemodal')

    
        @include('inc.js')

    </body>
</html>
