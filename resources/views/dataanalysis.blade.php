<!DOCTYPE html>
<html lang="en">
<head >
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/gundar.png') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
  <title>
    Dashboard Weather Station S475
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/b7f80dc676.js" crossorigin="anonymous"></script>
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('css/argon-dashboard.css') }}" rel="stylesheet" />
</head>

<body style="background-image: linear-gradient(to top, #209cff 0%, #68e0cf 100%);">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <img src="{{asset('img/ugtechnopark.png')}}" style="height:120px; object-fit: contain">
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
                            >Wind Speed</a
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
                        <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                  <table id="tableWindDirection" class="table table-striped" style="width:100%">
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
                        <div class="tab-pane fade" id="ex3-tabs-5" role="tabpanel" aria-labelledby="ex3-tab-5">
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
                        <div class="tab-pane fade" id="ex3-tabs-6" role="tabpanel" aria-labelledby="ex3-tab-6">
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
                        <div class="tab-pane fade" id="ex3-tabs-7" role="tabpanel" aria-labelledby="ex3-tab-7">
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
                        <div class="tab-pane fade" id="ex3-tabs-8" role="tabpanel" aria-labelledby="ex3-tab-8">
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
                    </div>
                    <!-- Tabs content -->
                </div>
              </div>
            </div>
          </div>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
    <i class="fa-solid fa-bars" style="color: #1a9957;"></i>
    </a>
    <div class="card shadow-sm">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
      </div>
      <hr class="horizontal dark my-1">
      <a class="btn bg-gradient-dark w-100" href="{{ route('dashboard') }}">Dashboard</a>
        <a class="btn btn-outline-dark w-100" href="tables.php">Table</a>
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('js/core/popper.min.js') }}"></script>
  <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('js/argon-dashboard.min.js?v=2.0.4') }}"></script>
  <script>
    document.getElementById('closeNav').addEventListener('click', function(){
      const el = document.getElementById("sidenav-main")

      if(el.classList.contains('hide')){
        el.style.width = "16.75rem";
        el.classList.remove('hide');
      }else{
        el.style.width = "0";
        el.classList.add('hide');
      }
    })
  </script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <script>
    new DataTable('#tableWindSpeed', {
      ajax: "/api/sensor-datas" + '?parameter=wind_speed'
    });
    new DataTable('#tableWindDirection', {
      ajax: "/api/sensor-datas" + '?parameter=wind_direction'
    });
    new DataTable('#tableTemperature', {
      ajax: "/api/sensor-datas" + '?parameter=temperature'
    });
    new DataTable('#tableHumidity', {
      ajax: "/api/sensor-datas" + '?parameter=humidity'
    });
    new DataTable('#tablePressure', {
      ajax: "/api/sensor-datas" + '?parameter=pressure'
    });
    new DataTable('#tableRainfall', {
      ajax: "/api/sensor-datas" + '?parameter=rainfall'
    });
    new DataTable('#tableSolarRadiation', {
      ajax: "/api/sensor-datas" + '?parameter=solar_radiation'
    });
    new DataTable('#tablePARSensor', {
      ajax: "/api/sensor-datas" + '?parameter=par_sensor'
    });
  </script>
</body>
</html>