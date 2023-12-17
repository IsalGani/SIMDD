@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data Dana Desa</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Desa</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"></th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-lg">Bongo</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#rincianBongo">
                          Rincian
                        </button>
                        @include('layouts.modal')
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-lg">Buhudaa</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#rincianBongo">
                          Rincian
                        </button>
                        @include('layouts.modal')
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-lg">Lopo</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#rincianBongo">
                          Rincian
                        </button>
                        @include('layouts.modal')
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-lg">Kayubulan</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#rincianBongo">
                          Rincian
                        </button>
                        @include('layouts.modal')
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-lg">Biluhu Timur</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#rincianBongo">
                          Rincian
                        </button>
                        @include('layouts.modal')
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-lg">Tontayuo</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#rincianBongo">
                          Rincian
                        </button>
                        @include('layouts.modal')
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-lg">Langgula</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#rincianBongo">
                          Rincian
                        </button>
                        @include('layouts.modal')
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-lg">Lamu</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#rincianBongo">
                          Rincian
                        </button>
                        @include('layouts.modal')
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-lg">Limoo'o</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#rincianBongo">
                          Rincian
                        </button>
                        @include('layouts.modal')
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  @endsection
