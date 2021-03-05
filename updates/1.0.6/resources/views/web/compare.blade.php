@extends('web.layout')
@section('content')

<div class="container-fuild">
  <nav aria-label="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ URL::to('/')}}">@lang('website.Home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('website.COMPARE PRODUCT')</li>
          </ol>
      </div>
    </nav>
</div> 



<!-- Compare Content -->
<section class="compare-content pro-content">

  <div class="container">
    <div class="page-heading-title">
        <h2> @lang('website.COMPARE PRODUCT') 
        </h2>
     
        </div>
</div>

  <div class="container">
    <div class="row">

      @foreach($result['products'] as $key=>$products)
      <div class="col-lg-6">
          <table class="table">
              <thead>
                <td align="center">
                  <div class="img-div">
                      <img class="img-fluid" src="{{$products['product_data'][0]->image_path}}">
                  </div>

                </td>
              </thead>

              <tbody>
                <tr>
                  <td>
                    <h2 >{{$products['product_data'][0]->products_name}}</h2>
                  </td>

                </tr>
                <tr>
                  <td>
                    <span>@lang('website.Price')&nbsp;:&nbsp;</span>
                    <span class="price-tag">
                      {{Session::get('symbol_left')}}
                      {{$products['product_data'][0]->products_price+0*session('currency_value')}}
                      {{Session::get('symbol_right')}}
                  </span>
                </td>
                </tr>
                <tr>
                  <td>
                    <span>@lang('website.Discount')&nbsp;:&nbsp;</span>
                    <?php
                                                $current_date = date("Y-m-d", strtotime("now"));

                                                $string = substr($products['product_data'][0]->products_date_added, 0, strpos($products['product_data'][0]->products_date_added, ' '));
                                                $date=date_create($string);
                                                date_add($date,date_interval_create_from_date_string($web_setting[20]->value." days"));


                                                $after_date = date_format($date,"Y-m-d");

                                                if($after_date>=$current_date){
                                                }

                                                if(!empty($products['product_data'][0]->discount_price)){
                                                    $discount_price = $products['product_data'][0]->discount_price;
                                                    $orignal_price = $products['product_data'][0]->products_price;

                                                    if(($orignal_price+0)>0){
                              $discounted_price = $orignal_price-$discount_price;
                              $discount_percentage = $discounted_price/$orignal_price*100;
                            }else{
                              $discount_percentage = 0;
                            }
                                              echo "<span style='margin-left:15px' class='discount-tag'>".(int)$discount_percentage."%</span>";
                            }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span>@lang('website.New Price')&nbsp;:&nbsp;</span>
                    <span class="price-tag">
                    {{Session::get('symbol_left')}}
                    {{$products['product_data'][0]->discount_price+0*session('currency_value')}}
                    {{Session::get('symbol_right')}}
                  </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span>@lang('website.Categories')&nbsp;:&nbsp;</span>
                  @php  foreach($products['product_data'][0]->categories as $f) { @endphp
                    {{$f->categories_name}}@if(++$key === count($products['product_data'][0]->categories)) @else, @endif
                  @php   } @endphp
                  </td>
                </tr>
                @php  foreach($products['product_data'][0]->attributes as $f) { @endphp
                <tr>
                  <td>
                    <span>{{$f['option']['name']}}&nbsp;:&nbsp;</span>
                    @php  foreach($f['values'] as $d) { @endphp
                    <span style="margin-left:15px;">{{$d['value']}}</span>
                    @php   } @endphp
                  </td>
                </tr>
                @php   } @endphp
                <tr>
                  <td>
                    <div class="detail-buttons">
                        <a href="{{ URL::to('/product-detail/'.$products['product_data'][0]->products_slug)}}" class="btn btn-secondary">View Details</a>
                        <div class="share"><a href="{{ URL::to("/deletecompare")}}/{{$products['product_data'][0]->products_id}}">Remove &nbsp;<i class="fas fa-trash-alt"></i></a> </div>

                    </div>

                  </td>

                </tr>
              </tbody>
            </table>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
