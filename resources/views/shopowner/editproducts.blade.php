@extends('layouts.auth')

@section('content')
<div class="container">
    <h4 class="text-center lead">Edit product</h4>
    <form method="POST" action="{{route('shopowner.pupdate', $product->product_id)}}">
    {{ method_field('PUT') }}
    @csrf
        <div class="form-row">
            <div class="col">
            <input type="text" name="name" class="form-control" placeholder="{{$product->name}}" value="{{$product->name}}">
            </div>
            <div class="col">
            <input type="text" name="stock" class="form-control" placeholder="{{$product->stock}}" value="{{$product->stock}}">
            </div>
            <div class="col">
            <input type="text" name="price" class="form-control" placeholder="{{$product->price}}" value="{{$product->price}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary my-3">UPDATE</button>
    </form>
</div>
@endsection