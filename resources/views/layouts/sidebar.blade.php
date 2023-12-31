<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <!-- End Dashboard Nav -->

        @if ( session()->has('role') && session('role') == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="bi bi-grid"></i>
                    <span>Admin Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-person-badge"></i><span>Doctor</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin.manage_dokter')}}"> <i class="bi bi-circle"></i><span>List Doctor</span> </a>
                    </li>
                    <li>
                        <a href="{{route('admin.create_dokter')}}"> <i class="bi bi-circle"></i><span>Add Doctor</span> </a>
                    </li>
                </ul>
            </li>
            <!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables1-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-person-badge"></i><span>Patient</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="tables1-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin.manage_pasien')}}"> <i class="bi bi-circle"></i><span>List Patient</span> </a>
                    </li>
                    <li>
                        <a href="{{route('admin.create_pasien')}}"> <i class="bi bi-circle"></i><span>Add Patient</span> </a>
                    </li>
                </ul>
            </li>
            <!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-table"></i><span>Polyclinics</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('admin.manage_poli')}}"> <i class="bi bi-circle"></i><span>List Polyclinics</span> </a>
                    </li>
                    <li>
                        <a href="{{route('admin.create_poli')}}"> <i class="bi bi-circle"></i><span>Add Polyclinic</span> </a>
                    </li>
                </ul>
            </li>
            <!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-shield-x"></i><span>Medicine</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin.manage_obat')}}"> <i class="bi bi-circle"></i><span>List Medicine</span> </a>
                    </li>
                    <li>
                        <a href="{{route('admin.create_obat')}}"> <i class="bi bi-circle"></i><span>Add Medicine</span> </a>
                    </li>
                </ul>
            </li>
            <!-- End Tables Nav -->

        <!-- End Sidebar-->
        @elseif (session()->has('role') && session('role') == 'dokter')
            <li class="nav-item">
                <a class="nav-link" href="{{route('dokter.dashboard')}}">
                    <i class="bi bi-grid"></i>
                    <span>Doctor Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-table"></i><span>Exam Schedule</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('dokter.jadwal_saya', ['id' => $id_dokter->id]) }}"> <i class="bi bi-circle"></i><span>My Schedule</span> </a>
                    </li>
                    <li>
                        <a href="{{route('dokter.create_jadwal.form')}}"> <i class="bi bi-circle"></i><span>Add Schedule</span> </a>
                    </li>
                </ul>
            </li>
            <!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-journal-text"></i><span>Examinate Patient</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('dokter.daftar_periksa')}}"> <i class="bi bi-circle"></i><span>Examinate Data</span> </a>
                    </li>
                    <li>
                        <a href="{{route('dokter.riwayat_periksa')}}"> <i class="bi bi-circle"></i><span>Examinate History</span> </a>
                    </li>
                </ul>
            </li>
            <!-- End Forms Nav -->
        @endif
    </ul>
</aside>

