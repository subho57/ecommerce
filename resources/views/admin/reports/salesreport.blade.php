@extends('admin.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>{{ trans('labels.Sales Report') }} <small>{{ trans('labels.Sales Report') }}...</small> </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li class="active">{{ trans('labels.Sales Report') }}</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->

    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
                <div class="col-lg-9 form-inline" id="contact-form">
                    
                    <form method="get" action="{{url('admin/salesreport')}}">
                        <input type="hidden" name="type"  value="id">
                        <input type="hidden"  value="{{csrf_token()}}">
                        
                        <div class="col-xs-3">
                          <div class="form-group">
                            <label for="exampleInputEmail1">{{ trans('labels.Choose start and end date') }}</label>
                            <input class="form-control reservation dateRange" placeholder="{{ trans('labels.Choose start and end date') }}" readonly value="{{app('request')->input('dateRange')}}" name="dateRange" aria-label="Text input with multiple buttons ">
                          </div>
                        </div>

                        <div class="col-xs-2" style="padding-top: 25px">                  
                          <div class="form-group">
                            <button class="btn btn-primary" id="submit" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                            @if(app('request')->input('type') and app('request')->input('type') == 'all')  <a class="btn btn-danger " href="{{url('admin/salesreport')}}"><i class="fa fa-ban" aria-hidden="true"></i> </a>@endif
                          </div>
                        </div>   
                    </form>

                  </div>
                  <div class="box-tools pull-right">
                    <form action="{{ URL::to('admin/customer-orders-print')}}" target="_blank">
                      <input type="hidden" name="page" value="invioce">
                      <input type="hidden" name="customers_id" value="{{app('request')->input('customers_id')}}">
                      <input type="hidden" name="orders_status_id" value="{{app('request')->input('orders_status_id')}}">
                      <input type="hidden" name="deliveryboys_id" value="{{app('request')->input('deliveryboys_id')}}">
                      <input type="hidden" name="dateRange" value="{{app('request')->input('dateRange')}}">
                      <input type="hidden" name="orderid" value="{{app('request')->input('orderid')}}">
                      <button type='submit' class="btn btn-default pull-right"><i class="fa fa-print"></i> {{ trans('labels.Print') }}</button>
                    </form>
                  </div>
                </div>
                

          <!-- /.box-header -->
          <div class="box-body">

            <div class="row">
              <div class="col-xs-12"> 

              <div class="box-tools pull-right">
                <h2 style="margin-top: 0;"><small>{{trans('labels.Total Sale Price')}}:</small> @if(!empty($result['commonContent']['currency']->symbol_left)) {{$result['commonContent']['currency']->symbol_left}} @endif {{$result['price']}} @if(!empty($result['commonContent']['currency']->symbol_right)) {{$result['commonContent']['currency']->symbol_right}} @endif </h2>
              </div>

              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th>{{ trans('labels.Date') }}</th>
                      <th>{{ trans('labels.No of Orders') }}</th>
                      <th>{{ trans('labels.No of Products') }}</th>
                      <th>{{ trans('labels.OrderTotal') }}</th>
                  </tr>
                  </thead>
                  <tbody>
                  @if(count($result['reports']['orders'])>0)
                    @foreach ($result['reports']['orders'] as $key=>$orderData)
                    <tr>
                        <td>{{ $orderData->date_purchased }}</td>
                        <td>{{ $orderData->total_orders }}</td>
                        <td>{{ $orderData->total_products }}</td>  
                        <td>{{ $orderData->total_price }}</td>    
                    </tr>
                    @endforeach
                  @else
                  	<tr>
                    	<td colspan="6"><strong>{{ trans('labels.NoRecordFound') }}</strong></td>
                    </tr>
                  @endif
                  </tbody>
                </table>
              </div>

              <div class="col-xs-12" style="background: #eee;">
                <div class="col-xs-12 col-md-6 text-right">
                    {{ $result['reports']['orders']->appends(\Request::except('type'))->render() }}
                </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Main row -->

    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@endsection
