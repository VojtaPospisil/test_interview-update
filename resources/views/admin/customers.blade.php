@extends('layouts.app')

@section('content')
<div>
    <table>
        <tr>
            <th>Id</th>
            <th>Jméno</th>
            <th>Email</th>
        </tr>
        @foreach( $users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </table>
    <a href="/products"> <button class="btn btn-info">zpět</button> </a>
</div>
@endsection