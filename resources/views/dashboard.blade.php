@extends('layouts.app')

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
                <div class="row">
                <div class="col-8">
                    <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Wind Speed</p>
                    @livewire('dashboard.parameter', ['parameter' => 'wind_speed', 'unit' => 'm/s'])
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#windSpeedModal">See detail</a>
                    </div>
                </div>
                <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="fa-solid fa-wind" style='font-size:24px'></i>
                    </div>
                </div>
                </div>
            </div>
         </div>
          <!-- Modal -->
          <div class="modal fade" id="windSpeedModal" tabindex="-1" aria-labelledby="windSpeedModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="windSpeedModalLabel">Wind Speed</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
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

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Wind Direction</p>
                    @livewire('dashboard.parameter', ['parameter' => 'wind_direction', 'unit' => '°'])
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#windDirection">See detail</a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <!-- <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i> -->
                    <i class="fa-solid fa-location-arrow" style="color: #ffffff; font-size:24px" ></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="windDirection" tabindex="-1" aria-labelledby="windDirectionLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="windSpeedModalLabel">Wind Direction</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
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
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Temperature</p>
                    @livewire('dashboard.parameter', ['parameter' => 'temperature', 'unit' => '°C'])
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#temperatureModal">See detail</a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <!-- <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i> -->
                    <i style='font-size:24px' class='fas'>&#xf76b;</i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="temperatureModal" tabindex="-1" aria-labelledby="temperatureModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="temperatureModalLabel">Temperature</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
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

        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Humidity</p>
                    @livewire('dashboard.parameter', ['parameter' => 'humidity', 'unit' => '%'])
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#humidity">See detail</a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <!-- <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i> -->
                    <i class="fa-solid fa-droplet" style="color: #ffffff; font-size: 24px;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="humidity" tabindex="-1" aria-labelledby="humidityLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="humidityLabel">Humidity</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
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

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Pressure</p>
                    @livewire('dashboard.parameter', ['parameter' => 'pressure'])
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#pressureModal">See detail</a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                    <i class="fa-solid fa-gauge-high" style="color: #ffffff; font-size: 24px;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="pressureModal" tabindex="-1" aria-labelledby="pressureModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="pressureModalLabel">Pressure</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
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

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Rainfall</p>
                    @livewire('dashboard.parameter', ['parameter' => 'rainfall', 'unit' => 'mm'])
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#rainfallModal">See detail</a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-secondary shadow-secondary text-center rounded-circle">
                    <!-- <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i> -->
                    <i class="fa-solid fa-cloud-showers-heavy" style="color: #ffffff; font-size: 24px;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="rainfallModal" tabindex="-1" aria-labelledby="rainfallModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="rainfallModalLabel">Rainfall</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
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

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Solar Radiaton</p>
                    @livewire('dashboard.parameter', ['parameter' => 'solar_radiation', 'unit' => ' w/m²'])
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#solarRadiationModal">See detail</a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <!-- <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i> -->
                    <i class="fa-solid fa-sun" style="color: #ffffff; font-size: 24px;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="solarRadiationModal" tabindex="-1" aria-labelledby="solarRadiationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="solarRadiationModalLabel">Solar Radiation</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
                <table id="tableSolarRadiation" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Waktu</th>
                            <th>w/m²</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Waktu</th>
                            <th>w/m²</th>
                        </tr>
                    </tfoot>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">PAR Sensor</p>
                    @livewire('dashboard.parameter', ['parameter' => 'par_sensor', 'unit' => ' w/m²'])
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#parSensorModal">See detail</a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <i class="fa-brands fa-envira" style="color: #ffffff; font-size : 24px" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="parSensorModal" tabindex="-1" aria-labelledby="parSensorModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="parSensorModalLabel">PAR Sensor</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
                <table id="tablePARSensor" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Waktu</th>
                            <th>w/m²</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Waktu</th>
                            <th>w/m²</th>
                        </tr>
                    </tfoot>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="row mt-4">
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
@endsection

