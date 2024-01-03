@include('layouts.head')
<body>

    <main>
      <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center py-4">
                  <a href="index.html" class="logo d-flex align-items-center w-auto">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-none d-lg-block">Anomalies</span>
                  </a>
                </div><!-- End Logo -->

                <div class="card mb-3">

                  <div class="card-body">

                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Register</h5>
                      <p class="text-center small">it's time to... register your data into our system.</p>
                    </div>

                    <form  method="POST" action="{{ route('register') }}"class="row g-3 needs-validation" novalidate>
                        @csrf
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="col-12">
                            <div class="form-floating mb-1">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" required/>
                                <label for="nama">Full Name</label>
                                <div class="invalid-feedback">this is your name? really?</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-1">
                                <input type="email" class="form-control" id="email" placeholder="email" name="email" required/>
                                <label for="email">Email</label>
                                <div class="invalid-feedback">dude please, use the valid format!</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-1">
                                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="no_hp" required/>
                                <label for="no_hp">Phone Number</label>
                                <div class="invalid-feedback">r u sure u don't have any phone number?</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-1">
                                <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="no_ktp" required/>
                                <label for="no_ktp">ID Number</label>
                                <div class="invalid-feedback">are u even a legal citizen?</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating mb-1">
                                <textarea class="form-control" placeholder="alamat" id="alamat" name="alamat" style="height: 100px" required></textarea>
                                <label for="alamat">Address</label>
                                <div class="invalid-feedback">are you a nomad?</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating mb-1">
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required/>
                                <label for="password">Password</label>
                                <div class="invalid-feedback">come on, it's for your own account</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Register</button>
                        </div>
                        <div class="col-12">
                            <p class="small mb-0">Whoa, already had one? <a href="/login">Login here</a></p>
                        </div>
                    </form>

                  </div>
                </div>

              </div>
            </div>
          </div>

        </section>

      </div>
    </main><!-- End #main -->

@include('layouts.foot')
