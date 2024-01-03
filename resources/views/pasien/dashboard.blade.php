<script src="{{ asset('assets/js/today.js') }}"></script>
<?php
    $namaHariIni = isset($_POST['namaHariIni']) ? $_POST['namaHariIni'] : null;
?>
@include('layouts.head')
<body>

    <main>
      <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center py-4">
                  <a href="index.html" class="logo d-flex align-items-center w-auto">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-none d-lg-block">Anomalies</span>
                  </a>
                </div><!-- End Logo -->

                <div class="card mb-3">

                  <div class="card-body">

                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Clinic Registration</h5>
                      <p class="text-center small">it's time to register yourself to reserve a queue</p>
                    </div>

                    <form  method="POST" action="{{route('pasien.pendaftaran_poli')}}"class="row g-3 needs-validation" novalidate>
                        @csrf
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                            </div>
                        @elseif (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="form-floating mb-1">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                @foreach ($jadwalUnik as $value)
                                    <p>
                                        @if ($value['antrianSaya'] == 0)
                                            There is {{$value['antriSebelum']}} Queue on {{$value['namaPoli']}} (Dr.{{ ucwords(strtolower($value['namaDokter'])) }}) <br>
                                        @else
                                            You are in the {{$value['antrianSaya']}} Queue in {{$value['namaPoli']}} (Dr.{{ ucwords(strtolower($value['namaDokter'])) }}) <br>
                                            There are {{$value['antriSebelum']}} more patient before you
                                        @endif
                                    </p>
                                @endforeach
                            </div>
                        </div>

                        <input type="text" class="form-control" id="id" name="id" placeholder="id" value="{{$pasien->id}}" hidden required/>
                        <div class="col-12">
                            <div class="form-floating mb-1">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="{{$pasien->nama}}" disabled required/>
                                <label for="nama">Full Name </label>
                                <div class="invalid-feedback">Full. Name.</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating mb-1">
                                <select class="form-select" id="jadwal" name="id_jadwal" aria-label="Floating label select example" required>
                                    <option selected disabled>Pick the Schedule</option>
                                    @foreach ($jadwal as $item)
                                        <option value="{{$item['id_jadwal']}}"> {{$item['nama_poli']}} - Dr.{{ ucwords(strtolower($item['nama'])) }} ({{ucwords(strtolower($item['hari']))}}, {{ucwords(strtolower($item['jam_mulai']))}}-{{ucwords(strtolower($item['jam_selesai']))}})</option>
                                    @endforeach
                                </select>
                                <label for="jadwal">Schedule Clinic</label>
                                <div class="invalid-feedback">u need the schedule man</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating mb-1">
                                <input type="text" class="form-control" id="keluhan" name="keluhan" placeholder="keluhan" required/>
                                <label for="keluhan">Symptoms</label>
                                <div class="invalid-feedback">are u healthy?</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Register</button>
                        </div>
                        <div class="col-12">
                            <p class="small mb-0">done yet? <a href="/logout">Log Out here</a></p>
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
