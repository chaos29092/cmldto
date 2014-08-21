@extends('master')
@section('header')
<h2>Product Edit</h2>
@stop
@section('content')
{{--修改表格--}}
{{ Form::open(array('url' => 'admin/products/'.$product->id, 'method' => 'PUT', 'files' => true, 'class' => 'form-horizontal', 'role' => 'form' )) }}

{{--name--}}
<div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" value="{{$product->name}}">
</div>

{{--主图--}}
<div class="form-group">
    <label for="mainphoto">页幕主图</label>
    <input name="mainphoto" type="file" id="mainphoto">
    <p class="help-block">
        @if($product->mainphoto)
        <img src="{{asset('img/product/'.$product->name.'/'.$product->mainphoto)}}" width="72" height="auto"/>
        @endif
    </p>
</div>

{{--introduction--}}
<div class="form-group">
    <label for="introduction">Introduction</label>
    <textarea name="introduction" class="form-control" id="introduction" rows="6">{{$product->introduction}}</textarea>
</div>

{{--appphoto--}}
<div class="form-group">
    <label for="appphoto">机器功能 旁边的图</label>
    <input name="appphoto" type="file" id="appphoto">
    <p class="help-block">
        @if($product->appphoto)
        <img src="{{asset('img/product/'.$product->name.'/'.$product->appphoto)}}" width="72" height="auto"/>
        @endif
    </p>
</div>

{{--app--}}
<div class="form-group">
    <label for="app">App</label>
    <textarea name="app" class="form-control" id="app" rows="6">{{$product->app}}</textarea>
</div>

{{--advantage--}}
<div class="form-group">
    <label for="advantage">Advantage</label>
    <textarea name="advantage" class="form-control" id="advantage" rows="6">{{$product->advantage}}</textarea>
</div>

{{--adphoto_1--}}
<div class="form-group">
    <label for="adphoto_1">细节图-1</label>
    <input name="adphoto_1" type="file" id="adphoto_1">
    <p class="help-block">
        @if($product->adphoto_1)
        <img src="{{asset('img/product/'.$product->name.'/'.$product->adphoto_1)}}" width="72" height="auto"/>
        @endif
    </p>
</div>
{{--adphoto_2--}}
<div class="form-group">
    <label for="adphoto_2">细节图-2</label>
    <input name="adphoto_2" type="file" id="adphoto_2">
    <p class="help-block">
        @if($product->adphoto_2)
        <img src="{{asset('img/product/'.$product->name.'/'.$product->adphoto_2)}}" width="72" height="auto"/>
        @endif
    </p>
</div>
{{--adphoto_3--}}
<div class="form-group">
    <label for="adphoto_3">细节图-3</label>
    <input name="adphoto_3" type="file" id="adphoto_3">
    <p class="help-block">
        @if($product->adphoto_3)
        <img src="{{asset('img/product/'.$product->name.'/'.$product->adphoto_3)}}" width="72" height="auto"/>
        @endif
    </p>
</div>
{{--adphoto_4--}}
<div class="form-group">
    <label for="adphoto_4">细节图-4</label>
    <input name="adphoto_4" type="file" id="adphoto_4">
    <p class="help-block">
        @if($product->adphoto_4)
        <img src="{{asset('img/product/'.$product->name.'/'.$product->adphoto_4)}}" width="72" height="auto"/>
        @endif
    </p>
</div>

{{--tocustomer---}}
<div class="form-group">
    <label for="tocustomer">Tocustomer</label>
    <textarea name="tocustomer" class="form-control" id="tocustomer" rows="6">{{$product->tocustomer}}</textarea>
</div>

{{--footerphoto--}}
<div class="form-group">
    <label for="footerphoto">客户经理旁边的图</label>
    <input name="footerphoto" type="file" id="footerphoto">
    <p class="help-block">
        @if($product->footerphoto)
        <img src="{{asset('img/product/'.$product->name.'/'.$product->footerphoto)}}" width="72" height="auto"/>
        @endif
    </p>
</div>

{{Form::submit('Ok', array('class' => 'btn btn-default'))}}
<a href="{{asset('admin/products')}}">
    <button type="button" class="btn btn-danger">Cancel</button>
</a>
{{ Form::close() }}

@stop