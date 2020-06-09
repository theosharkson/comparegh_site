@extends('layouts.site')

@section('content')

    <div class="main-container">
        <div class="container">
            <div class="inner-box ">
                <div class="row">


                    <div class="col-sm-5">
                        <div class="seller-info seller-profile">
                            <div class="row text-center">
                                <div class="col-md-12">
                                    <div class="seller-profile-img">
                                        <img src="{{$product->image}}" class="img-responsive thumbnail" alt="img">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="no-padding link-color uppercase " style="margin-top: 10px"> 
                                        {{$product->name}}
                                    </h3>

                                    <div class="text-muted">
                                        <i class="fa fa-store"></i>
                                        {{$product->products->count()}} Available Prices
                                    </div>
                                    <div class="user-ads-action">
                                        <h2 class="item-price"> 
                                            <small>{{currencySymbol()}}</small> 
                                            <strong>
                                                {{$product->products->sortBy('price')->first()->price}}
                                            </strong>
                                             - 
                                            <small>{{currencySymbol()}}</small>
                                             <strong>
                                                 {{$product->products->sortByDesc('price')->first()->price}}
                                             </strong>
                                        </h2>
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="col-sm-7">

                        <div class="seller-contact-info">

                            <h3 class="no-margin uppercase color-danger"> Compare Prices </h3>

                            <div class="category-list make-list">
                                <div class="adds-wrapper">
                                    
                                    @foreach($product->products->sortBy('price') as $merchant_product) 
                                        <div class="item-list">
                                            <div class="row">
                                                <div class="col-2 no-padding photobox">
                                                    <div class="add-image">
                                                        <a href="ads-details.html">
                                                            <img class="thumbnail no-margin" src="{{$merchant_product->image}}" alt="img">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-8 add-desc-box">
                                                    <div class="ads-details">
                                                        <h5 class="add-title">
                                                            <a href="{{$merchant_product->url}}"> 
                                                                {{$merchant_product->name}}
                                                            </a>
                                                        </h5>
                                                        <span class="info-row"> 
                                                            <span class="add-type business-ads tooltipHere" 
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="{{$merchant_product->merchant->name}} Prices">
                                                                    <i class="fa fa-store"></i>
                                                            </span>
                                                            <span class="date">
                                                                <i class=" icon-clock"> </i> Price as at : {{readableDateTime($merchant_product->updated_at)}} 
                                                            </span>

                                                            <div style="margin-top: 6px; font-weight: bold;">
                                                                
                                                                <img src="{{$merchant_product->merchant->logo}}" 
                                                                    style="height: 30px;">
                                                                From {{$merchant_product->merchant->name}}

                                                            </div>
                                                            
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="col-2 text-right text-center-xs price-box">
                                                    <h2 class="item-price"> 
                                                        <small>{{currencySymbol()}}</small> 
                                                        <strong>
                                                            {{$merchant_product->price}}
                                                        </strong>
                                                    </h2>

                                                    <a href="{{$merchant_product->url}}" class="btn btn-danger  btn-sm"> 
                                                       <i class="fa fa-globe-africa"></i> 
                                                       <span>Goto Website</span>
                                                    </a>
                                                </div>

                                                
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection