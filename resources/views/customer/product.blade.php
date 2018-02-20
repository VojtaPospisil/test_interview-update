@extends('layouts.app')

@section('content')
    <div>
        <div class="shop__header">
            <p>
                <a class="shop__shoping_basket" href="order_review"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                @if( isset($items_ordered) && $items_ordered > 0)
                    <span class="items_counter"><strong>{{ $items_ordered }}</strong></span>
                @endif
            </p>
        </div>
            @if(Session::has('item_added') && isset($items_ordered) && $items_ordered > 0)
                <div class="alert alert-success" role="alert">
                    <p>{{ Session::get('item_added') }}</p>
                </div>
            @endif
    </div>
<div>
    <div class="row m-2">
            @foreach($products as $product)
                <div class="product col-m-3 m-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $product -> title }}</h4>
                            <img class="product__img" src="{{ $product->image_path }}" alt="product">
                            <h5>Cena: {{ $product -> price }} Kč</h5>
                            <p>Popis: {{ $product -> description }}</p>
                            <form class="form_control" action="/buy" method="post">
                                {{ csrf_field() }}
                                <input data-productid="{{ $product -> product_id }}"  type="hidden" name="product_id" class="product_id" value="{{ $product -> id }}">
                                <input data-user="{{ Auth::user()['id'] }}"  type="hidden" name="user_id" class="user_id" value="{{ Auth::user()['id'] }}">
                                <input type="submit" class="buy btn btn-primary btn-sm" value="Koupit">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
</div>

@endsection