@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                        </div>
                    </div>
                </div>
            </div>
              <h4>About</h4>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Major</th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th> -->
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Social Media</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Parsaulin</h6>
                            <p class="text-xs text-secondary mb-0">parsaulin@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Informatics</p>
                        <p class="text-xs text-secondary mb-0">Faculty of Industrial Technology</p>
                      </td>
                      <!-- <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td> -->
                      <td class="align-middle text-center">
                      <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
                        <span class="text-secondary text-xs font-weight-bold">
                          <i class="fa-brands fa-square-instagram fa-2xl"></i>
                          </span>
                      </a>
                        </td>
                      
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Hanafi Abdillah</h6>
                            <p class="text-xs text-secondary mb-0">handilah81@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Informatics</p>
                        <p class="text-xs text-secondary mb-0">Faculty of Industrial Technology</p>
                      </td>
                      <!-- <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td> -->
                      <td class="align-middle text-center">
                      <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
                        <span class="text-secondary text-xs font-weight-bold">
                          <i class="fa-brands fa-square-instagram fa-2xl"></i>
                          </span>
                      </a>
                        </td>
                      
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Muhammad Amar Manfaluthi</h6>
                            <p class="text-xs text-secondary mb-0">amarmanfaluthi11@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Informatics</p>
                        <p class="text-xs text-secondary mb-0">Faculty of Industrial Technology</p>
                      </td>
                      <!-- <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td> -->
                      <td class="align-middle text-center">
                      <a href="https://www.instagram.com/amarmanfaluthi11" target="_blank" rel="noopener noreferrer">
                        <span class="text-secondary text-xs font-weight-bold">
                          <i class="fa-brands fa-square-instagram fa-2xl"></i>
                          </span>
                      </a>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
@endsection