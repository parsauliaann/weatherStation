@extends('layouts.app')

@section('content')
  <div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h4>Sensor Datas</h4>
              <!-- Tabs navs -->
                <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                    <a
                        class="nav-link active"
                        id="ex3-tab-1"
                        data-mdb-toggle="tab"
                        href="#ex3-tabs-1"
                        role="tab"
                        aria-controls="ex3-tabs-1"
                        aria-selected="true"
                        >Wind Speed</a
                    >
                    </li>
                    <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="ex3-tab-2"
                        data-mdb-toggle="tab"
                        href="#ex3-tabs-2"
                        role="tab"
                        aria-controls="ex3-tabs-2"
                        aria-selected="false"
                        >Wind Direction</a
                    >
                    </li>
                    <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="ex3-tab-3"
                        data-mdb-toggle="tab"
                        href="#ex3-tabs-3"
                        role="tab"
                        aria-controls="ex3-tabs-3"
                        aria-selected="false"
                        >Temperature</a
                    >
                    </li>
                    <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="ex3-tab-4"
                        data-mdb-toggle="tab"
                        href="#ex3-tabs-4"
                        role="tab"
                        aria-controls="ex3-tabs-4"
                        aria-selected="false"
                        >Humidity</a
                    >
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link"
                            id="ex3-tab-5"
                            data-mdb-toggle="tab"
                            href="#ex3-tabs-5"
                            role="tab"
                            aria-controls="ex3-tabs-5"
                            aria-selected="false"
                            >Pressure</a
                        >
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link"
                            id="ex3-tab-6"
                            data-mdb-toggle="tab"
                            href="#ex3-tabs-6"
                            role="tab"
                            aria-controls="ex3-tabs-6"
                            aria-selected="false"
                            >Rainfall</a
                        >
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link"
                            id="ex3-tab-7"
                            data-mdb-toggle="tab"
                            href="#ex3-tabs-7"
                            role="tab"
                            aria-controls="ex3-tabs-7"
                            aria-selected="false"
                            >Solar Radiation</a
                        >
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link"
                            id="ex3-tab-8"
                            data-mdb-toggle="tab"
                            href="#ex3-tabs-8"
                            role="tab"
                            aria-controls="ex3-tabs-8"
                            aria-selected="false"
                            >PAR Sensor</a
                        >
                    </li>

                </ul>
                <!-- Tabs navs -->
                
                <!-- Tabs content -->
                <div class="tab-content" id="ex2-content">
                    <div class="tab-pane fade show active" id="ex3-tabs-1" role="tabpanel" aria-labelledby="ex3-tab-1">
                        <div class="card-body px-0 pt-0 pb-2">
                            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-ga-tab-ws" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Graphical Analysis</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-ta-tab-ws" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Tabular Analysis</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-ga-tab-ws">
                                    <div class="row mt-2">
                                        <div class="col-lg-12 mb-lg-0 mb-4">
                                        <div class="card z-index-2">
                                            <div class="card-header pb-0 pt-3 bg-transparent">
                                            <h6 class="text-capitalize">Real-time curve</h6>
                                            </div>
                                            <div class="card-body p-3">
                                            <div class="chart">
                                                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-ta-tab-ws">
                                    <div class="table-responsive p-0">
                                        <table id="tableWindSpeed" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Kecepatan</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Kecepatan</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">
                        <div class="card-body px-0 pt-0 pb-2">
                            {{-- Nav atas --}}
                            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab-winddirection" role="tablist">
                                <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-ga-tab-wd" data-bs-toggle="pill" data-bs-target="#pills-graph-winddirection" type="button" role="tab" aria-controls="pills-graph-winddirection" aria-selected="true">Graphical Analysis</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-ta-tab-wd" data-bs-toggle="pill" data-bs-target="#pills-tabular-winddirection" type="button" role="tab" aria-controls="pills-tabular-winddirection" aria-selected="false">Tabular Analysis</button>
                                </li>
                            </ul>
                            {{-- Nav Bawah --}}

                            {{-- Isi NavTab --}}
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-graph-winddirection" role="tabpanel" aria-labelledby="pills-ga-tab-wd">
                                    <div class="row mt-2">
                                        <div class="col-lg-12 mb-lg-0 mb-4">
                                        <div class="card z-index-2">
                                            <div class="card-header pb-0 pt-3 bg-transparent">
                                            <h6 class="text-capitalize">Real-time curve</h6>
                                            </div>
                                            <div class="card-body p-3">
                                            <div class="chart">
                                                <canvas id="chart-line2" class="chart-canvas" height="300"></canvas>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-tabular-winddirection" role="tabpanel" aria-labelledby="pills-ta-tab-wd">
                                    <div class="table-responsive p-0">
                                        <table id="tableWindDirection" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Arah</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Arah</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{-- Bawah isi navtab --}}
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">
                        <div class="card-body px-0 pt-0 pb-2">
                            {{-- Nav atas --}}
                            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab-temperature" role="tablist">
                                <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-ga-tab-temperature" data-bs-toggle="pill" data-bs-target="#pills-graph-temperature" type="button" role="tab" aria-controls="pills-graph-temperature" aria-selected="true">Graphical Analysis</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-ta-tab-temperature" data-bs-toggle="pill" data-bs-target="#pills-tabular-temperature" type="button" role="tab" aria-controls="pills-tabular-temperature" aria-selected="false">Tabular Analysis</button>
                                </li>
                            </ul>
                            {{-- Nav Bawah --}}

                            {{-- Isi NavTab --}}
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-graph-temperature" role="tabpanel" aria-labelledby="pills-ga-tab-temperature">
                                    <div class="row mt-2">
                                        <div class="col-lg-12 mb-lg-0 mb-4">
                                        <div class="card z-index-2">
                                            <div class="card-header pb-0 pt-3 bg-transparent">
                                            <h6 class="text-capitalize">Real-time curve</h6>
                                            </div>
                                            <div class="card-body p-3">
                                            <div class="chart">
                                                <canvas id="chart-line3" class="chart-canvas" height="300"></canvas>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-tabular-temperature" role="tabpanel" aria-labelledby="pills-ta-tab-temperature">
                                    <div class="table-responsive p-0">
                                        <table id="tableTemperature" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Celcius</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Celcius</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex3-tabs-4" role="tabpanel" aria-labelledby="ex3-tab-4">
                        <div class="card-body px-0 pt-0 pb-2">
                            {{-- Nav atas --}}
                            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab-humidity" role="tablist">
                                <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-ga-tab-humidity" data-bs-toggle="pill" data-bs-target="#pills-graph-humidity" type="button" role="tab" aria-controls="pills-graph-humidity" aria-selected="true">Graphical Analysis</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-ta-tab-humidity" data-bs-toggle="pill" data-bs-target="#pills-tabular-humidity" type="button" role="tab" aria-controls="pills-tabular-humidity" aria-selected="false">Tabular Analysis</button>
                                </li>
                            </ul>
                            {{-- Nav Bawah --}}

                            {{-- Isi NavTab --}}
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-graph-humidity" role="tabpanel" aria-labelledby="pills-ga-tab-humidity">
                                    <div class="row mt-2">
                                        <div class="col-lg-12 mb-lg-0 mb-4">
                                        <div class="card z-index-2">
                                            <div class="card-header pb-0 pt-3 bg-transparent">
                                            <h6 class="text-capitalize">Real-time curve</h6>
                                            </div>
                                            <div class="card-body p-3">
                                            <div class="chart">
                                                <canvas id="chart-line4" class="chart-canvas" height="300"></canvas>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-tabular-humidity" role="tabpanel" aria-labelledby="pills-ta-tab-humidity">
                                    <div class="table-responsive p-0">
                                        <table id="tableHumidity" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Persentase</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Persentase</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex3-tabs-5" role="tabpanel" aria-labelledby="ex3-tab-5">
                        <div class="card-body px-0 pt-0 pb-2">
                            {{-- Nav atas --}}
                            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab-pressure" role="tablist">
                                <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-ga-tab-pressure" data-bs-toggle="pill" data-bs-target="#pills-graph-pressure" type="button" role="tab" aria-controls="pills-graph-pressure" aria-selected="true">Graphical Analysis</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-ta-tab-pressure" data-bs-toggle="pill" data-bs-target="#pills-tabular-pressure" type="button" role="tab" aria-controls="pills-tabular-pressure" aria-selected="false">Tabular Analysis</button>
                                </li>
                            </ul>
                            {{-- Nav Bawah --}}

                            {{-- Isi NavTab --}}
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-graph-pressure" role="tabpanel" aria-labelledby="pills-ga-tab-pressure">
                                    <div class="row mt-2">
                                        <div class="col-lg-12 mb-lg-0 mb-4">
                                        <div class="card z-index-2">
                                            <div class="card-header pb-0 pt-3 bg-transparent">
                                            <h6 class="text-capitalize">Real-time curve</h6>
                                            </div>
                                            <div class="card-body p-3">
                                            <div class="chart">
                                                <canvas id="chart-line5" class="chart-canvas" height="300"></canvas>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-tabular-pressure" role="tabpanel" aria-labelledby="pills-ta-tab-pressure">
                                    <div class="table-responsive p-0">
                                        <table id="tablePressure" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Tekanan</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Tekanan</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="tab-pane fade" id="ex3-tabs-6" role="tabpanel" aria-labelledby="ex3-tab-6">
                        <div class="card-body px-0 pt-0 pb-2">
                            {{-- Nav atas --}}
                            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab-rainfall" role="tablist">
                                <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-ga-tab-rainfall" data-bs-toggle="pill" data-bs-target="#pills-graph-rainfall" type="button" role="tab" aria-controls="pills-graph-rainfall" aria-selected="true">Graphical Analysis</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-ta-tab-rainfall" data-bs-toggle="pill" data-bs-target="#pills-tabular-rainfall" type="button" role="tab" aria-controls="pills-tabular-rainfall" aria-selected="false">Tabular Analysis</button>
                                </li>
                            </ul>
                            {{-- Nav Bawah --}}

                            {{-- Isi NavTab --}}
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-graph-rainfall" role="tabpanel" aria-labelledby="pills-ga-tab-rainfall">
                                    <div class="row mt-2">
                                        <div class="col-lg-12 mb-lg-0 mb-4">
                                        <div class="card z-index-2">
                                            <div class="card-header pb-0 pt-3 bg-transparent">
                                            <h6 class="text-capitalize">Real-time curve</h6>
                                            </div>
                                            <div class="card-body p-3">
                                            <div class="chart">
                                                <canvas id="chart-line6" class="chart-canvas" height="300"></canvas>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-tabular-rainfall" role="tabpanel" aria-labelledby="pills-ta-tab-rainfall">
                                    <div class="table-responsive p-0">
                                        <table id="tableRainfall" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Milimeter</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Milimeter</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="tab-pane fade" id="ex3-tabs-7" role="tabpanel" aria-labelledby="ex3-tab-7">
                        <div class="card-body px-0 pt-0 pb-2">
                            {{-- Nav atas --}}
                            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab-solarradiation" role="tablist">
                                <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-ga-tab-solarradiation" data-bs-toggle="pill" data-bs-target="#pills-graph-solarradiation" type="button" role="tab" aria-controls="pills-graph-solarradiation" aria-selected="true">Graphical Analysis</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-ta-tab-solarradiation" data-bs-toggle="pill" data-bs-target="#pills-tabular-solarradiation" type="button" role="tab" aria-controls="pills-tabular-solarradiation" aria-selected="false">Tabular Analysis</button>
                                </li>
                            </ul>
                            {{-- Nav Bawah --}}

                            {{-- Isi NavTab --}}
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-graph-solarradiation" role="tabpanel" aria-labelledby="pills-ga-tab-solarradiation">
                                    <div class="row mt-2">
                                        <div class="col-lg-12 mb-lg-0 mb-4">
                                        <div class="card z-index-2">
                                            <div class="card-header pb-0 pt-3 bg-transparent">
                                            <h6 class="text-capitalize">Real-time curve</h6>
                                            </div>
                                            <div class="card-body p-3">
                                            <div class="chart">
                                                <canvas id="chart-line7" class="chart-canvas" height="300"></canvas>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-tabular-solarradiation" role="tabpanel" aria-labelledby="pills-ta-tab-solarradiation">
                                    <div class="table-responsive p-0">
                                        <table id="tableSolarRadiation" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>W/m²</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>W/m²</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="tab-pane fade" id="ex3-tabs-8" role="tabpanel" aria-labelledby="ex3-tab-8">
                        <div class="card-body px-0 pt-0 pb-2">
                            {{-- Nav atas --}}
                            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab-parsensor" role="tablist">
                                <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-ga-tab-ps" data-bs-toggle="pill" data-bs-target="#pills-graph-parsensor" type="button" role="tab" aria-controls="pills-graph-parsensor" aria-selected="true">Graphical Analysis</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-ta-tab-ps" data-bs-toggle="pill" data-bs-target="#pills-tabular-parsensor" type="button" role="tab" aria-controls="pills-tabular-parsensor" aria-selected="false">Tabular Analysis</button>
                                </li>
                            </ul>
                            {{-- Nav Bawah --}}

                            {{-- Isi NavTab --}}
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-graph-parsensor" role="tabpanel" aria-labelledby="pills-ga-tab-ps">
                                    <div class="row mt-2">
                                        <div class="col-lg-12 mb-lg-0 mb-4">
                                        <div class="card z-index-2">
                                            <div class="card-header pb-0 pt-3 bg-transparent">
                                            <h6 class="text-capitalize">Real-time curve</h6>
                                            </div>
                                            <div class="card-body p-3">
                                            <div class="chart">
                                                <canvas id="chart-line8" class="chart-canvas" height="300"></canvas>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-tabular-parsensor" role="tabpanel" aria-labelledby="pills-ta-tab-ps">
                                    <div class="table-responsive p-0">
                                        <table id="tablePARSensor" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Arah</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Waktu</th>
                                                    <th>Arah</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
                <!-- Tabs content -->
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection 

