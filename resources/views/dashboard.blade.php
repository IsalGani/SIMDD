@extends('layouts.user_type.auth')

@section('content')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-5 mb-lg-0 mb-4">
                <div class="card z-index-2">

                        
                        <div class="card-header mb-0">
                            <h4 class="mb-0">{{ __('Realisasi Per Tahun') }}</h4>
                            @if(auth()->user()->role === 'admin_desa')
                            <p class="mb-0">Desa {{ Auth::user()->name }}</p>
                            @endif
                        </div>
                        <div class="card-body p-3">
                            <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                                <div class="chart">
                                    <canvas id="chart1" class="chart-canvas" height="300" width="300"></canvas>
                                </div>
                            </div>
                        </div>
                   
                </div>
            </div>
            <div class="col-lg">
                <div class="card z-index-2">
                    <div class="card-header pb-0">
                        <h4 class="mb-0">{{ __('Dana Desa Kec. Batudaa Pantai') }}</h4>
                    </div>
                    <div class="card-body p-3">
                        <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                            <div class="chart">
                                <canvas id="chart2" class="chart-canvas" height="300" width="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('dashboard')
    <script>
        var realisasiData = @json($totalsDesa->pluck('total_realisasi'));
        var tahunAnggaran = @json(
            $totalsDesa->pluck('tahun_anggaran')->map(function ($year) {
                return str_replace('.', '', strval($year));
            }));
        var anggaranData = @json($totalsDesa->pluck('total_anggaran'));
        window.onload = function() {
            var ctx = document.getElementById("chart1").getContext("2d");
            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: tahunAnggaran,
                    datasets: [{
                        label: "Total Realisasi",
                        tension: 0.5,
                        borderWidth: 0,
                        borderRadius: 4,
                        borderSkipped: false,
                        backgroundColor: "pink",
                        data: realisasiData,
                        maxBarThickness: 6
                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    width: 200,
                    height: 200,
                    plugins: {
                        legend: {
                            display: true,
                        }
                    },
                    interaction: {
                        intersect: true,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: true,
                                display: true,
                                drawOnChartArea: false,
                                drawTicks: true,
                            },
                            ticks: {
                                suggestedMin: 0,
                                suggestedMax: 500,
                                beginAtZero: true,
                                padding: 15,
                                font: {
                                    size: 10,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                                color: "white"
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: true,
                                display: true,
                                drawOnChartArea: false,
                                drawTicks: true
                            },
                            ticks: {
                                display: true
                            },
                        },
                    },
                },
            });



            var realisasiAllData = @json($seluruhDesa->pluck('total_realisasi'));
            var anggaranAllData = @json($seluruhDesa->pluck('total_anggaran'));
            var tahunAllData = @json($seluruhDesa->pluck('tahun_anggaran'));
            var namaAllData = @json($seluruhDesa->pluck('nama_desa'));


            var ctx = document.getElementById("chart2").getContext("2d");
            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: namaAllData,
                    datasets: [{
                            label: "Total Realisasi",
                            tension: 1,
                            borderWidth: 3,
                            borderRadius: 5,
                            borderSkipped: false,
                            borderColor: "white",
                            backgroundColor: "white",
                            data: realisasiAllData,
                            maxBarThickness: 4
                        },
                        {
                            label: "Total Anggaran",
                            tension: 1,
                            borderWidth: 3,
                            borderRadius: 5,
                            borderSkipped: false,
                            borderColor: "pink",
                            backgroundColor: "pink",
                            data: anggaranAllData,
                            maxBarThickness: 4
                        }
                    ],
                },
                options: {
                    responsive: false,
                    maintainAspectRatio: false,
                    width: 200,
                    height: 200,
                    plugins: {
                        legend: {
                            display: true,
                        }
                    },
                    interaction: {
                        intersect: true,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: true,
                                display: true,
                                drawOnChartArea: false,
                                drawTicks: true,
                            },
                            ticks: {
                                suggestedMin: 0,
                                suggestedMax: 500,
                                beginAtZero: true,
                                padding: 15,
                                font: {
                                    size: 10,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                                color: "white"
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: true,
                                display: true,
                                drawOnChartArea: false,
                                drawTicks: true
                            },
                            ticks: {
                                display: true
                            },
                        },
                    },
                },
            });


        }
    </script>
@endpush
