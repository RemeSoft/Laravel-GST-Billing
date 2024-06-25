@if(@session('status'))
<div class="alert alert-success my-2" role="alert">
    {{session('status')}}
</div>
@endif


@if(count($errors))
    <div class="alert alert-danger my-2" role="alert">
        <h4 class="text-danger">Something want wrong.</h4>
        <ul>
            @foreach ($errors->all() as $error)
            <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif