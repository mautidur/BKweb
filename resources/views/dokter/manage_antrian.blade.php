@include('layouts.header')
@include('layouts.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Patient Examination</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Polyclinics Queue</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Queue</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Symptom</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($daftarPoli as $antrean)
                                    <tr>
                                        <th scope="row">{{ $antrean->no_antrian }}</th>
                                        <td>{{ $antrean->nama }}</td>
                                        <td>{{ $antrean->keluhan }}</td>
                                        <td>
                                            <a href="{{ route('dokter.periksa.form', $antrean->id_pendaftaran) }}" class="btn btn-primary btn-sm">Examinate</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
</main>

<!-- End #main -->
@include('layouts.footer')
