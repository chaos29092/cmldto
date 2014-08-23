@extends('admin.master')
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

{{--indexphoto--}}
<div class="form-group">
    <label for="indexphoto">首页产品缩略图，180X135</label>
    <input name="indexphoto" type="file" id="indexphoto">
    <p class="help-block">
        @if($product->indexphoto)
        <img src="{{asset('img/product/'.$product->name.'/'.$product->indexphoto)}}" width="72" height="auto"/>
        @endif
    </p>
</div>

{{--price---}}
<div class="form-group">
    <label for="price">价格</label>
    <input name="price" type="text" class="form-control" id="price" value="{{$product->price}}">
</div>

{{--mrg---}}
<div class="form-group">
    <label for="mrg">主要功能，以 | 来分隔</label>
    <textarea name="mrg" class="form-control" id="mrg" rows="3">{{$product->mrg}}</textarea>
</div>

{{--miniintro---}}
<div class="form-group">
    <label for="miniintro">简介</label>
    <textarea name="miniintro" class="form-control" id="miniintro" rows="4">{{$product->miniintro}}</textarea>
</div>

{{--fnt---}}
<div class="form-group">
    <label for="fnt">适用于诊所，美容院等，也可以写一些自己想写的</label>
    <input name="fnt" type="text" class="form-control" id="fnt" value="{{$product->fnt}}">
</div>

{{--style---}}
<div class="form-group">
    <label for="style">立式or台式</label>
    <input name="style" type="text" class="form-control" id="style" value="{{$product->style}}">
</div>

{{Form::submit('Ok', array('class' => 'btn btn-default'))}}
<a href="{{asset('admin/products')}}">
    <button type="button" class="btn btn-danger">Cancel</button>
</a>
{{ Form::close() }}

@stop