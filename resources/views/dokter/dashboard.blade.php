@include('layouts.header')
@include('layouts.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Hi Doc!</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row" style="width: 100%;">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Sales Card -->
                    <!-- <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Day <span>| My Schedule</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>@if ($jadwalSaya == null)
                                            No Schedule Yet
                                            @else
                                            {{ $jadwalSaya->hari }}
                                        @endif</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-6 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Opening Hour <span>| UTC+7</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>@if ($jadwalSaya == null)
                                        No Schedule Yet
                                            @else
                                            {{ $jadwalSaya->jam_mulai }}
                                        @endif</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-6 col-xl-12">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Closing Hour <span>| UTC+7</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-shield-x"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>
                                            @if ($jadwalSaya == null)
                                            No Schedule Yet
                                            @else
                                                {{ $jadwalSaya->jam_selesai }}
                                            @endif
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Customers Card -->
                </div>
            </div>
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div>
            <!-- End Left side columns -->

            <!-- Right side columns -->
            <!-- <div class="col-lg-4">
                Website Traffic
                <div class="card">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Pasien Saya <span>| {{ $poli->nama_poli }}</span></h5>

                        <div id="trafficChart" style="min-height: 400px" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                const antri = {!! json_encode($jumlahAntrian) !!};
                                const riwayat = {!! json_encode($pasienTerperiksa) !!};
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: "item",
                                    },
                                    legend: {
                                        top: "5%",
                                        left: "center",
                                    },
                                    series: [
                                        {
                                            name: "Access From",
                                            type: "pie",
                                            radius: ["40%", "70%"],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: "center",
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    fontSize: "18",
                                                    fontWeight: "bold",
                                                },
                                            },
                                            labelLine: {
                                                show: false,
                                            },
                                            data: [
                                                {
                                                    value: antri,
                                                    name: "Belum Diperiksa",
                                                },
                                                {
                                                    value: riwayat,
                                                    name: "Sudah Diperiksa",
                                                },
                                            ],
                                        },
                                    ],
                                });
                            });
                        </script>
                    </div>
                </div>
                End Website Traffic
            </div> -->
            <!-- End Right side columns -->
        </div>
    </section>
</main>
<!-- End #main -->

@include('layouts.footer')