@section('js')
  <script>
    const language = {
        'paginate': {
            'previous': '<i class="fa fa-chevron-left"></i>',
            'next': '<i class="fa fa-chevron-right"></i>'
        }
    };

    new DataTable('#tableWindSpeed', {
      ajax: "/api/sensor-datas" + '?parameter=wind_speed&today=1',
      language: language
    });
    new DataTable('#tableWindDirection', {
      ajax: "/api/sensor-datas" + '?parameter=wind_direction&today=1',
      language: language
    });
    new DataTable('#tableTemperature', {
      ajax: "/api/sensor-datas" + '?parameter=temperature&today=1',
      language: language
    });
    new DataTable('#tableHumidity', {
      ajax: "/api/sensor-datas" + '?parameter=humidity&today=1',
      language: language
    });
    new DataTable('#tablePressure', {
      ajax: "/api/sensor-datas" + '?parameter=pressure&today=1',
      language: language
    });
    new DataTable('#tableRainfall', {
      ajax: "/api/sensor-datas" + '?parameter=rainfall&today=1',
      language: language
    });
    new DataTable('#tableSolarRadiation', {
      ajax: "/api/sensor-datas" + '?parameter=solar_radiation&today=1',
      language: language
    });
    new DataTable('#tablePARSensor', {
      ajax: "/api/sensor-datas" + '?parameter=par_sensor&today=1',
      language: language
    });
  </script>

  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["07.00", "08.00", "09.00", "10.00", "11.00", "12.00", "13.00", "14.00", "15.00"],
        datasets: [
          {
            label: "Wind Speed",
            borderWidth: 0,
            pointRadius: 2,
            borderColor: "#5e72e4",
            backgroundColor: gradientStroke1,
            borderWidth: 2,
            fill: true,
            data: [1000, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6
          },
          {
            label: "Wind Direction",
            borderWidth: 0,
            pointRadius: 2,
            borderColor: "#ff6721",
            backgroundColor: gradientStroke1,
            borderWidth: 2,
            fill: true,
            data: [450, 150, 700, 50, 600, 250, 120, 350, 780],
            maxBarThickness: 6
          },
          {
            label: "Temperature",
            borderWidth: 0,
            pointRadius: 2,
            borderColor: "#21b1ff",
            backgroundColor: gradientStroke1,
            borderWidth: 2,
            fill: true,
            data: [27.5, 14.3, 32.8, 19.6, 25.2, 8.9, 36.7, 22.1, 30.4],
            maxBarThickness: 6
          },
          {
            label: "Humidity",
            borderWidth: 0,
            pointRadius: 2,
            borderColor: "#f5c842",
            backgroundColor: gradientStroke1,
            borderWidth: 2,
            fill: true,
            data: [80, 90, 100, 300, 900, 800, 100, 200, 300],
            maxBarThickness: 6
          },
          {
            label: "Pressure",
            borderWidth: 0,
            pointRadius: 2,
            borderColor: "#40c6ff",
            backgroundColor: gradientStroke1,
            borderWidth: 2,
            fill: true,
            data: [105, 78, 120, 95, 110, 85, 130, 102, 115],
            maxBarThickness: 6
          },
          {
            label: "Rainfall",
            borderWidth: 0,
            pointRadius: 2,
            borderColor: "#cbeaf7",
            backgroundColor: gradientStroke1,
            borderWidth: 2,
            fill: true,
            data: [15.2, 30.7, 20.5, 32.1, 18.6, 25.8, 30.2, 21.4, 27.9, 19.0],
            maxBarThickness: 6
          },
          {
            label: "Solar Radiation",
            borderWidth: 0,
            pointRadius: 2,
            borderColor: "#464e52",
            backgroundColor: gradientStroke1,
            borderWidth: 2,
            fill: true,
            data: [150.3, 280.7, 200.5, 320.1, 180.6, 250.8, 300.2, 210.4, 270.9, 190.0 ],
            maxBarThickness: 6
          },
          {
            label: "Par Sensor",
            borderWidth: 0,
            pointRadius: 2,
            borderColor: "#bfb10f",
            backgroundColor: gradientStroke1,
            borderWidth: 2,
            fill: true,
            data: [482, 763, 215, 689, 374, 921, 150, 567, 842, 103],
            maxBarThickness: 6
          }
        ],
      },
      options: {
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
              color: '#fbfbfb',
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
      },
    });
  </script>
@endsection