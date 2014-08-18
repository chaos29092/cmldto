@extends('master')
@section('header')
<h2>Product Edit</h2>
@stop
@section('content')
{{--修改表格--}}
{{ Form::open(array('url' => 'admin/products/'.$product->id, 'method' => 'PUT', 'files' => true, 'class' => 'form-horizontal', 'role' => 'form' )) }}

<div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" value="{{$product->name}}">
</div>

<!--<div class="form-group">-->
<!--    <label for="name">Category</label>-->
<!--    <input name="category" type="text" class="form-control" id="category" value="{{$product->category}}">-->
<!--</div>-->



<div class="form-group">
    <label for="mainphoto">File input</label>
    <input name="mainphoto" type="file" id="mainphoto">
    <p class="help-block">
        @if($product->mainphoto)
        <img src="{{asset($product->mainphoto)}}" width="72" height="auto" alt=""/>
        @endif
    </p>
</div>




{{Form::submit('Ok', array('class' => 'btn btn-default'))}}
<a href="{{asset('admin/products')}}">
    <button type="button" class="btn btn-danger">Cancel</button>
</a>
{{ Form::close() }}

@stop