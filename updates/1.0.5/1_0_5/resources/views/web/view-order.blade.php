@extends('web.layout')
@section('content')

<div class="container-fuild">
  <nav aria-label="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ URL::to('/')}}">@lang('website.Home')</a></li>
            <li class="breadcrumb-item active"><a href="{{ URL::to('/orders')}}">@lang('website.orders')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('website.Order information')</li>
          </ol>
      </div>
    </nav>
</div> 

<!--My Order Content -->
<section class="order-two-content pro-content">
  <div class="container">
    <div class="page-heading-title">
        <h2>   @lang('website.Order information')
        </h2>
     
        </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12 col-lg-3 ">
      <div class="heading">
          <h2>
              @lang('website.My Account')
          </h2>
          <hr >
        </div>

        @if(Auth::guard('customer')->check())
        <ul class="list-group">
            <li class="list-group-item">
                <a class="nav-link" href="{{ URL::to('/profile')}}">
                    <i class="fas fa-user"></i>
                  @lang('website.Profile')
                </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link" href="{{ URL::to('/wishlist')}}">
                    <i class="fas fa-heart"></i>
                 @lang('website.Wishlist')
                </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link" href="{{ URL::to('/orders')}}">
                    <i class="fas fa-shopping-cart"></i>
                  @lang('website.Orders')
                </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link" href="{{ URL::to('/shipping-address')}}">
                    <i class="fas fa-map-marker-alt"></i>
                 @lang('website.Shipping Address')
                </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link" href="{{ URL::to('/logout')}}">
                    <i class="fas fa-power-off"></i>
                  @lang('website.Logout')
                </a>
            </li>
          </ul>
          @elseif(!empty(session('guest_checkout')) and session('guest_checkout') == 1)
          <ul class="list-group">
            <li class="list-group-item">
                <a class="nav-link" href="{{ URL::to('/orders')}}">
                    <i class="fas fa-shopping-cart"></i>
                  @lang('website.Orders')
                </a>
            </li>
          </ul>
          @endif
    </div>
    <div class="col-12 col-lg-9 ">
      

        <div class="row">
          <div class="col-12 col-md-5">
              <div class="heading">
                <h2>                  
                    @lang('website.orderID')&nbsp;{{$result['orders'][0]->orders_id}}
                </h2>
                <hr >
              </div>

              <table class="table order-id">
                  <tbody>
                      <tr class="d-flex">
                        <td class="col-6 col-md-6">@lang('website.orderStatus')</td>
                        @if($result['orders'][0]->orders_status_id == '1')
                          <td class="col-6 col-md-6">
                            <span class="badge badge-primary">{{$result['orders'][0]->orders_status}}</span>
                          </td>
                        @elseif($result['orders'][0]->orders_status_id == '2')
                        <td class="col-6 col-md-6">
                            <span class="badge badge-success">{{$result['orders'][0]->orders_status}}</span>
                        </td>
                        @elseif($result['orders'][0]->orders_status_id == '3')
                        <td class="col-6 col-md-6">
                            <span class="badge badge-danger">{{$result['orders'][0]->orders_status}}</span>
                        </td>
                        @else
                        <td class="col-6 col-md-6">
                          <span class="badge badge-warning">{{$result['orders'][0]->orders_status}}</span>
                        </td>
                        @endif
                      </tr>
                      <tr class="d-flex">
                          <td class="col-6 col-md-6">Order Date</td>
                          <td  class="underline col-6 col-md-6" align="left">{{ date('d/m/Y', strtotime($result['orders'][0]->date_purchased))}}</td>
                        </tr>
                    </tbody>
              </table>

          </div>
          <div class="col-12 col-md-7">
              <div class="heading">
                  <h2>
                
                      Shipping Details
                 
                  </h2>
                  <hr >
                </div>

              <table class="table order-id">
                  <tbody>
                      <tr class="d-flex">
                        <td class="address col-12 col-md-6">{{$result['orders'][0]->delivery_name}}</td>


                      </tr>
                      <tr class="d-flex">
                          <td  class="address col-12 col-md-12">{{$result['orders'][0]->delivery_street_address}}, {{$result['orders'][0]->delivery_city}}, {{$result['orders'][0]->delivery_state}},
                          {{$result['orders'][0]->delivery_postcode}},  {{$result['orders'][0]->delivery_country}}</td>

                        </tr>
                    </tbody>
              </table>

          </div>
        </div>

        <div class="row">

            <div class="col-12 col-md-5">
                <div class="heading">
                    <h2>
                    
                        @lang('website.Billing Detail')
                   
                    </h2>
                    <hr >
                  </div>

                <table class="table order-id">
                  <tbody>
                      <tr class="d-flex">
                        <td class="address col-12">{{$result['orders'][0]->billing_name}}</td>
                      </tr>
                      <tr  class="d-flex">
                          <td class="address col-12">{{$result['orders'][0]->billing_street_address}}, {{$result['orders'][0]->billing_city}}, {{$result['orders'][0]->billing_state}},
                          {{$result['orders'][0]->billing_postcode}},  {{$result['orders'][0]->billing_country}}</td>
                        </tr>
                    </tbody>
              </table>

            </div>
            <div class="col-12 col-md-7">
                <div class="heading">
                    <h2>                     
                         @lang('website.Payment/Shipping Method')                      
                    </h2>
                    <hr>
                  </div>

                <table class="table order-id">
                    <tbody>
                        <tr class="d-flex">
                          <td class="col-6">@lang('website.Shipping Method')</td>
                          <td class="col-6">{{$result['orders'][0]->shipping_method}}</td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-6">@lang('website.Payment Method')</td>
                            <td class="underline col-6">{{$result['orders'][0]->payment_method}}</td>
                          </tr>
                      </tbody>
                </table>

            </div>
          </div>
          
          @if($result['commonContent']['settings']['is_enable_location'] == 1)
            @if($result['orders'][0]->orders_status_id == '7' )
              @if($result['orders'][0]->deliveryboyinfo)
              <div class="row">
                <div class="col-12 col-md-12">
                  <div class="heading">
                    <h2>                     
                        @lang('website.DeliveryboyInfo')  
                        
                        <button class="btn btn-success" data-toggle="modal" data-target="#mapModal">
                          @lang('website.Track') <i class="fas fa-location-arrow"></i> </button>
                    </h2>
                    <hr>
                  </div>
                  
                  <table class="table order-id">
                      <tbody>
                          <tr class="d-flex">
                            <td class="col-6">@lang('website.DeliveryboyName')</td>
                            <td class="col-6">{{$result['orders'][0]->deliveryboyinfo->first_name}} {{$result['orders'][0]->deliveryboyinfo->last_name }} </td>
                          </tr>
                          <tr class="d-flex">
                              <td class="col-6">@lang('website.Contact#')</td>
                              <td class="underline col-6">{{$result['orders'][0]->deliveryboyinfo->phone}}</td>
                            </tr>
                        </tbody>
                  </table>
    
                </div>
              </div>
              
              @endif
            @endif
          @endif

          @if(count($result['bankdetail'])>0)
          <div class="row">
        <div class="col-12 col-lg-12 ">
      
          <div class="heading">
            <h2>                    
                  @lang('website.Bank Detail')                     
            </h2>
            <hr style="
            margin-bottom: 0;
        ">
          </div>

          <div class="row">
            <div class="col-12 col-md-4">
                
  
                <table class="table order-id">
                    <tbody>
                          <tr class="d-flex">
                            <td class="col-6 col-md-6" >@lang('website.Bank')</td>
                            <td class="underline col-6 col-md-6" align="left" >{{@$result['bankdetail']['bank_name'] ?: '---' }}</td>
                          </tr>
                          <tr class="d-flex">
                            <td class="col-6 col-md-6" >@lang('website.account_name')</td>
                              <td class="col-6 col-md-6" >
                              {{@$result['bankdetail']['account_name'] ?: '---' }}
                              </td>
                            </tr>
                      </tbody>
                </table>
            </div>
            <div class="col-12 col-md-4">

                <table class="table order-id">
                  <tbody>
                      
                      <tr class="d-flex">
                        <td class="col-6 col-md-6" >@lang('website.account_number')</td>
                        <td class="underline col-6 col-md-6" align="left" >{{@$result['bankdetail']['account_number'] ?: '---' }}</td>
                      </tr>
                      <tr class="d-flex">
                        <td class="col-6 col-md-6" >@lang('website.short_code')</td>
                          <td class="col-6 col-md-6" >
                          {{@$result['bankdetail']['short_code'] ?: '---' }}
                          </td>
                        </tr>
                    </tbody>
              </table>
            </div>
            <div class="col-12 col-md-4">

              <table class="table order-id">
                <tbody>
                    
                      <tr class="d-flex">
                        <td class="col-6 col-md-6" >@lang('website.iban')</td>
                          <td class="col-6 col-md-6" >
                          {{@$result['bankdetail']['iban'] ?: '---' }}
                          </td>
                        </tr>
                      <tr class="d-flex">
                        <td class="col-6 col-md-6" >@lang('website.swift')</td>
                        <td class="underline col-6 col-md-6" align="left" >{{@$result['bankdetail']['swift'] ?: '---' }}</td>
                      </tr>
                  </tbody>
            </table>
  
            </div>
            
          </div>
  
          
  
  
        <!-- ............the end..... -->
      </div>
    </div>
      @endif

        <table class="table items">

  
          <tbody>
            <?php
                $price = 0;
            ?>
            @if(count($result['orders']) > 0)
                @foreach( $result['orders'][0]->products as $products)
                <?php
                    $price+= $products->final_price;
                ?>
            <tr class="d-flex responsive-lay">
              <td class="col-12 col-md-2">
                <img class="img-fluid order-img" src="{{asset('').$products->image}}" alt="{{$products->products_name}}" class="mr-3">
              </td>
              <td class="col-12 col-md-3 item-detail-left">
                <div class="text-body">
                      <h4>{{$products->products_name}}<br>
                  <small>
                         @if(count($products->attributes) >0)
                            <ul>
                              @foreach($products->attributes as $attributes)
                                  <li>{{$attributes->products_options}}<span>{{$attributes->products_options_values}}</span></li>
                              @endforeach
                            </ul>
                          @endif
                  </small></h4>

                </div>

                  </div>
              </td>
              <td class="tag-color col-12 col-md-3">{{Session::get('symbol_left')}}{{$products->final_price/$products->products_quantity*session('currency_value')}}{{Session::get('symbol_right')}}</td>
              <td class="col-12 col-md-2">
                  <div class="input-group">
                      <input name="quantity[]" type="text" readonly value="{{$products->products_quantity}}" class="form-control qty" min="1" max="300">

                  </div>
              </td>
              <td  class="tag-s col-12 col-md-2">{{Session::get('symbol_left')}}{{$products->final_price*session('currency_value')}}{{Session::get('symbol_right')}}</td>
            </tr>
            @endforeach
        @endif


          </tbody>
        </table>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                @if(count($result['orders'][0]->statusess)>0)
                    <div style="border-radius:5px;"class="card">
                        <div style="background: none;" class="card-header">
                          @lang('website.Comments')
                        </div>
                        <div class="card-body">
                        @foreach($result['orders'][0]->statusess as $key=>$statusess)
                            @if(!empty($statusess->comments))
                                @if(++$key==1)
                                  <h6>@lang('website.Order Comments'): {{ date('d/m/Y', strtotime($statusess->date_added))}}</h6>

                                @else
                                  <h6>@lang('website.Admin Comments'): {{ date('d/m/Y', strtotime($statusess->date_added))}}</h6>
                                @endif
                                <p class="card-text">{{$statusess->comments}}</p>
                            @endif
                        @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>


      <!-- ............the end..... -->
    </div>
  </div>
