@extends('admin.layout')
<style>
.wrapper.wrapper2{
	display: block;
}
.wrapper{
	display: none;
}
</style>
<body onload="window.print();">
<div class="wrapper wrapper2">
  <!-- Main content -->
  <section class="invoice" style="margin: 15px;">
      <!-- title row -->
      
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header" style="padding-bottom: 25px">
          <div class="box-body no-padding">
              <form  name='registration' method="get" action="{{url('admin/customers-orders-report')}}">
              <input type="hidden" name="type" value="all">
              <div class="box-body">
              @if(app('request')->input('dateRange'))
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">{{ trans('labels.Date') }}</label>
                    <p>{{app('request')->input('dateRange')}}</p>
                  </div>
                </div>
                @endif
                @if( app('request')->input('products_id'))
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">{{ trans('labels.Products') }}</label>
                        @foreach($result['products'] as $product)
                        <p> @if( app('request')->input('products_id' ) == $product->products_id) {{ $product->products_name }} @endif </p>
                        @endforeach
                        
                  </div>
                </div>
                @endif

                
      
            </div>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>{{ trans('labels.Date') }}</th>
                  <th>{{ trans('labels.In Stock') }}</th>
                  <th>{{ trans('labels.Out Stock') }}</th>
                  <th>{{ trans('labels.Min Stock') }}</th>
                  <th>{{ trans('labels.Max Stock') }}</th>
                  <th>{{ trans('labels.Current Stock') }}</th>
                  <th>{{ trans('labels.Reference') }}</th>
                </tr>
              </thead>
                <tbody>
                @foreach ($result['reports'] as  $key=>$report)
                
                    <tr>
                        <td>{{ date('m/d/Y', strtotime($report->created_at)) }}</td>
                        @if($report->stock_type == 'in')
                        <td>{{ $report->stock }}</td>
                        @else
                        <td>---</td>                            
                        @endif

                        @if($report->stock_type == 'out')
                        <td>{{ $report->stock }}</td>
                        @else
                        <td>---</td>                            
                        @endif


                        @if($report->min_level)
                        <td>{{ $report->min_level }}</td>
                        @else
                        <td>---</td>                            
                        @endif                           


                        @if($report->max_level)
                        <td>{{ $report->max_level }}</td>
                        @else
                        <td>---</td>                            
                        @endif
                        <td>{{$report->current_stock}}</td>    
                          @if($report->reference_code)
                          <td>{{ $report->reference_code }}</td>
                          @else
                          <td>---</td>                            
                          @endif
                        
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->

      <!-- /.row -->


    </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
