@props([
    'id',
    'type',
    'label',
    'class',
])

<div class="{{isset($class) ? $class : 'col-12'}}">
    <div class="mb-3">
      <label class="form-label">{{$label}}</label>     
      <input
        type="{{$type}}"
        :class="{'form-control': true, 'is-invalid': $store.form.validationError.{{$id}}}"
        :style="{ borderColor: $store.form.validationError.{{$id}} ? 'red' : '' }"
        x-model.lazy="$store.form.data.{{$id}}"
        placeholder="{{$label}}"
      />
      <template x-if="$store.form.validationError.{{$id}}">
        <div class="invalid-feedback" x-text="$store.form.validationError.{{$id}}"></div>
      </template>
    </div>
</div>