@section('js')
  <script>
    // Fungsi untuk menangani perubahan tab
    function handleTabChange(clickedTab) {
    // Menghapus kelas 'active' dari semua tab
    document.querySelectorAll('.nav-link').forEach(function (tab) {
        tab.classList.remove('active');
    });

    // Menambahkan kelas 'active' pada tab yang diklik
    clickedTab.classList.add('active');
    // Menangani tab content
    var targetId = clickedTab.getAttribute('href').substring(1);
    document.querySelectorAll('.tab-pane').forEach(function (tabContent) {
        tabContent.classList.remove('show', 'active');
    });
    document.getElementById(targetId).classList.add('show', 'active');
}


// Menambahkan event listener untuk setiap tab
    document.querySelectorAll('.nav-link').forEach(function (tab) {
    tab.addEventListener('click', function () {
        // Memanggil fungsi untuk menangani perubahan tab
        handleTabChange(this);
    });
    });

  </script>
  <script>
    const language = {
        'paginate': {
            'previous': '<i class="fa fa-chevron-left"></i>',
            'next': '<i class="fa fa-chevron-right"></i>'
        }
    };

    new DataTable('#tableWindSpeed', {
        ajax: "/api/sensor-datas" + '?parameter=wind_speed',
        language: language
    });
    new DataTable('#tableWindDirection', {
      ajax: "/api/sensor-datas" + '?parameter=wind_direction',
        language: language
    });
    new DataTable('#tableTemperature', {
      ajax: "/api/sensor-datas" + '?parameter=temperature',
        language: language
    });
    new DataTable('#tableHumidity', {
      ajax: "/api/sensor-datas" + '?parameter=humidity',
        language: language
    });
    new DataTable('#tablePressure', {
      ajax: "/api/sensor-datas" + '?parameter=pressure',
        language: language
    });
    new DataTable('#tableRainfall', {
      ajax: "/api/sensor-datas" + '?parameter=rainfall',
        language: language
    });
    new DataTable('#tableSolarRadiation', {
      ajax: "/api/sensor-datas" + '?parameter=solar_radiation',
        language: language
    });
    new DataTable('#tablePARSensor', {
      ajax: "/api/sensor-datas" + '?parameter=par_sensor',
        language: language
    });
  </script>

  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");
    var ctx2 = document.getElementById("chart-line2").getContext("2d");
    var ctx3 = document.getElementById("chart-line3").getContext("2d");
    var ctx4 = document.getElementById("chart-line4").getContext("2d");
    var ctx5 = document.getElementById("chart-line5").getContext("2d");
    var ctx6 = document.getElementById("chart-line6").getContext("2d");
    var ctx7 = document.getElementById("chart-line7").getContext("2d");
    var ctx8 = document.getElementById("chart-line8").getContext("2d");

    let options = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
            display: true,
            }
        },
        interaction: {
            intersect: false,
            mode: 'index',
        },
        scales: {
            y: {
            grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
            },
            ticks: {
                display: true,
                padding: 10,
                color: '#ccc',
                font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
                },
            }
            },
            x: {
            grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
            },
            ticks: {
                display: true,
                color: '#ccc',
                padding: 20,
                font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
                },
            }
            },
        },
    }

    let chart = new Chart(ctx1, {
        type: "line",
        data: {
            labels: ['Jam ke-1', 'Jam ke-2', 'Jam ke-3'],
            datasets: [
                {
                    label: "Wind Speed",
                    borderWidth: 0,
                    pointRadius: 2,
                    borderColor: "#5e72e4",
                    borderWidth: 2,
                    fill: true,
                    data: [1, 7, 2],
                    maxBarThickness: 6
                }
            ],
        },
        options: options,
    });

    let chart2 = new Chart(ctx2, {
        type: "line",
        data: {
            labels: ['Jam ke-1', 'Jam ke-2', 'Jam ke-3'],
            datasets: [
                {
                    label: "Wind Direction",
                    borderWidth: 0,
                    pointRadius: 2,
                    borderColor: "#5e72e4",
                    borderWidth: 2,
                    fill: true,
                    data: [1, 3, 6],
                    maxBarThickness: 6
                }
            ],
        },
        options: options,
    });

    let chart3 = new Chart(ctx3, {
        type: "line",
        data: {
            labels: ['Jam ke-1', 'Jam ke-2', 'Jam ke-3'],
            datasets: [
                {
                    label: "Temperature",
                    borderWidth: 0,
                    pointRadius: 2,
                    borderColor: "#21b1ff",
                    borderWidth: 2,
                    fill: true,
                    data: [5, 3, 1],
                    maxBarThickness: 6
                }
            ],
        },
        options: options,
    });

    let chart4 = new Chart(ctx4, {
        type: "line",
        data: {
            labels: ['Jam ke-1', 'Jam ke-2', 'Jam ke-3'],
            datasets: [
                {
                    label: "Humidity",
                    borderWidth: 0,
                    pointRadius: 2,
                    borderColor: "#f5c842",
                    borderWidth: 2,
                    fill: true,
                    data: [1, 4, 2],
                    maxBarThickness: 6
                }
            ],
        },
        options: options,
    });

    let chart5 = new Chart(ctx5, {
        type: "line",
        data: {
            labels: ['Jam ke-1', 'Jam ke-2', 'Jam ke-3'],
            datasets: [
                {
                    label: "Pressure",
                    borderWidth: 0,
                    pointRadius: 2,
                    borderColor: "#40c6ff",
                    borderWidth: 2,
                    fill: true,
                    data: [5, 1, 6],
                    maxBarThickness: 6
                }
            ],
        },
        options: options,
    });

    let chart6 = new Chart(ctx6, {
        type: "line",
        data: {
            labels: ['Jam ke-1', 'Jam ke-2', 'Jam ke-3'],
            datasets: [
                {
                    label: "Rainfall",
                    borderWidth: 0,
                    pointRadius: 2,
                    borderColor: "#cbeaf7",
                    borderWidth: 2,
                    fill: true,
                    data: [3, 6, 1],
                    maxBarThickness: 6
                }
            ],
        },
        options: options,
    });

    let chart7 = new Chart(ctx7, {
        type: "line",
        data: {
            labels: ['Jam ke-1', 'Jam ke-2', 'Jam ke-3'],
            datasets: [
                {
                    label: "Solar Radiation",
                    borderWidth: 0,
                    pointRadius: 2,
                    borderColor: "#464e52",
                    borderWidth: 2,
                    fill: true,
                    data: [2, 3, 4],
                    maxBarThickness: 6
                }
            ],
        },
        options: options,
    });

    let chart8 = new Chart(ctx8, {
        type: "line",
        data: {
            labels: ['Jam ke-1', 'Jam ke-2', 'Jam ke-3'],
            datasets: [
                {
                    label: "PAR Sensor",
                    borderWidth: 0,
                    pointRadius: 2,
                    borderColor: "#bfb10f",
                    borderWidth: 2,
                    fill: true,
                    data: [7, 4, 1],
                    maxBarThickness: 6
                }
            ],
        },
        options: options,
    });
  </script>
  <script>
    const triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'));
    triggerTabList.forEach((triggerEl) => {
    const tabTrigger = new Tab(triggerEl);

    triggerEl.addEventListener('click', (event) => {
        event.preventDefault();
        tabTrigger.show();
    });
    });
  </script>
@endsection