@extends('master')
@section('header')
<h2>Products</h2>
<a href="{{asset('admin/products/create')}}">
    <button type="button" class="btn btn-primary">Creat New Product</button>
</a>
@stop
@section('content')

<table class="table-striped table">
    <tr>
        <th>Name</th>
        <th>Is_discount</th>
        <th>Modified</th>
        <th>Operation</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->is_discount }}</td>
        <td>{{ $product->updated_at }}</td>
        <td><a href="{{asset('admin/products/'.$product->id.'/edit')}}">
                <button type="button" class="btn btn-primary">Edit</button>
            </a>
            <a href="{{asset('admin/products/'.$product->id.'/delete')}}">
                <button type="button" class="btn btn-danger">Delete</button>
            </a>
        </td>

    </tr>
    @endforeach

</table>
{{ $products->links(); }}
@stop