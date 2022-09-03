@extends('layouts.home')
@section('title', !empty($seo->seo_title) ? $seo->seo_title : '')
@section('content')
<!-- BEGIN: PAGE CONTAINER -->
<style>
    .c-navbar{
        background: #4c4c4c !important;
    }
    </style>
<div class="c-layout-page">
    <section class="c-layout-revo-slider c-layout-revo-slider-14" dir="ltr" style="height:95px;">
   </section>
    <div class="c-layout-page">
        <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-sbold">Product Details</h3>
                    <h4 class="">{{!empty($products->name) ? $products->name : '-'}}</h4>
                </div>
		        
	        </div>
        </div>
		<div class="container">
			<div class="c-layout-sidebar-content ">
                <div class="c-shop-product-details-2 c-opt-1">
	                <div class="row">
		                <div class="col-md-6">
                            <div class="c-product-gallery">
                                <div class="c-product-gallery-content">
                                    @if(!empty($products))
                                        @foreach($products->images as $key => $product)
                                            <div class="c-zoom">
                                                <img src="{{ asset('/images/product/'.$product->product_id.'/'.$product->image) }}">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="row c-product-gallery-thumbnail">
                                    @if(!empty($products))
                                        @foreach($products->images as $key => $product)
                                            <div class="col-xs-3 c-product-thumb">
                                                <img src="{{ asset('/images/product/'.$product->product_id.'/'.$product->image) }}">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
		                </div>
                        <div class="col-md-6">
                            <div class="c-product-meta">
                                <div class="c-content-title-1">
                                    <h3 class="c-font-uppercase c-font-bold">{{!empty($products->name) ? $products->name : '-'}}</h3>
                                    <div class="c-line-left"></div>
                                </div>
                                <div class="c-product-review">
                                    <div class="c-product-rating">
                                        <i class="fa fa-star c-font-red"></i>
                                        <i class="fa fa-star c-font-red"></i>
                                        <i class="fa fa-star c-font-red"></i>
                                        <i class="fa fa-star c-font-red"></i>
                                        <i class="fa fa-star-half-o c-font-red"></i>
                                    </div>
                                    <div class="c-product-write-review">
                                        <a class="c-font-red" href="#">Write a review</a>
                                    </div>
                                </div>
                                <div class="c-product-price">RS {{$products->price}}</div>
                                <div class="c-product-short-desc">
                                    {{!empty($products->description) ? $products->description : '-'}}
                                </div>
                                <div class="row c-product-variant">
                                    <div class="col-sm-12 col-xs-12">
                                        <p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Set Type:</p>
                                        <div class="c-product-size">
                                            <select>
                                                <option value="S">{{!empty($products->set_type) ? ucfirst($products->set_type) : ''}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12 c-margin-t-20">
                                        <div class="c-product-color"> 
                                            <p class="c-product-meta-label c-font-uppercase c-font-bold">Total Set:</p>
                                            <select>
                                                <option value="">{{!empty($products->total_set) ? ucfirst($products->total_set) : ''}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
	                </div>
                </div>
                <div class="c-content-box c-size-md c-no-padding c-margin-t-60">
                    <div class="c-shop-product-tab-1" role="tabpanel">
                        <div class="c-product-tab-container">
                            <ul class="nav nav-justified" role="tablist">
                                <li role="presentation" class="active">
                                    <a class="c-font-uppercase c-font-bold" href="#tab-1" role="tab" data-toggle="tab">Description</a>
                                </li>
                                <li role="presentation">
                                    <a class="c-font-uppercase c-font-bold" href="#tab-2" role="tab" data-toggle="tab">Additional Information</a>
                                </li>
                                <!-- <li role="presentation">
                                    <a class="c-font-uppercase c-font-bold" href="#tab-3" role="tab" data-toggle="tab">Reviews (3)</a>
                                </li> -->
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="tab-1"> 
                                <div class="c-product-desc c-center c-opt-2">
                                    <div class="c-product-tab-container">
                                        <p>
                                            {{!empty($products->description) ? $products->description : '-'}}
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="tab-2">
                                <div class="c-product-tab-container">
                                    <p class="c-center"><strong>Sizes:</strong> S, M, L, XL</p><br>
                                    <p class="c-center"><strong>Colors:</strong> Red, Black, Beige, White</p><br/>
                                </div>
                                <div class="c-product-tab-meta-bg c-bg-grey c-center">
                                    <div class="c-product-tab-container">
                                        <p class="c-product-tab-meta"><strong>SKU:</strong> 1410SL</p>
                                        <p class="c-product-tab-meta"><strong>Categories:</strong> <a href="#">Jacket</a>, <a href="#">Winter</a></p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-3">
                                <div class="c-product-tab-container">
                                    <h3 class="c-font-uppercase c-font-bold c-font-22 c-center c-margin-b-40 c-margin-t-40">Reviews for Warm Winter Jacket</h3>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="c-user-avatar">
                                                <img src="../../assets/base/img/content/avatars/team1.jpg"/>
                                            </div>
                                            <div class="c-product-review-name">
                                                <h3 class="c-font-bold c-font-24 c-margin-b-5">Steve</h3>
                                                <p class="c-date c-theme-font c-font-14">July 4, 2015</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="c-product-rating c-right">
                                                <i class="fa fa-star c-font-red"></i>
                                                <i class="fa fa-star c-font-red"></i>
                                                <i class="fa fa-star c-font-red"></i>
                                                <i class="fa fa-star c-font-red"></i>
                                                <i class="fa fa-star-half-o c-font-red"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-product-review-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer
                                            adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                        </p>
                                    </div>
                                    <div class="row c-margin-t-40">
                                        <div class="col-xs-6">
                                            <div class="c-user-avatar">
                                                <img src="../../assets/base/img/content/avatars/team12.jpg"/>
                                            </div>
                                            <div class="c-product-review-name">
                                                <h3 class="c-font-bold c-font-24 c-margin-b-5">John</h3>
                                                <p class="c-date c-theme-font c-font-14">July 4, 2015</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="c-product-rating c-right">
                                                <i class="fa fa-star c-font-red"></i>
                                                <i class="fa fa-star c-font-red"></i>
                                                <i class="fa fa-star c-font-red"></i>
                                                <i class="fa fa-star c-font-red"></i>
                                                <i class="fa fa-star-half-o c-font-red"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-product-review-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer
                                            adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                        </p>
                                    </div>
                                    <div class="row c-margin-t-40">
                                        <div class="col-xs-6">
                                            <div class="c-user-avatar">
                                                <img src="../../assets/base/img/content/avatars/team8.jpg"/>
                                            </div>
                                            <div class="c-product-review-name">
                                                <h3 class="c-font-bold c-font-24 c-margin-b-5">Alice</h3>
                                                <p class="c-date c-theme-font c-font-14">July 4, 2015</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="c-product-rating c-right">
                                                <i class="fa fa-star c-font-red"></i>
                                                <i class="fa fa-star c-font-red"></i>
                                                <i class="fa fa-star c-font-red"></i>
                                                <i class="fa fa-star c-font-red"></i>
                                                <i class="fa fa-star-half-o c-font-red"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-product-review-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer
                                            adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                        </p>
                                    </div>
                                    <div class="c-product-review-input">
                                        <h3 class="c-font-bold c-font-uppercase">Submit your Review</h3>
                                        <p class="c-review-rating-input">Rating:
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </p>
                                        <textarea></textarea>
                                        <button class="btn c-btn c-btn-square c-theme-btn c-font-bold c-font-uppercase c-font-white">Submit Review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div> <!-- END: CONTENT/CONTACT/CONTACT-1 -->

<!-- BEGIN: CONTENT/CONTACT/FEEDBACK-1 -->

</div>
@endsection


