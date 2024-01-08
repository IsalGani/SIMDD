@extends('layouts.user_type.auth')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg mb-lg-0 mb-4">
                <div class="card z-index-2">
                    <div class="card-header mb-0 pb-2">
                        <h4 class="mb-0 p-0">{{ __('Realisasi Per Tahun') }}</h4>
                    </div>
                    <div class="card-body p-3">
                        @if (auth()->user()->role === 'admin_desa')
                            <p class="mb-2 p-2 mt-3">Desa {{ Auth::user()->name }}</p>
                        @endif
                        {{-- pilih nama desa untuk admin kecamatan --}}
                        @if (auth()->user()->role === 'admin_kecamatan')
                            <form action="{{ route('dashboard') }}" method="GET" class="mt-2 p-2">
                                <div class="form-group">
                                    <label for="nama_desa">Pilih Desa:</label>
                                    <select name="nama_desa" class="form-control" onchange="this.form.submit()">
                                        @foreach ($availableDesa_pertahun as $desa_pertahun)
                                            <option value="{{ $desa_pertahun }}"
                                                {{ $nama_desa_pertahun == $desa_pertahun ? 'selected' : '' }}>
                                                {{ $desa_pertahun }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
                        @endif
                        <div class="bg-gradient-primary border-radius-lg py-3 pe-1 mb-3">
                            <div class="chart">
                                @if (auth()->user()->role === 'admin_kecamatan')
                                    <canvas id="chart_desa_pertahun" class="chart-canvas" height="300"
                                        width="300"></canvas>
                                @endif
                                @if (auth()->user()->role === 'admin_desa')
                                    <canvas id="chart_desa" class="chart-canvas" height="300" width="300"></canvas>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-3">
            <div class="col-lg">
                <div class="card z-index-2">
                    <div class="card-header pb-0">
                        <h4 class="mb-0">{{ __('Dana Desa Kec. Batudaa Pantai') }}</h4>
                        <h4 class="mb-0">Tahun {{ $tahunAnggaranSaatIni }}</h4>
                    </div>
                    <div class="card-body p-3">

                        <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                            <div class="chart">
                                <canvas id="chart_kecamatan" class="chart-canvas" height="300" width="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection



@push('dashboard')
    @if (auth()->user()->role === 'admin_kecamatan')
        <script>
            //chart desa pertahun/admin POV
            var realisasiDataPertahun = @json($totalsSeluruhDesa_pertahun->pluck('total_realisasi'));
            var tahunAnggaranPertahun = @json(
                $totalsSeluruhDesa_pertahun->pluck('tahun_anggaran')->map(function ($desa) {
                    return str_replace('.', '', strval($desa));
                }));
            var anggaranDataPertahun = @json($totalsSeluruhDesa_pertahun->pluck('total_anggaran'));

            var ctx = document.getElementById("chart_desa_pertahun").getContext("2d");
            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: tahunAnggaranPertahun,
                    datasets: [{
                        label: "Total Realisasi",
                        tension: 0.5,
                        borderWidth: 0,
                        borderRadius: 4,
                        borderSkipped: false,
                        backgroundColor: "white",
                        data: realisasiDataPertahun,
                        maxBarThickness: 10
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
                            labels: {
                                color: "black",
                                font: {
                                    size: 16
                                }

                            }
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
                                padding: 16,
                                font: {
                                    size: 14,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                                color: "black"
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
                                display: true,
                                color: "black",
                                font: {
                                    size: 14,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            },
                        },
                    },
                },
            });



            var realisasiAllData = @json($seluruhDesa->pluck('total_realisasi'));
            var anggaranAllData = @json($seluruhDesa->pluck('total_anggaran'));
            var tahunAllData = @json($seluruhDesa->pluck('tahun_anggaran'));
            var namaAllData = @json($seluruhDesa->pluck('nama_desa'));


            var ctx = document.getElementById("chart_kecamatan").getContext("2d");
            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: namaAllData,
                    datasets: [{
                            label: "Total Realisasi",
                            tension: 1,
                            borderWidth: 1,
                            borderRadius: 5,
                            borderSkipped: false,
                            borderColor: "white",
                            backgroundColor: "white",
                            data: realisasiAllData,
                            maxBarThickness: 10
                        },
                        {
                            label: "Total Anggaran",
                            tension: 1,
                            borderWidth: 1,
                            borderRadius: 5,
                            borderSkipped: false,
                            borderColor: "rgb(0,255,255)",
                            backgroundColor: "rgb(0,255,255)",
                            data: anggaranAllData,
                            maxBarThickness: 10
                        }
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    width: 200,
                    height: 200,
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                color: "white",
                                font: {
                                    size: 16
                                }

                            }
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
                                padding: 16,
                                font: {
                                    size: 14,
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
                                display: true,
                                color: "white",
                                font: {
                                    size: 14,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            },
                        },
                    },
                },
            });
        </script>
    @endif


    <script>
        // chart desa
        var realisasiData = @json($totalsDesa->pluck('total_realisasi'));
        var tahunAnggaran = @json(
            $totalsDesa->pluck('tahun_anggaran')->map(function ($year) {
                return str_replace('.', '', strval($year));
            }));
        var anggaranData = @json($totalsDesa->pluck('total_anggaran'));
        window.onload = function() {

            var ctx = document.getElementById("chart_desa").getContext("2d");
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
                        backgroundColor: "white",
                        data: realisasiData,
                        maxBarThickness: 10
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
                            labels: {
                                color: "black",
                                font: {
                                    size: 16
                                }

                            }
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
                                padding: 16,
                                font: {
                                    size: 14,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                                color: "black"
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
                                display: true,
                                color: "black",
                                font: {
                                    size: 14,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            },
                        },
                    },
                },
            });





            var realisasiAllData = @json($seluruhDesa->pluck('total_realisasi'));
            var anggaranAllData = @json($seluruhDesa->pluck('total_anggaran'));
            var tahunAllData = @json($seluruhDesa->pluck('tahun_anggaran'));
            var namaAllData = @json($seluruhDesa->pluck('nama_desa'));


            var ctx = document.getElementById("chart_kecamatan").getContext("2d");
            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: namaAllData,
                    datasets: [{
                            label: "Total Realisasi",
                            tension: 1,
                            borderWidth: 1,
                            borderRadius: 5,
                            borderSkipped: false,
                            borderColor: "white",
                            backgroundColor: "white",
                            data: realisasiAllData,
                            maxBarThickness: 10
                        },
                        {
                            label: "Total Anggaran",
                            tension: 1,
                            borderWidth: 1,
                            borderRadius: 5,
                            borderSkipped: false,
                            borderColor: "rgb(0,255,255)",
                            backgroundColor: "rgb(0,255,255)",
                            data: anggaranAllData,
                            maxBarThickness: 10
                        }
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    width: 200,
                    height: 200,
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                color: "white",
                                font: {
                                    size: 16
                                }

                            }
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
                                padding: 16,
                                font: {
                                    size: 14,
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
                                display: true,
                                color: "white",
                                font: {
                                    size: 14,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            },
                        },
                    },
                },
            });


        }
    </script>
@endpush
