@include('layouts.header')
@include('layouts.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Patient Data</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Edit Patient</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Edit Data</h5>

                        <!-- Advanced Form Elements -->
                        <form method="POST" action="{{route('admin.edit_pasien', ['id' => $pasien->id])}}" class="needs-validation">
                            @csrf
                            @method('PUT')
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="row mb-1">
                                <div class="col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="{{$pasien->nama}}" required/>
                                        <label for="nama">Name</label>
                                        <div class="invalid-feedback">full name pls</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="email" name="email"value="{{$pasien->email}}" required/>
                                        <label for="email">Email</label>
                                        <div class="invalid-feedback">i'll be quiet this time</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="no_hp" value="{{$pasien->no_hp}}" required/>
                                        <label for="no_hp">Phone Number</label>
                                        <div class="invalid-feedback">this too..</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="no_ktp" value="{{$pasien->no_ktp}}" required/>
                                        <label for="no_ktp">ID Number</label>
                                        <div class="invalid-feedback">this also..</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="no_rm" name="no_rm" placeholder="no_rm" value="{{$pasien->no_rm}}" required/>
                                        <label for="no_rm">Records</label>
                                        <div class="invalid-feedback">I'm tired</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="password-lama" name="password-lama"/>
                                        <label for="password-lama">Old Password</label>
                                        <div class="invalid-feedback">the old one</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="password-baru" name="password-baru"/>
                                        <label for="password-baru">New Password</label>
                                        <div class="invalid-feedback">the new one</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="alamat" id="alamat" name="alamat" style="height: 100px" required>{{ $pasien->alamat }}</textarea>
                                        <label for="alamat">Address</label>
                                        <div class="invalid-feedback">Address pls</div>
                                    </div>

                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Edit</button>
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
