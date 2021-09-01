
@if(session('alert'))
    <section class='alert alert-success'>{{session('alert')}}</section>
@endif  

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
