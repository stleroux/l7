@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger py-1 mb-2" role="alert">{{$error}}</div>
    @endforeach
@endif
