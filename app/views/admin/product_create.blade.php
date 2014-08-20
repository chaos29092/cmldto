@extends('master')
@section('header')
<h2>Product Create</h2>
@stop
@section('content')
{{--创建产品表格--}}
{{ Form::open(array('url' => 'admin/products/create', 'files' => true, 'class' => 'form-horizontal', 'role' => 'form' )) }}

{{--name--}}
<div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" >
</div>

{{--主图--}}
<div class="form-group">
    <label for="mainphoto">页幕主图</label>
    <input name="mainphoto" type="file" id="mainphoto">
</div>

{{--introduction--}}
<div class="form-group">
    <label for="introduction">Introduction</label>
    <textarea name="introduction" class="form-control" id="introduction" rows="6"></textarea>
</div>

{{--appphoto--}}

{{--app--}}
<div class="form-group">
    <label for="app">App</label>
    <textarea name="app" class="form-control" id="app" rows="6"></textarea>
</div>

{{--advantage--}}
<div class="form-group">
    <label for="advantage">Advantage</label>
    <textarea name="advantage" class="form-control" id="advantage" rows="6"></textarea>
</div>

{{--adphoto_1--}}
{{--adphoto_2--}}
{{--adphoto_3--}}
{{--adphoto_4--}}

{{--tocustomer---}}
<div class="form-group">
    <label for="tocustomer">Tocustomer</label>
    <textarea name="tocustomer" class="form-control" id="tocustomer" rows="6"></textarea>
</div>

{{--footerphoto--}}

{{Form::submit('Create', array('class' => 'btn btn-default'))}}
<a href="{{asset('admin/products')}}">
    <button type="button" class="btn btn-danger">Cancel</button>
</a>
{{ Form::close() }}

@stop