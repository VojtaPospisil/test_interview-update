@extends('layouts.app')

@section('content')
    <div class="order_review">
        @foreach($items_ordered as $item)
            <div class="order_review__item">
                <p>{{ $item->product->title }}</p>
                <p>{{ $item->product->price }} Kč</p>
                <button class="btn btn-danger">
                    <a class="delete_from_basket" data-id="{{$item->id}}" data-title="{{$item->product->title}}">
                        <i class="fa fa-trash" aria-hidden="true"><strong> Odstranit</strong></i>
                    </a>
                </button>
            </div>
        @endforeach

        <h2><strong>Celková cena: {{ $total_value }} Kč</strong></h2>
            <div>
                <button class="btn-info">Objednat</button>
                <a href="/shop"><button class="btn-info">Pokračovat v nákupu</button></a>
            </div>
    </div>
    @include('customer.deletemodal')
@endsection