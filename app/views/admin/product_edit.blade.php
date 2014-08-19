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
        <img src="{{asset($product->mainphoto)}}" width="72" height="auto" alt=""/>
        @endif
    </p>
</div>

{{--introduction--}}
<div class="form-group">
    <label for="introduction">Introduction</label>
    <textarea name="introduction" class="form-control" id="introduction" rows="6">{{$product->introduction}}</textarea>
</div>

{{--appphoto--}}

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
{{--adphoto_2--}}
{{--adphoto_3--}}
{{--adphoto_4--}}

{{--tocustomer---}}
<div class="form-group">
    <label for="tocustomer">Tocustomer</label>
    <textarea name="tocustomer" class="form-control" id="tocustomer" rows="6">{{$product->tocustomer}}</textarea>
</div>

{{--footerphoto--}}

{{Form::submit('Ok', array('class' => 'btn btn-default'))}}
<a href="{{asset('admin/products')}}">
    <button type="button" class="btn btn-danger">Cancel</button>
</a>
{{ Form::close() }}

@stop