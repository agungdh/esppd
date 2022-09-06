@props([
    'id',
    'type',
    'placeholder',
    'model',
])

<div class="mb-3">
    <label class="form-label" for="{{$id}}">{{$placeholder}}</label>
    @php
        $class = 'form-control';
        $class .= $errors->has($id) ? ' is-invalid' : null;
    @endphp
    @switch($type)
        @case('text')
            {{Form::text($id, null, [
                'id' => $id,
                'placeholder' => $placeholder,
                'class' => $class,
            ])}}    
            @break
        @case('email')
            {{Form::email($id, null, [
                'id' => $id,
                'placeholder' => $placeholder,
                'class' => $class,
            ])}}    
            @break
        @case('password')
            {{Form::password($id, [
                'id' => $id,
                'placeholder' => $placeholder,
                'class' => $class,
            ])}}    
            @break
        @case('file')
            {{Form::file($id, [
                'id' => $id,
                'placeholder' => $placeholder,
                'class' => $class,
            ])}}    
            @break
        @case('number')
            {{Form::number($id, null, [
                'id' => $id,
                'placeholder' => $placeholder,
                'class' => $class,
            ])}}    
            @break
        @case('date')
            {{Form::date($id, null, [
                'id' => $id,
                'placeholder' => $placeholder,
                'class' => $class,
            ])}}    
            @break
        @case('time')
            {{Form::time($id, null, [
                'id' => $id,
                'placeholder' => $placeholder,
                'class' => $class,
            ])}}    
            @break
        @default
            
    @endswitch
    @error($id)
        <div class="invalid-feedback">{{$errors->first($id)}}</div>
    @enderror
</div>