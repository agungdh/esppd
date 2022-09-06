@props([
    'label',
    'class',
    'value',
])

<div class="{{isset($class) ? $class : 'col-12'}}">
    <div class="mb-3">
      <label class="form-label">{{$label}}</label>     
      <input
        readonly
        type="text"
        class="form-control"
        placeholder="{{$label}}"
        value="{{$value}}"
      />
    </div>
</div>