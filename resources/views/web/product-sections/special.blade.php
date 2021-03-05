<!-- Products content -->
@if($result['special']['success']==1)


<section class="products-content" style="display: none">
    <div class="container">
     <div class="products-area">
        <!-- heading -->
        <div class="heading">
          <h2>@lang('website.Special Products of the Week')
           <small class="pull-right">
            <a href="{{url('/shop?type=special')}}">@lang('website.View All')</a>
           </small>
          </h2>
          <hr>
        </div>
        <div class="row">
          @if($result['special']['success']==1)
           @foreach($result['special']['product_data'] as $key=>$products)
            @if($key<=7)
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
              <!-- Product -->
              @include('web.common.product')
              <!-- Product -->
             </div>
            @endif
           @endforeach
           
          @endif
        </div>
    </div>
    </div>
</section>
@endif
