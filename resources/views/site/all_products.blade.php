@extends('layouts.site')

@section('content')

 <div class="search-row-wrapper" style="background-image: url(images/bg.jpg)">
    <div class="inner">
    <div class="container">
        <form action="#" method="GET">
            <div class="row search-row" style="margin-top: 0px;">
              
                <div class="col-xl-8 col-sm-8 search-col relative">
                    <div class="search-col-inner">
                        <i class="icon-docs icon-append"></i>
                        <div class="search-col-input">
                            <input type="text" name="ads"
                                   class="form-control has-icon"
                                   placeholder="I'm looking for a ..." value="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-4 search-col">
                    <button class="btn btn-primary btn-search btn-block btn-gradient"><i
                            class="icon-search"></i><strong>Find</strong></button>
                </div>
            </div>
        </form>
    </div>
    </div>
 </div>
 <!-- /.search-row -->
 <div class="main-container">
     <div class="container">
         <div class="row">

             <div class="col-md-12 page-content col-thin-left">

                 <div class="category-list make-grid">

                     <div class="tab-box">
                         <ul class="nav nav-tabs add-tabs tablist" role="tablist">
                             <li class="active nav-item">
                                 <a href="#alladslist" role="tab" data-toggle="tab" class="nav-link active">
                                    <span class="badge badge-pill badge-secondary">228,705</span>
                                    Products
                                </a>
                             </li>
                             
                         </ul>
                         <div class="tab-filter">
                             <select title="sort by" class="selectpicker select-sort-by" data-style="btn-select"
                                     data-width="auto">
                                 <option>Sort by</option>
                                 <option>Price: Low to High</option>
                                 <option>Price: High to Low</option>
                             </select>
                         </div>

                     </div>

                     <div class="listing-filter">
                         
                         <div class="pull-right col-xs-6 text-right listing-view-action"><span
                                 class="list-view"><i class="  icon-th"></i></span> <span
                                 class="compact-view"><i class=" icon-th-list  "></i></span> <span
                                 class="grid-view active"><i class=" icon-th-large "></i></span></div>
                         <div style="clear:both"></div>
                     </div>

                    <div class="tab-content">
                        <div class="tab-pane  active " id="alladslist">
                            <div class="adds-wrapper row no-margin">
                                 
                                @foreach($products as $product)
                                    <div class="item-list">
                                         <div class="row">
                                             <div class="col-md-2 no-padding photobox">
                                                 <div class="add-image">
                                                    <a href="{{route('product-details',['product'=>$product->id])}}">
                                                        <img class="thumbnail no-margin" 
                                                            src="{{$product->image}}" alt="img">
                                                     </a>
                                                 </div>
                                             </div>
                                             <!--/.photobox-->
                                             <div class="col-sm-7 add-desc-box">
                                                 <div class="ads-details" style="width: 100%;">
                                                     <h5 class="add-title">
                                                        <a href="{{route('product-details',['product'=>$product->id])}}"> 
                                                            {{$product->name}}
                                                        </a>
                                                     </h5>
                                                     <span class="info-row"> 
                                                        <span class="add-type business-ads tooltipHere" 
                                                                data-toggle="tooltip" data-placement="right"
                                                                title="{{$product->products->count()}} Prices">
                                                                <i class="fa fa-store"></i>
                                                        </span>
                                                        <span class="date">
                                                            {{$product->products->count()}} Available Prices
                                                        </span> 
                                                    </span>
                                                </div>
                                             </div>

                                             <div class="col-md-3 text-center price-box">
                                                <h4 class="item-price"> 
                                                    <small>{{currencySymbol()}}</small> 
                                                    <strong>
                                                        {{$product->products->sortBy('price')->first()->price}}
                                                    </strong>
                                                     - 
                                                     <strong>
                                                         {{$product->products->sortByDesc('price')->first()->price}}
                                                     </strong>
                                                </h4>
                                                 <a href="{{route('product-details',['product'=>$product->id])}}" class="btn btn-danger  btn-sm"> 
                                                    <i class="fa fa-money-bill-alt"></i> 
                                                    <span>See Prices</span>
                                                 </a>
                                             </div>
                                         </div>
                                    </div>
                                @endforeach

                             </div>
                         </div>
                             
                     </div>

                 </div>


                 <div class="pagination-bar pull-right">
                    {{ $products->appends(request()->query())->links() }}
                 </div>

             </div>

         </div>
     </div>
 </div>

@endsection