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
    <input name="name" type="text" class="form-control" id="name">
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
<div class="form-group">
    <label for="appphoto">机器功能 旁边的图</label>
    <input name="appphoto" type="file" id="appphoto">
</div>

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
<div class="form-group">
    <label for="adphoto_1">细节图-1</label>
    <input name="adphoto_1" type="file" id="adphoto_1">
</div>
{{--adphoto_2--}}
<div class="form-group">
    <label for="adphoto_2">细节图-2</label>
    <input name="adphoto_2" type="file" id="adphoto_2">
</div>
{{--adphoto_3--}}
<div class="form-group">
    <label for="adphoto_3">细节图-3</label>
    <input name="adphoto_3" type="file" id="adphoto_3">
</div>
{{--adphoto_4--}}
<div class="form-group">
    <label for="adphoto_4">细节图-4</label>
    <input name="adphoto_4" type="file" id="adphoto_4">
</div>

{{--tocustomer---}}
<div class="form-group">
    <label for="tocustomer">Tocustomer</label>
    <textarea name="tocustomer" class="form-control" id="tocustomer" rows="6"></textarea>
</div>

{{--footerphoto--}}
<div class="form-group">
    <label for="footerphoto">客户经理旁边的图</label>
    <input name="footerphoto" type="file" id="footerphoto">
</div>

{{Form::submit('Create', array('class' => 'btn btn-default'))}}
<a href="{{asset('admin/products')}}">
    <button type="button" class="btn btn-danger">Cancel</button>
</a>
{{ Form::close() }}

@stop