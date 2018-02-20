@extends('layouts.app')

@section('content')
    <div>
        <table>
            <tr>
                <th>Jméno</th>
                <th>Název produktu</th>
                <th>Cena</th>
                <th>Stav</th>
            </tr>
            @foreach( $orders as $order)
                <tr>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->product->title }}</td>
                    <td>{{ $order->product->price }} Kč</td>
                    <td>{{ $order->status }}</td>
                </tr>
            @endforeach
        </table>
        <a href="/products"> <button class="btn btn-info">zpět</button> </a>
    </div>
@endsection