</div>

<div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-modal="true">
       
  <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
    <div class="modal-content">
        <div class="modal-body">

            <div class="container">
                <div class="row align-items-center">                   
             
                <div class="form-group">
<input type="text" id="pac-input" name="address_address" class="form-control map-input">
</div>
<div id="address-map-container" style="width:100%;height:400px; ">
<div style="width: 100%; height: 100%" id="map"></div>
</div>
              </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
          </div>
          <div class="modal-footer">
   
   <button type="button" class="btn btn-primary" onclick="setUserLocation()"><i class="fas fa-location-arrow"></i></button>
   <button type="button" class="btn btn-secondary" onclick="saveAddress()">Save</button>
 </div>
    </div>
  </div>
  </div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?key=<?=$result['commonContent']['settings']['google_map_api']?>&libraries=places&callback=initialize" async defer></script>
    <script>
      var markers;
      var myLatlng;
      var map;
      var geocoder;
     function setUserLocation(){
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            myLatlng = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            markers.setPosition(myLatlng);
            map.setCenter(myLatlng);

          }, function() {
          });
        } 
     } 
     function saveAddress(){
      var latlng = markers.getPosition();
      geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
            if (results[0]) {
             var street = "";
             var state = "";
             var country = "";
             var city = "";
             var postal_code = "";

                for (var i = 0; i < results[0].address_components.length; i++) {
                    for (var b = 0; b < results[0].address_components[i].types.length; b++) {
                        switch (results[0].address_components[i].types[b]) {
                            case 'locality':
                                city = results[0].address_components[i].long_name;
                                break;
                            case 'administrative_area_level_1':
                                state = results[0].address_components[i].long_name;
                                break;
                            case 'country':
                                country = results[0].address_components[i].long_name;
                                break;
                            case 'postal_code':
                              postal_code =  results[0].address_components[i].long_name; 
                              break;
                            case 'route':
                              if (street == "") {
                                street = results[0].address_components[i].long_name;
                              }
                            break;

                            case 'street_address':
                              if (street == "") {
                                street += ", " + results[0].address_components[i].long_name;
                              }
                            break;
                        }
                    }
                }
                $("#postcode").val(postal_code);
                $("#street").val(street);
                $("#city").val(city);

                $("#latitude").val(markers.getPosition().lat());
                $("#longitude").val(markers.getPosition().lng());

                // $("#entry_country_id").val(country);
               
                $("#location").val(latlng);

                $("#entry_country_id option").filter(function() {
                  //may want to use $.trim in here
                  return $(this).text() == country;
                }).prop('selected', true);
                if(getZones("no_loader")){
                  $("#entry_zone_id option").filter(function() {
                    //may want to use $.trim in here
                    return $(this).text() == state;
                  }).prop('selected', true);
                }
                $('#mapModal').modal('hide');

            } else {
              console.log('No results found');
            }
          } else {
            console.log('Geocoder failed due to: ' + status);
          }
        });
     }

     function initialize() {
      defaultPOS = {
              lat: <?=$result['commonContent']['setting'][127]->value?>,
              lng: <?=$result['commonContent']['setting'][128]->value?>
            };
      map = new google.maps.Map(document.getElementById('map'), {
          center: defaultPOS,
          zoom: 13,
          mapTypeId: 'roadmap'
        });
      geocoder = new google.maps.Geocoder;
      markers = new google.maps.Marker({
          map: map,
          draggable:true,
          position: defaultPOS
        });

        
        
        var infowindow = new google.maps.InfoWindow;
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

          searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          var bounds = new google.maps.LatLngBounds();

          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };
            console.log(place.geometry.location);
            // Create a marker for each place.
            markers.setPosition(place.geometry.location);
            markers.setTitle(place.name);
            

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>

@endsection
