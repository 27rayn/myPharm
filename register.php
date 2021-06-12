<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <title>MyPharm-Login</title>
    <link rel="icon" type="image/png" href="Assets/Frame 32.png" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  </head>

  <body>
    <section class="form my-5">
      <div class="container">
        <div class="row align-items-center g-0">
          <div class="col-lg-6">
            <img src="Assets/Login.png" class="img-fluid" alt="" />
          </div>
          <div class="col-lg-6 px-5 pt-5">
            <h1 style="font-size: 38px; font-family: 'Mulish', sans-serif; font-weight: 700" class="py-2">Sign-Up</h1>
            <form>
              <div class="form-row">
                <div class="mb-3">
                  <label for="fname" class="form-label">First Name</label>
                  <input type="text" id="fname" placeholder="First Name" class="form-control rounded-3" name="fname" />
                </div>
              </div>
              <div class="form-row">
                <div class="mb-3">
                  <label for="lname" class="form-label">Last Name (Optional)</label>
                  <input type="text" id="lname" placeholder="Last Name" class="form-control rounded-3" name="lname" />
                </div>
              </div>
              <div class="form-row">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" placeholder="contoh@yahoo.com" class="form-control rounded-3" name="email" />
                </div>
              </div>
              <div class="form-row">
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" placeholder="minimun 8 characters" class="form-control rounded-3" name="Password" />
                </div>
              </div>
              <div class="form-row">
                <div class="mb-3">
                  <label for="password" class="form-label">Re-type Password</label>
                  <input type="password" placeholder="minimun 8 characters" class="form-control rounded-3" name="Re-type Password" />
                </div>
              </div>
              <p>By creating an account you agree to our <a href="#" style="color: dodgerblue">Terms & Privacy</a>.</p>
              <div class="form-row">
                <div class="form">
                  <div class="d-grid my-4">
                    <button type="submit" href="index.html" class="btn btn-primary rounded-3">Sign Up</button>
                  </div>
                </div>
                <div class="form">
                  <div class="row text-center">
                    <div style="color: #c2c2c2; font-size: 16px; font-family: 'Mulish', sans-serif">Or Sign Up With</div>
                  </div>
                  <div class="form" style="margin: 24px">
                    <div class="d-grid">
                      <button class="btn btn-outline-primary rounded-3"><span class="iconify" data-inline="false" data-icon="grommet-icons:google" style="margin-right: 8px; font-size: 24px"></span> Sign Up with Google</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>