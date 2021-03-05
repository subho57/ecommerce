@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> {{ trans('labels.Firebasesetting') }} <small>{{ trans('labels.Firebasesetting') }}...</small> </h1>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
                <li class="active">{{ trans('labels.Firebasesetting') }}</li>
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
                            <h3 class="box-title">{{ trans('labels.Firebasesetting') }} </h3>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box box-info">
                                        <!--<div class="box-header with-border">
                                          <h3 class="box-title">Setting</h3>
                                        </div>-->
                                        <!-- /.box-header -->
                                        <!-- form start -->
                                        <div class="box-body">
                                            @if( count($errors) > 0)
                                                @foreach($errors->all() as $error)
                                                    <div class="alert alert-success" role="alert">
                                                        <span class="icon fa fa-check" aria-hidden="true"></span>
                                                        <span class="sr-only">{{ trans('labels.Setting') }}Error:</span>
                                                        {{ $error }}
                                                    </div>
                                                @endforeach
                                            @endif

                                            {!! Form::open(array('url' =>'admin/updateSetting', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')) !!}
                                            <br>                                     
                                    
                                            

                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Location Enable') }}

                                            </label>
                                            <div class="col-sm-10 col-md-4">
                                                <select name="{{$result['settings'][127]->name}}" class="form-control">
                                                    <option @if($result['settings'][127]->value == '1')
                                                            selected
                                                            @endif
                                                            value="1"> {{ trans('labels.enable') }}</option>
                                                    <option @if($result['settings'][127]->value == '0')
                                                            selected
                                                            @endif
                                                            value="0"> {{ trans('labels.disable') }}</option>

                                                </select>

                                                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">{{ trans('labels.Location Enable Text') }}</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Google Map API') }}</label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text($result['settings'][104]->name, $result['settings'][104]->value, array('class'=>'form-control', 'id'=>$result['settings'][104]->name)) !!}<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                                    {{ trans('labels.Google Map API Text') }}</span>
                                            </div>
                                        </div>  


                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Firebase API Key') }}</label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text($result['settings'][136]->name, $result['settings'][136]->value, array('class'=>'form-control', 'id'=>$result['settings'][136]->name)) !!}<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                                    {{ trans('labels.Firebase API Key Text') }}</span>
                                            </div>
                                        </div> 
                                        

                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Auth Domain') }}</label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text($result['settings'][131]->name, $result['settings'][131]->value, array('class'=>'form-control', 'id'=>$result['settings'][131]->name)) !!}<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                                    {{ trans('labels.Auth Domain Text') }}</span>
                                            </div>
                                        </div>  

                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Database URL') }}</label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text($result['settings'][132]->name, $result['settings'][132]->value, array('class'=>'form-control', 'id'=>$result['settings'][132]->name)) !!}<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                                    {{ trans('labels.Database URL Text') }}</span>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.ProjectID') }}</label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text($result['settings'][133]->name, $result['settings'][133]->value, array('class'=>'form-control', 'id'=>$result['settings'][133]->name)) !!}<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                                    {{ trans('labels.ProjectID Text') }}</span>
                                            </div>
                                        </div> 
                                        
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Storage Bucket') }}</label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text($result['settings'][134]->name, $result['settings'][134]->value, array('class'=>'form-control', 'id'=>$result['settings'][134]->name)) !!}<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                                    {{ trans('labels.Storage Bucket Text') }}</span>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Messaging Senderid') }}</label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text($result['settings'][135]->name, $result['settings'][135]->value, array('class'=>'form-control', 'id'=>$result['settings'][135]->name)) !!}<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                                    {{ trans('labels.Messaging Senderid Text') }}</span>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.FirebaseAppID') }}</label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text($result['settings'][140]->name, $result['settings'][140]->value, array('class'=>'form-control', 'id'=>$result['settings'][140]->name)) !!}<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                                    {{ trans('labels.FirebaseAppIDText') }}</span>
                                            </div>
                                        </div> 


                                        

                                        <hr>
                                        <h4>{{ trans('labels.Default Map Location') }}</h4>
                                        <hr>

                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Latitude') }}</label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text($result['settings'][128]->name, $result['settings'][128]->value, array('class'=>'form-control', 'id'=>$result['settings'][128]->name)) !!}<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                                    {{ trans('labels.Latitude2text') }}</span>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Longitude') }}</label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text($result['settings'][128]->name, $result['settings'][128]->value, array('class'=>'form-control', 'id'=>$result['settings'][128]->name)) !!}<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                                    {{ trans('labels.Longitude2text') }}</span>
                                            </div>
                                        </div> 

                                        <!-- /.box-body -->
                                        <div class="box-footer text-center">
                                            <button type="submit" class="btn btn-primary">{{ trans('labels.Submit') }} </button>
                                            <a href="{{ URL::to('admin/dashboard/this_month')}}" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
                                        </div>

                                        <!-- /.box-footer -->
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->

            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
