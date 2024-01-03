@include('layouts.header')
@include('layouts.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Doctor List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Doctor Data</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">List of Doctor</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Number</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Clinic</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokter as $dokter)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $dokter->nama }}</td>
                                        <td>{{ $dokter->email }}</td>
                                        <td>{{ $dokter->no_hp }}</td>
                                        <td>{{ $dokter->alamat }}</td>
                                        <td>
                                            @if ($dokter->id_poli == null)
                                                <p>Tidak ada poli</p>
                                            @else
                                                {{ $dokter->poli->nama_poli }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.edit_dokter.form', $dokter->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form method="POST" action="{{ route('admin.delete_dokter', ['id' => $dokter->id]) }}" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
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
</main>
<!-- End #main -->
@include('layouts.footer')
