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
                        >Humidiy</a
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
                    <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">
                        <div class="card-body px-0 pt-0 pb-2">
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
                    <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">
                        <div class="card-body px-0 pt-0 pb-2">
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
                    <div class="tab-pane fade" id="ex3-tabs-4" role="tabpanel" aria-labelledby="ex3-tab-4">
                        <div class="card-body px-0 pt-0 pb-2">
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
                    <div class="tab-pane fade" id="ex3-tabs-5" role="tabpanel" aria-labelledby="ex3-tab-5">
                        <div class="card-body px-0 pt-0 pb-2">
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
                    <div class="tab-pane fade" id="ex3-tabs-6" role="tabpanel" aria-labelledby="ex3-tab-6">
                        <div class="card-body px-0 pt-0 pb-2">
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
                    <div class="tab-pane fade" id="ex3-tabs-7" role="tabpanel" aria-labelledby="ex3-tab-7">
                        <div class="card-body px-0 pt-0 pb-2">
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
                    <div class="tab-pane fade" id="ex3-tabs-8" role="tabpanel" aria-labelledby="ex3-tab-8">
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                              <table id="tablePARSensor" class="table table-striped" style="width:100%">
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
@endsection