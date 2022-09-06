@props([
    'id',
    'label',
    'class',
])

<div class="{{isset($class) ? $class : 'col-12'}}">
  <div class="mb-3">
    <label class="form-label">{{$label}}</label>     
    <select
      id="{{$id}}"
      class="form-control select2"
      :class="{'form-control select2': true, 'is-invalid': $store.form.validationError.{{$id}}}"
      :style="{ borderColor: $store.form.validationError.{{$id}} ? 'red' : '' }"
    >
      <option value="">{{$label}}</option>
      {{ $slot }}
    </select>
    <template x-if="$store.form.validationError.{{$id}}">
      <div class="invalid-feedback" x-text="$store.form.validationError.{{$id}}"></div>
    </template>
  </div>
</div>