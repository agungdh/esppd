@props([
    'class',
])

<template x-if="$store.form.getAllErrors().length > 0">
    <div class="{{isset($class) ? $class : 'col-12'}}">
        <div class="mb-3">
            <div class="alert alert-danger dark" role="alert">
                <template x-for="error in $store.form.getAllErrors()">
                    <p x-text="error"></p>
                </template>
            </div>
        </div>
    </div>
</template>