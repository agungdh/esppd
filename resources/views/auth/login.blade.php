<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.1
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="/assets/coreui-4.2.1/vendors/simplebar/css/simplebar.css">
    <!-- Main styles for this application-->
    @vite('resources/css/app.scss')
    @vite('resources/js/app.js')
  </head>
  <body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body" x-data>
                  <h1>Login</h1>
                  <p class="text-medium-emphasis">Sign In to your account</p>
                  <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="/assets/coreui-4.2.1/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                      </svg></span>
                    <input class="form-control" type="text" placeholder="Username" x-model.lazy="$store.form.data.username">
                  </div>
                  <div class="input-group mb-4"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="/assets/coreui-4.2.1/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                      </svg></span>
                    <input class="form-control" type="password" placeholder="Password" x-model.lazy="$store.form.data.password">
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <button class="btn btn-primary px-4" type="button" x-data @@click="$store.form.save()">Login</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="/assets/coreui-4.2.1/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="/assets/coreui-4.2.1/vendors/simplebar/js/simplebar.min.js"></script>
    <script>
    document.addEventListener('alpine:init', () => {
      Alpine.store('form', {
          data: {},

          async save() {       
            let success = true

            let res = await axios.post('/login', this.data)
              .catch(function (error) {
              success = false

              Swal.fire('Error', error.message, 'error')
            });

            if (success) {
              toastr.success('Sukses', `Login berhasil. Mengarahkan ke halaman utama`)
              window.location = '/'
            }
          },
      })  
    })
    </script>

  </body>
</html>