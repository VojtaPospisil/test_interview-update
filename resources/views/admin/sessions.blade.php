@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('succes'))
    <div class="alert alert-success" role="alert">
        <p>{{ Session::get('succes') }}</p>
    </div>
@endif
@if(Session::has('updated'))
    <div class="alert alert-success" role="alert">
        <p>{{ Session::get('updated') }}</p>
    </div>
@endif
@if(Session::has('deleted'))
    <div class="alert alert-success" role="alert">
        <p>{{ Session::get('deleted') }}</p>
    </div>
@endif