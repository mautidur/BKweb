@include('layouts.header')
@include('layouts.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Patient History</h1>
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
                        <h5 class="card-title">List of Patient History</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Number</th>
                                    <th scope="col">Patient Name</th>
                                    <th scope="col">Symptoms</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Medicine</th>
                                    <th scope="col">Note</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($periksa as $riwayat)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $riwayat['nama'] }}</td>
                                        <td>{{ $riwayat['keluhan'] }}</td>
                                        <td>{{ $riwayat['tgl_periksa'] }}</td>
                                        <td>
                                            @foreach ($riwayat['obat'] as $obat)
                                                {{ $obat['nama_obat'] }}<br>
                                            @endforeach
                                        </td>
                                        <td>{{ $riwayat['catatan'] }}</td>
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
