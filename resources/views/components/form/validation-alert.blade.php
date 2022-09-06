@props([
    'class',
])

@if ($errors->any())
    <div class="{{isset($class) ? $class : 'col-12'}}">
        <div class="mb-3">
            <div class="alert alert-danger dark" role="alert">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endif