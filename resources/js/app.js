import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.store('darkMode', {
    on: false,

    toggle() {
        this.on = ! this.on
    }
})

Alpine.effect(() => {
    console.log('Dark Mode', Alpine.store('darkMode').on);
})

Alpine.start();

import 'pace-js'
import toastr from 'toastr'

window.toastr = toastr

import Swal from 'sweetalert2'
window.Swal = Swal