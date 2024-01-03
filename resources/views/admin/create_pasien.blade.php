@include('layouts.header')
@include('layouts.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add Patient</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Add More Patients</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Insert Patient's Data</h5>

                        <!-- Advanced Form Elements -->
                        <form method="POST" action="{{ route('admin.create_pasien') }}" class="needs-validation">
                            @csrf
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="row mb-1">
                                <div class="col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" required/>
                                        <label for="nama">Full Name</label>
                                        <div class="invalid-feedback">Please, Name.</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="email" name="email" required/>
                                        <label for="email">Email</label>
                                        <div class="invalid-feedback">is this really an email?</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="no_hp" required/>
                                        <label for="no_hp">Phone Number</label>
                                        <div class="invalid-feedback">this is important</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="no_ktp" required/>
                                        <label for="no_ktp">ID Number</label>
                                        <div class="invalid-feedback">this is also important</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required/>
                                        <label for="password">Password</label>
                                        <div class="invalid-feedback">this is super important</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="alamat" id="alamat" name="alamat" style="height: 100px" required></textarea>
                                        <label for="alamat">Address</label>
                                        <div class="invalid-feedback">important.. that's it.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                        <!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->
@include('layouts.footer')
