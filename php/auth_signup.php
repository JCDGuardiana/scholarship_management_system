<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>@import url('https://fonts.googleapis.com/css2?family=Tilt+Neon&family=Tilt+Warp&display=swap');</style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="../style/style.css" rel="stylesheet">
  <title>Portal</title>
  <title>Signup</title>
</head>
<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="container-sm  p-5" style="width:80%; min-height:70%; background-color:#fff;">
          <div class="row border border-dark border-1 shadow-lg box-area">
              <div class="col-md-6 left-box  d-flex flex-column justify-content-center align-items-center rounded-5 p-5">
                  <div class="logo-container mb-3">
                    <img src="../assets/logo.png" alt="logo" class="img-fluid rounded-5">
                  </div>
                  <p class="p-heading fs-4 text-center text-uppercase" style="font-family: var(--font2); letter-spacing: .1em;">Scholarship Management System</p>
              </div>

              <div class="col-md-6 right-box p-5" style="background-color:#75ba75;">
                <div class="row align-items-center">
                  <div class="greeting-header mb-5">
                    <p class="fs-3 text-light text-center text-uppercase" style="font-family: var(--font2); letter-spacing: .1em;">Login</p>
                  </div>
                  <div class="mb-4 d-inline-flex justify-content-center align-items-center flex-column">
                      <div class="input-group d-flex align-items-center text-alignment-center gap-2 mb-3">
                        <i class="fa-solid fa-envelope fs-4 text-light me-2" style="line-height: 1;"></i>
                        <label for="email" class="form-label mb-1 fs-5 text-light text-uppercase" style="font-family: var(--font1); letter-spacing: .1em; line-height: 1;">Email</label>
                      </div>
                      <input type="email" class="form-control rounded-1 p-2" placeholder="@gmail.com">
                  </div>
                  <div class="mb-4 d-inline-flex justify-content-center align-items-center flex-column">
                      <div class="input-group d-flex align-items-center text-alignment-center gap-2 mb-3">
                        <i class="fa-solid fa-lock me-2 fs-4 text-light" style="line-height: 1;"></i>
                        <label for="password" class="form-label mb-1 fs-5 text-light text-uppercase" style="font-family: var(--font1); letter-spacing: .1em; line-height: 1;">password</label>
                      </div>
                      <input type="password" class="form-control rounded-1 p-2" placeholder="password">
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>