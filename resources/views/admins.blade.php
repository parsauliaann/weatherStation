@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <button type="button" style="float:right;" data-bs-toggle="modal" data-bs-target="#modalForm" class="btn btn-primary btn-rounded" data-mdb-ripple-init >Add Admin</button>
              <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admins.store') }}" method="POST">
                              @csrf

                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username@email.com"  required/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="name" placeholder="Nama" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="" required />
                                </div>
                                <div class="mb-3">
                                  <label class="form-label">Status</label>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status_dosen" value="dosen">
                                    <label class="form-check-label" for="status_dosen">
                                      Dosen
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status_mahasiswa" value="mahasiswa" checked>
                                    <label class="form-check-label" for="status_mahasiswa">
                                      Mahasiswa
                                    </label>
                                  </div>
                                </div>
                                <div class="modal-footer d-block">
                                    <button type="submit" class="btn btn-info float-end">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
              <h4>Admins</h4>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Nama</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($admins as $admin)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $admin->username }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm
                         font-weight-bold mb-0">{{ $admin->name }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{ $admin->status }}</h6>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection