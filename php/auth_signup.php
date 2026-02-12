<?php ?>
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
</head>
<body>
  <div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="container-sm p-5 box-area" style="width: 80%; min-height: 70%; background-color: #fff;">
      <div class="row border border-dark-subtle border-1 shadow-lg">
        <div class="col left-box">
          <div class="logo-container mn-3">
            <img src="../assets/signup-logo.png" alt="logo" class="img-fluid">
          </div>
        </div>
        <div class="col right-box p-4" style="background-color: var(--bg2);">
          <form action="../controller/sign_up_controller.php" method="POST">
            <div class="row align-items-center">
              <div class="header mb-2">
                <p class="text-light fs-4 text-center text-uppercase" style="font-family: var(--font2); letter-spacing: .1em;">Sign up</p>
              </div>

              <div class="mb-3">
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="d-flex align-items-center mb-2">
                      <label for="firstname" class="form-label text-light text-capitalize m-0" style="font-family: var(--font1);">First Name</label>
                    </div>
                    <input type="text" id="firstname" name="fname" class="form-control rounded-1 p-2" placeholder="First Name" required autocomplete="off">
                  </div>

                  <div class="col-md-6">
                    <div class="d-flex align-items-center mb-2">
                      <label for="lastname" class="form-label text-light text-capitalize m-0" style="font-family: var(--font1);">Last Name</label>
                    </div>
                    <input type="text" id="lastname" name="lname" class="form-control rounded-1 p-2" placeholder="Last Name" required autocomplete="off">
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <div class="input-group">
                  <label for="email" class="form-label text-light text-capitalize fs-6 m-0" style="font-family: var(--font1);">Email address</label>
                </div>
                <input type="email" name="email" class="form-control rounded-1 p-2" placeholder="Email" required autocomplete="off">
              </div>

              <div class="mb-3">
                <div class="input-group">
                  <label for="password" class="form-label text-light text-capitalize fs-6 m-0" style="font-family: var(--font1);">Password</label>
                </div>
                <input type="password" name="password" class="form-control rounded-1 p-2" placeholder="Enter password" required>
              </div>

              <div class="mb-3">
                <div class="input-group">
                  <label for="confirm_pass" class="form-label text-light text-capitalize fs-6 m-0">Confirm password</label>
                </div>
                <input type="password" name="confirm_pass" class="form-control rounded-1 p-2" placeholder="Confirm password" required>
              </div>

              <div class="d-grid gap-3 mt-3">
                <button type="submit" class="btn btn-success p-2 w-100" style="font-family: var(--font1); letter-spacing: .1em;">Sign Up</button>
                <button type="submit" class="btn btn-primary p-2 w-100" style="font-family: var(--font1); letter-spacing: .1em;"><i class="fa-brands fa-google me-3"></i>Sign in with google</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>