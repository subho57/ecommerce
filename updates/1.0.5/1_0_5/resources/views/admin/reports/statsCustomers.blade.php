@extends('admin.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>{{ trans('labels.Customer Report') }} <small>{{ trans('labels.Customer Report') }}...</small> </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li class="active">{{ trans('labels.Customer Report') }}</li>
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
            <h3 class="box-title">{{ trans('labels.Customer Report') }} </h3>
          </div>

          <!-- /.box-header -->
          <div class="box-body">

            <div class="row">
              <div class="col-xs-12">

              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>{{ trans('labels.Ranking in Orders') }}</th>
                      <th>{{ trans('labels.CustomerName') }}</th>
                      <th>{{ trans('labels.Email') }}</th>
                      <th>{{ trans('labels.Phone') }}</th>
                      <th>{{ trans('labels.Member Since') }}</th>
                      <th>{{ trans('labels.# of orders') }}</th>
                      <th>{{ trans('labels.TotalPurchased') }}</th>
                      <!-- <th>{{ trans('labels.View') }}</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  @if(count($result['cusomters'])>0)
                    @foreach ($result['cusomters'] as $key=>$orderData)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $orderData->first_name }} {{ $orderData->last_name }}</td>
                            <td> {{ $orderData->email }}</td>
                            <td>{{ $orderData->country_code }} {{ $orderData->phone }}</td>
                            <td> {{ $orderData->created_at }}</td>
                            <td> {{ $orderData->total_orders }}</td>
                            <td>@if(!empty($result['commonContent']['currency']->symbol_left)) {{$result['commonContent']['currency']->symbol_left}} @endif {{ $orderData->price }} @if(!empty($result['commonContent']['currency']->symbol_right)) {{$result['commonContent']['currency']->symbol_right}} @endif</td>
                            <!-- <td><a href="{{ URL::to('admin/customers/edit')}}/{{$orderData->id}}" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td> -->
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
