<div>
    @if (Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif
    
    @if (Session::has('error'))
        <p class="alert alert-danger">{{ Session::get('error') }}</p>
    @endif

    @if($errors->any())
        {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
    @endif
</div>