@include('layouts.header')
@include('layouts.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Patient Examination</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Examination</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Insert Examination Data</h5>

                        <!-- Advanced Form Elements -->
                        <form method="POST" action="{{route('dokter.periksa')}}" class="needs-validation">
                            @csrf
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <input type="hidden" name="id_daftar_poli" id="id_daftar_poli" value="{{$id}}">
                            <input type="hidden" name="selected_obat_ids" id="selected_obat_ids" value="">
                            <div class="row mb-1">
                                <div class="col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="tgl_periksa" name="tgl_periksa" placeholder="tgl_periksa" value="{{$tgl_sekarang}}" readonly/>
                                        <label for="tgl_periksa">Examination Data</label>
                                        <div class="invalid-feedback">insert exam data</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="nama_pasien" value="{{$pasien->nama}}" readonly/>
                                        <label for="nama_pasien">Patient Name</label>
                                        <div class="invalid-feedback">name</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="keluhan" name="keluhan" placeholder="keluhan" value="{{$pasien->keluhan}}" readonly/>
                                        <label for="keluhan">Symtoms</label>
                                        <div class="invalid-feedback">pls insert</div>
                                    </div>
                                    <div class="form-floating mb-3 pt-1">
                                        <select class="form-select" id="obat" name="obat[]" multiple aria-label="multiple select example" style="height: 100px">
                                            @foreach($obat as $obat)
                                                <option value="{{$obat->harga}}" data-id="{{$obat->id}}">{{$obat->nama_obat}}</option>
                                            @endforeach
                                        </select>
                                        <label for="obat">Medicine</label>
                                        <div class="invalid-feedback">Select Medicine</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="catatan" id="catatan" name="catatan" style="height: 100px" required></textarea>
                                        <label for="catatan">Note</label>
                                        <div class="invalid-feedback">Insert Note Here</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="biaya_periksa" name="biaya_periksa" placeholder="biaya_periksa" readonly/>
                                                <label for="biaya_periksa">Exam Price</label>
                                                <div class="invalid-feedback">Insert Exam Price</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 py-2 d-flex justify-content-end">
                                            <div class="form-floating mb-3">
                                                <button type="button" class="btn btn-warning" id="btnCekBiaya">Check Price</button>
                                            </div>
                                        </div>
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
<script>
    document.getElementById('btnCekBiaya').addEventListener('click', function() {
        const selectedOptions = Array.from(document.querySelectorAll('#obat option:checked'));

        const selectedObats = selectedOptions.map(option => ({
            id: option.dataset.id,
            harga: parseFloat(option.value)
        }));

        const totalBiayaObat = selectedObats.reduce((total, obat) => total + obat.harga, 0);

        const biayaPeriksaTetap = 150000;

        const totalBiayaPeriksa = totalBiayaObat + biayaPeriksaTetap;

        document.getElementById('biaya_periksa').value = totalBiayaPeriksa;

        const selectedId = selectedObats.map(obat => obat.id);

        document.getElementById('selected_obat_ids').value = selectedId.join(',');

    });
</script>
@include('layouts.footer')
