@include('layouts.header')
@include('layouts.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add Doctor</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Add More Doctor</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Insert Doctor's Data</h5>

                        <!-- Advanced Form Elements -->
                        <form method="POST" action="{{ route('admin.create_dokter') }}" class="needs-validation">
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
                                        <div class="invalid-feedback">full name...</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="email" name="email" required/>
                                        <label for="email">Email</label>
                                        <div class="invalid-feedback">email pls</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="no_hp" required/>
                                        <label for="no_hp">Nomor HP</label>
                                        <div class="invalid-feedback">Dont forget this one</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required/>
                                        <label for="password">Password</label>
                                        <div class="invalid-feedback">in order to logging in</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="alamat" id="alamat" name="alamat" style="height: 100px" required></textarea>
                                        <label for="alamat">Address</label>
                                        <div class="invalid-feedback">where do u live doc?</div>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="poli" name="id_poli" aria-label="Floating label select example" required>
                                            <option selected disabled>Select Polyclinic</option>
                                            @foreach ($poli as $item)
                                                <option value="{{$item['id']}}">{{ucwords(strtolower($item['nama_poli']))}}</option>
                                            @endforeach
                                        </select>
                                        <label for="poli">Polyclinics</label>
                                        <div class="invalid-feedback">Select Polyclinics</div>
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
