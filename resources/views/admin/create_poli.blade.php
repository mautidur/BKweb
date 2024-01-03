@include('layouts.header')
@include('layouts.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add Polyclinic</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Add More Polyclinic</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Insert Polyclinic Data</h5>

                        <!-- Advanced Form Elements -->
                        <form method="POST" action="{{ route('admin.create_poli') }}" class="needs-validation">
                            @csrf
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="row mb-1">
                                <div class="col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama_poli" name="nama_poli" placeholder="nama_poli" required/>
                                        <label for="nama_poli">Poly's Name</label>
                                        <div class="invalid-feedback">It's not human</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="keterangan" required/>
                                        <label for="keterangan">Description</label>
                                        <div class="invalid-feedback">what do you think Polyclinic are?</div>
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
